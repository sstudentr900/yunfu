<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    //
    // Schema::defaultStringLength(191);
    // Schema::defaultCharset('utf8mb4');
    // Schema::defaultCollation('utf8mb4_unicode_ci');
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void {}
}
