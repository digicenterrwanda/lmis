<?php

class partial_Header_2e0977ccabfce9683b4a0ef4fb1372e45edcbadc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '        <header id="header" class="header">

        <div class="header__container">
            <div class="header__main no-desktop">
                <div class="container">
                    <a href="./">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = NULL;
$arguments1['data'] = NULL;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$arguments1['typoscriptObjectPath'] = 'lib.logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
                          </a>
                </div>
            </div>
            <div class="nav">
                <div class="container container--for-btn">
                        <button type="button" class="btn-toggle-search js-toggle-search toggle-search-desktop desktop-only">
                        <span class="visuallyhidden">Toggle Search Menu</span>
                        <i class="icon-search-dss"></i>
                    </button>
                </div>
                <div class="container container--for-nav">
                    <div class="no-desktop">
                        <button class="mobile-menu js-mobile-menu">
                            <span class="visuallyhidden">Toggle mobile menu</span>
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>                        </button>
                            
                           
                    </div>
                    <div class="nav-container">
                        <div class="header__search-bar mobile-search">
 <form method="get" action="index.php?id=129" name="xajax_form_kesearch_pi1" style="width:100%" id="my_form">
             <input type="hidden" value="129" name="id">
             <input id="siteSearchMobile" type="text" placeholder="What are you looking for?" name="tx_kesearch_pi1[sword]" />
            <input type="hidden" value="1" name="tx_kesearch_pi1[page]">  
 
      <input type="hidden" value="0" name="tx_kesearch_pi1[resetFilters]" id="resetFilters">
      <input type="hidden" value="" name="tx_kesearch_pi1[sortByField]" id="sortByField">
      <input type="hidden" value="" name="tx_kesearch_pi1[sortByDir]" id="sortByDir">
      
      
      
       
                 <button type="button" class="btn-search" id="searchMobile">
                           <span class="visuallyhidden">Submit search</span>
                                <i class="icon-search-dss"></i>              
                            </button>
 
          </form> 

                          
                        </div>
                        <div id="navigation_0_DivCode">
                            <div class="main-nav">
                           <div class="header-nav">   
            <div class=""> 
                <div class="navbar">
		<div class="lvl1 desktop-only ">
     <a href="./" class="logo">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['typoscriptObjectPath'] = NULL;
$arguments3['data'] = NULL;
$arguments3['currentValueKey'] = NULL;
$arguments3['table'] = '';
$arguments3['typoscriptObjectPath'] = 'lib.logo';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= ' </a>

                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = NULL;
$arguments5['data'] = NULL;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$arguments5['typoscriptObjectPath'] = 'lib.mainNavi';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
                     
                   
                </div>
                
        	<div class="lvl1 no-desktop">
    

                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['typoscriptObjectPath'] = NULL;
$arguments7['data'] = NULL;
$arguments7['currentValueKey'] = NULL;
$arguments7['table'] = '';
$arguments7['typoscriptObjectPath'] = 'lib.mainNavimobile';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
                     
                   
                </div>
                
                
                
                
            </div>
        </div>
				
                        
                    </div>
                </div>









                <div class="header__search-bar desktop-search desktop-only">
                    <div class="container">
                        <i class="icon-search-dss"></i>


                        <label for="siteSearchDesktop" class="visuallyhidden">Search</label>
 
 <form method="get" action="index.php?id=129" name="xajax_form_kesearch_pi1" style="width:100%" id="my_form">
             <input type="hidden" value="129" name="id">
             <input id="siteSearchDesktop" type="text" placeholder="What are you looking for?" name="tx_kesearch_pi1[sword]" />
            <input type="hidden" value="1" name="tx_kesearch_pi1[page]">  
 
      <input type="hidden" value="0" name="tx_kesearch_pi1[resetFilters]" id="resetFilters">
      <input type="hidden" value="" name="tx_kesearch_pi1[sortByField]" id="sortByField">
      <input type="hidden" value="" name="tx_kesearch_pi1[sortByDir]" id="sortByDir">
      
      
      
       
                        <a class="btn btn--orange" type="submit" id="searchDesktop" href="javascript:{}" onclick="document.getElementById(\'my_form\').submit(); return false;">
                            <span><span>Search</span></span>                        </a>    
 
          </form>                       
                        
                        
                        
                        
                                       </div>
                </div>
            </div>
        </div>
    </header>';

return $output0;
}


}
#