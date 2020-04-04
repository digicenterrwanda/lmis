<?php

class Standard_action_index_e2c2474d6cc11541950567ff9c787524825e38bc extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['section'] = NULL;
$arguments1['partial'] = NULL;
$arguments1['delegate'] = NULL;
$arguments1['renderable'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['optional'] = false;
$arguments1['default'] = NULL;
$arguments1['contentAs'] = NULL;
$arguments1['partial'] = 'Header';
$arguments1['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

  <main id="main" class="main is-homepage">
  
        <div class="home-banner">
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = NULL;
$arguments17['data'] = NULL;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$arguments17['typoscriptObjectPath'] = 'lib.contentmain';

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= ' 
                ';
return $output16;
};
$arguments14 = array();

$output13 .= '';

$output13 .= '
            ';
return $output13;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['typoscriptObjectPath'] = NULL;
$arguments10['data'] = NULL;
$arguments10['currentValueKey'] = NULL;
$arguments10['table'] = '';
$arguments10['typoscriptObjectPath'] = 'lib.contentmain';
$array9['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression12(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
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
$arguments7['typoscriptObjectPath'] = 'lib.contentmain';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= ' 
                ';
return $output6;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>


        </div>
        
        
        
        
        
   <div class="c-indicators">
            <div id="keyindicator_0_DivCode">
                <div class="container">
                    <div class="c-indicators__list">

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['typoscriptObjectPath'] = NULL;
$arguments19['data'] = NULL;
$arguments19['currentValueKey'] = NULL;
$arguments19['table'] = '';
$arguments19['typoscriptObjectPath'] = 'lib.content401';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output0 .= '
                       

                    </div>
                </div>
            </div>


        </div>       
        
        
        
        
        
        
        
        
        
		


   <div class="shortcut-links">
            <div id="shortcutlinks_0_DivCode">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <a id="shortcutlinks_0_RptShortcutLinks_HypLnkShortcutLink_0" style="padding: 0px !important;" class="shortcut-links__item matchHeight" rel="nofollow noopener noreferrer">
           
                                <span id="shortcutlinks_0_RptShortcutLinks_LblTitle_0">Find by Labor</span>
								
								<div class="custom-select" style="width:100%;">
  <select>
    
    <option>Find By Labor</option>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['typoscriptObjectPath'] = NULL;
$arguments21['data'] = NULL;
$arguments21['currentValueKey'] = NULL;
$arguments21['table'] = '';
$arguments21['typoscriptObjectPath'] = 'lib.findbylabor';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
   
   
  </select>
</div>
								
								
								
                              
                            </a>
                        </div>

                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <a id="shortcutlinks_0_RptShortcutLinks_HypLnkShortcutLink_1" class="shortcut-links__item matchHeight" rel="nofollow noopener noreferrer" href="#" target="_blank">
                                <img id="shortcutlinks_0_RptShortcutLinks_ImgShortcutLink_1" src="typo3conf/ext/site_config/Resources/Public/images/icon_table.png" alt="Table" style="height:33px;width:34px;" />
                                <span id="shortcutlinks_0_RptShortcutLinks_LblTitle_1">Create Your Own Statistics</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>

                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <a id="shortcutlinks_0_RptShortcutLinks_HypLnkShortcutLink_2" class="shortcut-links__item matchHeight" rel="nofollow noopener noreferrer" href="#" target="_self">
                                <img id="shortcutlinks_0_RptShortcutLinks_ImgShortcutLink_2" src="typo3conf/ext/site_config/Resources/Public/images/icon_surveys.png" alt="Surveys" style="height:33px;width:34px;" />
                                <span id="shortcutlinks_0_RptShortcutLinks_LblTitle_2">Reports</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>

                        <div class="col-xs-6 col-md-3 col-sm-3">
                            <a id="shortcutlinks_0_RptShortcutLinks_HypLnkShortcutLink_3" class="shortcut-links__item matchHeight" rel="nofollow noopener noreferrer" href="index.php?id=130" target="_self">
                                <img id="shortcutlinks_0_RptShortcutLinks_ImgShortcutLink_3" src="typo3conf/ext/site_config/Resources/Public/images/icon_calendar.png" alt="Calendar" style="height:33px;width:34px;" />
                                <span id="shortcutlinks_0_RptShortcutLinks_LblTitle_3">Calendar</span>
                                <i class="icon icon-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
 </div>
        <div class="section section--bmt section--bmb bg2section">
            <div class="container">
                <div class="row ">
				  <h2 class="title section-title">Key Labor Market Indicators</h2>
				  
                    <div class="col-xs-12 col-sm-8 col-md-12">
                        <div style="padding: 10px;">
                            <div class="latest-highlights matchHeight">
                              
  <div class="row">
  
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['typoscriptObjectPath'] = NULL;
$arguments23['data'] = NULL;
$arguments23['currentValueKey'] = NULL;
$arguments23['table'] = '';
$arguments23['typoscriptObjectPath'] = 'lib.content405';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output0 .= '
  
  
  

  </div>

</div>					   

                                </div>
                            </div>
                     

              
				
        
            </div>
        </div>
		 </div>
		
		
	   <div class="section section--bmt section--bmb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-6">
                        <div class="bg3section" >
                            <div class="latest-highlights matchHeight">
                                <h2 class="title section-title">LATEST PUBLICATIONS</h2>
                              
                              
                              
                              
                           <ul id="dairynews">

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['typoscriptObjectPath'] = NULL;
$arguments38['data'] = NULL;
$arguments38['currentValueKey'] = NULL;
$arguments38['table'] = '';
$arguments38['typoscriptObjectPath'] = 'lib.content402';

$output37 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= ' 
                      
                ';
return $output37;
};
$arguments35 = array();

$output34 .= '';

$output34 .= '
            ';
return $output34;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['typoscriptObjectPath'] = NULL;
$arguments31['data'] = NULL;
$arguments31['currentValueKey'] = NULL;
$arguments31['table'] = '';
$arguments31['typoscriptObjectPath'] = 'lib.content402';
$array30['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments25['__thenClosure'] = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments28 = array();
$arguments28['typoscriptObjectPath'] = NULL;
$arguments28['data'] = NULL;
$arguments28['currentValueKey'] = NULL;
$arguments28['table'] = '';
$arguments28['typoscriptObjectPath'] = 'lib.content402';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= ' 
                      
                ';
return $output27;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '                                         
                                  
                                            </ul>
                                </div>
                            </div>
                        </div>

                   <div class="col-xs-12 col-sm-7 col-md-6">
                        <div class="latesthighlights_0_DivCode bg3section">
                            <div class="latest-highlights matchHeight">
                                <h2 class="title section-title">ANNOUNCEMENTS</h2>
                                <div class="arrows"></div>
                              <ul id="dairynews">
		  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['typoscriptObjectPath'] = NULL;
$arguments53['data'] = NULL;
$arguments53['currentValueKey'] = NULL;
$arguments53['table'] = '';
$arguments53['typoscriptObjectPath'] = 'lib.content403';

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= ' 
                      
                ';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
            ';
return $output49;
};
$arguments40 = array();
$arguments40['then'] = NULL;
$arguments40['else'] = NULL;
$arguments40['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array45 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['typoscriptObjectPath'] = NULL;
$arguments46['data'] = NULL;
$arguments46['currentValueKey'] = NULL;
$arguments46['table'] = '';
$arguments46['typoscriptObjectPath'] = 'lib.content403';
$array45['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$expression48 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments40['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)
					),
					$renderingContext
				);
$arguments40['__thenClosure'] = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['typoscriptObjectPath'] = NULL;
$arguments43['data'] = NULL;
$arguments43['currentValueKey'] = NULL;
$arguments43['table'] = '';
$arguments43['typoscriptObjectPath'] = 'lib.content403';

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= ' 
                      
                ';
return $output42;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '        
			</ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

		
		
		
		
		<div class="section section--bmt section--bmb" style="background: #035B99;">
		<div class="container">
		<div class="col-sm-12">
		  <h2 style="text-align: center;color:#fff;width: 100%;padding: 30px 0px;font-size: 30px;
text-transform: uppercase;">Priority Sectors</h2>
		  </div>
		<div class="row">
		
		  <ul class="pnp__link-collection grid-x grid-margin-x small-up-1 medium-up-2 large-up-3 align-center " data-iteration="0" style="list-style-type: none;" id="pnp__RW0g0G">
		
			  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['typoscriptObjectPath'] = NULL;
$arguments68['data'] = NULL;
$arguments68['currentValueKey'] = NULL;
$arguments68['table'] = '';
$arguments68['typoscriptObjectPath'] = 'lib.content404';

$output67 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= ' 
                      
                ';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
            ';
return $output64;
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments61 = array();
$arguments61['typoscriptObjectPath'] = NULL;
$arguments61['data'] = NULL;
$arguments61['currentValueKey'] = NULL;
$arguments61['table'] = '';
$arguments61['typoscriptObjectPath'] = 'lib.content404';
$array60['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
                   
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['typoscriptObjectPath'] = NULL;
$arguments58['data'] = NULL;
$arguments58['currentValueKey'] = NULL;
$arguments58['table'] = '';
$arguments58['typoscriptObjectPath'] = 'lib.content404';

$output57 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= ' 
                      
                ';
return $output57;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '      
			
			
				
				 	
				 
				 	 
				
				</ul>
		</div>
		</div>
		</div>


        <div>


            <div id="usefullinks_2_DivCode">
                <div class="gov-logos">
                    <div class="container">
                        <div class="gov-logos__liist" style="width:100%">

                            <a id="usefullinks_2_RptGovLogos_HypLnkGovLogo_0" class="gov-logos__item" rel="nofollow noopener noreferrer" href="#" target="_blank">
                                <img id="usefullinks_2_RptGovLogos_ImgGovLogo_0" src="typo3conf/ext/site_config/Resources/Public/images/gov.png" alt="gov" />
                                </a>
                            <a id="usefullinks_2_RptGovLogos_HypLnkGovLogo_0" style="float:right;" class="gov-logos__item" rel="nofollow noopener noreferrer" href="#" target="_blank">
                                <img id="usefullinks_2_RptGovLogos_ImgGovLogo_0" src="typo3conf/ext/site_config/Resources/Public/images/rdb.jpg" alt="gov" /></a>
                            <!--<a id="usefullinks_2_RptGovLogos_HypLnkGovLogo_0" class="gov-logos__item" rel="nofollow noopener noreferrer" href="#" target="_blank">-->
                            <!--    <img id="usefullinks_2_RptGovLogos_ImgGovLogo_0" src="typo3conf/ext/site_config/Resources/Public/images/giz.png" alt="gov" /></a>-->
                            <!--<a id="usefullinks_2_RptGovLogos_HypLnkGovLogo_0" class="gov-logos__item" rel="nofollow noopener noreferrer" href="#" target="_blank">-->
                            <!--    <img id="usefullinks_2_RptGovLogos_ImgGovLogo_0" src="typo3conf/ext/site_config/Resources/Public/images/kora.png" alt="gov" /></a>-->
                            <!--<a id="usefullinks_2_RptGovLogos_HypLnkGovLogo_0" class="gov-logos__item" rel="nofollow noopener noreferrer" href="#" target="_blank">-->
                            <!--    <img id="usefullinks_2_RptGovLogos_ImgGovLogo_0" src="typo3conf/ext/site_config/Resources/Public/images/ilo.png" alt="gov" /></a>-->

                        </div>
                    </div>
                </div>
            </div>



        </div>
        <div class="backtotop__container">


            <div class="backtotop__screen">
                <button type="button" class="js-backtotop btn-backtotop" style="border: 2px solid white;"><i class="icon icon-arrow-top"></i><span class="vh">Back to</span><span>Top</span></button>
            </div>
        </div>
    </main>
    
    
   
        
    

    <!-- Footer Section Starts here -->
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['section'] = NULL;
$arguments70['partial'] = NULL;
$arguments70['delegate'] = NULL;
$arguments70['renderable'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['optional'] = false;
$arguments70['default'] = NULL;
$arguments70['contentAs'] = NULL;
$arguments70['partial'] = 'Footer';
$arguments70['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

return $output0;
}


}
#