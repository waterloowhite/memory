<?php

namespace dokuwiki\plugin\dw2pdf\test;

use DokuWikiTest;

/**
 * Export link tests for the dw2pdf plugin
 *
 * @group plugin_dw2pdf
 * @group plugins
 */
class SyntaxExportLinkTest extends DokuWikiTest
{

    protected $pluginsEnabled = array('dw2pdf');

    function testParser()
    {
        global $ID;
        $ID = 'foo:bar:start';
        $parser_response = p_get_instructions('~~PDFNS>.:|Foo~~');
        $expected_parser_response = array(
            'plugin',
            array(
                'dw2pdf_exportlink',
                array(
                    'link' => '?do=export_pdfns&book_ns=foo:bar&book_title=Foo',
                    'title' => 'Export namespace "foo:bar:" to file Foo.pdf',
                    5,
                    1,
                ),
                5,
                '~~PDFNS>.:|Foo~~',
            ),
            1,
        );
        $this->assertEquals($expected_parser_response, $parser_response[2]);
        $renderer_response = p_render('xhtml', $parser_response, $info);
        $expected_renderer_response = 'doku.php?id=foo:bar:start&amp;do=export_pdfns&amp;book_ns=foo:bar&amp;book_title=Foo" class="wikilink2" title="foo:bar:start" rel="nofollow" data-wiki-id="foo:bar:start">Export namespace &quot;foo:bar:&quot; to file Foo.pdf</a>';
        $trimmed_renderer_response = substr($renderer_response, strpos($renderer_response, 'doku.php'), -5);
        $trimmed_renderer_response = trim($trimmed_renderer_response);
        $this->assertEquals($expected_renderer_response, $trimmed_renderer_response);
    }
}

