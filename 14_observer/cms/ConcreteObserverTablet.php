<?php
//ConcreteObserverTablet.php
class ConcreteObserverTablet implements Observer {

    private $dpHeader;
    private $bodytext;
    private $imageURL;

    public function update(Subject $subject) {

        [
            $this->dpHeader,
            $this->bodytext,
            $this->imageURL
        ] = $subject->getState();

        $this->doTablet();
    }

    private function doTablet() {

        //Sintaxe heredoc
        $showPage = <<<MOBILE
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablet Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="tablet.css">
    </head>
    <body>
        <article>
            <header>
                <h1>{$this->dpHeader}</h1>
            </header>
            <section>
                <img src="tablet/{$this->imageURL}" alt="image urls" width="100%">
                <p>{$this->bodytext}</p>
            </section>
        </article>
    </body>
</html>
MOBILE;
        echo $showPage;
    }
}
?>