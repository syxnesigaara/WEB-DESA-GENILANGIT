<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Content;
use App\Models\Destination;
use App\Models\Gallery;
use App\Models\Kepengurusan;
use App\Models\Kelembagaan;
use App\Models\Demografi;
class LandingController extends Controller
{
 
	
	public function home(){
		$news = News::limit(5)->get();
		$banner = Content::where('section', '=', 'top-banner')->first();
		$prestasi = Content::where('section', '=', 'prestasi')->first();
		$feature = Content::where('section', '=', 'feature')->get();

		return view('home',array(
			"news"=>$news,
			"banner"=>$banner,
			"prestasi"=>$prestasi,
			"feature"=>$feature,
			"withHeader"=>true
		));
	}
 
	public function berita(){
		$news = News::limit(5)->get();

		return view('berita',array(
			'news' => $news,
			"withHeader"=>false
		));
	}
 
	public function destinasi(){
		$destination = Destination::get();
		return view('destinasi',array(
			"destination" => $destination,
			"withHeader"=>true
		));
	}

    public function galery(){
		$gallery = Gallery::where('videos', '=', '-')->get();
		return view('galery', array(
			"gallery"=>$gallery,
			"withHeader"=>true
		));
	}

    public function profile(){
		$profile = Content::where('section', '=', 'profile')->first();
		return view('profile', array(
			"profile" => $profile,
			"withHeader"=>true
		));
	}

    public function visimisi(){
		$vm = Content::where('section', '=', 'visi&misi')->get();
		return view('visimisi', array(
			"vm" => $vm,
			"withHeader"=>true
		));
	}

	public function kepengurusan(){
		$kades = Kepengurusan::where('is_kades', '=', '1')->first();
		$kepengurusan = Kepengurusan::where('is_kades', '=', '0')->get();
		$organigram = Content::where('section', '=', 'organigram')->first();
		$kantor = Content::where('section', '=', 'kantor-desa')->first();

		return view('kepengurusan', array(
			"withHeader"=>true,
			"kades"=>$kades,
			"kepengurusan"=>$kepengurusan,
			"organigram"=>$organigram,
			"kantor"=>$kantor
		));
	}

	function kelembagaan(){
		$kelembagaan = Kelembagaan::get();
		return view('kelembagaan', array(
			"kelembagaan" => $kelembagaan,
			"withHeader"=>true
		));
	}

	function demografi(){
		return view('demografi', array(
			"withHeader"=>false
		));
	}


	function demografi_data($page){
		$demografi = Demografi::where("section","=",$page)->first();
		return view('demografi-data', array(
			"page"=>$page,
			"demografi" => $demografi,
			"withHeader"=>false
		));
	}

    
}




