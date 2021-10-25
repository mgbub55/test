<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
	return view('frontend.index');
});

// url: frontend.en.commercial.asset-management-and-trust
Route::name('frontend.en.commercial')->prefix('frontend/en/commercial')->group(function () {
	Route::get('/', function () {
		return view('frontend.en.commercial.index');
	})->name('');
	Route::name('.asset')->prefix('/asset')->group(function () {
		Route::get('/business', function () {
			return view('frontend.en.commercial.asset-management-and-trust.business-planning-and-investing.index');
		})->name('.business');
		Route::get('/business/trust', function () {
			return view('frontend.en.commercial.asset-management-and-trust.business-trust-services.index');
		})->name('.business.trust');
		Route::get('/business/employee', function () {
			return view('frontend.en.commercial.asset-management-and-trust.employee-benefits.index');
		})->name('.business.employee');
		Route::get('/business/first', function () {
			return view('frontend.en.commercial.asset-management-and-trust.first-premier-at-work.index');
		})->name('.business.first');
		Route::get('/group', function () {
			return view('frontend.en.commercial.asset-management-and-trust.group-retirement-plans.index');
		})->name('.group');
		Route::get('/', function () {
			return view('frontend.en.commercial.asset-management-and-trust.index');
		})->name('');
	});
	// url: frontend.en.commercial.business-checking
	Route::name('.business')->prefix('/business')->group(function () {
		Route::get('/', function () {
			return view('frontend.en.commercial.business-checking.index');
		})->name('');
		Route::get('/debit', function () {
			return view('frontend.en.commercial.business-checking.business-debit-mastercard.index');
		})->name('.debit');
		Route::get('/high', function () {
			return view('frontend.en.commercial.business-checking.high-volume-plus-earnings-credit.index');
		})->name('.high');
		Route::get('/high/volume', function () {
			return view('frontend.en.commercial.business-checking.high-volume-plus-interest.index');
		})->name('.high.volume');
		Route::get('/low', function () {
			return view('frontend.en.commercial.business-checking.low-volume.index');
		})->name('.low');
		Route::get('/low/volume', function () {
			return view('frontend.en.commercial.business-checking.low-volume-plus-interest.index');
		})->name('.low.volume');
		Route::get('/overdraft', function () {
			return view('frontend.en.commercial.business-checking.overdraft-protection.index');
		})->name('.overdraft');
	});

	Route::name('.financial')->prefix('/financial')->group(function () {
		Route::get('/', function () {
			return view('frontend.en.commercial.financing.index');
		})->name('');
		Route::get('/atm', function () {
			return view('frontend.en.commercial.financing.atm-vault-cash-solutions.index');
		})->name('.atm');
		Route::get('/business/debit', function () {
			return view('frontend.en.commercial.financing.business-debit-mastercard.index');
		})->name('.business.debit');
		Route::get('/business', function () {
			return view('frontend.en.commercial.financing.business-lines-of-credit.index');
		})->name('.business');
		Route::get('/commercial', function () {
			return view('frontend.en.commercial.financing.commercial-lending.index');
		})->name('.commercial');
		Route::get('/commercial-real-estate', function () {
			return view('frontend.en.commercial.financing.commercial-real-estate.index');
		})->name('.commercial.real');
	});

	Route::name('.savings')->prefix('/savings')->group(function () {
		Route::get('/', function () {
			return view('frontend.en.commercial.savings-and-cds.index');
		})->name('');
		Route::get('/certificate', function () {
			return view('frontend.en.commercial.savings-and-cds.certificate-of-deposit.index');
		})->name('.certificate');
		Route::get('/premier', function () {
			return view('frontend.en.commercial.savings-and-cds.premier-money-market.index');
		})->name('.premier');
		Route::get('/traditional', function () {
			return view('frontend.en.commercial.savings-and-cds.traditional-savings.index');
		})->name('.traditional');
	});

	Route::name('.treasury')->prefix('/treasury')->group(function () {
		Route::get('/', function () {
			return view('frontend.en.commercial.treasury-services.index');
		})->name('');
		Route::name('.cash')->prefix('/cash')->group(function () {
			Route::get('/bill', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.bill-pay.index');
			})->name('.bill');
			Route::get('/business', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.business-online-banking.index');
			})->name('.business');
			Route::get('/estatements', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.estatements.index');
			})->name('.estatements');
			Route::get('/mobile', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.mobile-banking.index');
			})->name('.mobile');
			Route::get('/security', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.security-and-fraud-protection.index');
			})->name('.security');
			Route::get('/mobile-wallet', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.mobile-wallet.index');
			})->name('.mobile-wallet');
			Route::get('/reporting', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.reporting-and-analytics.index');
			})->name('.reporting');
			Route::get('/', function () {
				return view('frontend.en.commercial.treasury-services.cash-management.index');
			})->name('');
		});
		Route::get('/manage-payables', function () {
			return view('frontend.en.commercial.treasury-services.manage-payables-and-payroll.index');
		})->name('.manage-payables');
		Route::name('.manage')->prefix('/manage')->group(function () {
			Route::get('/ach-services', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.ach-services.index');
			})->name('.ach');
			Route::get('/centralized', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.centralized-returns.index');
			})->name('.cecntralized');
			Route::get('/check', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.check-image-clearing.index');
			})->name('.check');
			Route::get('/lockbox', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.lockbox-services.index');
			})->name('.lockbox');
			Route::get('/merchant', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.merchant-card-services.index');
			})->name('.merchant');
			Route::get('/positive-pay', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.positive-pay.index');
			})->name('.positive-pay');
			Route::get('/remote', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.remote-deposit.index');
			})->name('.remote');
			Route::get('/virtual', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.virtual-account-management.index');
			})->name('.virtual');
			Route::get('/', function () {
				return view('frontend.en.commercial.treasury-services.manage-receivables.index');
			})->name('');
		});
	});
});

//pages
Route::name('frontend.en.pages')->prefix('frontend/en/pages')->group(function () {
	Route::name('.about')->prefix('/about')->group(function () {
		Route::get('/about-first', function () {
			return view('frontend.en.pages.about-us.about-first-premier-bank.index');
		})->name('.about-first');
		Route::get('/about-premier', function () {
			return view('frontend.en.pages.about-us.about-premier-bankcard.index');
		})->name('.about-premier');
		//careers
		Route::name('.careers')->prefix('/careers')->group(function () {
			Route::get('/best-bank', function () {
				return view('frontend.en.pages.about-us.careers.best-bank-to-work-for.index');
			})->name('.best-bank');
			Route::get('/internships', function () {
				return view('frontend.en.pages.about-us.careers.internships.index');
			})->name('.internships');
			Route::get('/our-benefits', function () {
				return view('frontend.en.pages.about-us.careers.our-benefits.index');
			})->name('.our-benefits');
			Route::get('/our-culture', function () {
				return view('frontend.en.pages.about-us.careers.our-culture.index');
			})->name('.our-culture');
			Route::get('/', function () {
				return view('frontend.en.pages.about-us.careers.index');
			})->name('');
		});
		//community
		Route::name('.community')->prefix('/community')->group(function () {
			Route::name('.community')->prefix('/careers')->group(function () {
				Route::get('/jacks', function () {
					return view('frontend.en.pages.about-us.community.celebration.jacks-bash.index');
				})->name('.jacks');
				Route::get('/premier', function () {
					return view('frontend.en.pages.about-us.community.celebration.premier-surprise-party.index');
				})->name('.premier');
				Route::get('/celebration', function () {
					return view('frontend.en.pages.about-us.community.celebration.index');
				})->name('celebration');
			});
			Route::get('/internships', function () {
				return view('frontend.en.pages.about-us.careers.internships.index');
			})->name('.internships');
			Route::get('/our-benefits', function () {
				return view('frontend.en.pages.about-us.careers.our-benefits.index');
			})->name('.our-benefits');
			Route::get('/our-culture', function () {
				return view('frontend.en.pages.about-us.careers.our-culture.index');
			})->name('.our-culture');
			Route::get('/', function () {
				return view('frontend.en.pages.about-us.careers.index');
			})->name('');
		});
	});
});


// PERSONAL
//  /** PERSONAL CHECkING*/
        Route::name('frontend.en.personal.personal-checking')->prefix('frontend/en/personal/personal-checking')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.personal-checking.index');
            })->name('');
            // Route::name('.personal')->prefix('/personal')->group(function () {
                // Route::get('/free/checking', function () {
                //     return view('frontend.en.personal.personal-checking.free-plus-checking.index');
                // })->name('.free.checking');
                // Route::get('/business/trust', function () {
                //     return view('frontend.en.commercial.asset-management-and-trust.business-trust-services.index');
                // })->name('.business.trust');
                // Route::get('/business/employee', function () {
                //     return view('frontend.en.commercial.asset-management-and-trust.employee-benefits.index');
                // })->name('.business.employee');
                // Route::get('/business/first', function () {
                //     return view('frontend.en.commercial.asset-management-and-trust.first-premier-at-work.index');
                // })->name('.business.first');
                // Route::get('/group', function () {
                //     return view('frontend.en.commercial.asset-management-and-trust.group-retirement-plans.index');
                // })->name('.group');
                // Route::get('/', function () {
                //     return view('frontend.en.commercial.asset-management-and-trust.index');
                // })->name('');
            // });

        });


        // ONline and Mobile
        Route::name('frontend.en.personal.online-and-mobile')->prefix('frontend/en/personal/online-and-mobile')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.online-and-mobile.index');
            })->name('');
        });



        // Savings & CDs
        Route::name('frontend.en.personal.savings-and-cds')->prefix('frontend/en/personal/savings-and-cds')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.savings-and-cds.index');
            })->name('');
        });

        // Loans and Credit Lines
        Route::name('frontend.en.personal.loans-and-credit-lines')->prefix('frontend/en/personal/loans-and-credit-lines')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.loans-and-credit-lines.index');
            })->name('');
        });

         // Mortages
         Route::name('frontend.en.personal.mortgages')->prefix('frontend/en/personal/mortgages')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.mortgages.index');
            })->name('');
        });

         // Investing
         Route::name('frontend.en.personal.investing')->prefix('frontend/en/personal/investing')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.investing.index');
            })->name('');
        });

        // Wealth Management
        Route::name('frontend.en.personal.wealth-management')->prefix('frontend/en/personal/wealth-management')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.wealth-management.index');
            })->name('');
        });

        // Student & Parents
        Route::name('frontend.en.personal.students-and-parents')->prefix('frontend/en/personal/students-and-parents')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.personal.students-and-parents.index');
            })->name('');
        });

        // navbar routes
        Route::name('frontend.en')->prefix('frontend/en')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.index');
            })->name('');
        });

        Route::name('frontend')->prefix('frontend')->group(function () {
            Route::get('/', function () {
                return view('frontend.index');
            });
        });

        Route::name('frontend.en.small-business')->prefix('frontend/en/small-business')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.small-business.index');
            });
        });

        Route::name('frontend.en.pages.quick-links.locations')->prefix('frontend/en/pages/quick-links/locations')->group(function () {
            Route::get('/', function () {
                return view('frontend.en.pages.quick-links.locations.index');
            });
        });


        





// // {{route('frontend.en.pages.about.about-first')}}
// // {{route('frontend.en.pages.about.community')}}

// resources/views/frontend/en/pages/about-us/community/collegiate-support/beacom-institute-of-technology/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/beacom-school-of-business/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/dana-j.-dykhouse-stadium/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/scholarship-and-internships/build-dakota-scholarship/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/scholarship-and-internships/horatio-alger---denny-sanford-scholarship/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/scholarship-and-internships/scholarship-winners/index.html
// resources/views/frontend/en/pages/about-us/community/collegiate-support/index.html
