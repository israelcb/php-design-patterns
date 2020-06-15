<?php
// TextProduct.php
include_once("Product.php");

class TextProduct implements Product {
    private $mfgProduct;
    public function getProperties() {
        // Começa a formatação heredoc
        $this->mfgProduct = <<<MALI
        <!doctype html>
        <html><head>
        <style type="text/css">
            header {
                color: #900;
                font-weight: bold;
                front-size: 24px;
                font-family: Verdana, Geneva, sans-serif;
            }
            p {
                font-family: Verdana, Geneva, sans-serif;
                font-size: 12px;
            }
        </style>
        <meta charset="UTF-8"><title>Mali</title></head>
        <body>
        <header>Mali</header>
        <p>The Sudanese Republic and Senegal became independent of France in 
        1960 as the Mali Federation. When Senegal withdrew after only a 
        few months, what formerly made up the Sudanese Republic was 
        renamed Mali. Rule by dictatorship was brought to a close in 1991 
        by a military coup that ushered in a period of democratic rule. 
        President Alpha Oumar KONARE won Mali's first two democratic presidential 
        elections in 1992 and 1997. In keeping with Mali's two-term 
        constitutional limit, he stepped down in 2002 and was succeeded by 
        Amadou Toumani TOURE, who was elected to a second term in a 2007 election 
        that was widely judged to be free and fair.
        Malian returnees from Libya in 2011 exacerbated tensions in northern Mali,
        and Tuareg ethnic militias rebelled in January 2012. Low- and mid-level
        soldiers, frustrated with the poor handling of the rebellion, overthrew
        TOURE on 22 March. Intensive mediation efforts led by the Economic Community 
        of West African States (ECOWAS) returned power to a civilian administration 
        in April with the appointment of Interim President Dioncounda TRAORE
        </p>
            </body></html>
MALI;
        return $this->mfgProduct;
    }
}
?>