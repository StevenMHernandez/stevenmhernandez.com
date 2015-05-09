<?php namespace App\Http\Controllers;

use App\Portfolio;
use App\Project;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PortfolioController extends BaseController
{
    public function index()
    {
        $portfolios = Portfolio::orderBy('created_at', 'DESC')->get();
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.portfolio.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:portfolios',
            'summary' => 'required',
        ]);
        $portfolio = new Portfolio(Input::all());
        $portfolio->save();
        $portfolio->projects()->sync($this->buildSyncArray(Input::get('projects')));
        return redirect()->route('admin.portfolio.index');
    }

    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', '=', $slug)->with('projects')->first();
        if(!$portfolio) {
            abort(404);
        }
        return view('site.portfolio.show', compact('portfolio'));
    }

    public function edit($id)
    {
        $portfolio = Portfolio::where('id', '=', $id)->with('projects')->first();
        $projects = Project::orderBy('created_at', 'DESC')->get();
        return view('admin.portfolio.edit', compact('portfolio', 'projects'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'summary' => 'required',
        ]);
        $portfolio = Portfolio::find($id);
        $portfolio->update(Input::all());
        $portfolio->projects()->sync($this->buildSyncArray(Input::get('projects')));
        return redirect()->route('admin.portfolio.index');
    }

    public function destroy($id)
    {
        Portfolio::find($id)->delete();
        return redirect()->route('admin.portfolio.index');
    }

    public function home()
    {
        $portfolio = Portfolio::with('projects')->find(env('DEFAULT_PORTFOLIO_ID'));
        return view('site.portfolio.show', compact('portfolio'));
    }

    private function buildSyncArray($array)
    {
        $new_array = [];
        if($array[0]) {
            foreach ($array as $key => $value) {
                $new_array[$value] = ['sort_order' => $key];
            }
        }
        return $new_array;
    }
}
