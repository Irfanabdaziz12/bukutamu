<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Data Center Inventory Management Dinas KOMINFO Kota Tangerang">
    <meta name="author" content="debu_semesta">
    <meta name="X-CSRF-TOKEN" content="<?= $this->security->get_csrf_hash();?>">
    
    <base href="<?= rtrim(base_url(), '/') ?>">
    
		<title><?= $title ?></title>

		<!-- App favicon -->
		<link rel="shortcut icon" href="<?= site_url('_/images/favicon.png') ?>">

		<!-- Core -->
		<?= css('style') ?>
			
		<?php $this->_CI->load_css() ?>
		
		<?php $this->_CI->load_css_plugin() ?>

		<?= plugin('select2/select2.min');?>

		<?= plugin('parsleyjs/src/parsley'); ?>
		
		<!-- <link href="https://unpkg.com/sweetalert2@7.24.1/dist/sweetalert2.css" rel="stylesheet"> -->

		<?= plugin('sweetalert2/dist/sweetalert2.min'); ?>

		<?= css('app-dev') ?>

		<style nonce="<?= NONCE ?>">
		
			.swal2-popup {
			    display: none;
			    position: relative;
			    flex-direction: column;
			    justify-content: center;
			    width: 32em;
			    max-width: 100%;
			    padding: 1.25em;
			    border-radius: 0.3125em;
			    background: #3a3a3a;
			    font-family: inherit;
			    font-size: 1rem;
			    box-sizing: border-box;
			}

			.swal2-popup #swal2-content {
			    text-align: center;
			    color: #fff;
			}

			.swal2-popup #swal2-title {
			    text-align: center;
			    color: #fff;
			}
		</style>

		<script nonce="<?= NONCE ?>">
      let baseURI = '<?= base_url() ?>';
    </script>
	</head>
	<body>
	<noscript>
			<div class="modal d-flex fade-in" tabindex="-1" role="dialog" aria-hidden="false">
	        <div class="modal-dialog modal-md" role="document">
	            <div class="modal-content h-75">
	                <div class="modal-header">
	                    <h3 class="modal-title" id="judul_memo">PERHATIAN!</h3>
	                </div>
	                <div class="modal-body text-center p-5">
	                    <h5>Peramban anda mencekal penggunaan javascript!</h5>
	                    <small class="text-danger">Mencekal penggunaan javascript akan membuat aplikasi tidak berjalan dengan baik. Izinkan javascript berjalan lalu muat ulang kembali halaman ini.</small>
	                </div>
	            </div>
	        </div>
	    </div>
	</noscript>