<?php

class partial_BackendUser_IndexListRow_b4e7ae17a0f5ca68e1b5380130aeb7979658696c extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
  'bu' => 
  array (
    0 => 'TYPO3\\CMS\\Beuser\\ViewHelpers',
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


<tr>
	<td>
		<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array1)]);

$output0 .= '" title="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure3 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments2 = array();
$arguments2['then'] = NULL;
$arguments2['else'] = NULL;
$arguments2['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array4 = array();
$array5 = array (
);$array4['0'] = call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array5)]);

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments2['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression6(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)
					),
					$renderingContext
				);
$output7 = '';
$array8 = array (
);
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.description', $array8)]);

$output7 .= ' ';
$arguments2['then'] = $output7;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments2, $renderChildrenClosure3, $renderingContext);

$output0 .= '(id=';
$array9 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array9)]);

$output0 .= ')">
			';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments10 = array();
$arguments10['backendUser'] = 0;
$arguments10['size'] = 32;
$arguments10['showIcon'] = false;
$array12 = array (
);$arguments10['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array12);
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array13['0'] = 'TRUE';

$expression14 = function($context) {return TRUE;};
$arguments10['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);

$output0 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
		</a>
	</td>
	<td class="col-title">
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['parameters'] = NULL;
$output17 = '';

$output17 .= 'edit[be_users][';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array18)]);

$output17 .= ']=edit&returnUrl=';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array19)]);
$arguments15['parameters'] = $output17;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '">
			<b>';
$array20 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.userName', $array20)]);

$output0 .= '</b>
		</a>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
			<span class="label label-success">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments30 = array();
$arguments30['key'] = NULL;
$arguments30['id'] = NULL;
$arguments30['default'] = NULL;
$arguments30['htmlEscape'] = NULL;
$arguments30['arguments'] = NULL;
$arguments30['extensionName'] = NULL;
$arguments30['key'] = 'online';

$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output29 .= '</span>
		';
return $output29;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments24 = array();
$arguments24['array'] = NULL;
$arguments24['key'] = NULL;
$arguments24['subKey'] = '';
$array26 = array (
);$arguments24['array'] = $renderingContext->getVariableProvider()->getByPath('onlineBackendUsers', $array26);
$array27 = array (
);$arguments24['key'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array27);
$array23['0'] = TYPO3\CMS\Beuser\ViewHelpers\ArrayElementViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output0 .= '
		<br />
		<a href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments32 = array();
$arguments32['parameters'] = NULL;
$output34 = '';

$output34 .= 'edit[be_users][';
$array35 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array35)]);

$output34 .= ']=edit&returnUrl=';
$array36 = array (
);
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array36)]);
$arguments32['parameters'] = $output34;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '">';
$array37 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.realName', $array37)]);

$output0 .= '</a>
	</td>
	<td>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array62 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array62);
};
$arguments57 = array();
$arguments57['date'] = NULL;
$arguments57['format'] = '';
$arguments57['base'] = NULL;
$output59 = '';
$array60 = array (
);
$output59 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array60);

$output59 .= ' ';
$array61 = array (
);
$output59 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array61);
$arguments57['format'] = $output59;
$renderChildrenClosure58 = ($arguments57['date'] !== null) ? function() use ($arguments57) { return $arguments57['date']; } : $renderChildrenClosure58;
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
			';
return $output56;
};
$arguments54 = array();

$output53 .= '';

$output53 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['key'] = 'never';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
			';
return $output65;
};
$arguments63 = array();
$arguments63['if'] = NULL;

$output53 .= '';

$output53 .= '
		';
return $output53;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array50 = array();
$array51 = array (
);$array50['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array51);

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression52(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array50)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('backendUser.lastLoginDateAndTime', $array46);
};
$arguments41 = array();
$arguments41['date'] = NULL;
$arguments41['format'] = '';
$arguments41['base'] = NULL;
$output43 = '';
$array44 = array (
);
$output43 .= $renderingContext->getVariableProvider()->getByPath('dateFormat', $array44);

$output43 .= ' ';
$array45 = array (
);
$output43 .= $renderingContext->getVariableProvider()->getByPath('timeFormat', $array45);
$arguments41['format'] = $output43;
$renderChildrenClosure42 = ($arguments41['date'] !== null) ? function() use ($arguments41) { return $arguments41['date']; } : $renderChildrenClosure42;
$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= '
			';
return $output40;
};
$arguments38['__elseClosures'][] = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments48 = array();
$arguments48['key'] = NULL;
$arguments48['id'] = NULL;
$arguments48['default'] = NULL;
$arguments48['htmlEscape'] = NULL;
$arguments48['arguments'] = NULL;
$arguments48['extensionName'] = NULL;
$arguments48['key'] = 'never';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
			';
return $output47;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output0 .= '
	</td>
	<td class="col-control">
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['parameters'] = NULL;
$output70 = '';

$output70 .= 'edit[be_users][';
$array71 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array71)]);

$output70 .= ']=edit&returnUrl=';
$array72 = array (
);
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('returnUrl', $array72)]);
$arguments68['parameters'] = $output70;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\EditRecordViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['identifier'] = NULL;
$arguments73['size'] = 'small';
$arguments73['overlay'] = NULL;
$arguments73['state'] = 'default';
$arguments73['alternativeMarkupIdentifier'] = NULL;
$arguments73['identifier'] = 'actions-open';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output0 .= '</a>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['identifier'] = NULL;
$arguments138['size'] = 'small';
$arguments138['overlay'] = NULL;
$arguments138['state'] = 'default';
$arguments138['alternativeMarkupIdentifier'] = NULL;
$arguments138['identifier'] = 'empty-empty';

$output137 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext);

$output137 .= '</span>
				';
return $output137;
};
$arguments135 = array();

$output134 .= '';

$output134 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output168 = '';

$output168 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure170 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['parameters'] = NULL;
$arguments172['redirectUrl'] = '';
$output174 = '';

$output174 .= 'data[be_users][';
$array175 = array (
);
$output174 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array175)]);

$output174 .= '][disable]=0';
$arguments172['parameters'] = $output174;
$array176 = array (
);$arguments172['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array176);

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext)]);

$output171 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['key'] = NULL;
$arguments177['id'] = NULL;
$arguments177['default'] = NULL;
$arguments177['htmlEscape'] = NULL;
$arguments177['arguments'] = NULL;
$arguments177['extensionName'] = NULL;
$arguments177['key'] = 'visibility.unhide';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);

$output171 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['identifier'] = NULL;
$arguments179['size'] = 'small';
$arguments179['overlay'] = NULL;
$arguments179['state'] = 'default';
$arguments179['alternativeMarkupIdentifier'] = NULL;
$arguments179['identifier'] = 'actions-edit-unhide';

$output171 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output171 .= '</a>
						';
return $output171;
};
$arguments169 = array();

$output168 .= '';

$output168 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['parameters'] = NULL;
$arguments184['redirectUrl'] = '';
$output186 = '';

$output186 .= 'data[be_users][';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array187)]);

$output186 .= '][disable]=1';
$arguments184['parameters'] = $output186;
$array188 = array (
);$arguments184['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array188);

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext)]);

$output183 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['key'] = 'visibility.hide';

$output183 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext)]);

$output183 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments191 = array();
$arguments191['identifier'] = NULL;
$arguments191['size'] = 'small';
$arguments191['overlay'] = NULL;
$arguments191['state'] = 'default';
$arguments191['alternativeMarkupIdentifier'] = NULL;
$arguments191['identifier'] = 'actions-edit-hide';

$output183 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output183 .= '</a>
						';
return $output183;
};
$arguments181 = array();
$arguments181['if'] = NULL;

$output168 .= '';

$output168 .= '
					';
return $output168;
};
$arguments143 = array();
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array166);
$array165['1'] = ' == 1';

$expression167 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments143['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression167(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)
					),
					$renderingContext
				);
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['parameters'] = NULL;
$arguments146['redirectUrl'] = '';
$output148 = '';

$output148 .= 'data[be_users][';
$array149 = array (
);
$output148 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array149)]);

$output148 .= '][disable]=0';
$arguments146['parameters'] = $output148;
$array150 = array (
);$arguments146['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array150);

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments146, $renderChildrenClosure147, $renderingContext)]);

$output145 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['key'] = NULL;
$arguments151['id'] = NULL;
$arguments151['default'] = NULL;
$arguments151['htmlEscape'] = NULL;
$arguments151['arguments'] = NULL;
$arguments151['extensionName'] = NULL;
$arguments151['key'] = 'visibility.unhide';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext)]);

$output145 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['identifier'] = NULL;
$arguments153['size'] = 'small';
$arguments153['overlay'] = NULL;
$arguments153['state'] = 'default';
$arguments153['alternativeMarkupIdentifier'] = NULL;
$arguments153['identifier'] = 'actions-edit-unhide';

$output145 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output145 .= '</a>
						';
return $output145;
};
$arguments143['__elseClosures'][] = function() use ($renderingContext, $self) {
$output155 = '';

$output155 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['parameters'] = NULL;
$arguments156['redirectUrl'] = '';
$output158 = '';

$output158 .= 'data[be_users][';
$array159 = array (
);
$output158 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array159)]);

$output158 .= '][disable]=1';
$arguments156['parameters'] = $output158;
$array160 = array (
);$arguments156['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array160);

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output155 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['key'] = 'visibility.hide';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output155 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['identifier'] = NULL;
$arguments163['size'] = 'small';
$arguments163['overlay'] = NULL;
$arguments163['state'] = 'default';
$arguments163['alternativeMarkupIdentifier'] = NULL;
$arguments163['identifier'] = 'actions-edit-hide';

$output155 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output155 .= '</a>
						';
return $output155;
};

$output142 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output142 .= '
				';
return $output142;
};
$arguments140 = array();
$arguments140['if'] = NULL;

$output134 .= '';

$output134 .= '
			';
return $output134;
};
$arguments75 = array();
$arguments75['then'] = NULL;
$arguments75['else'] = NULL;
$arguments75['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.currentlyLoggedIn', $array132);
$array131['1'] = ' == 1';

$expression133 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments75['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments75['__thenClosure'] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
					<span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['identifier'] = NULL;
$arguments78['size'] = 'small';
$arguments78['overlay'] = NULL;
$arguments78['state'] = 'default';
$arguments78['alternativeMarkupIdentifier'] = NULL;
$arguments78['identifier'] = 'empty-empty';

$output77 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '</span>
				';
return $output77;
};
$arguments75['__elseClosures'][] = function() use ($renderingContext, $self) {
$output80 = '';

$output80 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments110 = array();
$arguments110['parameters'] = NULL;
$arguments110['redirectUrl'] = '';
$output112 = '';

$output112 .= 'data[be_users][';
$array113 = array (
);
$output112 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array113)]);

$output112 .= '][disable]=0';
$arguments110['parameters'] = $output112;
$array114 = array (
);$arguments110['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array114);

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output109 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments115 = array();
$arguments115['key'] = NULL;
$arguments115['id'] = NULL;
$arguments115['default'] = NULL;
$arguments115['htmlEscape'] = NULL;
$arguments115['arguments'] = NULL;
$arguments115['extensionName'] = NULL;
$arguments115['key'] = 'visibility.unhide';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext)]);

$output109 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments117 = array();
$arguments117['identifier'] = NULL;
$arguments117['size'] = 'small';
$arguments117['overlay'] = NULL;
$arguments117['state'] = 'default';
$arguments117['alternativeMarkupIdentifier'] = NULL;
$arguments117['identifier'] = 'actions-edit-unhide';

$output109 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext);

$output109 .= '</a>
						';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['parameters'] = NULL;
$arguments122['redirectUrl'] = '';
$output124 = '';

$output124 .= 'data[be_users][';
$array125 = array (
);
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array125)]);

$output124 .= '][disable]=1';
$arguments122['parameters'] = $output124;
$array126 = array (
);$arguments122['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array126);

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext)]);

$output121 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['key'] = NULL;
$arguments127['id'] = NULL;
$arguments127['default'] = NULL;
$arguments127['htmlEscape'] = NULL;
$arguments127['arguments'] = NULL;
$arguments127['extensionName'] = NULL;
$arguments127['key'] = 'visibility.hide';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output121 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments129 = array();
$arguments129['identifier'] = NULL;
$arguments129['size'] = 'small';
$arguments129['overlay'] = NULL;
$arguments129['state'] = 'default';
$arguments129['alternativeMarkupIdentifier'] = NULL;
$arguments129['identifier'] = 'actions-edit-hide';

$output121 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output121 .= '</a>
						';
return $output121;
};
$arguments119 = array();
$arguments119['if'] = NULL;

$output106 .= '';

$output106 .= '
					';
return $output106;
};
$arguments81 = array();
$arguments81['then'] = NULL;
$arguments81['else'] = NULL;
$arguments81['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('backendUser.isDisabled', $array104);
$array103['1'] = ' == 1';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments81['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments81['__thenClosure'] = function() use ($renderingContext, $self) {
$output83 = '';

$output83 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['parameters'] = NULL;
$arguments84['redirectUrl'] = '';
$output86 = '';

$output86 .= 'data[be_users][';
$array87 = array (
);
$output86 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array87)]);

$output86 .= '][disable]=0';
$arguments84['parameters'] = $output86;
$array88 = array (
);$arguments84['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array88);

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);

$output83 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments89 = array();
$arguments89['key'] = NULL;
$arguments89['id'] = NULL;
$arguments89['default'] = NULL;
$arguments89['htmlEscape'] = NULL;
$arguments89['arguments'] = NULL;
$arguments89['extensionName'] = NULL;
$arguments89['key'] = 'visibility.unhide';

$output83 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output83 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['identifier'] = NULL;
$arguments91['size'] = 'small';
$arguments91['overlay'] = NULL;
$arguments91['state'] = 'default';
$arguments91['alternativeMarkupIdentifier'] = NULL;
$arguments91['identifier'] = 'actions-edit-unhide';

$output83 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output83 .= '</a>
						';
return $output83;
};
$arguments81['__elseClosures'][] = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
							<a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['parameters'] = NULL;
$arguments94['redirectUrl'] = '';
$output96 = '';

$output96 .= 'data[be_users][';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array97)]);

$output96 .= '][disable]=1';
$arguments94['parameters'] = $output96;
$array98 = array (
);$arguments94['redirectUrl'] = $renderingContext->getVariableProvider()->getByPath('redirectUrl', $array98);

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Beuser\ViewHelpers\IssueCommandViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['key'] = NULL;
$arguments99['id'] = NULL;
$arguments99['default'] = NULL;
$arguments99['htmlEscape'] = NULL;
$arguments99['arguments'] = NULL;
$arguments99['extensionName'] = NULL;
$arguments99['key'] = 'visibility.hide';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output93 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['identifier'] = NULL;
$arguments101['size'] = 'small';
$arguments101['overlay'] = NULL;
$arguments101['state'] = 'default';
$arguments101['alternativeMarkupIdentifier'] = NULL;
$arguments101['identifier'] = 'actions-edit-hide';

$output93 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output93 .= '</a>
						';
return $output93;
};

$output80 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
				';
return $output80;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['backendUser'] = NULL;
$array195 = array (
);$arguments193['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array195);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\RemoveUserViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);

$output0 .= '
		</div>
		<div class="btn-group" role="group">
			<a class="btn btn-default" href="#" onclick="top.launchView(\'be_users\', \'';
$array196 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array196)]);

$output0 .= '\'); return false;">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments197 = array();
$arguments197['identifier'] = NULL;
$arguments197['size'] = 'small';
$arguments197['overlay'] = NULL;
$arguments197['state'] = 'default';
$arguments197['alternativeMarkupIdentifier'] = NULL;
$arguments197['identifier'] = 'actions-document-info';

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments197, $renderChildrenClosure198, $renderingContext);

$output0 .= '</a>
		</div>
		<div class="btn-group" role="group">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
$output224 = '';

$output224 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['identifier'] = NULL;
$arguments233['size'] = 'small';
$arguments233['overlay'] = NULL;
$arguments233['state'] = 'default';
$arguments233['alternativeMarkupIdentifier'] = NULL;
$arguments233['identifier'] = 'actions-remove';
$arguments233['size'] = 'small';

$output232 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['key'] = NULL;
$arguments235['id'] = NULL;
$arguments235['default'] = NULL;
$arguments235['htmlEscape'] = NULL;
$arguments235['arguments'] = NULL;
$arguments235['extensionName'] = NULL;
$arguments235['key'] = 'compare';

$output232 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext)]);

$output232 .= '
					';
return $output232;
};
$arguments228 = array();
$arguments228['action'] = NULL;
$arguments228['arguments'] = array (
);
$arguments228['controller'] = NULL;
$arguments228['extensionName'] = NULL;
$arguments228['pluginName'] = NULL;
$arguments228['pageUid'] = NULL;
$arguments228['pageType'] = 0;
$arguments228['noCache'] = false;
$arguments228['noCacheHash'] = false;
$arguments228['section'] = '';
$arguments228['format'] = '';
$arguments228['linkAccessRestrictedPages'] = false;
$arguments228['additionalParams'] = array (
);
$arguments228['absolute'] = false;
$arguments228['addQueryString'] = false;
$arguments228['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments228['addQueryStringMethod'] = NULL;
$arguments228['additionalAttributes'] = NULL;
$arguments228['data'] = NULL;
$arguments228['class'] = NULL;
$arguments228['dir'] = NULL;
$arguments228['id'] = NULL;
$arguments228['lang'] = NULL;
$arguments228['style'] = NULL;
$arguments228['title'] = NULL;
$arguments228['accesskey'] = NULL;
$arguments228['tabindex'] = NULL;
$arguments228['onclick'] = NULL;
$arguments228['name'] = NULL;
$arguments228['rel'] = NULL;
$arguments228['rev'] = NULL;
$arguments228['target'] = NULL;
$arguments228['action'] = 'removeFromCompareList';
// Rendering Array
$array230 = array();
$array231 = array (
);$array230['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array231);
$arguments228['arguments'] = $array230;
$arguments228['class'] = 'btn btn-default';

$output227 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments228, $renderChildrenClosure229, $renderingContext);

$output227 .= '
				';
return $output227;
};
$arguments225 = array();

$output224 .= '';

$output224 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
$output244 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['identifier'] = NULL;
$arguments245['size'] = 'small';
$arguments245['overlay'] = NULL;
$arguments245['state'] = 'default';
$arguments245['alternativeMarkupIdentifier'] = NULL;
$arguments245['identifier'] = 'actions-add';
$arguments245['size'] = 'small';

$output244 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments247 = array();
$arguments247['key'] = NULL;
$arguments247['id'] = NULL;
$arguments247['default'] = NULL;
$arguments247['htmlEscape'] = NULL;
$arguments247['arguments'] = NULL;
$arguments247['extensionName'] = NULL;
$arguments247['key'] = 'compare';

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext)]);
return $output244;
};
$arguments240 = array();
$arguments240['action'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['controller'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['pluginName'] = NULL;
$arguments240['pageUid'] = NULL;
$arguments240['pageType'] = 0;
$arguments240['noCache'] = false;
$arguments240['noCacheHash'] = false;
$arguments240['section'] = '';
$arguments240['format'] = '';
$arguments240['linkAccessRestrictedPages'] = false;
$arguments240['additionalParams'] = array (
);
$arguments240['absolute'] = false;
$arguments240['addQueryString'] = false;
$arguments240['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments240['addQueryStringMethod'] = NULL;
$arguments240['additionalAttributes'] = NULL;
$arguments240['data'] = NULL;
$arguments240['class'] = NULL;
$arguments240['dir'] = NULL;
$arguments240['id'] = NULL;
$arguments240['lang'] = NULL;
$arguments240['style'] = NULL;
$arguments240['title'] = NULL;
$arguments240['accesskey'] = NULL;
$arguments240['tabindex'] = NULL;
$arguments240['onclick'] = NULL;
$arguments240['name'] = NULL;
$arguments240['rel'] = NULL;
$arguments240['rev'] = NULL;
$arguments240['target'] = NULL;
$arguments240['action'] = 'addToCompareList';
// Rendering Array
$array242 = array();
$array243 = array (
);$array242['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array243);
$arguments240['arguments'] = $array242;
$arguments240['class'] = 'btn btn-default';

$output239 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);

$output239 .= '
				';
return $output239;
};
$arguments237 = array();
$arguments237['if'] = NULL;

$output224 .= '';

$output224 .= '
			';
return $output224;
};
$arguments199 = array();
$arguments199['then'] = NULL;
$arguments199['else'] = NULL;
$arguments199['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array221 = array();
$array222 = array (
);$array221['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserUidList.{backendUser.uid}', $array222);

$expression223 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments199['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array221)
					),
					$renderingContext
				);
$arguments199['__thenClosure'] = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments207 = array();
$arguments207['identifier'] = NULL;
$arguments207['size'] = 'small';
$arguments207['overlay'] = NULL;
$arguments207['state'] = 'default';
$arguments207['alternativeMarkupIdentifier'] = NULL;
$arguments207['identifier'] = 'actions-remove';
$arguments207['size'] = 'small';

$output206 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext);

$output206 .= '
						';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['key'] = 'compare';

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output206 .= '
					';
return $output206;
};
$arguments202 = array();
$arguments202['action'] = NULL;
$arguments202['arguments'] = array (
);
$arguments202['controller'] = NULL;
$arguments202['extensionName'] = NULL;
$arguments202['pluginName'] = NULL;
$arguments202['pageUid'] = NULL;
$arguments202['pageType'] = 0;
$arguments202['noCache'] = false;
$arguments202['noCacheHash'] = false;
$arguments202['section'] = '';
$arguments202['format'] = '';
$arguments202['linkAccessRestrictedPages'] = false;
$arguments202['additionalParams'] = array (
);
$arguments202['absolute'] = false;
$arguments202['addQueryString'] = false;
$arguments202['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments202['addQueryStringMethod'] = NULL;
$arguments202['additionalAttributes'] = NULL;
$arguments202['data'] = NULL;
$arguments202['class'] = NULL;
$arguments202['dir'] = NULL;
$arguments202['id'] = NULL;
$arguments202['lang'] = NULL;
$arguments202['style'] = NULL;
$arguments202['title'] = NULL;
$arguments202['accesskey'] = NULL;
$arguments202['tabindex'] = NULL;
$arguments202['onclick'] = NULL;
$arguments202['name'] = NULL;
$arguments202['rel'] = NULL;
$arguments202['rev'] = NULL;
$arguments202['target'] = NULL;
$arguments202['action'] = 'removeFromCompareList';
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array205);
$arguments202['arguments'] = $array204;
$arguments202['class'] = 'btn btn-default';

$output201 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
				';
return $output201;
};
$arguments199['__elseClosures'][] = function() use ($renderingContext, $self) {
$output211 = '';

$output211 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
$output216 = '';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments217 = array();
$arguments217['identifier'] = NULL;
$arguments217['size'] = 'small';
$arguments217['overlay'] = NULL;
$arguments217['state'] = 'default';
$arguments217['alternativeMarkupIdentifier'] = NULL;
$arguments217['identifier'] = 'actions-add';
$arguments217['size'] = 'small';

$output216 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['key'] = NULL;
$arguments219['id'] = NULL;
$arguments219['default'] = NULL;
$arguments219['htmlEscape'] = NULL;
$arguments219['arguments'] = NULL;
$arguments219['extensionName'] = NULL;
$arguments219['key'] = 'compare';

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext)]);
return $output216;
};
$arguments212 = array();
$arguments212['action'] = NULL;
$arguments212['arguments'] = array (
);
$arguments212['controller'] = NULL;
$arguments212['extensionName'] = NULL;
$arguments212['pluginName'] = NULL;
$arguments212['pageUid'] = NULL;
$arguments212['pageType'] = 0;
$arguments212['noCache'] = false;
$arguments212['noCacheHash'] = false;
$arguments212['section'] = '';
$arguments212['format'] = '';
$arguments212['linkAccessRestrictedPages'] = false;
$arguments212['additionalParams'] = array (
);
$arguments212['absolute'] = false;
$arguments212['addQueryString'] = false;
$arguments212['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments212['addQueryStringMethod'] = NULL;
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = NULL;
$arguments212['rel'] = NULL;
$arguments212['rev'] = NULL;
$arguments212['target'] = NULL;
$arguments212['action'] = 'addToCompareList';
// Rendering Array
$array214 = array();
$array215 = array (
);$array214['uid'] = $renderingContext->getVariableProvider()->getByPath('backendUser.uid', $array215);
$arguments212['arguments'] = $array214;
$arguments212['class'] = 'btn btn-default';

$output211 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);

$output211 .= '
				';
return $output211;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output0 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['backendUser'] = NULL;
$array251 = array (
);$arguments249['backendUser'] = $renderingContext->getVariableProvider()->getByPath('backendUser', $array251);

$output0 .= TYPO3\CMS\Beuser\ViewHelpers\SwitchUserViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output0 .= '
		</div>
	</td>
</tr>
';

return $output0;
}


}
#