.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


Installation
============

1. Install the extension from the TER with the extension manager

2. Add the static template of the extension to your template of your root page or you extension root templates

3. In order for the contentslide to work, you need to overwrite the FluidStyledContent-Layout and extend it with the contentslide-ViewHelper:

.. code-block:: HTML

   {namespace cs=SGalinski\dfContentslide\ViewHelpers}

   <html xmlns:f="http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers" data-namespace-typo3-fluid="true">
   <cs:contentSlideWrapper contentElementData="{data}">
      <div id="c{data.uid}">
         <f:comment>Only render the header if contentslide is not active. Otherwise it will be rendered twice.</f:comment>
         <f:if condition="{data.tx_df_contentslide_contentslide} == 0">
            <f:render partial="Header" arguments="{_all}" />
         </f:if>
         <f:render section="content" />
         <f:render partial="Footer" arguments="{_all}" />
      </div>
   </cs:contentSlideWrapper>
   </html>
