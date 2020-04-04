# Setup each colPos blocks.
lib.contentmain < styles.content.get
lib.contentmain.select.where = colPos = 0

lib.contentmains < styles.content.get
lib.contentmains.select.where = colPos = 3

lib.content1 < styles.content.get
lib.content1.select.where = colPos = 11

lib.content2 < styles.content.get
lib.content2.select.where = colPos = 22

lib.content3 < styles.content.get
lib.content3.select.where = colPos = 399

lib.content401 < styles.content.get
lib.content401.select.where = colPos = 401

lib.content402 < styles.content.get
lib.content402.select.where = colPos = 402

lib.content403 < styles.content.get
lib.content403.select.where = colPos = 403

lib.content404 < styles.content.get
lib.content404.select.where = colPos = 404

lib.content405 < styles.content.get
lib.content405.select.where = colPos = 405

lib.contentmainsection < styles.content.get
lib.contentmainsection.select.where = colPos = 4

lib.inntitre = TEXT
lib.inntitre.data = page : title

lib.slidetop < styles.content.get
lib.slidetop.select.where = colPos = 1

lib.banner < styles.content.get
lib.banner.select.where = colPos = 2

lib.contentsection < styles.content.get
lib.contentsection.select.where = colPos = 5

lib.rightslide < styles.content.get
lib.rightslide.select.where = colPos = 5

lib.contentsocial = RECORDS
lib.contentsocial.tables = tt_content
lib.contentsocial.source = 1168

lib.announcement = RECORDS
lib.announcement.tables = tt_content
lib.announcement.source = 1155

lib.breadcrumb=COA
lib.breadcrumb {
    10 = HMENU
    10 {
        special = rootline
        special.range = 1
        # "not in menu pages" should show up in the breadcrumbs menu
        includeNotInMenu = 1
        1 = TMENU
        1 {
            noBlur = 1
            # Current item should be unlinked
            target = _self
            wrap = <ol class="breadcrumb mmi-breadcrumb">| </ol>
            NO {
                stdWrap.field = title
                ATagTitle.field = nav_title // title
                linkWrap = <li>|</li>|*|<li>|</li>|*|<li>|&nbsp;</li>
            }
            # Current menu item is unlinked
            CUR = 1
            # < .NO
            CUR.linkWrap = <li>|</li>|*|<li>|</li>|*|<li>|</li>
            CUR.doNotLinkIt = 1

 
        }
    }
}



