<?php
# ***** BEGIN LICENSE BLOCK *****
# This file is part of phpTumblr.
# Copyright (c) 2006 Simon Richard and contributors. All rights
# reserved.
#
# phpTumblr is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
# 
# phpTumblr is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# 
# You should have received a copy of the GNU General Public License
# along with phpTumblr; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
# ***** END LICENSE BLOCK *****

/*  Execution time counter */
$nStartTime = microtime(true);

/*  First, you have to include some files :
/     * The Clearbricks _common.php file
/     * The Tumblr class itself
/*/
require dirname(__FILE__).'/clearbricks/_common.php';
require dirname(__FILE__).'/class.read.tumblr.php';

/*  Now you can initiate the Tumblr object with the ID of the Tumblelog you want read from as param.
/
/   function __construct($sTumblrID = null,$sHTTPUserAgent = 'phpTumblr')
/      * Initialize the Tumblr object, take a Tumblr ID as param.
/      * Optionally take a second param, a string that will be the HTTP User Agent used for the requests made to the API.
/*/
$oTumblr = new readTumblr('jiuningzhong');

/*  Now, it's time to do some requests from this API. This code will request, in the order:
/      * 3 video posts
/      * All regular posts
/      * The posts with the ID 39185133
/
/   function getPosts($nStart = 0,$mNum = 20,$sType = null,$nID = null)
/      * Request $mNum $sType posts starting from $nStart.
/      * Take posts of all types if $sType = null.
/
/   OR
/      * If $mNum = 'all', get all $sType posts starting from $nStart
/      * Take posts of all types if $sType = null.
/
/   OR
/      * If $nID is given, request the post with the ID $nID.
/*/

$oTumblr->getPosts(null,null,null);

/*  You're quite done! Now, you can get the array that contain the result.
/
/   function dumpArray($bChrono = false,$bDebug = false)
/      * Sort the array in chronological order if $bChrono is true, inverse if false.
/      * Return the array-formated content of the requests made to the API.
/      * If $bDebug = true, return raw decoded JSON from the last request in ['temp'] key of the array. This option was mainly created to help me while dev.
/*/
$aTumblr = $oTumblr->dumpArray();

/*  Execution time counter */
$nEndTime = microtime(true);
$nExecTime = $nEndTime - $nStartTime;
if ($aTumblr['stats']['num-inarray'] > 0) { $nExecTimePerPost = $nExecTime / $aTumblr['stats']['num-inarray']; } else { $nExecTimePerPost = 0; }

header('Content-Type: text/plain; charset=utf-8');
echo $aTumblr['stats']['num-inarray'].' posts parsed in '.$nExecTime.'s, that means '.$nExecTimePerPost.'s per post !'."\n\n";
print_r($aTumblr);


/*  Important note : you can do as much getPosts request as you like!
/   It's impossible to have several times the same post in the array (array key composed with post's id and post's timestamp).
/*/
?>
