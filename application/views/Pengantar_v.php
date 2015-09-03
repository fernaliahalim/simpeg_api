<div class="container">
	<br/>
	<div class="grid">
        <div class="row">
            <div class="span3 no-tablet-portrait">
                <nav>
                  	<ul class="side-menu" style="position: static; top: 65px; z-index: 1000;">
                        <li><a href="#_pendahuluan">Pendahuluan</a></li>
                        <li><a href="#_api_root">API Root URL</a></li>
                    </ul>
               	</nav>
            </div>

            <div class="span1">
            </div>

            <div class="span9 no-tablet-portrait">
                <h2 id="_pendahuluan"><i class="icon-puzzle on-left"></i>Pendahuluan</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                	SIMPEG API merupakan penyedia data kepegawaian yang di kembangkan oleh Badan Kepegawaian, 
                	Pendidikan dan Pelatihan (BKPP) Kota Bogor. SIMPEG API memungkinkan pengembang aplikasi dalam 
                	berbagai <i>platform</i> untuk memakai data kepegawaian dengan mudah. SIMPEG API memungkinkan
                	aplikasi di berbagai <i>platform</i> tersebut me-<i>request method</i> yang sudah disediakan
                	dengan HTTP <i>Request</i> SIMPEG API.<br/>
                	<img src="<?php echo base_url(); ?>assets/img/desc1.png">
                </div>
                <br/>
                <h2 id="_api_root"><i class="icon-puzzle on-left"></i>API Root URL</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                	API Root URL SIMPEG API dipanggil dengan http://bkpp.kotabogor.go.id:8080/ <br/><br/>
                	Pengaksesan <i>method</i> dilakukan dengan HTTP POST atau HTTP GET sesuai dengan <i>method request</i>
					dari <i>method</i> yang hendak dipanggil. Cara pengaksesan <i>method</i> dengan HTTP GET adalah 
					dengan akses SIMPEG API adalah dengan menyertai API Root URL SIMPEG API dan diikuti dengan nama
                	<i>method</i> yang hendak dipanggil.<br/>
                	<pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="pln">http://bkpp.kotabogor.go.id:8080/</span><span class="tag">nama_method?</span><span class="atn">parameter=</span><span class="atv">value</span></li></ol></pre>
					<br/>
					Sedangkan, pengaksesan <i>method</i> dengan HTTP POST adalah dengan menyertai API ROOT URL SIMPEG API saja.
					Parameter dikirimkan dengan memilih <i>method</i> POST pada aplikasi yang hendak mengakses <i>method</i>
					SIMPEG API.
					<pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="pln">http://bkpp.kotabogor.go.id:8080/</span><span class="tag">nama_method</span></li></ol></pre>
				</div>
            </div>
       	</div>
    </div>
	<br/>
	<br/>
</div>