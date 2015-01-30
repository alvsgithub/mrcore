<?php
// vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4:
/**
 * Toc rule end renderer for Xhtml
 *
 * PHP versions 4 and 5
 *
 * @category   Text
 * @package    Text_Wiki
 * @author     Paul M. Jones <pmjones@php.net>
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @version    CVS: $Id: Toc.php,v 1.9 2005/07/30 08:03:29 toggg Exp $
 * @link       http://pear.php.net/package/Text_Wiki
 */

/**
 * This class inserts a table of content in XHTML.
 *
 * @category   Text
 * @package    Text_Wiki
 * @author     Paul M. Jones <pmjones@php.net>
 * @license    http://www.gnu.org/copyleft/lesser.html  LGPL License 2.1
 * @version    Release: @package_version@
 * @link       http://pear.php.net/package/Text_Wiki
 */

#mReschke added expand all header content on TOC link click 2011-04-13

class Text_Wiki_Render_Xhtml_Toc extends Text_Wiki_Render {

    var $conf = array(
        'css_list' => null,
        'css_item' => null,
        'title' => '<strong>Table of Contents</strong>',
        'div_id' => 'toc',
        'collapse' => true
    );

    var $min = 2;

    /**
    *
    * Renders a token into text matching the requested format.
    *
    * @access public
    *
    * @param array $options The "options" portion of the token (second
    * element).
    *
    * @return string The text rendered from the token options.
    *
    */

    function token($options)
    {
        // type, id, level, count, attr
        extract($options);

        switch ($type) {

        case 'list_start':

            $css = $this->getConf('css_list');
            $html = '';

            // collapse div within a table?
            if ($this->getConf('collapse')) {
                $html .= '<table border="0" cellspacing="0" cellpadding="0">';
                $html .= "<tr><td>\n";
            }


            // add the div, class, and id
            $html .= '<div'; //original
            #$html .= '<div class="info"><div'; //mReschke
            if ($css) {
                $html .= " class=\"panel panel-default $css\"";
            }

            $div_id = $this->getConf('div_id');
            if ($div_id) {
                $html .= " id=\"$div_id\"";
            }

            // add the title, and done
            $html .= '>';
            $html .= $this->getConf('title');

            $html .= '<div class="panel-body">';
            return $html;
            break;

        case 'list_end':
        	if ($this->getConf('collapse')) {
        	    return "\n</div>\n</td></tr></table></div>\n\n";
        	} else {
                return "\n</div>\n</div>\n\n"; #Original
                #return "\n</div></div>\n\n"; #mReschke
            }
            break;

        case 'item_start':
            $html = "\n\t<div";

            $css = $this->getConf('css_item');
            if ($css) {
                $html .= " class=\"$css\"";
            }

            $pad = ((($level - $this->min) + 1) * 17) + 10;
            $html .= " style=\"padding-left: {$pad}px;\">";
            #$html .= "<a href=\"#$id\">"; #Original
            #$html .= "<a href=\"#$id\" onclick=\"toggle_wiki_header('$id');\">"; #mReschke
            $html .= "<a href=\"#$id\" onclick=\"toggle_wiki_headers(false);\">"; #mReschke
            return $html;
            break;

        case 'item_end':
            return "</a></div><hr />";
            break;
        }
    }
}
?>
