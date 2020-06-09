<?php
// no direct access
defined('_PEXEC') or die('Restricted access');

//echo "man to Base controller hastam";exit;
/**
 * POLSHOP  Component Base Controller
*/
class persianlatexController extends PComponent
 {
    
    /**
     * constructor (registers additional tasks to methods)
     * @return void
     */
    function __construct()
    {

      parent::__construct();

    }
    /**
     * Method to display the view
     *
     * @access    public
    */
    function display()
    {
        
        // Load Smarty template file
        $comapplication = new ComponentApplication('Site','persianlatex',1);
        // Display the page
        $comapplication->display('site_persianlatex.tpl.php');
    }
    function compilelatex()
    {
     if(isset($_POST['latexcontent']))
       { 
        $model = self::getModel('Site','persianlatex','site_persianlatex');
        $model->compilelatex($_POST['latexcontent']);
        exit;
       }
    }

 }
?>