<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{!!$share_config->description!!}">
<meta name="author" content="Ansonika">
<title>{!!$share_config->title!!}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="{{$share_config->favicon}}" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

<link rel="canonical" href="{{url()->current()}}" />
<meta property="og:type" content="website" />
<meta name="keywords" content="@if(isset($config)){{$config->keywords}} @else {{$share_config->keywords}} @endif" itemprop="keywords" >
<meta name="description" content="@if(isset($config)){{$config->description}} @else {{$share_config->description}} @endif" >
<meta property="og:title" content="@if(isset($config)) @if($config->meta_title){{$config->meta_title}} @else {{$config->title}} @endif @else {{$share_config->title}} @endif"  />
<meta property="og:description" content="@if(isset($config))@if($config->meta_description){{$config->meta_description}} @else {{$config->description}} @endif @else {{$share_config->description}} @endif"/>
<meta property="og:image" content="@if(isset($product)){{asset($product->getImage())}} @elseif(isset($blog)){{asset($blog->getImage())}} @elseif(isset($config)) {{$config->getImage()}} @else '' @endif" />
<meta property="og:url" content="{{url()->current()}}" />
<!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Aguafina+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/themes/madebyhand/assets/css/fonts/icons/style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/themes/madebyhand/assets/css/font-awesome.css')}}"/>
<script type="text/javascript">
    !function (e, n, t) {
        "use strict";
        var o = "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap", r = "__3perf_googleFonts_c2536";
        function c(e) {
            (n.head || n.body).appendChild(e)
        }
        function a() {
            var e = n.createElement("link");
            e.href = o, e.rel = "stylesheet", c(e)
        }
        function f(e) {
            if (!n.getElementById(r)) {
                var t = n.createElement("style");
                t.id = r, c(t)
            }
            n.getElementById(r).innerHTML = e
        }
        e.FontFace && e.FontFace.prototype.hasOwnProperty("display") ? (t[r] && f(t[r]), fetch(o).then(function (e) {
            return e.text()
        }).then(function (e) {
            return e.replace(/@font-face {/g, "@font-face{font-display:swap;")
        }).then(function (e) {
            return t[r] = e
        }).then(f).catch(a)) : a()
    }(window, document, localStorage);
</script>
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/bootstrap.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/animate.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/settingpanel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/assets/css/theme.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/modules/jmstestimonials/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsbrands/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsajaxsearch/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsmegamenu/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsmegamenu/views/css/off-canvas.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsslider/views/css/fractionslider.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsslider/views/css/front_style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsblog/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/modules/jmswishlist/views/css/front.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsadvsearch/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsvermegamenu/views/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmsvermegamenu/views/css/mobile_style.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/js/jquery/ui/themes/base/minified/jquery-ui.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/js/jquery/ui/themes/base/minified/jquery.ui.theme.min.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/js/jquery/plugins/bxslider/jquery.bxslider.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/js/jquery/plugins/fancybox/jquery.fancybox.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/modules/ps_imageslider/css/homeslider.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/jcarousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/owl.carousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/owl.theme.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/assets/css/custom.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/modules/jmspagebuilder/views/css/off-canvas.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('assets/frontend/themes/madebyhand/assets/css/theme-responsive.css')}}" type="text/css" media="all">

<!-- BASE CSS -->


<script type="text/javascript">
    var jpb_addtocart = "";
    var jpb_gutterwidth = "30";
    var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","labels":{"tax_short":"(tax excl.)","tax_long":"(tax excluded)"},"id_address_delivery":0,"id_address_invoice":0,"is_virtual":false,"vouchers":{"allowed":1,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"last_passwd_gen":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"ip_registration_newsletter":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"outstanding_allow_amount":0,"max_payment_days":0,"note":null,"is_guest":0,"id_shop":null,"id_shop_group":null,"id_default_group":1,"date_add":null,"date_upd":null,"reset_password_token":null,"reset_password_validity":null,"id":null,"is_logged":false,"gender":{"type":null,"name":null,"id":null},"risk":{"name":null,"color":null,"percent":null,"id":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Made by Hand","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-full-width":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Made by Hand","email":"admin@admin.com","registration_number":"","long":false,"lat":false,"logo":"\/madebyhand\/img\/jms-erado-logo-1531966777.jpg","stores_icon":"\/madebyhand\/img\/logo_stores.png","favicon":"\/madebyhand\/img\/favicon.ico","favicon_update_time":"1531966777","address":{"formatted":"Made by Hand<br>No. 1203 Jonh Rhjn Suite 120, NY 77101. 178 ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for Sagrada Familia, Barcelona, Espania<br>United States","address1":" No. 1203 Jonh Rhjn Suite 120, NY 77101.","address2":"178 ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for Sagrada Familia, Barcelona, Espania","postcode":"","city":"","state":null,"country":"United States"},"phone":" +1 (230) 2 4466 - 4468","fax":""},"urls":{"base_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/","current_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php","shop_domain_url":"http:\/\/prestashop17.joommasters.com","img_ps_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/","img_cat_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/c\/","img_lang_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/l\/","img_prod_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/p\/","img_manu_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/m\/","img_sup_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/su\/","img_ship_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/s\/","img_store_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/st\/","img_col_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/img\/co\/","img_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/themes\/madebyhand\/assets\/img\/","css_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/themes\/madebyhand\/assets\/css\/","js_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/themes\/madebyhand\/assets\/js\/","pic_url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/upload\/","pages":{"address":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=address","addresses":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=addresses","authentication":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=authentication","cart":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=cart","category":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=category","cms":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=cms","contact":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=contact","discount":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=discount","guest_tracking":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=guest-tracking","history":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=history","identity":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=identity","index":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php","my_account":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=my-account","order_confirmation":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order-confirmation","order_detail":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order-detail","order_follow":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order-follow","order":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order","order_return":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order-return","order_slip":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order-slip","pagenotfound":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=pagenotfound","password":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=password","pdf_invoice":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=pdf-invoice","pdf_order_return":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=pdf-order-return","pdf_order_slip":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=pdf-order-slip","prices_drop":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=prices-drop","product":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=product","search":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=search","sitemap":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=sitemap","stores":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=stores","supplier":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=supplier","register":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=authentication&create_account=1","order_login":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?controller=order&login=1"},"theme_assets":"\/madebyhand\/themes\/madebyhand\/assets\/","actions":{"logout":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php?mylogout="}},"configuration":{"display_taxes_label":false,"low_quantity_threshold":3,"is_b2b":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":1,"return_enabled":0,"number_of_days_for_return":14},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"http:\/\/prestashop17.joommasters.com\/madebyhand\/index.php"}],"count":1},"link":{"protocol_link":"http:\/\/","protocol_content":"http:\/\/"},"time":1620694366,"static_token":"2c6a4d83c5519755dbe32552f8ca79b4","token":"bd3a631bc88f600cbefa9482d94e0f5a"};
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155240324-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-155240324-1');
</script>
