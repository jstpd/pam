<?php

namespace App\Providers;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Leeto\MoonShine\MoonShine;
use Leeto\MoonShine\Menu\MenuGroup;


// MoonShine
use Leeto\MoonShine\Resources\MoonShineUserResource; 
use Leeto\MoonShine\Resources\MoonShineUserRoleResource; 
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\NavigationResource;
use App\MoonShine\Resources\PartnerResource;
use App\MoonShine\Resources\ArticleResource;
use App\MoonShine\Resources\FaqResource;
use App\MoonShine\Resources\BrandResource;
use App\MoonShine\Resources\CatalogResource;

// Menu
use Illuminate\Support\Facades\View;
use App\Models\Navigation;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        /* Blade::directive('svg', function($arguments) {
            // Funky madness to accept multiple arguments into the directive
            list($path, $class) = array_pad(explode(',', trim($arguments, "() ")), 2, '');
            $path = 'assets/svg/'.trim($path, "' ");
            $class = trim($class, "' ");
            // Create the dom document as per the other answers
            $svg = new \DOMDocument();
            $svg->load(public_path($path));
            $svg->documentElement->setAttribute("class", $class);
            $output = $svg->saveXML($svg->documentElement);
            return $output;
        }); */

        // Model::preventLazyLoading(!app()->isProduction());
        app(MoonShine::class)->registerResources([
            MenuGroup::make('Система', [
                MoonShineUserResource::class,  // Системный раздел с администраторами
                MoonShineUserRoleResource::class, // Системный раздел с ролями администраторов
            ])->icon('app'),
            UserResource::class,
            NavigationResource::class,
            PartnerResource::class,
            ArticleResource::class,
            FaqResource::class,
            BrandResource::class,
            CatalogResource::class
        ]);
        
        // Menu
        View::share('navigation', Navigation::orderBy('ordering')->get());
    }
}
