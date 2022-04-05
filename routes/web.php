<?php

use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddFaqcomponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddPortfolioComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddTaskComponent;
use App\Http\Livewire\Admin\AdminAddTestimonialComponent;
use App\Http\Livewire\Admin\AdminArticleComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditFaqcomponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditPortfolioComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminEditTaskComponent;
use App\Http\Livewire\Admin\AdminEditTestimonialComponent;
use App\Http\Livewire\Admin\AdminFaqComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminNewsletterComponent;
use App\Http\Livewire\Admin\AdminPortfolioComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminTaskComponent;
use App\Http\Livewire\Admin\AdminTestimonialComponent;
use App\Http\Livewire\Admin\AdminViewTask;
use App\Http\Livewire\Admin\ArticleCreateComponent;
use App\Http\Livewire\Admin\ArticleEditComponent;
use App\Http\Livewire\ArticleComponent;
use App\Http\Livewire\Newsletter\Verification;
use App\Http\Livewire\PortFolioComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\Services\DesignServiceComponent;
use App\Http\Livewire\Services\DevServiceComponent;
use App\Http\Livewire\Services\HostingServiceComponent;
use App\Http\Livewire\Services\MarketingServiceComponent;
use App\Http\Livewire\Services\MusicServiceComponent;
use App\Http\Livewire\Services\WritingServiceComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\TOSComponent;
use App\Http\Livewire\ViewArticalsComponent;
use Illuminate\Support\Facades\Route;

//  URL::forceScheme('https');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeComponent::class);

Route::get('/services', ServicesComponent::class);

Route::get('/article/{slug}', ArticleComponent::class);
Route::get('/article', ViewArticalsComponent::class);

Route::get('/portfolio', PortFolioComponent::class);

Route::get('/privacy', PrivacyPolicyComponent::class);
Route::get('/tos', TOSComponent::class);

Route::get('/newsletter/verification/{verification_slug}',Verification::class)->name('newsletter.verification');

Route::get('/services/design', DesignServiceComponent::class);
Route::get('/services/development', DevServiceComponent::class);
Route::get('/services/hosting', HostingServiceComponent::class);
Route::get('/services/marketing', MarketingServiceComponent::class);
Route::get('/services/music', MusicServiceComponent::class);
Route::get('/services/writing', WritingServiceComponent::class);

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function(){
   Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');

   Route::get('/admin/portfolio', AdminPortfolioComponent::class)->name('admin.portfolios');
   Route::get('/admin/portfolio/add', AdminAddPortfolioComponent::class)->name('admin.addportfolio');
   Route::get('/admin/portfolio/edit/{portfolio_slug}', AdminEditPortfolioComponent::class)->name('admin.editportfolio');


   Route::get('/admin/article', AdminArticleComponent::class)->name('admin.articles');
   Route::get('/admin/article/create', ArticleCreateComponent::class)->name('admin.createarticle');
   Route::get('/admin/article/edit/{article_slug}', ArticleEditComponent::class)->name('admin.editarticle');

   Route::get('/admin/faq', AdminFaqComponent::class)->name('admin.faq');
   Route::get('/admin/faq/create', AdminAddFaqcomponent::class)->name('admin.addfaq');
   Route::get('/admin/faq/edit/{faq_slug}', AdminEditFaqcomponent::class)->name('admin.editfaq');

   Route::get('/admin/newsletter', AdminNewsletterComponent::class)->name('admin.newsletter');

   Route::get('/admin/contact', AdminContactComponent::class)->name('admin.contact');

   Route::get('/admin/tasks', AdminViewTask::class)->name('admin.task');
   Route::get('/admin/task', AdminTaskComponent::class)->name('admin.tasks');
   Route::get('/admin/task/add', AdminAddTaskComponent::class)->name('admin.addtask');
   Route::get('/admin/task/edit/{portfolio_slug}', AdminEditTaskComponent::class)->name('admin.edittask');


   Route::get('/admin/testimonial', AdminTestimonialComponent::class)->name('admin.testimonials');
   Route::get('/admin/testimonial/add', AdminAddTestimonialComponent::class)->name('admin.addtestimonial');
   Route::get('/admin/testimonial/edit/{testimonial_slug}', AdminEditTestimonialComponent::class)->name('admin.edittestimonial');

});
