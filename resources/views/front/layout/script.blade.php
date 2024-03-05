


<script src="{{asset('assets/js/pricing-slide.js')}}"></script>
<script src="{{asset('assets/js/selectFx.js')}}"></script>
<script src="{{asset('assets/js/classie.js')}}"></script>
<script src="{{asset('assets/js/lazyload.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/revolution.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.material.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.datetimepicker.full.min.js')}}"></script>
<script src="{{asset('assets/js/tscripts.js')}}"></script>


<script type="text/javascript">
    window.$zopim || (function(d, s) {
        var z = $zopim = function(c) {
                z._.push(c)
            },
            $ = z.s =
            d.createElement(s),
            e = d.getElementsByTagName(s)[0];
        z.set = function(o) {
            z.set.
            _.push(o)
        };
        z._ = [];
        z.set._ = [];
        $.async = !0;
        $.setAttribute("charset", "utf-8");
        $.src = "http://v2.zopim.com/?3ERREXEymAInmKXq4xzkffOwPshRiisJ";
        z.t = +new Date;
        $.
        type = "text/javascript";
        e.parentNode.insertBefore($, e)
    })(document, "script");
</script>



<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-104261100-1', 'auto');
    ga('send', 'pageview');
</script>

<script>
    $(function() {
        var myLazyLoad = new LazyLoad({
            elements_selector: ".lazy"
            // load_delay: 300 //adjust according to use case
        });
    });
</script>

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 924845129;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
{{-- <script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt"></script> --}}
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt=""
            src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/924845129/?guid=ON&amp;script=0" />
    </div>
</noscript>


<script>
   
    $(document).ready(function(){
       
        $('.orderModalbtn').click(function(e){
            var price = $(this).data('price')
            var pkgName = $(this).data('pkgname')
            $('#pkgPrice').val(price)
            $('#pkgName').val(pkgName)
            $('#orderModal').modal('show')
        })
    })
</script>


@yield('script')