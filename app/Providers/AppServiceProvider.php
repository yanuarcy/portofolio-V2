<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Education;
use App\Models\Experience;
use App\Models\FieldOfSkill;
use App\Models\Personal;
use App\Models\Project;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $user = User::first();
        $services = FieldOfSkill::all();
        $testimoni = Testimoni::all();
        $blogs = Blog::all();
        $clients = Client::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $portofolio = Project::with('fieldOfSkill')->latest()->get();

        view()->share([
            'user' => $user,
            'services' => $services,
            'blogs' => $blogs,
            'testimoni' => $testimoni,
            'clients' => $clients,
            'educations' => $educations,
            'experiences' => $experiences,
            'portofolio' => $portofolio
        ]);
    }
}
