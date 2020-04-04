<?php

class partial_List_Item_9b8e501d7ab6fed2d471b9bba85ce264d8da3f0d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'n' => 
  array (
    0 => 'GeorgRinger\\News\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<!--
  =====================
    Partials/List/Item.html
-->
';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['newsItem'] = NULL;
$array3 = array (
);$arguments1['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [GeorgRinger\News\ViewHelpers\ExcludeDisplayedNewsViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

  
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
        

        
        
	  ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['alt'] = NULL;
$arguments163['file'] = NULL;
$arguments163['additionalConfig'] = array (
);
$arguments163['width'] = NULL;
$arguments163['height'] = NULL;
$arguments163['cropVariant'] = 'default';
$output165 = '';

$output165 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array166 = array (
);
$output165 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array166);
$arguments163['id'] = $output165;
$arguments163['class'] = 'img-responsive';
$array167 = array (
);$arguments163['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array167);
$array168 = array (
);$arguments163['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array168);
$array169 = array (
);$arguments163['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array169);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$array175 = array (
);$arguments170['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array175);
$array176 = array (
);$arguments170['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array176);
$arguments163['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array180 = array (
);$array179['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array180);

$expression181 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression181(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);
$array182 = array (
);$arguments177['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array182);
$arguments177['else'] = '';
$arguments163['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);
$arguments163['style'] = 'height:58px;width:55px;';

$output162 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
              ';
return $output162;
};
$arguments160 = array();

$output159 .= '';

$output159 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['additionalAttributes'] = NULL;
$arguments192['data'] = NULL;
$arguments192['class'] = NULL;
$arguments192['dir'] = NULL;
$arguments192['id'] = NULL;
$arguments192['lang'] = NULL;
$arguments192['style'] = NULL;
$arguments192['title'] = NULL;
$arguments192['accesskey'] = NULL;
$arguments192['tabindex'] = NULL;
$arguments192['onclick'] = NULL;
$arguments192['alt'] = NULL;
$arguments192['ismap'] = NULL;
$arguments192['longdesc'] = NULL;
$arguments192['usemap'] = NULL;
$arguments192['src'] = NULL;
$arguments192['treatIdAsReference'] = NULL;
$arguments192['image'] = NULL;
$arguments192['crop'] = NULL;
$arguments192['cropVariant'] = 'default';
$arguments192['width'] = NULL;
$arguments192['height'] = NULL;
$arguments192['minWidth'] = NULL;
$arguments192['minHeight'] = NULL;
$arguments192['maxWidth'] = NULL;
$arguments192['maxHeight'] = NULL;
$arguments192['absolute'] = false;
$output194 = '';

$output194 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array195 = array (
);
$output194 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array195);
$arguments192['id'] = $output194;
$arguments192['class'] = 'img-dummy img-responsive';
$array196 = array (
);$arguments192['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array196);
$arguments192['title'] = '';
$arguments192['alt'] = '';
$array197 = array (
);$arguments192['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array197);
$array198 = array (
);$arguments192['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array198);
$arguments192['style'] = 'height:58px;width:55px;';

$output191 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
                ';
return $output191;
};
$arguments186 = array();
$arguments186['then'] = NULL;
$arguments186['else'] = NULL;
$arguments186['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array188 = array();
$array189 = array (
);$array188['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array189);

$expression190 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments186['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression190(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)
					),
					$renderingContext
				);
$arguments186['__thenClosure'] = $renderChildrenClosure187;

$output185 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
              ';
return $output185;
};
$arguments183 = array();
$arguments183['if'] = NULL;

$output159 .= '';

$output159 .= '
            ';
return $output159;
};
$arguments119 = array();
$arguments119['then'] = NULL;
$arguments119['else'] = NULL;
$arguments119['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array156 = array();
$array157 = array (
);$array156['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array157);

$expression158 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments119['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression158(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array156)
					),
					$renderingContext
				);
$arguments119['__thenClosure'] = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['alt'] = NULL;
$arguments122['file'] = NULL;
$arguments122['additionalConfig'] = array (
);
$arguments122['width'] = NULL;
$arguments122['height'] = NULL;
$arguments122['cropVariant'] = 'default';
$output124 = '';

$output124 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array125 = array (
);
$output124 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array125);
$arguments122['id'] = $output124;
$arguments122['class'] = 'img-responsive';
$array126 = array (
);$arguments122['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array126);
$array127 = array (
);$arguments122['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array127);
$array128 = array (
);$arguments122['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array128);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$array134 = array (
);$arguments129['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array134);
$array135 = array (
);$arguments129['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array135);
$arguments122['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$array141 = array (
);$arguments136['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array141);
$arguments136['else'] = '';
$arguments122['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);
$arguments122['style'] = 'height:58px;width:55px;';

$output121 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
              ';
return $output121;
};
$arguments119['__elseClosures'][] = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['alt'] = NULL;
$arguments149['ismap'] = NULL;
$arguments149['longdesc'] = NULL;
$arguments149['usemap'] = NULL;
$arguments149['src'] = NULL;
$arguments149['treatIdAsReference'] = NULL;
$arguments149['image'] = NULL;
$arguments149['crop'] = NULL;
$arguments149['cropVariant'] = 'default';
$arguments149['width'] = NULL;
$arguments149['height'] = NULL;
$arguments149['minWidth'] = NULL;
$arguments149['minHeight'] = NULL;
$arguments149['maxWidth'] = NULL;
$arguments149['maxHeight'] = NULL;
$arguments149['absolute'] = false;
$output151 = '';

$output151 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array152 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array152);
$arguments149['id'] = $output151;
$arguments149['class'] = 'img-dummy img-responsive';
$array153 = array (
);$arguments149['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array153);
$arguments149['title'] = '';
$arguments149['alt'] = '';
$array154 = array (
);$arguments149['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array154);
$array155 = array (
);$arguments149['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array155);
$arguments149['style'] = 'height:58px;width:55px;';

$output148 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);

$output148 .= '
                ';
return $output148;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array146 = array (
);$array145['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array146);

$expression147 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression147(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = $renderChildrenClosure144;

$output142 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
              ';
return $output142;
};

$output118 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
<span id="keyindicator_0_RptKeyIndicators_LblTitle_';
$array199 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array199)]);

$output118 .= '" class="title"> ';
$array200 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array200)]);

$output118 .= '</span>
<span class="number">
<span>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure202 = function() use ($renderingContext, $self) {
$array203 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array203);
};
$arguments201 = array();
$arguments201['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext);

$output118 .= '
</span>
</span>
<span id="keyindicator_0_RptKeyIndicators_LblDescription_';
$array204 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array204)]);

$output118 .= '" class="desc">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$array207 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array207);
};
$arguments205 = array();
$arguments205['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output118 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output118 .= '
</span>
	
	 ';
return $output118;
};
$arguments111 = array();
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['newsItem'] = NULL;
$arguments111['settings'] = array (
);
$arguments111['uriOnly'] = false;
$arguments111['configuration'] = array (
);
$arguments111['content'] = '';
$arguments111['section'] = NULL;
$array113 = array (
);$arguments111['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array113);
$array114 = array (
);$arguments111['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array114);
$array115 = array (
);$arguments111['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array115);
$output116 = '';

$output116 .= 'keyindicator_0_RptKeyIndicators_HypLnkKeyIndicatorLink_';
$array117 = array (
);
$output116 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array117);
$arguments111['id'] = $output116;
$arguments111['class'] = 'c-indicators__item';

$output110 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '
	 ';
return $output110;
};
$arguments108 = array();

$output107 .= '';

$output107 .= '
  ';
return $output107;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array105);
$array104['1'] = ' == 1';

$expression106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        

        
        
	  ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output14 = '';

$output14 .= '
 

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$output58 = '';

$output58 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['alt'] = NULL;
$arguments59['file'] = NULL;
$arguments59['additionalConfig'] = array (
);
$arguments59['width'] = NULL;
$arguments59['height'] = NULL;
$arguments59['cropVariant'] = 'default';
$output61 = '';

$output61 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array62 = array (
);
$output61 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array62);
$arguments59['id'] = $output61;
$arguments59['class'] = 'img-responsive';
$array63 = array (
);$arguments59['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array63);
$array64 = array (
);$arguments59['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array64);
$array65 = array (
);$arguments59['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array65);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array69);

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$array71 = array (
);$arguments66['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array71);
$array72 = array (
);$arguments66['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array72);
$arguments59['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$array78 = array (
);$arguments73['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array78);
$arguments73['else'] = '';
$arguments59['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
$arguments59['style'] = 'height:58px;width:55px;';

$output58 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output58 .= '
              ';
return $output58;
};
$arguments56 = array();

$output55 .= '';

$output55 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$output81 = '';

$output81 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['alt'] = NULL;
$arguments88['ismap'] = NULL;
$arguments88['longdesc'] = NULL;
$arguments88['usemap'] = NULL;
$arguments88['src'] = NULL;
$arguments88['treatIdAsReference'] = NULL;
$arguments88['image'] = NULL;
$arguments88['crop'] = NULL;
$arguments88['cropVariant'] = 'default';
$arguments88['width'] = NULL;
$arguments88['height'] = NULL;
$arguments88['minWidth'] = NULL;
$arguments88['minHeight'] = NULL;
$arguments88['maxWidth'] = NULL;
$arguments88['maxHeight'] = NULL;
$arguments88['absolute'] = false;
$output90 = '';

$output90 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array91 = array (
);
$output90 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array91);
$arguments88['id'] = $output90;
$arguments88['class'] = 'img-dummy img-responsive';
$array92 = array (
);$arguments88['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array92);
$arguments88['title'] = '';
$arguments88['alt'] = '';
$array93 = array (
);$arguments88['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array93);
$array94 = array (
);$arguments88['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array94);
$arguments88['style'] = 'height:58px;width:55px;';

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                ';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array85);

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output81 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
              ';
return $output81;
};
$arguments79 = array();
$arguments79['if'] = NULL;

$output55 .= '';

$output55 .= '
            ';
return $output55;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array52 = array();
$array53 = array (
);$array52['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array53);

$expression54 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression54(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['additionalAttributes'] = NULL;
$arguments18['data'] = NULL;
$arguments18['class'] = NULL;
$arguments18['dir'] = NULL;
$arguments18['id'] = NULL;
$arguments18['lang'] = NULL;
$arguments18['style'] = NULL;
$arguments18['title'] = NULL;
$arguments18['accesskey'] = NULL;
$arguments18['tabindex'] = NULL;
$arguments18['onclick'] = NULL;
$arguments18['alt'] = NULL;
$arguments18['file'] = NULL;
$arguments18['additionalConfig'] = array (
);
$arguments18['width'] = NULL;
$arguments18['height'] = NULL;
$arguments18['cropVariant'] = 'default';
$output20 = '';

$output20 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array21 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array21);
$arguments18['id'] = $output20;
$arguments18['class'] = 'img-responsive';
$array22 = array (
);$arguments18['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array22);
$array23 = array (
);$arguments18['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array23);
$array24 = array (
);$arguments18['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array24);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['then'] = NULL;
$arguments25['else'] = NULL;
$arguments25['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array28);

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments25['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$array30 = array (
);$arguments25['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array30);
$array31 = array (
);$arguments25['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array31);
$arguments18['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['then'] = NULL;
$arguments32['else'] = NULL;
$arguments32['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array34 = array();
$array35 = array (
);$array34['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array35);

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments32['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression36(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)
					),
					$renderingContext
				);
$array37 = array (
);$arguments32['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array37);
$arguments32['else'] = '';
$arguments18['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
$arguments18['style'] = 'height:58px;width:55px;';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
              ';
return $output17;
};
$arguments15['__elseClosures'][] = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['additionalAttributes'] = NULL;
$arguments45['data'] = NULL;
$arguments45['class'] = NULL;
$arguments45['dir'] = NULL;
$arguments45['id'] = NULL;
$arguments45['lang'] = NULL;
$arguments45['style'] = NULL;
$arguments45['title'] = NULL;
$arguments45['accesskey'] = NULL;
$arguments45['tabindex'] = NULL;
$arguments45['onclick'] = NULL;
$arguments45['alt'] = NULL;
$arguments45['ismap'] = NULL;
$arguments45['longdesc'] = NULL;
$arguments45['usemap'] = NULL;
$arguments45['src'] = NULL;
$arguments45['treatIdAsReference'] = NULL;
$arguments45['image'] = NULL;
$arguments45['crop'] = NULL;
$arguments45['cropVariant'] = 'default';
$arguments45['width'] = NULL;
$arguments45['height'] = NULL;
$arguments45['minWidth'] = NULL;
$arguments45['minHeight'] = NULL;
$arguments45['maxWidth'] = NULL;
$arguments45['maxHeight'] = NULL;
$arguments45['absolute'] = false;
$output47 = '';

$output47 .= 'keyindicator_0_RptKeyIndicators_ImgLogo_';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array48);
$arguments45['id'] = $output47;
$arguments45['class'] = 'img-dummy img-responsive';
$array49 = array (
);$arguments45['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array49);
$arguments45['title'] = '';
$arguments45['alt'] = '';
$array50 = array (
);$arguments45['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array50);
$array51 = array (
);$arguments45['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array51);
$arguments45['style'] = 'height:58px;width:55px;';

$output44 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                ';
return $output44;
};
$arguments39 = array();
$arguments39['then'] = NULL;
$arguments39['else'] = NULL;
$arguments39['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array41 = array();
$array42 = array (
);$array41['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array42);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments39['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)
					),
					$renderingContext
				);
$arguments39['__thenClosure'] = $renderChildrenClosure40;

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
              ';
return $output38;
};

$output14 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
<span id="keyindicator_0_RptKeyIndicators_LblTitle_';
$array95 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array95)]);

$output14 .= '" class="title"> ';
$array96 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array96)]);

$output14 .= '</span>
<span class="number">
<span>
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$array99 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array99);
};
$arguments97 = array();
$arguments97['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output14 .= '
</span>
</span>
<span id="keyindicator_0_RptKeyIndicators_LblDescription_';
$array100 = array (
);
$output14 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array100)]);

$output14 .= '" class="desc">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$array103 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array103);
};
$arguments101 = array();
$arguments101['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output14 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output14 .= '
</span>
	
	 ';
return $output14;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['newsItem'] = NULL;
$arguments7['settings'] = array (
);
$arguments7['uriOnly'] = false;
$arguments7['configuration'] = array (
);
$arguments7['content'] = '';
$arguments7['section'] = NULL;
$array9 = array (
);$arguments7['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array9);
$array10 = array (
);$arguments7['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array10);
$array11 = array (
);$arguments7['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array11);
$output12 = '';

$output12 .= 'keyindicator_0_RptKeyIndicators_HypLnkKeyIndicatorLink_';
$array13 = array (
);
$output12 .= $renderingContext->getVariableProvider()->getByPath('iterator.cycle', $array13);
$arguments7['id'] = $output12;
$arguments7['class'] = 'c-indicators__item';

$output6 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
	 ';
return $output6;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '


  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
	
		 <li class=" text-center cell pnp__card-shadow col-sm-3" style="visibility: visible;  -webkit-transform: translateY(0) scale(1) transform: translateY(0) scale(1);-webkit-transition: -webkit-transform 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; */ /*! transition: transform 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; */ " data-sr-id="2">
				 <div  class="pnp__link-collection-item">
				 
				   ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
    
				 <div class="col-sm-3">
				 
				  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output294 = '';

$output294 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments298 = array();
$arguments298['additionalAttributes'] = NULL;
$arguments298['data'] = NULL;
$arguments298['class'] = NULL;
$arguments298['dir'] = NULL;
$arguments298['id'] = NULL;
$arguments298['lang'] = NULL;
$arguments298['style'] = NULL;
$arguments298['title'] = NULL;
$arguments298['accesskey'] = NULL;
$arguments298['tabindex'] = NULL;
$arguments298['onclick'] = NULL;
$arguments298['alt'] = NULL;
$arguments298['file'] = NULL;
$arguments298['additionalConfig'] = array (
);
$arguments298['width'] = NULL;
$arguments298['height'] = NULL;
$arguments298['cropVariant'] = 'default';
$arguments298['class'] = 'circle';
$array300 = array (
);$arguments298['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array300);
$array301 = array (
);$arguments298['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array301);
$array302 = array (
);$arguments298['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array302);
$arguments298['width'] = 50;
$arguments298['height'] = 50;

$output297 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

$output297 .= '
              ';
return $output297;
};
$arguments295 = array();

$output294 .= '';

$output294 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
$output305 = '';

$output305 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments312 = array();
$arguments312['additionalAttributes'] = NULL;
$arguments312['data'] = NULL;
$arguments312['class'] = NULL;
$arguments312['dir'] = NULL;
$arguments312['id'] = NULL;
$arguments312['lang'] = NULL;
$arguments312['style'] = NULL;
$arguments312['title'] = NULL;
$arguments312['accesskey'] = NULL;
$arguments312['tabindex'] = NULL;
$arguments312['onclick'] = NULL;
$arguments312['alt'] = NULL;
$arguments312['ismap'] = NULL;
$arguments312['longdesc'] = NULL;
$arguments312['usemap'] = NULL;
$arguments312['src'] = NULL;
$arguments312['treatIdAsReference'] = NULL;
$arguments312['image'] = NULL;
$arguments312['crop'] = NULL;
$arguments312['cropVariant'] = 'default';
$arguments312['width'] = NULL;
$arguments312['height'] = NULL;
$arguments312['minWidth'] = NULL;
$arguments312['minHeight'] = NULL;
$arguments312['maxWidth'] = NULL;
$arguments312['maxHeight'] = NULL;
$arguments312['absolute'] = false;
$arguments312['class'] = 'circle';
$array314 = array (
);$arguments312['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array314);
$arguments312['title'] = '';
$arguments312['alt'] = '';
$arguments312['width'] = 50;
$arguments312['height'] = 50;

$output311 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext);

$output311 .= '
                ';
return $output311;
};
$arguments306 = array();
$arguments306['then'] = NULL;
$arguments306['else'] = NULL;
$arguments306['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array309);

$expression310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments306['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments306['__thenClosure'] = $renderChildrenClosure307;

$output305 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output305 .= '
              ';
return $output305;
};
$arguments303 = array();
$arguments303['if'] = NULL;

$output294 .= '';

$output294 .= '
            ';
return $output294;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array291 = array();
$array292 = array (
);$array291['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array292);

$expression293 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array291)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = function() use ($renderingContext, $self) {
$output275 = '';

$output275 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['additionalAttributes'] = NULL;
$arguments276['data'] = NULL;
$arguments276['class'] = NULL;
$arguments276['dir'] = NULL;
$arguments276['id'] = NULL;
$arguments276['lang'] = NULL;
$arguments276['style'] = NULL;
$arguments276['title'] = NULL;
$arguments276['accesskey'] = NULL;
$arguments276['tabindex'] = NULL;
$arguments276['onclick'] = NULL;
$arguments276['alt'] = NULL;
$arguments276['file'] = NULL;
$arguments276['additionalConfig'] = array (
);
$arguments276['width'] = NULL;
$arguments276['height'] = NULL;
$arguments276['cropVariant'] = 'default';
$arguments276['class'] = 'circle';
$array278 = array (
);$arguments276['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array278);
$array279 = array (
);$arguments276['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array279);
$array280 = array (
);$arguments276['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array280);
$arguments276['width'] = 50;
$arguments276['height'] = 50;

$output275 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);

$output275 .= '
              ';
return $output275;
};
$arguments273['__elseClosures'][] = function() use ($renderingContext, $self) {
$output281 = '';

$output281 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
$output287 = '';

$output287 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments288 = array();
$arguments288['additionalAttributes'] = NULL;
$arguments288['data'] = NULL;
$arguments288['class'] = NULL;
$arguments288['dir'] = NULL;
$arguments288['id'] = NULL;
$arguments288['lang'] = NULL;
$arguments288['style'] = NULL;
$arguments288['title'] = NULL;
$arguments288['accesskey'] = NULL;
$arguments288['tabindex'] = NULL;
$arguments288['onclick'] = NULL;
$arguments288['alt'] = NULL;
$arguments288['ismap'] = NULL;
$arguments288['longdesc'] = NULL;
$arguments288['usemap'] = NULL;
$arguments288['src'] = NULL;
$arguments288['treatIdAsReference'] = NULL;
$arguments288['image'] = NULL;
$arguments288['crop'] = NULL;
$arguments288['cropVariant'] = 'default';
$arguments288['width'] = NULL;
$arguments288['height'] = NULL;
$arguments288['minWidth'] = NULL;
$arguments288['minHeight'] = NULL;
$arguments288['maxWidth'] = NULL;
$arguments288['maxHeight'] = NULL;
$arguments288['absolute'] = false;
$arguments288['class'] = 'circle';
$array290 = array (
);$arguments288['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array290);
$arguments288['title'] = '';
$arguments288['alt'] = '';
$arguments288['width'] = 50;
$arguments288['height'] = 50;

$output287 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments288, $renderChildrenClosure289, $renderingContext);

$output287 .= '
                ';
return $output287;
};
$arguments282 = array();
$arguments282['then'] = NULL;
$arguments282['else'] = NULL;
$arguments282['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array284 = array();
$array285 = array (
);$array284['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array285);

$expression286 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments282['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression286(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array284)
					),
					$renderingContext
				);
$arguments282['__thenClosure'] = $renderChildrenClosure283;

$output281 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext);

$output281 .= '
              ';
return $output281;
};

$output272 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
			
				
				 </div>
				<div class="col-sm-8"> <h4> ';
$array315 = array (
);
$output272 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array315)]);

$output272 .= '</h4></div>
			
			  ';
return $output272;
};
$arguments267 = array();
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['class'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$arguments267['newsItem'] = NULL;
$arguments267['settings'] = array (
);
$arguments267['uriOnly'] = false;
$arguments267['configuration'] = array (
);
$arguments267['content'] = '';
$arguments267['section'] = NULL;
$array269 = array (
);$arguments267['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array269);
$array270 = array (
);$arguments267['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array270);
$array271 = array (
);$arguments267['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array271);
$arguments267['class'] = 'pnp__link-collection-inner';

$output266 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
				 </div></li>	
	
	
	
	
    ';
return $output266;
};
$arguments264 = array();

$output263 .= '';

$output263 .= '
  ';
return $output263;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array260 = array();
$array261 = array (
);$array260['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array261);
$array260['1'] = ' == 2';

$expression262 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression262(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array260)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
	
		 <li class=" text-center cell pnp__card-shadow col-sm-3" style="visibility: visible;  -webkit-transform: translateY(0) scale(1) transform: translateY(0) scale(1);-webkit-transition: -webkit-transform 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; */ /*! transition: transform 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s, opacity 0.65s cubic-bezier(0.6, 0.2, 0.1, 1) 0s; */ " data-sr-id="2">
				 <div  class="pnp__link-collection-item">
				 
				   ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
    
				 <div class="col-sm-3">
				 
				  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments242 = array();
$arguments242['additionalAttributes'] = NULL;
$arguments242['data'] = NULL;
$arguments242['class'] = NULL;
$arguments242['dir'] = NULL;
$arguments242['id'] = NULL;
$arguments242['lang'] = NULL;
$arguments242['style'] = NULL;
$arguments242['title'] = NULL;
$arguments242['accesskey'] = NULL;
$arguments242['tabindex'] = NULL;
$arguments242['onclick'] = NULL;
$arguments242['alt'] = NULL;
$arguments242['file'] = NULL;
$arguments242['additionalConfig'] = array (
);
$arguments242['width'] = NULL;
$arguments242['height'] = NULL;
$arguments242['cropVariant'] = 'default';
$arguments242['class'] = 'circle';
$array244 = array (
);$arguments242['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array244);
$array245 = array (
);$arguments242['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array245);
$array246 = array (
);$arguments242['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array246);
$arguments242['width'] = 50;
$arguments242['height'] = 50;

$output241 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output241 .= '
              ';
return $output241;
};
$arguments239 = array();

$output238 .= '';

$output238 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output255 = '';

$output255 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['additionalAttributes'] = NULL;
$arguments256['data'] = NULL;
$arguments256['class'] = NULL;
$arguments256['dir'] = NULL;
$arguments256['id'] = NULL;
$arguments256['lang'] = NULL;
$arguments256['style'] = NULL;
$arguments256['title'] = NULL;
$arguments256['accesskey'] = NULL;
$arguments256['tabindex'] = NULL;
$arguments256['onclick'] = NULL;
$arguments256['alt'] = NULL;
$arguments256['ismap'] = NULL;
$arguments256['longdesc'] = NULL;
$arguments256['usemap'] = NULL;
$arguments256['src'] = NULL;
$arguments256['treatIdAsReference'] = NULL;
$arguments256['image'] = NULL;
$arguments256['crop'] = NULL;
$arguments256['cropVariant'] = 'default';
$arguments256['width'] = NULL;
$arguments256['height'] = NULL;
$arguments256['minWidth'] = NULL;
$arguments256['minHeight'] = NULL;
$arguments256['maxWidth'] = NULL;
$arguments256['maxHeight'] = NULL;
$arguments256['absolute'] = false;
$arguments256['class'] = 'circle';
$array258 = array (
);$arguments256['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array258);
$arguments256['title'] = '';
$arguments256['alt'] = '';
$arguments256['width'] = 50;
$arguments256['height'] = 50;

$output255 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output255 .= '
                ';
return $output255;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output249 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '
              ';
return $output249;
};
$arguments247 = array();
$arguments247['if'] = NULL;

$output238 .= '';

$output238 .= '
            ';
return $output238;
};
$arguments217 = array();
$arguments217['then'] = NULL;
$arguments217['else'] = NULL;
$arguments217['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array236);

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments217['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);
$arguments217['__thenClosure'] = function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['additionalAttributes'] = NULL;
$arguments220['data'] = NULL;
$arguments220['class'] = NULL;
$arguments220['dir'] = NULL;
$arguments220['id'] = NULL;
$arguments220['lang'] = NULL;
$arguments220['style'] = NULL;
$arguments220['title'] = NULL;
$arguments220['accesskey'] = NULL;
$arguments220['tabindex'] = NULL;
$arguments220['onclick'] = NULL;
$arguments220['alt'] = NULL;
$arguments220['file'] = NULL;
$arguments220['additionalConfig'] = array (
);
$arguments220['width'] = NULL;
$arguments220['height'] = NULL;
$arguments220['cropVariant'] = 'default';
$arguments220['class'] = 'circle';
$array222 = array (
);$arguments220['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array222);
$array223 = array (
);$arguments220['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array223);
$array224 = array (
);$arguments220['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array224);
$arguments220['width'] = 50;
$arguments220['height'] = 50;

$output219 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output219 .= '
              ';
return $output219;
};
$arguments217['__elseClosures'][] = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output231 = '';

$output231 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure233 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments232 = array();
$arguments232['additionalAttributes'] = NULL;
$arguments232['data'] = NULL;
$arguments232['class'] = NULL;
$arguments232['dir'] = NULL;
$arguments232['id'] = NULL;
$arguments232['lang'] = NULL;
$arguments232['style'] = NULL;
$arguments232['title'] = NULL;
$arguments232['accesskey'] = NULL;
$arguments232['tabindex'] = NULL;
$arguments232['onclick'] = NULL;
$arguments232['alt'] = NULL;
$arguments232['ismap'] = NULL;
$arguments232['longdesc'] = NULL;
$arguments232['usemap'] = NULL;
$arguments232['src'] = NULL;
$arguments232['treatIdAsReference'] = NULL;
$arguments232['image'] = NULL;
$arguments232['crop'] = NULL;
$arguments232['cropVariant'] = 'default';
$arguments232['width'] = NULL;
$arguments232['height'] = NULL;
$arguments232['minWidth'] = NULL;
$arguments232['minHeight'] = NULL;
$arguments232['maxWidth'] = NULL;
$arguments232['maxHeight'] = NULL;
$arguments232['absolute'] = false;
$arguments232['class'] = 'circle';
$array234 = array (
);$arguments232['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array234);
$arguments232['title'] = '';
$arguments232['alt'] = '';
$arguments232['width'] = 50;
$arguments232['height'] = 50;

$output231 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments232, $renderChildrenClosure233, $renderingContext);

$output231 .= '
                ';
return $output231;
};
$arguments226 = array();
$arguments226['then'] = NULL;
$arguments226['else'] = NULL;
$arguments226['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array229 = array (
);$array228['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array229);

$expression230 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments226['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression230(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['__thenClosure'] = $renderChildrenClosure227;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
              ';
return $output225;
};

$output216 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
			
				
				 </div>
				<div class="col-sm-8"> <h4> ';
$array259 = array (
);
$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array259)]);

$output216 .= '</h4></div>
			
			  ';
return $output216;
};
$arguments211 = array();
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['title'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['newsItem'] = NULL;
$arguments211['settings'] = array (
);
$arguments211['uriOnly'] = false;
$arguments211['configuration'] = array (
);
$arguments211['content'] = '';
$arguments211['section'] = NULL;
$array213 = array (
);$arguments211['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array213);
$array214 = array (
);$arguments211['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array214);
$array215 = array (
);$arguments211['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array215);
$arguments211['class'] = 'pnp__link-collection-inner';

$output210 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
				 </div></li>	
	
	
	
	
    ';
return $output210;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output0 .= '

  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
$output329 = '';

$output329 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure331 = function() use ($renderingContext, $self) {
$output332 = '';

$output332 .= '
	
	<li>
<span class="title">
      ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure334 = function() use ($renderingContext, $self) {
$output338 = '';

$output338 .= '
          ';
$array339 = array (
);
$output338 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array339)]);

$output338 .= '
        ';
return $output338;
};
$arguments333 = array();
$arguments333['additionalAttributes'] = NULL;
$arguments333['data'] = NULL;
$arguments333['class'] = NULL;
$arguments333['dir'] = NULL;
$arguments333['id'] = NULL;
$arguments333['lang'] = NULL;
$arguments333['style'] = NULL;
$arguments333['title'] = NULL;
$arguments333['accesskey'] = NULL;
$arguments333['tabindex'] = NULL;
$arguments333['onclick'] = NULL;
$arguments333['newsItem'] = NULL;
$arguments333['settings'] = array (
);
$arguments333['uriOnly'] = false;
$arguments333['configuration'] = array (
);
$arguments333['content'] = '';
$arguments333['section'] = NULL;
$array335 = array (
);$arguments333['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array335);
$array336 = array (
);$arguments333['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array336);
$array337 = array (
);$arguments333['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array337);

$output332 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments333, $renderChildrenClosure334, $renderingContext);

$output332 .= '
  </span>
</li>
';
return $output332;
};
$arguments330 = array();

$output329 .= '';

$output329 .= '
  ';
return $output329;
};
$arguments316 = array();
$arguments316['then'] = NULL;
$arguments316['else'] = NULL;
$arguments316['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array327);
$array326['1'] = ' == 3';

$expression328 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 3);};
$arguments316['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array326)
					),
					$renderingContext
				);
$arguments316['__thenClosure'] = function() use ($renderingContext, $self) {
$output318 = '';

$output318 .= '
	
	<li>
<span class="title">
      ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure320 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
          ';
$array325 = array (
);
$output324 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array325)]);

$output324 .= '
        ';
return $output324;
};
$arguments319 = array();
$arguments319['additionalAttributes'] = NULL;
$arguments319['data'] = NULL;
$arguments319['class'] = NULL;
$arguments319['dir'] = NULL;
$arguments319['id'] = NULL;
$arguments319['lang'] = NULL;
$arguments319['style'] = NULL;
$arguments319['title'] = NULL;
$arguments319['accesskey'] = NULL;
$arguments319['tabindex'] = NULL;
$arguments319['onclick'] = NULL;
$arguments319['newsItem'] = NULL;
$arguments319['settings'] = array (
);
$arguments319['uriOnly'] = false;
$arguments319['configuration'] = array (
);
$arguments319['content'] = '';
$arguments319['section'] = NULL;
$array321 = array (
);$arguments319['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array321);
$array322 = array (
);$arguments319['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array322);
$array323 = array (
);$arguments319['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array323);

$output318 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '
  </span>
</li>
';
return $output318;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output352 = '';

$output352 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
$output355 = '';

$output355 .= '
	<div class="col-md-6">
	 <div class="tab">
        <input type="checkbox" id="chck';
$array356 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array356)]);

$output355 .= '">
        <label class="tab-label" for="chck';
$array357 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array357)]);

$output355 .= '">';
$array358 = array (
);
$output355 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array358)]);

$output355 .= '</label>
        <div class="tab-content">
         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
$array361 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array361);
};
$arguments359 = array();
$arguments359['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output355 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments359, $renderChildrenClosure360, $renderingContext);

$output355 .= '
        </div>
      </div>
	 </div> 

       

    ';
return $output355;
};
$arguments353 = array();

$output352 .= '';

$output352 .= '
  ';
return $output352;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array350);
$array349['1'] = ' == 16';

$expression351 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 16);};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression351(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array349)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
	<div class="col-md-6">
	 <div class="tab">
        <input type="checkbox" id="chck';
$array343 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array343)]);

$output342 .= '">
        <label class="tab-label" for="chck';
$array344 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array344)]);

$output342 .= '">';
$array345 = array (
);
$output342 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array345)]);

$output342 .= '</label>
        <div class="tab-content">
         ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$array348 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array348);
};
$arguments346 = array();
$arguments346['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output342 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$output342 .= '
        </div>
      </div>
	 </div> 

       

    ';
return $output342;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output0 .= '

   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
$output521 = '';

$output521 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
<div class="col-md-4">
        <div class="teambox">
        <a href="#" data-toggle="modal" data-target="#mModal';
$array525 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array525)]);

$output524 .= '"> 

        <div class="teamPhoto" itemprop="member" itemscope="" itemtype="http://schema.org/members">
  
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure527 = function() use ($renderingContext, $self) {
$output562 = '';

$output562 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output565 = '';

$output565 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments566 = array();
$arguments566['additionalAttributes'] = NULL;
$arguments566['data'] = NULL;
$arguments566['class'] = NULL;
$arguments566['dir'] = NULL;
$arguments566['id'] = NULL;
$arguments566['lang'] = NULL;
$arguments566['style'] = NULL;
$arguments566['title'] = NULL;
$arguments566['accesskey'] = NULL;
$arguments566['tabindex'] = NULL;
$arguments566['onclick'] = NULL;
$arguments566['alt'] = NULL;
$arguments566['file'] = NULL;
$arguments566['additionalConfig'] = array (
);
$arguments566['width'] = NULL;
$arguments566['height'] = NULL;
$arguments566['cropVariant'] = 'default';
$arguments566['class'] = 'circle';
$array568 = array (
);$arguments566['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array568);
$array569 = array (
);$arguments566['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array569);
$array570 = array (
);$arguments566['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array570);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['then'] = NULL;
$arguments571['else'] = NULL;
$arguments571['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array573 = array();
$array574 = array (
);$array573['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array574);

$expression575 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments571['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression575(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array573)
					),
					$renderingContext
				);
$array576 = array (
);$arguments571['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array576);
$array577 = array (
);$arguments571['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array577);
$arguments566['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['then'] = NULL;
$arguments578['else'] = NULL;
$arguments578['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array580 = array();
$array581 = array (
);$array580['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array581);

$expression582 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments578['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression582(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array580)
					),
					$renderingContext
				);
$array583 = array (
);$arguments578['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array583);
$arguments578['else'] = '';
$arguments566['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext);

$output565 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments566, $renderChildrenClosure567, $renderingContext);

$output565 .= '
              ';
return $output565;
};
$arguments563 = array();

$output562 .= '';

$output562 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
$output586 = '';

$output586 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure588 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure594 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments593 = array();
$arguments593['additionalAttributes'] = NULL;
$arguments593['data'] = NULL;
$arguments593['class'] = NULL;
$arguments593['dir'] = NULL;
$arguments593['id'] = NULL;
$arguments593['lang'] = NULL;
$arguments593['style'] = NULL;
$arguments593['title'] = NULL;
$arguments593['accesskey'] = NULL;
$arguments593['tabindex'] = NULL;
$arguments593['onclick'] = NULL;
$arguments593['alt'] = NULL;
$arguments593['ismap'] = NULL;
$arguments593['longdesc'] = NULL;
$arguments593['usemap'] = NULL;
$arguments593['src'] = NULL;
$arguments593['treatIdAsReference'] = NULL;
$arguments593['image'] = NULL;
$arguments593['crop'] = NULL;
$arguments593['cropVariant'] = 'default';
$arguments593['width'] = NULL;
$arguments593['height'] = NULL;
$arguments593['minWidth'] = NULL;
$arguments593['minHeight'] = NULL;
$arguments593['maxWidth'] = NULL;
$arguments593['maxHeight'] = NULL;
$arguments593['absolute'] = false;
$arguments593['class'] = 'circle';
$array595 = array (
);$arguments593['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array595);
$arguments593['title'] = '';
$arguments593['alt'] = '';
$array596 = array (
);$arguments593['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array596);
$array597 = array (
);$arguments593['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array597);

$output592 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments593, $renderChildrenClosure594, $renderingContext);

$output592 .= '
                ';
return $output592;
};
$arguments587 = array();
$arguments587['then'] = NULL;
$arguments587['else'] = NULL;
$arguments587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array589 = array();
$array590 = array (
);$array589['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array590);

$expression591 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression591(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array589)
					),
					$renderingContext
				);
$arguments587['__thenClosure'] = $renderChildrenClosure588;

$output586 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments587, $renderChildrenClosure588, $renderingContext);

$output586 .= '
              ';
return $output586;
};
$arguments584 = array();
$arguments584['if'] = NULL;

$output562 .= '';

$output562 .= '
            ';
return $output562;
};
$arguments526 = array();
$arguments526['then'] = NULL;
$arguments526['else'] = NULL;
$arguments526['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array559 = array();
$array560 = array (
);$array559['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array560);

$expression561 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments526['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression561(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array559)
					),
					$renderingContext
				);
$arguments526['__thenClosure'] = function() use ($renderingContext, $self) {
$output528 = '';

$output528 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments529 = array();
$arguments529['additionalAttributes'] = NULL;
$arguments529['data'] = NULL;
$arguments529['class'] = NULL;
$arguments529['dir'] = NULL;
$arguments529['id'] = NULL;
$arguments529['lang'] = NULL;
$arguments529['style'] = NULL;
$arguments529['title'] = NULL;
$arguments529['accesskey'] = NULL;
$arguments529['tabindex'] = NULL;
$arguments529['onclick'] = NULL;
$arguments529['alt'] = NULL;
$arguments529['file'] = NULL;
$arguments529['additionalConfig'] = array (
);
$arguments529['width'] = NULL;
$arguments529['height'] = NULL;
$arguments529['cropVariant'] = 'default';
$arguments529['class'] = 'circle';
$array531 = array (
);$arguments529['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array531);
$array532 = array (
);$arguments529['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array532);
$array533 = array (
);$arguments529['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array533);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['then'] = NULL;
$arguments534['else'] = NULL;
$arguments534['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array536 = array();
$array537 = array (
);$array536['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array537);

$expression538 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments534['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression538(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array536)
					),
					$renderingContext
				);
$array539 = array (
);$arguments534['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array539);
$array540 = array (
);$arguments534['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array540);
$arguments529['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure542 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments541 = array();
$arguments541['then'] = NULL;
$arguments541['else'] = NULL;
$arguments541['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array543 = array();
$array544 = array (
);$array543['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array544);

$expression545 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments541['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression545(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array543)
					),
					$renderingContext
				);
$array546 = array (
);$arguments541['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array546);
$arguments541['else'] = '';
$arguments529['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments541, $renderChildrenClosure542, $renderingContext);

$output528 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments529, $renderChildrenClosure530, $renderingContext);

$output528 .= '
              ';
return $output528;
};
$arguments526['__elseClosures'][] = function() use ($renderingContext, $self) {
$output547 = '';

$output547 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure549 = function() use ($renderingContext, $self) {
$output553 = '';

$output553 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments554 = array();
$arguments554['additionalAttributes'] = NULL;
$arguments554['data'] = NULL;
$arguments554['class'] = NULL;
$arguments554['dir'] = NULL;
$arguments554['id'] = NULL;
$arguments554['lang'] = NULL;
$arguments554['style'] = NULL;
$arguments554['title'] = NULL;
$arguments554['accesskey'] = NULL;
$arguments554['tabindex'] = NULL;
$arguments554['onclick'] = NULL;
$arguments554['alt'] = NULL;
$arguments554['ismap'] = NULL;
$arguments554['longdesc'] = NULL;
$arguments554['usemap'] = NULL;
$arguments554['src'] = NULL;
$arguments554['treatIdAsReference'] = NULL;
$arguments554['image'] = NULL;
$arguments554['crop'] = NULL;
$arguments554['cropVariant'] = 'default';
$arguments554['width'] = NULL;
$arguments554['height'] = NULL;
$arguments554['minWidth'] = NULL;
$arguments554['minHeight'] = NULL;
$arguments554['maxWidth'] = NULL;
$arguments554['maxHeight'] = NULL;
$arguments554['absolute'] = false;
$arguments554['class'] = 'circle';
$array556 = array (
);$arguments554['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array556);
$arguments554['title'] = '';
$arguments554['alt'] = '';
$array557 = array (
);$arguments554['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array557);
$array558 = array (
);$arguments554['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array558);

$output553 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output553 .= '
                ';
return $output553;
};
$arguments548 = array();
$arguments548['then'] = NULL;
$arguments548['else'] = NULL;
$arguments548['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array550 = array();
$array551 = array (
);$array550['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array551);

$expression552 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments548['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression552(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array550)
					),
					$renderingContext
				);
$arguments548['__thenClosure'] = $renderChildrenClosure549;

$output547 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments548, $renderChildrenClosure549, $renderingContext);

$output547 .= '
              ';
return $output547;
};

$output524 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments526, $renderChildrenClosure527, $renderingContext);

$output524 .= '
    </div>
    <div class="teamTxt">
          <h4 class="et_pb_module_header">';
$array598 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array598)]);

$output524 .= '</h4>
          <span class="et_pb_member_position">';
$array599 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array599)]);

$output524 .= '</span>
          
        </div> 
        </a>
        </div>
      </div> 
<div class="modal fade" id="mModal';
$array600 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array600)]);

$output524 .= '" role="dialog" style="display: none;z-index: 9999;">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content ">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
             
          
         <center> <div class="modal-title" style="font-size:18px;font-family:Lato;font-weight:bold;">';
$array601 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array601)]);

$output524 .= '</div>
      <div class="post101" style="font-size:16px;color:#055e9a;font-weight:bold">';
$array602 = array (
);
$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array602)]);

$output524 .= '</div>
     </center> 
        </div>
        <div class="modal-body">
    <div class="row">
      <div class="col-md-3">
     ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['additionalAttributes'] = NULL;
$arguments643['data'] = NULL;
$arguments643['class'] = NULL;
$arguments643['dir'] = NULL;
$arguments643['id'] = NULL;
$arguments643['lang'] = NULL;
$arguments643['style'] = NULL;
$arguments643['title'] = NULL;
$arguments643['accesskey'] = NULL;
$arguments643['tabindex'] = NULL;
$arguments643['onclick'] = NULL;
$arguments643['alt'] = NULL;
$arguments643['file'] = NULL;
$arguments643['additionalConfig'] = array (
);
$arguments643['width'] = NULL;
$arguments643['height'] = NULL;
$arguments643['cropVariant'] = 'default';
$arguments643['class'] = 'circle';
$array645 = array (
);$arguments643['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array645);
$array646 = array (
);$arguments643['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array646);
$array647 = array (
);$arguments643['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array647);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure649 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments648 = array();
$arguments648['then'] = NULL;
$arguments648['else'] = NULL;
$arguments648['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array650 = array();
$array651 = array (
);$array650['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array651);

$expression652 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments648['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression652(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array650)
					),
					$renderingContext
				);
$array653 = array (
);$arguments648['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array653);
$array654 = array (
);$arguments648['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array654);
$arguments643['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments648, $renderChildrenClosure649, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments655 = array();
$arguments655['then'] = NULL;
$arguments655['else'] = NULL;
$arguments655['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array657 = array();
$array658 = array (
);$array657['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array658);

$expression659 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments655['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression659(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array657)
					),
					$renderingContext
				);
$array660 = array (
);$arguments655['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array660);
$arguments655['else'] = '';
$arguments643['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments655, $renderChildrenClosure656, $renderingContext);

$output642 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext);

$output642 .= '
              ';
return $output642;
};
$arguments640 = array();

$output639 .= '';

$output639 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure662 = function() use ($renderingContext, $self) {
$output663 = '';

$output663 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure665 = function() use ($renderingContext, $self) {
$output669 = '';

$output669 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['additionalAttributes'] = NULL;
$arguments670['data'] = NULL;
$arguments670['class'] = NULL;
$arguments670['dir'] = NULL;
$arguments670['id'] = NULL;
$arguments670['lang'] = NULL;
$arguments670['style'] = NULL;
$arguments670['title'] = NULL;
$arguments670['accesskey'] = NULL;
$arguments670['tabindex'] = NULL;
$arguments670['onclick'] = NULL;
$arguments670['alt'] = NULL;
$arguments670['ismap'] = NULL;
$arguments670['longdesc'] = NULL;
$arguments670['usemap'] = NULL;
$arguments670['src'] = NULL;
$arguments670['treatIdAsReference'] = NULL;
$arguments670['image'] = NULL;
$arguments670['crop'] = NULL;
$arguments670['cropVariant'] = 'default';
$arguments670['width'] = NULL;
$arguments670['height'] = NULL;
$arguments670['minWidth'] = NULL;
$arguments670['minHeight'] = NULL;
$arguments670['maxWidth'] = NULL;
$arguments670['maxHeight'] = NULL;
$arguments670['absolute'] = false;
$arguments670['class'] = 'circle';
$array672 = array (
);$arguments670['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array672);
$arguments670['title'] = '';
$arguments670['alt'] = '';
$array673 = array (
);$arguments670['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array673);
$array674 = array (
);$arguments670['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array674);

$output669 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext);

$output669 .= '
                ';
return $output669;
};
$arguments664 = array();
$arguments664['then'] = NULL;
$arguments664['else'] = NULL;
$arguments664['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array666 = array();
$array667 = array (
);$array666['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array667);

$expression668 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments664['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression668(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array666)
					),
					$renderingContext
				);
$arguments664['__thenClosure'] = $renderChildrenClosure665;

$output663 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments664, $renderChildrenClosure665, $renderingContext);

$output663 .= '
              ';
return $output663;
};
$arguments661 = array();
$arguments661['if'] = NULL;

$output639 .= '';

$output639 .= '
            ';
return $output639;
};
$arguments603 = array();
$arguments603['then'] = NULL;
$arguments603['else'] = NULL;
$arguments603['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array636 = array();
$array637 = array (
);$array636['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array637);

$expression638 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments603['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression638(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array636)
					),
					$renderingContext
				);
$arguments603['__thenClosure'] = function() use ($renderingContext, $self) {
$output605 = '';

$output605 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments606 = array();
$arguments606['additionalAttributes'] = NULL;
$arguments606['data'] = NULL;
$arguments606['class'] = NULL;
$arguments606['dir'] = NULL;
$arguments606['id'] = NULL;
$arguments606['lang'] = NULL;
$arguments606['style'] = NULL;
$arguments606['title'] = NULL;
$arguments606['accesskey'] = NULL;
$arguments606['tabindex'] = NULL;
$arguments606['onclick'] = NULL;
$arguments606['alt'] = NULL;
$arguments606['file'] = NULL;
$arguments606['additionalConfig'] = array (
);
$arguments606['width'] = NULL;
$arguments606['height'] = NULL;
$arguments606['cropVariant'] = 'default';
$arguments606['class'] = 'circle';
$array608 = array (
);$arguments606['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array608);
$array609 = array (
);$arguments606['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array609);
$array610 = array (
);$arguments606['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array610);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure612 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments611 = array();
$arguments611['then'] = NULL;
$arguments611['else'] = NULL;
$arguments611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array613 = array();
$array614 = array (
);$array613['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array614);

$expression615 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array613)
					),
					$renderingContext
				);
$array616 = array (
);$arguments611['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array616);
$array617 = array (
);$arguments611['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array617);
$arguments606['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments611, $renderChildrenClosure612, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['then'] = NULL;
$arguments618['else'] = NULL;
$arguments618['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array620 = array();
$array621 = array (
);$array620['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array621);

$expression622 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments618['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression622(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array620)
					),
					$renderingContext
				);
$array623 = array (
);$arguments618['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array623);
$arguments618['else'] = '';
$arguments606['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext);

$output605 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output605 .= '
              ';
return $output605;
};
$arguments603['__elseClosures'][] = function() use ($renderingContext, $self) {
$output624 = '';

$output624 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure626 = function() use ($renderingContext, $self) {
$output630 = '';

$output630 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments631 = array();
$arguments631['additionalAttributes'] = NULL;
$arguments631['data'] = NULL;
$arguments631['class'] = NULL;
$arguments631['dir'] = NULL;
$arguments631['id'] = NULL;
$arguments631['lang'] = NULL;
$arguments631['style'] = NULL;
$arguments631['title'] = NULL;
$arguments631['accesskey'] = NULL;
$arguments631['tabindex'] = NULL;
$arguments631['onclick'] = NULL;
$arguments631['alt'] = NULL;
$arguments631['ismap'] = NULL;
$arguments631['longdesc'] = NULL;
$arguments631['usemap'] = NULL;
$arguments631['src'] = NULL;
$arguments631['treatIdAsReference'] = NULL;
$arguments631['image'] = NULL;
$arguments631['crop'] = NULL;
$arguments631['cropVariant'] = 'default';
$arguments631['width'] = NULL;
$arguments631['height'] = NULL;
$arguments631['minWidth'] = NULL;
$arguments631['minHeight'] = NULL;
$arguments631['maxWidth'] = NULL;
$arguments631['maxHeight'] = NULL;
$arguments631['absolute'] = false;
$arguments631['class'] = 'circle';
$array633 = array (
);$arguments631['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array633);
$arguments631['title'] = '';
$arguments631['alt'] = '';
$array634 = array (
);$arguments631['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array634);
$array635 = array (
);$arguments631['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array635);

$output630 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments631, $renderChildrenClosure632, $renderingContext);

$output630 .= '
                ';
return $output630;
};
$arguments625 = array();
$arguments625['then'] = NULL;
$arguments625['else'] = NULL;
$arguments625['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array627 = array();
$array628 = array (
);$array627['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array628);

$expression629 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments625['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression629(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array627)
					),
					$renderingContext
				);
$arguments625['__thenClosure'] = $renderChildrenClosure626;

$output624 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments625, $renderChildrenClosure626, $renderingContext);

$output624 .= '
              ';
return $output624;
};

$output524 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext);

$output524 .= '
      </div>
      
      <div class="col-md-9"> 

<div class="team_modal_content" style="font-size:14px;">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
$array677 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array677);
};
$arguments675 = array();
$arguments675['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output524 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output524 .= '
</div> 
    </div>
    </div>
    </div>
          
        </div>
      </div>
    </div>

    ';
return $output524;
};
$arguments522 = array();

$output521 .= '';

$output521 .= '
  ';
return $output521;
};
$arguments362 = array();
$arguments362['then'] = NULL;
$arguments362['else'] = NULL;
$arguments362['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array518 = array();
$array519 = array (
);$array518['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array519);
$array518['1'] = ' == 6';

$expression520 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 6);};
$arguments362['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression520(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array518)
					),
					$renderingContext
				);
$arguments362['__thenClosure'] = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
<div class="col-md-4">
        <div class="teambox">
        <a href="#" data-toggle="modal" data-target="#mModal';
$array365 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array365)]);

$output364 .= '"> 

        <div class="teamPhoto" itemprop="member" itemscope="" itemtype="http://schema.org/members">
  
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output402 = '';

$output402 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments406 = array();
$arguments406['additionalAttributes'] = NULL;
$arguments406['data'] = NULL;
$arguments406['class'] = NULL;
$arguments406['dir'] = NULL;
$arguments406['id'] = NULL;
$arguments406['lang'] = NULL;
$arguments406['style'] = NULL;
$arguments406['title'] = NULL;
$arguments406['accesskey'] = NULL;
$arguments406['tabindex'] = NULL;
$arguments406['onclick'] = NULL;
$arguments406['alt'] = NULL;
$arguments406['file'] = NULL;
$arguments406['additionalConfig'] = array (
);
$arguments406['width'] = NULL;
$arguments406['height'] = NULL;
$arguments406['cropVariant'] = 'default';
$arguments406['class'] = 'circle';
$array408 = array (
);$arguments406['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array408);
$array409 = array (
);$arguments406['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array409);
$array410 = array (
);$arguments406['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array410);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments411 = array();
$arguments411['then'] = NULL;
$arguments411['else'] = NULL;
$arguments411['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array413 = array();
$array414 = array (
);$array413['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array414);

$expression415 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments411['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression415(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array413)
					),
					$renderingContext
				);
$array416 = array (
);$arguments411['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array416);
$array417 = array (
);$arguments411['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array417);
$arguments406['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['then'] = NULL;
$arguments418['else'] = NULL;
$arguments418['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array420 = array();
$array421 = array (
);$array420['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array421);

$expression422 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments418['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression422(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array420)
					),
					$renderingContext
				);
$array423 = array (
);$arguments418['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array423);
$arguments418['else'] = '';
$arguments406['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext);

$output405 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext);

$output405 .= '
              ';
return $output405;
};
$arguments403 = array();

$output402 .= '';

$output402 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output426 = '';

$output426 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure434 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments433 = array();
$arguments433['additionalAttributes'] = NULL;
$arguments433['data'] = NULL;
$arguments433['class'] = NULL;
$arguments433['dir'] = NULL;
$arguments433['id'] = NULL;
$arguments433['lang'] = NULL;
$arguments433['style'] = NULL;
$arguments433['title'] = NULL;
$arguments433['accesskey'] = NULL;
$arguments433['tabindex'] = NULL;
$arguments433['onclick'] = NULL;
$arguments433['alt'] = NULL;
$arguments433['ismap'] = NULL;
$arguments433['longdesc'] = NULL;
$arguments433['usemap'] = NULL;
$arguments433['src'] = NULL;
$arguments433['treatIdAsReference'] = NULL;
$arguments433['image'] = NULL;
$arguments433['crop'] = NULL;
$arguments433['cropVariant'] = 'default';
$arguments433['width'] = NULL;
$arguments433['height'] = NULL;
$arguments433['minWidth'] = NULL;
$arguments433['minHeight'] = NULL;
$arguments433['maxWidth'] = NULL;
$arguments433['maxHeight'] = NULL;
$arguments433['absolute'] = false;
$arguments433['class'] = 'circle';
$array435 = array (
);$arguments433['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array435);
$arguments433['title'] = '';
$arguments433['alt'] = '';
$array436 = array (
);$arguments433['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array436);
$array437 = array (
);$arguments433['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array437);

$output432 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments433, $renderChildrenClosure434, $renderingContext);

$output432 .= '
                ';
return $output432;
};
$arguments427 = array();
$arguments427['then'] = NULL;
$arguments427['else'] = NULL;
$arguments427['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array429 = array();
$array430 = array (
);$array429['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array430);

$expression431 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments427['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array429)
					),
					$renderingContext
				);
$arguments427['__thenClosure'] = $renderChildrenClosure428;

$output426 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext);

$output426 .= '
              ';
return $output426;
};
$arguments424 = array();
$arguments424['if'] = NULL;

$output402 .= '';

$output402 .= '
            ';
return $output402;
};
$arguments366 = array();
$arguments366['then'] = NULL;
$arguments366['else'] = NULL;
$arguments366['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array399 = array();
$array400 = array (
);$array399['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array400);

$expression401 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments366['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression401(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array399)
					),
					$renderingContext
				);
$arguments366['__thenClosure'] = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['additionalAttributes'] = NULL;
$arguments369['data'] = NULL;
$arguments369['class'] = NULL;
$arguments369['dir'] = NULL;
$arguments369['id'] = NULL;
$arguments369['lang'] = NULL;
$arguments369['style'] = NULL;
$arguments369['title'] = NULL;
$arguments369['accesskey'] = NULL;
$arguments369['tabindex'] = NULL;
$arguments369['onclick'] = NULL;
$arguments369['alt'] = NULL;
$arguments369['file'] = NULL;
$arguments369['additionalConfig'] = array (
);
$arguments369['width'] = NULL;
$arguments369['height'] = NULL;
$arguments369['cropVariant'] = 'default';
$arguments369['class'] = 'circle';
$array371 = array (
);$arguments369['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array371);
$array372 = array (
);$arguments369['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array372);
$array373 = array (
);$arguments369['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array373);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure375 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments374 = array();
$arguments374['then'] = NULL;
$arguments374['else'] = NULL;
$arguments374['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array376 = array();
$array377 = array (
);$array376['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array377);

$expression378 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments374['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array376)
					),
					$renderingContext
				);
$array379 = array (
);$arguments374['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array379);
$array380 = array (
);$arguments374['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array380);
$arguments369['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments374, $renderChildrenClosure375, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure382 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments381 = array();
$arguments381['then'] = NULL;
$arguments381['else'] = NULL;
$arguments381['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array383 = array();
$array384 = array (
);$array383['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array384);

$expression385 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments381['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression385(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)
					),
					$renderingContext
				);
$array386 = array (
);$arguments381['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array386);
$arguments381['else'] = '';
$arguments369['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments381, $renderChildrenClosure382, $renderingContext);

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
              ';
return $output368;
};
$arguments366['__elseClosures'][] = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['additionalAttributes'] = NULL;
$arguments394['data'] = NULL;
$arguments394['class'] = NULL;
$arguments394['dir'] = NULL;
$arguments394['id'] = NULL;
$arguments394['lang'] = NULL;
$arguments394['style'] = NULL;
$arguments394['title'] = NULL;
$arguments394['accesskey'] = NULL;
$arguments394['tabindex'] = NULL;
$arguments394['onclick'] = NULL;
$arguments394['alt'] = NULL;
$arguments394['ismap'] = NULL;
$arguments394['longdesc'] = NULL;
$arguments394['usemap'] = NULL;
$arguments394['src'] = NULL;
$arguments394['treatIdAsReference'] = NULL;
$arguments394['image'] = NULL;
$arguments394['crop'] = NULL;
$arguments394['cropVariant'] = 'default';
$arguments394['width'] = NULL;
$arguments394['height'] = NULL;
$arguments394['minWidth'] = NULL;
$arguments394['minHeight'] = NULL;
$arguments394['maxWidth'] = NULL;
$arguments394['maxHeight'] = NULL;
$arguments394['absolute'] = false;
$arguments394['class'] = 'circle';
$array396 = array (
);$arguments394['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array396);
$arguments394['title'] = '';
$arguments394['alt'] = '';
$array397 = array (
);$arguments394['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array397);
$array398 = array (
);$arguments394['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array398);

$output393 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
                ';
return $output393;
};
$arguments388 = array();
$arguments388['then'] = NULL;
$arguments388['else'] = NULL;
$arguments388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array390 = array();
$array391 = array (
);$array390['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array391);

$expression392 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array390)
					),
					$renderingContext
				);
$arguments388['__thenClosure'] = $renderChildrenClosure389;

$output387 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments388, $renderChildrenClosure389, $renderingContext);

$output387 .= '
              ';
return $output387;
};

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments366, $renderChildrenClosure367, $renderingContext);

$output364 .= '
    </div>
    <div class="teamTxt">
          <h4 class="et_pb_module_header">';
$array438 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array438)]);

$output364 .= '</h4>
          <span class="et_pb_member_position">';
$array439 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array439)]);

$output364 .= '</span>
          
        </div> 
        </a>
        </div>
      </div> 
<div class="modal fade" id="mModal';
$array440 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array440)]);

$output364 .= '" role="dialog" style="display: none;z-index: 9999;">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content ">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
             
          
         <center> <div class="modal-title" style="font-size:18px;font-family:Lato;font-weight:bold;">';
$array441 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array441)]);

$output364 .= '</div>
      <div class="post101" style="font-size:16px;color:#055e9a;font-weight:bold">';
$array442 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array442)]);

$output364 .= '</div>
     </center> 
        </div>
        <div class="modal-body">
    <div class="row">
      <div class="col-md-3">
     ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
$output479 = '';

$output479 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure484 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments483 = array();
$arguments483['additionalAttributes'] = NULL;
$arguments483['data'] = NULL;
$arguments483['class'] = NULL;
$arguments483['dir'] = NULL;
$arguments483['id'] = NULL;
$arguments483['lang'] = NULL;
$arguments483['style'] = NULL;
$arguments483['title'] = NULL;
$arguments483['accesskey'] = NULL;
$arguments483['tabindex'] = NULL;
$arguments483['onclick'] = NULL;
$arguments483['alt'] = NULL;
$arguments483['file'] = NULL;
$arguments483['additionalConfig'] = array (
);
$arguments483['width'] = NULL;
$arguments483['height'] = NULL;
$arguments483['cropVariant'] = 'default';
$arguments483['class'] = 'circle';
$array485 = array (
);$arguments483['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array485);
$array486 = array (
);$arguments483['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array486);
$array487 = array (
);$arguments483['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array487);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure489 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments488 = array();
$arguments488['then'] = NULL;
$arguments488['else'] = NULL;
$arguments488['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array490 = array();
$array491 = array (
);$array490['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array491);

$expression492 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments488['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression492(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array490)
					),
					$renderingContext
				);
$array493 = array (
);$arguments488['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array493);
$array494 = array (
);$arguments488['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array494);
$arguments483['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments488, $renderChildrenClosure489, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments495 = array();
$arguments495['then'] = NULL;
$arguments495['else'] = NULL;
$arguments495['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array497 = array();
$array498 = array (
);$array497['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array498);

$expression499 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments495['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression499(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array497)
					),
					$renderingContext
				);
$array500 = array (
);$arguments495['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array500);
$arguments495['else'] = '';
$arguments483['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments495, $renderChildrenClosure496, $renderingContext);

$output482 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments483, $renderChildrenClosure484, $renderingContext);

$output482 .= '
              ';
return $output482;
};
$arguments480 = array();

$output479 .= '';

$output479 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure502 = function() use ($renderingContext, $self) {
$output503 = '';

$output503 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure505 = function() use ($renderingContext, $self) {
$output509 = '';

$output509 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure511 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments510 = array();
$arguments510['additionalAttributes'] = NULL;
$arguments510['data'] = NULL;
$arguments510['class'] = NULL;
$arguments510['dir'] = NULL;
$arguments510['id'] = NULL;
$arguments510['lang'] = NULL;
$arguments510['style'] = NULL;
$arguments510['title'] = NULL;
$arguments510['accesskey'] = NULL;
$arguments510['tabindex'] = NULL;
$arguments510['onclick'] = NULL;
$arguments510['alt'] = NULL;
$arguments510['ismap'] = NULL;
$arguments510['longdesc'] = NULL;
$arguments510['usemap'] = NULL;
$arguments510['src'] = NULL;
$arguments510['treatIdAsReference'] = NULL;
$arguments510['image'] = NULL;
$arguments510['crop'] = NULL;
$arguments510['cropVariant'] = 'default';
$arguments510['width'] = NULL;
$arguments510['height'] = NULL;
$arguments510['minWidth'] = NULL;
$arguments510['minHeight'] = NULL;
$arguments510['maxWidth'] = NULL;
$arguments510['maxHeight'] = NULL;
$arguments510['absolute'] = false;
$arguments510['class'] = 'circle';
$array512 = array (
);$arguments510['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array512);
$arguments510['title'] = '';
$arguments510['alt'] = '';
$array513 = array (
);$arguments510['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array513);
$array514 = array (
);$arguments510['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array514);

$output509 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments510, $renderChildrenClosure511, $renderingContext);

$output509 .= '
                ';
return $output509;
};
$arguments504 = array();
$arguments504['then'] = NULL;
$arguments504['else'] = NULL;
$arguments504['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array507 = array (
);$array506['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array507);

$expression508 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments504['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression508(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);
$arguments504['__thenClosure'] = $renderChildrenClosure505;

$output503 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments504, $renderChildrenClosure505, $renderingContext);

$output503 .= '
              ';
return $output503;
};
$arguments501 = array();
$arguments501['if'] = NULL;

$output479 .= '';

$output479 .= '
            ';
return $output479;
};
$arguments443 = array();
$arguments443['then'] = NULL;
$arguments443['else'] = NULL;
$arguments443['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array476 = array();
$array477 = array (
);$array476['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array477);

$expression478 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments443['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression478(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array476)
					),
					$renderingContext
				);
$arguments443['__thenClosure'] = function() use ($renderingContext, $self) {
$output445 = '';

$output445 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['additionalAttributes'] = NULL;
$arguments446['data'] = NULL;
$arguments446['class'] = NULL;
$arguments446['dir'] = NULL;
$arguments446['id'] = NULL;
$arguments446['lang'] = NULL;
$arguments446['style'] = NULL;
$arguments446['title'] = NULL;
$arguments446['accesskey'] = NULL;
$arguments446['tabindex'] = NULL;
$arguments446['onclick'] = NULL;
$arguments446['alt'] = NULL;
$arguments446['file'] = NULL;
$arguments446['additionalConfig'] = array (
);
$arguments446['width'] = NULL;
$arguments446['height'] = NULL;
$arguments446['cropVariant'] = 'default';
$arguments446['class'] = 'circle';
$array448 = array (
);$arguments446['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array448);
$array449 = array (
);$arguments446['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array449);
$array450 = array (
);$arguments446['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array450);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['then'] = NULL;
$arguments451['else'] = NULL;
$arguments451['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array453 = array();
$array454 = array (
);$array453['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array454);

$expression455 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments451['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression455(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array453)
					),
					$renderingContext
				);
$array456 = array (
);$arguments451['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array456);
$array457 = array (
);$arguments451['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array457);
$arguments446['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments458 = array();
$arguments458['then'] = NULL;
$arguments458['else'] = NULL;
$arguments458['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array460 = array();
$array461 = array (
);$array460['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array461);

$expression462 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments458['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression462(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array460)
					),
					$renderingContext
				);
$array463 = array (
);$arguments458['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array463);
$arguments458['else'] = '';
$arguments446['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments458, $renderChildrenClosure459, $renderingContext);

$output445 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext);

$output445 .= '
              ';
return $output445;
};
$arguments443['__elseClosures'][] = function() use ($renderingContext, $self) {
$output464 = '';

$output464 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
$output470 = '';

$output470 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['additionalAttributes'] = NULL;
$arguments471['data'] = NULL;
$arguments471['class'] = NULL;
$arguments471['dir'] = NULL;
$arguments471['id'] = NULL;
$arguments471['lang'] = NULL;
$arguments471['style'] = NULL;
$arguments471['title'] = NULL;
$arguments471['accesskey'] = NULL;
$arguments471['tabindex'] = NULL;
$arguments471['onclick'] = NULL;
$arguments471['alt'] = NULL;
$arguments471['ismap'] = NULL;
$arguments471['longdesc'] = NULL;
$arguments471['usemap'] = NULL;
$arguments471['src'] = NULL;
$arguments471['treatIdAsReference'] = NULL;
$arguments471['image'] = NULL;
$arguments471['crop'] = NULL;
$arguments471['cropVariant'] = 'default';
$arguments471['width'] = NULL;
$arguments471['height'] = NULL;
$arguments471['minWidth'] = NULL;
$arguments471['minHeight'] = NULL;
$arguments471['maxWidth'] = NULL;
$arguments471['maxHeight'] = NULL;
$arguments471['absolute'] = false;
$arguments471['class'] = 'circle';
$array473 = array (
);$arguments471['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array473);
$arguments471['title'] = '';
$arguments471['alt'] = '';
$array474 = array (
);$arguments471['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array474);
$array475 = array (
);$arguments471['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array475);

$output470 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output470 .= '
                ';
return $output470;
};
$arguments465 = array();
$arguments465['then'] = NULL;
$arguments465['else'] = NULL;
$arguments465['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array467 = array();
$array468 = array (
);$array467['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array468);

$expression469 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments465['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array467)
					),
					$renderingContext
				);
$arguments465['__thenClosure'] = $renderChildrenClosure466;

$output464 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext);

$output464 .= '
              ';
return $output464;
};

$output364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output364 .= '
      </div>
      
      <div class="col-md-9"> 

<div class="team_modal_content" style="font-size:14px;">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure516 = function() use ($renderingContext, $self) {
$array517 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array517);
};
$arguments515 = array();
$arguments515['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output364 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments515, $renderChildrenClosure516, $renderingContext);

$output364 .= '
</div> 
    </div>
    </div>
    </div>
          
        </div>
      </div>
    </div>

    ';
return $output364;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext);

$output0 .= '
  
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure679 = function() use ($renderingContext, $self) {
$output837 = '';

$output837 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
$output840 = '';

$output840 .= '
<div class="col-md-3">
        <div class="teambox">
        <a href="#" data-toggle="modal" data-target="#mModal';
$array841 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array841)]);

$output840 .= '"> 

        <div class="teamPhoto" itemprop="member" itemscope="" itemtype="http://schema.org/members">
  
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure843 = function() use ($renderingContext, $self) {
$output878 = '';

$output878 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
$output881 = '';

$output881 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments882 = array();
$arguments882['additionalAttributes'] = NULL;
$arguments882['data'] = NULL;
$arguments882['class'] = NULL;
$arguments882['dir'] = NULL;
$arguments882['id'] = NULL;
$arguments882['lang'] = NULL;
$arguments882['style'] = NULL;
$arguments882['title'] = NULL;
$arguments882['accesskey'] = NULL;
$arguments882['tabindex'] = NULL;
$arguments882['onclick'] = NULL;
$arguments882['alt'] = NULL;
$arguments882['file'] = NULL;
$arguments882['additionalConfig'] = array (
);
$arguments882['width'] = NULL;
$arguments882['height'] = NULL;
$arguments882['cropVariant'] = 'default';
$arguments882['class'] = 'circle';
$array884 = array (
);$arguments882['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array884);
$array885 = array (
);$arguments882['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array885);
$array886 = array (
);$arguments882['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array886);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['then'] = NULL;
$arguments887['else'] = NULL;
$arguments887['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array889 = array();
$array890 = array (
);$array889['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array890);

$expression891 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments887['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression891(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array889)
					),
					$renderingContext
				);
$array892 = array (
);$arguments887['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array892);
$array893 = array (
);$arguments887['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array893);
$arguments882['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure895 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments894 = array();
$arguments894['then'] = NULL;
$arguments894['else'] = NULL;
$arguments894['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array896 = array();
$array897 = array (
);$array896['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array897);

$expression898 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments894['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression898(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array896)
					),
					$renderingContext
				);
$array899 = array (
);$arguments894['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array899);
$arguments894['else'] = '';
$arguments882['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments894, $renderChildrenClosure895, $renderingContext);

$output881 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);

$output881 .= '
              ';
return $output881;
};
$arguments879 = array();

$output878 .= '';

$output878 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
$output902 = '';

$output902 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure904 = function() use ($renderingContext, $self) {
$output908 = '';

$output908 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure910 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments909 = array();
$arguments909['additionalAttributes'] = NULL;
$arguments909['data'] = NULL;
$arguments909['class'] = NULL;
$arguments909['dir'] = NULL;
$arguments909['id'] = NULL;
$arguments909['lang'] = NULL;
$arguments909['style'] = NULL;
$arguments909['title'] = NULL;
$arguments909['accesskey'] = NULL;
$arguments909['tabindex'] = NULL;
$arguments909['onclick'] = NULL;
$arguments909['alt'] = NULL;
$arguments909['ismap'] = NULL;
$arguments909['longdesc'] = NULL;
$arguments909['usemap'] = NULL;
$arguments909['src'] = NULL;
$arguments909['treatIdAsReference'] = NULL;
$arguments909['image'] = NULL;
$arguments909['crop'] = NULL;
$arguments909['cropVariant'] = 'default';
$arguments909['width'] = NULL;
$arguments909['height'] = NULL;
$arguments909['minWidth'] = NULL;
$arguments909['minHeight'] = NULL;
$arguments909['maxWidth'] = NULL;
$arguments909['maxHeight'] = NULL;
$arguments909['absolute'] = false;
$arguments909['class'] = 'circle';
$array911 = array (
);$arguments909['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array911);
$arguments909['title'] = '';
$arguments909['alt'] = '';
$array912 = array (
);$arguments909['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array912);
$array913 = array (
);$arguments909['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array913);

$output908 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments909, $renderChildrenClosure910, $renderingContext);

$output908 .= '
                ';
return $output908;
};
$arguments903 = array();
$arguments903['then'] = NULL;
$arguments903['else'] = NULL;
$arguments903['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array905 = array();
$array906 = array (
);$array905['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array906);

$expression907 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments903['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression907(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array905)
					),
					$renderingContext
				);
$arguments903['__thenClosure'] = $renderChildrenClosure904;

$output902 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments903, $renderChildrenClosure904, $renderingContext);

$output902 .= '
              ';
return $output902;
};
$arguments900 = array();
$arguments900['if'] = NULL;

$output878 .= '';

$output878 .= '
            ';
return $output878;
};
$arguments842 = array();
$arguments842['then'] = NULL;
$arguments842['else'] = NULL;
$arguments842['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array875 = array();
$array876 = array (
);$array875['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array876);

$expression877 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments842['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression877(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array875)
					),
					$renderingContext
				);
$arguments842['__thenClosure'] = function() use ($renderingContext, $self) {
$output844 = '';

$output844 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments845 = array();
$arguments845['additionalAttributes'] = NULL;
$arguments845['data'] = NULL;
$arguments845['class'] = NULL;
$arguments845['dir'] = NULL;
$arguments845['id'] = NULL;
$arguments845['lang'] = NULL;
$arguments845['style'] = NULL;
$arguments845['title'] = NULL;
$arguments845['accesskey'] = NULL;
$arguments845['tabindex'] = NULL;
$arguments845['onclick'] = NULL;
$arguments845['alt'] = NULL;
$arguments845['file'] = NULL;
$arguments845['additionalConfig'] = array (
);
$arguments845['width'] = NULL;
$arguments845['height'] = NULL;
$arguments845['cropVariant'] = 'default';
$arguments845['class'] = 'circle';
$array847 = array (
);$arguments845['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array847);
$array848 = array (
);$arguments845['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array848);
$array849 = array (
);$arguments845['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array849);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments850 = array();
$arguments850['then'] = NULL;
$arguments850['else'] = NULL;
$arguments850['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array852 = array();
$array853 = array (
);$array852['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array853);

$expression854 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments850['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression854(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array852)
					),
					$renderingContext
				);
$array855 = array (
);$arguments850['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array855);
$array856 = array (
);$arguments850['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array856);
$arguments845['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments857 = array();
$arguments857['then'] = NULL;
$arguments857['else'] = NULL;
$arguments857['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array859 = array();
$array860 = array (
);$array859['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array860);

$expression861 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments857['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression861(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array859)
					),
					$renderingContext
				);
$array862 = array (
);$arguments857['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array862);
$arguments857['else'] = '';
$arguments845['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments857, $renderChildrenClosure858, $renderingContext);

$output844 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '
              ';
return $output844;
};
$arguments842['__elseClosures'][] = function() use ($renderingContext, $self) {
$output863 = '';

$output863 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure865 = function() use ($renderingContext, $self) {
$output869 = '';

$output869 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure871 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments870 = array();
$arguments870['additionalAttributes'] = NULL;
$arguments870['data'] = NULL;
$arguments870['class'] = NULL;
$arguments870['dir'] = NULL;
$arguments870['id'] = NULL;
$arguments870['lang'] = NULL;
$arguments870['style'] = NULL;
$arguments870['title'] = NULL;
$arguments870['accesskey'] = NULL;
$arguments870['tabindex'] = NULL;
$arguments870['onclick'] = NULL;
$arguments870['alt'] = NULL;
$arguments870['ismap'] = NULL;
$arguments870['longdesc'] = NULL;
$arguments870['usemap'] = NULL;
$arguments870['src'] = NULL;
$arguments870['treatIdAsReference'] = NULL;
$arguments870['image'] = NULL;
$arguments870['crop'] = NULL;
$arguments870['cropVariant'] = 'default';
$arguments870['width'] = NULL;
$arguments870['height'] = NULL;
$arguments870['minWidth'] = NULL;
$arguments870['minHeight'] = NULL;
$arguments870['maxWidth'] = NULL;
$arguments870['maxHeight'] = NULL;
$arguments870['absolute'] = false;
$arguments870['class'] = 'circle';
$array872 = array (
);$arguments870['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array872);
$arguments870['title'] = '';
$arguments870['alt'] = '';
$array873 = array (
);$arguments870['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array873);
$array874 = array (
);$arguments870['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array874);

$output869 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments870, $renderChildrenClosure871, $renderingContext);

$output869 .= '
                ';
return $output869;
};
$arguments864 = array();
$arguments864['then'] = NULL;
$arguments864['else'] = NULL;
$arguments864['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array866 = array();
$array867 = array (
);$array866['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array867);

$expression868 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments864['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression868(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array866)
					),
					$renderingContext
				);
$arguments864['__thenClosure'] = $renderChildrenClosure865;

$output863 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments864, $renderChildrenClosure865, $renderingContext);

$output863 .= '
              ';
return $output863;
};

$output840 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments842, $renderChildrenClosure843, $renderingContext);

$output840 .= '
    </div>
    <div class="teamTxt">
          <h4 class="et_pb_module_header">';
$array914 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array914)]);

$output840 .= '</h4>
          <span class="et_pb_member_position">';
$array915 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array915)]);

$output840 .= '</span>
          
        </div> 
        </a>
        </div>
      </div> 
     
      
      <div class="modal fade" id="mModal';
$array916 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array916)]);

$output840 .= '" role="dialog" style="display: none;z-index: 9999;">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content ">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
             
          
         <center> <div class="modal-title" style="font-size:18px;font-family:Lato;font-weight:bold;">';
$array917 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array917)]);

$output840 .= '</div>
      <div class="post101" style="font-size:16px;color:#055e9a;font-weight:bold">';
$array918 = array (
);
$output840 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array918)]);

$output840 .= '</div>
     </center> 
        </div>
        <div class="modal-body">
    <div class="row">
      <div class="col-md-3">
     ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure920 = function() use ($renderingContext, $self) {
$output955 = '';

$output955 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
$output958 = '';

$output958 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure960 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments959 = array();
$arguments959['additionalAttributes'] = NULL;
$arguments959['data'] = NULL;
$arguments959['class'] = NULL;
$arguments959['dir'] = NULL;
$arguments959['id'] = NULL;
$arguments959['lang'] = NULL;
$arguments959['style'] = NULL;
$arguments959['title'] = NULL;
$arguments959['accesskey'] = NULL;
$arguments959['tabindex'] = NULL;
$arguments959['onclick'] = NULL;
$arguments959['alt'] = NULL;
$arguments959['file'] = NULL;
$arguments959['additionalConfig'] = array (
);
$arguments959['width'] = NULL;
$arguments959['height'] = NULL;
$arguments959['cropVariant'] = 'default';
$arguments959['class'] = 'circle';
$array961 = array (
);$arguments959['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array961);
$array962 = array (
);$arguments959['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array962);
$array963 = array (
);$arguments959['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array963);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments964 = array();
$arguments964['then'] = NULL;
$arguments964['else'] = NULL;
$arguments964['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array966 = array();
$array967 = array (
);$array966['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array967);

$expression968 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments964['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression968(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array966)
					),
					$renderingContext
				);
$array969 = array (
);$arguments964['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array969);
$array970 = array (
);$arguments964['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array970);
$arguments959['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure972 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments971 = array();
$arguments971['then'] = NULL;
$arguments971['else'] = NULL;
$arguments971['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array973 = array();
$array974 = array (
);$array973['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array974);

$expression975 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments971['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression975(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array973)
					),
					$renderingContext
				);
$array976 = array (
);$arguments971['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array976);
$arguments971['else'] = '';
$arguments959['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments971, $renderChildrenClosure972, $renderingContext);

$output958 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments959, $renderChildrenClosure960, $renderingContext);

$output958 .= '
              ';
return $output958;
};
$arguments956 = array();

$output955 .= '';

$output955 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure978 = function() use ($renderingContext, $self) {
$output979 = '';

$output979 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['additionalAttributes'] = NULL;
$arguments986['data'] = NULL;
$arguments986['class'] = NULL;
$arguments986['dir'] = NULL;
$arguments986['id'] = NULL;
$arguments986['lang'] = NULL;
$arguments986['style'] = NULL;
$arguments986['title'] = NULL;
$arguments986['accesskey'] = NULL;
$arguments986['tabindex'] = NULL;
$arguments986['onclick'] = NULL;
$arguments986['alt'] = NULL;
$arguments986['ismap'] = NULL;
$arguments986['longdesc'] = NULL;
$arguments986['usemap'] = NULL;
$arguments986['src'] = NULL;
$arguments986['treatIdAsReference'] = NULL;
$arguments986['image'] = NULL;
$arguments986['crop'] = NULL;
$arguments986['cropVariant'] = 'default';
$arguments986['width'] = NULL;
$arguments986['height'] = NULL;
$arguments986['minWidth'] = NULL;
$arguments986['minHeight'] = NULL;
$arguments986['maxWidth'] = NULL;
$arguments986['maxHeight'] = NULL;
$arguments986['absolute'] = false;
$arguments986['class'] = 'circle';
$array988 = array (
);$arguments986['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array988);
$arguments986['title'] = '';
$arguments986['alt'] = '';
$array989 = array (
);$arguments986['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array989);
$array990 = array (
);$arguments986['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array990);

$output985 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext);

$output985 .= '
                ';
return $output985;
};
$arguments980 = array();
$arguments980['then'] = NULL;
$arguments980['else'] = NULL;
$arguments980['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array983);

$expression984 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments980['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$arguments980['__thenClosure'] = $renderChildrenClosure981;

$output979 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

$output979 .= '
              ';
return $output979;
};
$arguments977 = array();
$arguments977['if'] = NULL;

$output955 .= '';

$output955 .= '
            ';
return $output955;
};
$arguments919 = array();
$arguments919['then'] = NULL;
$arguments919['else'] = NULL;
$arguments919['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array952 = array();
$array953 = array (
);$array952['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array953);

$expression954 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments919['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression954(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array952)
					),
					$renderingContext
				);
$arguments919['__thenClosure'] = function() use ($renderingContext, $self) {
$output921 = '';

$output921 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments922 = array();
$arguments922['additionalAttributes'] = NULL;
$arguments922['data'] = NULL;
$arguments922['class'] = NULL;
$arguments922['dir'] = NULL;
$arguments922['id'] = NULL;
$arguments922['lang'] = NULL;
$arguments922['style'] = NULL;
$arguments922['title'] = NULL;
$arguments922['accesskey'] = NULL;
$arguments922['tabindex'] = NULL;
$arguments922['onclick'] = NULL;
$arguments922['alt'] = NULL;
$arguments922['file'] = NULL;
$arguments922['additionalConfig'] = array (
);
$arguments922['width'] = NULL;
$arguments922['height'] = NULL;
$arguments922['cropVariant'] = 'default';
$arguments922['class'] = 'circle';
$array924 = array (
);$arguments922['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array924);
$array925 = array (
);$arguments922['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array925);
$array926 = array (
);$arguments922['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array926);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure928 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments927 = array();
$arguments927['then'] = NULL;
$arguments927['else'] = NULL;
$arguments927['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array929 = array();
$array930 = array (
);$array929['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array930);

$expression931 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments927['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression931(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array929)
					),
					$renderingContext
				);
$array932 = array (
);$arguments927['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array932);
$array933 = array (
);$arguments927['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array933);
$arguments922['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments927, $renderChildrenClosure928, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure935 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments934 = array();
$arguments934['then'] = NULL;
$arguments934['else'] = NULL;
$arguments934['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array936 = array();
$array937 = array (
);$array936['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array937);

$expression938 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments934['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression938(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array936)
					),
					$renderingContext
				);
$array939 = array (
);$arguments934['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array939);
$arguments934['else'] = '';
$arguments922['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments934, $renderChildrenClosure935, $renderingContext);

$output921 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext);

$output921 .= '
              ';
return $output921;
};
$arguments919['__elseClosures'][] = function() use ($renderingContext, $self) {
$output940 = '';

$output940 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure942 = function() use ($renderingContext, $self) {
$output946 = '';

$output946 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments947 = array();
$arguments947['additionalAttributes'] = NULL;
$arguments947['data'] = NULL;
$arguments947['class'] = NULL;
$arguments947['dir'] = NULL;
$arguments947['id'] = NULL;
$arguments947['lang'] = NULL;
$arguments947['style'] = NULL;
$arguments947['title'] = NULL;
$arguments947['accesskey'] = NULL;
$arguments947['tabindex'] = NULL;
$arguments947['onclick'] = NULL;
$arguments947['alt'] = NULL;
$arguments947['ismap'] = NULL;
$arguments947['longdesc'] = NULL;
$arguments947['usemap'] = NULL;
$arguments947['src'] = NULL;
$arguments947['treatIdAsReference'] = NULL;
$arguments947['image'] = NULL;
$arguments947['crop'] = NULL;
$arguments947['cropVariant'] = 'default';
$arguments947['width'] = NULL;
$arguments947['height'] = NULL;
$arguments947['minWidth'] = NULL;
$arguments947['minHeight'] = NULL;
$arguments947['maxWidth'] = NULL;
$arguments947['maxHeight'] = NULL;
$arguments947['absolute'] = false;
$arguments947['class'] = 'circle';
$array949 = array (
);$arguments947['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array949);
$arguments947['title'] = '';
$arguments947['alt'] = '';
$array950 = array (
);$arguments947['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array950);
$array951 = array (
);$arguments947['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array951);

$output946 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments947, $renderChildrenClosure948, $renderingContext);

$output946 .= '
                ';
return $output946;
};
$arguments941 = array();
$arguments941['then'] = NULL;
$arguments941['else'] = NULL;
$arguments941['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array943 = array();
$array944 = array (
);$array943['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array944);

$expression945 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments941['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression945(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array943)
					),
					$renderingContext
				);
$arguments941['__thenClosure'] = $renderChildrenClosure942;

$output940 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments941, $renderChildrenClosure942, $renderingContext);

$output940 .= '
              ';
return $output940;
};

$output840 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments919, $renderChildrenClosure920, $renderingContext);

$output840 .= '
      </div>
      
      <div class="col-md-9"> 

<div class="team_modal_content" style="font-size:14px;">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
$array993 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array993);
};
$arguments991 = array();
$arguments991['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output840 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments991, $renderChildrenClosure992, $renderingContext);

$output840 .= '
</div> 
    </div>
    </div>
    </div>
          
        </div>
      </div>
    </div>

    ';
return $output840;
};
$arguments838 = array();

$output837 .= '';

$output837 .= '
  ';
return $output837;
};
$arguments678 = array();
$arguments678['then'] = NULL;
$arguments678['else'] = NULL;
$arguments678['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array834 = array();
$array835 = array (
);$array834['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array835);
$array834['1'] = ' == 19';

$expression836 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 19);};
$arguments678['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array834)
					),
					$renderingContext
				);
$arguments678['__thenClosure'] = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
<div class="col-md-3">
        <div class="teambox">
        <a href="#" data-toggle="modal" data-target="#mModal';
$array681 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array681)]);

$output680 .= '"> 

        <div class="teamPhoto" itemprop="member" itemscope="" itemtype="http://schema.org/members">
  
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output718 = '';

$output718 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
$output721 = '';

$output721 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments722 = array();
$arguments722['additionalAttributes'] = NULL;
$arguments722['data'] = NULL;
$arguments722['class'] = NULL;
$arguments722['dir'] = NULL;
$arguments722['id'] = NULL;
$arguments722['lang'] = NULL;
$arguments722['style'] = NULL;
$arguments722['title'] = NULL;
$arguments722['accesskey'] = NULL;
$arguments722['tabindex'] = NULL;
$arguments722['onclick'] = NULL;
$arguments722['alt'] = NULL;
$arguments722['file'] = NULL;
$arguments722['additionalConfig'] = array (
);
$arguments722['width'] = NULL;
$arguments722['height'] = NULL;
$arguments722['cropVariant'] = 'default';
$arguments722['class'] = 'circle';
$array724 = array (
);$arguments722['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array724);
$array725 = array (
);$arguments722['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array725);
$array726 = array (
);$arguments722['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array726);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments727 = array();
$arguments727['then'] = NULL;
$arguments727['else'] = NULL;
$arguments727['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array729 = array();
$array730 = array (
);$array729['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array730);

$expression731 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments727['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression731(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array729)
					),
					$renderingContext
				);
$array732 = array (
);$arguments727['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array732);
$array733 = array (
);$arguments727['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array733);
$arguments722['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments734 = array();
$arguments734['then'] = NULL;
$arguments734['else'] = NULL;
$arguments734['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array736 = array();
$array737 = array (
);$array736['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array737);

$expression738 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments734['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression738(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array736)
					),
					$renderingContext
				);
$array739 = array (
);$arguments734['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array739);
$arguments734['else'] = '';
$arguments722['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments734, $renderChildrenClosure735, $renderingContext);

$output721 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments722, $renderChildrenClosure723, $renderingContext);

$output721 .= '
              ';
return $output721;
};
$arguments719 = array();

$output718 .= '';

$output718 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments749 = array();
$arguments749['additionalAttributes'] = NULL;
$arguments749['data'] = NULL;
$arguments749['class'] = NULL;
$arguments749['dir'] = NULL;
$arguments749['id'] = NULL;
$arguments749['lang'] = NULL;
$arguments749['style'] = NULL;
$arguments749['title'] = NULL;
$arguments749['accesskey'] = NULL;
$arguments749['tabindex'] = NULL;
$arguments749['onclick'] = NULL;
$arguments749['alt'] = NULL;
$arguments749['ismap'] = NULL;
$arguments749['longdesc'] = NULL;
$arguments749['usemap'] = NULL;
$arguments749['src'] = NULL;
$arguments749['treatIdAsReference'] = NULL;
$arguments749['image'] = NULL;
$arguments749['crop'] = NULL;
$arguments749['cropVariant'] = 'default';
$arguments749['width'] = NULL;
$arguments749['height'] = NULL;
$arguments749['minWidth'] = NULL;
$arguments749['minHeight'] = NULL;
$arguments749['maxWidth'] = NULL;
$arguments749['maxHeight'] = NULL;
$arguments749['absolute'] = false;
$arguments749['class'] = 'circle';
$array751 = array (
);$arguments749['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array751);
$arguments749['title'] = '';
$arguments749['alt'] = '';
$array752 = array (
);$arguments749['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array752);
$array753 = array (
);$arguments749['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array753);

$output748 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments749, $renderChildrenClosure750, $renderingContext);

$output748 .= '
                ';
return $output748;
};
$arguments743 = array();
$arguments743['then'] = NULL;
$arguments743['else'] = NULL;
$arguments743['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array745 = array();
$array746 = array (
);$array745['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array746);

$expression747 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments743['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression747(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array745)
					),
					$renderingContext
				);
$arguments743['__thenClosure'] = $renderChildrenClosure744;

$output742 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext);

$output742 .= '
              ';
return $output742;
};
$arguments740 = array();
$arguments740['if'] = NULL;

$output718 .= '';

$output718 .= '
            ';
return $output718;
};
$arguments682 = array();
$arguments682['then'] = NULL;
$arguments682['else'] = NULL;
$arguments682['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array715 = array();
$array716 = array (
);$array715['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array716);

$expression717 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments682['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression717(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array715)
					),
					$renderingContext
				);
$arguments682['__thenClosure'] = function() use ($renderingContext, $self) {
$output684 = '';

$output684 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['additionalAttributes'] = NULL;
$arguments685['data'] = NULL;
$arguments685['class'] = NULL;
$arguments685['dir'] = NULL;
$arguments685['id'] = NULL;
$arguments685['lang'] = NULL;
$arguments685['style'] = NULL;
$arguments685['title'] = NULL;
$arguments685['accesskey'] = NULL;
$arguments685['tabindex'] = NULL;
$arguments685['onclick'] = NULL;
$arguments685['alt'] = NULL;
$arguments685['file'] = NULL;
$arguments685['additionalConfig'] = array (
);
$arguments685['width'] = NULL;
$arguments685['height'] = NULL;
$arguments685['cropVariant'] = 'default';
$arguments685['class'] = 'circle';
$array687 = array (
);$arguments685['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array687);
$array688 = array (
);$arguments685['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array688);
$array689 = array (
);$arguments685['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array689);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['then'] = NULL;
$arguments690['else'] = NULL;
$arguments690['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array692 = array();
$array693 = array (
);$array692['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array693);

$expression694 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments690['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression694(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array692)
					),
					$renderingContext
				);
$array695 = array (
);$arguments690['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array695);
$array696 = array (
);$arguments690['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array696);
$arguments685['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments697 = array();
$arguments697['then'] = NULL;
$arguments697['else'] = NULL;
$arguments697['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array699 = array();
$array700 = array (
);$array699['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array700);

$expression701 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments697['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression701(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array699)
					),
					$renderingContext
				);
$array702 = array (
);$arguments697['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array702);
$arguments697['else'] = '';
$arguments685['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments697, $renderChildrenClosure698, $renderingContext);

$output684 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output684 .= '
              ';
return $output684;
};
$arguments682['__elseClosures'][] = function() use ($renderingContext, $self) {
$output703 = '';

$output703 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure705 = function() use ($renderingContext, $self) {
$output709 = '';

$output709 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure711 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments710 = array();
$arguments710['additionalAttributes'] = NULL;
$arguments710['data'] = NULL;
$arguments710['class'] = NULL;
$arguments710['dir'] = NULL;
$arguments710['id'] = NULL;
$arguments710['lang'] = NULL;
$arguments710['style'] = NULL;
$arguments710['title'] = NULL;
$arguments710['accesskey'] = NULL;
$arguments710['tabindex'] = NULL;
$arguments710['onclick'] = NULL;
$arguments710['alt'] = NULL;
$arguments710['ismap'] = NULL;
$arguments710['longdesc'] = NULL;
$arguments710['usemap'] = NULL;
$arguments710['src'] = NULL;
$arguments710['treatIdAsReference'] = NULL;
$arguments710['image'] = NULL;
$arguments710['crop'] = NULL;
$arguments710['cropVariant'] = 'default';
$arguments710['width'] = NULL;
$arguments710['height'] = NULL;
$arguments710['minWidth'] = NULL;
$arguments710['minHeight'] = NULL;
$arguments710['maxWidth'] = NULL;
$arguments710['maxHeight'] = NULL;
$arguments710['absolute'] = false;
$arguments710['class'] = 'circle';
$array712 = array (
);$arguments710['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array712);
$arguments710['title'] = '';
$arguments710['alt'] = '';
$array713 = array (
);$arguments710['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array713);
$array714 = array (
);$arguments710['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array714);

$output709 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments710, $renderChildrenClosure711, $renderingContext);

$output709 .= '
                ';
return $output709;
};
$arguments704 = array();
$arguments704['then'] = NULL;
$arguments704['else'] = NULL;
$arguments704['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array706 = array();
$array707 = array (
);$array706['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array707);

$expression708 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments704['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression708(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array706)
					),
					$renderingContext
				);
$arguments704['__thenClosure'] = $renderChildrenClosure705;

$output703 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments704, $renderChildrenClosure705, $renderingContext);

$output703 .= '
              ';
return $output703;
};

$output680 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output680 .= '
    </div>
    <div class="teamTxt">
          <h4 class="et_pb_module_header">';
$array754 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array754)]);

$output680 .= '</h4>
          <span class="et_pb_member_position">';
$array755 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array755)]);

$output680 .= '</span>
          
        </div> 
        </a>
        </div>
      </div> 
     
      
      <div class="modal fade" id="mModal';
$array756 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.uid', $array756)]);

$output680 .= '" role="dialog" style="display: none;z-index: 9999;">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content ">
     
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
             
          
         <center> <div class="modal-title" style="font-size:18px;font-family:Lato;font-weight:bold;">';
$array757 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array757)]);

$output680 .= '</div>
      <div class="post101" style="font-size:16px;color:#055e9a;font-weight:bold">';
$array758 = array (
);
$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array758)]);

$output680 .= '</div>
     </center> 
        </div>
        <div class="modal-body">
    <div class="row">
      <div class="col-md-3">
     ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure760 = function() use ($renderingContext, $self) {
$output795 = '';

$output795 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
$output798 = '';

$output798 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments799 = array();
$arguments799['additionalAttributes'] = NULL;
$arguments799['data'] = NULL;
$arguments799['class'] = NULL;
$arguments799['dir'] = NULL;
$arguments799['id'] = NULL;
$arguments799['lang'] = NULL;
$arguments799['style'] = NULL;
$arguments799['title'] = NULL;
$arguments799['accesskey'] = NULL;
$arguments799['tabindex'] = NULL;
$arguments799['onclick'] = NULL;
$arguments799['alt'] = NULL;
$arguments799['file'] = NULL;
$arguments799['additionalConfig'] = array (
);
$arguments799['width'] = NULL;
$arguments799['height'] = NULL;
$arguments799['cropVariant'] = 'default';
$arguments799['class'] = 'circle';
$array801 = array (
);$arguments799['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array801);
$array802 = array (
);$arguments799['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array802);
$array803 = array (
);$arguments799['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array803);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments804 = array();
$arguments804['then'] = NULL;
$arguments804['else'] = NULL;
$arguments804['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array806 = array();
$array807 = array (
);$array806['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array807);

$expression808 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments804['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression808(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array806)
					),
					$renderingContext
				);
$array809 = array (
);$arguments804['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array809);
$array810 = array (
);$arguments804['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array810);
$arguments799['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments811 = array();
$arguments811['then'] = NULL;
$arguments811['else'] = NULL;
$arguments811['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array813 = array();
$array814 = array (
);$array813['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array814);

$expression815 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments811['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression815(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array813)
					),
					$renderingContext
				);
$array816 = array (
);$arguments811['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array816);
$arguments811['else'] = '';
$arguments799['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments811, $renderChildrenClosure812, $renderingContext);

$output798 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments799, $renderChildrenClosure800, $renderingContext);

$output798 .= '
              ';
return $output798;
};
$arguments796 = array();

$output795 .= '';

$output795 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure818 = function() use ($renderingContext, $self) {
$output819 = '';

$output819 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
$output825 = '';

$output825 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments826 = array();
$arguments826['additionalAttributes'] = NULL;
$arguments826['data'] = NULL;
$arguments826['class'] = NULL;
$arguments826['dir'] = NULL;
$arguments826['id'] = NULL;
$arguments826['lang'] = NULL;
$arguments826['style'] = NULL;
$arguments826['title'] = NULL;
$arguments826['accesskey'] = NULL;
$arguments826['tabindex'] = NULL;
$arguments826['onclick'] = NULL;
$arguments826['alt'] = NULL;
$arguments826['ismap'] = NULL;
$arguments826['longdesc'] = NULL;
$arguments826['usemap'] = NULL;
$arguments826['src'] = NULL;
$arguments826['treatIdAsReference'] = NULL;
$arguments826['image'] = NULL;
$arguments826['crop'] = NULL;
$arguments826['cropVariant'] = 'default';
$arguments826['width'] = NULL;
$arguments826['height'] = NULL;
$arguments826['minWidth'] = NULL;
$arguments826['minHeight'] = NULL;
$arguments826['maxWidth'] = NULL;
$arguments826['maxHeight'] = NULL;
$arguments826['absolute'] = false;
$arguments826['class'] = 'circle';
$array828 = array (
);$arguments826['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array828);
$arguments826['title'] = '';
$arguments826['alt'] = '';
$array829 = array (
);$arguments826['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array829);
$array830 = array (
);$arguments826['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array830);

$output825 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext);

$output825 .= '
                ';
return $output825;
};
$arguments820 = array();
$arguments820['then'] = NULL;
$arguments820['else'] = NULL;
$arguments820['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array822 = array();
$array823 = array (
);$array822['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array823);

$expression824 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments820['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression824(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array822)
					),
					$renderingContext
				);
$arguments820['__thenClosure'] = $renderChildrenClosure821;

$output819 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);

$output819 .= '
              ';
return $output819;
};
$arguments817 = array();
$arguments817['if'] = NULL;

$output795 .= '';

$output795 .= '
            ';
return $output795;
};
$arguments759 = array();
$arguments759['then'] = NULL;
$arguments759['else'] = NULL;
$arguments759['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array792 = array();
$array793 = array (
);$array792['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array793);

$expression794 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments759['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression794(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array792)
					),
					$renderingContext
				);
$arguments759['__thenClosure'] = function() use ($renderingContext, $self) {
$output761 = '';

$output761 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure763 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments762 = array();
$arguments762['additionalAttributes'] = NULL;
$arguments762['data'] = NULL;
$arguments762['class'] = NULL;
$arguments762['dir'] = NULL;
$arguments762['id'] = NULL;
$arguments762['lang'] = NULL;
$arguments762['style'] = NULL;
$arguments762['title'] = NULL;
$arguments762['accesskey'] = NULL;
$arguments762['tabindex'] = NULL;
$arguments762['onclick'] = NULL;
$arguments762['alt'] = NULL;
$arguments762['file'] = NULL;
$arguments762['additionalConfig'] = array (
);
$arguments762['width'] = NULL;
$arguments762['height'] = NULL;
$arguments762['cropVariant'] = 'default';
$arguments762['class'] = 'circle';
$array764 = array (
);$arguments762['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array764);
$array765 = array (
);$arguments762['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array765);
$array766 = array (
);$arguments762['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array766);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['then'] = NULL;
$arguments767['else'] = NULL;
$arguments767['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array769 = array();
$array770 = array (
);$array769['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array770);

$expression771 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments767['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression771(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array769)
					),
					$renderingContext
				);
$array772 = array (
);$arguments767['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array772);
$array773 = array (
);$arguments767['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array773);
$arguments762['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments774 = array();
$arguments774['then'] = NULL;
$arguments774['else'] = NULL;
$arguments774['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array776 = array();
$array777 = array (
);$array776['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array777);

$expression778 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments774['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression778(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array776)
					),
					$renderingContext
				);
$array779 = array (
);$arguments774['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array779);
$arguments774['else'] = '';
$arguments762['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments774, $renderChildrenClosure775, $renderingContext);

$output761 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments762, $renderChildrenClosure763, $renderingContext);

$output761 .= '
              ';
return $output761;
};
$arguments759['__elseClosures'][] = function() use ($renderingContext, $self) {
$output780 = '';

$output780 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
$output786 = '';

$output786 .= '
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments787 = array();
$arguments787['additionalAttributes'] = NULL;
$arguments787['data'] = NULL;
$arguments787['class'] = NULL;
$arguments787['dir'] = NULL;
$arguments787['id'] = NULL;
$arguments787['lang'] = NULL;
$arguments787['style'] = NULL;
$arguments787['title'] = NULL;
$arguments787['accesskey'] = NULL;
$arguments787['tabindex'] = NULL;
$arguments787['onclick'] = NULL;
$arguments787['alt'] = NULL;
$arguments787['ismap'] = NULL;
$arguments787['longdesc'] = NULL;
$arguments787['usemap'] = NULL;
$arguments787['src'] = NULL;
$arguments787['treatIdAsReference'] = NULL;
$arguments787['image'] = NULL;
$arguments787['crop'] = NULL;
$arguments787['cropVariant'] = 'default';
$arguments787['width'] = NULL;
$arguments787['height'] = NULL;
$arguments787['minWidth'] = NULL;
$arguments787['minHeight'] = NULL;
$arguments787['maxWidth'] = NULL;
$arguments787['maxHeight'] = NULL;
$arguments787['absolute'] = false;
$arguments787['class'] = 'circle';
$array789 = array (
);$arguments787['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array789);
$arguments787['title'] = '';
$arguments787['alt'] = '';
$array790 = array (
);$arguments787['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array790);
$array791 = array (
);$arguments787['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array791);

$output786 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output786 .= '
                ';
return $output786;
};
$arguments781 = array();
$arguments781['then'] = NULL;
$arguments781['else'] = NULL;
$arguments781['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array783 = array();
$array784 = array (
);$array783['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array784);

$expression785 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments781['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression785(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array783)
					),
					$renderingContext
				);
$arguments781['__thenClosure'] = $renderChildrenClosure782;

$output780 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments781, $renderChildrenClosure782, $renderingContext);

$output780 .= '
              ';
return $output780;
};

$output680 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments759, $renderChildrenClosure760, $renderingContext);

$output680 .= '
      </div>
      
      <div class="col-md-9"> 

<div class="team_modal_content" style="font-size:14px;">
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure832 = function() use ($renderingContext, $self) {
$array833 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array833);
};
$arguments831 = array();
$arguments831['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output680 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments831, $renderChildrenClosure832, $renderingContext);

$output680 .= '
</div> 
    </div>
    </div>
    </div>
          
        </div>
      </div>
    </div>

    ';
return $output680;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments678, $renderChildrenClosure679, $renderingContext);

$output0 .= '
  
  ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure995 = function() use ($renderingContext, $self) {
$output1085 = '';

$output1085 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
$output1088 = '';

$output1088 .= '
 <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1090 = function() use ($renderingContext, $self) {
$output1094 = '';

$output1094 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1096 = function() use ($renderingContext, $self) {
$output1131 = '';

$output1131 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
$output1134 = '';

$output1134 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1135 = array();
$arguments1135['additionalAttributes'] = NULL;
$arguments1135['data'] = NULL;
$arguments1135['class'] = NULL;
$arguments1135['dir'] = NULL;
$arguments1135['id'] = NULL;
$arguments1135['lang'] = NULL;
$arguments1135['style'] = NULL;
$arguments1135['title'] = NULL;
$arguments1135['accesskey'] = NULL;
$arguments1135['tabindex'] = NULL;
$arguments1135['onclick'] = NULL;
$arguments1135['alt'] = NULL;
$arguments1135['file'] = NULL;
$arguments1135['additionalConfig'] = array (
);
$arguments1135['width'] = NULL;
$arguments1135['height'] = NULL;
$arguments1135['cropVariant'] = 'default';
$arguments1135['class'] = 'img-responsive';
$array1137 = array (
);$arguments1135['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1137);
$array1138 = array (
);$arguments1135['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1138);
$array1139 = array (
);$arguments1135['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1139);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1140 = array();
$arguments1140['then'] = NULL;
$arguments1140['else'] = NULL;
$arguments1140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1142 = array();
$array1143 = array (
);$array1142['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1143);

$expression1144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1142)
					),
					$renderingContext
				);
$array1145 = array (
);$arguments1140['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1145);
$array1146 = array (
);$arguments1140['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1146);
$arguments1135['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1140, $renderChildrenClosure1141, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1147 = array();
$arguments1147['then'] = NULL;
$arguments1147['else'] = NULL;
$arguments1147['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1149 = array();
$array1150 = array (
);$array1149['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1150);

$expression1151 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1147['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1151(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1149)
					),
					$renderingContext
				);
$array1152 = array (
);$arguments1147['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1152);
$arguments1147['else'] = '';
$arguments1135['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1147, $renderChildrenClosure1148, $renderingContext);

$output1134 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1135, $renderChildrenClosure1136, $renderingContext);

$output1134 .= '
            ';
return $output1134;
};
$arguments1132 = array();

$output1131 .= '';

$output1131 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1154 = function() use ($renderingContext, $self) {
$output1155 = '';

$output1155 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1157 = function() use ($renderingContext, $self) {
$output1161 = '';

$output1161 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1163 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1162 = array();
$arguments1162['additionalAttributes'] = NULL;
$arguments1162['data'] = NULL;
$arguments1162['class'] = NULL;
$arguments1162['dir'] = NULL;
$arguments1162['id'] = NULL;
$arguments1162['lang'] = NULL;
$arguments1162['style'] = NULL;
$arguments1162['title'] = NULL;
$arguments1162['accesskey'] = NULL;
$arguments1162['tabindex'] = NULL;
$arguments1162['onclick'] = NULL;
$arguments1162['alt'] = NULL;
$arguments1162['ismap'] = NULL;
$arguments1162['longdesc'] = NULL;
$arguments1162['usemap'] = NULL;
$arguments1162['src'] = NULL;
$arguments1162['treatIdAsReference'] = NULL;
$arguments1162['image'] = NULL;
$arguments1162['crop'] = NULL;
$arguments1162['cropVariant'] = 'default';
$arguments1162['width'] = NULL;
$arguments1162['height'] = NULL;
$arguments1162['minWidth'] = NULL;
$arguments1162['minHeight'] = NULL;
$arguments1162['maxWidth'] = NULL;
$arguments1162['maxHeight'] = NULL;
$arguments1162['absolute'] = false;
$arguments1162['class'] = 'img-responsive';
$array1164 = array (
);$arguments1162['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1164);
$arguments1162['title'] = '';
$arguments1162['alt'] = '';
$array1165 = array (
);$arguments1162['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1165);
$array1166 = array (
);$arguments1162['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1166);

$output1161 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1162, $renderChildrenClosure1163, $renderingContext);

$output1161 .= '
              ';
return $output1161;
};
$arguments1156 = array();
$arguments1156['then'] = NULL;
$arguments1156['else'] = NULL;
$arguments1156['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1158 = array();
$array1159 = array (
);$array1158['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1159);

$expression1160 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1156['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1158)
					),
					$renderingContext
				);
$arguments1156['__thenClosure'] = $renderChildrenClosure1157;

$output1155 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1156, $renderChildrenClosure1157, $renderingContext);

$output1155 .= '
            ';
return $output1155;
};
$arguments1153 = array();
$arguments1153['if'] = NULL;

$output1131 .= '';

$output1131 .= '
          ';
return $output1131;
};
$arguments1095 = array();
$arguments1095['then'] = NULL;
$arguments1095['else'] = NULL;
$arguments1095['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1128 = array();
$array1129 = array (
);$array1128['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1129);

$expression1130 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1095['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1128)
					),
					$renderingContext
				);
$arguments1095['__thenClosure'] = function() use ($renderingContext, $self) {
$output1097 = '';

$output1097 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1099 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1098 = array();
$arguments1098['additionalAttributes'] = NULL;
$arguments1098['data'] = NULL;
$arguments1098['class'] = NULL;
$arguments1098['dir'] = NULL;
$arguments1098['id'] = NULL;
$arguments1098['lang'] = NULL;
$arguments1098['style'] = NULL;
$arguments1098['title'] = NULL;
$arguments1098['accesskey'] = NULL;
$arguments1098['tabindex'] = NULL;
$arguments1098['onclick'] = NULL;
$arguments1098['alt'] = NULL;
$arguments1098['file'] = NULL;
$arguments1098['additionalConfig'] = array (
);
$arguments1098['width'] = NULL;
$arguments1098['height'] = NULL;
$arguments1098['cropVariant'] = 'default';
$arguments1098['class'] = 'img-responsive';
$array1100 = array (
);$arguments1098['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1100);
$array1101 = array (
);$arguments1098['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1101);
$array1102 = array (
);$arguments1098['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1102);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1103 = array();
$arguments1103['then'] = NULL;
$arguments1103['else'] = NULL;
$arguments1103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1105 = array();
$array1106 = array (
);$array1105['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1106);

$expression1107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1107(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1105)
					),
					$renderingContext
				);
$array1108 = array (
);$arguments1103['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1108);
$array1109 = array (
);$arguments1103['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1109);
$arguments1098['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1103, $renderChildrenClosure1104, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1110 = array();
$arguments1110['then'] = NULL;
$arguments1110['else'] = NULL;
$arguments1110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1112 = array();
$array1113 = array (
);$array1112['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1113);

$expression1114 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1114(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1112)
					),
					$renderingContext
				);
$array1115 = array (
);$arguments1110['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1115);
$arguments1110['else'] = '';
$arguments1098['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1110, $renderChildrenClosure1111, $renderingContext);

$output1097 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1098, $renderChildrenClosure1099, $renderingContext);

$output1097 .= '
            ';
return $output1097;
};
$arguments1095['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1116 = '';

$output1116 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1118 = function() use ($renderingContext, $self) {
$output1122 = '';

$output1122 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1123 = array();
$arguments1123['additionalAttributes'] = NULL;
$arguments1123['data'] = NULL;
$arguments1123['class'] = NULL;
$arguments1123['dir'] = NULL;
$arguments1123['id'] = NULL;
$arguments1123['lang'] = NULL;
$arguments1123['style'] = NULL;
$arguments1123['title'] = NULL;
$arguments1123['accesskey'] = NULL;
$arguments1123['tabindex'] = NULL;
$arguments1123['onclick'] = NULL;
$arguments1123['alt'] = NULL;
$arguments1123['ismap'] = NULL;
$arguments1123['longdesc'] = NULL;
$arguments1123['usemap'] = NULL;
$arguments1123['src'] = NULL;
$arguments1123['treatIdAsReference'] = NULL;
$arguments1123['image'] = NULL;
$arguments1123['crop'] = NULL;
$arguments1123['cropVariant'] = 'default';
$arguments1123['width'] = NULL;
$arguments1123['height'] = NULL;
$arguments1123['minWidth'] = NULL;
$arguments1123['minHeight'] = NULL;
$arguments1123['maxWidth'] = NULL;
$arguments1123['maxHeight'] = NULL;
$arguments1123['absolute'] = false;
$arguments1123['class'] = 'img-responsive';
$array1125 = array (
);$arguments1123['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1125);
$arguments1123['title'] = '';
$arguments1123['alt'] = '';
$array1126 = array (
);$arguments1123['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1126);
$array1127 = array (
);$arguments1123['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1127);

$output1122 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1123, $renderChildrenClosure1124, $renderingContext);

$output1122 .= '
              ';
return $output1122;
};
$arguments1117 = array();
$arguments1117['then'] = NULL;
$arguments1117['else'] = NULL;
$arguments1117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1119 = array();
$array1120 = array (
);$array1119['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1120);

$expression1121 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1119)
					),
					$renderingContext
				);
$arguments1117['__thenClosure'] = $renderChildrenClosure1118;

$output1116 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1117, $renderChildrenClosure1118, $renderingContext);

$output1116 .= '
            ';
return $output1116;
};

$output1094 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1095, $renderChildrenClosure1096, $renderingContext);

$output1094 .= '   
	 ';
return $output1094;
};
$arguments1089 = array();
$arguments1089['additionalAttributes'] = NULL;
$arguments1089['data'] = NULL;
$arguments1089['class'] = NULL;
$arguments1089['dir'] = NULL;
$arguments1089['id'] = NULL;
$arguments1089['lang'] = NULL;
$arguments1089['style'] = NULL;
$arguments1089['title'] = NULL;
$arguments1089['accesskey'] = NULL;
$arguments1089['tabindex'] = NULL;
$arguments1089['onclick'] = NULL;
$arguments1089['newsItem'] = NULL;
$arguments1089['settings'] = array (
);
$arguments1089['uriOnly'] = false;
$arguments1089['configuration'] = array (
);
$arguments1089['content'] = '';
$arguments1089['section'] = NULL;
$array1091 = array (
);$arguments1089['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1091);
$array1092 = array (
);$arguments1089['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1092);
$array1093 = array (
);$arguments1089['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1093);

$output1088 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1089, $renderChildrenClosure1090, $renderingContext);

$output1088 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1167 = array (
);
$output1088 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1167)]);

$output1088 .= '</h5>
                                        <p>';
$array1168 = array (
);
$output1088 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1168)]);

$output1088 .= '</p>
                                        <div class="sp-btn">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1170 = function() use ($renderingContext, $self) {
return 'Read More ';
};
$arguments1169 = array();
$arguments1169['additionalAttributes'] = NULL;
$arguments1169['data'] = NULL;
$arguments1169['class'] = NULL;
$arguments1169['dir'] = NULL;
$arguments1169['id'] = NULL;
$arguments1169['lang'] = NULL;
$arguments1169['style'] = NULL;
$arguments1169['title'] = NULL;
$arguments1169['accesskey'] = NULL;
$arguments1169['tabindex'] = NULL;
$arguments1169['onclick'] = NULL;
$arguments1169['newsItem'] = NULL;
$arguments1169['settings'] = array (
);
$arguments1169['uriOnly'] = false;
$arguments1169['configuration'] = array (
);
$arguments1169['content'] = '';
$arguments1169['section'] = NULL;
$array1171 = array (
);$arguments1169['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1171);
$array1172 = array (
);$arguments1169['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1172);
$array1173 = array (
);$arguments1169['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1173);

$output1088 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1169, $renderChildrenClosure1170, $renderingContext);

$output1088 .= '	  
                                        </div>
                                    </div>
                                </div>
                            </div>
							    ';
return $output1088;
};
$arguments1086 = array();

$output1085 .= '';

$output1085 .= '
  ';
return $output1085;
};
$arguments994 = array();
$arguments994['then'] = NULL;
$arguments994['else'] = NULL;
$arguments994['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1082 = array();
$array1083 = array (
);$array1082['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1083);
$array1082['1'] = ' == 7';

$expression1084 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 7);};
$arguments994['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1084(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1082)
					),
					$renderingContext
				);
$arguments994['__thenClosure'] = function() use ($renderingContext, $self) {
$output996 = '';

$output996 .= '
 <div class="col-xs-6 col-sm-6 col-md-4">
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure998 = function() use ($renderingContext, $self) {
$output1002 = '';

$output1002 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1004 = function() use ($renderingContext, $self) {
$output1039 = '';

$output1039 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1041 = function() use ($renderingContext, $self) {
$output1042 = '';

$output1042 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1044 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1043 = array();
$arguments1043['additionalAttributes'] = NULL;
$arguments1043['data'] = NULL;
$arguments1043['class'] = NULL;
$arguments1043['dir'] = NULL;
$arguments1043['id'] = NULL;
$arguments1043['lang'] = NULL;
$arguments1043['style'] = NULL;
$arguments1043['title'] = NULL;
$arguments1043['accesskey'] = NULL;
$arguments1043['tabindex'] = NULL;
$arguments1043['onclick'] = NULL;
$arguments1043['alt'] = NULL;
$arguments1043['file'] = NULL;
$arguments1043['additionalConfig'] = array (
);
$arguments1043['width'] = NULL;
$arguments1043['height'] = NULL;
$arguments1043['cropVariant'] = 'default';
$arguments1043['class'] = 'img-responsive';
$array1045 = array (
);$arguments1043['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1045);
$array1046 = array (
);$arguments1043['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1046);
$array1047 = array (
);$arguments1043['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1047);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1049 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1048 = array();
$arguments1048['then'] = NULL;
$arguments1048['else'] = NULL;
$arguments1048['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1050 = array();
$array1051 = array (
);$array1050['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1051);

$expression1052 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1048['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1052(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1050)
					),
					$renderingContext
				);
$array1053 = array (
);$arguments1048['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1053);
$array1054 = array (
);$arguments1048['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1054);
$arguments1043['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1048, $renderChildrenClosure1049, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1055 = array();
$arguments1055['then'] = NULL;
$arguments1055['else'] = NULL;
$arguments1055['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1057 = array();
$array1058 = array (
);$array1057['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1058);

$expression1059 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1055['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1059(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1057)
					),
					$renderingContext
				);
$array1060 = array (
);$arguments1055['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1060);
$arguments1055['else'] = '';
$arguments1043['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1042 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1043, $renderChildrenClosure1044, $renderingContext);

$output1042 .= '
            ';
return $output1042;
};
$arguments1040 = array();

$output1039 .= '';

$output1039 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
$output1063 = '';

$output1063 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1065 = function() use ($renderingContext, $self) {
$output1069 = '';

$output1069 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1071 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1070 = array();
$arguments1070['additionalAttributes'] = NULL;
$arguments1070['data'] = NULL;
$arguments1070['class'] = NULL;
$arguments1070['dir'] = NULL;
$arguments1070['id'] = NULL;
$arguments1070['lang'] = NULL;
$arguments1070['style'] = NULL;
$arguments1070['title'] = NULL;
$arguments1070['accesskey'] = NULL;
$arguments1070['tabindex'] = NULL;
$arguments1070['onclick'] = NULL;
$arguments1070['alt'] = NULL;
$arguments1070['ismap'] = NULL;
$arguments1070['longdesc'] = NULL;
$arguments1070['usemap'] = NULL;
$arguments1070['src'] = NULL;
$arguments1070['treatIdAsReference'] = NULL;
$arguments1070['image'] = NULL;
$arguments1070['crop'] = NULL;
$arguments1070['cropVariant'] = 'default';
$arguments1070['width'] = NULL;
$arguments1070['height'] = NULL;
$arguments1070['minWidth'] = NULL;
$arguments1070['minHeight'] = NULL;
$arguments1070['maxWidth'] = NULL;
$arguments1070['maxHeight'] = NULL;
$arguments1070['absolute'] = false;
$arguments1070['class'] = 'img-responsive';
$array1072 = array (
);$arguments1070['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1072);
$arguments1070['title'] = '';
$arguments1070['alt'] = '';
$array1073 = array (
);$arguments1070['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1073);
$array1074 = array (
);$arguments1070['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1074);

$output1069 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1070, $renderChildrenClosure1071, $renderingContext);

$output1069 .= '
              ';
return $output1069;
};
$arguments1064 = array();
$arguments1064['then'] = NULL;
$arguments1064['else'] = NULL;
$arguments1064['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1066 = array();
$array1067 = array (
);$array1066['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1067);

$expression1068 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1064['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1068(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1066)
					),
					$renderingContext
				);
$arguments1064['__thenClosure'] = $renderChildrenClosure1065;

$output1063 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1064, $renderChildrenClosure1065, $renderingContext);

$output1063 .= '
            ';
return $output1063;
};
$arguments1061 = array();
$arguments1061['if'] = NULL;

$output1039 .= '';

$output1039 .= '
          ';
return $output1039;
};
$arguments1003 = array();
$arguments1003['then'] = NULL;
$arguments1003['else'] = NULL;
$arguments1003['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1036 = array();
$array1037 = array (
);$array1036['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1037);

$expression1038 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1003['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1038(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1036)
					),
					$renderingContext
				);
$arguments1003['__thenClosure'] = function() use ($renderingContext, $self) {
$output1005 = '';

$output1005 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1007 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1006 = array();
$arguments1006['additionalAttributes'] = NULL;
$arguments1006['data'] = NULL;
$arguments1006['class'] = NULL;
$arguments1006['dir'] = NULL;
$arguments1006['id'] = NULL;
$arguments1006['lang'] = NULL;
$arguments1006['style'] = NULL;
$arguments1006['title'] = NULL;
$arguments1006['accesskey'] = NULL;
$arguments1006['tabindex'] = NULL;
$arguments1006['onclick'] = NULL;
$arguments1006['alt'] = NULL;
$arguments1006['file'] = NULL;
$arguments1006['additionalConfig'] = array (
);
$arguments1006['width'] = NULL;
$arguments1006['height'] = NULL;
$arguments1006['cropVariant'] = 'default';
$arguments1006['class'] = 'img-responsive';
$array1008 = array (
);$arguments1006['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1008);
$array1009 = array (
);$arguments1006['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1009);
$array1010 = array (
);$arguments1006['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1010);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1012 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1011 = array();
$arguments1011['then'] = NULL;
$arguments1011['else'] = NULL;
$arguments1011['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1013 = array();
$array1014 = array (
);$array1013['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1014);

$expression1015 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1011['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1015(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1013)
					),
					$renderingContext
				);
$array1016 = array (
);$arguments1011['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1016);
$array1017 = array (
);$arguments1011['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1017);
$arguments1006['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1011, $renderChildrenClosure1012, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1019 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1018 = array();
$arguments1018['then'] = NULL;
$arguments1018['else'] = NULL;
$arguments1018['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1020 = array();
$array1021 = array (
);$array1020['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1021);

$expression1022 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1018['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1022(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1020)
					),
					$renderingContext
				);
$array1023 = array (
);$arguments1018['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1023);
$arguments1018['else'] = '';
$arguments1006['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1018, $renderChildrenClosure1019, $renderingContext);

$output1005 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1006, $renderChildrenClosure1007, $renderingContext);

$output1005 .= '
            ';
return $output1005;
};
$arguments1003['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1024 = '';

$output1024 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1026 = function() use ($renderingContext, $self) {
$output1030 = '';

$output1030 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1032 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1031 = array();
$arguments1031['additionalAttributes'] = NULL;
$arguments1031['data'] = NULL;
$arguments1031['class'] = NULL;
$arguments1031['dir'] = NULL;
$arguments1031['id'] = NULL;
$arguments1031['lang'] = NULL;
$arguments1031['style'] = NULL;
$arguments1031['title'] = NULL;
$arguments1031['accesskey'] = NULL;
$arguments1031['tabindex'] = NULL;
$arguments1031['onclick'] = NULL;
$arguments1031['alt'] = NULL;
$arguments1031['ismap'] = NULL;
$arguments1031['longdesc'] = NULL;
$arguments1031['usemap'] = NULL;
$arguments1031['src'] = NULL;
$arguments1031['treatIdAsReference'] = NULL;
$arguments1031['image'] = NULL;
$arguments1031['crop'] = NULL;
$arguments1031['cropVariant'] = 'default';
$arguments1031['width'] = NULL;
$arguments1031['height'] = NULL;
$arguments1031['minWidth'] = NULL;
$arguments1031['minHeight'] = NULL;
$arguments1031['maxWidth'] = NULL;
$arguments1031['maxHeight'] = NULL;
$arguments1031['absolute'] = false;
$arguments1031['class'] = 'img-responsive';
$array1033 = array (
);$arguments1031['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1033);
$arguments1031['title'] = '';
$arguments1031['alt'] = '';
$array1034 = array (
);$arguments1031['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1034);
$array1035 = array (
);$arguments1031['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1035);

$output1030 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1031, $renderChildrenClosure1032, $renderingContext);

$output1030 .= '
              ';
return $output1030;
};
$arguments1025 = array();
$arguments1025['then'] = NULL;
$arguments1025['else'] = NULL;
$arguments1025['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1027 = array();
$array1028 = array (
);$array1027['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1028);

$expression1029 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1025['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1029(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1027)
					),
					$renderingContext
				);
$arguments1025['__thenClosure'] = $renderChildrenClosure1026;

$output1024 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1025, $renderChildrenClosure1026, $renderingContext);

$output1024 .= '
            ';
return $output1024;
};

$output1002 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1003, $renderChildrenClosure1004, $renderingContext);

$output1002 .= '   
	 ';
return $output1002;
};
$arguments997 = array();
$arguments997['additionalAttributes'] = NULL;
$arguments997['data'] = NULL;
$arguments997['class'] = NULL;
$arguments997['dir'] = NULL;
$arguments997['id'] = NULL;
$arguments997['lang'] = NULL;
$arguments997['style'] = NULL;
$arguments997['title'] = NULL;
$arguments997['accesskey'] = NULL;
$arguments997['tabindex'] = NULL;
$arguments997['onclick'] = NULL;
$arguments997['newsItem'] = NULL;
$arguments997['settings'] = array (
);
$arguments997['uriOnly'] = false;
$arguments997['configuration'] = array (
);
$arguments997['content'] = '';
$arguments997['section'] = NULL;
$array999 = array (
);$arguments997['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array999);
$array1000 = array (
);$arguments997['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1000);
$array1001 = array (
);$arguments997['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1001);

$output996 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments997, $renderChildrenClosure998, $renderingContext);

$output996 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1075 = array (
);
$output996 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1075)]);

$output996 .= '</h5>
                                        <p>';
$array1076 = array (
);
$output996 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1076)]);

$output996 .= '</p>
                                        <div class="sp-btn">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1078 = function() use ($renderingContext, $self) {
return 'Read More ';
};
$arguments1077 = array();
$arguments1077['additionalAttributes'] = NULL;
$arguments1077['data'] = NULL;
$arguments1077['class'] = NULL;
$arguments1077['dir'] = NULL;
$arguments1077['id'] = NULL;
$arguments1077['lang'] = NULL;
$arguments1077['style'] = NULL;
$arguments1077['title'] = NULL;
$arguments1077['accesskey'] = NULL;
$arguments1077['tabindex'] = NULL;
$arguments1077['onclick'] = NULL;
$arguments1077['newsItem'] = NULL;
$arguments1077['settings'] = array (
);
$arguments1077['uriOnly'] = false;
$arguments1077['configuration'] = array (
);
$arguments1077['content'] = '';
$arguments1077['section'] = NULL;
$array1079 = array (
);$arguments1077['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1079);
$array1080 = array (
);$arguments1077['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1080);
$array1081 = array (
);$arguments1077['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1081);

$output996 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1077, $renderChildrenClosure1078, $renderingContext);

$output996 .= '	  
                                        </div>
                                    </div>
                                </div>
                            </div>
							    ';
return $output996;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments994, $renderChildrenClosure995, $renderingContext);

$output0 .= ' 
  
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1175 = function() use ($renderingContext, $self) {
$output1265 = '';

$output1265 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1267 = function() use ($renderingContext, $self) {
$output1268 = '';

$output1268 .= '
 <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1270 = function() use ($renderingContext, $self) {
$output1274 = '';

$output1274 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1276 = function() use ($renderingContext, $self) {
$output1311 = '';

$output1311 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1313 = function() use ($renderingContext, $self) {
$output1314 = '';

$output1314 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1315 = array();
$arguments1315['additionalAttributes'] = NULL;
$arguments1315['data'] = NULL;
$arguments1315['class'] = NULL;
$arguments1315['dir'] = NULL;
$arguments1315['id'] = NULL;
$arguments1315['lang'] = NULL;
$arguments1315['style'] = NULL;
$arguments1315['title'] = NULL;
$arguments1315['accesskey'] = NULL;
$arguments1315['tabindex'] = NULL;
$arguments1315['onclick'] = NULL;
$arguments1315['alt'] = NULL;
$arguments1315['file'] = NULL;
$arguments1315['additionalConfig'] = array (
);
$arguments1315['width'] = NULL;
$arguments1315['height'] = NULL;
$arguments1315['cropVariant'] = 'default';
$arguments1315['class'] = 'img-responsive';
$array1317 = array (
);$arguments1315['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1317);
$array1318 = array (
);$arguments1315['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1318);
$array1319 = array (
);$arguments1315['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1319);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1320 = array();
$arguments1320['then'] = NULL;
$arguments1320['else'] = NULL;
$arguments1320['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1322 = array();
$array1323 = array (
);$array1322['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1323);

$expression1324 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1320['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1324(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1322)
					),
					$renderingContext
				);
$array1325 = array (
);$arguments1320['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1325);
$array1326 = array (
);$arguments1320['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1326);
$arguments1315['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1320, $renderChildrenClosure1321, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1327 = array();
$arguments1327['then'] = NULL;
$arguments1327['else'] = NULL;
$arguments1327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1329 = array();
$array1330 = array (
);$array1329['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1330);

$expression1331 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1329)
					),
					$renderingContext
				);
$array1332 = array (
);$arguments1327['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1332);
$arguments1327['else'] = '';
$arguments1315['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1327, $renderChildrenClosure1328, $renderingContext);

$output1314 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1315, $renderChildrenClosure1316, $renderingContext);

$output1314 .= '
            ';
return $output1314;
};
$arguments1312 = array();

$output1311 .= '';

$output1311 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1334 = function() use ($renderingContext, $self) {
$output1335 = '';

$output1335 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1337 = function() use ($renderingContext, $self) {
$output1341 = '';

$output1341 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1343 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1342 = array();
$arguments1342['additionalAttributes'] = NULL;
$arguments1342['data'] = NULL;
$arguments1342['class'] = NULL;
$arguments1342['dir'] = NULL;
$arguments1342['id'] = NULL;
$arguments1342['lang'] = NULL;
$arguments1342['style'] = NULL;
$arguments1342['title'] = NULL;
$arguments1342['accesskey'] = NULL;
$arguments1342['tabindex'] = NULL;
$arguments1342['onclick'] = NULL;
$arguments1342['alt'] = NULL;
$arguments1342['ismap'] = NULL;
$arguments1342['longdesc'] = NULL;
$arguments1342['usemap'] = NULL;
$arguments1342['src'] = NULL;
$arguments1342['treatIdAsReference'] = NULL;
$arguments1342['image'] = NULL;
$arguments1342['crop'] = NULL;
$arguments1342['cropVariant'] = 'default';
$arguments1342['width'] = NULL;
$arguments1342['height'] = NULL;
$arguments1342['minWidth'] = NULL;
$arguments1342['minHeight'] = NULL;
$arguments1342['maxWidth'] = NULL;
$arguments1342['maxHeight'] = NULL;
$arguments1342['absolute'] = false;
$arguments1342['class'] = 'img-responsive';
$array1344 = array (
);$arguments1342['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1344);
$arguments1342['title'] = '';
$arguments1342['alt'] = '';
$array1345 = array (
);$arguments1342['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1345);
$array1346 = array (
);$arguments1342['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1346);

$output1341 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1342, $renderChildrenClosure1343, $renderingContext);

$output1341 .= '
              ';
return $output1341;
};
$arguments1336 = array();
$arguments1336['then'] = NULL;
$arguments1336['else'] = NULL;
$arguments1336['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1338 = array();
$array1339 = array (
);$array1338['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1339);

$expression1340 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1336['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1340(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1338)
					),
					$renderingContext
				);
$arguments1336['__thenClosure'] = $renderChildrenClosure1337;

$output1335 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1336, $renderChildrenClosure1337, $renderingContext);

$output1335 .= '
            ';
return $output1335;
};
$arguments1333 = array();
$arguments1333['if'] = NULL;

$output1311 .= '';

$output1311 .= '
          ';
return $output1311;
};
$arguments1275 = array();
$arguments1275['then'] = NULL;
$arguments1275['else'] = NULL;
$arguments1275['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1308 = array();
$array1309 = array (
);$array1308['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1309);

$expression1310 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1275['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1308)
					),
					$renderingContext
				);
$arguments1275['__thenClosure'] = function() use ($renderingContext, $self) {
$output1277 = '';

$output1277 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1279 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1278 = array();
$arguments1278['additionalAttributes'] = NULL;
$arguments1278['data'] = NULL;
$arguments1278['class'] = NULL;
$arguments1278['dir'] = NULL;
$arguments1278['id'] = NULL;
$arguments1278['lang'] = NULL;
$arguments1278['style'] = NULL;
$arguments1278['title'] = NULL;
$arguments1278['accesskey'] = NULL;
$arguments1278['tabindex'] = NULL;
$arguments1278['onclick'] = NULL;
$arguments1278['alt'] = NULL;
$arguments1278['file'] = NULL;
$arguments1278['additionalConfig'] = array (
);
$arguments1278['width'] = NULL;
$arguments1278['height'] = NULL;
$arguments1278['cropVariant'] = 'default';
$arguments1278['class'] = 'img-responsive';
$array1280 = array (
);$arguments1278['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1280);
$array1281 = array (
);$arguments1278['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1281);
$array1282 = array (
);$arguments1278['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1282);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1283 = array();
$arguments1283['then'] = NULL;
$arguments1283['else'] = NULL;
$arguments1283['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1285 = array();
$array1286 = array (
);$array1285['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1286);

$expression1287 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1283['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1287(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1285)
					),
					$renderingContext
				);
$array1288 = array (
);$arguments1283['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1288);
$array1289 = array (
);$arguments1283['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1289);
$arguments1278['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1283, $renderChildrenClosure1284, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1291 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1290 = array();
$arguments1290['then'] = NULL;
$arguments1290['else'] = NULL;
$arguments1290['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1292 = array();
$array1293 = array (
);$array1292['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1293);

$expression1294 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1290['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1294(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1292)
					),
					$renderingContext
				);
$array1295 = array (
);$arguments1290['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1295);
$arguments1290['else'] = '';
$arguments1278['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1290, $renderChildrenClosure1291, $renderingContext);

$output1277 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1278, $renderChildrenClosure1279, $renderingContext);

$output1277 .= '
            ';
return $output1277;
};
$arguments1275['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1296 = '';

$output1296 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1298 = function() use ($renderingContext, $self) {
$output1302 = '';

$output1302 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1303 = array();
$arguments1303['additionalAttributes'] = NULL;
$arguments1303['data'] = NULL;
$arguments1303['class'] = NULL;
$arguments1303['dir'] = NULL;
$arguments1303['id'] = NULL;
$arguments1303['lang'] = NULL;
$arguments1303['style'] = NULL;
$arguments1303['title'] = NULL;
$arguments1303['accesskey'] = NULL;
$arguments1303['tabindex'] = NULL;
$arguments1303['onclick'] = NULL;
$arguments1303['alt'] = NULL;
$arguments1303['ismap'] = NULL;
$arguments1303['longdesc'] = NULL;
$arguments1303['usemap'] = NULL;
$arguments1303['src'] = NULL;
$arguments1303['treatIdAsReference'] = NULL;
$arguments1303['image'] = NULL;
$arguments1303['crop'] = NULL;
$arguments1303['cropVariant'] = 'default';
$arguments1303['width'] = NULL;
$arguments1303['height'] = NULL;
$arguments1303['minWidth'] = NULL;
$arguments1303['minHeight'] = NULL;
$arguments1303['maxWidth'] = NULL;
$arguments1303['maxHeight'] = NULL;
$arguments1303['absolute'] = false;
$arguments1303['class'] = 'img-responsive';
$array1305 = array (
);$arguments1303['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1305);
$arguments1303['title'] = '';
$arguments1303['alt'] = '';
$array1306 = array (
);$arguments1303['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1306);
$array1307 = array (
);$arguments1303['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1307);

$output1302 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1303, $renderChildrenClosure1304, $renderingContext);

$output1302 .= '
              ';
return $output1302;
};
$arguments1297 = array();
$arguments1297['then'] = NULL;
$arguments1297['else'] = NULL;
$arguments1297['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1299 = array();
$array1300 = array (
);$array1299['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1300);

$expression1301 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1297['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1301(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1299)
					),
					$renderingContext
				);
$arguments1297['__thenClosure'] = $renderChildrenClosure1298;

$output1296 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1297, $renderChildrenClosure1298, $renderingContext);

$output1296 .= '
            ';
return $output1296;
};

$output1274 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1275, $renderChildrenClosure1276, $renderingContext);

$output1274 .= '   
	 ';
return $output1274;
};
$arguments1269 = array();
$arguments1269['additionalAttributes'] = NULL;
$arguments1269['data'] = NULL;
$arguments1269['class'] = NULL;
$arguments1269['dir'] = NULL;
$arguments1269['id'] = NULL;
$arguments1269['lang'] = NULL;
$arguments1269['style'] = NULL;
$arguments1269['title'] = NULL;
$arguments1269['accesskey'] = NULL;
$arguments1269['tabindex'] = NULL;
$arguments1269['onclick'] = NULL;
$arguments1269['newsItem'] = NULL;
$arguments1269['settings'] = array (
);
$arguments1269['uriOnly'] = false;
$arguments1269['configuration'] = array (
);
$arguments1269['content'] = '';
$arguments1269['section'] = NULL;
$array1271 = array (
);$arguments1269['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1271);
$array1272 = array (
);$arguments1269['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1272);
$array1273 = array (
);$arguments1269['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1273);

$output1268 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1269, $renderChildrenClosure1270, $renderingContext);

$output1268 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1347 = array (
);
$output1268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1347)]);

$output1268 .= '</h5>
                                        <p>';
$array1348 = array (
);
$output1268 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1348)]);

$output1268 .= '</p>
                                        <div class="sp-btn">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1350 = function() use ($renderingContext, $self) {
return 'Read More  ';
};
$arguments1349 = array();
$arguments1349['additionalAttributes'] = NULL;
$arguments1349['data'] = NULL;
$arguments1349['class'] = NULL;
$arguments1349['dir'] = NULL;
$arguments1349['id'] = NULL;
$arguments1349['lang'] = NULL;
$arguments1349['style'] = NULL;
$arguments1349['title'] = NULL;
$arguments1349['accesskey'] = NULL;
$arguments1349['tabindex'] = NULL;
$arguments1349['onclick'] = NULL;
$arguments1349['newsItem'] = NULL;
$arguments1349['settings'] = array (
);
$arguments1349['uriOnly'] = false;
$arguments1349['configuration'] = array (
);
$arguments1349['content'] = '';
$arguments1349['section'] = NULL;
$array1351 = array (
);$arguments1349['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1351);
$array1352 = array (
);$arguments1349['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1352);
$array1353 = array (
);$arguments1349['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1353);

$output1268 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1349, $renderChildrenClosure1350, $renderingContext);

$output1268 .= '	  
                                        </div>
                                    </div>
                                </div>
                            </div>
							    ';
return $output1268;
};
$arguments1266 = array();

$output1265 .= '';

$output1265 .= '
  ';
return $output1265;
};
$arguments1174 = array();
$arguments1174['then'] = NULL;
$arguments1174['else'] = NULL;
$arguments1174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1262 = array();
$array1263 = array (
);$array1262['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1263);
$array1262['1'] = ' == 8';

$expression1264 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 8);};
$arguments1174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1264(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1262)
					),
					$renderingContext
				);
$arguments1174['__thenClosure'] = function() use ($renderingContext, $self) {
$output1176 = '';

$output1176 .= '
 <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
$output1182 = '';

$output1182 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1184 = function() use ($renderingContext, $self) {
$output1219 = '';

$output1219 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$output1222 = '';

$output1222 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1223 = array();
$arguments1223['additionalAttributes'] = NULL;
$arguments1223['data'] = NULL;
$arguments1223['class'] = NULL;
$arguments1223['dir'] = NULL;
$arguments1223['id'] = NULL;
$arguments1223['lang'] = NULL;
$arguments1223['style'] = NULL;
$arguments1223['title'] = NULL;
$arguments1223['accesskey'] = NULL;
$arguments1223['tabindex'] = NULL;
$arguments1223['onclick'] = NULL;
$arguments1223['alt'] = NULL;
$arguments1223['file'] = NULL;
$arguments1223['additionalConfig'] = array (
);
$arguments1223['width'] = NULL;
$arguments1223['height'] = NULL;
$arguments1223['cropVariant'] = 'default';
$arguments1223['class'] = 'img-responsive';
$array1225 = array (
);$arguments1223['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1225);
$array1226 = array (
);$arguments1223['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1226);
$array1227 = array (
);$arguments1223['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1227);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1228 = array();
$arguments1228['then'] = NULL;
$arguments1228['else'] = NULL;
$arguments1228['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1230 = array();
$array1231 = array (
);$array1230['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1231);

$expression1232 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1228['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1232(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1230)
					),
					$renderingContext
				);
$array1233 = array (
);$arguments1228['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1233);
$array1234 = array (
);$arguments1228['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1234);
$arguments1223['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1228, $renderChildrenClosure1229, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1235 = array();
$arguments1235['then'] = NULL;
$arguments1235['else'] = NULL;
$arguments1235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1237 = array();
$array1238 = array (
);$array1237['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1238);

$expression1239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1237)
					),
					$renderingContext
				);
$array1240 = array (
);$arguments1235['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1240);
$arguments1235['else'] = '';
$arguments1223['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1235, $renderChildrenClosure1236, $renderingContext);

$output1222 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext);

$output1222 .= '
            ';
return $output1222;
};
$arguments1220 = array();

$output1219 .= '';

$output1219 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1242 = function() use ($renderingContext, $self) {
$output1243 = '';

$output1243 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1245 = function() use ($renderingContext, $self) {
$output1249 = '';

$output1249 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1250 = array();
$arguments1250['additionalAttributes'] = NULL;
$arguments1250['data'] = NULL;
$arguments1250['class'] = NULL;
$arguments1250['dir'] = NULL;
$arguments1250['id'] = NULL;
$arguments1250['lang'] = NULL;
$arguments1250['style'] = NULL;
$arguments1250['title'] = NULL;
$arguments1250['accesskey'] = NULL;
$arguments1250['tabindex'] = NULL;
$arguments1250['onclick'] = NULL;
$arguments1250['alt'] = NULL;
$arguments1250['ismap'] = NULL;
$arguments1250['longdesc'] = NULL;
$arguments1250['usemap'] = NULL;
$arguments1250['src'] = NULL;
$arguments1250['treatIdAsReference'] = NULL;
$arguments1250['image'] = NULL;
$arguments1250['crop'] = NULL;
$arguments1250['cropVariant'] = 'default';
$arguments1250['width'] = NULL;
$arguments1250['height'] = NULL;
$arguments1250['minWidth'] = NULL;
$arguments1250['minHeight'] = NULL;
$arguments1250['maxWidth'] = NULL;
$arguments1250['maxHeight'] = NULL;
$arguments1250['absolute'] = false;
$arguments1250['class'] = 'img-responsive';
$array1252 = array (
);$arguments1250['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1252);
$arguments1250['title'] = '';
$arguments1250['alt'] = '';
$array1253 = array (
);$arguments1250['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1253);
$array1254 = array (
);$arguments1250['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1254);

$output1249 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1250, $renderChildrenClosure1251, $renderingContext);

$output1249 .= '
              ';
return $output1249;
};
$arguments1244 = array();
$arguments1244['then'] = NULL;
$arguments1244['else'] = NULL;
$arguments1244['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1246 = array();
$array1247 = array (
);$array1246['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1247);

$expression1248 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1244['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1248(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1246)
					),
					$renderingContext
				);
$arguments1244['__thenClosure'] = $renderChildrenClosure1245;

$output1243 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1244, $renderChildrenClosure1245, $renderingContext);

$output1243 .= '
            ';
return $output1243;
};
$arguments1241 = array();
$arguments1241['if'] = NULL;

$output1219 .= '';

$output1219 .= '
          ';
return $output1219;
};
$arguments1183 = array();
$arguments1183['then'] = NULL;
$arguments1183['else'] = NULL;
$arguments1183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1216 = array();
$array1217 = array (
);$array1216['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1217);

$expression1218 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1216)
					),
					$renderingContext
				);
$arguments1183['__thenClosure'] = function() use ($renderingContext, $self) {
$output1185 = '';

$output1185 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1186 = array();
$arguments1186['additionalAttributes'] = NULL;
$arguments1186['data'] = NULL;
$arguments1186['class'] = NULL;
$arguments1186['dir'] = NULL;
$arguments1186['id'] = NULL;
$arguments1186['lang'] = NULL;
$arguments1186['style'] = NULL;
$arguments1186['title'] = NULL;
$arguments1186['accesskey'] = NULL;
$arguments1186['tabindex'] = NULL;
$arguments1186['onclick'] = NULL;
$arguments1186['alt'] = NULL;
$arguments1186['file'] = NULL;
$arguments1186['additionalConfig'] = array (
);
$arguments1186['width'] = NULL;
$arguments1186['height'] = NULL;
$arguments1186['cropVariant'] = 'default';
$arguments1186['class'] = 'img-responsive';
$array1188 = array (
);$arguments1186['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1188);
$array1189 = array (
);$arguments1186['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1189);
$array1190 = array (
);$arguments1186['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1190);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1191 = array();
$arguments1191['then'] = NULL;
$arguments1191['else'] = NULL;
$arguments1191['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1193 = array();
$array1194 = array (
);$array1193['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1194);

$expression1195 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1191['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1195(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1193)
					),
					$renderingContext
				);
$array1196 = array (
);$arguments1191['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1196);
$array1197 = array (
);$arguments1191['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1197);
$arguments1186['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1191, $renderChildrenClosure1192, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1199 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1198 = array();
$arguments1198['then'] = NULL;
$arguments1198['else'] = NULL;
$arguments1198['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1200 = array();
$array1201 = array (
);$array1200['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1201);

$expression1202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1198['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1202(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1200)
					),
					$renderingContext
				);
$array1203 = array (
);$arguments1198['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1203);
$arguments1198['else'] = '';
$arguments1186['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1198, $renderChildrenClosure1199, $renderingContext);

$output1185 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext);

$output1185 .= '
            ';
return $output1185;
};
$arguments1183['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1204 = '';

$output1204 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1206 = function() use ($renderingContext, $self) {
$output1210 = '';

$output1210 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1211 = array();
$arguments1211['additionalAttributes'] = NULL;
$arguments1211['data'] = NULL;
$arguments1211['class'] = NULL;
$arguments1211['dir'] = NULL;
$arguments1211['id'] = NULL;
$arguments1211['lang'] = NULL;
$arguments1211['style'] = NULL;
$arguments1211['title'] = NULL;
$arguments1211['accesskey'] = NULL;
$arguments1211['tabindex'] = NULL;
$arguments1211['onclick'] = NULL;
$arguments1211['alt'] = NULL;
$arguments1211['ismap'] = NULL;
$arguments1211['longdesc'] = NULL;
$arguments1211['usemap'] = NULL;
$arguments1211['src'] = NULL;
$arguments1211['treatIdAsReference'] = NULL;
$arguments1211['image'] = NULL;
$arguments1211['crop'] = NULL;
$arguments1211['cropVariant'] = 'default';
$arguments1211['width'] = NULL;
$arguments1211['height'] = NULL;
$arguments1211['minWidth'] = NULL;
$arguments1211['minHeight'] = NULL;
$arguments1211['maxWidth'] = NULL;
$arguments1211['maxHeight'] = NULL;
$arguments1211['absolute'] = false;
$arguments1211['class'] = 'img-responsive';
$array1213 = array (
);$arguments1211['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1213);
$arguments1211['title'] = '';
$arguments1211['alt'] = '';
$array1214 = array (
);$arguments1211['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1214);
$array1215 = array (
);$arguments1211['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1215);

$output1210 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1211, $renderChildrenClosure1212, $renderingContext);

$output1210 .= '
              ';
return $output1210;
};
$arguments1205 = array();
$arguments1205['then'] = NULL;
$arguments1205['else'] = NULL;
$arguments1205['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1207 = array();
$array1208 = array (
);$array1207['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1208);

$expression1209 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1205['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1209(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1207)
					),
					$renderingContext
				);
$arguments1205['__thenClosure'] = $renderChildrenClosure1206;

$output1204 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1205, $renderChildrenClosure1206, $renderingContext);

$output1204 .= '
            ';
return $output1204;
};

$output1182 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1183, $renderChildrenClosure1184, $renderingContext);

$output1182 .= '   
	 ';
return $output1182;
};
$arguments1177 = array();
$arguments1177['additionalAttributes'] = NULL;
$arguments1177['data'] = NULL;
$arguments1177['class'] = NULL;
$arguments1177['dir'] = NULL;
$arguments1177['id'] = NULL;
$arguments1177['lang'] = NULL;
$arguments1177['style'] = NULL;
$arguments1177['title'] = NULL;
$arguments1177['accesskey'] = NULL;
$arguments1177['tabindex'] = NULL;
$arguments1177['onclick'] = NULL;
$arguments1177['newsItem'] = NULL;
$arguments1177['settings'] = array (
);
$arguments1177['uriOnly'] = false;
$arguments1177['configuration'] = array (
);
$arguments1177['content'] = '';
$arguments1177['section'] = NULL;
$array1179 = array (
);$arguments1177['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1179);
$array1180 = array (
);$arguments1177['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1180);
$array1181 = array (
);$arguments1177['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1181);

$output1176 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1176 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1255 = array (
);
$output1176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1255)]);

$output1176 .= '</h5>
                                        <p>';
$array1256 = array (
);
$output1176 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1256)]);

$output1176 .= '</p>
                                        <div class="sp-btn">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1258 = function() use ($renderingContext, $self) {
return 'Read More  ';
};
$arguments1257 = array();
$arguments1257['additionalAttributes'] = NULL;
$arguments1257['data'] = NULL;
$arguments1257['class'] = NULL;
$arguments1257['dir'] = NULL;
$arguments1257['id'] = NULL;
$arguments1257['lang'] = NULL;
$arguments1257['style'] = NULL;
$arguments1257['title'] = NULL;
$arguments1257['accesskey'] = NULL;
$arguments1257['tabindex'] = NULL;
$arguments1257['onclick'] = NULL;
$arguments1257['newsItem'] = NULL;
$arguments1257['settings'] = array (
);
$arguments1257['uriOnly'] = false;
$arguments1257['configuration'] = array (
);
$arguments1257['content'] = '';
$arguments1257['section'] = NULL;
$array1259 = array (
);$arguments1257['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1259);
$array1260 = array (
);$arguments1257['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1260);
$array1261 = array (
);$arguments1257['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1261);

$output1176 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1257, $renderChildrenClosure1258, $renderingContext);

$output1176 .= '	  
                                        </div>
                                    </div>
                                </div>
                            </div>
							    ';
return $output1176;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1174, $renderChildrenClosure1175, $renderingContext);

$output0 .= ' 
  
     ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1355 = function() use ($renderingContext, $self) {
$output1452 = '';

$output1452 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1454 = function() use ($renderingContext, $self) {
$output1455 = '';

$output1455 .= '

                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1457 = function() use ($renderingContext, $self) {
$output1461 = '';

$output1461 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1463 = function() use ($renderingContext, $self) {
$output1498 = '';

$output1498 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1500 = function() use ($renderingContext, $self) {
$output1501 = '';

$output1501 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1503 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1502 = array();
$arguments1502['additionalAttributes'] = NULL;
$arguments1502['data'] = NULL;
$arguments1502['class'] = NULL;
$arguments1502['dir'] = NULL;
$arguments1502['id'] = NULL;
$arguments1502['lang'] = NULL;
$arguments1502['style'] = NULL;
$arguments1502['title'] = NULL;
$arguments1502['accesskey'] = NULL;
$arguments1502['tabindex'] = NULL;
$arguments1502['onclick'] = NULL;
$arguments1502['alt'] = NULL;
$arguments1502['file'] = NULL;
$arguments1502['additionalConfig'] = array (
);
$arguments1502['width'] = NULL;
$arguments1502['height'] = NULL;
$arguments1502['cropVariant'] = 'default';
$arguments1502['class'] = 'img-responsive';
$array1504 = array (
);$arguments1502['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1504);
$array1505 = array (
);$arguments1502['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1505);
$array1506 = array (
);$arguments1502['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1506);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1508 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1507 = array();
$arguments1507['then'] = NULL;
$arguments1507['else'] = NULL;
$arguments1507['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1509 = array();
$array1510 = array (
);$array1509['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1510);

$expression1511 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1507['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1511(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1509)
					),
					$renderingContext
				);
$array1512 = array (
);$arguments1507['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1512);
$array1513 = array (
);$arguments1507['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1513);
$arguments1502['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1507, $renderChildrenClosure1508, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1515 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1514 = array();
$arguments1514['then'] = NULL;
$arguments1514['else'] = NULL;
$arguments1514['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1516 = array();
$array1517 = array (
);$array1516['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1517);

$expression1518 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1514['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1518(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1516)
					),
					$renderingContext
				);
$array1519 = array (
);$arguments1514['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1519);
$arguments1514['else'] = '';
$arguments1502['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1514, $renderChildrenClosure1515, $renderingContext);

$output1501 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1502, $renderChildrenClosure1503, $renderingContext);

$output1501 .= '
            ';
return $output1501;
};
$arguments1499 = array();

$output1498 .= '';

$output1498 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1521 = function() use ($renderingContext, $self) {
$output1522 = '';

$output1522 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1524 = function() use ($renderingContext, $self) {
$output1528 = '';

$output1528 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1530 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1529 = array();
$arguments1529['additionalAttributes'] = NULL;
$arguments1529['data'] = NULL;
$arguments1529['class'] = NULL;
$arguments1529['dir'] = NULL;
$arguments1529['id'] = NULL;
$arguments1529['lang'] = NULL;
$arguments1529['style'] = NULL;
$arguments1529['title'] = NULL;
$arguments1529['accesskey'] = NULL;
$arguments1529['tabindex'] = NULL;
$arguments1529['onclick'] = NULL;
$arguments1529['alt'] = NULL;
$arguments1529['ismap'] = NULL;
$arguments1529['longdesc'] = NULL;
$arguments1529['usemap'] = NULL;
$arguments1529['src'] = NULL;
$arguments1529['treatIdAsReference'] = NULL;
$arguments1529['image'] = NULL;
$arguments1529['crop'] = NULL;
$arguments1529['cropVariant'] = 'default';
$arguments1529['width'] = NULL;
$arguments1529['height'] = NULL;
$arguments1529['minWidth'] = NULL;
$arguments1529['minHeight'] = NULL;
$arguments1529['maxWidth'] = NULL;
$arguments1529['maxHeight'] = NULL;
$arguments1529['absolute'] = false;
$arguments1529['class'] = 'img-responsive';
$array1531 = array (
);$arguments1529['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1531);
$arguments1529['title'] = '';
$arguments1529['alt'] = '';
$array1532 = array (
);$arguments1529['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1532);
$array1533 = array (
);$arguments1529['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1533);

$output1528 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1529, $renderChildrenClosure1530, $renderingContext);

$output1528 .= '
              ';
return $output1528;
};
$arguments1523 = array();
$arguments1523['then'] = NULL;
$arguments1523['else'] = NULL;
$arguments1523['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1525 = array();
$array1526 = array (
);$array1525['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1526);

$expression1527 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1523['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1527(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1525)
					),
					$renderingContext
				);
$arguments1523['__thenClosure'] = $renderChildrenClosure1524;

$output1522 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1523, $renderChildrenClosure1524, $renderingContext);

$output1522 .= '
            ';
return $output1522;
};
$arguments1520 = array();
$arguments1520['if'] = NULL;

$output1498 .= '';

$output1498 .= '
          ';
return $output1498;
};
$arguments1462 = array();
$arguments1462['then'] = NULL;
$arguments1462['else'] = NULL;
$arguments1462['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1495 = array();
$array1496 = array (
);$array1495['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1496);

$expression1497 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1462['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1497(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1495)
					),
					$renderingContext
				);
$arguments1462['__thenClosure'] = function() use ($renderingContext, $self) {
$output1464 = '';

$output1464 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1465 = array();
$arguments1465['additionalAttributes'] = NULL;
$arguments1465['data'] = NULL;
$arguments1465['class'] = NULL;
$arguments1465['dir'] = NULL;
$arguments1465['id'] = NULL;
$arguments1465['lang'] = NULL;
$arguments1465['style'] = NULL;
$arguments1465['title'] = NULL;
$arguments1465['accesskey'] = NULL;
$arguments1465['tabindex'] = NULL;
$arguments1465['onclick'] = NULL;
$arguments1465['alt'] = NULL;
$arguments1465['file'] = NULL;
$arguments1465['additionalConfig'] = array (
);
$arguments1465['width'] = NULL;
$arguments1465['height'] = NULL;
$arguments1465['cropVariant'] = 'default';
$arguments1465['class'] = 'img-responsive';
$array1467 = array (
);$arguments1465['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1467);
$array1468 = array (
);$arguments1465['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1468);
$array1469 = array (
);$arguments1465['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1469);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1470 = array();
$arguments1470['then'] = NULL;
$arguments1470['else'] = NULL;
$arguments1470['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1472 = array();
$array1473 = array (
);$array1472['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1473);

$expression1474 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1470['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1474(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1472)
					),
					$renderingContext
				);
$array1475 = array (
);$arguments1470['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1475);
$array1476 = array (
);$arguments1470['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1476);
$arguments1465['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1470, $renderChildrenClosure1471, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1478 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1477 = array();
$arguments1477['then'] = NULL;
$arguments1477['else'] = NULL;
$arguments1477['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1479 = array();
$array1480 = array (
);$array1479['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1480);

$expression1481 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1477['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1481(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1479)
					),
					$renderingContext
				);
$array1482 = array (
);$arguments1477['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1482);
$arguments1477['else'] = '';
$arguments1465['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1477, $renderChildrenClosure1478, $renderingContext);

$output1464 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1465, $renderChildrenClosure1466, $renderingContext);

$output1464 .= '
            ';
return $output1464;
};
$arguments1462['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1483 = '';

$output1483 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1485 = function() use ($renderingContext, $self) {
$output1489 = '';

$output1489 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1490 = array();
$arguments1490['additionalAttributes'] = NULL;
$arguments1490['data'] = NULL;
$arguments1490['class'] = NULL;
$arguments1490['dir'] = NULL;
$arguments1490['id'] = NULL;
$arguments1490['lang'] = NULL;
$arguments1490['style'] = NULL;
$arguments1490['title'] = NULL;
$arguments1490['accesskey'] = NULL;
$arguments1490['tabindex'] = NULL;
$arguments1490['onclick'] = NULL;
$arguments1490['alt'] = NULL;
$arguments1490['ismap'] = NULL;
$arguments1490['longdesc'] = NULL;
$arguments1490['usemap'] = NULL;
$arguments1490['src'] = NULL;
$arguments1490['treatIdAsReference'] = NULL;
$arguments1490['image'] = NULL;
$arguments1490['crop'] = NULL;
$arguments1490['cropVariant'] = 'default';
$arguments1490['width'] = NULL;
$arguments1490['height'] = NULL;
$arguments1490['minWidth'] = NULL;
$arguments1490['minHeight'] = NULL;
$arguments1490['maxWidth'] = NULL;
$arguments1490['maxHeight'] = NULL;
$arguments1490['absolute'] = false;
$arguments1490['class'] = 'img-responsive';
$array1492 = array (
);$arguments1490['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1492);
$arguments1490['title'] = '';
$arguments1490['alt'] = '';
$array1493 = array (
);$arguments1490['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1493);
$array1494 = array (
);$arguments1490['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1494);

$output1489 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1490, $renderChildrenClosure1491, $renderingContext);

$output1489 .= '
              ';
return $output1489;
};
$arguments1484 = array();
$arguments1484['then'] = NULL;
$arguments1484['else'] = NULL;
$arguments1484['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1486 = array();
$array1487 = array (
);$array1486['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1487);

$expression1488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1484['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1486)
					),
					$renderingContext
				);
$arguments1484['__thenClosure'] = $renderChildrenClosure1485;

$output1483 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1484, $renderChildrenClosure1485, $renderingContext);

$output1483 .= '
            ';
return $output1483;
};

$output1461 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1462, $renderChildrenClosure1463, $renderingContext);

$output1461 .= '   
	 ';
return $output1461;
};
$arguments1456 = array();
$arguments1456['additionalAttributes'] = NULL;
$arguments1456['data'] = NULL;
$arguments1456['class'] = NULL;
$arguments1456['dir'] = NULL;
$arguments1456['id'] = NULL;
$arguments1456['lang'] = NULL;
$arguments1456['style'] = NULL;
$arguments1456['title'] = NULL;
$arguments1456['accesskey'] = NULL;
$arguments1456['tabindex'] = NULL;
$arguments1456['onclick'] = NULL;
$arguments1456['newsItem'] = NULL;
$arguments1456['settings'] = array (
);
$arguments1456['uriOnly'] = false;
$arguments1456['configuration'] = array (
);
$arguments1456['content'] = '';
$arguments1456['section'] = NULL;
$array1458 = array (
);$arguments1456['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1458);
$array1459 = array (
);$arguments1456['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1459);
$array1460 = array (
);$arguments1456['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1460);

$output1455 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1456, $renderChildrenClosure1457, $renderingContext);

$output1455 .= '	  
 </div>
                                    <div class="article-contenthome" >
                                        <h5>';
$array1534 = array (
);
$output1455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1534)]);

$output1455 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1536 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1538 = function() use ($renderingContext, $self) {
$array1542 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1542);
};
$arguments1537 = array();
$arguments1537['maxCharacters'] = NULL;
$arguments1537['append'] = '...';
$arguments1537['respectWordBoundaries'] = true;
$arguments1537['respectHtml'] = true;
$array1539 = array (
);$arguments1537['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1539);
// Rendering Boolean node
// Rendering Array
$array1540 = array();
$array1540['0'] = 1;

$expression1541 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1537['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1541(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1540)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1537, $renderChildrenClosure1538, $renderingContext);
};
$arguments1535 = array();
$arguments1535['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1455 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1535, $renderChildrenClosure1536, $renderingContext);

$output1455 .= '
                                        <div class="sp-btn_about">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1544 = function() use ($renderingContext, $self) {
return 'Read More';
};
$arguments1543 = array();
$arguments1543['additionalAttributes'] = NULL;
$arguments1543['data'] = NULL;
$arguments1543['class'] = NULL;
$arguments1543['dir'] = NULL;
$arguments1543['id'] = NULL;
$arguments1543['lang'] = NULL;
$arguments1543['style'] = NULL;
$arguments1543['title'] = NULL;
$arguments1543['accesskey'] = NULL;
$arguments1543['tabindex'] = NULL;
$arguments1543['onclick'] = NULL;
$arguments1543['newsItem'] = NULL;
$arguments1543['settings'] = array (
);
$arguments1543['uriOnly'] = false;
$arguments1543['configuration'] = array (
);
$arguments1543['content'] = '';
$arguments1543['section'] = NULL;
$array1545 = array (
);$arguments1543['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1545);
$array1546 = array (
);$arguments1543['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1546);
$array1547 = array (
);$arguments1543['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1547);

$output1455 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1543, $renderChildrenClosure1544, $renderingContext);

$output1455 .= '	  
                                        </div>
                                    </div>
                                </div>
                          
							    ';
return $output1455;
};
$arguments1453 = array();

$output1452 .= '';

$output1452 .= '
  ';
return $output1452;
};
$arguments1354 = array();
$arguments1354['then'] = NULL;
$arguments1354['else'] = NULL;
$arguments1354['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1449 = array();
$array1450 = array (
);$array1449['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1450);
$array1449['1'] = ' == 9';

$expression1451 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 9);};
$arguments1354['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1451(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1449)
					),
					$renderingContext
				);
$arguments1354['__thenClosure'] = function() use ($renderingContext, $self) {
$output1356 = '';

$output1356 .= '

                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1358 = function() use ($renderingContext, $self) {
$output1362 = '';

$output1362 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1364 = function() use ($renderingContext, $self) {
$output1399 = '';

$output1399 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1401 = function() use ($renderingContext, $self) {
$output1402 = '';

$output1402 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1403 = array();
$arguments1403['additionalAttributes'] = NULL;
$arguments1403['data'] = NULL;
$arguments1403['class'] = NULL;
$arguments1403['dir'] = NULL;
$arguments1403['id'] = NULL;
$arguments1403['lang'] = NULL;
$arguments1403['style'] = NULL;
$arguments1403['title'] = NULL;
$arguments1403['accesskey'] = NULL;
$arguments1403['tabindex'] = NULL;
$arguments1403['onclick'] = NULL;
$arguments1403['alt'] = NULL;
$arguments1403['file'] = NULL;
$arguments1403['additionalConfig'] = array (
);
$arguments1403['width'] = NULL;
$arguments1403['height'] = NULL;
$arguments1403['cropVariant'] = 'default';
$arguments1403['class'] = 'img-responsive';
$array1405 = array (
);$arguments1403['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1405);
$array1406 = array (
);$arguments1403['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1406);
$array1407 = array (
);$arguments1403['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1407);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1409 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1408 = array();
$arguments1408['then'] = NULL;
$arguments1408['else'] = NULL;
$arguments1408['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1410 = array();
$array1411 = array (
);$array1410['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1411);

$expression1412 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1408['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1412(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1410)
					),
					$renderingContext
				);
$array1413 = array (
);$arguments1408['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1413);
$array1414 = array (
);$arguments1408['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1414);
$arguments1403['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1408, $renderChildrenClosure1409, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1415 = array();
$arguments1415['then'] = NULL;
$arguments1415['else'] = NULL;
$arguments1415['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1417 = array();
$array1418 = array (
);$array1417['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1418);

$expression1419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1415['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1419(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1417)
					),
					$renderingContext
				);
$array1420 = array (
);$arguments1415['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1420);
$arguments1415['else'] = '';
$arguments1403['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1415, $renderChildrenClosure1416, $renderingContext);

$output1402 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1403, $renderChildrenClosure1404, $renderingContext);

$output1402 .= '
            ';
return $output1402;
};
$arguments1400 = array();

$output1399 .= '';

$output1399 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1422 = function() use ($renderingContext, $self) {
$output1423 = '';

$output1423 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1425 = function() use ($renderingContext, $self) {
$output1429 = '';

$output1429 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1430 = array();
$arguments1430['additionalAttributes'] = NULL;
$arguments1430['data'] = NULL;
$arguments1430['class'] = NULL;
$arguments1430['dir'] = NULL;
$arguments1430['id'] = NULL;
$arguments1430['lang'] = NULL;
$arguments1430['style'] = NULL;
$arguments1430['title'] = NULL;
$arguments1430['accesskey'] = NULL;
$arguments1430['tabindex'] = NULL;
$arguments1430['onclick'] = NULL;
$arguments1430['alt'] = NULL;
$arguments1430['ismap'] = NULL;
$arguments1430['longdesc'] = NULL;
$arguments1430['usemap'] = NULL;
$arguments1430['src'] = NULL;
$arguments1430['treatIdAsReference'] = NULL;
$arguments1430['image'] = NULL;
$arguments1430['crop'] = NULL;
$arguments1430['cropVariant'] = 'default';
$arguments1430['width'] = NULL;
$arguments1430['height'] = NULL;
$arguments1430['minWidth'] = NULL;
$arguments1430['minHeight'] = NULL;
$arguments1430['maxWidth'] = NULL;
$arguments1430['maxHeight'] = NULL;
$arguments1430['absolute'] = false;
$arguments1430['class'] = 'img-responsive';
$array1432 = array (
);$arguments1430['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1432);
$arguments1430['title'] = '';
$arguments1430['alt'] = '';
$array1433 = array (
);$arguments1430['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1433);
$array1434 = array (
);$arguments1430['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1434);

$output1429 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1430, $renderChildrenClosure1431, $renderingContext);

$output1429 .= '
              ';
return $output1429;
};
$arguments1424 = array();
$arguments1424['then'] = NULL;
$arguments1424['else'] = NULL;
$arguments1424['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1426 = array();
$array1427 = array (
);$array1426['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1427);

$expression1428 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1424['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1428(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1426)
					),
					$renderingContext
				);
$arguments1424['__thenClosure'] = $renderChildrenClosure1425;

$output1423 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1424, $renderChildrenClosure1425, $renderingContext);

$output1423 .= '
            ';
return $output1423;
};
$arguments1421 = array();
$arguments1421['if'] = NULL;

$output1399 .= '';

$output1399 .= '
          ';
return $output1399;
};
$arguments1363 = array();
$arguments1363['then'] = NULL;
$arguments1363['else'] = NULL;
$arguments1363['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1396 = array();
$array1397 = array (
);$array1396['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1397);

$expression1398 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1363['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1398(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1396)
					),
					$renderingContext
				);
$arguments1363['__thenClosure'] = function() use ($renderingContext, $self) {
$output1365 = '';

$output1365 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1367 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1366 = array();
$arguments1366['additionalAttributes'] = NULL;
$arguments1366['data'] = NULL;
$arguments1366['class'] = NULL;
$arguments1366['dir'] = NULL;
$arguments1366['id'] = NULL;
$arguments1366['lang'] = NULL;
$arguments1366['style'] = NULL;
$arguments1366['title'] = NULL;
$arguments1366['accesskey'] = NULL;
$arguments1366['tabindex'] = NULL;
$arguments1366['onclick'] = NULL;
$arguments1366['alt'] = NULL;
$arguments1366['file'] = NULL;
$arguments1366['additionalConfig'] = array (
);
$arguments1366['width'] = NULL;
$arguments1366['height'] = NULL;
$arguments1366['cropVariant'] = 'default';
$arguments1366['class'] = 'img-responsive';
$array1368 = array (
);$arguments1366['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1368);
$array1369 = array (
);$arguments1366['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1369);
$array1370 = array (
);$arguments1366['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1370);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1371 = array();
$arguments1371['then'] = NULL;
$arguments1371['else'] = NULL;
$arguments1371['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1373 = array();
$array1374 = array (
);$array1373['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1374);

$expression1375 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1371['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1375(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1373)
					),
					$renderingContext
				);
$array1376 = array (
);$arguments1371['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1376);
$array1377 = array (
);$arguments1371['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1377);
$arguments1366['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1371, $renderChildrenClosure1372, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1379 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1378 = array();
$arguments1378['then'] = NULL;
$arguments1378['else'] = NULL;
$arguments1378['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1380 = array();
$array1381 = array (
);$array1380['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1381);

$expression1382 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1378['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1382(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1380)
					),
					$renderingContext
				);
$array1383 = array (
);$arguments1378['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1383);
$arguments1378['else'] = '';
$arguments1366['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1378, $renderChildrenClosure1379, $renderingContext);

$output1365 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1366, $renderChildrenClosure1367, $renderingContext);

$output1365 .= '
            ';
return $output1365;
};
$arguments1363['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1384 = '';

$output1384 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1386 = function() use ($renderingContext, $self) {
$output1390 = '';

$output1390 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1392 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1391 = array();
$arguments1391['additionalAttributes'] = NULL;
$arguments1391['data'] = NULL;
$arguments1391['class'] = NULL;
$arguments1391['dir'] = NULL;
$arguments1391['id'] = NULL;
$arguments1391['lang'] = NULL;
$arguments1391['style'] = NULL;
$arguments1391['title'] = NULL;
$arguments1391['accesskey'] = NULL;
$arguments1391['tabindex'] = NULL;
$arguments1391['onclick'] = NULL;
$arguments1391['alt'] = NULL;
$arguments1391['ismap'] = NULL;
$arguments1391['longdesc'] = NULL;
$arguments1391['usemap'] = NULL;
$arguments1391['src'] = NULL;
$arguments1391['treatIdAsReference'] = NULL;
$arguments1391['image'] = NULL;
$arguments1391['crop'] = NULL;
$arguments1391['cropVariant'] = 'default';
$arguments1391['width'] = NULL;
$arguments1391['height'] = NULL;
$arguments1391['minWidth'] = NULL;
$arguments1391['minHeight'] = NULL;
$arguments1391['maxWidth'] = NULL;
$arguments1391['maxHeight'] = NULL;
$arguments1391['absolute'] = false;
$arguments1391['class'] = 'img-responsive';
$array1393 = array (
);$arguments1391['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1393);
$arguments1391['title'] = '';
$arguments1391['alt'] = '';
$array1394 = array (
);$arguments1391['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1394);
$array1395 = array (
);$arguments1391['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1395);

$output1390 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1391, $renderChildrenClosure1392, $renderingContext);

$output1390 .= '
              ';
return $output1390;
};
$arguments1385 = array();
$arguments1385['then'] = NULL;
$arguments1385['else'] = NULL;
$arguments1385['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1387 = array();
$array1388 = array (
);$array1387['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1388);

$expression1389 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1385['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1387)
					),
					$renderingContext
				);
$arguments1385['__thenClosure'] = $renderChildrenClosure1386;

$output1384 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1385, $renderChildrenClosure1386, $renderingContext);

$output1384 .= '
            ';
return $output1384;
};

$output1362 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1363, $renderChildrenClosure1364, $renderingContext);

$output1362 .= '   
	 ';
return $output1362;
};
$arguments1357 = array();
$arguments1357['additionalAttributes'] = NULL;
$arguments1357['data'] = NULL;
$arguments1357['class'] = NULL;
$arguments1357['dir'] = NULL;
$arguments1357['id'] = NULL;
$arguments1357['lang'] = NULL;
$arguments1357['style'] = NULL;
$arguments1357['title'] = NULL;
$arguments1357['accesskey'] = NULL;
$arguments1357['tabindex'] = NULL;
$arguments1357['onclick'] = NULL;
$arguments1357['newsItem'] = NULL;
$arguments1357['settings'] = array (
);
$arguments1357['uriOnly'] = false;
$arguments1357['configuration'] = array (
);
$arguments1357['content'] = '';
$arguments1357['section'] = NULL;
$array1359 = array (
);$arguments1357['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1359);
$array1360 = array (
);$arguments1357['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1360);
$array1361 = array (
);$arguments1357['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1361);

$output1356 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1357, $renderChildrenClosure1358, $renderingContext);

$output1356 .= '	  
 </div>
                                    <div class="article-contenthome" >
                                        <h5>';
$array1435 = array (
);
$output1356 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1435)]);

$output1356 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1437 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1439 = function() use ($renderingContext, $self) {
$array1443 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1443);
};
$arguments1438 = array();
$arguments1438['maxCharacters'] = NULL;
$arguments1438['append'] = '...';
$arguments1438['respectWordBoundaries'] = true;
$arguments1438['respectHtml'] = true;
$array1440 = array (
);$arguments1438['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1440);
// Rendering Boolean node
// Rendering Array
$array1441 = array();
$array1441['0'] = 1;

$expression1442 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1438['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1442(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1441)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1438, $renderChildrenClosure1439, $renderingContext);
};
$arguments1436 = array();
$arguments1436['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1356 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1436, $renderChildrenClosure1437, $renderingContext);

$output1356 .= '
                                        <div class="sp-btn_about">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1445 = function() use ($renderingContext, $self) {
return 'Read More';
};
$arguments1444 = array();
$arguments1444['additionalAttributes'] = NULL;
$arguments1444['data'] = NULL;
$arguments1444['class'] = NULL;
$arguments1444['dir'] = NULL;
$arguments1444['id'] = NULL;
$arguments1444['lang'] = NULL;
$arguments1444['style'] = NULL;
$arguments1444['title'] = NULL;
$arguments1444['accesskey'] = NULL;
$arguments1444['tabindex'] = NULL;
$arguments1444['onclick'] = NULL;
$arguments1444['newsItem'] = NULL;
$arguments1444['settings'] = array (
);
$arguments1444['uriOnly'] = false;
$arguments1444['configuration'] = array (
);
$arguments1444['content'] = '';
$arguments1444['section'] = NULL;
$array1446 = array (
);$arguments1444['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1446);
$array1447 = array (
);$arguments1444['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1447);
$array1448 = array (
);$arguments1444['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1448);

$output1356 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1444, $renderChildrenClosure1445, $renderingContext);

$output1356 .= '	  
                                        </div>
                                    </div>
                                </div>
                          
							    ';
return $output1356;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1354, $renderChildrenClosure1355, $renderingContext);

$output0 .= ' 
  
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1549 = function() use ($renderingContext, $self) {
$output1646 = '';

$output1646 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1648 = function() use ($renderingContext, $self) {
$output1649 = '';

$output1649 .= '
 <div class="col-sm-6">
                                <div class="article-wrapper_core">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1651 = function() use ($renderingContext, $self) {
$output1655 = '';

$output1655 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1657 = function() use ($renderingContext, $self) {
$output1692 = '';

$output1692 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1694 = function() use ($renderingContext, $self) {
$output1695 = '';

$output1695 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1697 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1696 = array();
$arguments1696['additionalAttributes'] = NULL;
$arguments1696['data'] = NULL;
$arguments1696['class'] = NULL;
$arguments1696['dir'] = NULL;
$arguments1696['id'] = NULL;
$arguments1696['lang'] = NULL;
$arguments1696['style'] = NULL;
$arguments1696['title'] = NULL;
$arguments1696['accesskey'] = NULL;
$arguments1696['tabindex'] = NULL;
$arguments1696['onclick'] = NULL;
$arguments1696['alt'] = NULL;
$arguments1696['file'] = NULL;
$arguments1696['additionalConfig'] = array (
);
$arguments1696['width'] = NULL;
$arguments1696['height'] = NULL;
$arguments1696['cropVariant'] = 'default';
$arguments1696['class'] = 'img-responsive';
$array1698 = array (
);$arguments1696['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1698);
$array1699 = array (
);$arguments1696['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1699);
$array1700 = array (
);$arguments1696['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1700);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1702 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1701 = array();
$arguments1701['then'] = NULL;
$arguments1701['else'] = NULL;
$arguments1701['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1703 = array();
$array1704 = array (
);$array1703['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1704);

$expression1705 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1701['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1705(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1703)
					),
					$renderingContext
				);
$array1706 = array (
);$arguments1701['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1706);
$array1707 = array (
);$arguments1701['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1707);
$arguments1696['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1701, $renderChildrenClosure1702, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1709 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1708 = array();
$arguments1708['then'] = NULL;
$arguments1708['else'] = NULL;
$arguments1708['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1710 = array();
$array1711 = array (
);$array1710['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1711);

$expression1712 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1708['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1712(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1710)
					),
					$renderingContext
				);
$array1713 = array (
);$arguments1708['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1713);
$arguments1708['else'] = '';
$arguments1696['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1708, $renderChildrenClosure1709, $renderingContext);

$output1695 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1696, $renderChildrenClosure1697, $renderingContext);

$output1695 .= '
            ';
return $output1695;
};
$arguments1693 = array();

$output1692 .= '';

$output1692 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1715 = function() use ($renderingContext, $self) {
$output1716 = '';

$output1716 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1718 = function() use ($renderingContext, $self) {
$output1722 = '';

$output1722 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1723 = array();
$arguments1723['additionalAttributes'] = NULL;
$arguments1723['data'] = NULL;
$arguments1723['class'] = NULL;
$arguments1723['dir'] = NULL;
$arguments1723['id'] = NULL;
$arguments1723['lang'] = NULL;
$arguments1723['style'] = NULL;
$arguments1723['title'] = NULL;
$arguments1723['accesskey'] = NULL;
$arguments1723['tabindex'] = NULL;
$arguments1723['onclick'] = NULL;
$arguments1723['alt'] = NULL;
$arguments1723['ismap'] = NULL;
$arguments1723['longdesc'] = NULL;
$arguments1723['usemap'] = NULL;
$arguments1723['src'] = NULL;
$arguments1723['treatIdAsReference'] = NULL;
$arguments1723['image'] = NULL;
$arguments1723['crop'] = NULL;
$arguments1723['cropVariant'] = 'default';
$arguments1723['width'] = NULL;
$arguments1723['height'] = NULL;
$arguments1723['minWidth'] = NULL;
$arguments1723['minHeight'] = NULL;
$arguments1723['maxWidth'] = NULL;
$arguments1723['maxHeight'] = NULL;
$arguments1723['absolute'] = false;
$arguments1723['class'] = 'img-responsive';
$array1725 = array (
);$arguments1723['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1725);
$arguments1723['title'] = '';
$arguments1723['alt'] = '';
$array1726 = array (
);$arguments1723['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1726);
$array1727 = array (
);$arguments1723['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1727);

$output1722 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1723, $renderChildrenClosure1724, $renderingContext);

$output1722 .= '
              ';
return $output1722;
};
$arguments1717 = array();
$arguments1717['then'] = NULL;
$arguments1717['else'] = NULL;
$arguments1717['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1719 = array();
$array1720 = array (
);$array1719['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1720);

$expression1721 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1717['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1721(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1719)
					),
					$renderingContext
				);
$arguments1717['__thenClosure'] = $renderChildrenClosure1718;

$output1716 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1717, $renderChildrenClosure1718, $renderingContext);

$output1716 .= '
            ';
return $output1716;
};
$arguments1714 = array();
$arguments1714['if'] = NULL;

$output1692 .= '';

$output1692 .= '
          ';
return $output1692;
};
$arguments1656 = array();
$arguments1656['then'] = NULL;
$arguments1656['else'] = NULL;
$arguments1656['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1689 = array();
$array1690 = array (
);$array1689['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1690);

$expression1691 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1656['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1691(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1689)
					),
					$renderingContext
				);
$arguments1656['__thenClosure'] = function() use ($renderingContext, $self) {
$output1658 = '';

$output1658 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1660 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1659 = array();
$arguments1659['additionalAttributes'] = NULL;
$arguments1659['data'] = NULL;
$arguments1659['class'] = NULL;
$arguments1659['dir'] = NULL;
$arguments1659['id'] = NULL;
$arguments1659['lang'] = NULL;
$arguments1659['style'] = NULL;
$arguments1659['title'] = NULL;
$arguments1659['accesskey'] = NULL;
$arguments1659['tabindex'] = NULL;
$arguments1659['onclick'] = NULL;
$arguments1659['alt'] = NULL;
$arguments1659['file'] = NULL;
$arguments1659['additionalConfig'] = array (
);
$arguments1659['width'] = NULL;
$arguments1659['height'] = NULL;
$arguments1659['cropVariant'] = 'default';
$arguments1659['class'] = 'img-responsive';
$array1661 = array (
);$arguments1659['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1661);
$array1662 = array (
);$arguments1659['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1662);
$array1663 = array (
);$arguments1659['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1663);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1664 = array();
$arguments1664['then'] = NULL;
$arguments1664['else'] = NULL;
$arguments1664['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1666 = array();
$array1667 = array (
);$array1666['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1667);

$expression1668 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1664['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1668(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1666)
					),
					$renderingContext
				);
$array1669 = array (
);$arguments1664['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1669);
$array1670 = array (
);$arguments1664['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1670);
$arguments1659['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1664, $renderChildrenClosure1665, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1671 = array();
$arguments1671['then'] = NULL;
$arguments1671['else'] = NULL;
$arguments1671['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1673 = array();
$array1674 = array (
);$array1673['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1674);

$expression1675 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1671['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1675(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1673)
					),
					$renderingContext
				);
$array1676 = array (
);$arguments1671['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1676);
$arguments1671['else'] = '';
$arguments1659['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1671, $renderChildrenClosure1672, $renderingContext);

$output1658 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1659, $renderChildrenClosure1660, $renderingContext);

$output1658 .= '
            ';
return $output1658;
};
$arguments1656['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1677 = '';

$output1677 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1679 = function() use ($renderingContext, $self) {
$output1683 = '';

$output1683 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1684 = array();
$arguments1684['additionalAttributes'] = NULL;
$arguments1684['data'] = NULL;
$arguments1684['class'] = NULL;
$arguments1684['dir'] = NULL;
$arguments1684['id'] = NULL;
$arguments1684['lang'] = NULL;
$arguments1684['style'] = NULL;
$arguments1684['title'] = NULL;
$arguments1684['accesskey'] = NULL;
$arguments1684['tabindex'] = NULL;
$arguments1684['onclick'] = NULL;
$arguments1684['alt'] = NULL;
$arguments1684['ismap'] = NULL;
$arguments1684['longdesc'] = NULL;
$arguments1684['usemap'] = NULL;
$arguments1684['src'] = NULL;
$arguments1684['treatIdAsReference'] = NULL;
$arguments1684['image'] = NULL;
$arguments1684['crop'] = NULL;
$arguments1684['cropVariant'] = 'default';
$arguments1684['width'] = NULL;
$arguments1684['height'] = NULL;
$arguments1684['minWidth'] = NULL;
$arguments1684['minHeight'] = NULL;
$arguments1684['maxWidth'] = NULL;
$arguments1684['maxHeight'] = NULL;
$arguments1684['absolute'] = false;
$arguments1684['class'] = 'img-responsive';
$array1686 = array (
);$arguments1684['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1686);
$arguments1684['title'] = '';
$arguments1684['alt'] = '';
$array1687 = array (
);$arguments1684['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1687);
$array1688 = array (
);$arguments1684['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1688);

$output1683 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1684, $renderChildrenClosure1685, $renderingContext);

$output1683 .= '
              ';
return $output1683;
};
$arguments1678 = array();
$arguments1678['then'] = NULL;
$arguments1678['else'] = NULL;
$arguments1678['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1680 = array();
$array1681 = array (
);$array1680['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1681);

$expression1682 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1678['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1682(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1680)
					),
					$renderingContext
				);
$arguments1678['__thenClosure'] = $renderChildrenClosure1679;

$output1677 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1678, $renderChildrenClosure1679, $renderingContext);

$output1677 .= '
            ';
return $output1677;
};

$output1655 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1656, $renderChildrenClosure1657, $renderingContext);

$output1655 .= '   
	 ';
return $output1655;
};
$arguments1650 = array();
$arguments1650['additionalAttributes'] = NULL;
$arguments1650['data'] = NULL;
$arguments1650['class'] = NULL;
$arguments1650['dir'] = NULL;
$arguments1650['id'] = NULL;
$arguments1650['lang'] = NULL;
$arguments1650['style'] = NULL;
$arguments1650['title'] = NULL;
$arguments1650['accesskey'] = NULL;
$arguments1650['tabindex'] = NULL;
$arguments1650['onclick'] = NULL;
$arguments1650['newsItem'] = NULL;
$arguments1650['settings'] = array (
);
$arguments1650['uriOnly'] = false;
$arguments1650['configuration'] = array (
);
$arguments1650['content'] = '';
$arguments1650['section'] = NULL;
$array1652 = array (
);$arguments1650['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1652);
$array1653 = array (
);$arguments1650['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1653);
$array1654 = array (
);$arguments1650['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1654);

$output1649 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1650, $renderChildrenClosure1651, $renderingContext);

$output1649 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1728 = array (
);
$output1649 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1728)]);

$output1649 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1730 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1732 = function() use ($renderingContext, $self) {
$array1736 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1736);
};
$arguments1731 = array();
$arguments1731['maxCharacters'] = NULL;
$arguments1731['append'] = '...';
$arguments1731['respectWordBoundaries'] = true;
$arguments1731['respectHtml'] = true;
$array1733 = array (
);$arguments1731['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1733);
// Rendering Boolean node
// Rendering Array
$array1734 = array();
$array1734['0'] = 1;

$expression1735 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1731['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1735(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1734)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1731, $renderChildrenClosure1732, $renderingContext);
};
$arguments1729 = array();
$arguments1729['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1649 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1729, $renderChildrenClosure1730, $renderingContext);

$output1649 .= '
                                        <div class="sp-btncore">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1738 = function() use ($renderingContext, $self) {
return 'LEARN MORE ';
};
$arguments1737 = array();
$arguments1737['additionalAttributes'] = NULL;
$arguments1737['data'] = NULL;
$arguments1737['class'] = NULL;
$arguments1737['dir'] = NULL;
$arguments1737['id'] = NULL;
$arguments1737['lang'] = NULL;
$arguments1737['style'] = NULL;
$arguments1737['title'] = NULL;
$arguments1737['accesskey'] = NULL;
$arguments1737['tabindex'] = NULL;
$arguments1737['onclick'] = NULL;
$arguments1737['newsItem'] = NULL;
$arguments1737['settings'] = array (
);
$arguments1737['uriOnly'] = false;
$arguments1737['configuration'] = array (
);
$arguments1737['content'] = '';
$arguments1737['section'] = NULL;
$array1739 = array (
);$arguments1737['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1739);
$array1740 = array (
);$arguments1737['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1740);
$array1741 = array (
);$arguments1737['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1741);

$output1649 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1737, $renderChildrenClosure1738, $renderingContext);

$output1649 .= '	  
                                        </div>
                                    </div>
                                </div>
                 </div>                
							    ';
return $output1649;
};
$arguments1647 = array();

$output1646 .= '';

$output1646 .= '
  ';
return $output1646;
};
$arguments1548 = array();
$arguments1548['then'] = NULL;
$arguments1548['else'] = NULL;
$arguments1548['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1643 = array();
$array1644 = array (
);$array1643['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1644);
$array1643['1'] = ' == 20';

$expression1645 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 20);};
$arguments1548['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1645(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1643)
					),
					$renderingContext
				);
$arguments1548['__thenClosure'] = function() use ($renderingContext, $self) {
$output1550 = '';

$output1550 .= '
 <div class="col-sm-6">
                                <div class="article-wrapper_core">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1552 = function() use ($renderingContext, $self) {
$output1556 = '';

$output1556 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1558 = function() use ($renderingContext, $self) {
$output1593 = '';

$output1593 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1595 = function() use ($renderingContext, $self) {
$output1596 = '';

$output1596 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1598 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1597 = array();
$arguments1597['additionalAttributes'] = NULL;
$arguments1597['data'] = NULL;
$arguments1597['class'] = NULL;
$arguments1597['dir'] = NULL;
$arguments1597['id'] = NULL;
$arguments1597['lang'] = NULL;
$arguments1597['style'] = NULL;
$arguments1597['title'] = NULL;
$arguments1597['accesskey'] = NULL;
$arguments1597['tabindex'] = NULL;
$arguments1597['onclick'] = NULL;
$arguments1597['alt'] = NULL;
$arguments1597['file'] = NULL;
$arguments1597['additionalConfig'] = array (
);
$arguments1597['width'] = NULL;
$arguments1597['height'] = NULL;
$arguments1597['cropVariant'] = 'default';
$arguments1597['class'] = 'img-responsive';
$array1599 = array (
);$arguments1597['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1599);
$array1600 = array (
);$arguments1597['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1600);
$array1601 = array (
);$arguments1597['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1601);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1602 = array();
$arguments1602['then'] = NULL;
$arguments1602['else'] = NULL;
$arguments1602['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1604 = array();
$array1605 = array (
);$array1604['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1605);

$expression1606 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1602['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1606(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1604)
					),
					$renderingContext
				);
$array1607 = array (
);$arguments1602['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1607);
$array1608 = array (
);$arguments1602['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1608);
$arguments1597['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1602, $renderChildrenClosure1603, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1610 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1609 = array();
$arguments1609['then'] = NULL;
$arguments1609['else'] = NULL;
$arguments1609['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1611 = array();
$array1612 = array (
);$array1611['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1612);

$expression1613 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1609['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1613(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1611)
					),
					$renderingContext
				);
$array1614 = array (
);$arguments1609['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1614);
$arguments1609['else'] = '';
$arguments1597['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1609, $renderChildrenClosure1610, $renderingContext);

$output1596 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1597, $renderChildrenClosure1598, $renderingContext);

$output1596 .= '
            ';
return $output1596;
};
$arguments1594 = array();

$output1593 .= '';

$output1593 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1616 = function() use ($renderingContext, $self) {
$output1617 = '';

$output1617 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1619 = function() use ($renderingContext, $self) {
$output1623 = '';

$output1623 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1624 = array();
$arguments1624['additionalAttributes'] = NULL;
$arguments1624['data'] = NULL;
$arguments1624['class'] = NULL;
$arguments1624['dir'] = NULL;
$arguments1624['id'] = NULL;
$arguments1624['lang'] = NULL;
$arguments1624['style'] = NULL;
$arguments1624['title'] = NULL;
$arguments1624['accesskey'] = NULL;
$arguments1624['tabindex'] = NULL;
$arguments1624['onclick'] = NULL;
$arguments1624['alt'] = NULL;
$arguments1624['ismap'] = NULL;
$arguments1624['longdesc'] = NULL;
$arguments1624['usemap'] = NULL;
$arguments1624['src'] = NULL;
$arguments1624['treatIdAsReference'] = NULL;
$arguments1624['image'] = NULL;
$arguments1624['crop'] = NULL;
$arguments1624['cropVariant'] = 'default';
$arguments1624['width'] = NULL;
$arguments1624['height'] = NULL;
$arguments1624['minWidth'] = NULL;
$arguments1624['minHeight'] = NULL;
$arguments1624['maxWidth'] = NULL;
$arguments1624['maxHeight'] = NULL;
$arguments1624['absolute'] = false;
$arguments1624['class'] = 'img-responsive';
$array1626 = array (
);$arguments1624['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1626);
$arguments1624['title'] = '';
$arguments1624['alt'] = '';
$array1627 = array (
);$arguments1624['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1627);
$array1628 = array (
);$arguments1624['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1628);

$output1623 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1624, $renderChildrenClosure1625, $renderingContext);

$output1623 .= '
              ';
return $output1623;
};
$arguments1618 = array();
$arguments1618['then'] = NULL;
$arguments1618['else'] = NULL;
$arguments1618['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1620 = array();
$array1621 = array (
);$array1620['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1621);

$expression1622 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1618['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1622(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1620)
					),
					$renderingContext
				);
$arguments1618['__thenClosure'] = $renderChildrenClosure1619;

$output1617 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1618, $renderChildrenClosure1619, $renderingContext);

$output1617 .= '
            ';
return $output1617;
};
$arguments1615 = array();
$arguments1615['if'] = NULL;

$output1593 .= '';

$output1593 .= '
          ';
return $output1593;
};
$arguments1557 = array();
$arguments1557['then'] = NULL;
$arguments1557['else'] = NULL;
$arguments1557['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1590 = array();
$array1591 = array (
);$array1590['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1591);

$expression1592 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1557['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1592(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1590)
					),
					$renderingContext
				);
$arguments1557['__thenClosure'] = function() use ($renderingContext, $self) {
$output1559 = '';

$output1559 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1561 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1560 = array();
$arguments1560['additionalAttributes'] = NULL;
$arguments1560['data'] = NULL;
$arguments1560['class'] = NULL;
$arguments1560['dir'] = NULL;
$arguments1560['id'] = NULL;
$arguments1560['lang'] = NULL;
$arguments1560['style'] = NULL;
$arguments1560['title'] = NULL;
$arguments1560['accesskey'] = NULL;
$arguments1560['tabindex'] = NULL;
$arguments1560['onclick'] = NULL;
$arguments1560['alt'] = NULL;
$arguments1560['file'] = NULL;
$arguments1560['additionalConfig'] = array (
);
$arguments1560['width'] = NULL;
$arguments1560['height'] = NULL;
$arguments1560['cropVariant'] = 'default';
$arguments1560['class'] = 'img-responsive';
$array1562 = array (
);$arguments1560['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1562);
$array1563 = array (
);$arguments1560['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1563);
$array1564 = array (
);$arguments1560['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1564);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1566 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1565 = array();
$arguments1565['then'] = NULL;
$arguments1565['else'] = NULL;
$arguments1565['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1567 = array();
$array1568 = array (
);$array1567['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1568);

$expression1569 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1565['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1569(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1567)
					),
					$renderingContext
				);
$array1570 = array (
);$arguments1565['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1570);
$array1571 = array (
);$arguments1565['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1571);
$arguments1560['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1565, $renderChildrenClosure1566, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1572 = array();
$arguments1572['then'] = NULL;
$arguments1572['else'] = NULL;
$arguments1572['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1574 = array();
$array1575 = array (
);$array1574['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1575);

$expression1576 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1572['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1576(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1574)
					),
					$renderingContext
				);
$array1577 = array (
);$arguments1572['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1577);
$arguments1572['else'] = '';
$arguments1560['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1572, $renderChildrenClosure1573, $renderingContext);

$output1559 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1560, $renderChildrenClosure1561, $renderingContext);

$output1559 .= '
            ';
return $output1559;
};
$arguments1557['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1578 = '';

$output1578 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1580 = function() use ($renderingContext, $self) {
$output1584 = '';

$output1584 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1586 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1585 = array();
$arguments1585['additionalAttributes'] = NULL;
$arguments1585['data'] = NULL;
$arguments1585['class'] = NULL;
$arguments1585['dir'] = NULL;
$arguments1585['id'] = NULL;
$arguments1585['lang'] = NULL;
$arguments1585['style'] = NULL;
$arguments1585['title'] = NULL;
$arguments1585['accesskey'] = NULL;
$arguments1585['tabindex'] = NULL;
$arguments1585['onclick'] = NULL;
$arguments1585['alt'] = NULL;
$arguments1585['ismap'] = NULL;
$arguments1585['longdesc'] = NULL;
$arguments1585['usemap'] = NULL;
$arguments1585['src'] = NULL;
$arguments1585['treatIdAsReference'] = NULL;
$arguments1585['image'] = NULL;
$arguments1585['crop'] = NULL;
$arguments1585['cropVariant'] = 'default';
$arguments1585['width'] = NULL;
$arguments1585['height'] = NULL;
$arguments1585['minWidth'] = NULL;
$arguments1585['minHeight'] = NULL;
$arguments1585['maxWidth'] = NULL;
$arguments1585['maxHeight'] = NULL;
$arguments1585['absolute'] = false;
$arguments1585['class'] = 'img-responsive';
$array1587 = array (
);$arguments1585['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1587);
$arguments1585['title'] = '';
$arguments1585['alt'] = '';
$array1588 = array (
);$arguments1585['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1588);
$array1589 = array (
);$arguments1585['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1589);

$output1584 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1585, $renderChildrenClosure1586, $renderingContext);

$output1584 .= '
              ';
return $output1584;
};
$arguments1579 = array();
$arguments1579['then'] = NULL;
$arguments1579['else'] = NULL;
$arguments1579['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1581 = array();
$array1582 = array (
);$array1581['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1582);

$expression1583 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1579['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1583(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1581)
					),
					$renderingContext
				);
$arguments1579['__thenClosure'] = $renderChildrenClosure1580;

$output1578 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1579, $renderChildrenClosure1580, $renderingContext);

$output1578 .= '
            ';
return $output1578;
};

$output1556 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1557, $renderChildrenClosure1558, $renderingContext);

$output1556 .= '   
	 ';
return $output1556;
};
$arguments1551 = array();
$arguments1551['additionalAttributes'] = NULL;
$arguments1551['data'] = NULL;
$arguments1551['class'] = NULL;
$arguments1551['dir'] = NULL;
$arguments1551['id'] = NULL;
$arguments1551['lang'] = NULL;
$arguments1551['style'] = NULL;
$arguments1551['title'] = NULL;
$arguments1551['accesskey'] = NULL;
$arguments1551['tabindex'] = NULL;
$arguments1551['onclick'] = NULL;
$arguments1551['newsItem'] = NULL;
$arguments1551['settings'] = array (
);
$arguments1551['uriOnly'] = false;
$arguments1551['configuration'] = array (
);
$arguments1551['content'] = '';
$arguments1551['section'] = NULL;
$array1553 = array (
);$arguments1551['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1553);
$array1554 = array (
);$arguments1551['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1554);
$array1555 = array (
);$arguments1551['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1555);

$output1550 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1551, $renderChildrenClosure1552, $renderingContext);

$output1550 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1629 = array (
);
$output1550 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1629)]);

$output1550 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1631 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1633 = function() use ($renderingContext, $self) {
$array1637 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1637);
};
$arguments1632 = array();
$arguments1632['maxCharacters'] = NULL;
$arguments1632['append'] = '...';
$arguments1632['respectWordBoundaries'] = true;
$arguments1632['respectHtml'] = true;
$array1634 = array (
);$arguments1632['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1634);
// Rendering Boolean node
// Rendering Array
$array1635 = array();
$array1635['0'] = 1;

$expression1636 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1632['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1636(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1635)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1632, $renderChildrenClosure1633, $renderingContext);
};
$arguments1630 = array();
$arguments1630['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1550 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1630, $renderChildrenClosure1631, $renderingContext);

$output1550 .= '
                                        <div class="sp-btncore">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1639 = function() use ($renderingContext, $self) {
return 'LEARN MORE ';
};
$arguments1638 = array();
$arguments1638['additionalAttributes'] = NULL;
$arguments1638['data'] = NULL;
$arguments1638['class'] = NULL;
$arguments1638['dir'] = NULL;
$arguments1638['id'] = NULL;
$arguments1638['lang'] = NULL;
$arguments1638['style'] = NULL;
$arguments1638['title'] = NULL;
$arguments1638['accesskey'] = NULL;
$arguments1638['tabindex'] = NULL;
$arguments1638['onclick'] = NULL;
$arguments1638['newsItem'] = NULL;
$arguments1638['settings'] = array (
);
$arguments1638['uriOnly'] = false;
$arguments1638['configuration'] = array (
);
$arguments1638['content'] = '';
$arguments1638['section'] = NULL;
$array1640 = array (
);$arguments1638['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1640);
$array1641 = array (
);$arguments1638['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1641);
$array1642 = array (
);$arguments1638['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1642);

$output1550 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1638, $renderChildrenClosure1639, $renderingContext);

$output1550 .= '	  
                                        </div>
                                    </div>
                                </div>
                 </div>                
							    ';
return $output1550;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1548, $renderChildrenClosure1549, $renderingContext);

$output0 .= ' 
  
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1743 = function() use ($renderingContext, $self) {
$output1840 = '';

$output1840 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1842 = function() use ($renderingContext, $self) {
$output1843 = '';

$output1843 .= '
 <div class="col-sm-6">
                                <div class="article-wrapper_coreblue">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1845 = function() use ($renderingContext, $self) {
$output1849 = '';

$output1849 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1851 = function() use ($renderingContext, $self) {
$output1886 = '';

$output1886 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1888 = function() use ($renderingContext, $self) {
$output1889 = '';

$output1889 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1890 = array();
$arguments1890['additionalAttributes'] = NULL;
$arguments1890['data'] = NULL;
$arguments1890['class'] = NULL;
$arguments1890['dir'] = NULL;
$arguments1890['id'] = NULL;
$arguments1890['lang'] = NULL;
$arguments1890['style'] = NULL;
$arguments1890['title'] = NULL;
$arguments1890['accesskey'] = NULL;
$arguments1890['tabindex'] = NULL;
$arguments1890['onclick'] = NULL;
$arguments1890['alt'] = NULL;
$arguments1890['file'] = NULL;
$arguments1890['additionalConfig'] = array (
);
$arguments1890['width'] = NULL;
$arguments1890['height'] = NULL;
$arguments1890['cropVariant'] = 'default';
$arguments1890['class'] = 'img-responsive';
$array1892 = array (
);$arguments1890['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1892);
$array1893 = array (
);$arguments1890['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1893);
$array1894 = array (
);$arguments1890['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1894);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1895 = array();
$arguments1895['then'] = NULL;
$arguments1895['else'] = NULL;
$arguments1895['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1897 = array();
$array1898 = array (
);$array1897['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1898);

$expression1899 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1895['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1899(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1897)
					),
					$renderingContext
				);
$array1900 = array (
);$arguments1895['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1900);
$array1901 = array (
);$arguments1895['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1901);
$arguments1890['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1895, $renderChildrenClosure1896, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1902 = array();
$arguments1902['then'] = NULL;
$arguments1902['else'] = NULL;
$arguments1902['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1904 = array();
$array1905 = array (
);$array1904['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1905);

$expression1906 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1902['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1906(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1904)
					),
					$renderingContext
				);
$array1907 = array (
);$arguments1902['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1907);
$arguments1902['else'] = '';
$arguments1890['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1902, $renderChildrenClosure1903, $renderingContext);

$output1889 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1890, $renderChildrenClosure1891, $renderingContext);

$output1889 .= '
            ';
return $output1889;
};
$arguments1887 = array();

$output1886 .= '';

$output1886 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1909 = function() use ($renderingContext, $self) {
$output1910 = '';

$output1910 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1912 = function() use ($renderingContext, $self) {
$output1916 = '';

$output1916 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1918 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1917 = array();
$arguments1917['additionalAttributes'] = NULL;
$arguments1917['data'] = NULL;
$arguments1917['class'] = NULL;
$arguments1917['dir'] = NULL;
$arguments1917['id'] = NULL;
$arguments1917['lang'] = NULL;
$arguments1917['style'] = NULL;
$arguments1917['title'] = NULL;
$arguments1917['accesskey'] = NULL;
$arguments1917['tabindex'] = NULL;
$arguments1917['onclick'] = NULL;
$arguments1917['alt'] = NULL;
$arguments1917['ismap'] = NULL;
$arguments1917['longdesc'] = NULL;
$arguments1917['usemap'] = NULL;
$arguments1917['src'] = NULL;
$arguments1917['treatIdAsReference'] = NULL;
$arguments1917['image'] = NULL;
$arguments1917['crop'] = NULL;
$arguments1917['cropVariant'] = 'default';
$arguments1917['width'] = NULL;
$arguments1917['height'] = NULL;
$arguments1917['minWidth'] = NULL;
$arguments1917['minHeight'] = NULL;
$arguments1917['maxWidth'] = NULL;
$arguments1917['maxHeight'] = NULL;
$arguments1917['absolute'] = false;
$arguments1917['class'] = 'img-responsive';
$array1919 = array (
);$arguments1917['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1919);
$arguments1917['title'] = '';
$arguments1917['alt'] = '';
$array1920 = array (
);$arguments1917['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1920);
$array1921 = array (
);$arguments1917['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1921);

$output1916 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1917, $renderChildrenClosure1918, $renderingContext);

$output1916 .= '
              ';
return $output1916;
};
$arguments1911 = array();
$arguments1911['then'] = NULL;
$arguments1911['else'] = NULL;
$arguments1911['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1913 = array();
$array1914 = array (
);$array1913['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1914);

$expression1915 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1911['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1915(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1913)
					),
					$renderingContext
				);
$arguments1911['__thenClosure'] = $renderChildrenClosure1912;

$output1910 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1911, $renderChildrenClosure1912, $renderingContext);

$output1910 .= '
            ';
return $output1910;
};
$arguments1908 = array();
$arguments1908['if'] = NULL;

$output1886 .= '';

$output1886 .= '
          ';
return $output1886;
};
$arguments1850 = array();
$arguments1850['then'] = NULL;
$arguments1850['else'] = NULL;
$arguments1850['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1883 = array();
$array1884 = array (
);$array1883['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1884);

$expression1885 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1850['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1885(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1883)
					),
					$renderingContext
				);
$arguments1850['__thenClosure'] = function() use ($renderingContext, $self) {
$output1852 = '';

$output1852 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1854 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1853 = array();
$arguments1853['additionalAttributes'] = NULL;
$arguments1853['data'] = NULL;
$arguments1853['class'] = NULL;
$arguments1853['dir'] = NULL;
$arguments1853['id'] = NULL;
$arguments1853['lang'] = NULL;
$arguments1853['style'] = NULL;
$arguments1853['title'] = NULL;
$arguments1853['accesskey'] = NULL;
$arguments1853['tabindex'] = NULL;
$arguments1853['onclick'] = NULL;
$arguments1853['alt'] = NULL;
$arguments1853['file'] = NULL;
$arguments1853['additionalConfig'] = array (
);
$arguments1853['width'] = NULL;
$arguments1853['height'] = NULL;
$arguments1853['cropVariant'] = 'default';
$arguments1853['class'] = 'img-responsive';
$array1855 = array (
);$arguments1853['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1855);
$array1856 = array (
);$arguments1853['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1856);
$array1857 = array (
);$arguments1853['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1857);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1859 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1858 = array();
$arguments1858['then'] = NULL;
$arguments1858['else'] = NULL;
$arguments1858['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1860 = array();
$array1861 = array (
);$array1860['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1861);

$expression1862 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1858['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1862(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1860)
					),
					$renderingContext
				);
$array1863 = array (
);$arguments1858['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1863);
$array1864 = array (
);$arguments1858['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1864);
$arguments1853['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1858, $renderChildrenClosure1859, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1866 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1865 = array();
$arguments1865['then'] = NULL;
$arguments1865['else'] = NULL;
$arguments1865['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1867 = array();
$array1868 = array (
);$array1867['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1868);

$expression1869 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1865['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1869(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1867)
					),
					$renderingContext
				);
$array1870 = array (
);$arguments1865['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1870);
$arguments1865['else'] = '';
$arguments1853['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1865, $renderChildrenClosure1866, $renderingContext);

$output1852 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1853, $renderChildrenClosure1854, $renderingContext);

$output1852 .= '
            ';
return $output1852;
};
$arguments1850['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1871 = '';

$output1871 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1873 = function() use ($renderingContext, $self) {
$output1877 = '';

$output1877 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1879 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1878 = array();
$arguments1878['additionalAttributes'] = NULL;
$arguments1878['data'] = NULL;
$arguments1878['class'] = NULL;
$arguments1878['dir'] = NULL;
$arguments1878['id'] = NULL;
$arguments1878['lang'] = NULL;
$arguments1878['style'] = NULL;
$arguments1878['title'] = NULL;
$arguments1878['accesskey'] = NULL;
$arguments1878['tabindex'] = NULL;
$arguments1878['onclick'] = NULL;
$arguments1878['alt'] = NULL;
$arguments1878['ismap'] = NULL;
$arguments1878['longdesc'] = NULL;
$arguments1878['usemap'] = NULL;
$arguments1878['src'] = NULL;
$arguments1878['treatIdAsReference'] = NULL;
$arguments1878['image'] = NULL;
$arguments1878['crop'] = NULL;
$arguments1878['cropVariant'] = 'default';
$arguments1878['width'] = NULL;
$arguments1878['height'] = NULL;
$arguments1878['minWidth'] = NULL;
$arguments1878['minHeight'] = NULL;
$arguments1878['maxWidth'] = NULL;
$arguments1878['maxHeight'] = NULL;
$arguments1878['absolute'] = false;
$arguments1878['class'] = 'img-responsive';
$array1880 = array (
);$arguments1878['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1880);
$arguments1878['title'] = '';
$arguments1878['alt'] = '';
$array1881 = array (
);$arguments1878['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1881);
$array1882 = array (
);$arguments1878['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1882);

$output1877 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1878, $renderChildrenClosure1879, $renderingContext);

$output1877 .= '
              ';
return $output1877;
};
$arguments1872 = array();
$arguments1872['then'] = NULL;
$arguments1872['else'] = NULL;
$arguments1872['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1874 = array();
$array1875 = array (
);$array1874['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1875);

$expression1876 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1872['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1876(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1874)
					),
					$renderingContext
				);
$arguments1872['__thenClosure'] = $renderChildrenClosure1873;

$output1871 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1872, $renderChildrenClosure1873, $renderingContext);

$output1871 .= '
            ';
return $output1871;
};

$output1849 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1850, $renderChildrenClosure1851, $renderingContext);

$output1849 .= '   
	 ';
return $output1849;
};
$arguments1844 = array();
$arguments1844['additionalAttributes'] = NULL;
$arguments1844['data'] = NULL;
$arguments1844['class'] = NULL;
$arguments1844['dir'] = NULL;
$arguments1844['id'] = NULL;
$arguments1844['lang'] = NULL;
$arguments1844['style'] = NULL;
$arguments1844['title'] = NULL;
$arguments1844['accesskey'] = NULL;
$arguments1844['tabindex'] = NULL;
$arguments1844['onclick'] = NULL;
$arguments1844['newsItem'] = NULL;
$arguments1844['settings'] = array (
);
$arguments1844['uriOnly'] = false;
$arguments1844['configuration'] = array (
);
$arguments1844['content'] = '';
$arguments1844['section'] = NULL;
$array1846 = array (
);$arguments1844['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1846);
$array1847 = array (
);$arguments1844['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1847);
$array1848 = array (
);$arguments1844['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1848);

$output1843 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1844, $renderChildrenClosure1845, $renderingContext);

$output1843 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1922 = array (
);
$output1843 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1922)]);

$output1843 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1924 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1926 = function() use ($renderingContext, $self) {
$array1930 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1930);
};
$arguments1925 = array();
$arguments1925['maxCharacters'] = NULL;
$arguments1925['append'] = '...';
$arguments1925['respectWordBoundaries'] = true;
$arguments1925['respectHtml'] = true;
$array1927 = array (
);$arguments1925['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1927);
// Rendering Boolean node
// Rendering Array
$array1928 = array();
$array1928['0'] = 1;

$expression1929 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1925['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1929(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1928)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1925, $renderChildrenClosure1926, $renderingContext);
};
$arguments1923 = array();
$arguments1923['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1843 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1923, $renderChildrenClosure1924, $renderingContext);

$output1843 .= '
                                        <div class="sp-btncore">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1932 = function() use ($renderingContext, $self) {
return 'LEARN MORE  ';
};
$arguments1931 = array();
$arguments1931['additionalAttributes'] = NULL;
$arguments1931['data'] = NULL;
$arguments1931['class'] = NULL;
$arguments1931['dir'] = NULL;
$arguments1931['id'] = NULL;
$arguments1931['lang'] = NULL;
$arguments1931['style'] = NULL;
$arguments1931['title'] = NULL;
$arguments1931['accesskey'] = NULL;
$arguments1931['tabindex'] = NULL;
$arguments1931['onclick'] = NULL;
$arguments1931['newsItem'] = NULL;
$arguments1931['settings'] = array (
);
$arguments1931['uriOnly'] = false;
$arguments1931['configuration'] = array (
);
$arguments1931['content'] = '';
$arguments1931['section'] = NULL;
$array1933 = array (
);$arguments1931['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1933);
$array1934 = array (
);$arguments1931['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1934);
$array1935 = array (
);$arguments1931['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1935);

$output1843 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1931, $renderChildrenClosure1932, $renderingContext);

$output1843 .= '	  
                                        </div>
                                    </div>
                                </div>
                 </div>                
							    ';
return $output1843;
};
$arguments1841 = array();

$output1840 .= '';

$output1840 .= '
  ';
return $output1840;
};
$arguments1742 = array();
$arguments1742['then'] = NULL;
$arguments1742['else'] = NULL;
$arguments1742['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1837 = array();
$array1838 = array (
);$array1837['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array1838);
$array1837['1'] = ' == 21';

$expression1839 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 21);};
$arguments1742['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1839(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1837)
					),
					$renderingContext
				);
$arguments1742['__thenClosure'] = function() use ($renderingContext, $self) {
$output1744 = '';

$output1744 .= '
 <div class="col-sm-6">
                                <div class="article-wrapper_coreblue">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1746 = function() use ($renderingContext, $self) {
$output1750 = '';

$output1750 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1752 = function() use ($renderingContext, $self) {
$output1787 = '';

$output1787 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1789 = function() use ($renderingContext, $self) {
$output1790 = '';

$output1790 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1791 = array();
$arguments1791['additionalAttributes'] = NULL;
$arguments1791['data'] = NULL;
$arguments1791['class'] = NULL;
$arguments1791['dir'] = NULL;
$arguments1791['id'] = NULL;
$arguments1791['lang'] = NULL;
$arguments1791['style'] = NULL;
$arguments1791['title'] = NULL;
$arguments1791['accesskey'] = NULL;
$arguments1791['tabindex'] = NULL;
$arguments1791['onclick'] = NULL;
$arguments1791['alt'] = NULL;
$arguments1791['file'] = NULL;
$arguments1791['additionalConfig'] = array (
);
$arguments1791['width'] = NULL;
$arguments1791['height'] = NULL;
$arguments1791['cropVariant'] = 'default';
$arguments1791['class'] = 'img-responsive';
$array1793 = array (
);$arguments1791['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1793);
$array1794 = array (
);$arguments1791['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1794);
$array1795 = array (
);$arguments1791['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1795);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1797 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1796 = array();
$arguments1796['then'] = NULL;
$arguments1796['else'] = NULL;
$arguments1796['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1798 = array();
$array1799 = array (
);$array1798['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1799);

$expression1800 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1796['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1800(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1798)
					),
					$renderingContext
				);
$array1801 = array (
);$arguments1796['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1801);
$array1802 = array (
);$arguments1796['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1802);
$arguments1791['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1796, $renderChildrenClosure1797, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1804 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1803 = array();
$arguments1803['then'] = NULL;
$arguments1803['else'] = NULL;
$arguments1803['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1805 = array();
$array1806 = array (
);$array1805['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1806);

$expression1807 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1803['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1807(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1805)
					),
					$renderingContext
				);
$array1808 = array (
);$arguments1803['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1808);
$arguments1803['else'] = '';
$arguments1791['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1803, $renderChildrenClosure1804, $renderingContext);

$output1790 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1791, $renderChildrenClosure1792, $renderingContext);

$output1790 .= '
            ';
return $output1790;
};
$arguments1788 = array();

$output1787 .= '';

$output1787 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1810 = function() use ($renderingContext, $self) {
$output1811 = '';

$output1811 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1813 = function() use ($renderingContext, $self) {
$output1817 = '';

$output1817 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1818 = array();
$arguments1818['additionalAttributes'] = NULL;
$arguments1818['data'] = NULL;
$arguments1818['class'] = NULL;
$arguments1818['dir'] = NULL;
$arguments1818['id'] = NULL;
$arguments1818['lang'] = NULL;
$arguments1818['style'] = NULL;
$arguments1818['title'] = NULL;
$arguments1818['accesskey'] = NULL;
$arguments1818['tabindex'] = NULL;
$arguments1818['onclick'] = NULL;
$arguments1818['alt'] = NULL;
$arguments1818['ismap'] = NULL;
$arguments1818['longdesc'] = NULL;
$arguments1818['usemap'] = NULL;
$arguments1818['src'] = NULL;
$arguments1818['treatIdAsReference'] = NULL;
$arguments1818['image'] = NULL;
$arguments1818['crop'] = NULL;
$arguments1818['cropVariant'] = 'default';
$arguments1818['width'] = NULL;
$arguments1818['height'] = NULL;
$arguments1818['minWidth'] = NULL;
$arguments1818['minHeight'] = NULL;
$arguments1818['maxWidth'] = NULL;
$arguments1818['maxHeight'] = NULL;
$arguments1818['absolute'] = false;
$arguments1818['class'] = 'img-responsive';
$array1820 = array (
);$arguments1818['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1820);
$arguments1818['title'] = '';
$arguments1818['alt'] = '';
$array1821 = array (
);$arguments1818['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1821);
$array1822 = array (
);$arguments1818['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1822);

$output1817 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1818, $renderChildrenClosure1819, $renderingContext);

$output1817 .= '
              ';
return $output1817;
};
$arguments1812 = array();
$arguments1812['then'] = NULL;
$arguments1812['else'] = NULL;
$arguments1812['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1814 = array();
$array1815 = array (
);$array1814['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1815);

$expression1816 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1812['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1816(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1814)
					),
					$renderingContext
				);
$arguments1812['__thenClosure'] = $renderChildrenClosure1813;

$output1811 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1812, $renderChildrenClosure1813, $renderingContext);

$output1811 .= '
            ';
return $output1811;
};
$arguments1809 = array();
$arguments1809['if'] = NULL;

$output1787 .= '';

$output1787 .= '
          ';
return $output1787;
};
$arguments1751 = array();
$arguments1751['then'] = NULL;
$arguments1751['else'] = NULL;
$arguments1751['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1784 = array();
$array1785 = array (
);$array1784['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1785);

$expression1786 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1751['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1786(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1784)
					),
					$renderingContext
				);
$arguments1751['__thenClosure'] = function() use ($renderingContext, $self) {
$output1753 = '';

$output1753 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1755 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1754 = array();
$arguments1754['additionalAttributes'] = NULL;
$arguments1754['data'] = NULL;
$arguments1754['class'] = NULL;
$arguments1754['dir'] = NULL;
$arguments1754['id'] = NULL;
$arguments1754['lang'] = NULL;
$arguments1754['style'] = NULL;
$arguments1754['title'] = NULL;
$arguments1754['accesskey'] = NULL;
$arguments1754['tabindex'] = NULL;
$arguments1754['onclick'] = NULL;
$arguments1754['alt'] = NULL;
$arguments1754['file'] = NULL;
$arguments1754['additionalConfig'] = array (
);
$arguments1754['width'] = NULL;
$arguments1754['height'] = NULL;
$arguments1754['cropVariant'] = 'default';
$arguments1754['class'] = 'img-responsive';
$array1756 = array (
);$arguments1754['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1756);
$array1757 = array (
);$arguments1754['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1757);
$array1758 = array (
);$arguments1754['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1758);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1760 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1759 = array();
$arguments1759['then'] = NULL;
$arguments1759['else'] = NULL;
$arguments1759['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1761 = array();
$array1762 = array (
);$array1761['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1762);

$expression1763 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1759['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1763(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1761)
					),
					$renderingContext
				);
$array1764 = array (
);$arguments1759['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1764);
$array1765 = array (
);$arguments1759['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1765);
$arguments1754['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1759, $renderChildrenClosure1760, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1767 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1766 = array();
$arguments1766['then'] = NULL;
$arguments1766['else'] = NULL;
$arguments1766['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1768 = array();
$array1769 = array (
);$array1768['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1769);

$expression1770 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1766['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1770(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1768)
					),
					$renderingContext
				);
$array1771 = array (
);$arguments1766['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1771);
$arguments1766['else'] = '';
$arguments1754['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1766, $renderChildrenClosure1767, $renderingContext);

$output1753 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1754, $renderChildrenClosure1755, $renderingContext);

$output1753 .= '
            ';
return $output1753;
};
$arguments1751['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1772 = '';

$output1772 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1774 = function() use ($renderingContext, $self) {
$output1778 = '';

$output1778 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1780 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1779 = array();
$arguments1779['additionalAttributes'] = NULL;
$arguments1779['data'] = NULL;
$arguments1779['class'] = NULL;
$arguments1779['dir'] = NULL;
$arguments1779['id'] = NULL;
$arguments1779['lang'] = NULL;
$arguments1779['style'] = NULL;
$arguments1779['title'] = NULL;
$arguments1779['accesskey'] = NULL;
$arguments1779['tabindex'] = NULL;
$arguments1779['onclick'] = NULL;
$arguments1779['alt'] = NULL;
$arguments1779['ismap'] = NULL;
$arguments1779['longdesc'] = NULL;
$arguments1779['usemap'] = NULL;
$arguments1779['src'] = NULL;
$arguments1779['treatIdAsReference'] = NULL;
$arguments1779['image'] = NULL;
$arguments1779['crop'] = NULL;
$arguments1779['cropVariant'] = 'default';
$arguments1779['width'] = NULL;
$arguments1779['height'] = NULL;
$arguments1779['minWidth'] = NULL;
$arguments1779['minHeight'] = NULL;
$arguments1779['maxWidth'] = NULL;
$arguments1779['maxHeight'] = NULL;
$arguments1779['absolute'] = false;
$arguments1779['class'] = 'img-responsive';
$array1781 = array (
);$arguments1779['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1781);
$arguments1779['title'] = '';
$arguments1779['alt'] = '';
$array1782 = array (
);$arguments1779['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1782);
$array1783 = array (
);$arguments1779['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1783);

$output1778 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1779, $renderChildrenClosure1780, $renderingContext);

$output1778 .= '
              ';
return $output1778;
};
$arguments1773 = array();
$arguments1773['then'] = NULL;
$arguments1773['else'] = NULL;
$arguments1773['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1775 = array();
$array1776 = array (
);$array1775['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1776);

$expression1777 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1773['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1777(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1775)
					),
					$renderingContext
				);
$arguments1773['__thenClosure'] = $renderChildrenClosure1774;

$output1772 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1773, $renderChildrenClosure1774, $renderingContext);

$output1772 .= '
            ';
return $output1772;
};

$output1750 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1751, $renderChildrenClosure1752, $renderingContext);

$output1750 .= '   
	 ';
return $output1750;
};
$arguments1745 = array();
$arguments1745['additionalAttributes'] = NULL;
$arguments1745['data'] = NULL;
$arguments1745['class'] = NULL;
$arguments1745['dir'] = NULL;
$arguments1745['id'] = NULL;
$arguments1745['lang'] = NULL;
$arguments1745['style'] = NULL;
$arguments1745['title'] = NULL;
$arguments1745['accesskey'] = NULL;
$arguments1745['tabindex'] = NULL;
$arguments1745['onclick'] = NULL;
$arguments1745['newsItem'] = NULL;
$arguments1745['settings'] = array (
);
$arguments1745['uriOnly'] = false;
$arguments1745['configuration'] = array (
);
$arguments1745['content'] = '';
$arguments1745['section'] = NULL;
$array1747 = array (
);$arguments1745['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1747);
$array1748 = array (
);$arguments1745['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1748);
$array1749 = array (
);$arguments1745['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1749);

$output1744 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1745, $renderChildrenClosure1746, $renderingContext);

$output1744 .= '	  
 </div>
                                    <div class="article-content" style="min-height: 162px;">
                                        <h5>';
$array1823 = array (
);
$output1744 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1823)]);

$output1744 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure1825 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure1827 = function() use ($renderingContext, $self) {
$array1831 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array1831);
};
$arguments1826 = array();
$arguments1826['maxCharacters'] = NULL;
$arguments1826['append'] = '...';
$arguments1826['respectWordBoundaries'] = true;
$arguments1826['respectHtml'] = true;
$array1828 = array (
);$arguments1826['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array1828);
// Rendering Boolean node
// Rendering Array
$array1829 = array();
$array1829['0'] = 1;

$expression1830 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1826['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1830(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1829)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments1826, $renderChildrenClosure1827, $renderingContext);
};
$arguments1824 = array();
$arguments1824['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output1744 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments1824, $renderChildrenClosure1825, $renderingContext);

$output1744 .= '
                                        <div class="sp-btncore">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure1833 = function() use ($renderingContext, $self) {
return 'LEARN MORE  ';
};
$arguments1832 = array();
$arguments1832['additionalAttributes'] = NULL;
$arguments1832['data'] = NULL;
$arguments1832['class'] = NULL;
$arguments1832['dir'] = NULL;
$arguments1832['id'] = NULL;
$arguments1832['lang'] = NULL;
$arguments1832['style'] = NULL;
$arguments1832['title'] = NULL;
$arguments1832['accesskey'] = NULL;
$arguments1832['tabindex'] = NULL;
$arguments1832['onclick'] = NULL;
$arguments1832['newsItem'] = NULL;
$arguments1832['settings'] = array (
);
$arguments1832['uriOnly'] = false;
$arguments1832['configuration'] = array (
);
$arguments1832['content'] = '';
$arguments1832['section'] = NULL;
$array1834 = array (
);$arguments1832['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array1834);
$array1835 = array (
);$arguments1832['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array1835);
$array1836 = array (
);$arguments1832['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array1836);

$output1744 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments1832, $renderChildrenClosure1833, $renderingContext);

$output1744 .= '	  
                                        </div>
                                    </div>
                                </div>
                 </div>                
							    ';
return $output1744;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1742, $renderChildrenClosure1743, $renderingContext);

$output0 .= ' 
  
  
   <!--best annualy reports-->
       ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1937 = function() use ($renderingContext, $self) {
$output2019 = '';

$output2019 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2021 = function() use ($renderingContext, $self) {
$output2022 = '';

$output2022 .= '
         <div class="col-sm-12 bgreport">
 <div class="col-sm-8">
<div class="article-thumb">

	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2024 = function() use ($renderingContext, $self) {
$output2059 = '';

$output2059 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2061 = function() use ($renderingContext, $self) {
$output2062 = '';

$output2062 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2064 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2063 = array();
$arguments2063['additionalAttributes'] = NULL;
$arguments2063['data'] = NULL;
$arguments2063['class'] = NULL;
$arguments2063['dir'] = NULL;
$arguments2063['id'] = NULL;
$arguments2063['lang'] = NULL;
$arguments2063['style'] = NULL;
$arguments2063['title'] = NULL;
$arguments2063['accesskey'] = NULL;
$arguments2063['tabindex'] = NULL;
$arguments2063['onclick'] = NULL;
$arguments2063['alt'] = NULL;
$arguments2063['file'] = NULL;
$arguments2063['additionalConfig'] = array (
);
$arguments2063['width'] = NULL;
$arguments2063['height'] = NULL;
$arguments2063['cropVariant'] = 'default';
$arguments2063['class'] = 'img-responsive';
$array2065 = array (
);$arguments2063['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2065);
$array2066 = array (
);$arguments2063['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2066);
$array2067 = array (
);$arguments2063['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2067);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2069 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2068 = array();
$arguments2068['then'] = NULL;
$arguments2068['else'] = NULL;
$arguments2068['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2070 = array();
$array2071 = array (
);$array2070['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2071);

$expression2072 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2068['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2072(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2070)
					),
					$renderingContext
				);
$array2073 = array (
);$arguments2068['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2073);
$array2074 = array (
);$arguments2068['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2074);
$arguments2063['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2068, $renderChildrenClosure2069, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2076 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2075 = array();
$arguments2075['then'] = NULL;
$arguments2075['else'] = NULL;
$arguments2075['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2077 = array();
$array2078 = array (
);$array2077['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2078);

$expression2079 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2075['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2079(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2077)
					),
					$renderingContext
				);
$array2080 = array (
);$arguments2075['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2080);
$arguments2075['else'] = '';
$arguments2063['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2075, $renderChildrenClosure2076, $renderingContext);

$output2062 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2063, $renderChildrenClosure2064, $renderingContext);

$output2062 .= '
            ';
return $output2062;
};
$arguments2060 = array();

$output2059 .= '';

$output2059 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2082 = function() use ($renderingContext, $self) {
$output2083 = '';

$output2083 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2085 = function() use ($renderingContext, $self) {
$output2089 = '';

$output2089 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2091 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2090 = array();
$arguments2090['additionalAttributes'] = NULL;
$arguments2090['data'] = NULL;
$arguments2090['class'] = NULL;
$arguments2090['dir'] = NULL;
$arguments2090['id'] = NULL;
$arguments2090['lang'] = NULL;
$arguments2090['style'] = NULL;
$arguments2090['title'] = NULL;
$arguments2090['accesskey'] = NULL;
$arguments2090['tabindex'] = NULL;
$arguments2090['onclick'] = NULL;
$arguments2090['alt'] = NULL;
$arguments2090['ismap'] = NULL;
$arguments2090['longdesc'] = NULL;
$arguments2090['usemap'] = NULL;
$arguments2090['src'] = NULL;
$arguments2090['treatIdAsReference'] = NULL;
$arguments2090['image'] = NULL;
$arguments2090['crop'] = NULL;
$arguments2090['cropVariant'] = 'default';
$arguments2090['width'] = NULL;
$arguments2090['height'] = NULL;
$arguments2090['minWidth'] = NULL;
$arguments2090['minHeight'] = NULL;
$arguments2090['maxWidth'] = NULL;
$arguments2090['maxHeight'] = NULL;
$arguments2090['absolute'] = false;
$arguments2090['class'] = 'img-responsive';
$array2092 = array (
);$arguments2090['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2092);
$arguments2090['title'] = '';
$arguments2090['alt'] = '';
$array2093 = array (
);$arguments2090['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2093);
$array2094 = array (
);$arguments2090['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2094);

$output2089 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2090, $renderChildrenClosure2091, $renderingContext);

$output2089 .= '
              ';
return $output2089;
};
$arguments2084 = array();
$arguments2084['then'] = NULL;
$arguments2084['else'] = NULL;
$arguments2084['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2086 = array();
$array2087 = array (
);$array2086['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2087);

$expression2088 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2084['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2088(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2086)
					),
					$renderingContext
				);
$arguments2084['__thenClosure'] = $renderChildrenClosure2085;

$output2083 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2084, $renderChildrenClosure2085, $renderingContext);

$output2083 .= '
            ';
return $output2083;
};
$arguments2081 = array();
$arguments2081['if'] = NULL;

$output2059 .= '';

$output2059 .= '
          ';
return $output2059;
};
$arguments2023 = array();
$arguments2023['then'] = NULL;
$arguments2023['else'] = NULL;
$arguments2023['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2056 = array();
$array2057 = array (
);$array2056['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2057);

$expression2058 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2023['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2058(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2056)
					),
					$renderingContext
				);
$arguments2023['__thenClosure'] = function() use ($renderingContext, $self) {
$output2025 = '';

$output2025 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2027 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2026 = array();
$arguments2026['additionalAttributes'] = NULL;
$arguments2026['data'] = NULL;
$arguments2026['class'] = NULL;
$arguments2026['dir'] = NULL;
$arguments2026['id'] = NULL;
$arguments2026['lang'] = NULL;
$arguments2026['style'] = NULL;
$arguments2026['title'] = NULL;
$arguments2026['accesskey'] = NULL;
$arguments2026['tabindex'] = NULL;
$arguments2026['onclick'] = NULL;
$arguments2026['alt'] = NULL;
$arguments2026['file'] = NULL;
$arguments2026['additionalConfig'] = array (
);
$arguments2026['width'] = NULL;
$arguments2026['height'] = NULL;
$arguments2026['cropVariant'] = 'default';
$arguments2026['class'] = 'img-responsive';
$array2028 = array (
);$arguments2026['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2028);
$array2029 = array (
);$arguments2026['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2029);
$array2030 = array (
);$arguments2026['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2030);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2032 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2031 = array();
$arguments2031['then'] = NULL;
$arguments2031['else'] = NULL;
$arguments2031['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2033 = array();
$array2034 = array (
);$array2033['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2034);

$expression2035 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2031['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2035(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2033)
					),
					$renderingContext
				);
$array2036 = array (
);$arguments2031['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2036);
$array2037 = array (
);$arguments2031['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2037);
$arguments2026['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2031, $renderChildrenClosure2032, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2039 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2038 = array();
$arguments2038['then'] = NULL;
$arguments2038['else'] = NULL;
$arguments2038['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2040 = array();
$array2041 = array (
);$array2040['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2041);

$expression2042 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2038['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2042(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2040)
					),
					$renderingContext
				);
$array2043 = array (
);$arguments2038['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2043);
$arguments2038['else'] = '';
$arguments2026['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2038, $renderChildrenClosure2039, $renderingContext);

$output2025 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2026, $renderChildrenClosure2027, $renderingContext);

$output2025 .= '
            ';
return $output2025;
};
$arguments2023['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2044 = '';

$output2044 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2046 = function() use ($renderingContext, $self) {
$output2050 = '';

$output2050 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2051 = array();
$arguments2051['additionalAttributes'] = NULL;
$arguments2051['data'] = NULL;
$arguments2051['class'] = NULL;
$arguments2051['dir'] = NULL;
$arguments2051['id'] = NULL;
$arguments2051['lang'] = NULL;
$arguments2051['style'] = NULL;
$arguments2051['title'] = NULL;
$arguments2051['accesskey'] = NULL;
$arguments2051['tabindex'] = NULL;
$arguments2051['onclick'] = NULL;
$arguments2051['alt'] = NULL;
$arguments2051['ismap'] = NULL;
$arguments2051['longdesc'] = NULL;
$arguments2051['usemap'] = NULL;
$arguments2051['src'] = NULL;
$arguments2051['treatIdAsReference'] = NULL;
$arguments2051['image'] = NULL;
$arguments2051['crop'] = NULL;
$arguments2051['cropVariant'] = 'default';
$arguments2051['width'] = NULL;
$arguments2051['height'] = NULL;
$arguments2051['minWidth'] = NULL;
$arguments2051['minHeight'] = NULL;
$arguments2051['maxWidth'] = NULL;
$arguments2051['maxHeight'] = NULL;
$arguments2051['absolute'] = false;
$arguments2051['class'] = 'img-responsive';
$array2053 = array (
);$arguments2051['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2053);
$arguments2051['title'] = '';
$arguments2051['alt'] = '';
$array2054 = array (
);$arguments2051['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2054);
$array2055 = array (
);$arguments2051['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2055);

$output2050 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2051, $renderChildrenClosure2052, $renderingContext);

$output2050 .= '
              ';
return $output2050;
};
$arguments2045 = array();
$arguments2045['then'] = NULL;
$arguments2045['else'] = NULL;
$arguments2045['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2047 = array();
$array2048 = array (
);$array2047['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2048);

$expression2049 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2045['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2049(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2047)
					),
					$renderingContext
				);
$arguments2045['__thenClosure'] = $renderChildrenClosure2046;

$output2044 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2045, $renderChildrenClosure2046, $renderingContext);

$output2044 .= '
            ';
return $output2044;
};

$output2022 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2023, $renderChildrenClosure2024, $renderingContext);

$output2022 .= '   
	  
 </div>
  </div>
       <div class="col-sm-4 sp-btnd">
                      ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2096 = function() use ($renderingContext, $self) {
return '                 
                                  Download
                      ';
};
$arguments2095 = array();
$arguments2095['additionalAttributes'] = NULL;
$arguments2095['data'] = NULL;
$arguments2095['class'] = NULL;
$arguments2095['dir'] = NULL;
$arguments2095['id'] = NULL;
$arguments2095['lang'] = NULL;
$arguments2095['style'] = NULL;
$arguments2095['title'] = NULL;
$arguments2095['accesskey'] = NULL;
$arguments2095['tabindex'] = NULL;
$arguments2095['onclick'] = NULL;
$arguments2095['newsItem'] = NULL;
$arguments2095['settings'] = array (
);
$arguments2095['uriOnly'] = false;
$arguments2095['configuration'] = array (
);
$arguments2095['content'] = '';
$arguments2095['section'] = NULL;
$array2097 = array (
);$arguments2095['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2097);
$array2098 = array (
);$arguments2095['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2098);
$array2099 = array (
);$arguments2095['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2099);

$output2022 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2095, $renderChildrenClosure2096, $renderingContext);

$output2022 .= '     
                                    </div>
 </div>

							    ';
return $output2022;
};
$arguments2020 = array();

$output2019 .= '';

$output2019 .= '
  ';
return $output2019;
};
$arguments1936 = array();
$arguments1936['then'] = NULL;
$arguments1936['else'] = NULL;
$arguments1936['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2016 = array();
$array2017 = array (
);$array2016['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2017);
$array2016['1'] = ' == 11';

$expression2018 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 11);};
$arguments1936['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2018(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2016)
					),
					$renderingContext
				);
$arguments1936['__thenClosure'] = function() use ($renderingContext, $self) {
$output1938 = '';

$output1938 .= '
         <div class="col-sm-12 bgreport">
 <div class="col-sm-8">
<div class="article-thumb">

	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1940 = function() use ($renderingContext, $self) {
$output1975 = '';

$output1975 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1977 = function() use ($renderingContext, $self) {
$output1978 = '';

$output1978 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1980 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1979 = array();
$arguments1979['additionalAttributes'] = NULL;
$arguments1979['data'] = NULL;
$arguments1979['class'] = NULL;
$arguments1979['dir'] = NULL;
$arguments1979['id'] = NULL;
$arguments1979['lang'] = NULL;
$arguments1979['style'] = NULL;
$arguments1979['title'] = NULL;
$arguments1979['accesskey'] = NULL;
$arguments1979['tabindex'] = NULL;
$arguments1979['onclick'] = NULL;
$arguments1979['alt'] = NULL;
$arguments1979['file'] = NULL;
$arguments1979['additionalConfig'] = array (
);
$arguments1979['width'] = NULL;
$arguments1979['height'] = NULL;
$arguments1979['cropVariant'] = 'default';
$arguments1979['class'] = 'img-responsive';
$array1981 = array (
);$arguments1979['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1981);
$array1982 = array (
);$arguments1979['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1982);
$array1983 = array (
);$arguments1979['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1983);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1985 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1984 = array();
$arguments1984['then'] = NULL;
$arguments1984['else'] = NULL;
$arguments1984['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1986 = array();
$array1987 = array (
);$array1986['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1987);

$expression1988 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1984['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1988(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1986)
					),
					$renderingContext
				);
$array1989 = array (
);$arguments1984['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1989);
$array1990 = array (
);$arguments1984['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1990);
$arguments1979['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1984, $renderChildrenClosure1985, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1992 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1991 = array();
$arguments1991['then'] = NULL;
$arguments1991['else'] = NULL;
$arguments1991['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1993 = array();
$array1994 = array (
);$array1993['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1994);

$expression1995 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1991['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1995(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1993)
					),
					$renderingContext
				);
$array1996 = array (
);$arguments1991['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1996);
$arguments1991['else'] = '';
$arguments1979['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1991, $renderChildrenClosure1992, $renderingContext);

$output1978 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1979, $renderChildrenClosure1980, $renderingContext);

$output1978 .= '
            ';
return $output1978;
};
$arguments1976 = array();

$output1975 .= '';

$output1975 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1998 = function() use ($renderingContext, $self) {
$output1999 = '';

$output1999 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2001 = function() use ($renderingContext, $self) {
$output2005 = '';

$output2005 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2007 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2006 = array();
$arguments2006['additionalAttributes'] = NULL;
$arguments2006['data'] = NULL;
$arguments2006['class'] = NULL;
$arguments2006['dir'] = NULL;
$arguments2006['id'] = NULL;
$arguments2006['lang'] = NULL;
$arguments2006['style'] = NULL;
$arguments2006['title'] = NULL;
$arguments2006['accesskey'] = NULL;
$arguments2006['tabindex'] = NULL;
$arguments2006['onclick'] = NULL;
$arguments2006['alt'] = NULL;
$arguments2006['ismap'] = NULL;
$arguments2006['longdesc'] = NULL;
$arguments2006['usemap'] = NULL;
$arguments2006['src'] = NULL;
$arguments2006['treatIdAsReference'] = NULL;
$arguments2006['image'] = NULL;
$arguments2006['crop'] = NULL;
$arguments2006['cropVariant'] = 'default';
$arguments2006['width'] = NULL;
$arguments2006['height'] = NULL;
$arguments2006['minWidth'] = NULL;
$arguments2006['minHeight'] = NULL;
$arguments2006['maxWidth'] = NULL;
$arguments2006['maxHeight'] = NULL;
$arguments2006['absolute'] = false;
$arguments2006['class'] = 'img-responsive';
$array2008 = array (
);$arguments2006['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2008);
$arguments2006['title'] = '';
$arguments2006['alt'] = '';
$array2009 = array (
);$arguments2006['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2009);
$array2010 = array (
);$arguments2006['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2010);

$output2005 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2006, $renderChildrenClosure2007, $renderingContext);

$output2005 .= '
              ';
return $output2005;
};
$arguments2000 = array();
$arguments2000['then'] = NULL;
$arguments2000['else'] = NULL;
$arguments2000['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2002 = array();
$array2003 = array (
);$array2002['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2003);

$expression2004 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2000['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2004(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2002)
					),
					$renderingContext
				);
$arguments2000['__thenClosure'] = $renderChildrenClosure2001;

$output1999 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2000, $renderChildrenClosure2001, $renderingContext);

$output1999 .= '
            ';
return $output1999;
};
$arguments1997 = array();
$arguments1997['if'] = NULL;

$output1975 .= '';

$output1975 .= '
          ';
return $output1975;
};
$arguments1939 = array();
$arguments1939['then'] = NULL;
$arguments1939['else'] = NULL;
$arguments1939['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1972 = array();
$array1973 = array (
);$array1972['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array1973);

$expression1974 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1939['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1974(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1972)
					),
					$renderingContext
				);
$arguments1939['__thenClosure'] = function() use ($renderingContext, $self) {
$output1941 = '';

$output1941 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure1943 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1942 = array();
$arguments1942['additionalAttributes'] = NULL;
$arguments1942['data'] = NULL;
$arguments1942['class'] = NULL;
$arguments1942['dir'] = NULL;
$arguments1942['id'] = NULL;
$arguments1942['lang'] = NULL;
$arguments1942['style'] = NULL;
$arguments1942['title'] = NULL;
$arguments1942['accesskey'] = NULL;
$arguments1942['tabindex'] = NULL;
$arguments1942['onclick'] = NULL;
$arguments1942['alt'] = NULL;
$arguments1942['file'] = NULL;
$arguments1942['additionalConfig'] = array (
);
$arguments1942['width'] = NULL;
$arguments1942['height'] = NULL;
$arguments1942['cropVariant'] = 'default';
$arguments1942['class'] = 'img-responsive';
$array1944 = array (
);$arguments1942['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array1944);
$array1945 = array (
);$arguments1942['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array1945);
$array1946 = array (
);$arguments1942['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array1946);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1948 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1947 = array();
$arguments1947['then'] = NULL;
$arguments1947['else'] = NULL;
$arguments1947['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1949 = array();
$array1950 = array (
);$array1949['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1950);

$expression1951 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1947['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1951(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1949)
					),
					$renderingContext
				);
$array1952 = array (
);$arguments1947['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array1952);
$array1953 = array (
);$arguments1947['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array1953);
$arguments1942['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1947, $renderChildrenClosure1948, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1955 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1954 = array();
$arguments1954['then'] = NULL;
$arguments1954['else'] = NULL;
$arguments1954['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1956 = array();
$array1957 = array (
);$array1956['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1957);

$expression1958 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1954['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1958(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1956)
					),
					$renderingContext
				);
$array1959 = array (
);$arguments1954['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array1959);
$arguments1954['else'] = '';
$arguments1942['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1954, $renderChildrenClosure1955, $renderingContext);

$output1941 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments1942, $renderChildrenClosure1943, $renderingContext);

$output1941 .= '
            ';
return $output1941;
};
$arguments1939['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1960 = '';

$output1960 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1962 = function() use ($renderingContext, $self) {
$output1966 = '';

$output1966 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure1968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1967 = array();
$arguments1967['additionalAttributes'] = NULL;
$arguments1967['data'] = NULL;
$arguments1967['class'] = NULL;
$arguments1967['dir'] = NULL;
$arguments1967['id'] = NULL;
$arguments1967['lang'] = NULL;
$arguments1967['style'] = NULL;
$arguments1967['title'] = NULL;
$arguments1967['accesskey'] = NULL;
$arguments1967['tabindex'] = NULL;
$arguments1967['onclick'] = NULL;
$arguments1967['alt'] = NULL;
$arguments1967['ismap'] = NULL;
$arguments1967['longdesc'] = NULL;
$arguments1967['usemap'] = NULL;
$arguments1967['src'] = NULL;
$arguments1967['treatIdAsReference'] = NULL;
$arguments1967['image'] = NULL;
$arguments1967['crop'] = NULL;
$arguments1967['cropVariant'] = 'default';
$arguments1967['width'] = NULL;
$arguments1967['height'] = NULL;
$arguments1967['minWidth'] = NULL;
$arguments1967['minHeight'] = NULL;
$arguments1967['maxWidth'] = NULL;
$arguments1967['maxHeight'] = NULL;
$arguments1967['absolute'] = false;
$arguments1967['class'] = 'img-responsive';
$array1969 = array (
);$arguments1967['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array1969);
$arguments1967['title'] = '';
$arguments1967['alt'] = '';
$array1970 = array (
);$arguments1967['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array1970);
$array1971 = array (
);$arguments1967['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array1971);

$output1966 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments1967, $renderChildrenClosure1968, $renderingContext);

$output1966 .= '
              ';
return $output1966;
};
$arguments1961 = array();
$arguments1961['then'] = NULL;
$arguments1961['else'] = NULL;
$arguments1961['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1963 = array();
$array1964 = array (
);$array1963['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array1964);

$expression1965 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1961['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1965(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1963)
					),
					$renderingContext
				);
$arguments1961['__thenClosure'] = $renderChildrenClosure1962;

$output1960 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1961, $renderChildrenClosure1962, $renderingContext);

$output1960 .= '
            ';
return $output1960;
};

$output1938 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1939, $renderChildrenClosure1940, $renderingContext);

$output1938 .= '   
	  
 </div>
  </div>
       <div class="col-sm-4 sp-btnd">
                      ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2012 = function() use ($renderingContext, $self) {
return '                 
                                  Download
                      ';
};
$arguments2011 = array();
$arguments2011['additionalAttributes'] = NULL;
$arguments2011['data'] = NULL;
$arguments2011['class'] = NULL;
$arguments2011['dir'] = NULL;
$arguments2011['id'] = NULL;
$arguments2011['lang'] = NULL;
$arguments2011['style'] = NULL;
$arguments2011['title'] = NULL;
$arguments2011['accesskey'] = NULL;
$arguments2011['tabindex'] = NULL;
$arguments2011['onclick'] = NULL;
$arguments2011['newsItem'] = NULL;
$arguments2011['settings'] = array (
);
$arguments2011['uriOnly'] = false;
$arguments2011['configuration'] = array (
);
$arguments2011['content'] = '';
$arguments2011['section'] = NULL;
$array2013 = array (
);$arguments2011['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2013);
$array2014 = array (
);$arguments2011['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2014);
$array2015 = array (
);$arguments2011['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2015);

$output1938 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2011, $renderChildrenClosure2012, $renderingContext);

$output1938 .= '     
                                    </div>
 </div>

							    ';
return $output1938;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1936, $renderChildrenClosure1937, $renderingContext);

$output0 .= ' 
  
     <!--About mandate-->
       ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2101 = function() use ($renderingContext, $self) {
$output2111 = '';

$output2111 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2113 = function() use ($renderingContext, $self) {
$output2114 = '';

$output2114 .= '
 
       <div class="col-sm-6" style="padding-right:1px">
           <div class=" bg_mandate">
           <h1>';
$array2115 = array (
);
$output2114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2115)]);

$output2114 .= '</h1>
           <h2>';
$array2116 = array (
);
$output2114 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2116)]);

$output2114 .= '</h2>
           
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2118 = function() use ($renderingContext, $self) {
$array2119 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2119);
};
$arguments2117 = array();
$arguments2117['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2114 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2117, $renderChildrenClosure2118, $renderingContext);

$output2114 .= '  
                                    </div>
 
 </div>
							    ';
return $output2114;
};
$arguments2112 = array();

$output2111 .= '';

$output2111 .= '
  ';
return $output2111;
};
$arguments2100 = array();
$arguments2100['then'] = NULL;
$arguments2100['else'] = NULL;
$arguments2100['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2108 = array();
$array2109 = array (
);$array2108['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2109);
$array2108['1'] = ' == 12';

$expression2110 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 12);};
$arguments2100['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2108)
					),
					$renderingContext
				);
$arguments2100['__thenClosure'] = function() use ($renderingContext, $self) {
$output2102 = '';

$output2102 .= '
 
       <div class="col-sm-6" style="padding-right:1px">
           <div class=" bg_mandate">
           <h1>';
$array2103 = array (
);
$output2102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2103)]);

$output2102 .= '</h1>
           <h2>';
$array2104 = array (
);
$output2102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2104)]);

$output2102 .= '</h2>
           
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2106 = function() use ($renderingContext, $self) {
$array2107 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2107);
};
$arguments2105 = array();
$arguments2105['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2102 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2105, $renderChildrenClosure2106, $renderingContext);

$output2102 .= '  
                                    </div>
 
 </div>
							    ';
return $output2102;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2100, $renderChildrenClosure2101, $renderingContext);

$output0 .= ' 
    <!--About mission-->
       ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2121 = function() use ($renderingContext, $self) {
$output2131 = '';

$output2131 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2133 = function() use ($renderingContext, $self) {
$output2134 = '';

$output2134 .= '
 
       <div class="col-sm-6" style="padding-left:1px">
           <div class="bg_mission">
           <h1>';
$array2135 = array (
);
$output2134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2135)]);

$output2134 .= '</h1>
           <h2>';
$array2136 = array (
);
$output2134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2136)]);

$output2134 .= '</h2>
           
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2138 = function() use ($renderingContext, $self) {
$array2139 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2139);
};
$arguments2137 = array();
$arguments2137['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2134 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2137, $renderChildrenClosure2138, $renderingContext);

$output2134 .= '  
                                    </div>

 </div>
							    ';
return $output2134;
};
$arguments2132 = array();

$output2131 .= '';

$output2131 .= '
  ';
return $output2131;
};
$arguments2120 = array();
$arguments2120['then'] = NULL;
$arguments2120['else'] = NULL;
$arguments2120['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2128 = array();
$array2129 = array (
);$array2128['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2129);
$array2128['1'] = ' == 13';

$expression2130 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 13);};
$arguments2120['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2130(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2128)
					),
					$renderingContext
				);
$arguments2120['__thenClosure'] = function() use ($renderingContext, $self) {
$output2122 = '';

$output2122 .= '
 
       <div class="col-sm-6" style="padding-left:1px">
           <div class="bg_mission">
           <h1>';
$array2123 = array (
);
$output2122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2123)]);

$output2122 .= '</h1>
           <h2>';
$array2124 = array (
);
$output2122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2124)]);

$output2122 .= '</h2>
           
                  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2126 = function() use ($renderingContext, $self) {
$array2127 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2127);
};
$arguments2125 = array();
$arguments2125['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2122 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2125, $renderChildrenClosure2126, $renderingContext);

$output2122 .= '  
                                    </div>

 </div>
							    ';
return $output2122;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2120, $renderChildrenClosure2121, $renderingContext);

$output0 .= ' 
  
    <!-- agaciro box section -->
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2141 = function() use ($renderingContext, $self) {
$output2238 = '';

$output2238 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2240 = function() use ($renderingContext, $self) {
$output2241 = '';

$output2241 .= '
<div class="col-sm-4"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2243 = function() use ($renderingContext, $self) {
$output2247 = '';

$output2247 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2249 = function() use ($renderingContext, $self) {
$output2284 = '';

$output2284 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2286 = function() use ($renderingContext, $self) {
$output2287 = '';

$output2287 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2289 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2288 = array();
$arguments2288['additionalAttributes'] = NULL;
$arguments2288['data'] = NULL;
$arguments2288['class'] = NULL;
$arguments2288['dir'] = NULL;
$arguments2288['id'] = NULL;
$arguments2288['lang'] = NULL;
$arguments2288['style'] = NULL;
$arguments2288['title'] = NULL;
$arguments2288['accesskey'] = NULL;
$arguments2288['tabindex'] = NULL;
$arguments2288['onclick'] = NULL;
$arguments2288['alt'] = NULL;
$arguments2288['file'] = NULL;
$arguments2288['additionalConfig'] = array (
);
$arguments2288['width'] = NULL;
$arguments2288['height'] = NULL;
$arguments2288['cropVariant'] = 'default';
$arguments2288['class'] = 'img-responsive';
$array2290 = array (
);$arguments2288['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2290);
$array2291 = array (
);$arguments2288['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2291);
$array2292 = array (
);$arguments2288['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2292);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2294 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2293 = array();
$arguments2293['then'] = NULL;
$arguments2293['else'] = NULL;
$arguments2293['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2295 = array();
$array2296 = array (
);$array2295['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2296);

$expression2297 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2293['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2297(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2295)
					),
					$renderingContext
				);
$array2298 = array (
);$arguments2293['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2298);
$array2299 = array (
);$arguments2293['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2299);
$arguments2288['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2293, $renderChildrenClosure2294, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2300 = array();
$arguments2300['then'] = NULL;
$arguments2300['else'] = NULL;
$arguments2300['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2302 = array();
$array2303 = array (
);$array2302['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2303);

$expression2304 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2300['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2304(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2302)
					),
					$renderingContext
				);
$array2305 = array (
);$arguments2300['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2305);
$arguments2300['else'] = '';
$arguments2288['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2300, $renderChildrenClosure2301, $renderingContext);

$output2287 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2288, $renderChildrenClosure2289, $renderingContext);

$output2287 .= '
            ';
return $output2287;
};
$arguments2285 = array();

$output2284 .= '';

$output2284 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2307 = function() use ($renderingContext, $self) {
$output2308 = '';

$output2308 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2310 = function() use ($renderingContext, $self) {
$output2314 = '';

$output2314 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2315 = array();
$arguments2315['additionalAttributes'] = NULL;
$arguments2315['data'] = NULL;
$arguments2315['class'] = NULL;
$arguments2315['dir'] = NULL;
$arguments2315['id'] = NULL;
$arguments2315['lang'] = NULL;
$arguments2315['style'] = NULL;
$arguments2315['title'] = NULL;
$arguments2315['accesskey'] = NULL;
$arguments2315['tabindex'] = NULL;
$arguments2315['onclick'] = NULL;
$arguments2315['alt'] = NULL;
$arguments2315['ismap'] = NULL;
$arguments2315['longdesc'] = NULL;
$arguments2315['usemap'] = NULL;
$arguments2315['src'] = NULL;
$arguments2315['treatIdAsReference'] = NULL;
$arguments2315['image'] = NULL;
$arguments2315['crop'] = NULL;
$arguments2315['cropVariant'] = 'default';
$arguments2315['width'] = NULL;
$arguments2315['height'] = NULL;
$arguments2315['minWidth'] = NULL;
$arguments2315['minHeight'] = NULL;
$arguments2315['maxWidth'] = NULL;
$arguments2315['maxHeight'] = NULL;
$arguments2315['absolute'] = false;
$arguments2315['class'] = 'img-responsive';
$array2317 = array (
);$arguments2315['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2317);
$arguments2315['title'] = '';
$arguments2315['alt'] = '';
$array2318 = array (
);$arguments2315['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2318);
$array2319 = array (
);$arguments2315['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2319);

$output2314 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2315, $renderChildrenClosure2316, $renderingContext);

$output2314 .= '
              ';
return $output2314;
};
$arguments2309 = array();
$arguments2309['then'] = NULL;
$arguments2309['else'] = NULL;
$arguments2309['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2311 = array();
$array2312 = array (
);$array2311['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2312);

$expression2313 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2309['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2313(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2311)
					),
					$renderingContext
				);
$arguments2309['__thenClosure'] = $renderChildrenClosure2310;

$output2308 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2309, $renderChildrenClosure2310, $renderingContext);

$output2308 .= '
            ';
return $output2308;
};
$arguments2306 = array();
$arguments2306['if'] = NULL;

$output2284 .= '';

$output2284 .= '
          ';
return $output2284;
};
$arguments2248 = array();
$arguments2248['then'] = NULL;
$arguments2248['else'] = NULL;
$arguments2248['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2281 = array();
$array2282 = array (
);$array2281['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2282);

$expression2283 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2248['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2281)
					),
					$renderingContext
				);
$arguments2248['__thenClosure'] = function() use ($renderingContext, $self) {
$output2250 = '';

$output2250 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2251 = array();
$arguments2251['additionalAttributes'] = NULL;
$arguments2251['data'] = NULL;
$arguments2251['class'] = NULL;
$arguments2251['dir'] = NULL;
$arguments2251['id'] = NULL;
$arguments2251['lang'] = NULL;
$arguments2251['style'] = NULL;
$arguments2251['title'] = NULL;
$arguments2251['accesskey'] = NULL;
$arguments2251['tabindex'] = NULL;
$arguments2251['onclick'] = NULL;
$arguments2251['alt'] = NULL;
$arguments2251['file'] = NULL;
$arguments2251['additionalConfig'] = array (
);
$arguments2251['width'] = NULL;
$arguments2251['height'] = NULL;
$arguments2251['cropVariant'] = 'default';
$arguments2251['class'] = 'img-responsive';
$array2253 = array (
);$arguments2251['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2253);
$array2254 = array (
);$arguments2251['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2254);
$array2255 = array (
);$arguments2251['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2255);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2256 = array();
$arguments2256['then'] = NULL;
$arguments2256['else'] = NULL;
$arguments2256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2258 = array();
$array2259 = array (
);$array2258['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2259);

$expression2260 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2258)
					),
					$renderingContext
				);
$array2261 = array (
);$arguments2256['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2261);
$array2262 = array (
);$arguments2256['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2262);
$arguments2251['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2256, $renderChildrenClosure2257, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2263 = array();
$arguments2263['then'] = NULL;
$arguments2263['else'] = NULL;
$arguments2263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2265 = array();
$array2266 = array (
);$array2265['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2266);

$expression2267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2265)
					),
					$renderingContext
				);
$array2268 = array (
);$arguments2263['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2268);
$arguments2263['else'] = '';
$arguments2251['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2263, $renderChildrenClosure2264, $renderingContext);

$output2250 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2251, $renderChildrenClosure2252, $renderingContext);

$output2250 .= '
            ';
return $output2250;
};
$arguments2248['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2269 = '';

$output2269 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2271 = function() use ($renderingContext, $self) {
$output2275 = '';

$output2275 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2276 = array();
$arguments2276['additionalAttributes'] = NULL;
$arguments2276['data'] = NULL;
$arguments2276['class'] = NULL;
$arguments2276['dir'] = NULL;
$arguments2276['id'] = NULL;
$arguments2276['lang'] = NULL;
$arguments2276['style'] = NULL;
$arguments2276['title'] = NULL;
$arguments2276['accesskey'] = NULL;
$arguments2276['tabindex'] = NULL;
$arguments2276['onclick'] = NULL;
$arguments2276['alt'] = NULL;
$arguments2276['ismap'] = NULL;
$arguments2276['longdesc'] = NULL;
$arguments2276['usemap'] = NULL;
$arguments2276['src'] = NULL;
$arguments2276['treatIdAsReference'] = NULL;
$arguments2276['image'] = NULL;
$arguments2276['crop'] = NULL;
$arguments2276['cropVariant'] = 'default';
$arguments2276['width'] = NULL;
$arguments2276['height'] = NULL;
$arguments2276['minWidth'] = NULL;
$arguments2276['minHeight'] = NULL;
$arguments2276['maxWidth'] = NULL;
$arguments2276['maxHeight'] = NULL;
$arguments2276['absolute'] = false;
$arguments2276['class'] = 'img-responsive';
$array2278 = array (
);$arguments2276['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2278);
$arguments2276['title'] = '';
$arguments2276['alt'] = '';
$array2279 = array (
);$arguments2276['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2279);
$array2280 = array (
);$arguments2276['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2280);

$output2275 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2276, $renderChildrenClosure2277, $renderingContext);

$output2275 .= '
              ';
return $output2275;
};
$arguments2270 = array();
$arguments2270['then'] = NULL;
$arguments2270['else'] = NULL;
$arguments2270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2272 = array();
$array2273 = array (
);$array2272['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2273);

$expression2274 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2274(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2272)
					),
					$renderingContext
				);
$arguments2270['__thenClosure'] = $renderChildrenClosure2271;

$output2269 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2270, $renderChildrenClosure2271, $renderingContext);

$output2269 .= '
            ';
return $output2269;
};

$output2247 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2248, $renderChildrenClosure2249, $renderingContext);

$output2247 .= '   
	 ';
return $output2247;
};
$arguments2242 = array();
$arguments2242['additionalAttributes'] = NULL;
$arguments2242['data'] = NULL;
$arguments2242['class'] = NULL;
$arguments2242['dir'] = NULL;
$arguments2242['id'] = NULL;
$arguments2242['lang'] = NULL;
$arguments2242['style'] = NULL;
$arguments2242['title'] = NULL;
$arguments2242['accesskey'] = NULL;
$arguments2242['tabindex'] = NULL;
$arguments2242['onclick'] = NULL;
$arguments2242['newsItem'] = NULL;
$arguments2242['settings'] = array (
);
$arguments2242['uriOnly'] = false;
$arguments2242['configuration'] = array (
);
$arguments2242['content'] = '';
$arguments2242['section'] = NULL;
$array2244 = array (
);$arguments2242['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2244);
$array2245 = array (
);$arguments2242['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2245);
$array2246 = array (
);$arguments2242['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2246);

$output2241 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2242, $renderChildrenClosure2243, $renderingContext);

$output2241 .= '	  
 </div>
                                    <div class="article-content_Agaciro" style="min-height: 270px;">
                                        <h5>';
$array2320 = array (
);
$output2241 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2320)]);

$output2241 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2322 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure2324 = function() use ($renderingContext, $self) {
$array2328 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2328);
};
$arguments2323 = array();
$arguments2323['maxCharacters'] = NULL;
$arguments2323['append'] = '...';
$arguments2323['respectWordBoundaries'] = true;
$arguments2323['respectHtml'] = true;
$array2325 = array (
);$arguments2323['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array2325);
// Rendering Boolean node
// Rendering Array
$array2326 = array();
$array2326['0'] = 1;

$expression2327 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2323['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2327(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2326)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments2323, $renderChildrenClosure2324, $renderingContext);
};
$arguments2321 = array();
$arguments2321['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2241 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2321, $renderChildrenClosure2322, $renderingContext);

$output2241 .= '
                                    
                                        <div class="sp-btn" style="margin-top:20px">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2330 = function() use ($renderingContext, $self) {
return 'LEARN MORE<i class="fa fa-angle-right">&nbsp;</i> ';
};
$arguments2329 = array();
$arguments2329['additionalAttributes'] = NULL;
$arguments2329['data'] = NULL;
$arguments2329['class'] = NULL;
$arguments2329['dir'] = NULL;
$arguments2329['id'] = NULL;
$arguments2329['lang'] = NULL;
$arguments2329['style'] = NULL;
$arguments2329['title'] = NULL;
$arguments2329['accesskey'] = NULL;
$arguments2329['tabindex'] = NULL;
$arguments2329['onclick'] = NULL;
$arguments2329['newsItem'] = NULL;
$arguments2329['settings'] = array (
);
$arguments2329['uriOnly'] = false;
$arguments2329['configuration'] = array (
);
$arguments2329['content'] = '';
$arguments2329['section'] = NULL;
$array2331 = array (
);$arguments2329['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2331);
$array2332 = array (
);$arguments2329['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2332);
$array2333 = array (
);$arguments2329['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2333);

$output2241 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2329, $renderChildrenClosure2330, $renderingContext);

$output2241 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
							    ';
return $output2241;
};
$arguments2239 = array();

$output2238 .= '';

$output2238 .= '
  ';
return $output2238;
};
$arguments2140 = array();
$arguments2140['then'] = NULL;
$arguments2140['else'] = NULL;
$arguments2140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2235 = array();
$array2236 = array (
);$array2235['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2236);
$array2235['1'] = ' == 14';

$expression2237 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 14);};
$arguments2140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2235)
					),
					$renderingContext
				);
$arguments2140['__thenClosure'] = function() use ($renderingContext, $self) {
$output2142 = '';

$output2142 .= '
<div class="col-sm-4"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2144 = function() use ($renderingContext, $self) {
$output2148 = '';

$output2148 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2150 = function() use ($renderingContext, $self) {
$output2185 = '';

$output2185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2187 = function() use ($renderingContext, $self) {
$output2188 = '';

$output2188 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2189 = array();
$arguments2189['additionalAttributes'] = NULL;
$arguments2189['data'] = NULL;
$arguments2189['class'] = NULL;
$arguments2189['dir'] = NULL;
$arguments2189['id'] = NULL;
$arguments2189['lang'] = NULL;
$arguments2189['style'] = NULL;
$arguments2189['title'] = NULL;
$arguments2189['accesskey'] = NULL;
$arguments2189['tabindex'] = NULL;
$arguments2189['onclick'] = NULL;
$arguments2189['alt'] = NULL;
$arguments2189['file'] = NULL;
$arguments2189['additionalConfig'] = array (
);
$arguments2189['width'] = NULL;
$arguments2189['height'] = NULL;
$arguments2189['cropVariant'] = 'default';
$arguments2189['class'] = 'img-responsive';
$array2191 = array (
);$arguments2189['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2191);
$array2192 = array (
);$arguments2189['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2192);
$array2193 = array (
);$arguments2189['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2193);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2195 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2194 = array();
$arguments2194['then'] = NULL;
$arguments2194['else'] = NULL;
$arguments2194['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2196 = array();
$array2197 = array (
);$array2196['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2197);

$expression2198 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2194['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2198(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2196)
					),
					$renderingContext
				);
$array2199 = array (
);$arguments2194['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2199);
$array2200 = array (
);$arguments2194['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2200);
$arguments2189['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2194, $renderChildrenClosure2195, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2202 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2201 = array();
$arguments2201['then'] = NULL;
$arguments2201['else'] = NULL;
$arguments2201['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2203 = array();
$array2204 = array (
);$array2203['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2204);

$expression2205 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2201['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2205(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2203)
					),
					$renderingContext
				);
$array2206 = array (
);$arguments2201['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2206);
$arguments2201['else'] = '';
$arguments2189['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2201, $renderChildrenClosure2202, $renderingContext);

$output2188 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2189, $renderChildrenClosure2190, $renderingContext);

$output2188 .= '
            ';
return $output2188;
};
$arguments2186 = array();

$output2185 .= '';

$output2185 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2208 = function() use ($renderingContext, $self) {
$output2209 = '';

$output2209 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2211 = function() use ($renderingContext, $self) {
$output2215 = '';

$output2215 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2216 = array();
$arguments2216['additionalAttributes'] = NULL;
$arguments2216['data'] = NULL;
$arguments2216['class'] = NULL;
$arguments2216['dir'] = NULL;
$arguments2216['id'] = NULL;
$arguments2216['lang'] = NULL;
$arguments2216['style'] = NULL;
$arguments2216['title'] = NULL;
$arguments2216['accesskey'] = NULL;
$arguments2216['tabindex'] = NULL;
$arguments2216['onclick'] = NULL;
$arguments2216['alt'] = NULL;
$arguments2216['ismap'] = NULL;
$arguments2216['longdesc'] = NULL;
$arguments2216['usemap'] = NULL;
$arguments2216['src'] = NULL;
$arguments2216['treatIdAsReference'] = NULL;
$arguments2216['image'] = NULL;
$arguments2216['crop'] = NULL;
$arguments2216['cropVariant'] = 'default';
$arguments2216['width'] = NULL;
$arguments2216['height'] = NULL;
$arguments2216['minWidth'] = NULL;
$arguments2216['minHeight'] = NULL;
$arguments2216['maxWidth'] = NULL;
$arguments2216['maxHeight'] = NULL;
$arguments2216['absolute'] = false;
$arguments2216['class'] = 'img-responsive';
$array2218 = array (
);$arguments2216['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2218);
$arguments2216['title'] = '';
$arguments2216['alt'] = '';
$array2219 = array (
);$arguments2216['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2219);
$array2220 = array (
);$arguments2216['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2220);

$output2215 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2216, $renderChildrenClosure2217, $renderingContext);

$output2215 .= '
              ';
return $output2215;
};
$arguments2210 = array();
$arguments2210['then'] = NULL;
$arguments2210['else'] = NULL;
$arguments2210['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2212 = array();
$array2213 = array (
);$array2212['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2213);

$expression2214 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2210['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2214(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2212)
					),
					$renderingContext
				);
$arguments2210['__thenClosure'] = $renderChildrenClosure2211;

$output2209 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2210, $renderChildrenClosure2211, $renderingContext);

$output2209 .= '
            ';
return $output2209;
};
$arguments2207 = array();
$arguments2207['if'] = NULL;

$output2185 .= '';

$output2185 .= '
          ';
return $output2185;
};
$arguments2149 = array();
$arguments2149['then'] = NULL;
$arguments2149['else'] = NULL;
$arguments2149['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2182 = array();
$array2183 = array (
);$array2182['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2183);

$expression2184 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2149['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2184(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2182)
					),
					$renderingContext
				);
$arguments2149['__thenClosure'] = function() use ($renderingContext, $self) {
$output2151 = '';

$output2151 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2153 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2152 = array();
$arguments2152['additionalAttributes'] = NULL;
$arguments2152['data'] = NULL;
$arguments2152['class'] = NULL;
$arguments2152['dir'] = NULL;
$arguments2152['id'] = NULL;
$arguments2152['lang'] = NULL;
$arguments2152['style'] = NULL;
$arguments2152['title'] = NULL;
$arguments2152['accesskey'] = NULL;
$arguments2152['tabindex'] = NULL;
$arguments2152['onclick'] = NULL;
$arguments2152['alt'] = NULL;
$arguments2152['file'] = NULL;
$arguments2152['additionalConfig'] = array (
);
$arguments2152['width'] = NULL;
$arguments2152['height'] = NULL;
$arguments2152['cropVariant'] = 'default';
$arguments2152['class'] = 'img-responsive';
$array2154 = array (
);$arguments2152['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2154);
$array2155 = array (
);$arguments2152['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2155);
$array2156 = array (
);$arguments2152['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2156);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2158 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2157 = array();
$arguments2157['then'] = NULL;
$arguments2157['else'] = NULL;
$arguments2157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2159 = array();
$array2160 = array (
);$array2159['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2160);

$expression2161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2159)
					),
					$renderingContext
				);
$array2162 = array (
);$arguments2157['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2162);
$array2163 = array (
);$arguments2157['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2163);
$arguments2152['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2157, $renderChildrenClosure2158, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2164 = array();
$arguments2164['then'] = NULL;
$arguments2164['else'] = NULL;
$arguments2164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2166 = array();
$array2167 = array (
);$array2166['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2167);

$expression2168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2166)
					),
					$renderingContext
				);
$array2169 = array (
);$arguments2164['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2169);
$arguments2164['else'] = '';
$arguments2152['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2164, $renderChildrenClosure2165, $renderingContext);

$output2151 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2152, $renderChildrenClosure2153, $renderingContext);

$output2151 .= '
            ';
return $output2151;
};
$arguments2149['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2170 = '';

$output2170 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2172 = function() use ($renderingContext, $self) {
$output2176 = '';

$output2176 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2177 = array();
$arguments2177['additionalAttributes'] = NULL;
$arguments2177['data'] = NULL;
$arguments2177['class'] = NULL;
$arguments2177['dir'] = NULL;
$arguments2177['id'] = NULL;
$arguments2177['lang'] = NULL;
$arguments2177['style'] = NULL;
$arguments2177['title'] = NULL;
$arguments2177['accesskey'] = NULL;
$arguments2177['tabindex'] = NULL;
$arguments2177['onclick'] = NULL;
$arguments2177['alt'] = NULL;
$arguments2177['ismap'] = NULL;
$arguments2177['longdesc'] = NULL;
$arguments2177['usemap'] = NULL;
$arguments2177['src'] = NULL;
$arguments2177['treatIdAsReference'] = NULL;
$arguments2177['image'] = NULL;
$arguments2177['crop'] = NULL;
$arguments2177['cropVariant'] = 'default';
$arguments2177['width'] = NULL;
$arguments2177['height'] = NULL;
$arguments2177['minWidth'] = NULL;
$arguments2177['minHeight'] = NULL;
$arguments2177['maxWidth'] = NULL;
$arguments2177['maxHeight'] = NULL;
$arguments2177['absolute'] = false;
$arguments2177['class'] = 'img-responsive';
$array2179 = array (
);$arguments2177['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2179);
$arguments2177['title'] = '';
$arguments2177['alt'] = '';
$array2180 = array (
);$arguments2177['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2180);
$array2181 = array (
);$arguments2177['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2181);

$output2176 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2177, $renderChildrenClosure2178, $renderingContext);

$output2176 .= '
              ';
return $output2176;
};
$arguments2171 = array();
$arguments2171['then'] = NULL;
$arguments2171['else'] = NULL;
$arguments2171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2173 = array();
$array2174 = array (
);$array2173['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2174);

$expression2175 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2173)
					),
					$renderingContext
				);
$arguments2171['__thenClosure'] = $renderChildrenClosure2172;

$output2170 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2171, $renderChildrenClosure2172, $renderingContext);

$output2170 .= '
            ';
return $output2170;
};

$output2148 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2149, $renderChildrenClosure2150, $renderingContext);

$output2148 .= '   
	 ';
return $output2148;
};
$arguments2143 = array();
$arguments2143['additionalAttributes'] = NULL;
$arguments2143['data'] = NULL;
$arguments2143['class'] = NULL;
$arguments2143['dir'] = NULL;
$arguments2143['id'] = NULL;
$arguments2143['lang'] = NULL;
$arguments2143['style'] = NULL;
$arguments2143['title'] = NULL;
$arguments2143['accesskey'] = NULL;
$arguments2143['tabindex'] = NULL;
$arguments2143['onclick'] = NULL;
$arguments2143['newsItem'] = NULL;
$arguments2143['settings'] = array (
);
$arguments2143['uriOnly'] = false;
$arguments2143['configuration'] = array (
);
$arguments2143['content'] = '';
$arguments2143['section'] = NULL;
$array2145 = array (
);$arguments2143['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2145);
$array2146 = array (
);$arguments2143['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2146);
$array2147 = array (
);$arguments2143['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2147);

$output2142 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2143, $renderChildrenClosure2144, $renderingContext);

$output2142 .= '	  
 </div>
                                    <div class="article-content_Agaciro" style="min-height: 270px;">
                                        <h5>';
$array2221 = array (
);
$output2142 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2221)]);

$output2142 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2223 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure2225 = function() use ($renderingContext, $self) {
$array2229 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2229);
};
$arguments2224 = array();
$arguments2224['maxCharacters'] = NULL;
$arguments2224['append'] = '...';
$arguments2224['respectWordBoundaries'] = true;
$arguments2224['respectHtml'] = true;
$array2226 = array (
);$arguments2224['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array2226);
// Rendering Boolean node
// Rendering Array
$array2227 = array();
$array2227['0'] = 1;

$expression2228 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2224['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2228(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2227)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments2224, $renderChildrenClosure2225, $renderingContext);
};
$arguments2222 = array();
$arguments2222['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2142 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2222, $renderChildrenClosure2223, $renderingContext);

$output2142 .= '
                                    
                                        <div class="sp-btn" style="margin-top:20px">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2231 = function() use ($renderingContext, $self) {
return 'LEARN MORE<i class="fa fa-angle-right">&nbsp;</i> ';
};
$arguments2230 = array();
$arguments2230['additionalAttributes'] = NULL;
$arguments2230['data'] = NULL;
$arguments2230['class'] = NULL;
$arguments2230['dir'] = NULL;
$arguments2230['id'] = NULL;
$arguments2230['lang'] = NULL;
$arguments2230['style'] = NULL;
$arguments2230['title'] = NULL;
$arguments2230['accesskey'] = NULL;
$arguments2230['tabindex'] = NULL;
$arguments2230['onclick'] = NULL;
$arguments2230['newsItem'] = NULL;
$arguments2230['settings'] = array (
);
$arguments2230['uriOnly'] = false;
$arguments2230['configuration'] = array (
);
$arguments2230['content'] = '';
$arguments2230['section'] = NULL;
$array2232 = array (
);$arguments2230['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2232);
$array2233 = array (
);$arguments2230['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2233);
$array2234 = array (
);$arguments2230['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2234);

$output2142 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2230, $renderChildrenClosure2231, $renderingContext);

$output2142 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
							    ';
return $output2142;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2140, $renderChildrenClosure2141, $renderingContext);

$output0 .= ' 
  
  
  
   <!-- History related box section -->
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2335 = function() use ($renderingContext, $self) {
$output2432 = '';

$output2432 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2434 = function() use ($renderingContext, $self) {
$output2435 = '';

$output2435 .= '
<div class="col-sm-6 historyrelated "> 
<div class="col-sm-6 historyrelated-size"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2437 = function() use ($renderingContext, $self) {
$output2441 = '';

$output2441 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2443 = function() use ($renderingContext, $self) {
$output2478 = '';

$output2478 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2480 = function() use ($renderingContext, $self) {
$output2481 = '';

$output2481 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2482 = array();
$arguments2482['additionalAttributes'] = NULL;
$arguments2482['data'] = NULL;
$arguments2482['class'] = NULL;
$arguments2482['dir'] = NULL;
$arguments2482['id'] = NULL;
$arguments2482['lang'] = NULL;
$arguments2482['style'] = NULL;
$arguments2482['title'] = NULL;
$arguments2482['accesskey'] = NULL;
$arguments2482['tabindex'] = NULL;
$arguments2482['onclick'] = NULL;
$arguments2482['alt'] = NULL;
$arguments2482['file'] = NULL;
$arguments2482['additionalConfig'] = array (
);
$arguments2482['width'] = NULL;
$arguments2482['height'] = NULL;
$arguments2482['cropVariant'] = 'default';
$arguments2482['class'] = 'img-responsive';
$array2484 = array (
);$arguments2482['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2484);
$array2485 = array (
);$arguments2482['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2485);
$array2486 = array (
);$arguments2482['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2486);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2488 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2487 = array();
$arguments2487['then'] = NULL;
$arguments2487['else'] = NULL;
$arguments2487['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2489 = array();
$array2490 = array (
);$array2489['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2490);

$expression2491 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2487['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2491(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2489)
					),
					$renderingContext
				);
$array2492 = array (
);$arguments2487['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2492);
$array2493 = array (
);$arguments2487['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2493);
$arguments2482['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2487, $renderChildrenClosure2488, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2495 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2494 = array();
$arguments2494['then'] = NULL;
$arguments2494['else'] = NULL;
$arguments2494['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2496 = array();
$array2497 = array (
);$array2496['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2497);

$expression2498 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2494['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2498(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2496)
					),
					$renderingContext
				);
$array2499 = array (
);$arguments2494['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2499);
$arguments2494['else'] = '';
$arguments2482['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2494, $renderChildrenClosure2495, $renderingContext);

$output2481 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2482, $renderChildrenClosure2483, $renderingContext);

$output2481 .= '
            ';
return $output2481;
};
$arguments2479 = array();

$output2478 .= '';

$output2478 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2501 = function() use ($renderingContext, $self) {
$output2502 = '';

$output2502 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2504 = function() use ($renderingContext, $self) {
$output2508 = '';

$output2508 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2509 = array();
$arguments2509['additionalAttributes'] = NULL;
$arguments2509['data'] = NULL;
$arguments2509['class'] = NULL;
$arguments2509['dir'] = NULL;
$arguments2509['id'] = NULL;
$arguments2509['lang'] = NULL;
$arguments2509['style'] = NULL;
$arguments2509['title'] = NULL;
$arguments2509['accesskey'] = NULL;
$arguments2509['tabindex'] = NULL;
$arguments2509['onclick'] = NULL;
$arguments2509['alt'] = NULL;
$arguments2509['ismap'] = NULL;
$arguments2509['longdesc'] = NULL;
$arguments2509['usemap'] = NULL;
$arguments2509['src'] = NULL;
$arguments2509['treatIdAsReference'] = NULL;
$arguments2509['image'] = NULL;
$arguments2509['crop'] = NULL;
$arguments2509['cropVariant'] = 'default';
$arguments2509['width'] = NULL;
$arguments2509['height'] = NULL;
$arguments2509['minWidth'] = NULL;
$arguments2509['minHeight'] = NULL;
$arguments2509['maxWidth'] = NULL;
$arguments2509['maxHeight'] = NULL;
$arguments2509['absolute'] = false;
$arguments2509['class'] = 'img-responsive';
$array2511 = array (
);$arguments2509['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2511);
$arguments2509['title'] = '';
$arguments2509['alt'] = '';
$array2512 = array (
);$arguments2509['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2512);
$array2513 = array (
);$arguments2509['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2513);

$output2508 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2509, $renderChildrenClosure2510, $renderingContext);

$output2508 .= '
              ';
return $output2508;
};
$arguments2503 = array();
$arguments2503['then'] = NULL;
$arguments2503['else'] = NULL;
$arguments2503['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2505 = array();
$array2506 = array (
);$array2505['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2506);

$expression2507 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2503['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2505)
					),
					$renderingContext
				);
$arguments2503['__thenClosure'] = $renderChildrenClosure2504;

$output2502 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2503, $renderChildrenClosure2504, $renderingContext);

$output2502 .= '
            ';
return $output2502;
};
$arguments2500 = array();
$arguments2500['if'] = NULL;

$output2478 .= '';

$output2478 .= '
          ';
return $output2478;
};
$arguments2442 = array();
$arguments2442['then'] = NULL;
$arguments2442['else'] = NULL;
$arguments2442['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2475 = array();
$array2476 = array (
);$array2475['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2476);

$expression2477 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2442['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2477(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2475)
					),
					$renderingContext
				);
$arguments2442['__thenClosure'] = function() use ($renderingContext, $self) {
$output2444 = '';

$output2444 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2446 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2445 = array();
$arguments2445['additionalAttributes'] = NULL;
$arguments2445['data'] = NULL;
$arguments2445['class'] = NULL;
$arguments2445['dir'] = NULL;
$arguments2445['id'] = NULL;
$arguments2445['lang'] = NULL;
$arguments2445['style'] = NULL;
$arguments2445['title'] = NULL;
$arguments2445['accesskey'] = NULL;
$arguments2445['tabindex'] = NULL;
$arguments2445['onclick'] = NULL;
$arguments2445['alt'] = NULL;
$arguments2445['file'] = NULL;
$arguments2445['additionalConfig'] = array (
);
$arguments2445['width'] = NULL;
$arguments2445['height'] = NULL;
$arguments2445['cropVariant'] = 'default';
$arguments2445['class'] = 'img-responsive';
$array2447 = array (
);$arguments2445['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2447);
$array2448 = array (
);$arguments2445['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2448);
$array2449 = array (
);$arguments2445['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2449);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2450 = array();
$arguments2450['then'] = NULL;
$arguments2450['else'] = NULL;
$arguments2450['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2452 = array();
$array2453 = array (
);$array2452['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2453);

$expression2454 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2450['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2454(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2452)
					),
					$renderingContext
				);
$array2455 = array (
);$arguments2450['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2455);
$array2456 = array (
);$arguments2450['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2456);
$arguments2445['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2450, $renderChildrenClosure2451, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2457 = array();
$arguments2457['then'] = NULL;
$arguments2457['else'] = NULL;
$arguments2457['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2459 = array();
$array2460 = array (
);$array2459['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2460);

$expression2461 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2457['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2461(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2459)
					),
					$renderingContext
				);
$array2462 = array (
);$arguments2457['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2462);
$arguments2457['else'] = '';
$arguments2445['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2457, $renderChildrenClosure2458, $renderingContext);

$output2444 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2445, $renderChildrenClosure2446, $renderingContext);

$output2444 .= '
            ';
return $output2444;
};
$arguments2442['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2463 = '';

$output2463 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2465 = function() use ($renderingContext, $self) {
$output2469 = '';

$output2469 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2470 = array();
$arguments2470['additionalAttributes'] = NULL;
$arguments2470['data'] = NULL;
$arguments2470['class'] = NULL;
$arguments2470['dir'] = NULL;
$arguments2470['id'] = NULL;
$arguments2470['lang'] = NULL;
$arguments2470['style'] = NULL;
$arguments2470['title'] = NULL;
$arguments2470['accesskey'] = NULL;
$arguments2470['tabindex'] = NULL;
$arguments2470['onclick'] = NULL;
$arguments2470['alt'] = NULL;
$arguments2470['ismap'] = NULL;
$arguments2470['longdesc'] = NULL;
$arguments2470['usemap'] = NULL;
$arguments2470['src'] = NULL;
$arguments2470['treatIdAsReference'] = NULL;
$arguments2470['image'] = NULL;
$arguments2470['crop'] = NULL;
$arguments2470['cropVariant'] = 'default';
$arguments2470['width'] = NULL;
$arguments2470['height'] = NULL;
$arguments2470['minWidth'] = NULL;
$arguments2470['minHeight'] = NULL;
$arguments2470['maxWidth'] = NULL;
$arguments2470['maxHeight'] = NULL;
$arguments2470['absolute'] = false;
$arguments2470['class'] = 'img-responsive';
$array2472 = array (
);$arguments2470['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2472);
$arguments2470['title'] = '';
$arguments2470['alt'] = '';
$array2473 = array (
);$arguments2470['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2473);
$array2474 = array (
);$arguments2470['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2474);

$output2469 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2470, $renderChildrenClosure2471, $renderingContext);

$output2469 .= '
              ';
return $output2469;
};
$arguments2464 = array();
$arguments2464['then'] = NULL;
$arguments2464['else'] = NULL;
$arguments2464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2466 = array();
$array2467 = array (
);$array2466['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2467);

$expression2468 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2466)
					),
					$renderingContext
				);
$arguments2464['__thenClosure'] = $renderChildrenClosure2465;

$output2463 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2464, $renderChildrenClosure2465, $renderingContext);

$output2463 .= '
            ';
return $output2463;
};

$output2441 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2442, $renderChildrenClosure2443, $renderingContext);

$output2441 .= '   
	 ';
return $output2441;
};
$arguments2436 = array();
$arguments2436['additionalAttributes'] = NULL;
$arguments2436['data'] = NULL;
$arguments2436['class'] = NULL;
$arguments2436['dir'] = NULL;
$arguments2436['id'] = NULL;
$arguments2436['lang'] = NULL;
$arguments2436['style'] = NULL;
$arguments2436['title'] = NULL;
$arguments2436['accesskey'] = NULL;
$arguments2436['tabindex'] = NULL;
$arguments2436['onclick'] = NULL;
$arguments2436['newsItem'] = NULL;
$arguments2436['settings'] = array (
);
$arguments2436['uriOnly'] = false;
$arguments2436['configuration'] = array (
);
$arguments2436['content'] = '';
$arguments2436['section'] = NULL;
$array2438 = array (
);$arguments2436['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2438);
$array2439 = array (
);$arguments2436['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2439);
$array2440 = array (
);$arguments2436['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2440);

$output2435 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2436, $renderChildrenClosure2437, $renderingContext);

$output2435 .= '	  
 </div>
  </div>
    </div>
 <div class="col-sm-6 historyrelated-txt">
                                    <div class="article-content">
                                        <h5>';
$array2514 = array (
);
$output2435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2514)]);

$output2435 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2516 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure2518 = function() use ($renderingContext, $self) {
$array2522 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2522);
};
$arguments2517 = array();
$arguments2517['maxCharacters'] = NULL;
$arguments2517['append'] = '...';
$arguments2517['respectWordBoundaries'] = true;
$arguments2517['respectHtml'] = true;
$array2519 = array (
);$arguments2517['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array2519);
// Rendering Boolean node
// Rendering Array
$array2520 = array();
$array2520['0'] = 1;

$expression2521 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2517['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2521(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2520)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments2517, $renderChildrenClosure2518, $renderingContext);
};
$arguments2515 = array();
$arguments2515['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2435 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2515, $renderChildrenClosure2516, $renderingContext);

$output2435 .= '
                                        <div class="sp-btn" style="margin-top: 30px;">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2524 = function() use ($renderingContext, $self) {
return 'LEARN MORE<i class="fa fa-angle-right">&nbsp;</i> ';
};
$arguments2523 = array();
$arguments2523['additionalAttributes'] = NULL;
$arguments2523['data'] = NULL;
$arguments2523['class'] = NULL;
$arguments2523['dir'] = NULL;
$arguments2523['id'] = NULL;
$arguments2523['lang'] = NULL;
$arguments2523['style'] = NULL;
$arguments2523['title'] = NULL;
$arguments2523['accesskey'] = NULL;
$arguments2523['tabindex'] = NULL;
$arguments2523['onclick'] = NULL;
$arguments2523['newsItem'] = NULL;
$arguments2523['settings'] = array (
);
$arguments2523['uriOnly'] = false;
$arguments2523['configuration'] = array (
);
$arguments2523['content'] = '';
$arguments2523['section'] = NULL;
$array2525 = array (
);$arguments2523['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2525);
$array2526 = array (
);$arguments2523['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2526);
$array2527 = array (
);$arguments2523['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2527);

$output2435 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2523, $renderChildrenClosure2524, $renderingContext);

$output2435 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
                              
							    ';
return $output2435;
};
$arguments2433 = array();

$output2432 .= '';

$output2432 .= '
  ';
return $output2432;
};
$arguments2334 = array();
$arguments2334['then'] = NULL;
$arguments2334['else'] = NULL;
$arguments2334['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2429 = array();
$array2430 = array (
);$array2429['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2430);
$array2429['1'] = ' == 15';

$expression2431 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 15);};
$arguments2334['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2431(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2429)
					),
					$renderingContext
				);
$arguments2334['__thenClosure'] = function() use ($renderingContext, $self) {
$output2336 = '';

$output2336 .= '
<div class="col-sm-6 historyrelated "> 
<div class="col-sm-6 historyrelated-size"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2338 = function() use ($renderingContext, $self) {
$output2342 = '';

$output2342 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2344 = function() use ($renderingContext, $self) {
$output2379 = '';

$output2379 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2381 = function() use ($renderingContext, $self) {
$output2382 = '';

$output2382 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2384 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2383 = array();
$arguments2383['additionalAttributes'] = NULL;
$arguments2383['data'] = NULL;
$arguments2383['class'] = NULL;
$arguments2383['dir'] = NULL;
$arguments2383['id'] = NULL;
$arguments2383['lang'] = NULL;
$arguments2383['style'] = NULL;
$arguments2383['title'] = NULL;
$arguments2383['accesskey'] = NULL;
$arguments2383['tabindex'] = NULL;
$arguments2383['onclick'] = NULL;
$arguments2383['alt'] = NULL;
$arguments2383['file'] = NULL;
$arguments2383['additionalConfig'] = array (
);
$arguments2383['width'] = NULL;
$arguments2383['height'] = NULL;
$arguments2383['cropVariant'] = 'default';
$arguments2383['class'] = 'img-responsive';
$array2385 = array (
);$arguments2383['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2385);
$array2386 = array (
);$arguments2383['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2386);
$array2387 = array (
);$arguments2383['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2387);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2389 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2388 = array();
$arguments2388['then'] = NULL;
$arguments2388['else'] = NULL;
$arguments2388['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2390 = array();
$array2391 = array (
);$array2390['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2391);

$expression2392 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2388['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2392(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2390)
					),
					$renderingContext
				);
$array2393 = array (
);$arguments2388['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2393);
$array2394 = array (
);$arguments2388['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2394);
$arguments2383['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2388, $renderChildrenClosure2389, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2396 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2395 = array();
$arguments2395['then'] = NULL;
$arguments2395['else'] = NULL;
$arguments2395['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2397 = array();
$array2398 = array (
);$array2397['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2398);

$expression2399 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2395['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2397)
					),
					$renderingContext
				);
$array2400 = array (
);$arguments2395['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2400);
$arguments2395['else'] = '';
$arguments2383['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2395, $renderChildrenClosure2396, $renderingContext);

$output2382 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2383, $renderChildrenClosure2384, $renderingContext);

$output2382 .= '
            ';
return $output2382;
};
$arguments2380 = array();

$output2379 .= '';

$output2379 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2402 = function() use ($renderingContext, $self) {
$output2403 = '';

$output2403 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2405 = function() use ($renderingContext, $self) {
$output2409 = '';

$output2409 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2411 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2410 = array();
$arguments2410['additionalAttributes'] = NULL;
$arguments2410['data'] = NULL;
$arguments2410['class'] = NULL;
$arguments2410['dir'] = NULL;
$arguments2410['id'] = NULL;
$arguments2410['lang'] = NULL;
$arguments2410['style'] = NULL;
$arguments2410['title'] = NULL;
$arguments2410['accesskey'] = NULL;
$arguments2410['tabindex'] = NULL;
$arguments2410['onclick'] = NULL;
$arguments2410['alt'] = NULL;
$arguments2410['ismap'] = NULL;
$arguments2410['longdesc'] = NULL;
$arguments2410['usemap'] = NULL;
$arguments2410['src'] = NULL;
$arguments2410['treatIdAsReference'] = NULL;
$arguments2410['image'] = NULL;
$arguments2410['crop'] = NULL;
$arguments2410['cropVariant'] = 'default';
$arguments2410['width'] = NULL;
$arguments2410['height'] = NULL;
$arguments2410['minWidth'] = NULL;
$arguments2410['minHeight'] = NULL;
$arguments2410['maxWidth'] = NULL;
$arguments2410['maxHeight'] = NULL;
$arguments2410['absolute'] = false;
$arguments2410['class'] = 'img-responsive';
$array2412 = array (
);$arguments2410['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2412);
$arguments2410['title'] = '';
$arguments2410['alt'] = '';
$array2413 = array (
);$arguments2410['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2413);
$array2414 = array (
);$arguments2410['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2414);

$output2409 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2410, $renderChildrenClosure2411, $renderingContext);

$output2409 .= '
              ';
return $output2409;
};
$arguments2404 = array();
$arguments2404['then'] = NULL;
$arguments2404['else'] = NULL;
$arguments2404['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2406 = array();
$array2407 = array (
);$array2406['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2407);

$expression2408 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2404['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2408(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2406)
					),
					$renderingContext
				);
$arguments2404['__thenClosure'] = $renderChildrenClosure2405;

$output2403 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2404, $renderChildrenClosure2405, $renderingContext);

$output2403 .= '
            ';
return $output2403;
};
$arguments2401 = array();
$arguments2401['if'] = NULL;

$output2379 .= '';

$output2379 .= '
          ';
return $output2379;
};
$arguments2343 = array();
$arguments2343['then'] = NULL;
$arguments2343['else'] = NULL;
$arguments2343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2376 = array();
$array2377 = array (
);$array2376['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2377);

$expression2378 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2376)
					),
					$renderingContext
				);
$arguments2343['__thenClosure'] = function() use ($renderingContext, $self) {
$output2345 = '';

$output2345 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2347 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2346 = array();
$arguments2346['additionalAttributes'] = NULL;
$arguments2346['data'] = NULL;
$arguments2346['class'] = NULL;
$arguments2346['dir'] = NULL;
$arguments2346['id'] = NULL;
$arguments2346['lang'] = NULL;
$arguments2346['style'] = NULL;
$arguments2346['title'] = NULL;
$arguments2346['accesskey'] = NULL;
$arguments2346['tabindex'] = NULL;
$arguments2346['onclick'] = NULL;
$arguments2346['alt'] = NULL;
$arguments2346['file'] = NULL;
$arguments2346['additionalConfig'] = array (
);
$arguments2346['width'] = NULL;
$arguments2346['height'] = NULL;
$arguments2346['cropVariant'] = 'default';
$arguments2346['class'] = 'img-responsive';
$array2348 = array (
);$arguments2346['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2348);
$array2349 = array (
);$arguments2346['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2349);
$array2350 = array (
);$arguments2346['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2350);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2351 = array();
$arguments2351['then'] = NULL;
$arguments2351['else'] = NULL;
$arguments2351['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2353 = array();
$array2354 = array (
);$array2353['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2354);

$expression2355 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2351['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2355(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2353)
					),
					$renderingContext
				);
$array2356 = array (
);$arguments2351['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2356);
$array2357 = array (
);$arguments2351['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2357);
$arguments2346['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2351, $renderChildrenClosure2352, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2358 = array();
$arguments2358['then'] = NULL;
$arguments2358['else'] = NULL;
$arguments2358['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2360 = array();
$array2361 = array (
);$array2360['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2361);

$expression2362 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2358['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2362(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2360)
					),
					$renderingContext
				);
$array2363 = array (
);$arguments2358['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2363);
$arguments2358['else'] = '';
$arguments2346['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2358, $renderChildrenClosure2359, $renderingContext);

$output2345 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2346, $renderChildrenClosure2347, $renderingContext);

$output2345 .= '
            ';
return $output2345;
};
$arguments2343['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2364 = '';

$output2364 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2366 = function() use ($renderingContext, $self) {
$output2370 = '';

$output2370 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2371 = array();
$arguments2371['additionalAttributes'] = NULL;
$arguments2371['data'] = NULL;
$arguments2371['class'] = NULL;
$arguments2371['dir'] = NULL;
$arguments2371['id'] = NULL;
$arguments2371['lang'] = NULL;
$arguments2371['style'] = NULL;
$arguments2371['title'] = NULL;
$arguments2371['accesskey'] = NULL;
$arguments2371['tabindex'] = NULL;
$arguments2371['onclick'] = NULL;
$arguments2371['alt'] = NULL;
$arguments2371['ismap'] = NULL;
$arguments2371['longdesc'] = NULL;
$arguments2371['usemap'] = NULL;
$arguments2371['src'] = NULL;
$arguments2371['treatIdAsReference'] = NULL;
$arguments2371['image'] = NULL;
$arguments2371['crop'] = NULL;
$arguments2371['cropVariant'] = 'default';
$arguments2371['width'] = NULL;
$arguments2371['height'] = NULL;
$arguments2371['minWidth'] = NULL;
$arguments2371['minHeight'] = NULL;
$arguments2371['maxWidth'] = NULL;
$arguments2371['maxHeight'] = NULL;
$arguments2371['absolute'] = false;
$arguments2371['class'] = 'img-responsive';
$array2373 = array (
);$arguments2371['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2373);
$arguments2371['title'] = '';
$arguments2371['alt'] = '';
$array2374 = array (
);$arguments2371['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2374);
$array2375 = array (
);$arguments2371['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2375);

$output2370 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2371, $renderChildrenClosure2372, $renderingContext);

$output2370 .= '
              ';
return $output2370;
};
$arguments2365 = array();
$arguments2365['then'] = NULL;
$arguments2365['else'] = NULL;
$arguments2365['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2367 = array();
$array2368 = array (
);$array2367['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2368);

$expression2369 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2365['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2369(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2367)
					),
					$renderingContext
				);
$arguments2365['__thenClosure'] = $renderChildrenClosure2366;

$output2364 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2365, $renderChildrenClosure2366, $renderingContext);

$output2364 .= '
            ';
return $output2364;
};

$output2342 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2343, $renderChildrenClosure2344, $renderingContext);

$output2342 .= '   
	 ';
return $output2342;
};
$arguments2337 = array();
$arguments2337['additionalAttributes'] = NULL;
$arguments2337['data'] = NULL;
$arguments2337['class'] = NULL;
$arguments2337['dir'] = NULL;
$arguments2337['id'] = NULL;
$arguments2337['lang'] = NULL;
$arguments2337['style'] = NULL;
$arguments2337['title'] = NULL;
$arguments2337['accesskey'] = NULL;
$arguments2337['tabindex'] = NULL;
$arguments2337['onclick'] = NULL;
$arguments2337['newsItem'] = NULL;
$arguments2337['settings'] = array (
);
$arguments2337['uriOnly'] = false;
$arguments2337['configuration'] = array (
);
$arguments2337['content'] = '';
$arguments2337['section'] = NULL;
$array2339 = array (
);$arguments2337['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2339);
$array2340 = array (
);$arguments2337['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2340);
$array2341 = array (
);$arguments2337['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2341);

$output2336 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2337, $renderChildrenClosure2338, $renderingContext);

$output2336 .= '	  
 </div>
  </div>
    </div>
 <div class="col-sm-6 historyrelated-txt">
                                    <div class="article-content">
                                        <h5>';
$array2415 = array (
);
$output2336 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2415)]);

$output2336 .= '</h5>
                                     ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2417 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper
$renderChildrenClosure2419 = function() use ($renderingContext, $self) {
$array2423 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2423);
};
$arguments2418 = array();
$arguments2418['maxCharacters'] = NULL;
$arguments2418['append'] = '...';
$arguments2418['respectWordBoundaries'] = true;
$arguments2418['respectHtml'] = true;
$array2420 = array (
);$arguments2418['maxCharacters'] = $renderingContext->getVariableProvider()->getByPath('settings.cropMaxCharacters', $array2420);
// Rendering Boolean node
// Rendering Array
$array2421 = array();
$array2421['0'] = 1;

$expression2422 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2418['respectWordBoundaries'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2422(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2421)
					),
					$renderingContext
				);
return TYPO3\CMS\Fluid\ViewHelpers\Format\CropViewHelper::renderStatic($arguments2418, $renderChildrenClosure2419, $renderingContext);
};
$arguments2416 = array();
$arguments2416['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2336 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2416, $renderChildrenClosure2417, $renderingContext);

$output2336 .= '
                                        <div class="sp-btn" style="margin-top: 30px;">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure2425 = function() use ($renderingContext, $self) {
return 'LEARN MORE<i class="fa fa-angle-right">&nbsp;</i> ';
};
$arguments2424 = array();
$arguments2424['additionalAttributes'] = NULL;
$arguments2424['data'] = NULL;
$arguments2424['class'] = NULL;
$arguments2424['dir'] = NULL;
$arguments2424['id'] = NULL;
$arguments2424['lang'] = NULL;
$arguments2424['style'] = NULL;
$arguments2424['title'] = NULL;
$arguments2424['accesskey'] = NULL;
$arguments2424['tabindex'] = NULL;
$arguments2424['onclick'] = NULL;
$arguments2424['newsItem'] = NULL;
$arguments2424['settings'] = array (
);
$arguments2424['uriOnly'] = false;
$arguments2424['configuration'] = array (
);
$arguments2424['content'] = '';
$arguments2424['section'] = NULL;
$array2426 = array (
);$arguments2424['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array2426);
$array2427 = array (
);$arguments2424['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array2427);
$array2428 = array (
);$arguments2424['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2428);

$output2336 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments2424, $renderChildrenClosure2425, $renderingContext);

$output2336 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
                              
							    ';
return $output2336;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2334, $renderChildrenClosure2335, $renderingContext);

$output0 .= ' 
  
 
  <!--best employee-->
       ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2529 = function() use ($renderingContext, $self) {
$output2608 = '';

$output2608 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2610 = function() use ($renderingContext, $self) {
$output2611 = '';

$output2611 .= '

                                <div class="article-wrapper">
                                    <div class="article-thumb">

	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2613 = function() use ($renderingContext, $self) {
$output2648 = '';

$output2648 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2650 = function() use ($renderingContext, $self) {
$output2651 = '';

$output2651 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2653 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2652 = array();
$arguments2652['additionalAttributes'] = NULL;
$arguments2652['data'] = NULL;
$arguments2652['class'] = NULL;
$arguments2652['dir'] = NULL;
$arguments2652['id'] = NULL;
$arguments2652['lang'] = NULL;
$arguments2652['style'] = NULL;
$arguments2652['title'] = NULL;
$arguments2652['accesskey'] = NULL;
$arguments2652['tabindex'] = NULL;
$arguments2652['onclick'] = NULL;
$arguments2652['alt'] = NULL;
$arguments2652['file'] = NULL;
$arguments2652['additionalConfig'] = array (
);
$arguments2652['width'] = NULL;
$arguments2652['height'] = NULL;
$arguments2652['cropVariant'] = 'default';
$arguments2652['class'] = 'img-responsive';
$array2654 = array (
);$arguments2652['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2654);
$array2655 = array (
);$arguments2652['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2655);
$array2656 = array (
);$arguments2652['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2656);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2657 = array();
$arguments2657['then'] = NULL;
$arguments2657['else'] = NULL;
$arguments2657['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2659 = array();
$array2660 = array (
);$array2659['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2660);

$expression2661 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2657['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2661(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2659)
					),
					$renderingContext
				);
$array2662 = array (
);$arguments2657['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2662);
$array2663 = array (
);$arguments2657['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2663);
$arguments2652['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2657, $renderChildrenClosure2658, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2665 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2664 = array();
$arguments2664['then'] = NULL;
$arguments2664['else'] = NULL;
$arguments2664['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2666 = array();
$array2667 = array (
);$array2666['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2667);

$expression2668 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2664['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2668(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2666)
					),
					$renderingContext
				);
$array2669 = array (
);$arguments2664['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2669);
$arguments2664['else'] = '';
$arguments2652['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2664, $renderChildrenClosure2665, $renderingContext);

$output2651 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2652, $renderChildrenClosure2653, $renderingContext);

$output2651 .= '
            ';
return $output2651;
};
$arguments2649 = array();

$output2648 .= '';

$output2648 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2671 = function() use ($renderingContext, $self) {
$output2672 = '';

$output2672 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2674 = function() use ($renderingContext, $self) {
$output2678 = '';

$output2678 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2680 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2679 = array();
$arguments2679['additionalAttributes'] = NULL;
$arguments2679['data'] = NULL;
$arguments2679['class'] = NULL;
$arguments2679['dir'] = NULL;
$arguments2679['id'] = NULL;
$arguments2679['lang'] = NULL;
$arguments2679['style'] = NULL;
$arguments2679['title'] = NULL;
$arguments2679['accesskey'] = NULL;
$arguments2679['tabindex'] = NULL;
$arguments2679['onclick'] = NULL;
$arguments2679['alt'] = NULL;
$arguments2679['ismap'] = NULL;
$arguments2679['longdesc'] = NULL;
$arguments2679['usemap'] = NULL;
$arguments2679['src'] = NULL;
$arguments2679['treatIdAsReference'] = NULL;
$arguments2679['image'] = NULL;
$arguments2679['crop'] = NULL;
$arguments2679['cropVariant'] = 'default';
$arguments2679['width'] = NULL;
$arguments2679['height'] = NULL;
$arguments2679['minWidth'] = NULL;
$arguments2679['minHeight'] = NULL;
$arguments2679['maxWidth'] = NULL;
$arguments2679['maxHeight'] = NULL;
$arguments2679['absolute'] = false;
$arguments2679['class'] = 'img-responsive';
$array2681 = array (
);$arguments2679['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2681);
$arguments2679['title'] = '';
$arguments2679['alt'] = '';
$array2682 = array (
);$arguments2679['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2682);
$array2683 = array (
);$arguments2679['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2683);

$output2678 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2679, $renderChildrenClosure2680, $renderingContext);

$output2678 .= '
              ';
return $output2678;
};
$arguments2673 = array();
$arguments2673['then'] = NULL;
$arguments2673['else'] = NULL;
$arguments2673['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2675 = array();
$array2676 = array (
);$array2675['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2676);

$expression2677 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2673['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2677(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2675)
					),
					$renderingContext
				);
$arguments2673['__thenClosure'] = $renderChildrenClosure2674;

$output2672 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2673, $renderChildrenClosure2674, $renderingContext);

$output2672 .= '
            ';
return $output2672;
};
$arguments2670 = array();
$arguments2670['if'] = NULL;

$output2648 .= '';

$output2648 .= '
          ';
return $output2648;
};
$arguments2612 = array();
$arguments2612['then'] = NULL;
$arguments2612['else'] = NULL;
$arguments2612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2645 = array();
$array2646 = array (
);$array2645['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2646);

$expression2647 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2647(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2645)
					),
					$renderingContext
				);
$arguments2612['__thenClosure'] = function() use ($renderingContext, $self) {
$output2614 = '';

$output2614 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2616 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2615 = array();
$arguments2615['additionalAttributes'] = NULL;
$arguments2615['data'] = NULL;
$arguments2615['class'] = NULL;
$arguments2615['dir'] = NULL;
$arguments2615['id'] = NULL;
$arguments2615['lang'] = NULL;
$arguments2615['style'] = NULL;
$arguments2615['title'] = NULL;
$arguments2615['accesskey'] = NULL;
$arguments2615['tabindex'] = NULL;
$arguments2615['onclick'] = NULL;
$arguments2615['alt'] = NULL;
$arguments2615['file'] = NULL;
$arguments2615['additionalConfig'] = array (
);
$arguments2615['width'] = NULL;
$arguments2615['height'] = NULL;
$arguments2615['cropVariant'] = 'default';
$arguments2615['class'] = 'img-responsive';
$array2617 = array (
);$arguments2615['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2617);
$array2618 = array (
);$arguments2615['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2618);
$array2619 = array (
);$arguments2615['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2619);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2621 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2620 = array();
$arguments2620['then'] = NULL;
$arguments2620['else'] = NULL;
$arguments2620['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2622 = array();
$array2623 = array (
);$array2622['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2623);

$expression2624 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2620['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2624(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2622)
					),
					$renderingContext
				);
$array2625 = array (
);$arguments2620['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2625);
$array2626 = array (
);$arguments2620['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2626);
$arguments2615['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2620, $renderChildrenClosure2621, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2627 = array();
$arguments2627['then'] = NULL;
$arguments2627['else'] = NULL;
$arguments2627['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2629 = array();
$array2630 = array (
);$array2629['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2630);

$expression2631 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2627['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2631(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2629)
					),
					$renderingContext
				);
$array2632 = array (
);$arguments2627['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2632);
$arguments2627['else'] = '';
$arguments2615['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2627, $renderChildrenClosure2628, $renderingContext);

$output2614 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2615, $renderChildrenClosure2616, $renderingContext);

$output2614 .= '
            ';
return $output2614;
};
$arguments2612['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2633 = '';

$output2633 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2635 = function() use ($renderingContext, $self) {
$output2639 = '';

$output2639 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2641 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2640 = array();
$arguments2640['additionalAttributes'] = NULL;
$arguments2640['data'] = NULL;
$arguments2640['class'] = NULL;
$arguments2640['dir'] = NULL;
$arguments2640['id'] = NULL;
$arguments2640['lang'] = NULL;
$arguments2640['style'] = NULL;
$arguments2640['title'] = NULL;
$arguments2640['accesskey'] = NULL;
$arguments2640['tabindex'] = NULL;
$arguments2640['onclick'] = NULL;
$arguments2640['alt'] = NULL;
$arguments2640['ismap'] = NULL;
$arguments2640['longdesc'] = NULL;
$arguments2640['usemap'] = NULL;
$arguments2640['src'] = NULL;
$arguments2640['treatIdAsReference'] = NULL;
$arguments2640['image'] = NULL;
$arguments2640['crop'] = NULL;
$arguments2640['cropVariant'] = 'default';
$arguments2640['width'] = NULL;
$arguments2640['height'] = NULL;
$arguments2640['minWidth'] = NULL;
$arguments2640['minHeight'] = NULL;
$arguments2640['maxWidth'] = NULL;
$arguments2640['maxHeight'] = NULL;
$arguments2640['absolute'] = false;
$arguments2640['class'] = 'img-responsive';
$array2642 = array (
);$arguments2640['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2642);
$arguments2640['title'] = '';
$arguments2640['alt'] = '';
$array2643 = array (
);$arguments2640['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2643);
$array2644 = array (
);$arguments2640['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2644);

$output2639 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2640, $renderChildrenClosure2641, $renderingContext);

$output2639 .= '
              ';
return $output2639;
};
$arguments2634 = array();
$arguments2634['then'] = NULL;
$arguments2634['else'] = NULL;
$arguments2634['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2636 = array();
$array2637 = array (
);$array2636['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2637);

$expression2638 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2634['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2638(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2636)
					),
					$renderingContext
				);
$arguments2634['__thenClosure'] = $renderChildrenClosure2635;

$output2633 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2634, $renderChildrenClosure2635, $renderingContext);

$output2633 .= '
            ';
return $output2633;
};

$output2611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2612, $renderChildrenClosure2613, $renderingContext);

$output2611 .= '   
	  
 </div>
                                    <div class="article-contentemployee">
                                        <h5>';
$array2684 = array (
);
$output2611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2684)]);

$output2611 .= '</h5>
                                     ';
$array2685 = array (
);
$output2611 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2685)]);

$output2611 .= '
                                        
                                    </div>
                                </div>
                         
							    ';
return $output2611;
};
$arguments2609 = array();

$output2608 .= '';

$output2608 .= '
  ';
return $output2608;
};
$arguments2528 = array();
$arguments2528['then'] = NULL;
$arguments2528['else'] = NULL;
$arguments2528['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2605 = array();
$array2606 = array (
);$array2605['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2606);
$array2605['1'] = ' == 17';

$expression2607 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 17);};
$arguments2528['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2607(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2605)
					),
					$renderingContext
				);
$arguments2528['__thenClosure'] = function() use ($renderingContext, $self) {
$output2530 = '';

$output2530 .= '

                                <div class="article-wrapper">
                                    <div class="article-thumb">

	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2532 = function() use ($renderingContext, $self) {
$output2567 = '';

$output2567 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2569 = function() use ($renderingContext, $self) {
$output2570 = '';

$output2570 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2571 = array();
$arguments2571['additionalAttributes'] = NULL;
$arguments2571['data'] = NULL;
$arguments2571['class'] = NULL;
$arguments2571['dir'] = NULL;
$arguments2571['id'] = NULL;
$arguments2571['lang'] = NULL;
$arguments2571['style'] = NULL;
$arguments2571['title'] = NULL;
$arguments2571['accesskey'] = NULL;
$arguments2571['tabindex'] = NULL;
$arguments2571['onclick'] = NULL;
$arguments2571['alt'] = NULL;
$arguments2571['file'] = NULL;
$arguments2571['additionalConfig'] = array (
);
$arguments2571['width'] = NULL;
$arguments2571['height'] = NULL;
$arguments2571['cropVariant'] = 'default';
$arguments2571['class'] = 'img-responsive';
$array2573 = array (
);$arguments2571['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2573);
$array2574 = array (
);$arguments2571['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2574);
$array2575 = array (
);$arguments2571['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2575);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2577 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2576 = array();
$arguments2576['then'] = NULL;
$arguments2576['else'] = NULL;
$arguments2576['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2578 = array();
$array2579 = array (
);$array2578['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2579);

$expression2580 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2576['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2580(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2578)
					),
					$renderingContext
				);
$array2581 = array (
);$arguments2576['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2581);
$array2582 = array (
);$arguments2576['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2582);
$arguments2571['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2576, $renderChildrenClosure2577, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2583 = array();
$arguments2583['then'] = NULL;
$arguments2583['else'] = NULL;
$arguments2583['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2585 = array();
$array2586 = array (
);$array2585['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2586);

$expression2587 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2583['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2587(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2585)
					),
					$renderingContext
				);
$array2588 = array (
);$arguments2583['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2588);
$arguments2583['else'] = '';
$arguments2571['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2583, $renderChildrenClosure2584, $renderingContext);

$output2570 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2571, $renderChildrenClosure2572, $renderingContext);

$output2570 .= '
            ';
return $output2570;
};
$arguments2568 = array();

$output2567 .= '';

$output2567 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2590 = function() use ($renderingContext, $self) {
$output2591 = '';

$output2591 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2593 = function() use ($renderingContext, $self) {
$output2597 = '';

$output2597 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2598 = array();
$arguments2598['additionalAttributes'] = NULL;
$arguments2598['data'] = NULL;
$arguments2598['class'] = NULL;
$arguments2598['dir'] = NULL;
$arguments2598['id'] = NULL;
$arguments2598['lang'] = NULL;
$arguments2598['style'] = NULL;
$arguments2598['title'] = NULL;
$arguments2598['accesskey'] = NULL;
$arguments2598['tabindex'] = NULL;
$arguments2598['onclick'] = NULL;
$arguments2598['alt'] = NULL;
$arguments2598['ismap'] = NULL;
$arguments2598['longdesc'] = NULL;
$arguments2598['usemap'] = NULL;
$arguments2598['src'] = NULL;
$arguments2598['treatIdAsReference'] = NULL;
$arguments2598['image'] = NULL;
$arguments2598['crop'] = NULL;
$arguments2598['cropVariant'] = 'default';
$arguments2598['width'] = NULL;
$arguments2598['height'] = NULL;
$arguments2598['minWidth'] = NULL;
$arguments2598['minHeight'] = NULL;
$arguments2598['maxWidth'] = NULL;
$arguments2598['maxHeight'] = NULL;
$arguments2598['absolute'] = false;
$arguments2598['class'] = 'img-responsive';
$array2600 = array (
);$arguments2598['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2600);
$arguments2598['title'] = '';
$arguments2598['alt'] = '';
$array2601 = array (
);$arguments2598['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2601);
$array2602 = array (
);$arguments2598['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2602);

$output2597 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2598, $renderChildrenClosure2599, $renderingContext);

$output2597 .= '
              ';
return $output2597;
};
$arguments2592 = array();
$arguments2592['then'] = NULL;
$arguments2592['else'] = NULL;
$arguments2592['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2594 = array();
$array2595 = array (
);$array2594['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2595);

$expression2596 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2592['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2594)
					),
					$renderingContext
				);
$arguments2592['__thenClosure'] = $renderChildrenClosure2593;

$output2591 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2592, $renderChildrenClosure2593, $renderingContext);

$output2591 .= '
            ';
return $output2591;
};
$arguments2589 = array();
$arguments2589['if'] = NULL;

$output2567 .= '';

$output2567 .= '
          ';
return $output2567;
};
$arguments2531 = array();
$arguments2531['then'] = NULL;
$arguments2531['else'] = NULL;
$arguments2531['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2564 = array();
$array2565 = array (
);$array2564['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2565);

$expression2566 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2531['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2566(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2564)
					),
					$renderingContext
				);
$arguments2531['__thenClosure'] = function() use ($renderingContext, $self) {
$output2533 = '';

$output2533 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2534 = array();
$arguments2534['additionalAttributes'] = NULL;
$arguments2534['data'] = NULL;
$arguments2534['class'] = NULL;
$arguments2534['dir'] = NULL;
$arguments2534['id'] = NULL;
$arguments2534['lang'] = NULL;
$arguments2534['style'] = NULL;
$arguments2534['title'] = NULL;
$arguments2534['accesskey'] = NULL;
$arguments2534['tabindex'] = NULL;
$arguments2534['onclick'] = NULL;
$arguments2534['alt'] = NULL;
$arguments2534['file'] = NULL;
$arguments2534['additionalConfig'] = array (
);
$arguments2534['width'] = NULL;
$arguments2534['height'] = NULL;
$arguments2534['cropVariant'] = 'default';
$arguments2534['class'] = 'img-responsive';
$array2536 = array (
);$arguments2534['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2536);
$array2537 = array (
);$arguments2534['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2537);
$array2538 = array (
);$arguments2534['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2538);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2540 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2539 = array();
$arguments2539['then'] = NULL;
$arguments2539['else'] = NULL;
$arguments2539['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2541 = array();
$array2542 = array (
);$array2541['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2542);

$expression2543 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2539['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2541)
					),
					$renderingContext
				);
$array2544 = array (
);$arguments2539['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2544);
$array2545 = array (
);$arguments2539['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2545);
$arguments2534['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2539, $renderChildrenClosure2540, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2547 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2546 = array();
$arguments2546['then'] = NULL;
$arguments2546['else'] = NULL;
$arguments2546['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2548 = array();
$array2549 = array (
);$array2548['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2549);

$expression2550 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2546['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2550(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2548)
					),
					$renderingContext
				);
$array2551 = array (
);$arguments2546['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2551);
$arguments2546['else'] = '';
$arguments2534['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2546, $renderChildrenClosure2547, $renderingContext);

$output2533 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2534, $renderChildrenClosure2535, $renderingContext);

$output2533 .= '
            ';
return $output2533;
};
$arguments2531['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2552 = '';

$output2552 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2554 = function() use ($renderingContext, $self) {
$output2558 = '';

$output2558 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2560 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2559 = array();
$arguments2559['additionalAttributes'] = NULL;
$arguments2559['data'] = NULL;
$arguments2559['class'] = NULL;
$arguments2559['dir'] = NULL;
$arguments2559['id'] = NULL;
$arguments2559['lang'] = NULL;
$arguments2559['style'] = NULL;
$arguments2559['title'] = NULL;
$arguments2559['accesskey'] = NULL;
$arguments2559['tabindex'] = NULL;
$arguments2559['onclick'] = NULL;
$arguments2559['alt'] = NULL;
$arguments2559['ismap'] = NULL;
$arguments2559['longdesc'] = NULL;
$arguments2559['usemap'] = NULL;
$arguments2559['src'] = NULL;
$arguments2559['treatIdAsReference'] = NULL;
$arguments2559['image'] = NULL;
$arguments2559['crop'] = NULL;
$arguments2559['cropVariant'] = 'default';
$arguments2559['width'] = NULL;
$arguments2559['height'] = NULL;
$arguments2559['minWidth'] = NULL;
$arguments2559['minHeight'] = NULL;
$arguments2559['maxWidth'] = NULL;
$arguments2559['maxHeight'] = NULL;
$arguments2559['absolute'] = false;
$arguments2559['class'] = 'img-responsive';
$array2561 = array (
);$arguments2559['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2561);
$arguments2559['title'] = '';
$arguments2559['alt'] = '';
$array2562 = array (
);$arguments2559['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2562);
$array2563 = array (
);$arguments2559['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2563);

$output2558 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2559, $renderChildrenClosure2560, $renderingContext);

$output2558 .= '
              ';
return $output2558;
};
$arguments2553 = array();
$arguments2553['then'] = NULL;
$arguments2553['else'] = NULL;
$arguments2553['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2555 = array();
$array2556 = array (
);$array2555['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2556);

$expression2557 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2553['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2557(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2555)
					),
					$renderingContext
				);
$arguments2553['__thenClosure'] = $renderChildrenClosure2554;

$output2552 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2553, $renderChildrenClosure2554, $renderingContext);

$output2552 .= '
            ';
return $output2552;
};

$output2530 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2531, $renderChildrenClosure2532, $renderingContext);

$output2530 .= '   
	  
 </div>
                                    <div class="article-contentemployee">
                                        <h5>';
$array2603 = array (
);
$output2530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2603)]);

$output2530 .= '</h5>
                                     ';
$array2604 = array (
);
$output2530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array2604)]);

$output2530 .= '
                                        
                                    </div>
                                </div>
                         
							    ';
return $output2530;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2528, $renderChildrenClosure2529, $renderingContext);

$output0 .= ' 
  
  
       <!-- Membership box section -->
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2687 = function() use ($renderingContext, $self) {
$output2767 = '';

$output2767 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2769 = function() use ($renderingContext, $self) {
$output2770 = '';

$output2770 .= '
<div class="col-sm-6"> 
<div class="memberBox"> 
<div class="col-sm-12 historyrelated-size2"> 
                                <div class="memberLogo">
                          
	
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2772 = function() use ($renderingContext, $self) {
$output2807 = '';

$output2807 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2809 = function() use ($renderingContext, $self) {
$output2810 = '';

$output2810 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2812 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2811 = array();
$arguments2811['additionalAttributes'] = NULL;
$arguments2811['data'] = NULL;
$arguments2811['class'] = NULL;
$arguments2811['dir'] = NULL;
$arguments2811['id'] = NULL;
$arguments2811['lang'] = NULL;
$arguments2811['style'] = NULL;
$arguments2811['title'] = NULL;
$arguments2811['accesskey'] = NULL;
$arguments2811['tabindex'] = NULL;
$arguments2811['onclick'] = NULL;
$arguments2811['alt'] = NULL;
$arguments2811['file'] = NULL;
$arguments2811['additionalConfig'] = array (
);
$arguments2811['width'] = NULL;
$arguments2811['height'] = NULL;
$arguments2811['cropVariant'] = 'default';
$arguments2811['class'] = 'img-responsive';
$array2813 = array (
);$arguments2811['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2813);
$array2814 = array (
);$arguments2811['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2814);
$array2815 = array (
);$arguments2811['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2815);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2817 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2816 = array();
$arguments2816['then'] = NULL;
$arguments2816['else'] = NULL;
$arguments2816['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2818 = array();
$array2819 = array (
);$array2818['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2819);

$expression2820 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2816['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2820(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2818)
					),
					$renderingContext
				);
$array2821 = array (
);$arguments2816['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2821);
$array2822 = array (
);$arguments2816['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2822);
$arguments2811['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2816, $renderChildrenClosure2817, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2824 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2823 = array();
$arguments2823['then'] = NULL;
$arguments2823['else'] = NULL;
$arguments2823['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2825 = array();
$array2826 = array (
);$array2825['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2826);

$expression2827 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2823['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2827(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2825)
					),
					$renderingContext
				);
$array2828 = array (
);$arguments2823['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2828);
$arguments2823['else'] = '';
$arguments2811['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2823, $renderChildrenClosure2824, $renderingContext);

$output2810 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2811, $renderChildrenClosure2812, $renderingContext);

$output2810 .= '
            ';
return $output2810;
};
$arguments2808 = array();

$output2807 .= '';

$output2807 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2830 = function() use ($renderingContext, $self) {
$output2831 = '';

$output2831 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2833 = function() use ($renderingContext, $self) {
$output2837 = '';

$output2837 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2839 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2838 = array();
$arguments2838['additionalAttributes'] = NULL;
$arguments2838['data'] = NULL;
$arguments2838['class'] = NULL;
$arguments2838['dir'] = NULL;
$arguments2838['id'] = NULL;
$arguments2838['lang'] = NULL;
$arguments2838['style'] = NULL;
$arguments2838['title'] = NULL;
$arguments2838['accesskey'] = NULL;
$arguments2838['tabindex'] = NULL;
$arguments2838['onclick'] = NULL;
$arguments2838['alt'] = NULL;
$arguments2838['ismap'] = NULL;
$arguments2838['longdesc'] = NULL;
$arguments2838['usemap'] = NULL;
$arguments2838['src'] = NULL;
$arguments2838['treatIdAsReference'] = NULL;
$arguments2838['image'] = NULL;
$arguments2838['crop'] = NULL;
$arguments2838['cropVariant'] = 'default';
$arguments2838['width'] = NULL;
$arguments2838['height'] = NULL;
$arguments2838['minWidth'] = NULL;
$arguments2838['minHeight'] = NULL;
$arguments2838['maxWidth'] = NULL;
$arguments2838['maxHeight'] = NULL;
$arguments2838['absolute'] = false;
$arguments2838['class'] = 'img-responsive';
$array2840 = array (
);$arguments2838['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2840);
$arguments2838['title'] = '';
$arguments2838['alt'] = '';
$array2841 = array (
);$arguments2838['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2841);
$array2842 = array (
);$arguments2838['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2842);

$output2837 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2838, $renderChildrenClosure2839, $renderingContext);

$output2837 .= '
              ';
return $output2837;
};
$arguments2832 = array();
$arguments2832['then'] = NULL;
$arguments2832['else'] = NULL;
$arguments2832['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2834 = array();
$array2835 = array (
);$array2834['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2835);

$expression2836 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2832['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2836(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2834)
					),
					$renderingContext
				);
$arguments2832['__thenClosure'] = $renderChildrenClosure2833;

$output2831 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2832, $renderChildrenClosure2833, $renderingContext);

$output2831 .= '
            ';
return $output2831;
};
$arguments2829 = array();
$arguments2829['if'] = NULL;

$output2807 .= '';

$output2807 .= '
          ';
return $output2807;
};
$arguments2771 = array();
$arguments2771['then'] = NULL;
$arguments2771['else'] = NULL;
$arguments2771['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2804 = array();
$array2805 = array (
);$array2804['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2805);

$expression2806 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2771['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2806(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2804)
					),
					$renderingContext
				);
$arguments2771['__thenClosure'] = function() use ($renderingContext, $self) {
$output2773 = '';

$output2773 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2775 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2774 = array();
$arguments2774['additionalAttributes'] = NULL;
$arguments2774['data'] = NULL;
$arguments2774['class'] = NULL;
$arguments2774['dir'] = NULL;
$arguments2774['id'] = NULL;
$arguments2774['lang'] = NULL;
$arguments2774['style'] = NULL;
$arguments2774['title'] = NULL;
$arguments2774['accesskey'] = NULL;
$arguments2774['tabindex'] = NULL;
$arguments2774['onclick'] = NULL;
$arguments2774['alt'] = NULL;
$arguments2774['file'] = NULL;
$arguments2774['additionalConfig'] = array (
);
$arguments2774['width'] = NULL;
$arguments2774['height'] = NULL;
$arguments2774['cropVariant'] = 'default';
$arguments2774['class'] = 'img-responsive';
$array2776 = array (
);$arguments2774['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2776);
$array2777 = array (
);$arguments2774['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2777);
$array2778 = array (
);$arguments2774['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2778);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2780 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2779 = array();
$arguments2779['then'] = NULL;
$arguments2779['else'] = NULL;
$arguments2779['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2781 = array();
$array2782 = array (
);$array2781['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2782);

$expression2783 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2779['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2783(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2781)
					),
					$renderingContext
				);
$array2784 = array (
);$arguments2779['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2784);
$array2785 = array (
);$arguments2779['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2785);
$arguments2774['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2779, $renderChildrenClosure2780, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2787 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2786 = array();
$arguments2786['then'] = NULL;
$arguments2786['else'] = NULL;
$arguments2786['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2788 = array();
$array2789 = array (
);$array2788['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2789);

$expression2790 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2786['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2790(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2788)
					),
					$renderingContext
				);
$array2791 = array (
);$arguments2786['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2791);
$arguments2786['else'] = '';
$arguments2774['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2786, $renderChildrenClosure2787, $renderingContext);

$output2773 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2774, $renderChildrenClosure2775, $renderingContext);

$output2773 .= '
            ';
return $output2773;
};
$arguments2771['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2792 = '';

$output2792 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2794 = function() use ($renderingContext, $self) {
$output2798 = '';

$output2798 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2800 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2799 = array();
$arguments2799['additionalAttributes'] = NULL;
$arguments2799['data'] = NULL;
$arguments2799['class'] = NULL;
$arguments2799['dir'] = NULL;
$arguments2799['id'] = NULL;
$arguments2799['lang'] = NULL;
$arguments2799['style'] = NULL;
$arguments2799['title'] = NULL;
$arguments2799['accesskey'] = NULL;
$arguments2799['tabindex'] = NULL;
$arguments2799['onclick'] = NULL;
$arguments2799['alt'] = NULL;
$arguments2799['ismap'] = NULL;
$arguments2799['longdesc'] = NULL;
$arguments2799['usemap'] = NULL;
$arguments2799['src'] = NULL;
$arguments2799['treatIdAsReference'] = NULL;
$arguments2799['image'] = NULL;
$arguments2799['crop'] = NULL;
$arguments2799['cropVariant'] = 'default';
$arguments2799['width'] = NULL;
$arguments2799['height'] = NULL;
$arguments2799['minWidth'] = NULL;
$arguments2799['minHeight'] = NULL;
$arguments2799['maxWidth'] = NULL;
$arguments2799['maxHeight'] = NULL;
$arguments2799['absolute'] = false;
$arguments2799['class'] = 'img-responsive';
$array2801 = array (
);$arguments2799['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2801);
$arguments2799['title'] = '';
$arguments2799['alt'] = '';
$array2802 = array (
);$arguments2799['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2802);
$array2803 = array (
);$arguments2799['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2803);

$output2798 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2799, $renderChildrenClosure2800, $renderingContext);

$output2798 .= '
              ';
return $output2798;
};
$arguments2793 = array();
$arguments2793['then'] = NULL;
$arguments2793['else'] = NULL;
$arguments2793['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2795 = array();
$array2796 = array (
);$array2795['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2796);

$expression2797 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2793['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2797(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2795)
					),
					$renderingContext
				);
$arguments2793['__thenClosure'] = $renderChildrenClosure2794;

$output2792 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2793, $renderChildrenClosure2794, $renderingContext);

$output2792 .= '
            ';
return $output2792;
};

$output2770 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2771, $renderChildrenClosure2772, $renderingContext);

$output2770 .= '   
	  
 </div>
   </div>
 <div class="col-sm-12 member-txt">
                                    <div class="article-content" >
                              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2844 = function() use ($renderingContext, $self) {
$array2845 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2845);
};
$arguments2843 = array();
$arguments2843['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2770 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2843, $renderChildrenClosure2844, $renderingContext);

$output2770 .= '
                                   
                                    </div>
                                </div>
         </div>
         </div>
                  
							    ';
return $output2770;
};
$arguments2768 = array();

$output2767 .= '';

$output2767 .= '
  ';
return $output2767;
};
$arguments2686 = array();
$arguments2686['then'] = NULL;
$arguments2686['else'] = NULL;
$arguments2686['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2764 = array();
$array2765 = array (
);$array2764['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2765);
$array2764['1'] = ' == 18';

$expression2766 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 18);};
$arguments2686['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2766(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2764)
					),
					$renderingContext
				);
$arguments2686['__thenClosure'] = function() use ($renderingContext, $self) {
$output2688 = '';

$output2688 .= '
<div class="col-sm-6"> 
<div class="memberBox"> 
<div class="col-sm-12 historyrelated-size2"> 
                                <div class="memberLogo">
                          
	
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2690 = function() use ($renderingContext, $self) {
$output2725 = '';

$output2725 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2727 = function() use ($renderingContext, $self) {
$output2728 = '';

$output2728 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2730 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2729 = array();
$arguments2729['additionalAttributes'] = NULL;
$arguments2729['data'] = NULL;
$arguments2729['class'] = NULL;
$arguments2729['dir'] = NULL;
$arguments2729['id'] = NULL;
$arguments2729['lang'] = NULL;
$arguments2729['style'] = NULL;
$arguments2729['title'] = NULL;
$arguments2729['accesskey'] = NULL;
$arguments2729['tabindex'] = NULL;
$arguments2729['onclick'] = NULL;
$arguments2729['alt'] = NULL;
$arguments2729['file'] = NULL;
$arguments2729['additionalConfig'] = array (
);
$arguments2729['width'] = NULL;
$arguments2729['height'] = NULL;
$arguments2729['cropVariant'] = 'default';
$arguments2729['class'] = 'img-responsive';
$array2731 = array (
);$arguments2729['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2731);
$array2732 = array (
);$arguments2729['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2732);
$array2733 = array (
);$arguments2729['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2733);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2735 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2734 = array();
$arguments2734['then'] = NULL;
$arguments2734['else'] = NULL;
$arguments2734['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2736 = array();
$array2737 = array (
);$array2736['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2737);

$expression2738 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2734['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2738(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2736)
					),
					$renderingContext
				);
$array2739 = array (
);$arguments2734['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2739);
$array2740 = array (
);$arguments2734['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2740);
$arguments2729['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2734, $renderChildrenClosure2735, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2742 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2741 = array();
$arguments2741['then'] = NULL;
$arguments2741['else'] = NULL;
$arguments2741['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2743 = array();
$array2744 = array (
);$array2743['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2744);

$expression2745 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2741['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2745(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2743)
					),
					$renderingContext
				);
$array2746 = array (
);$arguments2741['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2746);
$arguments2741['else'] = '';
$arguments2729['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2741, $renderChildrenClosure2742, $renderingContext);

$output2728 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2729, $renderChildrenClosure2730, $renderingContext);

$output2728 .= '
            ';
return $output2728;
};
$arguments2726 = array();

$output2725 .= '';

$output2725 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2748 = function() use ($renderingContext, $self) {
$output2749 = '';

$output2749 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2751 = function() use ($renderingContext, $self) {
$output2755 = '';

$output2755 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2757 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2756 = array();
$arguments2756['additionalAttributes'] = NULL;
$arguments2756['data'] = NULL;
$arguments2756['class'] = NULL;
$arguments2756['dir'] = NULL;
$arguments2756['id'] = NULL;
$arguments2756['lang'] = NULL;
$arguments2756['style'] = NULL;
$arguments2756['title'] = NULL;
$arguments2756['accesskey'] = NULL;
$arguments2756['tabindex'] = NULL;
$arguments2756['onclick'] = NULL;
$arguments2756['alt'] = NULL;
$arguments2756['ismap'] = NULL;
$arguments2756['longdesc'] = NULL;
$arguments2756['usemap'] = NULL;
$arguments2756['src'] = NULL;
$arguments2756['treatIdAsReference'] = NULL;
$arguments2756['image'] = NULL;
$arguments2756['crop'] = NULL;
$arguments2756['cropVariant'] = 'default';
$arguments2756['width'] = NULL;
$arguments2756['height'] = NULL;
$arguments2756['minWidth'] = NULL;
$arguments2756['minHeight'] = NULL;
$arguments2756['maxWidth'] = NULL;
$arguments2756['maxHeight'] = NULL;
$arguments2756['absolute'] = false;
$arguments2756['class'] = 'img-responsive';
$array2758 = array (
);$arguments2756['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2758);
$arguments2756['title'] = '';
$arguments2756['alt'] = '';
$array2759 = array (
);$arguments2756['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2759);
$array2760 = array (
);$arguments2756['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2760);

$output2755 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2756, $renderChildrenClosure2757, $renderingContext);

$output2755 .= '
              ';
return $output2755;
};
$arguments2750 = array();
$arguments2750['then'] = NULL;
$arguments2750['else'] = NULL;
$arguments2750['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2752 = array();
$array2753 = array (
);$array2752['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2753);

$expression2754 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2750['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2754(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2752)
					),
					$renderingContext
				);
$arguments2750['__thenClosure'] = $renderChildrenClosure2751;

$output2749 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2750, $renderChildrenClosure2751, $renderingContext);

$output2749 .= '
            ';
return $output2749;
};
$arguments2747 = array();
$arguments2747['if'] = NULL;

$output2725 .= '';

$output2725 .= '
          ';
return $output2725;
};
$arguments2689 = array();
$arguments2689['then'] = NULL;
$arguments2689['else'] = NULL;
$arguments2689['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2722 = array();
$array2723 = array (
);$array2722['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2723);

$expression2724 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2689['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2724(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2722)
					),
					$renderingContext
				);
$arguments2689['__thenClosure'] = function() use ($renderingContext, $self) {
$output2691 = '';

$output2691 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2693 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2692 = array();
$arguments2692['additionalAttributes'] = NULL;
$arguments2692['data'] = NULL;
$arguments2692['class'] = NULL;
$arguments2692['dir'] = NULL;
$arguments2692['id'] = NULL;
$arguments2692['lang'] = NULL;
$arguments2692['style'] = NULL;
$arguments2692['title'] = NULL;
$arguments2692['accesskey'] = NULL;
$arguments2692['tabindex'] = NULL;
$arguments2692['onclick'] = NULL;
$arguments2692['alt'] = NULL;
$arguments2692['file'] = NULL;
$arguments2692['additionalConfig'] = array (
);
$arguments2692['width'] = NULL;
$arguments2692['height'] = NULL;
$arguments2692['cropVariant'] = 'default';
$arguments2692['class'] = 'img-responsive';
$array2694 = array (
);$arguments2692['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2694);
$array2695 = array (
);$arguments2692['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2695);
$array2696 = array (
);$arguments2692['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2696);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2698 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2697 = array();
$arguments2697['then'] = NULL;
$arguments2697['else'] = NULL;
$arguments2697['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2699 = array();
$array2700 = array (
);$array2699['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2700);

$expression2701 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2697['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2701(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2699)
					),
					$renderingContext
				);
$array2702 = array (
);$arguments2697['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2702);
$array2703 = array (
);$arguments2697['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2703);
$arguments2692['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2697, $renderChildrenClosure2698, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2705 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2704 = array();
$arguments2704['then'] = NULL;
$arguments2704['else'] = NULL;
$arguments2704['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2706 = array();
$array2707 = array (
);$array2706['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2707);

$expression2708 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2704['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2708(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2706)
					),
					$renderingContext
				);
$array2709 = array (
);$arguments2704['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2709);
$arguments2704['else'] = '';
$arguments2692['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2704, $renderChildrenClosure2705, $renderingContext);

$output2691 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2692, $renderChildrenClosure2693, $renderingContext);

$output2691 .= '
            ';
return $output2691;
};
$arguments2689['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2710 = '';

$output2710 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2712 = function() use ($renderingContext, $self) {
$output2716 = '';

$output2716 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2718 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2717 = array();
$arguments2717['additionalAttributes'] = NULL;
$arguments2717['data'] = NULL;
$arguments2717['class'] = NULL;
$arguments2717['dir'] = NULL;
$arguments2717['id'] = NULL;
$arguments2717['lang'] = NULL;
$arguments2717['style'] = NULL;
$arguments2717['title'] = NULL;
$arguments2717['accesskey'] = NULL;
$arguments2717['tabindex'] = NULL;
$arguments2717['onclick'] = NULL;
$arguments2717['alt'] = NULL;
$arguments2717['ismap'] = NULL;
$arguments2717['longdesc'] = NULL;
$arguments2717['usemap'] = NULL;
$arguments2717['src'] = NULL;
$arguments2717['treatIdAsReference'] = NULL;
$arguments2717['image'] = NULL;
$arguments2717['crop'] = NULL;
$arguments2717['cropVariant'] = 'default';
$arguments2717['width'] = NULL;
$arguments2717['height'] = NULL;
$arguments2717['minWidth'] = NULL;
$arguments2717['minHeight'] = NULL;
$arguments2717['maxWidth'] = NULL;
$arguments2717['maxHeight'] = NULL;
$arguments2717['absolute'] = false;
$arguments2717['class'] = 'img-responsive';
$array2719 = array (
);$arguments2717['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2719);
$arguments2717['title'] = '';
$arguments2717['alt'] = '';
$array2720 = array (
);$arguments2717['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2720);
$array2721 = array (
);$arguments2717['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2721);

$output2716 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2717, $renderChildrenClosure2718, $renderingContext);

$output2716 .= '
              ';
return $output2716;
};
$arguments2711 = array();
$arguments2711['then'] = NULL;
$arguments2711['else'] = NULL;
$arguments2711['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2713 = array();
$array2714 = array (
);$array2713['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2714);

$expression2715 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2711['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2715(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2713)
					),
					$renderingContext
				);
$arguments2711['__thenClosure'] = $renderChildrenClosure2712;

$output2710 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2711, $renderChildrenClosure2712, $renderingContext);

$output2710 .= '
            ';
return $output2710;
};

$output2688 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2689, $renderChildrenClosure2690, $renderingContext);

$output2688 .= '   
	  
 </div>
   </div>
 <div class="col-sm-12 member-txt">
                                    <div class="article-content" >
                              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper
$renderChildrenClosure2762 = function() use ($renderingContext, $self) {
$array2763 = array (
);return $renderingContext->getVariableProvider()->getByPath('newsItem.bodytext', $array2763);
};
$arguments2761 = array();
$arguments2761['parseFuncTSPath'] = 'lib.parseFunc_RTE';

$output2688 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlViewHelper::renderStatic($arguments2761, $renderChildrenClosure2762, $renderingContext);

$output2688 .= '
                                   
                                    </div>
                                </div>
         </div>
         </div>
                  
							    ';
return $output2688;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2686, $renderChildrenClosure2687, $renderingContext);

$output0 .= ' 
  

     <!-- Unvestment box section -->
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2847 = function() use ($renderingContext, $self) {
$output2925 = '';

$output2925 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2927 = function() use ($renderingContext, $self) {
$output2928 = '';

$output2928 .= '

<div class="col-sm-6 "> 
<div class="investBox"> 
<div class="investLogo">
                          
	
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2930 = function() use ($renderingContext, $self) {
$output2965 = '';

$output2965 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2967 = function() use ($renderingContext, $self) {
$output2968 = '';

$output2968 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2970 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2969 = array();
$arguments2969['additionalAttributes'] = NULL;
$arguments2969['data'] = NULL;
$arguments2969['class'] = NULL;
$arguments2969['dir'] = NULL;
$arguments2969['id'] = NULL;
$arguments2969['lang'] = NULL;
$arguments2969['style'] = NULL;
$arguments2969['title'] = NULL;
$arguments2969['accesskey'] = NULL;
$arguments2969['tabindex'] = NULL;
$arguments2969['onclick'] = NULL;
$arguments2969['alt'] = NULL;
$arguments2969['file'] = NULL;
$arguments2969['additionalConfig'] = array (
);
$arguments2969['width'] = NULL;
$arguments2969['height'] = NULL;
$arguments2969['cropVariant'] = 'default';
$arguments2969['class'] = 'img-responsive';
$array2971 = array (
);$arguments2969['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2971);
$array2972 = array (
);$arguments2969['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2972);
$array2973 = array (
);$arguments2969['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2973);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2975 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2974 = array();
$arguments2974['then'] = NULL;
$arguments2974['else'] = NULL;
$arguments2974['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2976 = array();
$array2977 = array (
);$array2976['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2977);

$expression2978 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2974['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2978(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2976)
					),
					$renderingContext
				);
$array2979 = array (
);$arguments2974['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2979);
$array2980 = array (
);$arguments2974['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2980);
$arguments2969['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2974, $renderChildrenClosure2975, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2982 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2981 = array();
$arguments2981['then'] = NULL;
$arguments2981['else'] = NULL;
$arguments2981['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2983 = array();
$array2984 = array (
);$array2983['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2984);

$expression2985 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2981['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2985(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2983)
					),
					$renderingContext
				);
$array2986 = array (
);$arguments2981['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2986);
$arguments2981['else'] = '';
$arguments2969['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2981, $renderChildrenClosure2982, $renderingContext);

$output2968 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2969, $renderChildrenClosure2970, $renderingContext);

$output2968 .= '
            ';
return $output2968;
};
$arguments2966 = array();

$output2965 .= '';

$output2965 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2988 = function() use ($renderingContext, $self) {
$output2989 = '';

$output2989 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2991 = function() use ($renderingContext, $self) {
$output2995 = '';

$output2995 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2997 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2996 = array();
$arguments2996['additionalAttributes'] = NULL;
$arguments2996['data'] = NULL;
$arguments2996['class'] = NULL;
$arguments2996['dir'] = NULL;
$arguments2996['id'] = NULL;
$arguments2996['lang'] = NULL;
$arguments2996['style'] = NULL;
$arguments2996['title'] = NULL;
$arguments2996['accesskey'] = NULL;
$arguments2996['tabindex'] = NULL;
$arguments2996['onclick'] = NULL;
$arguments2996['alt'] = NULL;
$arguments2996['ismap'] = NULL;
$arguments2996['longdesc'] = NULL;
$arguments2996['usemap'] = NULL;
$arguments2996['src'] = NULL;
$arguments2996['treatIdAsReference'] = NULL;
$arguments2996['image'] = NULL;
$arguments2996['crop'] = NULL;
$arguments2996['cropVariant'] = 'default';
$arguments2996['width'] = NULL;
$arguments2996['height'] = NULL;
$arguments2996['minWidth'] = NULL;
$arguments2996['minHeight'] = NULL;
$arguments2996['maxWidth'] = NULL;
$arguments2996['maxHeight'] = NULL;
$arguments2996['absolute'] = false;
$arguments2996['class'] = 'img-responsive';
$array2998 = array (
);$arguments2996['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2998);
$arguments2996['title'] = '';
$arguments2996['alt'] = '';
$array2999 = array (
);$arguments2996['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2999);
$array3000 = array (
);$arguments2996['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array3000);

$output2995 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2996, $renderChildrenClosure2997, $renderingContext);

$output2995 .= '
              ';
return $output2995;
};
$arguments2990 = array();
$arguments2990['then'] = NULL;
$arguments2990['else'] = NULL;
$arguments2990['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2992 = array();
$array2993 = array (
);$array2992['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2993);

$expression2994 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2990['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2994(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2992)
					),
					$renderingContext
				);
$arguments2990['__thenClosure'] = $renderChildrenClosure2991;

$output2989 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2990, $renderChildrenClosure2991, $renderingContext);

$output2989 .= '
            ';
return $output2989;
};
$arguments2987 = array();
$arguments2987['if'] = NULL;

$output2965 .= '';

$output2965 .= '
          ';
return $output2965;
};
$arguments2929 = array();
$arguments2929['then'] = NULL;
$arguments2929['else'] = NULL;
$arguments2929['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2962 = array();
$array2963 = array (
);$array2962['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2963);

$expression2964 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2929['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2964(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2962)
					),
					$renderingContext
				);
$arguments2929['__thenClosure'] = function() use ($renderingContext, $self) {
$output2931 = '';

$output2931 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2933 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2932 = array();
$arguments2932['additionalAttributes'] = NULL;
$arguments2932['data'] = NULL;
$arguments2932['class'] = NULL;
$arguments2932['dir'] = NULL;
$arguments2932['id'] = NULL;
$arguments2932['lang'] = NULL;
$arguments2932['style'] = NULL;
$arguments2932['title'] = NULL;
$arguments2932['accesskey'] = NULL;
$arguments2932['tabindex'] = NULL;
$arguments2932['onclick'] = NULL;
$arguments2932['alt'] = NULL;
$arguments2932['file'] = NULL;
$arguments2932['additionalConfig'] = array (
);
$arguments2932['width'] = NULL;
$arguments2932['height'] = NULL;
$arguments2932['cropVariant'] = 'default';
$arguments2932['class'] = 'img-responsive';
$array2934 = array (
);$arguments2932['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2934);
$array2935 = array (
);$arguments2932['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2935);
$array2936 = array (
);$arguments2932['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2936);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2937 = array();
$arguments2937['then'] = NULL;
$arguments2937['else'] = NULL;
$arguments2937['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2939 = array();
$array2940 = array (
);$array2939['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2940);

$expression2941 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2937['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2941(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2939)
					),
					$renderingContext
				);
$array2942 = array (
);$arguments2937['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2942);
$array2943 = array (
);$arguments2937['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2943);
$arguments2932['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2937, $renderChildrenClosure2938, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2945 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2944 = array();
$arguments2944['then'] = NULL;
$arguments2944['else'] = NULL;
$arguments2944['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2946 = array();
$array2947 = array (
);$array2946['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2947);

$expression2948 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2944['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2948(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2946)
					),
					$renderingContext
				);
$array2949 = array (
);$arguments2944['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2949);
$arguments2944['else'] = '';
$arguments2932['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2944, $renderChildrenClosure2945, $renderingContext);

$output2931 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2932, $renderChildrenClosure2933, $renderingContext);

$output2931 .= '
            ';
return $output2931;
};
$arguments2929['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2950 = '';

$output2950 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2952 = function() use ($renderingContext, $self) {
$output2956 = '';

$output2956 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2958 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2957 = array();
$arguments2957['additionalAttributes'] = NULL;
$arguments2957['data'] = NULL;
$arguments2957['class'] = NULL;
$arguments2957['dir'] = NULL;
$arguments2957['id'] = NULL;
$arguments2957['lang'] = NULL;
$arguments2957['style'] = NULL;
$arguments2957['title'] = NULL;
$arguments2957['accesskey'] = NULL;
$arguments2957['tabindex'] = NULL;
$arguments2957['onclick'] = NULL;
$arguments2957['alt'] = NULL;
$arguments2957['ismap'] = NULL;
$arguments2957['longdesc'] = NULL;
$arguments2957['usemap'] = NULL;
$arguments2957['src'] = NULL;
$arguments2957['treatIdAsReference'] = NULL;
$arguments2957['image'] = NULL;
$arguments2957['crop'] = NULL;
$arguments2957['cropVariant'] = 'default';
$arguments2957['width'] = NULL;
$arguments2957['height'] = NULL;
$arguments2957['minWidth'] = NULL;
$arguments2957['minHeight'] = NULL;
$arguments2957['maxWidth'] = NULL;
$arguments2957['maxHeight'] = NULL;
$arguments2957['absolute'] = false;
$arguments2957['class'] = 'img-responsive';
$array2959 = array (
);$arguments2957['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2959);
$arguments2957['title'] = '';
$arguments2957['alt'] = '';
$array2960 = array (
);$arguments2957['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2960);
$array2961 = array (
);$arguments2957['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2961);

$output2956 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2957, $renderChildrenClosure2958, $renderingContext);

$output2956 .= '
              ';
return $output2956;
};
$arguments2951 = array();
$arguments2951['then'] = NULL;
$arguments2951['else'] = NULL;
$arguments2951['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2953 = array();
$array2954 = array (
);$array2953['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2954);

$expression2955 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2951['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2955(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2953)
					),
					$renderingContext
				);
$arguments2951['__thenClosure'] = $renderChildrenClosure2952;

$output2950 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2951, $renderChildrenClosure2952, $renderingContext);

$output2950 .= '
            ';
return $output2950;
};

$output2928 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2929, $renderChildrenClosure2930, $renderingContext);

$output2928 .= '   
	  
 </div>
   </div>
 <div class="col-sm-12 invest-txt">
                                    <div class="article-content" >
                             ';
$array3001 = array (
);
$output2928 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3001)]);

$output2928 .= ' 
                                   
                                    </div>
                                </div>
         </div>
 ';
return $output2928;
};
$arguments2926 = array();

$output2925 .= '';

$output2925 .= '

  ';
return $output2925;
};
$arguments2846 = array();
$arguments2846['then'] = NULL;
$arguments2846['else'] = NULL;
$arguments2846['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2922 = array();
$array2923 = array (
);$array2922['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array2923);
$array2922['1'] = ' == 22';

$expression2924 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 22);};
$arguments2846['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2924(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2922)
					),
					$renderingContext
				);
$arguments2846['__thenClosure'] = function() use ($renderingContext, $self) {
$output2848 = '';

$output2848 .= '

<div class="col-sm-6 "> 
<div class="investBox"> 
<div class="investLogo">
                          
	
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2850 = function() use ($renderingContext, $self) {
$output2885 = '';

$output2885 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure2887 = function() use ($renderingContext, $self) {
$output2888 = '';

$output2888 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2889 = array();
$arguments2889['additionalAttributes'] = NULL;
$arguments2889['data'] = NULL;
$arguments2889['class'] = NULL;
$arguments2889['dir'] = NULL;
$arguments2889['id'] = NULL;
$arguments2889['lang'] = NULL;
$arguments2889['style'] = NULL;
$arguments2889['title'] = NULL;
$arguments2889['accesskey'] = NULL;
$arguments2889['tabindex'] = NULL;
$arguments2889['onclick'] = NULL;
$arguments2889['alt'] = NULL;
$arguments2889['file'] = NULL;
$arguments2889['additionalConfig'] = array (
);
$arguments2889['width'] = NULL;
$arguments2889['height'] = NULL;
$arguments2889['cropVariant'] = 'default';
$arguments2889['class'] = 'img-responsive';
$array2891 = array (
);$arguments2889['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2891);
$array2892 = array (
);$arguments2889['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2892);
$array2893 = array (
);$arguments2889['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2893);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2895 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2894 = array();
$arguments2894['then'] = NULL;
$arguments2894['else'] = NULL;
$arguments2894['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2896 = array();
$array2897 = array (
);$array2896['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2897);

$expression2898 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2894['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2898(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2896)
					),
					$renderingContext
				);
$array2899 = array (
);$arguments2894['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2899);
$array2900 = array (
);$arguments2894['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2900);
$arguments2889['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2894, $renderChildrenClosure2895, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2902 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2901 = array();
$arguments2901['then'] = NULL;
$arguments2901['else'] = NULL;
$arguments2901['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2903 = array();
$array2904 = array (
);$array2903['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2904);

$expression2905 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2901['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2905(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2903)
					),
					$renderingContext
				);
$array2906 = array (
);$arguments2901['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2906);
$arguments2901['else'] = '';
$arguments2889['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2901, $renderChildrenClosure2902, $renderingContext);

$output2888 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2889, $renderChildrenClosure2890, $renderingContext);

$output2888 .= '
            ';
return $output2888;
};
$arguments2886 = array();

$output2885 .= '';

$output2885 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure2908 = function() use ($renderingContext, $self) {
$output2909 = '';

$output2909 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2911 = function() use ($renderingContext, $self) {
$output2915 = '';

$output2915 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2917 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2916 = array();
$arguments2916['additionalAttributes'] = NULL;
$arguments2916['data'] = NULL;
$arguments2916['class'] = NULL;
$arguments2916['dir'] = NULL;
$arguments2916['id'] = NULL;
$arguments2916['lang'] = NULL;
$arguments2916['style'] = NULL;
$arguments2916['title'] = NULL;
$arguments2916['accesskey'] = NULL;
$arguments2916['tabindex'] = NULL;
$arguments2916['onclick'] = NULL;
$arguments2916['alt'] = NULL;
$arguments2916['ismap'] = NULL;
$arguments2916['longdesc'] = NULL;
$arguments2916['usemap'] = NULL;
$arguments2916['src'] = NULL;
$arguments2916['treatIdAsReference'] = NULL;
$arguments2916['image'] = NULL;
$arguments2916['crop'] = NULL;
$arguments2916['cropVariant'] = 'default';
$arguments2916['width'] = NULL;
$arguments2916['height'] = NULL;
$arguments2916['minWidth'] = NULL;
$arguments2916['minHeight'] = NULL;
$arguments2916['maxWidth'] = NULL;
$arguments2916['maxHeight'] = NULL;
$arguments2916['absolute'] = false;
$arguments2916['class'] = 'img-responsive';
$array2918 = array (
);$arguments2916['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2918);
$arguments2916['title'] = '';
$arguments2916['alt'] = '';
$array2919 = array (
);$arguments2916['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2919);
$array2920 = array (
);$arguments2916['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2920);

$output2915 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2916, $renderChildrenClosure2917, $renderingContext);

$output2915 .= '
              ';
return $output2915;
};
$arguments2910 = array();
$arguments2910['then'] = NULL;
$arguments2910['else'] = NULL;
$arguments2910['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2912 = array();
$array2913 = array (
);$array2912['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2913);

$expression2914 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2910['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2914(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2912)
					),
					$renderingContext
				);
$arguments2910['__thenClosure'] = $renderChildrenClosure2911;

$output2909 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2910, $renderChildrenClosure2911, $renderingContext);

$output2909 .= '
            ';
return $output2909;
};
$arguments2907 = array();
$arguments2907['if'] = NULL;

$output2885 .= '';

$output2885 .= '
          ';
return $output2885;
};
$arguments2849 = array();
$arguments2849['then'] = NULL;
$arguments2849['else'] = NULL;
$arguments2849['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2882 = array();
$array2883 = array (
);$array2882['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array2883);

$expression2884 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2849['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2884(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2882)
					),
					$renderingContext
				);
$arguments2849['__thenClosure'] = function() use ($renderingContext, $self) {
$output2851 = '';

$output2851 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure2853 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2852 = array();
$arguments2852['additionalAttributes'] = NULL;
$arguments2852['data'] = NULL;
$arguments2852['class'] = NULL;
$arguments2852['dir'] = NULL;
$arguments2852['id'] = NULL;
$arguments2852['lang'] = NULL;
$arguments2852['style'] = NULL;
$arguments2852['title'] = NULL;
$arguments2852['accesskey'] = NULL;
$arguments2852['tabindex'] = NULL;
$arguments2852['onclick'] = NULL;
$arguments2852['alt'] = NULL;
$arguments2852['file'] = NULL;
$arguments2852['additionalConfig'] = array (
);
$arguments2852['width'] = NULL;
$arguments2852['height'] = NULL;
$arguments2852['cropVariant'] = 'default';
$arguments2852['class'] = 'img-responsive';
$array2854 = array (
);$arguments2852['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array2854);
$array2855 = array (
);$arguments2852['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array2855);
$array2856 = array (
);$arguments2852['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array2856);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2857 = array();
$arguments2857['then'] = NULL;
$arguments2857['else'] = NULL;
$arguments2857['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2859 = array();
$array2860 = array (
);$array2859['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2860);

$expression2861 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2857['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2861(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2859)
					),
					$renderingContext
				);
$array2862 = array (
);$arguments2857['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array2862);
$array2863 = array (
);$arguments2857['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array2863);
$arguments2852['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2857, $renderChildrenClosure2858, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2865 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2864 = array();
$arguments2864['then'] = NULL;
$arguments2864['else'] = NULL;
$arguments2864['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2866 = array();
$array2867 = array (
);$array2866['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2867);

$expression2868 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2864['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2868(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2866)
					),
					$renderingContext
				);
$array2869 = array (
);$arguments2864['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array2869);
$arguments2864['else'] = '';
$arguments2852['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2864, $renderChildrenClosure2865, $renderingContext);

$output2851 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments2852, $renderChildrenClosure2853, $renderingContext);

$output2851 .= '
            ';
return $output2851;
};
$arguments2849['__elseClosures'][] = function() use ($renderingContext, $self) {
$output2870 = '';

$output2870 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2872 = function() use ($renderingContext, $self) {
$output2876 = '';

$output2876 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure2878 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2877 = array();
$arguments2877['additionalAttributes'] = NULL;
$arguments2877['data'] = NULL;
$arguments2877['class'] = NULL;
$arguments2877['dir'] = NULL;
$arguments2877['id'] = NULL;
$arguments2877['lang'] = NULL;
$arguments2877['style'] = NULL;
$arguments2877['title'] = NULL;
$arguments2877['accesskey'] = NULL;
$arguments2877['tabindex'] = NULL;
$arguments2877['onclick'] = NULL;
$arguments2877['alt'] = NULL;
$arguments2877['ismap'] = NULL;
$arguments2877['longdesc'] = NULL;
$arguments2877['usemap'] = NULL;
$arguments2877['src'] = NULL;
$arguments2877['treatIdAsReference'] = NULL;
$arguments2877['image'] = NULL;
$arguments2877['crop'] = NULL;
$arguments2877['cropVariant'] = 'default';
$arguments2877['width'] = NULL;
$arguments2877['height'] = NULL;
$arguments2877['minWidth'] = NULL;
$arguments2877['minHeight'] = NULL;
$arguments2877['maxWidth'] = NULL;
$arguments2877['maxHeight'] = NULL;
$arguments2877['absolute'] = false;
$arguments2877['class'] = 'img-responsive';
$array2879 = array (
);$arguments2877['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array2879);
$arguments2877['title'] = '';
$arguments2877['alt'] = '';
$array2880 = array (
);$arguments2877['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array2880);
$array2881 = array (
);$arguments2877['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array2881);

$output2876 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments2877, $renderChildrenClosure2878, $renderingContext);

$output2876 .= '
              ';
return $output2876;
};
$arguments2871 = array();
$arguments2871['then'] = NULL;
$arguments2871['else'] = NULL;
$arguments2871['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array2873 = array();
$array2874 = array (
);$array2873['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array2874);

$expression2875 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2871['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression2875(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2873)
					),
					$renderingContext
				);
$arguments2871['__thenClosure'] = $renderChildrenClosure2872;

$output2870 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2871, $renderChildrenClosure2872, $renderingContext);

$output2870 .= '
            ';
return $output2870;
};

$output2848 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2849, $renderChildrenClosure2850, $renderingContext);

$output2848 .= '   
	  
 </div>
   </div>
 <div class="col-sm-12 invest-txt">
                                    <div class="article-content" >
                             ';
$array2921 = array (
);
$output2848 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array2921)]);

$output2848 .= ' 
                                   
                                    </div>
                                </div>
         </div>
 ';
return $output2848;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2846, $renderChildrenClosure2847, $renderingContext);

$output0 .= ' 

<!-- History related box section -->
   ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3003 = function() use ($renderingContext, $self) {
$output3093 = '';

$output3093 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure3095 = function() use ($renderingContext, $self) {
$output3096 = '';

$output3096 .= '
<div class="col-sm-6 historyrelated "> 
<div class="col-sm-6 historyrelated-size"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure3098 = function() use ($renderingContext, $self) {
$output3102 = '';

$output3102 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3104 = function() use ($renderingContext, $self) {
$output3139 = '';

$output3139 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure3141 = function() use ($renderingContext, $self) {
$output3142 = '';

$output3142 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure3144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3143 = array();
$arguments3143['additionalAttributes'] = NULL;
$arguments3143['data'] = NULL;
$arguments3143['class'] = NULL;
$arguments3143['dir'] = NULL;
$arguments3143['id'] = NULL;
$arguments3143['lang'] = NULL;
$arguments3143['style'] = NULL;
$arguments3143['title'] = NULL;
$arguments3143['accesskey'] = NULL;
$arguments3143['tabindex'] = NULL;
$arguments3143['onclick'] = NULL;
$arguments3143['alt'] = NULL;
$arguments3143['file'] = NULL;
$arguments3143['additionalConfig'] = array (
);
$arguments3143['width'] = NULL;
$arguments3143['height'] = NULL;
$arguments3143['cropVariant'] = 'default';
$arguments3143['class'] = 'img-responsive';
$array3145 = array (
);$arguments3143['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array3145);
$array3146 = array (
);$arguments3143['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array3146);
$array3147 = array (
);$arguments3143['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array3147);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3148 = array();
$arguments3148['then'] = NULL;
$arguments3148['else'] = NULL;
$arguments3148['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3150 = array();
$array3151 = array (
);$array3150['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3151);

$expression3152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3148['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3152(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3150)
					),
					$renderingContext
				);
$array3153 = array (
);$arguments3148['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3153);
$array3154 = array (
);$arguments3148['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array3154);
$arguments3143['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3148, $renderChildrenClosure3149, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3155 = array();
$arguments3155['then'] = NULL;
$arguments3155['else'] = NULL;
$arguments3155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3157 = array();
$array3158 = array (
);$array3157['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3158);

$expression3159 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3157)
					),
					$renderingContext
				);
$array3160 = array (
);$arguments3155['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3160);
$arguments3155['else'] = '';
$arguments3143['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3155, $renderChildrenClosure3156, $renderingContext);

$output3142 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments3143, $renderChildrenClosure3144, $renderingContext);

$output3142 .= '
            ';
return $output3142;
};
$arguments3140 = array();

$output3139 .= '';

$output3139 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure3162 = function() use ($renderingContext, $self) {
$output3163 = '';

$output3163 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3165 = function() use ($renderingContext, $self) {
$output3169 = '';

$output3169 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure3171 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3170 = array();
$arguments3170['additionalAttributes'] = NULL;
$arguments3170['data'] = NULL;
$arguments3170['class'] = NULL;
$arguments3170['dir'] = NULL;
$arguments3170['id'] = NULL;
$arguments3170['lang'] = NULL;
$arguments3170['style'] = NULL;
$arguments3170['title'] = NULL;
$arguments3170['accesskey'] = NULL;
$arguments3170['tabindex'] = NULL;
$arguments3170['onclick'] = NULL;
$arguments3170['alt'] = NULL;
$arguments3170['ismap'] = NULL;
$arguments3170['longdesc'] = NULL;
$arguments3170['usemap'] = NULL;
$arguments3170['src'] = NULL;
$arguments3170['treatIdAsReference'] = NULL;
$arguments3170['image'] = NULL;
$arguments3170['crop'] = NULL;
$arguments3170['cropVariant'] = 'default';
$arguments3170['width'] = NULL;
$arguments3170['height'] = NULL;
$arguments3170['minWidth'] = NULL;
$arguments3170['minHeight'] = NULL;
$arguments3170['maxWidth'] = NULL;
$arguments3170['maxHeight'] = NULL;
$arguments3170['absolute'] = false;
$arguments3170['class'] = 'img-responsive';
$array3172 = array (
);$arguments3170['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array3172);
$arguments3170['title'] = '';
$arguments3170['alt'] = '';
$array3173 = array (
);$arguments3170['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array3173);
$array3174 = array (
);$arguments3170['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array3174);

$output3169 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments3170, $renderChildrenClosure3171, $renderingContext);

$output3169 .= '
              ';
return $output3169;
};
$arguments3164 = array();
$arguments3164['then'] = NULL;
$arguments3164['else'] = NULL;
$arguments3164['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3166 = array();
$array3167 = array (
);$array3166['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array3167);

$expression3168 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3164['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3168(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3166)
					),
					$renderingContext
				);
$arguments3164['__thenClosure'] = $renderChildrenClosure3165;

$output3163 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3164, $renderChildrenClosure3165, $renderingContext);

$output3163 .= '
            ';
return $output3163;
};
$arguments3161 = array();
$arguments3161['if'] = NULL;

$output3139 .= '';

$output3139 .= '
          ';
return $output3139;
};
$arguments3103 = array();
$arguments3103['then'] = NULL;
$arguments3103['else'] = NULL;
$arguments3103['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3136 = array();
$array3137 = array (
);$array3136['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array3137);

$expression3138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3103['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3136)
					),
					$renderingContext
				);
$arguments3103['__thenClosure'] = function() use ($renderingContext, $self) {
$output3105 = '';

$output3105 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure3107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3106 = array();
$arguments3106['additionalAttributes'] = NULL;
$arguments3106['data'] = NULL;
$arguments3106['class'] = NULL;
$arguments3106['dir'] = NULL;
$arguments3106['id'] = NULL;
$arguments3106['lang'] = NULL;
$arguments3106['style'] = NULL;
$arguments3106['title'] = NULL;
$arguments3106['accesskey'] = NULL;
$arguments3106['tabindex'] = NULL;
$arguments3106['onclick'] = NULL;
$arguments3106['alt'] = NULL;
$arguments3106['file'] = NULL;
$arguments3106['additionalConfig'] = array (
);
$arguments3106['width'] = NULL;
$arguments3106['height'] = NULL;
$arguments3106['cropVariant'] = 'default';
$arguments3106['class'] = 'img-responsive';
$array3108 = array (
);$arguments3106['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array3108);
$array3109 = array (
);$arguments3106['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array3109);
$array3110 = array (
);$arguments3106['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array3110);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3111 = array();
$arguments3111['then'] = NULL;
$arguments3111['else'] = NULL;
$arguments3111['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3113 = array();
$array3114 = array (
);$array3113['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3114);

$expression3115 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3111['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3115(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3113)
					),
					$renderingContext
				);
$array3116 = array (
);$arguments3111['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3116);
$array3117 = array (
);$arguments3111['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array3117);
$arguments3106['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3111, $renderChildrenClosure3112, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3118 = array();
$arguments3118['then'] = NULL;
$arguments3118['else'] = NULL;
$arguments3118['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3120 = array();
$array3121 = array (
);$array3120['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3121);

$expression3122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3118['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3122(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3120)
					),
					$renderingContext
				);
$array3123 = array (
);$arguments3118['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3123);
$arguments3118['else'] = '';
$arguments3106['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3118, $renderChildrenClosure3119, $renderingContext);

$output3105 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments3106, $renderChildrenClosure3107, $renderingContext);

$output3105 .= '
            ';
return $output3105;
};
$arguments3103['__elseClosures'][] = function() use ($renderingContext, $self) {
$output3124 = '';

$output3124 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3126 = function() use ($renderingContext, $self) {
$output3130 = '';

$output3130 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure3132 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3131 = array();
$arguments3131['additionalAttributes'] = NULL;
$arguments3131['data'] = NULL;
$arguments3131['class'] = NULL;
$arguments3131['dir'] = NULL;
$arguments3131['id'] = NULL;
$arguments3131['lang'] = NULL;
$arguments3131['style'] = NULL;
$arguments3131['title'] = NULL;
$arguments3131['accesskey'] = NULL;
$arguments3131['tabindex'] = NULL;
$arguments3131['onclick'] = NULL;
$arguments3131['alt'] = NULL;
$arguments3131['ismap'] = NULL;
$arguments3131['longdesc'] = NULL;
$arguments3131['usemap'] = NULL;
$arguments3131['src'] = NULL;
$arguments3131['treatIdAsReference'] = NULL;
$arguments3131['image'] = NULL;
$arguments3131['crop'] = NULL;
$arguments3131['cropVariant'] = 'default';
$arguments3131['width'] = NULL;
$arguments3131['height'] = NULL;
$arguments3131['minWidth'] = NULL;
$arguments3131['minHeight'] = NULL;
$arguments3131['maxWidth'] = NULL;
$arguments3131['maxHeight'] = NULL;
$arguments3131['absolute'] = false;
$arguments3131['class'] = 'img-responsive';
$array3133 = array (
);$arguments3131['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array3133);
$arguments3131['title'] = '';
$arguments3131['alt'] = '';
$array3134 = array (
);$arguments3131['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array3134);
$array3135 = array (
);$arguments3131['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array3135);

$output3130 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments3131, $renderChildrenClosure3132, $renderingContext);

$output3130 .= '
              ';
return $output3130;
};
$arguments3125 = array();
$arguments3125['then'] = NULL;
$arguments3125['else'] = NULL;
$arguments3125['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3127 = array();
$array3128 = array (
);$array3127['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array3128);

$expression3129 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3125['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3129(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3127)
					),
					$renderingContext
				);
$arguments3125['__thenClosure'] = $renderChildrenClosure3126;

$output3124 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3125, $renderChildrenClosure3126, $renderingContext);

$output3124 .= '
            ';
return $output3124;
};

$output3102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3103, $renderChildrenClosure3104, $renderingContext);

$output3102 .= '   
	 ';
return $output3102;
};
$arguments3097 = array();
$arguments3097['additionalAttributes'] = NULL;
$arguments3097['data'] = NULL;
$arguments3097['class'] = NULL;
$arguments3097['dir'] = NULL;
$arguments3097['id'] = NULL;
$arguments3097['lang'] = NULL;
$arguments3097['style'] = NULL;
$arguments3097['title'] = NULL;
$arguments3097['accesskey'] = NULL;
$arguments3097['tabindex'] = NULL;
$arguments3097['onclick'] = NULL;
$arguments3097['newsItem'] = NULL;
$arguments3097['settings'] = array (
);
$arguments3097['uriOnly'] = false;
$arguments3097['configuration'] = array (
);
$arguments3097['content'] = '';
$arguments3097['section'] = NULL;
$array3099 = array (
);$arguments3097['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3099);
$array3100 = array (
);$arguments3097['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array3100);
$array3101 = array (
);$arguments3097['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3101);

$output3096 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments3097, $renderChildrenClosure3098, $renderingContext);

$output3096 .= '	  
 </div>
  </div>
    </div>
 <div class="col-sm-6 news-txt">
                                    <div class="article-content">
                                        <h5>';
$array3175 = array (
);
$output3096 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3175)]);

$output3096 .= '</h5>
                                     <span> ';
$array3176 = array (
);
$output3096 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array3176)]);

$output3096 .= '</span>
                                     
                                        <div class="sp-btn" style="margin-top: 30px;">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure3178 = function() use ($renderingContext, $self) {
return 'Read More';
};
$arguments3177 = array();
$arguments3177['additionalAttributes'] = NULL;
$arguments3177['data'] = NULL;
$arguments3177['class'] = NULL;
$arguments3177['dir'] = NULL;
$arguments3177['id'] = NULL;
$arguments3177['lang'] = NULL;
$arguments3177['style'] = NULL;
$arguments3177['title'] = NULL;
$arguments3177['accesskey'] = NULL;
$arguments3177['tabindex'] = NULL;
$arguments3177['onclick'] = NULL;
$arguments3177['newsItem'] = NULL;
$arguments3177['settings'] = array (
);
$arguments3177['uriOnly'] = false;
$arguments3177['configuration'] = array (
);
$arguments3177['content'] = '';
$arguments3177['section'] = NULL;
$array3179 = array (
);$arguments3177['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3179);
$array3180 = array (
);$arguments3177['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array3180);
$array3181 = array (
);$arguments3177['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3181);

$output3096 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments3177, $renderChildrenClosure3178, $renderingContext);

$output3096 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
                              
							    ';
return $output3096;
};
$arguments3094 = array();

$output3093 .= '';

$output3093 .= '
  ';
return $output3093;
};
$arguments3002 = array();
$arguments3002['then'] = NULL;
$arguments3002['else'] = NULL;
$arguments3002['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3090 = array();
$array3091 = array (
);$array3090['0'] = $renderingContext->getVariableProvider()->getByPath('settings.templateLayout', $array3091);
$array3090['1'] = ' == 23';

$expression3092 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 23);};
$arguments3002['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3092(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3090)
					),
					$renderingContext
				);
$arguments3002['__thenClosure'] = function() use ($renderingContext, $self) {
$output3004 = '';

$output3004 .= '
<div class="col-sm-6 historyrelated "> 
<div class="col-sm-6 historyrelated-size"> 
                                <div class="article-wrapper">
                                    <div class="article-thumb">
	 ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure3006 = function() use ($renderingContext, $self) {
$output3010 = '';

$output3010 .= '
	 
	 ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3012 = function() use ($renderingContext, $self) {
$output3047 = '';

$output3047 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure3049 = function() use ($renderingContext, $self) {
$output3050 = '';

$output3050 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure3052 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3051 = array();
$arguments3051['additionalAttributes'] = NULL;
$arguments3051['data'] = NULL;
$arguments3051['class'] = NULL;
$arguments3051['dir'] = NULL;
$arguments3051['id'] = NULL;
$arguments3051['lang'] = NULL;
$arguments3051['style'] = NULL;
$arguments3051['title'] = NULL;
$arguments3051['accesskey'] = NULL;
$arguments3051['tabindex'] = NULL;
$arguments3051['onclick'] = NULL;
$arguments3051['alt'] = NULL;
$arguments3051['file'] = NULL;
$arguments3051['additionalConfig'] = array (
);
$arguments3051['width'] = NULL;
$arguments3051['height'] = NULL;
$arguments3051['cropVariant'] = 'default';
$arguments3051['class'] = 'img-responsive';
$array3053 = array (
);$arguments3051['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array3053);
$array3054 = array (
);$arguments3051['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array3054);
$array3055 = array (
);$arguments3051['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array3055);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3057 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3056 = array();
$arguments3056['then'] = NULL;
$arguments3056['else'] = NULL;
$arguments3056['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3058 = array();
$array3059 = array (
);$array3058['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3059);

$expression3060 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3056['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3060(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3058)
					),
					$renderingContext
				);
$array3061 = array (
);$arguments3056['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3061);
$array3062 = array (
);$arguments3056['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array3062);
$arguments3051['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3056, $renderChildrenClosure3057, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3064 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3063 = array();
$arguments3063['then'] = NULL;
$arguments3063['else'] = NULL;
$arguments3063['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3065 = array();
$array3066 = array (
);$array3065['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3066);

$expression3067 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3063['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3067(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3065)
					),
					$renderingContext
				);
$array3068 = array (
);$arguments3063['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3068);
$arguments3063['else'] = '';
$arguments3051['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3063, $renderChildrenClosure3064, $renderingContext);

$output3050 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments3051, $renderChildrenClosure3052, $renderingContext);

$output3050 .= '
            ';
return $output3050;
};
$arguments3048 = array();

$output3047 .= '';

$output3047 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure3070 = function() use ($renderingContext, $self) {
$output3071 = '';

$output3071 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3073 = function() use ($renderingContext, $self) {
$output3077 = '';

$output3077 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure3079 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3078 = array();
$arguments3078['additionalAttributes'] = NULL;
$arguments3078['data'] = NULL;
$arguments3078['class'] = NULL;
$arguments3078['dir'] = NULL;
$arguments3078['id'] = NULL;
$arguments3078['lang'] = NULL;
$arguments3078['style'] = NULL;
$arguments3078['title'] = NULL;
$arguments3078['accesskey'] = NULL;
$arguments3078['tabindex'] = NULL;
$arguments3078['onclick'] = NULL;
$arguments3078['alt'] = NULL;
$arguments3078['ismap'] = NULL;
$arguments3078['longdesc'] = NULL;
$arguments3078['usemap'] = NULL;
$arguments3078['src'] = NULL;
$arguments3078['treatIdAsReference'] = NULL;
$arguments3078['image'] = NULL;
$arguments3078['crop'] = NULL;
$arguments3078['cropVariant'] = 'default';
$arguments3078['width'] = NULL;
$arguments3078['height'] = NULL;
$arguments3078['minWidth'] = NULL;
$arguments3078['minHeight'] = NULL;
$arguments3078['maxWidth'] = NULL;
$arguments3078['maxHeight'] = NULL;
$arguments3078['absolute'] = false;
$arguments3078['class'] = 'img-responsive';
$array3080 = array (
);$arguments3078['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array3080);
$arguments3078['title'] = '';
$arguments3078['alt'] = '';
$array3081 = array (
);$arguments3078['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array3081);
$array3082 = array (
);$arguments3078['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array3082);

$output3077 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments3078, $renderChildrenClosure3079, $renderingContext);

$output3077 .= '
              ';
return $output3077;
};
$arguments3072 = array();
$arguments3072['then'] = NULL;
$arguments3072['else'] = NULL;
$arguments3072['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3074 = array();
$array3075 = array (
);$array3074['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array3075);

$expression3076 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3072['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3076(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3074)
					),
					$renderingContext
				);
$arguments3072['__thenClosure'] = $renderChildrenClosure3073;

$output3071 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3072, $renderChildrenClosure3073, $renderingContext);

$output3071 .= '
            ';
return $output3071;
};
$arguments3069 = array();
$arguments3069['if'] = NULL;

$output3047 .= '';

$output3047 .= '
          ';
return $output3047;
};
$arguments3011 = array();
$arguments3011['then'] = NULL;
$arguments3011['else'] = NULL;
$arguments3011['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3044 = array();
$array3045 = array (
);$array3044['0'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews', $array3045);

$expression3046 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3011['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3046(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3044)
					),
					$renderingContext
				);
$arguments3011['__thenClosure'] = function() use ($renderingContext, $self) {
$output3013 = '';

$output3013 .= '
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure3015 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3014 = array();
$arguments3014['additionalAttributes'] = NULL;
$arguments3014['data'] = NULL;
$arguments3014['class'] = NULL;
$arguments3014['dir'] = NULL;
$arguments3014['id'] = NULL;
$arguments3014['lang'] = NULL;
$arguments3014['style'] = NULL;
$arguments3014['title'] = NULL;
$arguments3014['accesskey'] = NULL;
$arguments3014['tabindex'] = NULL;
$arguments3014['onclick'] = NULL;
$arguments3014['alt'] = NULL;
$arguments3014['file'] = NULL;
$arguments3014['additionalConfig'] = array (
);
$arguments3014['width'] = NULL;
$arguments3014['height'] = NULL;
$arguments3014['cropVariant'] = 'default';
$arguments3014['class'] = 'img-responsive';
$array3016 = array (
);$arguments3014['file'] = $renderingContext->getVariableProvider()->getByPath('newsItem.mediaPreviews.0', $array3016);
$array3017 = array (
);$arguments3014['title'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.title', $array3017);
$array3018 = array (
);$arguments3014['alt'] = $renderingContext->getVariableProvider()->getByPath('mediaElement.originalResource.alternative', $array3018);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3020 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3019 = array();
$arguments3019['then'] = NULL;
$arguments3019['else'] = NULL;
$arguments3019['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3021 = array();
$array3022 = array (
);$array3021['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3022);

$expression3023 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3019['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3023(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3021)
					),
					$renderingContext
				);
$array3024 = array (
);$arguments3019['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxWidth', $array3024);
$array3025 = array (
);$arguments3019['else'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.width', $array3025);
$arguments3014['width'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3019, $renderChildrenClosure3020, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3027 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3026 = array();
$arguments3026['then'] = NULL;
$arguments3026['else'] = NULL;
$arguments3026['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3028 = array();
$array3029 = array (
);$array3028['0'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3029);

$expression3030 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3026['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3030(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3028)
					),
					$renderingContext
				);
$array3031 = array (
);$arguments3026['then'] = $renderingContext->getVariableProvider()->getByPath('settings.media.maxHeight', $array3031);
$arguments3026['else'] = '';
$arguments3014['height'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3026, $renderChildrenClosure3027, $renderingContext);

$output3013 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments3014, $renderChildrenClosure3015, $renderingContext);

$output3013 .= '
            ';
return $output3013;
};
$arguments3011['__elseClosures'][] = function() use ($renderingContext, $self) {
$output3032 = '';

$output3032 .= '
              ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3034 = function() use ($renderingContext, $self) {
$output3038 = '';

$output3038 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
$renderChildrenClosure3040 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3039 = array();
$arguments3039['additionalAttributes'] = NULL;
$arguments3039['data'] = NULL;
$arguments3039['class'] = NULL;
$arguments3039['dir'] = NULL;
$arguments3039['id'] = NULL;
$arguments3039['lang'] = NULL;
$arguments3039['style'] = NULL;
$arguments3039['title'] = NULL;
$arguments3039['accesskey'] = NULL;
$arguments3039['tabindex'] = NULL;
$arguments3039['onclick'] = NULL;
$arguments3039['alt'] = NULL;
$arguments3039['ismap'] = NULL;
$arguments3039['longdesc'] = NULL;
$arguments3039['usemap'] = NULL;
$arguments3039['src'] = NULL;
$arguments3039['treatIdAsReference'] = NULL;
$arguments3039['image'] = NULL;
$arguments3039['crop'] = NULL;
$arguments3039['cropVariant'] = 'default';
$arguments3039['width'] = NULL;
$arguments3039['height'] = NULL;
$arguments3039['minWidth'] = NULL;
$arguments3039['minHeight'] = NULL;
$arguments3039['maxWidth'] = NULL;
$arguments3039['maxHeight'] = NULL;
$arguments3039['absolute'] = false;
$arguments3039['class'] = 'img-responsive';
$array3041 = array (
);$arguments3039['src'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.dummyImage', $array3041);
$arguments3039['title'] = '';
$arguments3039['alt'] = '';
$array3042 = array (
);$arguments3039['maxWidth'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxWidth', $array3042);
$array3043 = array (
);$arguments3039['maxHeight'] = $renderingContext->getVariableProvider()->getByPath('settings.list.media.image.maxHeight', $array3043);

$output3038 .= TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper::renderStatic($arguments3039, $renderChildrenClosure3040, $renderingContext);

$output3038 .= '
              ';
return $output3038;
};
$arguments3033 = array();
$arguments3033['then'] = NULL;
$arguments3033['else'] = NULL;
$arguments3033['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3035 = array();
$array3036 = array (
);$array3035['0'] = $renderingContext->getVariableProvider()->getByPath('settings.displayDummyIfNoMedia', $array3036);

$expression3037 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3033['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression3037(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3035)
					),
					$renderingContext
				);
$arguments3033['__thenClosure'] = $renderChildrenClosure3034;

$output3032 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3033, $renderChildrenClosure3034, $renderingContext);

$output3032 .= '
            ';
return $output3032;
};

$output3010 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3011, $renderChildrenClosure3012, $renderingContext);

$output3010 .= '   
	 ';
return $output3010;
};
$arguments3005 = array();
$arguments3005['additionalAttributes'] = NULL;
$arguments3005['data'] = NULL;
$arguments3005['class'] = NULL;
$arguments3005['dir'] = NULL;
$arguments3005['id'] = NULL;
$arguments3005['lang'] = NULL;
$arguments3005['style'] = NULL;
$arguments3005['title'] = NULL;
$arguments3005['accesskey'] = NULL;
$arguments3005['tabindex'] = NULL;
$arguments3005['onclick'] = NULL;
$arguments3005['newsItem'] = NULL;
$arguments3005['settings'] = array (
);
$arguments3005['uriOnly'] = false;
$arguments3005['configuration'] = array (
);
$arguments3005['content'] = '';
$arguments3005['section'] = NULL;
$array3007 = array (
);$arguments3005['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3007);
$array3008 = array (
);$arguments3005['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array3008);
$array3009 = array (
);$arguments3005['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3009);

$output3004 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments3005, $renderChildrenClosure3006, $renderingContext);

$output3004 .= '	  
 </div>
  </div>
    </div>
 <div class="col-sm-6 news-txt">
                                    <div class="article-content">
                                        <h5>';
$array3083 = array (
);
$output3004 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3083)]);

$output3004 .= '</h5>
                                     <span> ';
$array3084 = array (
);
$output3004 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('newsItem.teaser', $array3084)]);

$output3004 .= '</span>
                                     
                                        <div class="sp-btn" style="margin-top: 30px;">
                                          ';
// Rendering ViewHelper GeorgRinger\News\ViewHelpers\LinkViewHelper
$renderChildrenClosure3086 = function() use ($renderingContext, $self) {
return 'Read More';
};
$arguments3085 = array();
$arguments3085['additionalAttributes'] = NULL;
$arguments3085['data'] = NULL;
$arguments3085['class'] = NULL;
$arguments3085['dir'] = NULL;
$arguments3085['id'] = NULL;
$arguments3085['lang'] = NULL;
$arguments3085['style'] = NULL;
$arguments3085['title'] = NULL;
$arguments3085['accesskey'] = NULL;
$arguments3085['tabindex'] = NULL;
$arguments3085['onclick'] = NULL;
$arguments3085['newsItem'] = NULL;
$arguments3085['settings'] = array (
);
$arguments3085['uriOnly'] = false;
$arguments3085['configuration'] = array (
);
$arguments3085['content'] = '';
$arguments3085['section'] = NULL;
$array3087 = array (
);$arguments3085['newsItem'] = $renderingContext->getVariableProvider()->getByPath('newsItem', $array3087);
$array3088 = array (
);$arguments3085['settings'] = $renderingContext->getVariableProvider()->getByPath('settings', $array3088);
$array3089 = array (
);$arguments3085['title'] = $renderingContext->getVariableProvider()->getByPath('newsItem.title', $array3089);

$output3004 .= GeorgRinger\News\ViewHelpers\LinkViewHelper::renderStatic($arguments3085, $renderChildrenClosure3086, $renderingContext);

$output3004 .= '	  
                                        </div>
                                    </div>
                                </div>
                          </div>
                              
							    ';
return $output3004;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3002, $renderChildrenClosure3003, $renderingContext);

$output0 .= ' 

';

return $output0;
}


}
#