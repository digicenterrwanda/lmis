<?php

class Standard_action_ResultList_5f6962f0b5090d316eaf16f0fa741e3856692990 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'General';
}
public function hasLayout() {
return TRUE;
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<div class="messsage">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'LLL:EXT:ke_search/pi1/locallang.xml:searchword_length_error';
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('extConf.searchWordLength', $array10);
$arguments7['arguments'] = $array9;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '</div>
	';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('wordsTooShort', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$array19 = array (
);return $renderingContext->getVariableProvider()->getByPath('resultListAdditionalRawContent', $array19);
};
$arguments17 = array();
$arguments17['value'] = NULL;

$output16 .= isset($arguments17['value']) ? $arguments17['value'] : $renderChildrenClosure18();

$output16 .= '
	';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('resultListAdditionalRawContent', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output111 = '';

$output111 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
$output114 = '';

$output114 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output138 = '';

$output138 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
$array141 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array141);
};
$arguments139 = array();
$arguments139['value'] = NULL;

$output138 .= isset($arguments139['value']) ? $arguments139['value'] : $renderChildrenClosure140();

$output138 .= '
				';
return $output138;
};
$arguments136 = array();

$output135 .= '';

$output135 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
$output144 = '';

$output144 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['section'] = NULL;
$arguments145['partial'] = NULL;
$arguments145['delegate'] = NULL;
$arguments145['renderable'] = NULL;
$arguments145['arguments'] = array (
);
$arguments145['optional'] = false;
$arguments145['default'] = NULL;
$arguments145['contentAs'] = NULL;
$arguments145['partial'] = 'ResultRows';
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array148);
$array149 = array (
);$array147['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array149);
$array150 = array (
);$array147['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array150);
$array151 = array (
);$array147['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array151);
$array152 = array (
);$array147['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array152);
$array153 = array (
);$array147['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array153);
$array154 = array (
);$array147['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array154);
$arguments145['arguments'] = $array147;

$output144 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output144 .= '
				';
return $output144;
};
$arguments142 = array();
$arguments142['if'] = NULL;

$output135 .= '';

$output135 .= '
			';
return $output135;
};
$arguments115 = array();
$arguments115['then'] = NULL;
$arguments115['else'] = NULL;
$arguments115['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('conf.showTextInsteadOfResults', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments115['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments115['__thenClosure'] = function() use ($renderingContext, $self) {
$output117 = '';

$output117 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$array120 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array120);
};
$arguments118 = array();
$arguments118['value'] = NULL;

$output117 .= isset($arguments118['value']) ? $arguments118['value'] : $renderChildrenClosure119();

$output117 .= '
				';
return $output117;
};
$arguments115['__elseClosures'][] = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['section'] = NULL;
$arguments122['partial'] = NULL;
$arguments122['delegate'] = NULL;
$arguments122['renderable'] = NULL;
$arguments122['arguments'] = array (
);
$arguments122['optional'] = false;
$arguments122['default'] = NULL;
$arguments122['contentAs'] = NULL;
$arguments122['partial'] = 'ResultRows';
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array125);
$array126 = array (
);$array124['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array126);
$array127 = array (
);$array124['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array127);
$array128 = array (
);$array124['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array128);
$array129 = array (
);$array124['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array129);
$array130 = array (
);$array124['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array130);
$array131 = array (
);$array124['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array131);
$arguments122['arguments'] = $array124;

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= '
				';
return $output121;
};

$output114 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= '
		';
return $output114;
};
$arguments112 = array();

$output111 .= '';

$output111 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['section'] = NULL;
$arguments184['partial'] = NULL;
$arguments184['delegate'] = NULL;
$arguments184['renderable'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['optional'] = false;
$arguments184['default'] = NULL;
$arguments184['contentAs'] = NULL;
$arguments184['partial'] = 'NoResults';
// Rendering Array
$array186 = array();
$array187 = array (
);$array186['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array187);
$array188 = array (
);$array186['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array188);
$arguments184['arguments'] = $array186;

$output183 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '
				';
return $output183;
};
$arguments181 = array();

$output180 .= '';

$output180 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output191 = '';

$output191 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['section'] = NULL;
$arguments192['partial'] = NULL;
$arguments192['delegate'] = NULL;
$arguments192['renderable'] = NULL;
$arguments192['arguments'] = array (
);
$arguments192['optional'] = false;
$arguments192['default'] = NULL;
$arguments192['contentAs'] = NULL;
$arguments192['partial'] = 'ResultRows';
// Rendering Array
$array194 = array();
$array195 = array (
);$array194['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array195);
$array196 = array (
);$array194['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array196);
$array197 = array (
);$array194['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array197);
$array198 = array (
);$array194['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array198);
$array199 = array (
);$array194['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array199);
$array200 = array (
);$array194['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array200);
$array201 = array (
);$array194['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array201);
$arguments192['arguments'] = $array194;

$output191 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);

$output191 .= '
				';
return $output191;
};
$arguments189 = array();
$arguments189['if'] = NULL;

$output180 .= '';

$output180 .= '
			';
return $output180;
};
$arguments158 = array();
$arguments158['then'] = NULL;
$arguments158['else'] = NULL;
$arguments158['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array177 = array();
$array178 = array (
);$array177['0'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array178);
$array177['1'] = ' == 0';

$expression179 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments158['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression179(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array177)
					),
					$renderingContext
				);
$arguments158['__thenClosure'] = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['section'] = NULL;
$arguments161['partial'] = NULL;
$arguments161['delegate'] = NULL;
$arguments161['renderable'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['optional'] = false;
$arguments161['default'] = NULL;
$arguments161['contentAs'] = NULL;
$arguments161['partial'] = 'NoResults';
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array164);
$array165 = array (
);$array163['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array165);
$arguments161['arguments'] = $array163;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
				';
return $output160;
};
$arguments158['__elseClosures'][] = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['section'] = NULL;
$arguments167['partial'] = NULL;
$arguments167['delegate'] = NULL;
$arguments167['renderable'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['optional'] = false;
$arguments167['default'] = NULL;
$arguments167['contentAs'] = NULL;
$arguments167['partial'] = 'ResultRows';
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array170);
$array171 = array (
);$array169['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array171);
$array172 = array (
);$array169['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array172);
$array173 = array (
);$array169['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array173);
$array174 = array (
);$array169['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array174);
$array175 = array (
);$array169['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array175);
$array176 = array (
);$array169['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array176);
$arguments167['arguments'] = $array169;

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= '
				';
return $output166;
};

$output157 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '
		';
return $output157;
};
$arguments155 = array();
$arguments155['if'] = NULL;

$output111 .= '';

$output111 .= '
	';
return $output111;
};
$arguments20 = array();
$arguments20['then'] = NULL;
$arguments20['else'] = NULL;
$arguments20['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('isEmptySearch', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments20['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$arguments20['__thenClosure'] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$array49 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array49);
};
$arguments47 = array();
$arguments47['value'] = NULL;

$output46 .= isset($arguments47['value']) ? $arguments47['value'] : $renderChildrenClosure48();

$output46 .= '
				';
return $output46;
};
$arguments44 = array();

$output43 .= '';

$output43 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['section'] = NULL;
$arguments53['partial'] = NULL;
$arguments53['delegate'] = NULL;
$arguments53['renderable'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['optional'] = false;
$arguments53['default'] = NULL;
$arguments53['contentAs'] = NULL;
$arguments53['partial'] = 'ResultRows';
// Rendering Array
$array55 = array();
$array56 = array (
);$array55['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array56);
$array57 = array (
);$array55['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array57);
$array58 = array (
);$array55['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array58);
$array59 = array (
);$array55['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array59);
$array60 = array (
);$array55['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array60);
$array61 = array (
);$array55['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array61);
$array62 = array (
);$array55['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array62);
$arguments53['arguments'] = $array55;

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
				';
return $output52;
};
$arguments50 = array();
$arguments50['if'] = NULL;

$output43 .= '';

$output43 .= '
			';
return $output43;
};
$arguments23 = array();
$arguments23['then'] = NULL;
$arguments23['else'] = NULL;
$arguments23['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('conf.showTextInsteadOfResults', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments23['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments23['__thenClosure'] = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array28);
};
$arguments26 = array();
$arguments26['value'] = NULL;

$output25 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output25 .= '
				';
return $output25;
};
$arguments23['__elseClosures'][] = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['section'] = NULL;
$arguments30['partial'] = NULL;
$arguments30['delegate'] = NULL;
$arguments30['renderable'] = NULL;
$arguments30['arguments'] = array (
);
$arguments30['optional'] = false;
$arguments30['default'] = NULL;
$arguments30['contentAs'] = NULL;
$arguments30['partial'] = 'ResultRows';
// Rendering Array
$array32 = array();
$array33 = array (
);$array32['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array33);
$array34 = array (
);$array32['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array34);
$array35 = array (
);$array32['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array35);
$array36 = array (
);$array32['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array36);
$array37 = array (
);$array32['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array37);
$array38 = array (
);$array32['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array38);
$array39 = array (
);$array32['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array39);
$arguments30['arguments'] = $array32;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output29 .= '
				';
return $output29;
};

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
		';
return $output22;
};
$arguments20['__elseClosures'][] = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['section'] = NULL;
$arguments90['partial'] = NULL;
$arguments90['delegate'] = NULL;
$arguments90['renderable'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['optional'] = false;
$arguments90['default'] = NULL;
$arguments90['contentAs'] = NULL;
$arguments90['partial'] = 'NoResults';
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array93);
$array94 = array (
);$array92['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array94);
$arguments90['arguments'] = $array92;

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output89 .= '
				';
return $output89;
};
$arguments87 = array();

$output86 .= '';

$output86 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments98 = array();
$arguments98['section'] = NULL;
$arguments98['partial'] = NULL;
$arguments98['delegate'] = NULL;
$arguments98['renderable'] = NULL;
$arguments98['arguments'] = array (
);
$arguments98['optional'] = false;
$arguments98['default'] = NULL;
$arguments98['contentAs'] = NULL;
$arguments98['partial'] = 'ResultRows';
// Rendering Array
$array100 = array();
$array101 = array (
);$array100['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array101);
$array102 = array (
);$array100['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array102);
$array103 = array (
);$array100['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array103);
$array104 = array (
);$array100['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array104);
$array105 = array (
);$array100['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array105);
$array106 = array (
);$array100['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array106);
$array107 = array (
);$array100['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array107);
$arguments98['arguments'] = $array100;

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext);

$output97 .= '
				';
return $output97;
};
$arguments95 = array();
$arguments95['if'] = NULL;

$output86 .= '';

$output86 .= '
			';
return $output86;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array83 = array();
$array84 = array (
);$array83['0'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array84);
$array83['1'] = ' == 0';

$expression85 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['section'] = NULL;
$arguments67['partial'] = NULL;
$arguments67['delegate'] = NULL;
$arguments67['renderable'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['optional'] = false;
$arguments67['default'] = NULL;
$arguments67['contentAs'] = NULL;
$arguments67['partial'] = 'NoResults';
// Rendering Array
$array69 = array();
$array70 = array (
);$array69['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array70);
$array71 = array (
);$array69['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array71);
$arguments67['arguments'] = $array69;

$output66 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output66 .= '
				';
return $output66;
};
$arguments64['__elseClosures'][] = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['section'] = NULL;
$arguments73['partial'] = NULL;
$arguments73['delegate'] = NULL;
$arguments73['renderable'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['optional'] = false;
$arguments73['default'] = NULL;
$arguments73['contentAs'] = NULL;
$arguments73['partial'] = 'ResultRows';
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array76);
$array77 = array (
);$array75['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array77);
$array78 = array (
);$array75['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array78);
$array79 = array (
);$array75['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array79);
$array80 = array (
);$array75['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array80);
$array81 = array (
);$array75['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array81);
$array82 = array (
);$array75['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array82);
$arguments73['arguments'] = $array75;

$output72 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output72 .= '
				';
return $output72;
};

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
		';
return $output63;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output202 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments203 = array();
$arguments203['name'] = NULL;
$arguments203['name'] = 'General';

$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output202 .= '
<!--
=====================
Templates/ResultList.html

Settings are available via
';
$array205 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('conf', $array205)]);

$output202 .= '
';
$array206 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extConf', $array206)]);

$output202 .= '
';
$array207 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('extConfPremium', $array207)]);

$output202 .= '
-->
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
		<div class="messsage">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['key'] = NULL;
$arguments217['id'] = NULL;
$arguments217['default'] = NULL;
$arguments217['htmlEscape'] = NULL;
$arguments217['arguments'] = NULL;
$arguments217['extensionName'] = NULL;
$arguments217['key'] = 'LLL:EXT:ke_search/pi1/locallang.xml:searchword_length_error';
// Rendering Array
$array219 = array();
$array220 = array (
);$array219['0'] = $renderingContext->getVariableProvider()->getByPath('extConf.searchWordLength', $array220);
$arguments217['arguments'] = $array219;

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext)]);

$output216 .= '</div>
	';
return $output216;
};
$arguments211 = array();
$arguments211['then'] = NULL;
$arguments211['else'] = NULL;
$arguments211['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('wordsTooShort', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments211['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
$arguments211['__thenClosure'] = $renderChildrenClosure212;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$array229 = array (
);return $renderingContext->getVariableProvider()->getByPath('resultListAdditionalRawContent', $array229);
};
$arguments227 = array();
$arguments227['value'] = NULL;

$output226 .= isset($arguments227['value']) ? $arguments227['value'] : $renderChildrenClosure228();

$output226 .= '
	';
return $output226;
};
$arguments221 = array();
$arguments221['then'] = NULL;
$arguments221['else'] = NULL;
$arguments221['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array223 = array();
$array224 = array (
);$array223['0'] = $renderingContext->getVariableProvider()->getByPath('resultListAdditionalRawContent', $array224);

$expression225 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments221['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression225(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array223)
					),
					$renderingContext
				);
$arguments221['__thenClosure'] = $renderChildrenClosure222;

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments221, $renderChildrenClosure222, $renderingContext);

$output210 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
$output321 = '';

$output321 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure323 = function() use ($renderingContext, $self) {
$output324 = '';

$output324 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$output348 = '';

$output348 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
$array351 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array351);
};
$arguments349 = array();
$arguments349['value'] = NULL;

$output348 .= isset($arguments349['value']) ? $arguments349['value'] : $renderChildrenClosure350();

$output348 .= '
				';
return $output348;
};
$arguments346 = array();

$output345 .= '';

$output345 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['section'] = NULL;
$arguments355['partial'] = NULL;
$arguments355['delegate'] = NULL;
$arguments355['renderable'] = NULL;
$arguments355['arguments'] = array (
);
$arguments355['optional'] = false;
$arguments355['default'] = NULL;
$arguments355['contentAs'] = NULL;
$arguments355['partial'] = 'ResultRows';
// Rendering Array
$array357 = array();
$array358 = array (
);$array357['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array358);
$array359 = array (
);$array357['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array359);
$array360 = array (
);$array357['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array360);
$array361 = array (
);$array357['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array361);
$array362 = array (
);$array357['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array362);
$array363 = array (
);$array357['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array363);
$array364 = array (
);$array357['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array364);
$arguments355['arguments'] = $array357;

$output354 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= '
				';
return $output354;
};
$arguments352 = array();
$arguments352['if'] = NULL;

$output345 .= '';

$output345 .= '
			';
return $output345;
};
$arguments325 = array();
$arguments325['then'] = NULL;
$arguments325['else'] = NULL;
$arguments325['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('conf.showTextInsteadOfResults', $array343);

$expression344 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments325['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression344(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments325['__thenClosure'] = function() use ($renderingContext, $self) {
$output327 = '';

$output327 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure329 = function() use ($renderingContext, $self) {
$array330 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array330);
};
$arguments328 = array();
$arguments328['value'] = NULL;

$output327 .= isset($arguments328['value']) ? $arguments328['value'] : $renderChildrenClosure329();

$output327 .= '
				';
return $output327;
};
$arguments325['__elseClosures'][] = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['section'] = NULL;
$arguments332['partial'] = NULL;
$arguments332['delegate'] = NULL;
$arguments332['renderable'] = NULL;
$arguments332['arguments'] = array (
);
$arguments332['optional'] = false;
$arguments332['default'] = NULL;
$arguments332['contentAs'] = NULL;
$arguments332['partial'] = 'ResultRows';
// Rendering Array
$array334 = array();
$array335 = array (
);$array334['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array335);
$array336 = array (
);$array334['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array336);
$array337 = array (
);$array334['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array337);
$array338 = array (
);$array334['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array338);
$array339 = array (
);$array334['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array339);
$array340 = array (
);$array334['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array340);
$array341 = array (
);$array334['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array341);
$arguments332['arguments'] = $array334;

$output331 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
				';
return $output331;
};

$output324 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);

$output324 .= '
		';
return $output324;
};
$arguments322 = array();

$output321 .= '';

$output321 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
$output367 = '';

$output367 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['section'] = NULL;
$arguments394['partial'] = NULL;
$arguments394['delegate'] = NULL;
$arguments394['renderable'] = NULL;
$arguments394['arguments'] = array (
);
$arguments394['optional'] = false;
$arguments394['default'] = NULL;
$arguments394['contentAs'] = NULL;
$arguments394['partial'] = 'NoResults';
// Rendering Array
$array396 = array();
$array397 = array (
);$array396['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array397);
$array398 = array (
);$array396['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array398);
$arguments394['arguments'] = $array396;

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext);

$output393 .= '
				';
return $output393;
};
$arguments391 = array();

$output390 .= '';

$output390 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure400 = function() use ($renderingContext, $self) {
$output401 = '';

$output401 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure403 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments402 = array();
$arguments402['section'] = NULL;
$arguments402['partial'] = NULL;
$arguments402['delegate'] = NULL;
$arguments402['renderable'] = NULL;
$arguments402['arguments'] = array (
);
$arguments402['optional'] = false;
$arguments402['default'] = NULL;
$arguments402['contentAs'] = NULL;
$arguments402['partial'] = 'ResultRows';
// Rendering Array
$array404 = array();
$array405 = array (
);$array404['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array405);
$array406 = array (
);$array404['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array406);
$array407 = array (
);$array404['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array407);
$array408 = array (
);$array404['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array408);
$array409 = array (
);$array404['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array409);
$array410 = array (
);$array404['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array410);
$array411 = array (
);$array404['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array411);
$arguments402['arguments'] = $array404;

$output401 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments402, $renderChildrenClosure403, $renderingContext);

$output401 .= '
				';
return $output401;
};
$arguments399 = array();
$arguments399['if'] = NULL;

$output390 .= '';

$output390 .= '
			';
return $output390;
};
$arguments368 = array();
$arguments368['then'] = NULL;
$arguments368['else'] = NULL;
$arguments368['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array387 = array();
$array388 = array (
);$array387['0'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array388);
$array387['1'] = ' == 0';

$expression389 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments368['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression389(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array387)
					),
					$renderingContext
				);
$arguments368['__thenClosure'] = function() use ($renderingContext, $self) {
$output370 = '';

$output370 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure372 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments371 = array();
$arguments371['section'] = NULL;
$arguments371['partial'] = NULL;
$arguments371['delegate'] = NULL;
$arguments371['renderable'] = NULL;
$arguments371['arguments'] = array (
);
$arguments371['optional'] = false;
$arguments371['default'] = NULL;
$arguments371['contentAs'] = NULL;
$arguments371['partial'] = 'NoResults';
// Rendering Array
$array373 = array();
$array374 = array (
);$array373['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array374);
$array375 = array (
);$array373['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array375);
$arguments371['arguments'] = $array373;

$output370 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments371, $renderChildrenClosure372, $renderingContext);

$output370 .= '
				';
return $output370;
};
$arguments368['__elseClosures'][] = function() use ($renderingContext, $self) {
$output376 = '';

$output376 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments377 = array();
$arguments377['section'] = NULL;
$arguments377['partial'] = NULL;
$arguments377['delegate'] = NULL;
$arguments377['renderable'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['optional'] = false;
$arguments377['default'] = NULL;
$arguments377['contentAs'] = NULL;
$arguments377['partial'] = 'ResultRows';
// Rendering Array
$array379 = array();
$array380 = array (
);$array379['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array380);
$array381 = array (
);$array379['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array381);
$array382 = array (
);$array379['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array382);
$array383 = array (
);$array379['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array383);
$array384 = array (
);$array379['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array384);
$array385 = array (
);$array379['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array385);
$array386 = array (
);$array379['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array386);
$arguments377['arguments'] = $array379;

$output376 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);

$output376 .= '
				';
return $output376;
};

$output367 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output367 .= '
		';
return $output367;
};
$arguments365 = array();
$arguments365['if'] = NULL;

$output321 .= '';

$output321 .= '
	';
return $output321;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array318 = array();
$array319 = array (
);$array318['0'] = $renderingContext->getVariableProvider()->getByPath('isEmptySearch', $array319);

$expression320 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression320(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array318)
					),
					$renderingContext
				);
$arguments230['__thenClosure'] = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$array259 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array259);
};
$arguments257 = array();
$arguments257['value'] = NULL;

$output256 .= isset($arguments257['value']) ? $arguments257['value'] : $renderChildrenClosure258();

$output256 .= '
				';
return $output256;
};
$arguments254 = array();

$output253 .= '';

$output253 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['section'] = NULL;
$arguments263['partial'] = NULL;
$arguments263['delegate'] = NULL;
$arguments263['renderable'] = NULL;
$arguments263['arguments'] = array (
);
$arguments263['optional'] = false;
$arguments263['default'] = NULL;
$arguments263['contentAs'] = NULL;
$arguments263['partial'] = 'ResultRows';
// Rendering Array
$array265 = array();
$array266 = array (
);$array265['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array266);
$array267 = array (
);$array265['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array267);
$array268 = array (
);$array265['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array268);
$array269 = array (
);$array265['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array269);
$array270 = array (
);$array265['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array270);
$array271 = array (
);$array265['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array271);
$array272 = array (
);$array265['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array272);
$arguments263['arguments'] = $array265;

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
				';
return $output262;
};
$arguments260 = array();
$arguments260['if'] = NULL;

$output253 .= '';

$output253 .= '
			';
return $output253;
};
$arguments233 = array();
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$arguments233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array250 = array();
$array251 = array (
);$array250['0'] = $renderingContext->getVariableProvider()->getByPath('conf.showTextInsteadOfResults', $array251);

$expression252 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression252(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array250)
					),
					$renderingContext
				);
$arguments233['__thenClosure'] = function() use ($renderingContext, $self) {
$output235 = '';

$output235 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$array238 = array (
);return $renderingContext->getVariableProvider()->getByPath('conf.textForResults', $array238);
};
$arguments236 = array();
$arguments236['value'] = NULL;

$output235 .= isset($arguments236['value']) ? $arguments236['value'] : $renderChildrenClosure237();

$output235 .= '
				';
return $output235;
};
$arguments233['__elseClosures'][] = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['section'] = NULL;
$arguments240['partial'] = NULL;
$arguments240['delegate'] = NULL;
$arguments240['renderable'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['optional'] = false;
$arguments240['default'] = NULL;
$arguments240['contentAs'] = NULL;
$arguments240['partial'] = 'ResultRows';
// Rendering Array
$array242 = array();
$array243 = array (
);$array242['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array243);
$array244 = array (
);$array242['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array244);
$array245 = array (
);$array242['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array245);
$array246 = array (
);$array242['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array246);
$array247 = array (
);$array242['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array247);
$array248 = array (
);$array242['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array248);
$array249 = array (
);$array242['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array249);
$arguments240['arguments'] = $array242;

$output239 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
				';
return $output239;
};

$output232 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
		';
return $output232;
};
$arguments230['__elseClosures'][] = function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
$output296 = '';

$output296 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure298 = function() use ($renderingContext, $self) {
$output299 = '';

$output299 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments300 = array();
$arguments300['section'] = NULL;
$arguments300['partial'] = NULL;
$arguments300['delegate'] = NULL;
$arguments300['renderable'] = NULL;
$arguments300['arguments'] = array (
);
$arguments300['optional'] = false;
$arguments300['default'] = NULL;
$arguments300['contentAs'] = NULL;
$arguments300['partial'] = 'NoResults';
// Rendering Array
$array302 = array();
$array303 = array (
);$array302['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array303);
$array304 = array (
);$array302['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array304);
$arguments300['arguments'] = $array302;

$output299 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments300, $renderChildrenClosure301, $renderingContext);

$output299 .= '
				';
return $output299;
};
$arguments297 = array();

$output296 .= '';

$output296 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments308 = array();
$arguments308['section'] = NULL;
$arguments308['partial'] = NULL;
$arguments308['delegate'] = NULL;
$arguments308['renderable'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['optional'] = false;
$arguments308['default'] = NULL;
$arguments308['contentAs'] = NULL;
$arguments308['partial'] = 'ResultRows';
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array311);
$array312 = array (
);$array310['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array312);
$array313 = array (
);$array310['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array313);
$array314 = array (
);$array310['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array314);
$array315 = array (
);$array310['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array315);
$array316 = array (
);$array310['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array316);
$array317 = array (
);$array310['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array317);
$arguments308['arguments'] = $array310;

$output307 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
				';
return $output307;
};
$arguments305 = array();
$arguments305['if'] = NULL;

$output296 .= '';

$output296 .= '
			';
return $output296;
};
$arguments274 = array();
$arguments274['then'] = NULL;
$arguments274['else'] = NULL;
$arguments274['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array293 = array();
$array294 = array (
);$array293['0'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array294);
$array293['1'] = ' == 0';

$expression295 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments274['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression295(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array293)
					),
					$renderingContext
				);
$arguments274['__thenClosure'] = function() use ($renderingContext, $self) {
$output276 = '';

$output276 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure278 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments277 = array();
$arguments277['section'] = NULL;
$arguments277['partial'] = NULL;
$arguments277['delegate'] = NULL;
$arguments277['renderable'] = NULL;
$arguments277['arguments'] = array (
);
$arguments277['optional'] = false;
$arguments277['default'] = NULL;
$arguments277['contentAs'] = NULL;
$arguments277['partial'] = 'NoResults';
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array280);
$array281 = array (
);$array279['noResultsText'] = $renderingContext->getVariableProvider()->getByPath('noResultsText', $array281);
$arguments277['arguments'] = $array279;

$output276 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext);

$output276 .= '
				';
return $output276;
};
$arguments274['__elseClosures'][] = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments283 = array();
$arguments283['section'] = NULL;
$arguments283['partial'] = NULL;
$arguments283['delegate'] = NULL;
$arguments283['renderable'] = NULL;
$arguments283['arguments'] = array (
);
$arguments283['optional'] = false;
$arguments283['default'] = NULL;
$arguments283['contentAs'] = NULL;
$arguments283['partial'] = 'ResultRows';
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['conf'] = $renderingContext->getVariableProvider()->getByPath('conf', $array286);
$array287 = array (
);$array285['numberofresults'] = $renderingContext->getVariableProvider()->getByPath('numberofresults', $array287);
$array288 = array (
);$array285['resultrows'] = $renderingContext->getVariableProvider()->getByPath('resultrows', $array288);
$array289 = array (
);$array285['sortingLinks'] = $renderingContext->getVariableProvider()->getByPath('sortingLinks', $array289);
$array290 = array (
);$array285['pagebrowser'] = $renderingContext->getVariableProvider()->getByPath('pagebrowser', $array290);
$array291 = array (
);$array285['queryTime'] = $renderingContext->getVariableProvider()->getByPath('queryTime', $array291);
$array292 = array (
);$array285['queryTimeText'] = $renderingContext->getVariableProvider()->getByPath('queryTimeText', $array292);
$arguments283['arguments'] = $array285;

$output282 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
				';
return $output282;
};

$output273 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);

$output273 .= '
		';
return $output273;
};

$output210 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output210 .= '
';
return $output210;
};
$arguments208 = array();
$arguments208['name'] = NULL;
$arguments208['name'] = 'content';

$output202 .= NULL;

$output202 .= '
';

return $output202;
}


}
#