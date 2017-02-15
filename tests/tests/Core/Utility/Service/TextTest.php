<?php
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-06-13 at 17:46:42.
 */
class TextTest extends ConcreteDatabaseTestCase
{
    /**
     * @var TextHelper
     */
    protected $object;

    protected $fixtures = array();
    protected $tables = array('ConfigStore');

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new \Concrete\Core\Utility\Service\Text();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    public function tearDown()
    {
        unset($this->object);
        parent::tearDown();
    }

    public function asciifyDataProvider()
    {
        return array(
            array('Mixed with English and Germaen', 'Mixed with English and Germän', 'de_DE'),
            array('Mixed with English and ', 'Mixed with English and 日本人', ''),
            array('Mixed with English and .doc', 'Mixed with English and 日本人.doc', ''),
            array('Mixed with English and .', 'Mixed with English and 日本人.日本人', ''),
            array('', '日本人', ''),
            array('.doc', '日本人.doc', ''),
            array('.', '日本人.日本人', ''),
        );
    }

    public function urlifyDataProvider()
    {
        return array(
            array('jetudie-le-francais', " J'étudie le français "),
            array('lo-siento-no-hablo-espanol', 'Lo siento, no hablo español.'),
            array('f3pws', 'ΦΞΠΏΣ'),
            array('yo-hablo-espanol', '¿Yo hablo español?'),
        );
    }

    public function shortenDataProvider()
    {
        return array(
            array('This is a simple test...', 'This is a simple test case', 24, '...'),
            array('This is a simple test etc', 'This is a simple test case', 22, ' etc'),
            array('This is a simple test.', 'This is a simple test case', 21, '.'),
            array('The quick brown fox jumps over the lazy dog', 'The quick brown fox jumps over the lazy dog', 255, '…'),
            array('The lazy fox jumps over the quick brown dog', 'The lazy fox jumps over the quick brown dog', 0, '…'),
            array('This_is_a_simple_test_ca…', 'This_is_a_simple_test_case', 24, '…'),
        );
    }

    public function testTextHelper()
    {
        $this->assertInstanceOf('\Concrete\Core\Utility\Service\Text', Core::make('helper/text'));
    }

    /**
     * @dataProvider asciifyDataProvider
     */
    public function testAsciify($expected, $input1, $input2)
    {
        $this->assertEquals($expected, $this->object->asciify($input1, $input2));
    }

    /**
     * @dataProvider urlifyDataProvider
     */
    public function testUrlify($expected, $input)
    {
        $this->assertEquals($expected, $this->object->urlify($input));
    }

    /**
     * Test for many rounds with a language, that has no map associated
     * This causes a "regular expression is too large" error on old versions.
     */
    public function testUrlify_regexTooLarge()
    {
        for ($i = 0; $i < 1000; ++$i) {
            $this->object->urlify('Lo siento, no hablo español.', 60, -1);
        }
    }

    /**
     * @dataProvider shortenDataProvider
     */
    public function testShortenTextWord($expected, $input1, $input2, $input3)
    {
        $this->assertEquals($expected, $this->object->shortenTextWord($input1, $input2, $input3));
    }

    /**
     * @dataProvider shortenDataProvider
     */
    public function testWordSafeShortText($expected, $input1, $input2, $input3)
    {
        $this->assertEquals($expected, $this->object->wordSafeShortText($input1, $input2, $input3));
    }
}