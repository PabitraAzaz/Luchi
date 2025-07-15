<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;

use App\Models\UserModel;

class DashboardController extends BaseController
{


    // public function getFolderSize($dir)
    // {
    //     $size = 0;

    //     // Check if the directory exists
    //     if (is_dir($dir)) {
    //         // Open the directory
    //         $directory = new \RecursiveDirectoryIterator($dir, \FilesystemIterator::SKIP_DOTS);
    //         $iterator = new \RecursiveIteratorIterator($directory);

    //         // Iterate through all files in the directory
    //         foreach ($iterator as $file) {
    //             $size += $file->getSize();
    //         }
    //     }

    //     return $size;
    // }





    public function index()
    {
        if ($this->request->getMethod() === "get") {
            return view('admin/dashboard');
        }
    }






    public function logout()
    {
        $session = session();
        $session->remove('admin_auth');
    }



    public function profile_update()
    {

        return view('admin/profile');
    }




    public function document_up()
    {
        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'get') {
            return view('admin/documents/special');
        } else {
            $session = session();
            if ($this->validate(
                [
                    'doc_Cat' => 'required',
                    'file' => 'uploaded[file]|mime_in[file,application/pdf,application/msword]'
                ],
                [
                    'docCat' => [
                        'required' => 'Select the document category',
                    ],

                    'file' => [
                        'uploaded' => 'Document is required',
                        'mime_in' => 'Only PDF and DOC files are allowed',
                    ],
                ]
            )) {




                $file = $this->request->getFile('file');
                $docCat = $this->request->getPost('doc_Cat');

                // Check if the file is valid and hasn't been moved yet
                if ($file->isValid() && !$file->hasMoved()) {
                    // Determine new file name based on doc_Cat
                    $extension = $file->getExtension();
                    if ($docCat == 'mis') {
                        $newFileName = 'MIS.' . $extension;
                    } elseif ($docCat == 'daily_court_dates') {
                        $newFileName = 'DAILY COURT DATES.' . $extension;
                    } else {
                        $newFileName = $file->getName(); // Keep original if not matched
                    }

                    $uploadPath = 'uploads/new_mis/';


                    if (!is_dir($uploadPath)) {
                        mkdir($uploadPath, 0777, true); // Ensure the folder exists
                    }

                    // If file with same name exists, delete it
                    if (file_exists($uploadPath . $newFileName)) {
                        unlink($uploadPath . $newFileName);
                    }

                    // Move uploaded file
                    $file->move($uploadPath, $newFileName);

                    $session->setFlashdata('msg', ["msg" => 'You have successfully Add a Documents', "type" => "success"]);

                    return redirect()->back();
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['file' => 'Invalid file upload'], "type" => "danger"]);
                    return redirect()->back()->withInput();
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }






    // public function message()
    // {
    //     $msgModel = new MessageModel();
    //     $message = $msgModel->orderBy('id', 'desc')->findAll();
    //     return view('admin/message', ['msg' => $message]);
    // }

    // public function tour_book()
    // {
    //     $bookModel = new TourBookModel();
    //     $book = $bookModel->getTour();
    //     return view('admin/booking', ['book' => $book]);
    // }
    // public function delete_booking($id)
    // {
    //     $session = session();
    //     $bookModel = new TourBookModel();
    //     if (!empty($bookModel->select('id')->where('id', $id)->first())) {
    //         if ($bookModel->delete($id)) {
    //             $session->setFlashdata('msg', ['msg' => 'Successfully Deleted a Booking', 'type' => 'success']);
    //             return redirect()->to(site_url("admin/booking"));
    //         } else {
    //             $session->setFlashdata('invalid_creds', ['errors' => "Something went wrong", 'type' => 'danger']);
    //             return redirect()->to(site_url("admin/booking/" . $id));
    //         }
    //     } else {
    //         $session->setFlashdata('invalid_creds', ['errors' => "Booking Info Not Found", 'type' => 'danger']);
    //         return redirect()->to(site_url("admin/booking/" . $id));
    //     }
    // }


}
