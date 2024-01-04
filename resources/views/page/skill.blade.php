@extends('layout.app')

@section('content')
    <section class="bg-secondary">
        <div class="py-5" style="width: 80%; margin:0 10%">
            <h2 class="project-title text-white pl-2">Skills</h2>
            <div class="">
                <div class="tab_box">
                    <p class="tab_btn active">Frontend</p>
                    <p class="tab_btn pl-2">Backend</p>
                    <p class="tab_btn pl-2">Database</p>
                    <p class="tab_btn ">Virsion Control</p>
                    <div class="line"></div>
                </div>
                <div class="content_box">
                  <div class="content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mt-2 ">
                            <div class="rounded-lg skill-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/html.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">HTML</h4>
                            </div>
                            <div class="rounded-lg skill-tailwind-title py-2 text-center mt-4">
                                <img class="mx-auto" src={{ asset('assets/img/skills/tailwind.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Tailwind Css</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mt-2">
                            <div class="rounded-lg skill-css-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/css.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">CSS</h4>
                            </div>
                            <div class="rounded-lg skill-javascript-title py-2 text-center mt-4">
                                <img class="mx-auto" src={{ asset('assets/img/skills/javascript.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">JavaScript</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mt-2">
                            <div class="rounded-lg skill-bootstrap-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/bootstrap.jpg') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Bootstrap</h4>
                            </div>
                            <div class="rounded-lg skill-react-title py-2 text-center mt-4">
                                <img class="mx-auto" src={{ asset('assets/img/skills/react.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">React Js</h4>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-php-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/php.png') }} alt="" width="50"
                                    height="50">
                                <h5 class="text-white">PHP</h5>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-laravel-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/laravel.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Laravel</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-node-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/node.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Node Js</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12 mt-4">
                            <div class="rounded-lg skill-express-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/expressjs.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Express Js</h4>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-sql-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/sql.png') }} alt="" width="100"
                                    height="50">
                                <h4 class="text-white">MySql</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-mongo-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/mongoDb.png') }} alt="" width="100"
                                    height="50">
                                <h4 class="text-white">MongoDB</h4>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-git-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/git.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Git</h4>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-md-6 col-12">
                            <div class="rounded-lg skill-github-title py-2 text-center">
                                <img class="mx-auto" src={{ asset('assets/img/skills/github.png') }} alt="" width="50"
                                    height="50">
                                <h4 class="text-white">Github</h4>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.tab_btn');
            const allContent = document.querySelectorAll('.content');
            const line = document.querySelector('.line');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', (e) => {
                    // Toggle active class on tabs
                    tabs.forEach((t) => t.classList.remove('active'));
                    tab.classList.add('active');

                    // Move the line indicator
                    line.style.width = e.target.offsetWidth + 'px';
                    line.style.left = e.target.offsetLeft + 'px';

                    // Show/hide content based on clicked tab
                    allContent.forEach((content, contentIndex) => {
                        if (contentIndex === index) {
                            content.style.display = 'block';
                        } else {
                            content.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>

@endsection
