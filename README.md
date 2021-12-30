# Colorize text PHP library

This _CLIORIZE_ library colorize your text in the command line interface. 

## Class description

```php
class clitext {
    /**
     * 
     * @param string $text
     * @param string $color
     * @param string $bgcolor
     */
    public function __construct(
            string $text,
            string $color = clitext::TXT_WHITE,
            string $bgcolor = clitext::BG_BLACK
    );

    /**
     * 
     * @param string $color
     * @return clitext
     * @throws Exception
     */
    public function color(string $color): clitext;

    /**
     * 
     * @param string $bgcolor
     * @return clitext
     * @throws Exception
     */
    public function background(string $bgcolor): clitext;

    /**
     * 
     * @return string
     */
    public function to_string(): string;

}

```
## Usage example

```php
$sample = new clitext("Hello, World!");
echo $sample->color("red")->background(clitext::BG_BLUE)->to_string();

```
