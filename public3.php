<!-- 定义内容区的php框架 -->
<?php 
	// header("Content-type:text/html; charset=utf-8");

	// 内容区框架类
	class ContentObj {
		public $t1;		// 主标题
		public $txt;	// 内容
		public $t2;		// 次标题
		public $href = 'javascript:';	// a的链接
		public $img_src;	// 图片路劲
		public $v_src;	// 视频路径
		public $v_w = '660';	// 视频的宽度
		public $v_h = '400';	// 视频的高度

		// 基本框架
		public function basicFrame() {
			echo 
			'<div class="spe-content">
				<div>	
					<h1>'.$this->t1.'</h1>
					<p>'.$this->txt.'</p>
					<h2>'.$this->t2.'</h2>
					<a href="'.$this->href.'">
						<img src="'.$this->img_src.'">
					</a>
				</div>
			</div>';
		}

		// 把定义的值都清空方法(重新定义)
		public function init() {
			$this->t1 = '';
			$this->txt = '';
			$this->t2 = '';
			$this->href = 'javascript:';
			$this->img_src = '';
			$this->v_src = '';
		}

		// 视频嵌入链接
		public function video() {
			echo "<embed src='".$this->v_src."' allowFullScreen='true' quality='high' width='".$this->v_w."' height='".$this->v_h."' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'>
			</embed>";
		}
	}

	// 多于字符剪切
	function Trimtit($tit,$n){
		if(mb_strlen($tit,'utf8')>$n)
			return mb_substr($tit,0,$n,'utf8')."...";
		else
			return $tit;
	}
 
 //无人机应用
 	// 1.工程建设
	function pro_build() {
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '项目跟踪';
		$cnt_obj->txt = 
		'可广泛应用于项目开发过程中的跟踪航拍，为建设管理者提供诸如拆迁进度、施工进度、场地管理等大视野影像资料，助力于项目建设与决策。';
		$cnt_obj->t2 = '拆迁进度航拍 ';
		$cnt_obj->img_src = 'images/uav-app1.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t2 = '施工进度航拍';
		$cnt_obj->img_src = 'images/uav-app2.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '施工过程影像存档';
		$cnt_obj->img_src = 'images/uav-app10.jpg';
		$cnt_obj->basicFrame();
	}

	// 2.航拍测量
	function aerial_survey(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '航拍测量扩展';
		$cnt_obj->txt = 
		'利用专业航测软件结合航拍高清影像，可提供大比例尺地形图及三维建模，特别适用于初期普查及竣工影像测量。';
		$cnt_obj->img_src = 'images/uav-app6.jpg';
		$cnt_obj->basicFrame();
	}

	// 3.汇报摄影
	function report(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '汇报摄影';
		$cnt_obj->txt = 
		'专业的航拍团队可为项目建设过程中的汇报文案提供项目全景影像资料，并可经专业后期制作形成汇报视频，丰富、提高汇报单位的文案质量，为与会者提供直接的、全面的感观识别，并留下深刻印象。';
		$cnt_obj->img_src = 'images/uav-app3.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '记录片航拍';
		$cnt_obj->txt = '可根据客户需要提供记录片航拍素材，也可完成全部后期制作后提供整片。';
		$cnt_obj->t2 = '厦门信全航拍样片-汀溪水库简介';
		$cnt_obj->basicFrame();

		$cnt_obj->v_src = 'https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=y0390xcdjwr&auto=0';
		$cnt_obj->video();
	}

	// 4.水库巡检
	function reservoir(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '水库巡检';
		$cnt_obj->img_src = 'images/uav-app7.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '坝体检修';
		$cnt_obj->img_src = 'images/uav-app9.jpg';
		$cnt_obj->basicFrame();
	}

	// 5.实景三维建模
	function line(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '实景三维建模';
		$cnt_obj->txt = '可为客户提供场地、厂房、楼盘、小区、水库库区等高精度实景实体三维模型，并根据三维模型生成等高线、谷歌瓦片等交互数据。三维成果可广泛运用于广告宣传、日常管理等。';
		$cnt_obj->t2 = '承接的场地三维建模实例';
		$cnt_obj->basicFrame();

		echo 
		"<iframe 
		src='https://www.djivideos.com/video_play/503c7d9a-71f5-4590-8f2e-b4878b1aade5?autoplay=1&amp;isAutoPlay=1' 
		frameborder='1'
		allowfullscreen='true' 
		webkitallowfullscreen='true' 
		mozallowfullscreen='true'
		height='400'
		width='660'
		>
		</iframe>";
	}

	// 6.抢险救灾
	function disaster(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '抢险救灾';
		$cnt_obj->txt = '专业的航拍团队可迅速提供受灾地高清航拍影像，为抢险救灾工作提供决策依据。';
		$cnt_obj->img_src = 'images/uav-app4.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '抢险救灾';
		$cnt_obj->img_src = 'images/uav-app5.jpg';
		$cnt_obj->basicFrame();
	}

	// 7.楼盘
	function properties(){
		$cnt_obj = new ContentObj();
		
		$cnt_obj->img_src = 'res/1.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/2.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/3.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/4.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/5.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/6.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/7.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/8.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/9.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/10.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/11.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/1.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/12.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/13.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/14.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/15.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/16.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/17.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/18.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/19.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->img_src = 'res/20.jpg';
		$cnt_obj->basicFrame();
	}

	// 9.园林景区
	function gardens(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '会展园林';
		$cnt_obj->img_src = 'images/gardens1.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '翔安隧道';
		$cnt_obj->img_src = 'images/gardens2.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '园林';
		$cnt_obj->img_src = 'images/gardens3.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '市民广场';
		$cnt_obj->img_src = 'images/scenic_spot1.jpg';
		$cnt_obj->basicFrame();

		$cnt_obj->init();
		$cnt_obj->t1 = '园博苑（景区）';
		$cnt_obj->img_src = 'images/scenic_spot2.jpg';
		$cnt_obj->basicFrame();
	}

	// 10.行业定制
	function industry(){
		$cnt_obj = new ContentObj();

		$cnt_obj->t1 = '行业定制';
		$cnt_obj->txt = '可根据客户行业要求，提供量身定制的航拍服务。';
		$cnt_obj->basicFrame();
	}


	// 无人机销售
	// 产品展示
	function uav_show(){
		echo
		'
			<ul class="product-ul-img">
				<?php
					require("xq_manger/conn.php");
					$result=@mysql_query("select *from product order by ID desc",$conn);
					$sum=mysql_num_rows($result);
					for($i=0;$i<$sum;$i++){
						$row=mysql_fetch_assoc($result);
				?>
                    <li>
                    <a href="product_show.php?product=<?=$row["ID"]?>">
                    	<img src="<?=$row["filepath"]?>" alt="点击显示更多">
						<span><?=$row["producttype"]?></span>
					</a>
					</li>
                <?php 
            		}  mysql_close($conn); 
                ?> 
			</ul>
		';
	}

	// 参考参数
	function uav_para(){
		echo 
		'
			<table class ="product-tab" cellspacing ="0">
			  <tr>
			    <th class ="tab-title" colspan ="7" scope ="col">大疆无人机推荐产品参数配置一览表</th>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">基本参数</th>
			    <td><a href ="xq-uav-sale.php?id=303" alt ="御"><img src ="images/yu.png"/></a></td>

			    <td><a href ="xq-uav-sale.php?id=303" alt ="精灵4PRO"><img src ="images/JL4PRO.png"/></a></td>

			    <td><a href ="xq-uav-sale.php?id=303" alt ="精灵4PRO+"><img src ="images/jl4pro2.png"/></a></td>

			    <td><a href ="xq-uav-sale.php?id=303" alt ="悟2"><img src ="images/wu2.png"/></a></td>

			    <td><a href ="xq-uav-sale.php?id=303" alt ="悟1" title><img src ="images/wu1.png"/></a></td>
			    
			    <td><a href ="xq-uav-sale.php?id=303" alt ="经纬M600PRO"><img src ="images/JWM600PRO.png"/></a></td>
			  </tr>
			  <tr>
			    <th scope="row" class="subtitle">机型名称</th>
			    <th class ="subtitle">御</th>
			    <th class ="subtitle">精灵4PRO</th>
			    <th class ="subtitle">精灵4PRO+</th>
			    <th class ="subtitle">悟2</th>
			    <th class ="subtitle">悟1</th>
			    <th class ="subtitle">经纬M600PRO</th>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">浆轴数</th>
			    <td>4</td>
			    <td>4</td>
			    <td>4</td>
			    <td>4</td>
			    <td>4</td>
			    <td>6</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">机重</th>
			    <td>743g</td>
			    <td>1388g</td>
			    <td>1388g</td>
			    <td>3629g</td>
			    <td>2935g</td>
			    <td>10kg</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">机型尺寸（厘米）</th>
			    <td>22*11*10</td>
			    <td>23*23</td>
			    <td>23*23</td>
			    <td>53*46*28</td>
			    <td>48*39*22</td>
			    <td>78*78*66</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">飞行高度</th>
			    <td>500米</td>
			    <td>800米</td>
			    <td>800米</td>
			    <td>800米</td>
			    <td>800米</td>
			    <td>800米</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">飞行距离</th>
			    <td>7公里</td>
			    <td>7公里</td>
			    <td>7公里</td>
			    <td>7公里</td>
			    <td>7公里</td>
			    <td >5公里</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">飞行时间（单电）</th>
			    <td>27分钟</td>
			    <td>30分钟</td>
			    <td>30分钟</td>
			    <td>28分钟</td>
			    <td>27分钟</td>
			    <td>58分钟</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">自带屏幕</th>
			    <td></td>
			    <td></td>
			    <td>有5.5寸</td>
			    <td>可有无5.5、7.85寸</td>
			    <td>可有无5.5、7.85寸</td>
			    <td>可有无5.5、7.85寸</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">联机设备</th>
			    <td>手机、平板等</td>
			    <td>手机、平板等</td>
			    <td>手机、平板等</td>
			    <td>手机、平板等</td>
			    <td>手机、平板等</td>
			    <td>手机、平板等</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">像素</th>
			    <td>1235万</td>
			    <td>2000万</td>
			    <td>2000万</td>
			    <td>X4S、X5S</td>
			    <td>X5、X5R</td>
			    <td>Z3、X5、X5R</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">自动壁障</th>
			    <td>前、下</td>
			    <td>前、后、左、右</td>
			    <td>前、后、左、右</td>
			    <td>前、下</td>
			    <td>前、下</td>
			    <td>前、后、左、右</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">自动返回</th>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">禁飞区识别</th>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			    <td>有</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">相机型号</th>
			    <td>自带</td>
			    <td>自带</td>
			    <td>自带</td>
			    <td>X4S、X5S 3999、12499元</td>
			    <td>X5、X5R 9999、17499元</td>
			    <td>Z3、X5、X5R 5999、9999、17500元</td>
			  </tr>
			  <tr class="price">
			    <th scope ="row" class ="subtitle">基本价格</th>
			    <td>6499-7999元</td>
			    <td>9999-12899元</td>
			    <td>11999-14899元</td>
			    <td>23998、29298-32498、37798元</td>
			    <td>22998、25898-30498、33398元</td>
			    <td>40097、45397、47797-57097、53097、64797元</td>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">适配</th>
			    <td>标配-套装</td>
			    <td>标配-套装</td>
			    <td>标配-套装</td>
			    <td>标配-套装</td>
			    <td>标配-套装</td>
			    <td>标配-套装</td>
			  </tr>
			  <tr>
			    <th colspan ="7" scope ="row" class ="subtitle">可选配件</th>
			  </tr>
			  <tr>
			    <th scope ="row" class ="subtitle">电池（块）</th>
			    <td>500元</td>
			    <td>1200元</td>
			    <td>1200元</td>
			    <td>1200元</td>
			    <td>1200元</td>
			    <td>1200元</td>
			  </tr>
			  <tr>
			    <th align ="center"scope ="row" class ="subtitle">螺旋桨（对）</th>
			    <td>49元</td>
			    <td>49元</td>
			    <td>49元</td>
			    <td>99元</td>
			    <td>99元</td>
			    <td>269元</td>
			  </tr>
			</table>
		';
	}

	// 商品详情
	// inspire
	function inspire(){
		$details = new ContentObj();

		$details->t1 = 'INSPIRE 1V2.0';
		$details->img_src = 'images/index/INSPIRE 1V2.0.jpg';
		$details->t2 = '详细价格请联系我们';
		$details->txt = '购买时请联系我们';
		// $details->img2 = '放商品详情页';
		$details->basicFrame();
	}	

	// 悟2
	function wu2(){
		$details = new ContentObj();

		$details->t1 = '悟2';
		$details->img_src = 'images/index/INSPIRE 2.jpg';
		$details->t2 = '基本价格23998、29298-32498、37798元';
		$details->txt = '购买时请联系我们';
		$details->basicFrame();

		$details->init();
		$details->t2 = '悟2';
		$details->img_src = 'images/index/INSPIRE 2_1.jpg';
		$details->basicFrame();
	}

	// 经纬m600
	function m600(){
		$details = new ContentObj();

		$details->t1 = '经纬 M600';
		$details->img_src = 'images/index/M600.jpg';
		$details->t2 = '基本价格40097、45397、47797-57097、53097、64797元';
		$details->txt = '购买时请联系我们';
		$details->basicFrame();
	}

	// 精灵4PRO
	function phantom4(){
		$details = new ContentObj();

		$details->t1 = '精灵4PRO';
		$details->img_src = 'images/index/Phantom 4.jpg';
		$details->t2 = '基本价格9999-12899元';
		$details->txt = '购买时请联系我们';
		$details->basicFrame();
	}

	// 御
	function yu(){
		$details = new ContentObj();

		$details->t1 = '御';
		$details->img_src = 'images/index/yu1.jpg';
		$details->t2 = '基本价格6499-7999元';
		$details->txt = '购买时请联系我们';
		$details->basicFrame();

		$details->init();
		$details->img_src = 'images/index/yu2.jpg';
		$details->basicFrame();

		$details->init();
		$details->img_src = 'images/index/yu3.jpg';
		$details->basicFrame();

		$details->init();
		$details->img_src = 'images/index/yu4.jpg';
		$details->basicFrame();

		$details->init();
		$details->img_src = 'images/index/yu5.jpg';
		$details->basicFrame();

		$details->init();
		$details->img_src = 'images/index/yu6.jpg';
		$details->basicFrame();
	}

	// 业绩案例
	// 工程服务业绩案例
	function eng_service(){
		$ach = new ContentObj();

		$ach->t1 = '1、晋江九十九溪河道整治工程';
		$ach->img_src = 'images/pro1.png';
		$ach->basicFrame();

		$ach->init();
		$ach->t1 = '2、厦门文教区排洪工程B标、C标及A标段续建工程';
		$ach->img_src = 'images/pro2.png';
		$ach->basicFrame();
	}

	// 无人机应用
	function uav_app(){
		$ach = new ContentObj();

		$ach->v_src = 'https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=y0390xcdjwr&auto=0';
		$ach->video();
	} 
	
	// 公司简介
	// 营业执照
	function business(){
		$comp = new ContentObj();

		$comp->img_src = 'images/business.jpg';
		$comp->basicFrame();
	}


	// 物资贸易设备
	// 1.特殊地面材料
	function ground(){
		$mat = new ContentObj();

		$mat->txt = '特殊地面材料 可根据客户需求寻找，定制并供货。';
		$mat->basicFrame();
	}

	// 2.止水
	function sealing_up(){
		$mat = new ContentObj();

		$mat->txt = '止水材料 可根据客户需求寻找，定制并供货。';
		$mat->basicFrame();
	}

	// 3.工程设备
	function eng_equ(){
		$mat = new ContentObj();

		$mat->txt = '工程设备 可根据客户需求寻找，定制并供货。';
		$mat->basicFrame();
	}

	// 4.其它材料
	function other_ma(){
		$mat = new ContentObj();

		$mat->txt = '供应无声破碎剂、围堰用吨袋、土工袋、岩石劈裂机等材料、设备，也可根据客户需求寻找、定制并供货。';
		$mat->basicFrame();
	}


	// 首页视频
	function index_video(){
		$index = new ContentObj();

		$index->v_src = 'https://imgcache.qq.com/tencentvideo_v1/playerv3/TPout.swf?max_age=86400&v=20161117&vid=y0390xcdjwr&auto=0';
		$index->v_w = '80%';
		$index->v_h = '70%';

		$index->video();
	}
?>