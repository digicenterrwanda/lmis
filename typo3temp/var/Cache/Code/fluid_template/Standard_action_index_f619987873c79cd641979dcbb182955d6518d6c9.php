<?php

class Standard_action_index_f619987873c79cd641979dcbb182955d6518d6c9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
        <table class="table table-condensed table-hover news-table">
            <thead>
            <tr>
                <th colspan="2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
$array58 = array (
);return $renderingContext->getVariableProvider()->getByPath('header', $array58);
};
$arguments56 = array();
$arguments56['value'] = NULL;

$output55 .= isset($arguments56['value']) ? $arguments56['value'] : $renderChildrenClosure57();

$output55 .= '</th>
            </tr>
            </thead>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
                <tfoot class="setting-switcher">
                <tr>
                    <td colspan="2">
                        <a href="#" data-identifier="newscollapse-';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array65)]);

$output64 .= '">
                            <span class="down">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['identifier'] = NULL;
$arguments66['size'] = 'small';
$arguments66['overlay'] = NULL;
$arguments66['state'] = 'default';
$arguments66['alternativeMarkupIdentifier'] = NULL;
$arguments66['identifier'] = 'actions-move-down';

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output64 .= '</span>
                            <span class="up">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['identifier'] = NULL;
$arguments68['size'] = 'small';
$arguments68['overlay'] = NULL;
$arguments68['state'] = 'default';
$arguments68['alternativeMarkupIdentifier'] = NULL;
$arguments68['identifier'] = 'actions-move-up';

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output64 .= '</span>
                            Toggle settings
                        </a>
                    </td>
                </tr>
                </tfoot>
            ';
return $output64;
};
$arguments59 = array();
$arguments59['then'] = NULL;
$arguments59['else'] = NULL;
$arguments59['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = $renderChildrenClosure60;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output55 .= '
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$array76 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.0', $array76);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output73 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output73 .= '</th>
                    <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$array79 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.1', $array79);
};
$arguments77 = array();
$arguments77['value'] = NULL;

$output73 .= isset($arguments77['value']) ? $arguments77['value'] : $renderChildrenClosure78();

$output73 .= '</td>
                </tr>
            ';
return $output73;
};
$arguments70 = array();
$arguments70['each'] = NULL;
$arguments70['as'] = NULL;
$arguments70['key'] = NULL;
$arguments70['reverse'] = false;
$arguments70['iteration'] = NULL;
$array72 = array (
);$arguments70['each'] = $renderingContext->getVariableProvider()->getByPath('rows.above', $array72);
$arguments70['as'] = 'item';

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext);

$output55 .= '
            </tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                <tbody class="hidden-settings hidden" id="newscollapse-';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array86)]);

$output85 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$array93 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.0', $array93);
};
$arguments91 = array();
$arguments91['value'] = NULL;

$output90 .= isset($arguments91['value']) ? $arguments91['value'] : $renderChildrenClosure92();

$output90 .= '</th>
                        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$array96 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.1', $array96);
};
$arguments94 = array();
$arguments94['value'] = NULL;

$output90 .= isset($arguments94['value']) ? $arguments94['value'] : $renderChildrenClosure95();

$output90 .= '</td>
                    </tr>
                ';
return $output90;
};
$arguments87 = array();
$arguments87['each'] = NULL;
$arguments87['as'] = NULL;
$arguments87['key'] = NULL;
$arguments87['reverse'] = false;
$arguments87['iteration'] = NULL;
$array89 = array (
);$arguments87['each'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array89);
$arguments87['as'] = 'item';

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output85 .= '
                </tbody>
            ';
return $output85;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$arguments80['__thenClosure'] = $renderChildrenClosure81;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output55 .= '
        </table>
    ';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
$output99 = '';

$output99 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('header', $array102);
};
$arguments100 = array();
$arguments100['value'] = NULL;

$output99 .= isset($arguments100['value']) ? $arguments100['value'] : $renderChildrenClosure101();

$output99 .= '
    ';
return $output99;
};
$arguments97 = array();
$arguments97['if'] = NULL;

$output52 .= '';

$output52 .= '
';
return $output52;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('rows.above', $array50);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
        <table class="table table-condensed table-hover news-table">
            <thead>
            <tr>
                <th colspan="2">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$array6 = array (
);return $renderingContext->getVariableProvider()->getByPath('header', $array6);
};
$arguments4 = array();
$arguments4['value'] = NULL;

$output3 .= isset($arguments4['value']) ? $arguments4['value'] : $renderChildrenClosure5();

$output3 .= '</th>
            </tr>
            </thead>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                <tfoot class="setting-switcher">
                <tr>
                    <td colspan="2">
                        <a href="#" data-identifier="newscollapse-';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array13)]);

$output12 .= '">
                            <span class="down">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['identifier'] = NULL;
$arguments14['size'] = 'small';
$arguments14['overlay'] = NULL;
$arguments14['state'] = 'default';
$arguments14['alternativeMarkupIdentifier'] = NULL;
$arguments14['identifier'] = 'actions-move-down';

$output12 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output12 .= '</span>
                            <span class="up">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['identifier'] = NULL;
$arguments16['size'] = 'small';
$arguments16['overlay'] = NULL;
$arguments16['state'] = 'default';
$arguments16['alternativeMarkupIdentifier'] = NULL;
$arguments16['identifier'] = 'actions-move-up';

$output12 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output12 .= '</span>
                            Toggle settings
                        </a>
                    </td>
                </tr>
                </tfoot>
            ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output3 .= '
            <tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
                <tr>
                    <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.0', $array24);
};
$arguments22 = array();
$arguments22['value'] = NULL;

$output21 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output21 .= '</th>
                    <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.1', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output21 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output21 .= '</td>
                </tr>
            ';
return $output21;
};
$arguments18 = array();
$arguments18['each'] = NULL;
$arguments18['as'] = NULL;
$arguments18['key'] = NULL;
$arguments18['reverse'] = false;
$arguments18['iteration'] = NULL;
$array20 = array (
);$arguments18['each'] = $renderingContext->getVariableProvider()->getByPath('rows.above', $array20);
$arguments18['as'] = 'item';

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output3 .= '
            </tbody>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                <tbody class="hidden-settings hidden" id="newscollapse-';
$array34 = array (
);
$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('id', $array34)]);

$output33 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
                    <tr>
                        <th>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array41 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.0', $array41);
};
$arguments39 = array();
$arguments39['value'] = NULL;

$output38 .= isset($arguments39['value']) ? $arguments39['value'] : $renderChildrenClosure40();

$output38 .= '</th>
                        <td>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$array44 = array (
);return $renderingContext->getVariableProvider()->getByPath('item.1', $array44);
};
$arguments42 = array();
$arguments42['value'] = NULL;

$output38 .= isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();

$output38 .= '</td>
                    </tr>
                ';
return $output38;
};
$arguments35 = array();
$arguments35['each'] = NULL;
$arguments35['as'] = NULL;
$arguments35['key'] = NULL;
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$array37 = array (
);$arguments35['each'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array37);
$arguments35['as'] = 'item';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output33 .= '
                </tbody>
            ';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('rows.below', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output3 .= '
        </table>
    ';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output45 = '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('header', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;

$output45 .= isset($arguments46['value']) ? $arguments46['value'] : $renderChildrenClosure47();

$output45 .= '
    ';
return $output45;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#