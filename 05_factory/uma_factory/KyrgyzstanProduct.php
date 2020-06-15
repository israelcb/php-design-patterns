<?php
// KyrgyzstanProduct.php
include_once('FormatHelper.php');
include_once('Product.php');

class KyrgyzstanProduct implements Product {
    private $mfgProduct;
    private $formatHelper;
    public function getProperties() {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= <<<KYRGYZSTAN
        <img src='Countries/Kyrgyzstan.png' class='pixRight' width='600' height='304'>
        <header>Kyrgyzstan</header>
        <p>A Central Asian country of incredible natural beauty and proud 
        nomadic traditions, most of the territory of the present-day Kyrgyz 
        Republic was formally annexed to the Russian Empire in 1876. The 
        Kyrgyz staged a major revolt against the Tsarist Empire in 1916 in 
        which almost one-sixth of the Kyrgyz population was killed. The 
        Kyrgyz Republic became a Soviet republic in 1936 and achieved 
        independence in 1991 when the USSR dissolved. Nationwide 
        demonstrations in 2005 and 2010 resulted in the ouster of the 
        country’s first two presidents, Askar AKAEV and Kurmanbek BAKIEV. 
        Interim President Roza OTUNBAEVA led a transitional government and 
        following a nation-wide election, President Almazbek ATAMBAEV was 
        sworn in as president in 2011. In 2017, ATAMBAEV became the first 
        Kyrgyzstani president to step down after serving one full six-year 
        term as required in the country’s constitution. Former prime minister 
        and ruling Social-Democratic Party of Kyrgyzstan member Sooronbay 
        JEENBEKOV replaced him after winning an October 2017 presidential 
        election that was the most competitive in the country’s history, 
        although international and local election observers noted cases of 
        vote buying and abuse of public resources. The president holds 
        substantial powers as head of state even though the prime minister 
        oversees the Kyrgyzstani Government and selects most cabinet members. 
        The president represents the country internationally and can sign or 
        veto laws, call for new elections, and nominate Supreme Court judges, 
        cabinet members for posts related to security or defense, and numerous 
        other high-level positions. Continuing concerns for the Kyrgyz 
        Republic include the trajectory of democratization, endemic corruption, 
        a history of tense, and at times violent, interethnic relations, border 
        security vulnerabilities, and potential terrorist threats.
        </p>
KYRGYZSTAN;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}