<html>
 <head>
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<title>PHP test</title>
	
	<link rel="stylesheet" href="scrolldeck/css/normalize.css" type="text/css">
	<link rel="stylesheet" href="style.css" type="text/css">

	<link rel="author" href="https://plus.google.com/107766061849006545830"/>
	<script type="text/javascript" src="scrolldeck/js/jquery-1.5.min.js"></script>
	<script type="text/javascript" src="scrolldeck/js/jquery-ui-1.8.min.js"></script>
	<script type="text/javascript" src="scrolldeck/js/jquery.scrollTo-1.4.3.1.min.js"></script>
	<script type="text/javascript" src="scrolldeck/js/jquery.scrollorama.js"></script>
 	<script type="text/javascript" src="scrolldeck/js/jquery.easing.1.3.js"></script>
 	<script type="text/javascript" src="scrolldeck/js/jquery.scrolldeck.js"></script>
 	<script type="text/javascript" language="javascript">

        var _twitterScreenName = '';
        var _categoryJSON = '[{"Name":"News","Children":[{"Name":"World","Children":[]},{"Name":"United Kingdom","Children":[{"Name":"Channel Islands","Children":[]},{"Name":"East Midlands","Children":[]},{"Name":"East of England","Children":[]},{"Name":"Greater London","Children":[]},{"Name":"Isle of Man","Children":[]},{"Name":"Northern Ireland","Children":[]},{"Name":"North East","Children":[]},{"Name":"North West","Children":[]},{"Name":"Scotland","Children":[]},{"Name":"South East","Children":[]},{"Name":"South West","Children":[]},{"Name":"Wales","Children":[]},{"Name":"West Midlands","Children":[]},{"Name":"Yorkshire & Humber","Children":[]}]},{"Name":"United States","Children":[{"Name":"Arizona","Children":[]},{"Name":"California","Children":[]},{"Name":"Florida","Children":[]},{"Name":"Georgia","Children":[]},{"Name":"Illinois","Children":[]},{"Name":"Indiana","Children":[]},{"Name":"Massachusetts","Children":[]},{"Name":"Michigan","Children":[]},{"Name":"Missouri","Children":[]},{"Name":"New Jersey","Children":[]},{"Name":"New York","Children":[]},{"Name":"North Carolina","Children":[]},{"Name":"Ohio","Children":[]},{"Name":"Pennsylvania","Children":[]},{"Name":"Tennessee","Children":[]},{"Name":"Texas","Children":[]},{"Name":"Virginia","Children":[]},{"Name":"Washington","Children":[]},{"Name":"Other","Children":[]}]},{"Name":"Canada","Children":[]}]},{"Name":"Business & Finance","Children":[{"Name":"Regional","Children":[]},{"Name":"Money","Children":[]},{"Name":"Personal Finance","Children":[]},{"Name":"Markets","Children":[]}]},{"Name":"Sport","Children":[{"Name":"Football","Children":[{"Name":"Premier League","Children":[{"Name":"Arsenal","Children":[]},{"Name":"Aston Villa","Children":[]},{"Name":"Chelsea","Children":[]},{"Name":"Everton","Children":[]},{"Name":"Fulham","Children":[]},{"Name":"Liverpool","Children":[]},{"Name":"Manchester City","Children":[]},{"Name":"Manchester United","Children":[]},{"Name":"Newcastle United","Children":[]},{"Name":"Norwich City","Children":[]},{"Name":"Queens Park Rangers","Children":[]},{"Name":"Reading","Children":[]},{"Name":"Southampton","Children":[]},{"Name":"Stoke City","Children":[]},{"Name":"Sunderland","Children":[]},{"Name":"Swansea City","Children":[]},{"Name":"Tottenham Hotspur","Children":[]},{"Name":"West Bromwich Albion","Children":[]},{"Name":"West Ham United","Children":[]},{"Name":"Wigan Athletic","Children":[]}]},{"Name":"Championship","Children":[{"Name":"Barnsley","Children":[]},{"Name":"Birmingham City","Children":[]},{"Name":"Blackburn Rovers","Children":[]},{"Name":"Blackpool","Children":[]},{"Name":"Bolton Wanderers","Children":[]},{"Name":"Brighton & Hove Albion","Children":[]},{"Name":"Bristol City","Children":[]},{"Name":"Burnley","Children":[]},{"Name":"Cardiff City","Children":[]},{"Name":"Charlton Athletic","Children":[]},{"Name":"Crystal Palace","Children":[]},{"Name":"Derby County","Children":[]},{"Name":"Huddersfield Town","Children":[]},{"Name":"Hull City","Children":[]},{"Name":"Ipswich Town","Children":[]},{"Name":"Leeds United","Children":[]},{"Name":"Leicester City","Children":[]},{"Name":"Middlesbrough","Children":[]},{"Name":"Millwall","Children":[]},{"Name":"Nottingham Forest","Children":[]},{"Name":"Peterborough United","Children":[]},{"Name":"Sheffield Wednesday","Children":[]},{"Name":"Watford","Children":[]},{"Name":"Wolverhampton Wanderers","Children":[]}]},{"Name":"League One","Children":[{"Name":"AFC Bournemouth","Children":[]},{"Name":"Brentford","Children":[]},{"Name":"Bury","Children":[]},{"Name":"Carlisle United","Children":[]},{"Name":"Colchester United","Children":[]},{"Name":"Coventry City","Children":[]},{"Name":"Crawley Town","Children":[]},{"Name":"Crewe Alexandra","Children":[]},{"Name":"Doncaster Rovers","Children":[]},{"Name":"Hartlepool United","Children":[]},{"Name":"Leyton Orient","Children":[]},{"Name":"Milton Keynes Dons","Children":[]},{"Name":"Notts County","Children":[]},{"Name":"Oldham Athletic","Children":[]},{"Name":"Portsmouth","Children":[]},{"Name":"Preston North End","Children":[]},{"Name":"Scunthorpe United","Children":[]},{"Name":"Sheffield United","Children":[]},{"Name":"Shrewsbury Town","Children":[]},{"Name":"Stevenage","Children":[]},{"Name":"Swindon Town","Children":[]},{"Name":"Tranmere Rovers","Children":[]},{"Name":"Walsall","Children":[]},{"Name":"Yeovil Town","Children":[]}]},{"Name":"League Two","Children":[{"Name":"Accrington Stanley","Children":[]},{"Name":"AFC Wimbledon","Children":[]},{"Name":"Aldershot Town","Children":[]},{"Name":"Barnet","Children":[]},{"Name":"Bradford City","Children":[]},{"Name":"Bristol Rovers","Children":[]},{"Name":"Burton Albion","Children":[]},{"Name":"Cheltenham Town","Children":[]},{"Name":"Chesterfield","Children":[]},{"Name":"Dagenham & Redbridge","Children":[]},{"Name":"Exeter City","Children":[]},{"Name":"Fleetwood","Children":[]},{"Name":"Gillingham","Children":[]},{"Name":"Morecambe","Children":[]},{"Name":"Northampton Town","Children":[]},{"Name":"Oxford United","Children":[]},{"Name":"Plymouth Argyle","Children":[]},{"Name":"Port Vale","Children":[]},{"Name":"Rochdale","Children":[]},{"Name":"Rotherham United","Children":[]},{"Name":"Southend United","Children":[]},{"Name":"Torquay United","Children":[]},{"Name":"Wycombe Wanderers","Children":[]},{"Name":"York","Children":[]}]},{"Name":"Scottish Premier League","Children":[]},{"Name":"Champions League","Children":[]}]},{"Name":"Motorsport","Children":[]},{"Name":"Cricket","Children":[]},{"Name":"Rugby","Children":[{"Name":"Rugby Union","Children":[]},{"Name":"Rugby League","Children":[]},{"Name":"Six Nations","Children":[]}]},{"Name":"Golf","Children":[]},{"Name":"Tennis","Children":[]},{"Name":"American Football","Children":[]},{"Name":"Baseball","Children":[]},{"Name":"Basketball","Children":[]},{"Name":"Ice Hockey","Children":[]},{"Name":"Boxing","Children":[]},{"Name":"Horse Racing","Children":[]},{"Name":"Olympics","Children":[]},{"Name":"Other Sports","Children":[]}]},{"Name":"Politics","Children":[]},{"Name":"Entertainment","Children":[{"Name":"Celebrity & Showbiz","Children":[]},{"Name":"Movies & Film","Children":[]},{"Name":"Television & Radio","Children":[]},{"Name":"Music","Children":[]},{"Name":"Books","Children":[]},{"Name":"Comedy","Children":[]},{"Name":"Arts","Children":[]}]},{"Name":"Science","Children":[]},{"Name":"Technology","Children":[]},{"Name":"Health","Children":[]},{"Name":"Lifestyle","Children":[{"Name":"Beauty & Fashion","Children":[]},{"Name":"Education","Children":[]},{"Name":"Food & Drink","Children":[]},{"Name":"Motoring","Children":[]}]},{"Name":"Travel","Children":[]}]';
        var _showNotification = 'False';
        var _isNewUser = 'False';
        var _userFeedsArray = $.parseJSON('[705]');

    </script>


 	<script type="text/javascript" src="scrolldeck/js/stream.min.js" ></script>
	<script type="text/javascript" src="scrolldeck/js/wizard.min.js" ></script>
 	<script src="https://platform.twitter.com/anywhere.js?id=68oOWYyj0oKsUofdipB9FA&v=1" type="text/javascript"></script>
 	<script type="text/javascript" src="scrolldeck/js/jquery.contextmenu.r2.js"></script>

 	<script type="text/javascript" src="scrolldeck/js/jquery.jeditable.mini.js"></script>


 	<script type="text/javascript">

	 $(document).ready(function () {

            $(".networks").click(function (e) {
                e.preventDefault();
                $("fieldset#network").toggle();
                $(".networks").toggleClass("menu-open");
            });

            $("fieldset#network").mouseup(function () {
                return false
            });
            $(document).mouseup(function (e) {
                if ($(e.target).parent("a.networks").length == 0) {
                    $(".networks").removeClass("menu-open");
                    $("fieldset#network").hide();
                }
            });

        });


 	</script>
 </head>
 <body>
<a href="https://github.com/jiuningzhong/SocialAggregator/">
	<img style="position: absolute; top: 0; right: 0; border: 0; z-index: 999999999;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub" alt="Fork me on GitHub" />
</a>
<div id="header">
	<div id="header-inner">             
    	<div id="search">
		    <input type="text" id="txtUserFeedSearchInput" autocomplete="off" class="searchTip" autocapitalize="off" value="Search your feed" />
		    <div id="delete"><span id="x" class="searchTip" title="Or press ESC key"></span></div>
		</div>
	<div id="header-right">

 	<div id="menu">
            <ul>
                <li><a href="social.php">Home</a></li>
                <li id="networksHeaderLink"><a href="javascript:void(0);" class="networks"><span>Social</span></a></li>
                <li><a href="javascript:void(0);" class="my" id="myHeaderLink"><span>My Aggregator</span></a></li>
        		<li><a href="#howtouse" class="nav-button">How to Use</a></li>
				<li><a href="#examples" class="nav-button">Examples</a></li>
				<li class="last"><a href="#credits" class="nav-button">Credits</a></li>
            </ul>
	 	</div>
            <fieldset id="network">
    	<div id="networks-menu">
    	    <div id="networks-l">
                <div id="facebook_loggedout">
                    <table width="275px">
                        <tr>
                            <td align="right" valign="middle" style="height: 20px;">
                                <img src="https://rws.blob.core.windows.net/images/facebook-signin.png" /> &nbsp;
                                <img id="img1" width="16" height="16" src="https://rws.blob.core.windows.net/images/offline_red.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br /><br />
                                <div class="signin_text">
                                    Want to include Facebook updates within your Social feed?<br /><br />
                                    Simply login below to include Facebook status updates from your friends, and more.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="network-logo">
                                    <a id="A1" class="titleLink" href="https://graph.facebook.com/oauth/authorize?client_id=315418841926178&display=page&redirect_uri=https://www.rolio.com/&scope=user_events,user_photos,user_status,friends_status,publish_stream,read_stream">
                                        <img src="https://rws.blob.core.windows.net/images/facebook-login.png" alt="Facebook">
                                    </a>
                                    </div>
                                    <div class="clear"></div>
                            </td>
                        </tr>
                    </table>
                </div>            
                <div id="facebook_loggedin" style="display:none;">
                    <table width="275px">
                        <tr>
                            <td align="right" valign="middle" style="height: 20px;">
                                <a href='javascript:void(0);' onclick="SearchFavourite('Facebook', 'Facebook');"><img src="https://rws.blob.core.windows.net/images/facebook-signin.png" /></a> &nbsp;
                                <img id="imgFacebookConnection" width="16" height="16" src="https://rws.blob.core.windows.net/images/online_green.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="middle">
                                <a id="fbLogoutLink" class="titleLink" href="javascript:void(0);" onclick="FB.logout(); facebookLoggedOut();">
                                    Logout of Facebook</a>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table>
                        <tr style="height:65px;">
                            <td style="width: 55px">
                                <img id="fbIcon" src="" height="50px" width="50px" style="display:none;" />
                            </td>
                            <td style="width: 220px">
                                <div id="lblFacebookStatus" style="float:left; text-align:left;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">

                                <textarea id="txtFacebookStatus" cols="1" style="width: 265px; height:56px; resize: none;
                                    display: none;" class="dummyText" onfocus="facebookDummyStatusClear(this);" onblur="facebookStatusBlur(this);">Enter new status...</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="float: left;">
                                    <div id="facebookErrorDiv" class="error" style="width: 175px;">
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <input type="button" id="btnUpdateStatus"  value="Update Status" onclick="javascript:updateFacebookStatus();" disabled="disabled" />
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="networks-r">
        	    <div id="twitter_loggedout">
                    <table width="275px">
                        <tr>
                            <td align="right" valign="middle" style="height: 20px;">
                                <img src="https://rws.blob.core.windows.net/images/twitter-signin.png" /> &nbsp;
                                <img id="img2" width="16" height="16" src="https://rws.blob.core.windows.net/images/offline_red.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br /><br />
                                <div class="signin_text">
                                    Want to include Twitter updates within your Social feed?<br /><br />
                                    Simply login below to include tweets from your home timeline in your feed.
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="network-logo">
                                    <a href="javascript:void(0);" id="twitterLoginLink" onclick="TwitterLogin();">
                                        <img src="https://rws.blob.core.windows.net/images/twitter-login.png" alt="Twitter">
                                    </a>
                                    </div>
                                    <div class="clear"></div>
                            </td>
                        </tr>
                    </table>
                </div>                    
                <div id="twitter_loggedin" style="display:none;">
                    <table width="275px">
                        <tr>
                            <td align="right" valign="middle" style="height: 20px;">
                                <a href='javascript:void(0);' onclick="SearchFavourite('Twitter', 'Twitter');"><img id="twitterLoggedInMainLogo" src="https://rws.blob.core.windows.net/images/twitter-signin.png" /></a> &nbsp;
                                <img id="imgTwitterConnection" width="16" height="16" src="https://rws.blob.core.windows.net/images/online_green.png" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                &nbsp;
                            </td>
                        </tr>
                        <tr>
                            <td align="right" valign="middle">                                
                                <a href="javascript:void(0);" id="twitterLogoutLink" class="titleLink" onclick="TwitterLogout();">Logout of Twitter</a>
                            </td>
                        </tr>
                    </table>
                    <br />
                    <table id="tweetTable" style="display:none;">
                        <tr style="height:65px;">
                            <td style="width: 55px">
                                <img id="twitterIcon" height="50" width="50" />
                            </td>
                            <td style="width: 220px">
                                <div id="lblTwitterStatus" style="float:left; text-align:left; overflow:hidden; width: 210px;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea id="txtTwitterTweet" rows="4" cols="1" style="width: 265px; height:56px; resize: none;" 
                                class="dummyText" onblur="twitterStatusBlur(this);" onfocus="twitterDummyStatusClear(this);" onkeyup="LimitTextLength(this);">Enter new tweet...</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="float: left;">
                                    <div id="twitterErrorDiv" class="error" style="width: 175px;">
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <input type="button" id="btnTwitterTweet" value="Tweet" onclick="javascript:TwitterTweet();" disabled="disabled" />
                                </div>
                            </td>
                        </tr>
                    </table>        
                </div>
            </div>
        </div>    	
    </fieldset>

   	<fieldset id="my">
		<ul id="my-menu">
            <li><a href="javascript:void(0)" onclick="LoadMyFeeds()">My Feeds</a></li>
            <li><a href="javascript:void(0)" onclick="ShowImportFeeds()">Import Feeds</a></li>
            <li><a href="javascript:void(0)" onclick="ShowReferral()">Refer Friends</a></li>
            <li><a href="javascript:void(0)" onclick="ShowSettingsOverlay();">Settings</a></li>
            <li><a href="javascript:void(0)" onclick="ShowHelp();">Help</a></li>
            <li>
                <a href="javascript:void(0);" onclick="$get('btnSignOut').click();">Log Out</a>
                <input type="submit" name="ctl00$btnSignOut" value="" id="btnSignOut" style="display:none;" />
            </li>
        </ul> 
    </fieldset>
			</div>
		</div>
</div>


 </body>
</html>