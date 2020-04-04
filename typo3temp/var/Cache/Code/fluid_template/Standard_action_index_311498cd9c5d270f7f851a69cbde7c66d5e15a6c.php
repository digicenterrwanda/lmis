<?php

class Standard_action_index_311498cd9c5d270f7f851a69cbde7c66d5e15a6c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<!--Header starts----->

';
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
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = \'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=280331765782209&autoLogAppEvents=1\';
  fjs.parentNode.insertBefore(js, fjs);
}(document, \'script\', \'facebook-jssdk\'));</script>
<!-- Header ends---->
<section class="main-content innbg ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['typoscriptObjectPath'] = NULL;
$arguments4['data'] = NULL;
$arguments4['currentValueKey'] = NULL;
$arguments4['table'] = '';
$arguments4['typoscriptObjectPath'] = 'lib.inntitre';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= 'box" style="max-width:1820px;margin-right: auto;margin-left: auto;">
    
    <div class="ce-textpic ce-center ce-above">
        <figure class="image">
            <img class="image-embed-item" src="typo3conf/ext/site_config/Resources/Public/images/headall.jpg" alt="" width="1820" height="161">
            </figure>
            </div>

        <div class="container">
            <div class="row">
        <h1 class="titlesub ">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments6 = array();
$arguments6['typoscriptObjectPath'] = NULL;
$arguments6['data'] = NULL;
$arguments6['currentValueKey'] = NULL;
$arguments6['table'] = '';
$arguments6['typoscriptObjectPath'] = 'lib.inntitre';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output0 .= ' </h1>
         </div>
              </div>
    </section>
    
    <section class="main-content ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments8 = array();
$arguments8['typoscriptObjectPath'] = NULL;
$arguments8['data'] = NULL;
$arguments8['currentValueKey'] = NULL;
$arguments8['table'] = '';
$arguments8['typoscriptObjectPath'] = 'lib.inntitre';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '2" style="background: #F4F5F8;">
        <div class="container bgwhite">
                   <div class="row">
                       <div class="col-sm-9">
                    <div class=" article-bg">
             
                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
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
$arguments23['typoscriptObjectPath'] = 'lib.contentmains';

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= ' 
                ';
return $output22;
};
$arguments20 = array();

$output19 .= '';

$output19 .= '
            ';
return $output19;
};
$arguments10 = array();
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$arguments10['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array15 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['typoscriptObjectPath'] = NULL;
$arguments16['data'] = NULL;
$arguments16['currentValueKey'] = NULL;
$arguments16['table'] = '';
$arguments16['typoscriptObjectPath'] = 'lib.contentmains';
$array15['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments10['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)
					),
					$renderingContext
				);
$arguments10['__thenClosure'] = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = NULL;
$arguments13['data'] = NULL;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$arguments13['typoscriptObjectPath'] = 'lib.contentmains';

$output12 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= ' 
                ';
return $output12;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
            
                    </div>
     </div>
     <div class="col-sm-3">
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
$arguments38['typoscriptObjectPath'] = 'lib.field_related_links';

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
$arguments31['typoscriptObjectPath'] = 'lib.field_related_links';
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
$arguments28['typoscriptObjectPath'] = 'lib.field_related_links';

$output27 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= ' 
                ';
return $output27;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
     </div>
              </div>

        </div>
    </section>
    
    
        <section class="main-content ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments40 = array();
$arguments40['typoscriptObjectPath'] = NULL;
$arguments40['data'] = NULL;
$arguments40['currentValueKey'] = NULL;
$arguments40['table'] = '';
$arguments40['typoscriptObjectPath'] = 'lib.inntitre';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '" >
        <div class="container">
                   <div class="row">
                    <div class= "article-bg">
             
                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output51 = '';

$output51 .= '
               
             ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['typoscriptObjectPath'] = NULL;
$arguments55['data'] = NULL;
$arguments55['currentValueKey'] = NULL;
$arguments55['table'] = '';
$arguments55['typoscriptObjectPath'] = 'lib.contentmainsection';

$output54 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= ' 
                ';
return $output54;
};
$arguments52 = array();

$output51 .= '';

$output51 .= '
            ';
return $output51;
};
$arguments42 = array();
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$arguments42['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['typoscriptObjectPath'] = NULL;
$arguments48['data'] = NULL;
$arguments48['currentValueKey'] = NULL;
$arguments48['table'] = '';
$arguments48['typoscriptObjectPath'] = 'lib.contentmainsection';
$array47['0'] = TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments42['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression50(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments42['__thenClosure'] = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['typoscriptObjectPath'] = NULL;
$arguments45['data'] = NULL;
$arguments45['currentValueKey'] = NULL;
$arguments45['table'] = '';
$arguments45['typoscriptObjectPath'] = 'lib.contentmainsection';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= ' 
                ';
return $output44;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
            
                    </div>
    
              </div>

        </div>
    </section>
    
          
    
    
    
    
     
    <!-- Footer Section Starts here -->
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['section'] = NULL;
$arguments57['partial'] = NULL;
$arguments57['delegate'] = NULL;
$arguments57['renderable'] = NULL;
$arguments57['arguments'] = array (
);
$arguments57['optional'] = false;
$arguments57['default'] = NULL;
$arguments57['contentAs'] = NULL;
$arguments57['partial'] = 'Footer';
$arguments57['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output0 .= '
        
    <script src="typo3conf/ext/site_config/Resources/Public/js/jquery_004.js" type="text/javascript"></script>
    <script src="typo3conf/ext/site_config/Resources/Public/js/owl.js" type="text/javascript"></script>
';

return $output0;
}


}
#