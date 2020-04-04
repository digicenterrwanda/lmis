<?php

class Standard_action_index_7d55e06d537783017013933171f0e8bca0a1659a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'dce' => 
  array (
    0 => 'ArminVieweg\\Dce\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
		<T3DataStructure>
			<meta>
				<langDisable>1</langDisable>
				<langDatabaseOverlay>1</langDatabaseOverlay>
			</meta>
			<sheets>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= '
					<sheet.';
$array11 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('tab.variable', $array11);

$output10 .= '>
						<ROOT>
							<TCEforms>
								<sheetTitle>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('tab.title', $array14);
};
$arguments12 = array();
$arguments12['subject'] = NULL;

$output10 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output10 .= '</sheetTitle>
							</TCEforms>
							<type>array</type>
							<el>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output18 = '';

$output18 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output67 = '';

$output67 .= '
											<settings.';
$array68 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array68);

$output67 .= '>
												<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$array71 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array71);
};
$arguments69 = array();
$arguments69['subject'] = NULL;

$output67 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output67 .= '</title>
												<tx_templavoila>
													<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array74 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array74);
};
$arguments72 = array();
$arguments72['subject'] = NULL;

$output67 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output67 .= '</title>
												</tx_templavoila>
												<section>1</section>
												<type>array</type>
												<el>
													<container_';
$array75 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array75);

$output67 .= '>
														<type>array</type>
														<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$array78 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.section_fields_tag', $array78);
};
$arguments76 = array();
$arguments76['subject'] = NULL;

$output67 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);

$output67 .= '</title>
														<tx_templavoila>
															<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
$array81 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.section_fields_tag', $array81);
};
$arguments79 = array();
$arguments79['subject'] = NULL;

$output67 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output67 .= '</title>
														</tx_templavoila>
														<el>
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
																<';
$array86 = array (
);
$output85 .= $renderingContext->getVariableProvider()->getByPath('sectionField.variable', $array86);

$output85 .= '>
																	<TCEforms>
																		<label>';
$array87 = array (
);
$output85 .= $renderingContext->getVariableProvider()->getByPath('sectionField.title', $array87);

$output85 .= '</label>
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$array92 = array (
);return $renderingContext->getVariableProvider()->getByPath('sectionField.configuration', $array92);
};
$arguments90 = array();
$arguments90['subject'] = NULL;
$arguments90['search'] = NULL;
$arguments90['replace'] = NULL;
$arguments90['search'] = '\'';
$arguments90['replace'] = '"';
return ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);
};
$arguments88 = array();
$arguments88['value'] = NULL;

$output85 .= isset($arguments88['value']) ? $arguments88['value'] : $renderChildrenClosure89();

$output85 .= '
																	</TCEforms>
																</';
$array93 = array (
);
$output85 .= $renderingContext->getVariableProvider()->getByPath('sectionField.variable', $array93);

$output85 .= '>
															';
return $output85;
};
$arguments82 = array();
$arguments82['each'] = NULL;
$arguments82['as'] = NULL;
$arguments82['key'] = NULL;
$arguments82['reverse'] = false;
$arguments82['iteration'] = NULL;
$array84 = array (
);$arguments82['each'] = $renderingContext->getVariableProvider()->getByPath('field.section_fields', $array84);
$arguments82['as'] = 'sectionField';

$output67 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output67 .= '
														</el>
													</container_';
$array94 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array94);

$output67 .= '>
												</el>
											</settings.';
$array95 = array (
);
$output67 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array95);

$output67 .= '>
										';
return $output67;
};
$arguments65 = array();

$output64 .= '';

$output64 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
											<settings.';
$array99 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array99);

$output98 .= '>
													<TCEforms>
															<label>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$array102 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array102);
};
$arguments100 = array();
$arguments100['subject'] = NULL;

$output98 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output98 .= '</label>
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
$array107 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.configuration', $array107);
};
$arguments105 = array();
$arguments105['subject'] = NULL;
$arguments105['search'] = NULL;
$arguments105['replace'] = NULL;
$arguments105['search'] = '\'';
$arguments105['replace'] = '"';
return ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);
};
$arguments103 = array();
$arguments103['value'] = NULL;

$output98 .= isset($arguments103['value']) ? $arguments103['value'] : $renderChildrenClosure104();

$output98 .= '
													</TCEforms>
											</settings.';
$array108 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array108);

$output98 .= '>
										';
return $output98;
};
$arguments96 = array();
$arguments96['if'] = NULL;

$output64 .= '';

$output64 .= '
									';
return $output64;
};
$arguments19 = array();
$arguments19['then'] = NULL;
$arguments19['else'] = NULL;
$arguments19['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array61 = array();
$array62 = array (
);$array61['0'] = $renderingContext->getVariableProvider()->getByPath('field.type', $array62);
$array61['1'] = ' == 2';

$expression63 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments19['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression63(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array61)
					),
					$renderingContext
				);
$arguments19['__thenClosure'] = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
											<settings.';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array22);

$output21 .= '>
												<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$array25 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array25);
};
$arguments23 = array();
$arguments23['subject'] = NULL;

$output21 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output21 .= '</title>
												<tx_templavoila>
													<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$array28 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array28);
};
$arguments26 = array();
$arguments26['subject'] = NULL;

$output21 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output21 .= '</title>
												</tx_templavoila>
												<section>1</section>
												<type>array</type>
												<el>
													<container_';
$array29 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array29);

$output21 .= '>
														<type>array</type>
														<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$array32 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.section_fields_tag', $array32);
};
$arguments30 = array();
$arguments30['subject'] = NULL;

$output21 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output21 .= '</title>
														<tx_templavoila>
															<title>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$array35 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.section_fields_tag', $array35);
};
$arguments33 = array();
$arguments33['subject'] = NULL;

$output21 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output21 .= '</title>
														</tx_templavoila>
														<el>
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
																<';
$array40 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('sectionField.variable', $array40);

$output39 .= '>
																	<TCEforms>
																		<label>';
$array41 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('sectionField.title', $array41);

$output39 .= '</label>
																		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
$array46 = array (
);return $renderingContext->getVariableProvider()->getByPath('sectionField.configuration', $array46);
};
$arguments44 = array();
$arguments44['subject'] = NULL;
$arguments44['search'] = NULL;
$arguments44['replace'] = NULL;
$arguments44['search'] = '\'';
$arguments44['replace'] = '"';
return ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
};
$arguments42 = array();
$arguments42['value'] = NULL;

$output39 .= isset($arguments42['value']) ? $arguments42['value'] : $renderChildrenClosure43();

$output39 .= '
																	</TCEforms>
																</';
$array47 = array (
);
$output39 .= $renderingContext->getVariableProvider()->getByPath('sectionField.variable', $array47);

$output39 .= '>
															';
return $output39;
};
$arguments36 = array();
$arguments36['each'] = NULL;
$arguments36['as'] = NULL;
$arguments36['key'] = NULL;
$arguments36['reverse'] = false;
$arguments36['iteration'] = NULL;
$array38 = array (
);$arguments36['each'] = $renderingContext->getVariableProvider()->getByPath('field.section_fields', $array38);
$arguments36['as'] = 'sectionField';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output21 .= '
														</el>
													</container_';
$array48 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array48);

$output21 .= '>
												</el>
											</settings.';
$array49 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array49);

$output21 .= '>
										';
return $output21;
};
$arguments19['__elseClosures'][] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
											<settings.';
$array51 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array51);

$output50 .= '>
													<TCEforms>
															<label>';
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
$array54 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.title', $array54);
};
$arguments52 = array();
$arguments52['subject'] = NULL;

$output50 .= ArminVieweg\Dce\ViewHelpers\Format\CdataViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output50 .= '</label>
															';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
// Rendering ViewHelper ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$array59 = array (
);return $renderingContext->getVariableProvider()->getByPath('field.configuration', $array59);
};
$arguments57 = array();
$arguments57['subject'] = NULL;
$arguments57['search'] = NULL;
$arguments57['replace'] = NULL;
$arguments57['search'] = '\'';
$arguments57['replace'] = '"';
return ArminVieweg\Dce\ViewHelpers\Format\ReplaceViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);
};
$arguments55 = array();
$arguments55['value'] = NULL;

$output50 .= isset($arguments55['value']) ? $arguments55['value'] : $renderChildrenClosure56();

$output50 .= '
													</TCEforms>
											</settings.';
$array60 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('field.variable', $array60);

$output50 .= '>
										';
return $output50;
};

$output18 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output18 .= '
								';
return $output18;
};
$arguments15 = array();
$arguments15['each'] = NULL;
$arguments15['as'] = NULL;
$arguments15['key'] = NULL;
$arguments15['reverse'] = false;
$arguments15['iteration'] = NULL;
$array17 = array (
);$arguments15['each'] = $renderingContext->getVariableProvider()->getByPath('tab.fields', $array17);
$arguments15['as'] = 'field';

$output10 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output10 .= '
							</el>
						</ROOT>
					</sheet.';
$array109 = array (
);
$output10 .= $renderingContext->getVariableProvider()->getByPath('tab.variable', $array109);

$output10 .= '>
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
);$arguments7['each'] = $renderingContext->getVariableProvider()->getByPath('dce.tabs', $array9);
$arguments7['as'] = 'tab';
$arguments7['iteration'] = 'iterator';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			</sheets>
		</T3DataStructure>
	';
return $output6;
};
$arguments4 = array();
$arguments4['subject'] = NULL;
$arguments4['charlist'] = '\'';

$output3 .= ArminVieweg\Dce\ViewHelpers\Format\AddcslashesViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1 = array();
$arguments1['subject'] = NULL;

$output0 .= ArminVieweg\Dce\ViewHelpers\Format\TinyViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#