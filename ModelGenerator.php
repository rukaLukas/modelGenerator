<?php
include 'Stream.php';

/**
 * Class ModelGenerator
 * Perform creation of PHP model classes from an mysql schema provided
 *
 * @author Lucas Figueiredo <lukas.figueiredo@hotmail.com>
*/
class ModelGenerator
{


    private $allTables = array();
    private $fields = array();
    private $types = array();
    private $nomeClasse = array();
    private $stream;


    function __construct($fileName, $pathFile)
    {
        $this->stream = new Stream();
        $this->stream->fileName = $fileName;
        $this->stream->pathFile = $pathFile;
    }

    public function run()
    {

        $contentFile = $this->stream->readFileIntoString();
        $this->getAllTables($contentFile);
        $this->getNameClass();
        $this->getFieldsAndTypes();

        $this->createModel();
    }

    /**
     * Get all tables into array
     *
     * @param String $schema
     * @return void
     */
    private function getAllTables($schema)
    {
        $pattern = '/CREATE TABLE `[a-z_]+` \(\n(.*\n.\)?){1,}/';
        preg_match_all($pattern, $schema, $matches);

        foreach ($matches as $value) {
            foreach ($value as $value) {
                $this->allTables[] = $value;
            }
        }
    }

    /**
     * Get name each table that will be to used as name of class file model
     *
     * @return void
     */
    private function getNameClass()
    {
        foreach ($this->allTables as $value) {
            preg_match('/CREATE TABLE `[a-z_]+`/', $value, $matchesNomeClasse);
            if ($matchesNomeClasse) {
                $search = array('CREATE TABLE', ' ', '`');
                $replace = array('', '', '');
                $this->nomeClasse[] = str_replace($search, $replace, $matchesNomeClasse[0]);
            }
        }
    }

    /**
     * Get each column and your type
     *
     * @return void
     */
    private function getFieldsAndTypes()
    {
        
        for ($i = 0; $i < count($this->allTables); $i++) {
            $table = $this->allTables[$i];
            $pattern = "`[a-z_0-9]+` (int|decimal|tinyint|varchar|text|datetime|timestamp)([(][0-9]{1,3}[)])?";
            preg_match_all("/$pattern/", $this->allTables[$i], $matches);

            foreach ($matches[0] as $value) {
                $separado = explode(' ', $value);

                $field = str_replace('`', '', $separado[0]);
                if (strpos($field, '_')) {
                    $field = $this->formatCamelCase($field);
                }

                $this->fields[$i][] = $field;
                $this->types[$i][] = $separado[1];
            }
        }
    }

    /**
     * Create files of models
     *
     * @return void
     */
    private function createModel()
    {

        $contentFile = "";
        $ret = "";
        // loop through tables setting fields that belongs each table
        for ($i = 0; $i < count($this->nomeClasse); $i++) {
            $ret .= "<?php \n";
            $ret .= "class " . ucfirst($this->nomeClasse[$i]) . "{\n\n";

            // Create Attributes
            for ($i2 = 0; $i2 < count($this->fields[$i]); $i2++) {
                $ret .= "\tprivate $" . $this->fields[$i][$i2] . ";\n";
            }
            $ret .= "\n\n";

            // Create setters and getters
            foreach ($this->fields[$i] as $value) {
                $ret .= $this->getters($value);
                $ret .= $this->setters($value);
            }

            $ret .= "\n}";

            // create file
            $this->stream->createWriteFile($ret, ucfirst($this->nomeClasse[$i]) . '.php');

            $ret = "";
        }

        echo "Done!";
    }

    /**
     * Format name of attributes in style camelCase. e.g. third_party = thirdParty
     *
     * @param String $string
     * @return String
     */
    private function formatCamelCase($string)
    {

        $separa = explode('_', $string);
        $contador = 0;
        $newString = '';
        foreach ($separa as $value) {
            if ($contador > 0) {
                $value = ucfirst($value);
            }

            $newString .= $value;

            $contador++;
        }

        return $newString;
    }

    /**
     * Create setter of each attribute of model
     *
     * @param String $field
     * @return String
     */
    private function setters($field)
    {

        $ret = '';
        $ret .= "\tpublic function set" . ucfirst($field) . "($" . $field . ") {\n";
        $ret .=     "\t\t\$this->" . $field . " = $" . $field . ";";
        $ret .= "\n\t}\n";

        return $ret;
    }

    /**
     * Create getter of each attribute of model
     *
     * @param String $field
     * @return String
     */
    private function getters($field)
    {

        $ret = '';
        $ret .= "\tpublic function get" . ucfirst($field) . "() {\n";
        $ret .=     "\t\treturn \$this->" . $field . ";";
        $ret .= "\n\t}\n";

        return $ret;
    }
}
