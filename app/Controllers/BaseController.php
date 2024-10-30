<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;

use App\Models\OrmasModel;
use App\Models\OrmasRiwayatModel;
use App\Models\UserModel;
use App\Models\AksesModel;
use App\Models\LaporanKerjaModel;
use App\Models\RiwayatLoginModel;
use App\Models\NotifikasiModel;
use App\Models\FaqModel;
use App\Models\TrackingModel;


class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = ['form', 'url'];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->req = Services::request();
		$this->session = Services::session();
		$this->calendar = Services::calendar();

		// Inisiasi object Model 
		$this->modelOrmas = new OrmasModel();
		$this->modelOrmasRiwayat = new OrmasRiwayatModel();
		$this->modelUser = new UserModel();
		$this->modelAkses = new AksesModel();
		$this->modelLaporanKerja = new LaporanKerjaModel();
		$this->modelRiwayatLogin = new RiwayatLoginModel();
		$this->modelNotifikasi = new NotifikasiModel();
		$this->modelFaq = new FaqModel();
		$this->modelTracking = new TrackingModel();
	}
}
