<?php
// no direct access
defined('_PEXEC') or die('Restricted access');

//echo "man to Base controller hastam";exit;
/**
 * POLSHOP  Component Base Controller
*/
class persianlatexControllerpersianlatexnew extends PComponent
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
        $comapplication->display('site_persianlatexnew.tpl.php');
    }
    function switchEditor()
    {
       if(isset($_POST['latexswitch']))
       { 
        $model = self::getModel('Site','persianlatex','site_persianlatexnew');
        $model->plswitch($_POST['latexswitch']);
        exit;
       }
    }
    function compilelatex()
    {
     if(isset($_POST['latexcontent']))
       { 
        $model = self::getModel('Site','persianlatex','site_persianlatexnew');
        $model->compilelatex($_POST['latexcontent']);
        exit;
       }
    }
  
 }
?>