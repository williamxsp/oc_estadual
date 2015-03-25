
                    </div>
                </div>
            </div>
        </article>
        
<hr>
<!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <ul class="list-inline text-center">
                            <li>
                                <a href="http://twitter.com/williamxsp" target="_BLANK">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="http://fb.com/williamxsp" target="_BLANK">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="http://github.com/williamxsp" target="_BLANK">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; William Martins 2014</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="//__baseDir__/assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="//__baseDir__/assets/js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="//__baseDir__/assets/js/clean-blog.min.js"></script>

        <script>
            $(function()
            {

                $(function(){
                    var pageHeading = $('.page-heading');
                    var height = $(pageHeading).height();
                    var windowHeight = $(window).height();

                    $(pageHeading).css('paddingTop', (windowHeight-height)/2);

                });

                $(window).scroll(function(ev)
                {
                    var st = $(window).scrollTop();
                    $('.intro-header').css({
                        'backgroundPosition':'center ' + st/2 + 'px'
                   //'textShadow':'5px ' + st/10+5 + 'px ' + st/10 + 'px rgba(0, 0, 0, 0.2)',
               });
                });
            });
        </script>

    </body>

    </html>
