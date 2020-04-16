<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\merek as Brand;
use Illuminate\Support\Facades\Storage;
use App\Models\category as Category;
use Illuminate\Support\Facades\DB;
use Flash;
use Response;

class productController extends AppBaseController
{
    /** @var  productRepository */
    private $productRepository;

    public function __construct(productRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
       // $products = $this->productRepository->all();
        $products = DB::table('products')
        ->join('mereks', 'mereks.id', '=', 'products.brand')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'mereks.name','categories.category_name')
        ->whereNull('products.deleted_at')
        ->paginate(10);
        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new product.
     *
     * @return Response
     */
    public function create()
    {

        $category = Category::all();
        $merek = Brand::all();
        return view('products.create',['datacategory' => $category,'datamerek' => $merek]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param CreateproductRequest $request
     *
     * @return Response
     */
    public function store(CreateproductRequest $request)
    {
        $foto = $request->file('poto')->store('product_images');
        $input = array( 
            'product_name' => $request->product_name,
            'category' => $request->category,
            'brand' => $request->brand,
            'price' => $request->price,
            'stok' => $request->stok,
            'description' => $request->description,
            'poto' => $foto
        );
        $product = $this->productRepository->create($input);

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
       // $product = $this->productRepository->find($id);
        $product = DB::table('products')
        ->join('mereks', 'mereks.id', '=', 'products.brand')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'mereks.name','categories.category_name')
        ->where('products.id' ,'=',$id)
        ->first();
        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        $category = Category::all();
        $merek = Brand::all();
        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.edit',[
            'datacategory'=>$category, 
            'datamerek'=>$merek,
            'product'=>$product
        ]);
    }

    /**
     * Update the specified product in storage.
     *
     * @param int $id
     * @param UpdateproductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }
        $foto = $request->file('poto')->store('product_images');
        $exist = Storage::disk('local')->exists($product->poto);
        if (isset($product->poto) && $exist) {
            $delete = Storage::disk('local')->delete($product->poto);
        }
        $update = array( 
            'product_name' => $request->product_name,
            'category' => $request->category,
            'brand' => $request->brand,
            'price' => $request->price,
            'stok' => $request->stok,
            'description' => $request->description,
            'poto' => $foto
        );
        $product = $this->productRepository->update($update, $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);
        $delete = Storage::disk('local')->delete($product->poto);
        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
    public function getProduct(){
        $products = DB::table('products')
        ->join('mereks', 'mereks.id', '=', 'products.brand')
        ->join('categories', 'categories.id', '=', 'products.category')
        ->select('products.*', 'mereks.name','categories.category_name')
        ->whereNull('products.deleted_at')
        ->get();
        return $products;
    }
}
