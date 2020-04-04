lib.logo = TEXT
lib.logo {
    value = <img src="typo3conf/ext/site_config/Resources/Public/images/logo.png" alt="LMIS">
}

lib.logoright = TEXT
lib.logoright {
    value =  <a href="{$baseURL}"><img src="typo3conf/ext/site_config/Resources/Public/images/logo-2.png" alt=""></a>
}



lib.mainNavi = HMENU
lib.mainNavi {
	
entryLevel = 0
	1 = TMENU
	1 {
		wrap = <ul class="nav desktop-only">|</ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		    ATagTitle.field = 1 	
		}
		#ACT = 1
		#ACT.wrapItemAndSub = <li class="active">|</li>

		expAll = 1
		IFSUB = 1
		IFSUB {
		  
		   wrapItemAndSub = <li>|</li>
		   ATagTitle.field = 1 		   
		}
		
	} 
	2 = TMENU
	
2 {
   
		wrap = <ul class="submenu menupos"><div class="containeer"> <div class="row">|</div></div></ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <div class="col-md-2"><li>|</li></div>
		}
		expAll = 1
		IFSUB = 1
		IFSUB {
		   wrapItemAndSub = <div class="col-md-2"><li class="leaaf">|</li></div>
		   ATagTitle.field = 1
	}
		
	}  
3 = TMENU	
3 {
		wrap = <ul class="submenu3">|</ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		}
		expAll = 1
		IFSUB = 1
		IFSUB {
		   wrapItemAndSub = <li>|</li>
		   ATagTitle.field = 1
	}
		
	}	
 }

lib.mainNavimobile = HMENU
lib.mainNavimobile {
	
entryLevel = 0
	1 = TMENU
	1 {
		wrap = <ul class="nav no-desktop">|</ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		    ATagTitle.field = 1 	
		}
		#ACT = 1
		#ACT.wrapItemAndSub = <li class="active">|</li>

		expAll = 1
		IFSUB = 1
		IFSUB {
		  
		   wrapItemAndSub = <li>|</li>
		   ATagTitle.field = 1 		   
		}
		
	} 
	2 = TMENU
	
2 {
		wrap = <ul class="submenu">|</ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		}
		expAll = 1
		IFSUB = 1
		IFSUB {
		   wrapItemAndSub = <li class="leeeaf">|</li>
		   ATagTitle.field = 1
	}
		
	}  
3 = TMENU		
3 {
		wrap = <ul class="submenu">|</ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		}
		expAll = 1
		IFSUB = 1
		IFSUB {
		   wrapItemAndSub = <li class="leaf">|</li>
		   ATagTitle.field = 1
	}
		
	} 	
	
 }



lib.topNavi = HMENU
lib.topNavi {
  special = directory
  special.value = 597
  entryLevel = 0
  1 = TMENU
  1 {
    wrap = <ul class="list-unstyled list-inline">|</ul>
    NO {
      stdWrap.htmlSpecialChars = 1
      wrapItemAndSub = <li>|</li>
      
    }
    CUR < .NO
    CUR = 1
    CUR {
        wrapItemAndSub = <li>|</li>
       
    }
    

  }
}
lib.field_related_links = HMENU
lib.field_related_links {
  entryLevel = 2
  1 = TMENU
  1{
      wrap = <div   id="side_menu"><h3>Related Links</h3><ul >|</ul></div>
      NO.wrapItemAndSub = <li>|</li>
      #Active Links
      ACT=1
      ACT<NO
      #The current link (here just for reference...behavior controlled by CSS)
      CUR = 1
      CUR<NO
  }
  2 = TMENU
  2{
      wrap =<ul class="f-menu">|</ul>
      NO.wrapItemAndSub = <li>|</li>
      #Active Links
      ACT=1
      ACT<NO
      #The current link (here just for reference...behavior controlled by CSS)
      CUR = 1
      CUR<NO
  }
  3 = TMENU
  3{
      wrap = <ul class="f-menu">|</ul>
      NO.wrapItemAndSub = <li>|</li>
      #Active Links
      ACT=1
      ACT<NO
      #The current link (here just for reference...behavior controlled by CSS)
      CUR = 1
      CUR<NO
  }
}
lib.sideNavi = COA

lib.sideNavi = HMENU

lib.sideNavi {

	entryLevel = 1
	includeNotInMenu = 1

   	1 = TMENU
	1 {
		wrap =  <div class="content-links-area">|</div>
		NO.ATagParams = style="display: none;"
		#NO {
		#    stdWrap.htmlSpecialChars = 1
		#    wrapItemAndSub = <li>|</li>
		#}
		ACT = 1
		ACT.stdWrap.wrap = <h2>|<span></span></h2>
		ACT.doNotLinkIt = 1
		
	} 

	2 = TMENU
	2 {
		wrap = <ul class="list-unstyled leftbar-list">| </ul>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		}
		IFSUB = 1
		IFSUB {
		   wrapItemAndSub = <li class="submenu">|</li>
			ATagTitle.field = 1
			   
		}
		ACT = 1
		ACT.wrapItemAndSub = <li class="active">|</li>

		expAll = 1
	    ACTIFSUB = 1
	    ACTIFSUB {
	         wrapItemAndSub = <li class="active submenu">|</li>
	         stdWrap.wrap = <i class="fa fa-chevron-down"></i>
	         doNotLinkIt = 1
			 #ATagAfterWrap = 1
            
	    }
		
	} 
	3 = TMENU
	3 {
		wrap = <div class="toggle-content"><ul>|</ul></div>
		NO {
		    stdWrap.htmlSpecialChars = 1
		    wrapItemAndSub = <li>|</li>
		}
		
		ACT = 1
		ACT.wrapItemAndSub = <li class="active">|</li>
	}    

	
}


lib.specialNavi = COA
lib.specialNavi = HMENU
lib.specialNavi {

	 special = directory
	 special.value = 66
	 entryLevel = 0

	 10 = TEXT
	 10.wrap = <h2>|<span></span></h2>
	 10 {
	    
	    data = leveltitle : 2

	  }

	  1 = TMENU
	  1 {
	    wrap = <ul class="list-unstyled leftbar-list special-nav">|</ul>
	    NO {
	      stdWrap.htmlSpecialChars = 1
	      wrapItemAndSub = <li>|</li>

      
    }
    CUR < .NO
    CUR = 1
    CUR {
        wrapItemAndSub = <li class="active">|</li>
       
    }
   

  }
	
}

lib.language = HMENU
lib.language {
  special = language
  special.value = 0,1
  wrap =  <ul class="flag">|</ul>
  1 = TMENU
  1 {
    NO {
          linkWrap =<li>|</li>
          stdWrap.override = ENGLISH || KINYARWANDA
        }
  }
}

lib.checkMail = RECORDS
lib.checkMail.tables = tt_content
lib.checkMail.source = 403

lib.search = TEXT
lib.search.value (
<form method="get" id="form_kesearch_pi1" class="search-form" name="form_kesearch_pi1" action="index.php?id=57">  
      <input type="hidden" name="id" value="69">
      <input type="text" class="h-search" id="ke_search_sword" style="float: left;" name="tx_kesearch_pi1[sword]" value="" placeholder="Search">
      <div class="input-group-btn">
      <button type="submit" class="h-submit btn" id="kesearch_submit">
          <i class="fa fa-search"></i>
      </button>
      </div>
      <input id="kesearchpagenumber" type="hidden" name="tx_kesearch_pi1[page]" value="1">
      <input id="resetFilters" type="hidden" name="tx_kesearch_pi1[resetFilters]" value="0">
      <input id="sortByField" type="hidden" name="tx_kesearch_pi1[sortByField]" value="">
      <input id="sortByDir" type="hidden" name="tx_kesearch_pi1[sortByDir]" value="">
  </form>
)

lib.socialMedia = RECORDS
lib.socialMedia.tables = tt_content
lib.socialMedia.source = 416
