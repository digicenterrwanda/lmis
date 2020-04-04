<?php

class layout_Default_html_03582e1a4a4f32b77e8daef3481ce74dadb9aade extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
					<a id="c';
$array122 = array (
);
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array122)]);

$output121 .= '"></a>
				';
return $output121;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$arguments116['__thenClosure'] = $renderChildrenClosure117;

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['section'] = NULL;
$arguments128['partial'] = NULL;
$arguments128['delegate'] = NULL;
$arguments128['renderable'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['optional'] = false;
$arguments128['default'] = NULL;
$arguments128['contentAs'] = NULL;
$arguments128['partial'] = 'DropIn/Before/All';
$arguments128['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output127 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '
				';
return $output127;
};
$arguments123 = array();
$arguments123['section'] = NULL;
$arguments123['partial'] = NULL;
$arguments123['delegate'] = NULL;
$arguments123['renderable'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['optional'] = false;
$arguments123['default'] = NULL;
$arguments123['contentAs'] = NULL;
$arguments123['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array125['0'] = 'true';

$expression126 = function($context) {return TRUE;};
$arguments123['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure132 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments136 = array();
$arguments136['section'] = NULL;
$arguments136['partial'] = NULL;
$arguments136['delegate'] = NULL;
$arguments136['renderable'] = NULL;
$arguments136['arguments'] = array (
);
$arguments136['optional'] = false;
$arguments136['default'] = NULL;
$arguments136['contentAs'] = NULL;
$arguments136['partial'] = 'Header/All';
$arguments136['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output135 .= '
				';
return $output135;
};
$arguments131 = array();
$arguments131['section'] = NULL;
$arguments131['partial'] = NULL;
$arguments131['delegate'] = NULL;
$arguments131['renderable'] = NULL;
$arguments131['arguments'] = array (
);
$arguments131['optional'] = false;
$arguments131['default'] = NULL;
$arguments131['contentAs'] = NULL;
$arguments131['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array133 = array();
$array133['0'] = 'true';

$expression134 = function($context) {return TRUE;};
$arguments131['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)
					),
					$renderingContext
				);

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array141 = array();
$array141['0'] = 'true';

$expression142 = function($context) {return TRUE;};
$arguments139['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression142(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array141)
					),
					$renderingContext
				);

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output147 = '';

$output147 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments148 = array();
$arguments148['section'] = NULL;
$arguments148['partial'] = NULL;
$arguments148['delegate'] = NULL;
$arguments148['renderable'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['optional'] = false;
$arguments148['default'] = NULL;
$arguments148['contentAs'] = NULL;
$arguments148['partial'] = 'Footer/All';
$arguments148['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output147 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
				';
return $output147;
};
$arguments143 = array();
$arguments143['section'] = NULL;
$arguments143['partial'] = NULL;
$arguments143['delegate'] = NULL;
$arguments143['renderable'] = NULL;
$arguments143['arguments'] = array (
);
$arguments143['optional'] = false;
$arguments143['default'] = NULL;
$arguments143['contentAs'] = NULL;
$arguments143['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array145 = array();
$array145['0'] = 'true';

$expression146 = function($context) {return TRUE;};
$arguments143['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression146(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)
					),
					$renderingContext
				);

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output115 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['section'] = NULL;
$arguments156['partial'] = NULL;
$arguments156['delegate'] = NULL;
$arguments156['renderable'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['optional'] = false;
$arguments156['default'] = NULL;
$arguments156['contentAs'] = NULL;
$arguments156['partial'] = 'DropIn/After/All';
$arguments156['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output155 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output155 .= '
				';
return $output155;
};
$arguments151 = array();
$arguments151['section'] = NULL;
$arguments151['partial'] = NULL;
$arguments151['delegate'] = NULL;
$arguments151['renderable'] = NULL;
$arguments151['arguments'] = array (
);
$arguments151['optional'] = false;
$arguments151['default'] = NULL;
$arguments151['contentAs'] = NULL;
$arguments151['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array153['0'] = 'true';

$expression154 = function($context) {return TRUE;};
$arguments151['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression154(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output115 .= '
		

		';
return $output115;
};
$arguments113 = array();

$output112 .= '';

$output112 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure160 = function() use ($renderingContext, $self) {
$output161 = '';

$output161 .= '

			<a id="c';
$array162 = array (
);
$output161 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array162)]);

$output161 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
				<a id="c';
$array169 = array (
);
$output168 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array169)]);

$output168 .= '"></a>
			';
return $output168;
};
$arguments163 = array();
$arguments163['then'] = NULL;
$arguments163['else'] = NULL;
$arguments163['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array166);

$expression167 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments163['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments163['__thenClosure'] = $renderChildrenClosure164;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
				<div class="frame-space-before-';
$array176 = array (
);
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array176)]);

$output175 .= '"></div>
			';
return $output175;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['__thenClosure'] = $renderChildrenClosure171;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments182 = array();
$arguments182['section'] = NULL;
$arguments182['partial'] = NULL;
$arguments182['delegate'] = NULL;
$arguments182['renderable'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['optional'] = false;
$arguments182['default'] = NULL;
$arguments182['contentAs'] = NULL;
$arguments182['partial'] = 'DropIn/Before/All';
$arguments182['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
			';
return $output181;
};
$arguments177 = array();
$arguments177['section'] = NULL;
$arguments177['partial'] = NULL;
$arguments177['delegate'] = NULL;
$arguments177['renderable'] = NULL;
$arguments177['arguments'] = array (
);
$arguments177['optional'] = false;
$arguments177['default'] = NULL;
$arguments177['contentAs'] = NULL;
$arguments177['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array179 = array();
$array179['0'] = 'true';

$expression180 = function($context) {return TRUE;};
$arguments177['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array179)
					),
					$renderingContext
				);

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
$output189 = '';

$output189 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments190 = array();
$arguments190['section'] = NULL;
$arguments190['partial'] = NULL;
$arguments190['delegate'] = NULL;
$arguments190['renderable'] = NULL;
$arguments190['arguments'] = array (
);
$arguments190['optional'] = false;
$arguments190['default'] = NULL;
$arguments190['contentAs'] = NULL;
$arguments190['partial'] = 'Header/All';
$arguments190['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output189 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext);

$output189 .= '
			';
return $output189;
};
$arguments185 = array();
$arguments185['section'] = NULL;
$arguments185['partial'] = NULL;
$arguments185['delegate'] = NULL;
$arguments185['renderable'] = NULL;
$arguments185['arguments'] = array (
);
$arguments185['optional'] = false;
$arguments185['default'] = NULL;
$arguments185['contentAs'] = NULL;
$arguments185['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array187['0'] = 'true';

$expression188 = function($context) {return TRUE;};
$arguments185['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['section'] = NULL;
$arguments193['partial'] = NULL;
$arguments193['delegate'] = NULL;
$arguments193['renderable'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['optional'] = false;
$arguments193['default'] = NULL;
$arguments193['contentAs'] = NULL;
$arguments193['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array195 = array();
$array195['0'] = 'true';

$expression196 = function($context) {return TRUE;};
$arguments193['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)
					),
					$renderingContext
				);

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['section'] = NULL;
$arguments202['partial'] = NULL;
$arguments202['delegate'] = NULL;
$arguments202['renderable'] = NULL;
$arguments202['arguments'] = array (
);
$arguments202['optional'] = false;
$arguments202['default'] = NULL;
$arguments202['contentAs'] = NULL;
$arguments202['partial'] = 'Footer/All';
$arguments202['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
			';
return $output201;
};
$arguments197 = array();
$arguments197['section'] = NULL;
$arguments197['partial'] = NULL;
$arguments197['delegate'] = NULL;
$arguments197['renderable'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['optional'] = false;
$arguments197['default'] = NULL;
$arguments197['contentAs'] = NULL;
$arguments197['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array199['0'] = 'true';

$expression200 = function($context) {return TRUE;};
$arguments197['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
$output209 = '';

$output209 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments210 = array();
$arguments210['section'] = NULL;
$arguments210['partial'] = NULL;
$arguments210['delegate'] = NULL;
$arguments210['renderable'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['optional'] = false;
$arguments210['default'] = NULL;
$arguments210['contentAs'] = NULL;
$arguments210['partial'] = 'DropIn/After/All';
$arguments210['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output209 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);

$output209 .= '
			';
return $output209;
};
$arguments205 = array();
$arguments205['section'] = NULL;
$arguments205['partial'] = NULL;
$arguments205['delegate'] = NULL;
$arguments205['renderable'] = NULL;
$arguments205['arguments'] = array (
);
$arguments205['optional'] = false;
$arguments205['default'] = NULL;
$arguments205['contentAs'] = NULL;
$arguments205['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array207 = array();
$array207['0'] = 'true';

$expression208 = function($context) {return TRUE;};
$arguments205['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression208(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array207)
					),
					$renderingContext
				);

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);

$output161 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure214 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
				<div class="frame-space-after-';
$array219 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array219)]);

$output218 .= '"></div>
			';
return $output218;
};
$arguments213 = array();
$arguments213['then'] = NULL;
$arguments213['else'] = NULL;
$arguments213['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array215 = array();
$array216 = array (
);$array215['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array216);

$expression217 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments213['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array215)
					),
					$renderingContext
				);
$arguments213['__thenClosure'] = $renderChildrenClosure214;

$output161 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, $renderChildrenClosure214, $renderingContext);

$output161 .= '

		';
return $output161;
};
$arguments159 = array();
$arguments159['if'] = NULL;

$output112 .= '';

$output112 .= '
	';
return $output112;
};
$arguments4 = array();
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$arguments4['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('data.frame_class', $array110);
$array109['1'] = ' != none';

$expression111 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};
$arguments4['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
					<a id="c';
$array13 = array (
);
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array13)]);

$output12 .= '"></a>
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
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['section'] = NULL;
$arguments19['partial'] = NULL;
$arguments19['delegate'] = NULL;
$arguments19['renderable'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$arguments19['default'] = NULL;
$arguments19['contentAs'] = NULL;
$arguments19['partial'] = 'DropIn/Before/All';
$arguments19['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
				';
return $output18;
};
$arguments14 = array();
$arguments14['section'] = NULL;
$arguments14['partial'] = NULL;
$arguments14['delegate'] = NULL;
$arguments14['renderable'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['optional'] = false;
$arguments14['default'] = NULL;
$arguments14['contentAs'] = NULL;
$arguments14['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array16['0'] = 'true';

$expression17 = function($context) {return TRUE;};
$arguments14['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression17(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['section'] = NULL;
$arguments27['partial'] = NULL;
$arguments27['delegate'] = NULL;
$arguments27['renderable'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['optional'] = false;
$arguments27['default'] = NULL;
$arguments27['contentAs'] = NULL;
$arguments27['partial'] = 'Header/All';
$arguments27['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
				';
return $output26;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array24 = array();
$array24['0'] = 'true';

$expression25 = function($context) {return TRUE;};
$arguments22['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output6 .= '
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
$arguments30['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array32 = array();
$array32['0'] = 'true';

$expression33 = function($context) {return TRUE;};
$arguments30['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['section'] = NULL;
$arguments39['partial'] = NULL;
$arguments39['delegate'] = NULL;
$arguments39['renderable'] = NULL;
$arguments39['arguments'] = array (
);
$arguments39['optional'] = false;
$arguments39['default'] = NULL;
$arguments39['contentAs'] = NULL;
$arguments39['partial'] = 'Footer/All';
$arguments39['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
				';
return $output38;
};
$arguments34 = array();
$arguments34['section'] = NULL;
$arguments34['partial'] = NULL;
$arguments34['delegate'] = NULL;
$arguments34['renderable'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['optional'] = false;
$arguments34['default'] = NULL;
$arguments34['contentAs'] = NULL;
$arguments34['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array36 = array();
$array36['0'] = 'true';

$expression37 = function($context) {return TRUE;};
$arguments34['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output6 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output46 = '';

$output46 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['section'] = NULL;
$arguments47['partial'] = NULL;
$arguments47['delegate'] = NULL;
$arguments47['renderable'] = NULL;
$arguments47['arguments'] = array (
);
$arguments47['optional'] = false;
$arguments47['default'] = NULL;
$arguments47['contentAs'] = NULL;
$arguments47['partial'] = 'DropIn/After/All';
$arguments47['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
				';
return $output46;
};
$arguments42 = array();
$arguments42['section'] = NULL;
$arguments42['partial'] = NULL;
$arguments42['delegate'] = NULL;
$arguments42['renderable'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['optional'] = false;
$arguments42['default'] = NULL;
$arguments42['contentAs'] = NULL;
$arguments42['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array44 = array();
$array44['0'] = 'true';

$expression45 = function($context) {return TRUE;};
$arguments42['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression45(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)
					),
					$renderingContext
				);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output6 .= '
		

		';
return $output6;
};
$arguments4['__elseClosures'][] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '

			<a id="c';
$array51 = array (
);
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid', $array51)]);

$output50 .= '"></a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$output57 = '';

$output57 .= '
				<a id="c';
$array58 = array (
);
$output57 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array58)]);

$output57 .= '"></a>
			';
return $output57;
};
$arguments52 = array();
$arguments52['then'] = NULL;
$arguments52['else'] = NULL;
$arguments52['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
$array55 = array (
);$array54['0'] = $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID', $array55);

$expression56 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments52['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression56(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments52['__thenClosure'] = $renderChildrenClosure53;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
				<div class="frame-space-before-';
$array65 = array (
);
$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array65)]);

$output64 .= '"></div>
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
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_before_class', $array62);

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments59['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments59['__thenClosure'] = $renderChildrenClosure60;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
$output70 = '';

$output70 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['section'] = NULL;
$arguments71['partial'] = NULL;
$arguments71['delegate'] = NULL;
$arguments71['renderable'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['optional'] = false;
$arguments71['default'] = NULL;
$arguments71['contentAs'] = NULL;
$arguments71['partial'] = 'DropIn/Before/All';
$arguments71['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output70 .= '
			';
return $output70;
};
$arguments66 = array();
$arguments66['section'] = NULL;
$arguments66['partial'] = NULL;
$arguments66['delegate'] = NULL;
$arguments66['renderable'] = NULL;
$arguments66['arguments'] = array (
);
$arguments66['optional'] = false;
$arguments66['default'] = NULL;
$arguments66['contentAs'] = NULL;
$arguments66['section'] = 'Before';
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array68['0'] = 'true';

$expression69 = function($context) {return TRUE;};
$arguments66['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression69(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments79 = array();
$arguments79['section'] = NULL;
$arguments79['partial'] = NULL;
$arguments79['delegate'] = NULL;
$arguments79['renderable'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['optional'] = false;
$arguments79['default'] = NULL;
$arguments79['contentAs'] = NULL;
$arguments79['partial'] = 'Header/All';
$arguments79['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
			';
return $output78;
};
$arguments74 = array();
$arguments74['section'] = NULL;
$arguments74['partial'] = NULL;
$arguments74['delegate'] = NULL;
$arguments74['renderable'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['optional'] = false;
$arguments74['default'] = NULL;
$arguments74['contentAs'] = NULL;
$arguments74['section'] = 'Header';
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array76['0'] = 'true';

$expression77 = function($context) {return TRUE;};
$arguments74['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['section'] = NULL;
$arguments82['partial'] = NULL;
$arguments82['delegate'] = NULL;
$arguments82['renderable'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$arguments82['default'] = NULL;
$arguments82['contentAs'] = NULL;
$arguments82['section'] = 'Main';
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array84['0'] = 'true';

$expression85 = function($context) {return TRUE;};
$arguments82['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression85(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['section'] = NULL;
$arguments91['partial'] = NULL;
$arguments91['delegate'] = NULL;
$arguments91['renderable'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['optional'] = false;
$arguments91['default'] = NULL;
$arguments91['contentAs'] = NULL;
$arguments91['partial'] = 'Footer/All';
$arguments91['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output90 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output90 .= '
			';
return $output90;
};
$arguments86 = array();
$arguments86['section'] = NULL;
$arguments86['partial'] = NULL;
$arguments86['delegate'] = NULL;
$arguments86['renderable'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['optional'] = false;
$arguments86['default'] = NULL;
$arguments86['contentAs'] = NULL;
$arguments86['section'] = 'Footer';
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array88['0'] = 'true';

$expression89 = function($context) {return TRUE;};
$arguments86['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression89(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['section'] = NULL;
$arguments99['partial'] = NULL;
$arguments99['delegate'] = NULL;
$arguments99['renderable'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['optional'] = false;
$arguments99['default'] = NULL;
$arguments99['contentAs'] = NULL;
$arguments99['partial'] = 'DropIn/After/All';
$arguments99['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
			';
return $output98;
};
$arguments94 = array();
$arguments94['section'] = NULL;
$arguments94['partial'] = NULL;
$arguments94['delegate'] = NULL;
$arguments94['renderable'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$arguments94['default'] = NULL;
$arguments94['contentAs'] = NULL;
$arguments94['section'] = 'After';
// Rendering Boolean node
// Rendering Array
$array96 = array();
$array96['0'] = 'true';

$expression97 = function($context) {return TRUE;};
$arguments94['optional'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression97(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array96)
					),
					$renderingContext
				);

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output50 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output107 = '';

$output107 .= '
				<div class="frame-space-after-';
$array108 = array (
);
$output107 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array108)]);

$output107 .= '"></div>
			';
return $output107;
};
$arguments102 = array();
$arguments102['then'] = NULL;
$arguments102['else'] = NULL;
$arguments102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array104 = array();
$array105 = array (
);$array104['0'] = $renderingContext->getVariableProvider()->getByPath('data.space_after_class', $array105);

$expression106 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)
					),
					$renderingContext
				);
$arguments102['__thenClosure'] = $renderChildrenClosure103;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output50 .= '

		';
return $output50;
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#