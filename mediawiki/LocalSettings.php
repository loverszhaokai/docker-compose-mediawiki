#
# == MsUpload begin ==
#
wfLoadExtension( 'MsUpload' );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgMSU_useDragDrop = true; // Should the drag & drop area be shown? (Not set by default)
$wgMSU_showAutoCat = true; // Files uploaded while editing a category page will be added to that category
$wgMSU_checkAutoCat = true; // Whether the checkbox for adding a category to a page is checked by default
$wgMSU_useMsLinks = false; // Insert links in Extension:MsLinks style?
$wgMSU_confirmReplace = true; // Show the "Replace file?" checkbox
$wgMSU_imgParams = '400px'; // The default size for  images inserted on the edit page""
$wgEnableWriteAPI = true; // Enable the API
$wgEnableUploads = true; // Enable uploads
$wgAllowJavaUploads = true; // Solves problem with Office 2007 and newer files (docx, xlsx, etc.)
$wgGroupPermissions['user']['upload'] = true; // Allow regular users to upload files
// Make sure that the file types you want to upload are allowed:
$wgFileExtensions = array('zip', 'tar', 'gz', 'png','gif','jpg','jpeg','doc','xls','pdf','ppt','tiff','bmp','docx','xlsx','pptx');
#
# == MsUpload end ==
#


#
# == WikiEditor begin ==
#
wfLoadExtension( 'WikiEditor' );
#
# == WikiEditor end ==
#


$wgScriptPath  = "/w";
$wgArticlePath = "/wiki/$1";

$wgAllowUserCss = true;


#
# debug
#
#$wgShowExceptionDetails = true;
#$wgDebugToolbar = true;
#$wgShowDebug = true;
#$wgDevelopmentWarnings = true;
