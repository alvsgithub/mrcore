<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4:
/**
 * Smiley rule Xhtml renderer
 *
 * PHP versions 4 and 5
 *
 * @category   Text
 * @package    Text_Wiki
 * @author     Bertrand Gugger <bertrand@toggg.com>
 * @copyright  2005 bertrand Gugger
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @version    CVS: $Id: Smiley.php,v 1.2 2006/02/10 23:07:03 toggg Exp $
 * @link       http://pear.php.net/package/Text_Wiki
 */

/**
 * Smiley rule Xhtml render class
 *
 * @category   Text
 * @package    Text_Wiki
 * @author     Bertrand Gugger <bertrand@toggg.com>
 * @copyright  2005 bertrand Gugger
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/Text_Wiki
 * @see        Text_Wiki::Text_Wiki_Render()
 */
class Text_Wiki_Render_Xhtml_Smiley extends Text_Wiki_Render {

    /**
     * Configuration keys for this rule
     * 'prefix' => the path to smileys images inclusive file name prefix,
     *             starts with '/' ==> abolute reference
     *             if no file names prefix but some folder, terminates with '/'
     * 'extension' => the file extension (inclusive '.'), e.g. :
     *       if prefix 'smileys/icon_' and extension '.gif'
     *       ':)' whose name is 'smile' will give relative file 'smileys/icon_smile.gif'
     *       if prefix '/image/smileys/' and extension '.png': absolute '/image/smileys/smile.gif'
     * 'css' => optional style applied to smileys
     *
     * @access public
     * @var array 'config-key' => mixed config-value
     */
    var $conf = array(
        'prefix' => 'images/smiles/icon_',
        'extension' => '.png',
        'css' => null
    );

    /**
      * Renders a token into text matching the requested format.
      * process the Smileys
      *
      * @access public
      * @param array $options The "options" portion of the token (second element).
      * @return string The text rendered from the token options.
      */
    function token($options)
    {
        //I ignore the passed $this->getConf('prefix') from my class/parser.class.php
        //And determine the path for each image, since I can have theme overrides
        
        // Ability to override using mrcore global topic and <phpw> tags
        // mReschke 2014-04-30 - 
        #global $global_smileys_topic_id;
        $imageName = 'icon_' . $options['name'] . $this->getConf('extension'); //no icon_ prefix
        #if (isset($global_smileys_topic_id) && file_exists(Config::FILES_DIR."/$global_smileys_topic_id/smileys/$imageName")) {
        #    //Found image in custom mrcore override topic
        #    $imageFile = Config::WEB_BASE_URL."/files/$global_smileys_topic_id/smileys/$imageName";
        #}elseif (file_exists(Config::ABS_BASE."/web/theme/".Config::THEME."/images/smileys/$imageName")) {
        #    //Found smiley in the override theme
        #    $imageFile = Config::WEB_BASE_IMAGE_URL."/theme/".Config::THEME."/images/smileys/$imageName";
        #} else {
        #    //Found smiley in the default theme
        #    $imageFile = Config::WEB_BASE_IMAGE_URL."/theme/default/images/smileys/$imageName";    
        #}
        $imageFile = asset("theme/images/smileys/$imageName");

        // attempt to get the image size
        // I found this crashed some PHP systems, not needed anyway
        #$imageSize = @getimagesize($imageFile);

        // return the HTML output
        /*return '<img src="' . $this->textEncode($imageFile) . '"' .
            (is_array($imageSize) ?
                ' width="' . $imageSize[0] . '" height="' . $imageSize[1] .'"' : '') .
            ' alt="' . $options['desc'] . '"' .
            $this->formatConf(' class="%s"', 'css') . ' />';*/
        return '<img src="'.$this->textEncode($imageFile).'" alt="'.$options['desc'].'"'.$this->formatConf(' class="%s"', 'css') . ' />';
    }
}
?>
