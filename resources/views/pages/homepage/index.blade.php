@extends('layouts.master')
@section('content')
    <div class="l-contents">
        <div class="l-contents__main" style="">
            <div class="p-top" style="width: 744px;">
                <section class="p-top__box">
                    <div class="c-top-heading">
                        <h2 class="c-top-heading__title">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42.46 43.57"
                                style="enable-background:new 0 0 42.46 43.57;" xml:space="preserve" class="icon-seasonal-calender">
                                <rect x="9.42" y="1.17" class="st-cale-01" width="31.87" height="39.4"></rect>
                                <path class="st-cale-02" d="M33.56,37.51H1.69c3-7.38,5.73-36.35,5.73-36.35h31.87C39.29,1.17,37.08,30.63,33.56,37.51z"></path>
                                <g>
                                    <rect class="st-cale-04" x="7.29" y="1.17" width="32" height="6.31"></rect>
                                </g>
                                <g>
                                    <path class="st-cale-04"
                                        d="M15.93,27.94l0.14-0.78c2.18-0.1,2.37-0.34,2.64-1.85l1.33-7.61c0.19-1.07-0.18-1.16-1.02-1.26l-0.61-0.11l0.12-0.69 c1.65-0.19,3.53-0.61,4.85-1.05L21.5,25.31c-0.27,1.56-0.18,1.75,1.95,1.85l-0.14,0.78H15.93z">
                                    </path>
                                </g>
                                <g>
                                    <path class="st-cale-02" d="M13.42,43.57"></path>
                                </g>
                                <g>
                                    <path class="st-cale-02" d="M9.42,40.57"></path>
                                </g>
                            </svg>
                            旬の一週間レシピ
                        </h2>
                        <a href="https://oceans-nadia.com/pickup-recipes" class="c-readmore--02">旬のレシピ一覧へ</a>
                    </div>
                    <!--旬のレシピスライダー-->

                    <div class="p-top__slider">
                        <div class="swiper-container c-slider-seasonal swiper-container-initialized swiper-container-horizontal">

                            <ul class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-694px, 0px, 0px);">
                                <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>5分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>229</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/23188/recipe/424216">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/4d83d20593a179bbd098f21cc06cbf4c.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/4d/4d83d20593a179bbd098f21cc06cbf4c.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/4d/4d83d20593a179bbd098f21cc06cbf4c.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/23188">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/1053da7e4be655c352b314567c0cef0f.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/10/1053da7e4be655c352b314567c0cef0f.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/10/1053da7e4be655c352b314567c0cef0f.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="のりP (noripetit)" class="user-icon js-cancel-pointer-events" loading="lazy"> のりP (noripetit) </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">29</span><br>
                                                <span class="dow">mon</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/23188/recipe/424216">
                                                <h3 class="recipe-title">【オートミールレシピ】ほぼ5分！らくウマ豆腐キムチドリア</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>15分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>100</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/83829/recipe/426069">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/46263ff530a0726faaceb19673805cf2.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/46/46263ff530a0726faaceb19673805cf2.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/46/46263ff530a0726faaceb19673805cf2.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/83829">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/60435d7b7bcadb05944ebd40bc4a5028.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/60/60435d7b7bcadb05944ebd40bc4a5028.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/60/60435d7b7bcadb05944ebd40bc4a5028.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="奥山 まり" class="user-icon js-cancel-pointer-events" loading="lazy"> 奥山 まり </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">30</span><br>
                                                <span class="dow">tue</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/83829/recipe/426069">
                                                <h3 class="recipe-title">旨うまジューシー！『至福のタンドリーチキン』</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="6" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>52</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/617009/recipe/426008">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/7896681d0224beb9c8e7b6b9d92ea8eb.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/78/7896681d0224beb9c8e7b6b9d92ea8eb.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/78/7896681d0224beb9c8e7b6b9d92ea8eb.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/617009">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/0cf0945347e7f30b2661142e6a363d91.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/0c/0cf0945347e7f30b2661142e6a363d91.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/0c/0cf0945347e7f30b2661142e6a363d91.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="大西　麻子（さくら）" class="user-icon js-cancel-pointer-events" loading="lazy"> 大西　麻子（さくら） </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">1</span><br>
                                                <span class="dow">wed</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/617009/recipe/426008">
                                                <h3 class="recipe-title">シンプルな材料でこんなに美味しい！大根と牛肉のコリアンスープ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>355</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/279721/recipe/425341">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/73fbd308f5cbced079fd2b251f05eceb.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/73/73fbd308f5cbced079fd2b251f05eceb.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/73/73fbd308f5cbced079fd2b251f05eceb.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/279721">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/ed85d9af1850442d1260fa074cfd2c8a.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/ed/ed85d9af1850442d1260fa074cfd2c8a.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/ed/ed85d9af1850442d1260fa074cfd2c8a.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="るみ" class="user-icon js-cancel-pointer-events" loading="lazy"> るみ </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">25</span><br>
                                                <span class="dow">thu</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/279721/recipe/425341">
                                                <h3 class="recipe-title">癖になる！カリカリ豚こまのニラソースがけ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>5分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>262</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/349848/recipe/425634">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/8364cb288baa8d30c64cde70c01ead3a.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/83/8364cb288baa8d30c64cde70c01ead3a.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/83/8364cb288baa8d30c64cde70c01ead3a.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/349848">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/f53151cf3eb2.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/f5/f53151cf3eb2.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/f5/f53151cf3eb2.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="ホワイティ♡もも" class="user-icon js-cancel-pointer-events" loading="lazy"> ホワイティ♡もも </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">26</span><br>
                                                <span class="dow">fri</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/349848/recipe/425634">
                                                <h3 class="recipe-title">デパ地下風♪タコとセロリのマスタードマリネ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide" data-swiper-slide-index="2" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>45分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>343</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/579331/recipe/425824">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/b133d3663e61ff6593de91b16d4c7c73.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/b1/b133d3663e61ff6593de91b16d4c7c73.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/b1/b133d3663e61ff6593de91b16d4c7c73.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/579331">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/a2553f693259f90d76ad082e1f7778aa.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/a2/a2553f693259f90d76ad082e1f7778aa.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/a2/a2553f693259f90d76ad082e1f7778aa.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="ケイ" class="user-icon js-cancel-pointer-events" loading="lazy"> ケイ </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">27</span><br>
                                                <span class="dow">sat</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/579331/recipe/425824">
                                                <h3 class="recipe-title">作りやすい材料で♪バスクチーズケーキ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide" data-swiper-slide-index="3" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>578</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/320681/recipe/425684">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/fc597bee36fb9dcdc3928c2a224cd983.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/fc/fc597bee36fb9dcdc3928c2a224cd983.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/fc/fc597bee36fb9dcdc3928c2a224cd983.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/320681">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/703f214bc6e85fc7fce1a5db29601f59.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/70/703f214bc6e85fc7fce1a5db29601f59.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/70/703f214bc6e85fc7fce1a5db29601f59.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="あみん" class="user-icon js-cancel-pointer-events" loading="lazy"> あみん </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">28</span><br>
                                                <span class="dow">sun</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/320681/recipe/425684">
                                                <h3 class="recipe-title">サクプリ食感♪エビとはんぺんの大葉包み揚げ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide" data-swiper-slide-index="4" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>5分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>229</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/23188/recipe/424216">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/4d83d20593a179bbd098f21cc06cbf4c.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/4d/4d83d20593a179bbd098f21cc06cbf4c.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/4d/4d83d20593a179bbd098f21cc06cbf4c.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/23188">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/1053da7e4be655c352b314567c0cef0f.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/10/1053da7e4be655c352b314567c0cef0f.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/10/1053da7e4be655c352b314567c0cef0f.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="のりP (noripetit)" class="user-icon js-cancel-pointer-events" loading="lazy"> のりP (noripetit) </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">29</span><br>
                                                <span class="dow">mon</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/23188/recipe/424216">
                                                <h3 class="recipe-title">【オートミールレシピ】ほぼ5分！らくウマ豆腐キムチドリア</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide" data-swiper-slide-index="5" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>15分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>100</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/83829/recipe/426069">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/46263ff530a0726faaceb19673805cf2.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/46/46263ff530a0726faaceb19673805cf2.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/46/46263ff530a0726faaceb19673805cf2.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/83829">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/60435d7b7bcadb05944ebd40bc4a5028.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/60/60435d7b7bcadb05944ebd40bc4a5028.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/60/60435d7b7bcadb05944ebd40bc4a5028.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="奥山 まり" class="user-icon js-cancel-pointer-events" loading="lazy"> 奥山 まり </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">30</span><br>
                                                <span class="dow">tue</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/83829/recipe/426069">
                                                <h3 class="recipe-title">旨うまジューシー！『至福のタンドリーチキン』</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="6" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>52</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/617009/recipe/426008">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/7896681d0224beb9c8e7b6b9d92ea8eb.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/78/7896681d0224beb9c8e7b6b9d92ea8eb.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/78/7896681d0224beb9c8e7b6b9d92ea8eb.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/617009">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/0cf0945347e7f30b2661142e6a363d91.jpg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/0c/0cf0945347e7f30b2661142e6a363d91.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/0c/0cf0945347e7f30b2661142e6a363d91.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="大西　麻子（さくら）" class="user-icon js-cancel-pointer-events" loading="lazy"> 大西　麻子（さくら） </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">1</span><br>
                                                <span class="dow">wed</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/617009/recipe/426008">
                                                <h3 class="recipe-title">シンプルな材料でこんなに美味しい！大根と牛肉のコリアンスープ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0"
                                    style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>355</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/279721/recipe/425341">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/73fbd308f5cbced079fd2b251f05eceb.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/73/73fbd308f5cbced079fd2b251f05eceb.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/73/73fbd308f5cbced079fd2b251f05eceb.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/279721">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/ed85d9af1850442d1260fa074cfd2c8a.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/ed/ed85d9af1850442d1260fa074cfd2c8a.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/ed/ed85d9af1850442d1260fa074cfd2c8a.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="るみ" class="user-icon js-cancel-pointer-events" loading="lazy"> るみ </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">25</span><br>
                                                <span class="dow">thu</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/279721/recipe/425341">
                                                <h3 class="recipe-title">癖になる！カリカリ豚こまのニラソースがけ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>5分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>262</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/349848/recipe/425634">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/8364cb288baa8d30c64cde70c01ead3a.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/83/8364cb288baa8d30c64cde70c01ead3a.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/83/8364cb288baa8d30c64cde70c01ead3a.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/349848">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/f53151cf3eb2.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/f5/f53151cf3eb2.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/f5/f53151cf3eb2.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="ホワイティ♡もも" class="user-icon js-cancel-pointer-events" loading="lazy"> ホワイティ♡もも </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">26</span><br>
                                                <span class="dow">fri</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/349848/recipe/425634">
                                                <h3 class="recipe-title">デパ地下風♪タコとセロリのマスタードマリネ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 221.333px; margin-right: 10px;">
                                    <div class="c-slider-seasonal__image">
                                        <div class="c-slider-seasonal__st">
                                            <span class="recipe-time"><i class="icon-timer"></i>45分</span>
                                            <span class="recipe-favorite"><i class="icon-heart"></i>343</span>
                                        </div>
                                        <a class="recipe-image" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/579331/recipe/425824">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/b133d3663e61ff6593de91b16d4c7c73.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/b1/b133d3663e61ff6593de91b16d4c7c73.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/b1/b133d3663e61ff6593de91b16d4c7c73.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                                height="auto" width="300" loading="lazy" class="js-cancel-pointer-events"> </a>
                                        <a class="user-name" href="https://oceans-nadia.com/user/579331">
                                            <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/a2553f693259f90d76ad082e1f7778aa.jpeg"
                                                srcset="https://asset.oceans-nadia.com/upload/save_image/a2/a2553f693259f90d76ad082e1f7778aa.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/a2/a2553f693259f90d76ad082e1f7778aa.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                                width="26" height="26" alt="ケイ" class="user-icon js-cancel-pointer-events" loading="lazy"> ケイ </a>
                                    </div>
                                    <div class="c-slider-seasonal__cont">
                                        <div class="recipe-week">
                                            <p>
                                                <span class="day">27</span><br>
                                                <span class="dow">sat</span>
                                            </p>
                                        </div>

                                        <div class="c-slider-seasonal__info">
                                            <a class="recipe-title" data-tracking-element="top-seasonal-recipe" href="https://oceans-nadia.com/user/579331/recipe/425824">
                                                <h3 class="recipe-title">作りやすい材料で♪バスクチーズケーキ</h3>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="swiper-button-next swiper-button-next--seasonal" tabindex="0" role="button" aria-label="Next slide"><i class="icon-angle-right"></i></div>
                        <div class="swiper-button-prev swiper-button-prev--seasonal" tabindex="0" role="button" aria-label="Previous slide"><i class="icon-angle-right"></i></div>
                        <div class="swiper-pagination swiper-pagination--seasonal swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                                class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 7"></span></div>
                    </div>
                </section>

                <section class="p-top__box">

                    <!--新着レシピ一覧ー-->
                    <div class="c-top-heading">
                        <h2 class="c-top-heading__title">新着レシピ</h2>
                        <a href="https://oceans-nadia.com/recipe/new" class="c-readmore">新着レシピ一覧へ</a>
                    </div>
                    <ul class="c-top-list--recipe">
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/394843/recipe/426566">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/9fcfc318074f0eacb0a297f7dc0e6bdb.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/9f/9fcfc318074f0eacb0a297f7dc0e6bdb.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/9f/9fcfc318074f0eacb0a297f7dc0e6bdb.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/394843">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/1a7565aed4bebf75a1b8c70dabda3662.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/1a/1a7565aed4bebf75a1b8c70dabda3662.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/1a/1a7565aed4bebf75a1b8c70dabda3662.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="パパイズム" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> パパイズム </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>20分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/394843/recipe/426566">
                                    <h3>
                                        たっぷり野菜の濃厚チーズトマトソースパスタ </h3>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/394843/recipe/426541">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/d174bebb5f65c8472f4407f1c352809b.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/d1/d174bebb5f65c8472f4407f1c352809b.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/d1/d174bebb5f65c8472f4407f1c352809b.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/394843">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/1a7565aed4bebf75a1b8c70dabda3662.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/1a/1a7565aed4bebf75a1b8c70dabda3662.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/1a/1a7565aed4bebf75a1b8c70dabda3662.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="パパイズム" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> パパイズム </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>20分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/394843/recipe/426541">
                                    <h3>
                                        やわらか鶏もも肉とレンコンの梅塩昆布ソテー </h3>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/236306/recipe/423916">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/57847a813790c5d8b6ca2241463df03a.jpeg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/57/57847a813790c5d8b6ca2241463df03a.jpeg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/57/57847a813790c5d8b6ca2241463df03a.jpeg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/236306">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/7fb0712c81fe05720b6f13cd1bd00f4c.jpeg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/7f/7fb0712c81fe05720b6f13cd1bd00f4c.jpeg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/7f/7fb0712c81fe05720b6f13cd1bd00f4c.jpeg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="RINATY（りなてぃ）" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> RINATY（りなてぃ） </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>15分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/236306/recipe/423916">
                                    <h3>
                                        絶品！『豚肉とレタスとかぼすのパスタ～ごま醤油ガーリック～』 </h3>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/298796/recipe/423499">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/610b7b7ce1de5d0170e8df00ce3bb874.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/61/610b7b7ce1de5d0170e8df00ce3bb874.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/61/610b7b7ce1de5d0170e8df00ce3bb874.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/298796">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/26f5322ef99311862c372506fdff0311.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/26/26f5322ef99311862c372506fdff0311.jpg?impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/26/26f5322ef99311862c372506fdff0311.jpg?impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="あーちゃん" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> あーちゃん </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/298796/recipe/423499">
                                    <h3>
                                        甘辛が最高♪ レンジで鶏すき煮 </h3>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/57421/recipe/425968">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/bffd76d9c1d57b4c46d33cf800dff3b0.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/bf/bffd76d9c1d57b4c46d33cf800dff3b0.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/bf/bffd76d9c1d57b4c46d33cf800dff3b0.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/57421">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/58330b8179cd.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/58/58330b8179cd.jpg?_t=1544056678&amp;impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/58/58330b8179cd.jpg?_t=1544056678&amp;impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="Akiyama Keiko" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> Akiyama Keiko </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/57421/recipe/425968">
                                    <h3>
                                        簡単ヘルシー！オートミールチーズリゾット </h3>
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="c-top-list--recipe__img-wrap">
                                <a href="https://oceans-nadia.com/user/57421/recipe/425365">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/2c8ad35db4b3999eef80d4a87c7079b0.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/2c/2c8ad35db4b3999eef80d4a87c7079b0.jpg?impolicy=cropwm&amp;w=300&amp;h=400 1x,https://asset.oceans-nadia.com/upload/save_image/2c/2c8ad35db4b3999eef80d4a87c7079b0.jpg?impolicy=cropwm&amp;w=600&amp;h=800 2x"
                                        class="recipe-image js-cancel-pointer-events" height="auto" width="300" loading="lazy"> </a>
                                <a class="c-top-list--recipe__user-name" href="https://oceans-nadia.com/user/57421">
                                    <img src="./レシピサイト Nadia _ ナディア - プロの料理家のおいしいレシピ_files/58330b8179cd.jpg"
                                        srcset="https://asset.oceans-nadia.com/upload/save_image/58/58330b8179cd.jpg?_t=1544056678&amp;impolicy=cropwm&amp;w=52&amp;h=52 1x,https://asset.oceans-nadia.com/upload/save_image/58/58330b8179cd.jpg?_t=1544056678&amp;impolicy=cropwm&amp;w=104&amp;h=104 2x"
                                        alt="Akiyama Keiko" class="user-icon js-cancel-pointer-events" width="52" height="52" loading="lazy"> Akiyama Keiko </a>
                            </div>
                            <div class="c-top-list--recipe__cont">

                                <div class="inner">
                                    <span class="time-stamp">2021年11月25日</span><span class="recipe-time"><i class="icon-timer"></i>10分</span>
                                </div>


                                <a class="recipe-title" href="https://oceans-nadia.com/user/57421/recipe/425365">
                                    <h3>
                                        オートミールチーズリゾット弁当inスープジャー </h3>
                                </a>

                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="l-contents__right">
            <div class="c-side-block">
                <div class="inner">
                    <p class="c-side-block__tit--nobd">最近レシピが増えたArtist
                        <a href="/ranking?ranking_type=D#PostRank" class="c-side-block__more">一覧へ</a>
                    </p>
                    <ul class="c-ranking--artist">
                        <li>
                            <a href="/user/230316">
                                <span class="c-ranking__icon">1</span>
                                <img src="https://asset.oceans-nadia.com/upload/save_image/2d/2d060fee45b1a08fa6dffcd2a41e112c.jpeg?impolicy=cropwm&amp;w=1000&amp;h=1000"
                                    srcset="https://asset.oceans-nadia.com/upload/save_image/2d/2d060fee45b1a08fa6dffcd2a41e112c.jpeg?impolicy=cropwm&amp;w=1000&amp;h=1000 1x,https://asset.oceans-nadia.com/upload/save_image/2d/2d060fee45b1a08fa6dffcd2a41e112c.jpeg?impolicy=cropwm&amp;w=2000&amp;h=2000 2x"
                                    height="auto" alt="おねこ" class="artist-photo js-cancel-pointer-events" width="1000" loading="lazy">
                                <p class="artist-name">おねこ</p>
                            </a>
                        </li>
                        <li>
                            <a href="/user/45109">
                                <span class="c-ranking__icon">2</span>
                                <img src="https://asset.oceans-nadia.com/upload/save_image/8b/8bf3412d5eff7da8d0ac044b2f09a914.jpeg?impolicy=cropwm&amp;w=1000&amp;h=1000"
                                    srcset="https://asset.oceans-nadia.com/upload/save_image/8b/8bf3412d5eff7da8d0ac044b2f09a914.jpeg?impolicy=cropwm&amp;w=1000&amp;h=1000 1x,https://asset.oceans-nadia.com/upload/save_image/8b/8bf3412d5eff7da8d0ac044b2f09a914.jpeg?impolicy=cropwm&amp;w=2000&amp;h=2000 2x"
                                    height="auto" alt="松山絵美" class="artist-photo js-cancel-pointer-events" width="1000" loading="lazy">
                                <p class="artist-name">松山絵美</p>
                            </a>
                        </li>
                        <li>
                            <a href="/user/87331">
                                <span class="c-ranking__icon">3</span>
                                <img src="https://asset.oceans-nadia.com/upload/save_image/1e/1e6a4924fbbb2178c6c969d2bea3a7e5.jpg?impolicy=cropwm&amp;w=1000&amp;h=1000"
                                    srcset="https://asset.oceans-nadia.com/upload/save_image/1e/1e6a4924fbbb2178c6c969d2bea3a7e5.jpg?impolicy=cropwm&amp;w=1000&amp;h=1000 1x,https://asset.oceans-nadia.com/upload/save_image/1e/1e6a4924fbbb2178c6c969d2bea3a7e5.jpg?impolicy=cropwm&amp;w=2000&amp;h=2000 2x"
                                    height="auto" alt="だんどり" class="artist-photo js-cancel-pointer-events" width="1000" loading="lazy">
                                <p class="artist-name">だんどり</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
