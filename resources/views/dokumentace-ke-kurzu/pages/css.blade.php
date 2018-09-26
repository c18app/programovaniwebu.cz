@extends(Config('cmsx.app.template').'::layouts.main', ['content_type'=>'dokumentace'])

@section('title', ' - CSS | dokumentace ke kurzu')

@section('content-title', 'CSS')

@section('content')
<h2>CSS</h2>

<h3>Co je to CSS</h3>
<p>
    CSS (Cascading Style Sheets) je jazyk, který popisuje způsob zobrazení elementů na stránkách.
</p>
<h3>příklady použití</h3>
<p style="margin-bottom: 0;">
    vloženo v HTML
</p>
<pre>
&lg;tyle type="text/css"&gt;
#element {
    width: 200px;
    color: #f00;
}
&lg;/style&gt;
</pre>
<p style="margin-bottom: 0;">
    příklad párové značky:
</p>
<pre>
&lt;p&gt;Text odstavce&lt;/p&gt;
</pre>
<p style="margin-bottom: 0;">
    příklad komentáře:
</p>
<pre>
&lt;!-- toto je komentář --&gt;
</pre>

<h3>Základní struktura HTML5 dokumentu</h3>
<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;Titulek stránky&lt;/title&gt;
    &lt;link rel="stylesheet" href="style.css"&gt;
    &lt;script src="javascript.js" type="text/javascript"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Vítejte na programování webu&lt;/h1&gt;
    &lt;p&gt;
      Kurzy a informace o programování webu.
    &lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

<h3>Doporučená literatura</h3>
<a class="pull-left" style="margin-right: 15px;" href="https://www.albatrosmedia.cz/tituly/22383164/html5-okamzite/"
   target="_blank">
    <img src="data:image/jpeg;base64,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">
</a>
<h4><a href="https://www.albatrosmedia.cz/tituly/22383164/html5-okamzite/" target="_blank">HTML5 Okamžitě</a></h4>
<p>
    Kniha popisuje novinky v HTML&nbsp;5. Kniha předpokládá základní znalosti práce s HTML, nicméně až se základy
    naučíte,
    bude tato kniha velmi dobrým pomocníkem při práci s pokročilými možnostmi HTML&nbsp;5.
    <br>
    <br>
    témata:<br>
    popis nových HTML tagů pro tvorbu struktury; nové formulářové tagy; Multimédia, audio a video; Canvas &amp; SVG;
    Tvorba offline aplikací; API: Web Workers; API: Geolocation; API: Server Sent Events; API: Websocket; API: Cross-document messaging
</p>

<p class="clearfix"></p>
<p>
<table class="table">
    <tr>
        <td><a href="https://www.w3schools.com/tags/" target="_blank">https://www.w3schools.com/tags/</a></td>
        <td>obsahuje seznam všech HTML tagů a jejich atributů. Podpora jednotlivých tagů a atributů v různých
            prohlížečích.
        </td>
    </tr>
    <tr>
        <td><a href="https://www.w3schools.com/html/" target="_blank">https://www.w3schools.com/html/</a></td>
        <td>obsahuje ukázky práce s HTML. Naučí Vás jak HTML používat.
        </td>
    </tr>

</table>
</p>
@endsection