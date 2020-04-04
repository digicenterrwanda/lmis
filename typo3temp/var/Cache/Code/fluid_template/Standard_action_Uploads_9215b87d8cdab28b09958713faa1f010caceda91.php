<?php

class Standard_action_Uploads_9215b87d8cdab28b09958713faa1f010caceda91 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<ul class="ce-uploads">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
				<li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
						<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['path'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['absolute'] = false;
$output19 = '';

$output19 .= 'Icons/FileIcons/';
$array20 = array (
);
$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array20)]);

$output19 .= '.gif';
$arguments17['path'] = $output19;
$arguments17['extensionName'] = 'frontend';

$output16 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output16 .= '" alt="">
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
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_type', $array14);
$array13['1'] = ' == 1';

$expression15 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output26 = '';

$output26 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
								<a href="';
$array72 = array (
);
$output71 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array72)]);

$output71 .= '" ';
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
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$output78 = '';

$output78 .= ' target="';
$array79 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array79)]);

$output78 .= '"';
$arguments73['then'] = $output78;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['then'] = NULL;
$arguments80['else'] = NULL;
$arguments80['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array82 = array();
$array83 = array (
);$array82['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array83);

$expression84 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments80['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression84(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array82)
					),
					$renderingContext
				);
$output85 = '';

$output85 .= ' title="';
$array86 = array (
);
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array86)]);

$output85 .= '"';
$arguments80['then'] = $output85;

$output71 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output71 .= '>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['class'] = NULL;
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$arguments87['alt'] = NULL;
$arguments87['file'] = NULL;
$arguments87['additionalConfig'] = array (
);
$arguments87['width'] = NULL;
$arguments87['height'] = NULL;
$arguments87['cropVariant'] = 'default';
$array89 = array (
);$arguments87['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array89);
$arguments87['width'] = 150;
$array90 = array (
);$arguments87['alt'] = $renderingContext->getVariableProvider()->getByPath('file.properties.alternative', $array90);

$output71 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output71 .= '
								</a>
							';
return $output71;
};
$arguments69 = array();

$output68 .= '';

$output68 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
$output93 = '';

$output93 .= '
								<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure95 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments94 = array();
$arguments94['path'] = NULL;
$arguments94['extensionName'] = NULL;
$arguments94['absolute'] = false;
$output96 = '';

$output96 .= 'Icons/FileIcons/';
$array97 = array (
);
$output96 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array97)]);

$output96 .= '.gif';
$arguments94['path'] = $output96;
$arguments94['extensionName'] = 'frontend';

$output93 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext)]);

$output93 .= '" alt="">
							';
return $output93;
};
$arguments91 = array();
$arguments91['if'] = NULL;

$output68 .= '';

$output68 .= '
						';
return $output68;
};
$arguments27 = array();
$arguments27['then'] = NULL;
$arguments27['else'] = NULL;
$arguments27['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array54 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['src'] = NULL;
$arguments55['treatIdAsReference'] = false;
$arguments55['image'] = NULL;
$arguments55['crop'] = NULL;
$arguments55['cropVariant'] = 'default';
$arguments55['width'] = NULL;
$arguments55['height'] = NULL;
$arguments55['minWidth'] = NULL;
$arguments55['minHeight'] = NULL;
$arguments55['maxWidth'] = NULL;
$arguments55['maxHeight'] = NULL;
$arguments55['absolute'] = false;
$output57 = '';

$output57 .= 'file:';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['then'] = NULL;
$arguments58['else'] = NULL;
$arguments58['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array60 = array();
$array61 = array (
);$array60['0'] = $renderingContext->getVariableProvider()->getByPath('file.originalFile', $array61);

$expression62 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments58['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression62(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)
					),
					$renderingContext
				);
$output63 = '';

$output63 .= 'file:';
$array64 = array (
);
$output63 .= $renderingContext->getVariableProvider()->getByPath('file.originalFile.uid', $array64);
$arguments58['then'] = $output63;
$output65 = '';

$output65 .= 'file:';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('file.uid', $array66);
$arguments58['else'] = $output65;

$output57 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);
$arguments55['src'] = $output57;
$array54['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);
$array54['1'] = ' != \'/\'';

$expression67 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '/');};
$arguments27['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression67(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)
					),
					$renderingContext
				);
$arguments27['__thenClosure'] = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
								<a href="';
$array30 = array (
);
$output29 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array30)]);

$output29 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['then'] = NULL;
$arguments31['else'] = NULL;
$arguments31['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array33 = array();
$array34 = array (
);$array33['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array34);

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments31['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression35(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)
					),
					$renderingContext
				);
$output36 = '';

$output36 .= ' target="';
$array37 = array (
);
$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array37)]);

$output36 .= '"';
$arguments31['then'] = $output36;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
$array41 = array (
);$array40['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array41);

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression42(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$output43 = '';

$output43 .= ' title="';
$array44 = array (
);
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array44)]);

$output43 .= '"';
$arguments38['then'] = $output43;

$output29 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output29 .= '>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
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
$arguments45['file'] = NULL;
$arguments45['additionalConfig'] = array (
);
$arguments45['width'] = NULL;
$arguments45['height'] = NULL;
$arguments45['cropVariant'] = 'default';
$array47 = array (
);$arguments45['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array47);
$arguments45['width'] = 150;
$array48 = array (
);$arguments45['alt'] = $renderingContext->getVariableProvider()->getByPath('file.properties.alternative', $array48);

$output29 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output29 .= '
								</a>
							';
return $output29;
};
$arguments27['__elseClosures'][] = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
								<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments50 = array();
$arguments50['path'] = NULL;
$arguments50['extensionName'] = NULL;
$arguments50['absolute'] = false;
$output52 = '';

$output52 .= 'Icons/FileIcons/';
$array53 = array (
);
$output52 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array53)]);

$output52 .= '.gif';
$arguments50['path'] = $output52;
$arguments50['extensionName'] = 'frontend';

$output49 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output49 .= '" alt="">
							';
return $output49;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
					';
return $output26;
};
$arguments21 = array();
$arguments21['then'] = NULL;
$arguments21['else'] = NULL;
$arguments21['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_type', $array24);
$array23['1'] = ' == 2';

$expression25 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments21['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
$arguments21['__thenClosure'] = $renderChildrenClosure22;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output10 .= '
					<div>
						<a href="';
$array98 = array (
);
$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array98)]);

$output10 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['then'] = NULL;
$arguments99['else'] = NULL;
$arguments99['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array101 = array();
$array102 = array (
);$array101['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array102);

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments99['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression103(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)
					),
					$renderingContext
				);
$output104 = '';

$output104 .= ' target="';
$array105 = array (
);
$output104 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array105)]);

$output104 .= '"';
$arguments99['then'] = $output104;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
$output111 = '';

$output111 .= ' title="';
$array112 = array (
);
$output111 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array112)]);

$output111 .= '"';
$arguments106['then'] = $output111;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output10 .= '>
							<span class="ce-uploads-fileName">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['then'] = NULL;
$arguments116['else'] = NULL;
$arguments116['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array118 = array();
$array119 = array (
);$array118['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array119);

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments116['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression120(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array118)
					),
					$renderingContext
				);
$array121 = array (
);$arguments116['then'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array121);
$array122 = array (
);$arguments116['else'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array122);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};
$arguments113 = array();
$arguments113['value'] = NULL;
$arguments113['keepQuotes'] = false;
$arguments113['encoding'] = 'UTF-8';
$arguments113['doubleEncode'] = true;
$value115 = ($arguments113['value'] !== NULL ? $arguments113['value'] : $renderChildrenClosure114());

$output10 .= !is_string($value115) && !(is_object($value115) && method_exists($value115, '__toString')) ? $value115 : htmlspecialchars($value115, ($arguments113['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments113['encoding'], $arguments113['doubleEncode']);

$output10 .= '</span>
						</a>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output134 = '';

$output134 .= '
								<span class="ce-uploads-description">';
$array135 = array (
);
$output134 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array135)]);

$output134 .= '</span>
							';
return $output134;
};
$arguments129 = array();
$arguments129['then'] = NULL;
$arguments129['else'] = NULL;
$arguments129['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_description', $array132);

$expression133 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments129['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression133(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array131)
					),
					$renderingContext
				);
$arguments129['__thenClosure'] = $renderChildrenClosure130;

$output128 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
						';
return $output128;
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__thenClosure'] = $renderChildrenClosure124;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output10 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
							<span class="ce-uploads-filesize">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['value'] = NULL;
$arguments142['decimals'] = 0;
$arguments142['decimalSeparator'] = '.';
$arguments142['thousandsSeparator'] = ',';
$arguments142['units'] = NULL;
$array144 = array (
);$arguments142['value'] = $renderingContext->getVariableProvider()->getByPath('file.properties.size', $array144);
$renderChildrenClosure143 = ($arguments142['value'] !== null) ? function() use ($arguments142) { return $arguments142['value']; } : $renderChildrenClosure143;
$output141 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext)]);

$output141 .= '</span>
						';
return $output141;
};
$arguments136 = array();
$arguments136['then'] = NULL;
$arguments136['else'] = NULL;
$arguments136['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array138 = array();
$array139 = array (
);$array138['0'] = $renderingContext->getVariableProvider()->getByPath('data.filelink_size', $array139);

$expression140 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments136['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression140(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)
					),
					$renderingContext
				);
$arguments136['__thenClosure'] = $renderChildrenClosure137;

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output10 .= '
					</div>
				</li>
			';
return $output10;
};
$arguments7 = array();
$arguments7['each'] = NULL;
$arguments7['as'] = NULL;
$arguments7['key'] = NULL;
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$array9 = array (
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array9);
$arguments7['as'] = 'file';
$arguments7['iteration'] = 'fileIterator';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
		</ul>
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
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('files', $array4);

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

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output145 = '';

$output145 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments146 = array();
$arguments146['name'] = NULL;
$arguments146['name'] = 'Default';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output145 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
$output156 = '';

$output156 .= '
		<ul class="ce-uploads">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
				<li>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
						<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['path'] = NULL;
$arguments167['extensionName'] = NULL;
$arguments167['absolute'] = false;
$output169 = '';

$output169 .= 'Icons/FileIcons/';
$array170 = array (
);
$output169 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array170)]);

$output169 .= '.gif';
$arguments167['path'] = $output169;
$arguments167['extensionName'] = 'frontend';

$output166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output166 .= '" alt="">
					';
return $output166;
};
$arguments161 = array();
$arguments161['then'] = NULL;
$arguments161['else'] = NULL;
$arguments161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array163 = array();
$array164 = array (
);$array163['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_type', $array164);
$array163['1'] = ' == 1';

$expression165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array163)
					),
					$renderingContext
				);
$arguments161['__thenClosure'] = $renderChildrenClosure162;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext);

$output160 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
$output176 = '';

$output176 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
$output221 = '';

$output221 .= '
								<a href="';
$array222 = array (
);
$output221 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array222)]);

$output221 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure224 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments223 = array();
$arguments223['then'] = NULL;
$arguments223['else'] = NULL;
$arguments223['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array225 = array();
$array226 = array (
);$array225['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array226);

$expression227 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments223['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression227(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array225)
					),
					$renderingContext
				);
$output228 = '';

$output228 .= ' target="';
$array229 = array (
);
$output228 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array229)]);

$output228 .= '"';
$arguments223['then'] = $output228;

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array233);

$expression234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$output235 = '';

$output235 .= ' title="';
$array236 = array (
);
$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array236)]);

$output235 .= '"';
$arguments230['then'] = $output235;

$output221 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output221 .= '>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['additionalAttributes'] = NULL;
$arguments237['data'] = NULL;
$arguments237['class'] = NULL;
$arguments237['dir'] = NULL;
$arguments237['id'] = NULL;
$arguments237['lang'] = NULL;
$arguments237['style'] = NULL;
$arguments237['title'] = NULL;
$arguments237['accesskey'] = NULL;
$arguments237['tabindex'] = NULL;
$arguments237['onclick'] = NULL;
$arguments237['alt'] = NULL;
$arguments237['file'] = NULL;
$arguments237['additionalConfig'] = array (
);
$arguments237['width'] = NULL;
$arguments237['height'] = NULL;
$arguments237['cropVariant'] = 'default';
$array239 = array (
);$arguments237['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array239);
$arguments237['width'] = 150;
$array240 = array (
);$arguments237['alt'] = $renderingContext->getVariableProvider()->getByPath('file.properties.alternative', $array240);

$output221 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext);

$output221 .= '
								</a>
							';
return $output221;
};
$arguments219 = array();

$output218 .= '';

$output218 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output243 = '';

$output243 .= '
								<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure245 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments244 = array();
$arguments244['path'] = NULL;
$arguments244['extensionName'] = NULL;
$arguments244['absolute'] = false;
$output246 = '';

$output246 .= 'Icons/FileIcons/';
$array247 = array (
);
$output246 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array247)]);

$output246 .= '.gif';
$arguments244['path'] = $output246;
$arguments244['extensionName'] = 'frontend';

$output243 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments244, $renderChildrenClosure245, $renderingContext)]);

$output243 .= '" alt="">
							';
return $output243;
};
$arguments241 = array();
$arguments241['if'] = NULL;

$output218 .= '';

$output218 .= '
						';
return $output218;
};
$arguments177 = array();
$arguments177['then'] = NULL;
$arguments177['else'] = NULL;
$arguments177['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure206 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments205 = array();
$arguments205['src'] = NULL;
$arguments205['treatIdAsReference'] = false;
$arguments205['image'] = NULL;
$arguments205['crop'] = NULL;
$arguments205['cropVariant'] = 'default';
$arguments205['width'] = NULL;
$arguments205['height'] = NULL;
$arguments205['minWidth'] = NULL;
$arguments205['minHeight'] = NULL;
$arguments205['maxWidth'] = NULL;
$arguments205['maxHeight'] = NULL;
$arguments205['absolute'] = false;
$output207 = '';

$output207 .= 'file:';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array210 = array();
$array211 = array (
);$array210['0'] = $renderingContext->getVariableProvider()->getByPath('file.originalFile', $array211);

$expression212 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)
					),
					$renderingContext
				);
$output213 = '';

$output213 .= 'file:';
$array214 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('file.originalFile.uid', $array214);
$arguments208['then'] = $output213;
$output215 = '';

$output215 .= 'file:';
$array216 = array (
);
$output215 .= $renderingContext->getVariableProvider()->getByPath('file.uid', $array216);
$arguments208['else'] = $output215;

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);
$arguments205['src'] = $output207;
$array204['0'] = TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments205, $renderChildrenClosure206, $renderingContext);
$array204['1'] = ' != \'/\'';

$expression217 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != '/');};
$arguments177['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression217(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments177['__thenClosure'] = function() use ($renderingContext, $self) {
$output179 = '';

$output179 .= '
								<a href="';
$array180 = array (
);
$output179 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array180)]);

$output179 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments181 = array();
$arguments181['then'] = NULL;
$arguments181['else'] = NULL;
$arguments181['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array183 = array();
$array184 = array (
);$array183['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array184);

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments181['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression185(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array183)
					),
					$renderingContext
				);
$output186 = '';

$output186 .= ' target="';
$array187 = array (
);
$output186 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array187)]);

$output186 .= '"';
$arguments181['then'] = $output186;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments188 = array();
$arguments188['then'] = NULL;
$arguments188['else'] = NULL;
$arguments188['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array190 = array();
$array191 = array (
);$array190['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array191);

$expression192 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments188['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array190)
					),
					$renderingContext
				);
$output193 = '';

$output193 .= ' title="';
$array194 = array (
);
$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array194)]);

$output193 .= '"';
$arguments188['then'] = $output193;

$output179 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output179 .= '>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments195 = array();
$arguments195['additionalAttributes'] = NULL;
$arguments195['data'] = NULL;
$arguments195['class'] = NULL;
$arguments195['dir'] = NULL;
$arguments195['id'] = NULL;
$arguments195['lang'] = NULL;
$arguments195['style'] = NULL;
$arguments195['title'] = NULL;
$arguments195['accesskey'] = NULL;
$arguments195['tabindex'] = NULL;
$arguments195['onclick'] = NULL;
$arguments195['alt'] = NULL;
$arguments195['file'] = NULL;
$arguments195['additionalConfig'] = array (
);
$arguments195['width'] = NULL;
$arguments195['height'] = NULL;
$arguments195['cropVariant'] = 'default';
$array197 = array (
);$arguments195['file'] = $renderingContext->getVariableProvider()->getByPath('file', $array197);
$arguments195['width'] = 150;
$array198 = array (
);$arguments195['alt'] = $renderingContext->getVariableProvider()->getByPath('file.properties.alternative', $array198);

$output179 .= TYPO3\CMS\Fluid\ViewHelpers\MediaViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output179 .= '
								</a>
							';
return $output179;
};
$arguments177['__elseClosures'][] = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
								<img src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments200 = array();
$arguments200['path'] = NULL;
$arguments200['extensionName'] = NULL;
$arguments200['absolute'] = false;
$output202 = '';

$output202 .= 'Icons/FileIcons/';
$array203 = array (
);
$output202 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.extension', $array203)]);

$output202 .= '.gif';
$arguments200['path'] = $output202;
$arguments200['extensionName'] = 'frontend';

$output199 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments200, $renderChildrenClosure201, $renderingContext)]);

$output199 .= '" alt="">
							';
return $output199;
};

$output176 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext);

$output176 .= '
					';
return $output176;
};
$arguments171 = array();
$arguments171['then'] = NULL;
$arguments171['else'] = NULL;
$arguments171['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array173 = array();
$array174 = array (
);$array173['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_type', $array174);
$array173['1'] = ' == 2';

$expression175 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments171['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression175(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)
					),
					$renderingContext
				);
$arguments171['__thenClosure'] = $renderChildrenClosure172;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output160 .= '
					<div>
						<a href="';
$array248 = array (
);
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.publicUrl', $array248)]);

$output160 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('data.target', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$output254 = '';

$output254 .= ' target="';
$array255 = array (
);
$output254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.target', $array255)]);

$output254 .= '"';
$arguments249['then'] = $output254;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure257 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments256 = array();
$arguments256['then'] = NULL;
$arguments256['else'] = NULL;
$arguments256['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array258 = array();
$array259 = array (
);$array258['0'] = $renderingContext->getVariableProvider()->getByPath('file.title', $array259);

$expression260 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments256['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression260(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array258)
					),
					$renderingContext
				);
$output261 = '';

$output261 .= ' title="';
$array262 = array (
);
$output261 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.title', $array262)]);

$output261 .= '"';
$arguments256['then'] = $output261;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments256, $renderChildrenClosure257, $renderingContext);

$output160 .= '>
							<span class="ce-uploads-fileName">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$array271 = array (
);$arguments266['then'] = $renderingContext->getVariableProvider()->getByPath('file.properties.title', $array271);
$array272 = array (
);$arguments266['else'] = $renderingContext->getVariableProvider()->getByPath('file.name', $array272);
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
};
$arguments263 = array();
$arguments263['value'] = NULL;
$arguments263['keepQuotes'] = false;
$arguments263['encoding'] = 'UTF-8';
$arguments263['doubleEncode'] = true;
$value265 = ($arguments263['value'] !== NULL ? $arguments263['value'] : $renderChildrenClosure264());

$output160 .= !is_string($value265) && !(is_object($value265) && method_exists($value265, '__toString')) ? $value265 : htmlspecialchars($value265, ($arguments263['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments263['encoding'], $arguments263['doubleEncode']);

$output160 .= '</span>
						</a>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$output278 = '';

$output278 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure280 = function() use ($renderingContext, $self) {
$output284 = '';

$output284 .= '
								<span class="ce-uploads-description">';
$array285 = array (
);
$output284 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description', $array285)]);

$output284 .= '</span>
							';
return $output284;
};
$arguments279 = array();
$arguments279['then'] = NULL;
$arguments279['else'] = NULL;
$arguments279['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array282 = array (
);$array281['0'] = $renderingContext->getVariableProvider()->getByPath('data.uploads_description', $array282);

$expression283 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments279['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression283(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);
$arguments279['__thenClosure'] = $renderChildrenClosure280;

$output278 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, $renderChildrenClosure280, $renderingContext);

$output278 .= '
						';
return $output278;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('file.properties.description', $array276);

$expression277 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression277(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments273['__thenClosure'] = $renderChildrenClosure274;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output160 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
$output291 = '';

$output291 .= '
							<span class="ce-uploads-filesize">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['value'] = NULL;
$arguments292['decimals'] = 0;
$arguments292['decimalSeparator'] = '.';
$arguments292['thousandsSeparator'] = ',';
$arguments292['units'] = NULL;
$array294 = array (
);$arguments292['value'] = $renderingContext->getVariableProvider()->getByPath('file.properties.size', $array294);
$renderChildrenClosure293 = ($arguments292['value'] !== null) ? function() use ($arguments292) { return $arguments292['value']; } : $renderChildrenClosure293;
$output291 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\BytesViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext)]);

$output291 .= '</span>
						';
return $output291;
};
$arguments286 = array();
$arguments286['then'] = NULL;
$arguments286['else'] = NULL;
$arguments286['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array288 = array();
$array289 = array (
);$array288['0'] = $renderingContext->getVariableProvider()->getByPath('data.filelink_size', $array289);

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments286['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression290(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array288)
					),
					$renderingContext
				);
$arguments286['__thenClosure'] = $renderChildrenClosure287;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output160 .= '
					</div>
				</li>
			';
return $output160;
};
$arguments157 = array();
$arguments157['each'] = NULL;
$arguments157['as'] = NULL;
$arguments157['key'] = NULL;
$arguments157['reverse'] = false;
$arguments157['iteration'] = NULL;
$array159 = array (
);$arguments157['each'] = $renderingContext->getVariableProvider()->getByPath('files', $array159);
$arguments157['as'] = 'file';
$arguments157['iteration'] = 'fileIterator';

$output156 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output156 .= '
		</ul>
	';
return $output156;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('files', $array154);

$expression155 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['__thenClosure'] = $renderChildrenClosure152;

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '

';
return $output150;
};
$arguments148 = array();
$arguments148['name'] = NULL;
$arguments148['name'] = 'Main';

$output145 .= NULL;

$output145 .= '

';

return $output145;
}


}
#