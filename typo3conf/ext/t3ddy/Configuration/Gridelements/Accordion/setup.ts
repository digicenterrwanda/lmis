

tt_content.gridelements_pi1.20.10.setup.t3ddy-accordion {
    
    <?php
    
   echo safro;
    ?>
	columns {
		31337 {
			renderObj = COA
			renderObj {
			    
				10 = TEXT
				10 {
				   
					field = header
					stdWrap.dataWrap = <input type="checkbox" id="c{field:uid} " style="display: none;"><label class="tab-label" for="c{field:uid} ">|</label>  
				
				}

				20 =< tt_content
				20.stdWrap.dataWrap =  <div class="tab-content" >|</div> 
			}
		}
	}
	dataWrap = <div class="col-md-6"><div class="tab">|</div></div>
	prepend < lib.stdheader
}
