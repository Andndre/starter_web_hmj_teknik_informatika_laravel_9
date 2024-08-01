<!-- Footer Start-->
<footer id="footer" class="pt-lg-10 pt-5 footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="mb-4 mt-4 row justify-content-center">
                    <div class="col-6 text-end">
                        <a href="https://undiksha.ac.id/" aria-label="Website Undiksha">
                            <img src="{{ asset('assets/images/logo/undiksha-512.webp') }}" alt="Logo Undiksha"
                                style="height: 76px;" loading="lazy"/>
                        </a>
                    </div>
                    <div class="col-6 text-start">
                        <a href="https://hmjtiundiksha.com" aria-label="Website HMJ TI">
                            <img src="{{ asset('assets/images/logo/hmj-ti-512.webp') }}" alt="Logo HMJ TI"
                                style="height: 80px;" loading="lazy" />
                        </a>
                    </div>
                </div>
                <div class="mb-4 mt-4 row">
                    <div class="col-4 text-end">
                        <a href="https://web.facebook.com/hmj.ti.undiksha/?_rdc=1&_rdr" aria-label="Facebook HMJ TI"
                            class="mdi mdi-facebook text-muted fs-2"></a>
                    </div>

                    <div class="col-4 text-center">
                        <a href="https://www.instagram.com/hmj_ti.undiksha/" aria-label="Instagram HMJ TI"
                            class="mdi mdi-instagram text-muted fs-2"></a>
                    </div>

                    <div class="col-4 text-start">
                        <a href="https://www.youtube.com/channel/UCjvKksTEifUWNU_rfCHubDg?app=desktop"
                            aria-label="Youtube HMJ TI" class="mdi mdi-youtube text-muted fs-2"></a>
                    </div>

                </div>
            </div>

            <div class="offset-lg-1 col-lg-2 col-md-3 col-6">
                <div class="mb-4">
                    <h3 class="fw-bold mb-3">Akses Cepat</h3>
                    <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                        <li>
                            <a href="https://hmjti.undiksha.ac.id" class="nav-link">Web HMJ</a>
                        </li>
                        <li>
                            <a href="https://hmjti.undiksha.ac.id/integer" class="nav-link">Web Integer</a>
                        </li>
                        <li>
                            <a disabled href="https://eors.hmjtiundiksha.com" class="nav-link disabled">EORS</a>
                        </li>
                        <li>
                            <a href="/" class="nav-link">ETIKA</a>
                        </li>
                        <li>
                            <a disabled href="https://iuran.hmjtiundiksha.com" class="nav-link disabled">Iuran
                                HMJ</a>
                        </li>
                        <li>
                            <a disabled href="https://inventaris.hmjtiundiksha.com"
                                class="nav-link disabled">Inventaris</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="mb-4">
                    <h3 class="fw-bold mb-3">Konten</h3>
                    <ul class="list-unstyled nav nav-footer flex-column nav-x-0">
                        <li><a href="/#tujuan" class="nav-link">Tujuan ETIKA</a></li>
                        <li><a href="/#syarat-ketentuan" class="nav-link">Syarat dan Ketentuan</a></li>
                        <li>
                            <a href="/#alur-kegiatan" class="nav-link">Alur Kegiatan</a>
                        </li>
                        <li>
                            <a href="/#jadwal-kegiatan" class="nav-link">Jadwal Kegiatan</a>
                        </li>
                        <li>
                            <a href="/#faq" class="nav-link">FaQ</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-12">
                <div class="mb-4">
                    <h3 class="fw-bold mb-3">Layanan</h3>
                    <p>
                        Jl. Udayana No.11, Banjar Tegal, Singaraja, Kabupaten Buleleng,
                        Bali
                    </p>
                    <p class="mb-1">
                        Email:
                        <a href="mailto://hmjtiundiksha@gmail.com">hmjtiundiksha@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-0 border-top py-2 mt-6">
            <!-- Desc -->
            <div class="col">
                <div class="d-lg-flex align-items-center">
                    <div class="me-4">
                        <span>
                            © Copyright
                            <span id="copyright">
                                <script>
                                    document
                                        .getElementById("copyright")
                                        .appendChild(
                                            document.createTextNode(new Date().getFullYear())
                                        );
                                </script>
                            </span>
                            HMJ TI Undiksha
                        </span>
                    </div>
                </div>
            </div>
            <!-- Links -->
            <div class="col text-end">
                Made with <i class="mdi mdi-heart text-danger"></i> by <button class="btn btn-outline-primary btn-sm"
                    id="tampilkan-modal" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                    GanaDev Com X Web Dev HMJ
                    TI
                </button>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

{{-- Modal --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalCenterTitle">Development Team</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="https://hmjti.undiksha.ac.id" target="_blank">
                        <img style="width: 100px" src="{{ asset('assets/images/logo/hmj-ti-512.webp') }}"
                            alt="HMJ TI Undiksha">
                    </a>
                    <a href="https://ganadev.com" target="_blank">
                        <img style="width: 80px" src="{{ asset('assets/images/logo/ganadev.webp') }}" alt="Ganadev.com">
                    </a>
                </div>
                <hr>
                <h3>Coordinator</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>I Ketut Adi Krisna Murti Saksena</span>
                    <span>Anak Agung Gede Andre Kusuma</span>
                </div>
                <hr>
                <h3>Front End</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>I Wayan Ari Pramana Putra</span>
                    <span>Anak Agung Gede Andre Kusuma</span>
                    <span>I Kadek Wira Agus Setiawan</span>
                    <span>I Putu Mas Yuda Pratama</span>
                </div>
                <hr>
                <h3>Back End</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>Putu Ryan Darmayasa</span>
                    <span>Marselinus Harson Rewo</span>
                    <span>Anak Agung Gede Andre Kusuma</span>
                </div>
                <hr>
                <h2>Development Team on Previous Project</h2>
                <p>This project might not have been possible if it had not been initiated by them:</p>
                <h3>Coordinator</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>Irfan Walhidayah</span>
                    <span>Putu Zasya Eka Satya Nugraha</span>
                </div>
                <hr>
                <h3>Front End</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>Komang Jepri Kusuma Jaya</span>
                    <span>I Nyoman Triarta</span>
                </div>
                <hr>
                <h3>Back End</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>I Gede Riyan Ardi Darmawan</span>
                    <span>Ida Bagus Made Yudha Wirawan</span>
                </div>
                <hr>
                <h3>Assets and Contents</h3>
                <div class="gap-1 d-flex flex-column">
                    <span>I Wayan Darmika</span>
                    <span>I Gede Anggie Suardika Arpin</span>
                    <span>Ni Made Mirah Pradnya Pramesti</span>
                    <span>Ketut Nova Wirya Dinata</span>
                </div>
            </div>
        </div>
    </div>
</div>
