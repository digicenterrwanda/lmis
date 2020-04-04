lib.footermenu = HMENU
lib.footermenu {

  special = list
 
  special.value = 40,41,42
  entryLevel = 0
  1 = TMENU
  1 {
    wrap =  <div class="row">|
    NO {
      #stdWrap.htmlSpecialChars = 1
      wrapItemAndSub = <div class="col-sm-3 footer-logo">|</div>
      stdWrap.wrap = <h5>|</h5>
      doNotLinkIt = 1
    }
    expAll = 1
    
    

  }
  2 = TMENU
  2 {
    wrap = <ul class="f-menu">|</ul>
    NO {
        stdWrap.htmlSpecialChars = 1
        wrapItemAndSub = <li>|</li>
    }
    ACT = 1
    ACT.wrapItemAndSub = <li>|</li>
    
  }   
}

lib.footericon = HMENU
lib.footericon.special = directory
lib.footericon.special.value= 121
lib.footericon.1 = TMENU
lib.footericon.1{
  
  wrap = <ul class="footericon">|</ul>
  expAll = 1
  NO{
  wrapItemAndSub = <li>|</li>
}

}

lib.findbylabor = HMENU
lib.findbylabor.special = directory
lib.findbylabor.special.value= 132
lib.findbylabor.1 = TMENU
lib.findbylabor.1{
  
  wrap = 
  expAll = 1
  NO{
  wrapItemAndSub = <option value="safro.html"><a href="">|</a></option>
}
 ACT = 1
    ACT.wrapItemAndSub = <option value="safro.html"><a href="">|</a></option>

}




lib.copyright = TEXT

lib.copyright.wrap = <p align="right">  Trademark notice: LMIS is a registered trademark of Rwanda Development Board</p>


lib.footerText = RECORDS
lib.footerText.tables = tt_content
lib.footerText.source = 15

lib.accord = RECORDS
lib.accord.tables = tt_content
lib.accord.source = 33






