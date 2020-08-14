<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Kori;
use App\Product;
use Illuminate\Support\Facades\Auth;

class KoriController extends Controller
{
        public function __construct()
{
        $this->middleware('auth');
}
    public function show() {
        $id = Auth::id();
        #$kori = Kori::All()->where('user_id', '=', $id);
        #$qwe = $kori->get('products_id');
        #$results = Kori::with('asd')->get();
        #$tuote = Product::All();
        $kori = DB::table('ostoskori')
                      ->select('ostoskori.user_id','products.id','products.name','products.kuva','ostoskori.hinta','ostoskori.ykstotal','ostoskori.quantity')->join('products', 'ostoskori.products_id', '=', 'products.id')->where('ostoskori.user_id', '=', "$id")->get();
        return view('/kori')->with('kori', $kori);
    }
        public function show1() {
        $id = Auth::id();
        $kori = Kori::All()->where('user_id', '=', $id);
        #$kori
        $qwe = $kori->get('products_id');
        #$kori = Kori::with('asd')->get($qwe);
        #$kori = Product::where('id','product_id')->with('asd');
        #$Products = DB::table('products')
        #    ->select('id')
        #    ->where('id','=', $qwe)
         #   ->get();
        #$kori->get('ykstotal') = $kori->get('quantity') * $kori->get('quantity');
                  $kori = DB::table('ostoskori')
                      ->select('ostoskori.user_id','products.id','products.name','products.kuva','ostoskori.hinta','ostoskori.quantity')->join('products', 'ostoskori.products_id', '=', 'products.id')->where('ostoskori.user_id', '=', "$id")->get();

        return view('/kori1')->with('kori', $kori);
    }
        public function add($tuote_id){
        $id = Auth::id();
        $kori = DB::table('products')
            ->select('id')->where('id', '=', $tuote_id)->first();
        $hinta =  DB::table('products')
            ->select('hinta')
            ->Where('id', $tuote_id)
            ->value('hinta');
        #$quantity = $kori->where('products_id', '=', $tuote_id);
        DB::table('ostoskori')
    ->updateOrInsert(
        ['user_id' => $id, 'products_id' => $tuote_id, 'hinta' => $hinta],
        ['quantity' => DB::raw('quantity + 1'), 'ykstotal' => DB::raw('quantity * hinta')]
        
    );
            return $this->show();
            
}

}