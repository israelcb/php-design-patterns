<?php
//ConcreteObserverDT.php
class ConcreteObserverDT implements Observer {

    private $dpHeader;
    private $bodytext;
    private $imageURL;

    public function update(Subject $subject) {

        [
            $this->dpHeader,
            $this->bodytext,
            $this->imageURL
        ] = $subject->getState();

        $this->doDesktop();
    }

    private function doDesktop() {

        $showPage = <<<DESKTOP
<html>
    <head>
        <meta charset="UTF-8">
        <title>Desk Top Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="desktop.css">
    </head>
    <body>
        <article>
            <header>
                <h1>{$this->dpHeader}</h1>
            </header>
            <section>
                <img src="desktop/{$this->imageURL}" alt="image urls" width="100%">
                <p>{$this->bodytext}</p>
            </section>
        </article>
    </body>
</html>
DESKTOP;
        echo $showPage;
    }
}
?>