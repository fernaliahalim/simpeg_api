<div class="container">
	<br/>
	<div class="grid">
        <div class="row">
            <div class="span3 no-tablet-portrait">
                <nav>
                  	<ul class="side-menu" style="position: static; top: 65px; z-index: 1000;">
                        <li><a href="#_rest_request">Rest Request</a></li>
                        <li><a href="#_json_respon">JSON Respon</a></li>
                        <li><a href="#_json_error">JSON Error</a></li>
						<li><a href="#_req_status">Request Status</a></li>
                    </ul>
               	</nav>
            </div>

            <div class="span1">
            </div>

            <div class="span9 no-tablet-portrait">
                <h2 id="_rest_request"><i class="icon-puzzle on-left"></i>REST Request</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                	API key root URL SIMPEG API dapat dipanggil dengan http://bkpp.kotabogor.go.id:8080<br/><br/>
                	Dalam pengaksesan REST Service SIMPEG API dilakukan dengan dua cara sesuai dengan <i>method request</i> 
					dari <i>method</i> yang akan dipangil. Pada dasarnya, dalam pengaksesan <i>method</i> dengan <i>method request</i>
					GET adalah penggunaan root URL SIMPEG API dan
            		diikuti dengan nama <i>method</i> dan parameternya. <i>Default</i> pengaksesan REST service SIMPEG
            		API:<br/>
            		<pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="pln">http://bkpp.kotabogor.go.id:8080/</span><span class="tag">nama_method?</span><span class="atn">parameter=</span><span class="atv">value</span></li></ol></pre>
                	<br/>
					Sedangkan, pengaksesan <i>method</i> dengan HTTP POST adalah dengan menyertai API ROOT URL SIMPEG API saja.
					Parameter dikirimkan dengan memilih <i>method</i> POST pada aplikasi yang hendak mengakses <i>method</i>
					SIMPEG API.
					<pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="pln">http://bkpp.kotabogor.go.id:8080/</span><span class="tag">nama_method</span></li></ol></pre>
					<br/>
                	Perlu untuk diperhatikan bahwa untuk memanggil REST service SIMPEG API diperlukan API key yang 
                	wajib disertakan sebagai parameter dalam setiap pemanggilan <i>method</i>, untuk mendapatkan api_key
                	Anda harus <a href="<?php echo base_url(); ?>Daftar">mendaftar</a> terlebih dahulu. Contoh pengaksesan REST service SIMPEG API:<br/>
                	<pre class="prettyprint linenums prettyprinted"><ol class="linenums"><li class="L0"><span class="pln">http://bkpp.kotabogor.go.id:8080/</span><span class="tag">nama_method?</span><span class="atn">api_key=</span><span class="atv">xxxxx</span></li></ol></pre>
                	<br/>
                	Dalam pengaksesan REST service menggunakan HTTP GET yang menyertakan nama <i>method</i> dan parameter
                	yang sesuai, untuk detail nama <i>method</i> dan nama parameter didokumentasikan pada daftar <a href="<?php echo base_url(); ?>method_api">method API</a>.
                </div>

                <br/>
                <h2 id="_json_respon"><i class="icon-puzzle on-left"></i>JSON Respon</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                	Hasil dari pengaksesan <i>method</i> SIMPEG API adalah JSON. JSON respon yang mengembalikan
                    nilai <i>request status</i> sama dengan seratus adalah JSON yang valid. Contoh hasil dari pengaksesan
                	<i>method</i> SIMPEG API:
                	<pre class="prettyprint prettyprinted">{
  "id":1,
  "nama":"Susi",
  "nip":"xxxxxxxxxxxxxxxxxxxxxxxxxxx",
  "jabatan":"Fungsional Umum",
  "unit_kerja":"Badan Kepegawaian, Pendidikan dan Pelatihan",
  "request_status":100
}</pre>
                </div>

                <br/>
                <h2 id="_json_error"><i class="icon-puzzle on-left"></i>JSON Error</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                    JSON <i>error</i> adalah JSON yang mengembalikan nilai <i>request status</i> tidak sama dengan seratus. 
                    Contoh hasil dari pengaksesan <i>method</i> SIMPEG API yang mengembalikan JSON <i>error</i>:
                    <pre class="prettyprint prettyprinted">{
  "id":null,
  "nama":null,
  "nip":null,
  "jabatan":null,
  "unit_kerja":null,
  "request_status":101
}</pre>
                </div>
				
				<br/>
				<h2 id="_req_status"><i class="icon-puzzle on-left"></i>Request Status</h2>
                <div class="sdhsdhsj" style="text-align:justify">
                    <table class="table striped" id="table">
						<thead>
							<tr>
								<th>ID Status</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($all_data->result() as $data){ ?>
							<tr>
								<td><?php echo $data->id_error; ?></td>
								<td><?php echo $data->status; ?></td>
							</tr>
							<?php } ?>
						</tbody>
						<tfoot></tfoot>
					</table>
                </div>
            </div>
       	</div>
    </div>
	<br/>
	<br/>
</div>