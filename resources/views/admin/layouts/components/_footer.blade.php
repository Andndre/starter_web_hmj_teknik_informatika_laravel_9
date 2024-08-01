<!-- Footer Start-->
<footer id="footer" class="footer bg-white" style="position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;">
    <div class="px-4">
        <div class="row align-items-center g-0 border-top py-2">
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
