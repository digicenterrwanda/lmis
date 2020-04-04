<?php

class BackendUser_action_index_612e5b823609866489e50d865f89d50023afaf23 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) 'Default';
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
 * section headline
 */
public function section_9cd7c186300be56726877e2025e8375d991b084a(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['key'] = NULL;
$arguments1['id'] = NULL;
$arguments1['default'] = NULL;
$arguments1['htmlEscape'] = NULL;
$arguments1['arguments'] = NULL;
$arguments1['extensionName'] = NULL;
$arguments1['key'] = 'backendUserListing';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
';

return $output0;
}
/**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output3 = '';

$output3 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
		Listing of users on compare list
	';
};
$arguments4 = array();

$output3 .= NULL;

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['key'] = NULL;
$arguments12['id'] = NULL;
$arguments12['default'] = NULL;
$arguments12['htmlEscape'] = NULL;
$arguments12['arguments'] = NULL;
$arguments12['extensionName'] = NULL;
$arguments12['key'] = 'section.compare';
$arguments12['default'] = 'Compare';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '</h3>
		<div class="table-fit">
			<table id="typo3-backend-user-list-compare" class="table table-hover">
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output17 = '';

$output17 .= '
						<tr>
							<td>
								<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array18 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array18)]);

$output17 .= '" title="id=';
$array19 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array19)]);

$output17 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['backendUser'] = 0;
$arguments20['size'] = 32;
$arguments20['showIcon'] = false;
$array22 = array (
);$arguments20['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array22);
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array23['0'] = 'TRUE';

$expression24 = function($context) {return TRUE;};
$arguments20['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);

$output17 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output17 .= '
								</a>
							</td>
							<td class="col-title">
								';
$array25 = array (
);
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.userName', $array25)]);

$output17 .= '
							</td>
							<td>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['identifier'] = NULL;
$arguments31['size'] = 'small';
$arguments31['overlay'] = NULL;
$arguments31['state'] = 'default';
$arguments31['alternativeMarkupIdentifier'] = NULL;
$arguments31['identifier'] = 'actions-selection-delete';

$output30 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
								';
return $output30;
};
$arguments26 = array();
$arguments26['action'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['controller'] = NULL;
$arguments26['extensionName'] = NULL;
$arguments26['pluginName'] = NULL;
$arguments26['pageUid'] = NULL;
$arguments26['pageType'] = 0;
$arguments26['noCache'] = false;
$arguments26['noCacheHash'] = false;
$arguments26['section'] = '';
$arguments26['format'] = '';
$arguments26['linkAccessRestrictedPages'] = false;
$arguments26['additionalParams'] = array (
);
$arguments26['absolute'] = false;
$arguments26['addQueryString'] = false;
$arguments26['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments26['addQueryStringMethod'] = NULL;
$arguments26['additionalAttributes'] = NULL;
$arguments26['data'] = NULL;
$arguments26['class'] = NULL;
$arguments26['dir'] = NULL;
$arguments26['id'] = NULL;
$arguments26['lang'] = NULL;
$arguments26['style'] = NULL;
$arguments26['title'] = NULL;
$arguments26['accesskey'] = NULL;
$arguments26['tabindex'] = NULL;
$arguments26['onclick'] = NULL;
$arguments26['name'] = NULL;
$arguments26['rel'] = NULL;
$arguments26['rev'] = NULL;
$arguments26['target'] = NULL;
$arguments26['action'] = 'removeFromCompareList';
// Rendering Array
$array28 = array();
$array29 = array (
);$array28['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array29);
$arguments26['arguments'] = $array28;
$arguments26['class'] = 'pull-right btn btn-default';

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output17 .= '
							</td>
						</tr>
					';
return $output17;
};
$arguments14 = array();
$arguments14['each'] = NULL;
$arguments14['as'] = NULL;
$arguments14['key'] = NULL;
$arguments14['reverse'] = false;
$arguments14['iteration'] = NULL;
$array16 = array (
);$arguments14['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array16);
$arguments14['as'] = 'compareUser';

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output11 .= '
				</tbody>
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['additionalAttributes'] = NULL;
$arguments36['data'] = NULL;
$arguments36['name'] = NULL;
$arguments36['value'] = NULL;
$arguments36['property'] = NULL;
$arguments36['disabled'] = NULL;
$arguments36['class'] = NULL;
$arguments36['dir'] = NULL;
$arguments36['id'] = NULL;
$arguments36['lang'] = NULL;
$arguments36['style'] = NULL;
$arguments36['title'] = NULL;
$arguments36['accesskey'] = NULL;
$arguments36['tabindex'] = NULL;
$arguments36['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['key'] = 'compareUserList';
$arguments38['default'] = 'Compare user list';
$arguments36['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
$arguments36['class'] = 'btn btn-default';

$output35 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '
		';
return $output35;
};
$arguments33 = array();
$arguments33['additionalAttributes'] = NULL;
$arguments33['data'] = NULL;
$arguments33['action'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['controller'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['pluginName'] = NULL;
$arguments33['pageUid'] = NULL;
$arguments33['object'] = NULL;
$arguments33['pageType'] = 0;
$arguments33['noCache'] = false;
$arguments33['noCacheHash'] = false;
$arguments33['section'] = '';
$arguments33['format'] = '';
$arguments33['additionalParams'] = array (
);
$arguments33['absolute'] = false;
$arguments33['addQueryString'] = false;
$arguments33['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments33['addQueryStringMethod'] = 'GET';
$arguments33['fieldNamePrefix'] = NULL;
$arguments33['actionUri'] = NULL;
$arguments33['objectName'] = NULL;
$arguments33['hiddenFieldClassName'] = NULL;
$arguments33['enctype'] = NULL;
$arguments33['method'] = NULL;
$arguments33['name'] = NULL;
$arguments33['onreset'] = NULL;
$arguments33['onsubmit'] = NULL;
$arguments33['target'] = NULL;
$arguments33['novalidate'] = NULL;
$arguments33['class'] = NULL;
$arguments33['dir'] = NULL;
$arguments33['id'] = NULL;
$arguments33['lang'] = NULL;
$arguments33['style'] = NULL;
$arguments33['title'] = NULL;
$arguments33['accesskey'] = NULL;
$arguments33['tabindex'] = NULL;
$arguments33['onclick'] = NULL;
$arguments33['action'] = 'compare';

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output11 .= '
		<hr>
	';
return $output11;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array8 = array();
$array9 = array (
);$array8['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array9);

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression10(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = $renderChildrenClosure7;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return '
		Filter section
	';
};
$arguments40 = array();

$output3 .= NULL;

$output3 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments42['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array44 = array();
$array45 = array (
);$array44['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array45);
$array46 = array (
);$array44['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array46);
$arguments42['arguments'] = $array44;

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output3 .= '

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
$arguments47['partial'] = 'BackendUser/PaginatedListWidget';
$arguments47['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output3 .= '

';

return $output3;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output50 = '';

$output50 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['name'] = NULL;
$arguments51['name'] = 'Default';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
	<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['key'] = NULL;
$arguments56['id'] = NULL;
$arguments56['default'] = NULL;
$arguments56['htmlEscape'] = NULL;
$arguments56['arguments'] = NULL;
$arguments56['extensionName'] = NULL;
$arguments56['key'] = 'backendUserListing';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '</h1>
';
return $output55;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'headline';

$output50 .= NULL;

$output50 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output60 = '';

$output60 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '
		Listing of users on compare list
	';
};
$arguments61 = array();

$output60 .= NULL;

$output60 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
		<h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments69 = array();
$arguments69['key'] = NULL;
$arguments69['id'] = NULL;
$arguments69['default'] = NULL;
$arguments69['htmlEscape'] = NULL;
$arguments69['arguments'] = NULL;
$arguments69['extensionName'] = NULL;
$arguments69['key'] = 'section.compare';
$arguments69['default'] = 'Compare';

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output68 .= '</h3>
		<div class="table-fit">
			<table id="typo3-backend-user-list-compare" class="table table-hover">
				<tbody>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
						<tr>
							<td>
								<a href="#" class="t3js-contextmenutrigger" data-table="be_users" data-uid="';
$array75 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array75)]);

$output74 .= '" title="id=';
$array76 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array76)]);

$output74 .= '">
									';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['backendUser'] = 0;
$arguments77['size'] = 32;
$arguments77['showIcon'] = false;
$array79 = array (
);$arguments77['backendUser'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array79);
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array80['0'] = 'TRUE';

$expression81 = function($context) {return TRUE;};
$arguments77['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression81(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);

$output74 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output74 .= '
								</a>
							</td>
							<td class="col-title">
								';
$array82 = array (
);
$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('compareUser.userName', $array82)]);

$output74 .= '
							</td>
							<td>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['identifier'] = NULL;
$arguments88['size'] = 'small';
$arguments88['overlay'] = NULL;
$arguments88['state'] = 'default';
$arguments88['alternativeMarkupIdentifier'] = NULL;
$arguments88['identifier'] = 'actions-selection-delete';

$output87 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
								';
return $output87;
};
$arguments83 = array();
$arguments83['action'] = NULL;
$arguments83['arguments'] = array (
);
$arguments83['controller'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['pluginName'] = NULL;
$arguments83['pageUid'] = NULL;
$arguments83['pageType'] = 0;
$arguments83['noCache'] = false;
$arguments83['noCacheHash'] = false;
$arguments83['section'] = '';
$arguments83['format'] = '';
$arguments83['linkAccessRestrictedPages'] = false;
$arguments83['additionalParams'] = array (
);
$arguments83['absolute'] = false;
$arguments83['addQueryString'] = false;
$arguments83['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments83['addQueryStringMethod'] = NULL;
$arguments83['additionalAttributes'] = NULL;
$arguments83['data'] = NULL;
$arguments83['class'] = NULL;
$arguments83['dir'] = NULL;
$arguments83['id'] = NULL;
$arguments83['lang'] = NULL;
$arguments83['style'] = NULL;
$arguments83['title'] = NULL;
$arguments83['accesskey'] = NULL;
$arguments83['tabindex'] = NULL;
$arguments83['onclick'] = NULL;
$arguments83['name'] = NULL;
$arguments83['rel'] = NULL;
$arguments83['rev'] = NULL;
$arguments83['target'] = NULL;
$arguments83['action'] = 'removeFromCompareList';
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['uid'] = $renderingContext->getVariableProvider()->getByPath('compareUser.uid', $array86);
$arguments83['arguments'] = $array85;
$arguments83['class'] = 'pull-right btn btn-default';

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output74 .= '
							</td>
						</tr>
					';
return $output74;
};
$arguments71 = array();
$arguments71['each'] = NULL;
$arguments71['as'] = NULL;
$arguments71['key'] = NULL;
$arguments71['reverse'] = false;
$arguments71['iteration'] = NULL;
$array73 = array (
);$arguments71['each'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array73);
$arguments71['as'] = 'compareUser';

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= '
				</tbody>
			</table>
		</div>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output92 = '';

$output92 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['name'] = NULL;
$arguments93['value'] = NULL;
$arguments93['property'] = NULL;
$arguments93['disabled'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['key'] = 'compareUserList';
$arguments95['default'] = 'Compare user list';
$arguments93['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
$arguments93['class'] = 'btn btn-default';

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
		';
return $output92;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['action'] = NULL;
$arguments90['arguments'] = array (
);
$arguments90['controller'] = NULL;
$arguments90['extensionName'] = NULL;
$arguments90['pluginName'] = NULL;
$arguments90['pageUid'] = NULL;
$arguments90['object'] = NULL;
$arguments90['pageType'] = 0;
$arguments90['noCache'] = false;
$arguments90['noCacheHash'] = false;
$arguments90['section'] = '';
$arguments90['format'] = '';
$arguments90['additionalParams'] = array (
);
$arguments90['absolute'] = false;
$arguments90['addQueryString'] = false;
$arguments90['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments90['addQueryStringMethod'] = 'GET';
$arguments90['fieldNamePrefix'] = NULL;
$arguments90['actionUri'] = NULL;
$arguments90['objectName'] = NULL;
$arguments90['hiddenFieldClassName'] = NULL;
$arguments90['enctype'] = NULL;
$arguments90['method'] = NULL;
$arguments90['name'] = NULL;
$arguments90['onreset'] = NULL;
$arguments90['onsubmit'] = NULL;
$arguments90['target'] = NULL;
$arguments90['novalidate'] = NULL;
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['action'] = 'compare';

$output68 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output68 .= '
		<hr>
	';
return $output68;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
$array66 = array (
);$array65['0'] = $renderingContext->getVariableProvider()->getByPath('compareUserList', $array66);

$expression67 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output60 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return '
		Filter section
	';
};
$arguments97 = array();

$output60 .= NULL;

$output60 .= '
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
$arguments99['partial'] = 'Filters/BackendUser/Index';
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['demand'] = $renderingContext->getVariableProvider()->getByPath('demand', $array102);
$array103 = array (
);$array101['backendUserGroups'] = $renderingContext->getVariableProvider()->getByPath('backendUserGroups', $array103);
$arguments99['arguments'] = $array101;

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output60 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['section'] = NULL;
$arguments104['partial'] = NULL;
$arguments104['delegate'] = NULL;
$arguments104['renderable'] = NULL;
$arguments104['arguments'] = array (
);
$arguments104['optional'] = false;
$arguments104['default'] = NULL;
$arguments104['contentAs'] = NULL;
$arguments104['partial'] = 'BackendUser/PaginatedListWidget';
$arguments104['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output60 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output60 .= '

';
return $output60;
};
$arguments58 = array();
$arguments58['name'] = NULL;
$arguments58['name'] = 'content';

$output50 .= NULL;

$output50 .= '
';

return $output50;
}


}
#