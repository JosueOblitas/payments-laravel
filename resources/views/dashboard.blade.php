<x-app-layout>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
        }

        .close {
            position: absolute;
            top: 0;
            right: 0;
            padding: 10px;
            cursor: pointer;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="mb-2">
                    <p>Monto a pagar</p>

                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                        role="alert">
                        100 USD
                    </div>
                </div>
                <p class="mb-4">Seleccione un método de pago</p>
                <ul class="grid grid-cols-2 gap-4">
                    <ul class="">
                        <button id="openModalBtn" data-modal="#myModal1"
                            class="w-full flex justify-center bg-gray-100 p-3 rounded-lg shadow hover:shadow-md">
                            <img class="h-8"
                                src="https://s3.amazonaws.com/media.greatplacetowork.com/peru/best-workplaces-in-peru/2023/2-de-251-a-1000/07-izipay/logo-01.png"
                                alt="">
                        </button>
                        <div id="myModal1" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Your modal content goes here. izipay</p>
                            </div>
                        </div>
                    </ul>
                    <ul>
                        <button id="openModalBtn" data-modal="#myModal2"
                            class="w-full flex justify-center bg-gray-100 p-3 rounded-lg shadow hover:shadow-md">
                            <img class="h-8" src="https://proveedores.niubiz.com.pe/assets/media/logos/logo.png"
                                alt="">
                        </button>
                        <div id="myModal2" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Your modal content goes here. niubiz</p>
                            </div>
                        </div>
                    </ul>
                    <ul>
                        <button id="openModalBtn" data-modal="#myModal3"
                            class="w-full flex justify-center bg-gray-100 p-3 rounded-lg shadow hover:shadow-md">
                            <img class="h-8" src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c530.png"
                                alt="">
                        </button>
                        <div id="myModal3" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Your modal content goes here. paypal</p>
                            </div>
                        </div>
                    </ul>
                    <ul>
                        <button id="openModalBtn" data-modal="#myModal4"
                            class="w-full flex justify-center bg-gray-100 p-3 rounded-lg shadow hover:shadow-md">
                            <img class="h-8"
                                src="https://logotipoz.com/wp-content/uploads/2021/10/version-horizontal-large-logo-mercado-pago.webp"
                                alt="">
                        </button>
                        <div id="myModal4" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Your modal content goes here. mercadp pago</p>
                            </div>
                        </div>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    @section('javascript')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll("#openModalBtn").forEach(function(btn) {
                    btn.addEventListener("click", function() {
                        var modalId = this.dataset.modal;
                        document.querySelector(modalId).style.display = "block";
                    });
                });

                document.querySelectorAll(".close").forEach(function(closeBtn) {
                    closeBtn.addEventListener("click", function() {
                        this.closest(".modal").style.display = "none";
                    });
                });
            });
        </script>
    @endsection
</x-app-layout>
