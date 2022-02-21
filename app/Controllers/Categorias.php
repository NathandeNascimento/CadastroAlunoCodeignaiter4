<?php
namespace App\Controllers;                                                        // define o namespace

use App\Models\CategoriaModel; 
use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\Files\UploadedFile;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;                                            // Chamada de bibliotecas //
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use CodeIgniter\Files\File;

class Categorias extends BaseController{                                         

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
                 // Não edite esta linha
        parent::initController($request, $response, $logger);

               // Pré-carregue quaisquer modelos, bibliotecas, etc., aqui.

          $this->session = \Config\Services::session();                            
          
            }           
            

    public function index(){
                return view('Menu');   
            }     
            
    public function listar(){                                                      //função usada para o listar os arquivos capturados no upload //
        $categoriaModel = new \App\Models\CategoriaModel();                        // Seta as validaçoes do banco
        $data['categorias'] = $categoriaModel->findAll();                          //pega todas as informaçoes do banco
        $data['titulo'] = 'Listando todos Cadastros';
        $data['msg'] = $this->session->getFlashdata('msg');                        // lista os dados recebidos pelo findAll.
   
        echo view('Menu_editar', $data);                                           // redireciona para a Menu_editar junto com as informaçoes da variavel data.
    }
    



    public function inserir(){                                                     //função usada para o realizar o upload //
                       
                

        $data['titulo'] = 'Cadastrar   Aluno'; 
        $data['acao'] = 'Cadastrar';
        $data['msg'] = '';    
        

            $categoriaModel = new \App\Models\CategoriaModel();                  // Seta as validaçoes do banco      
            

             helper(['form']); 

             if ($this->request->getMethod() == 'post') {                        //se o metodo usado for identico ao post ele entra no if
                 $rules = [                                                      //configuraçoes de permição no caso apenas arquivos .jpg
     
                    'foto' =>[
                        'rules' => 'uploaded[foto]|ext_in[foto,jpg]',
                       
                    ]
                 ];
                    if ($this->validate($rules)) {                               //se as propriedades forem compativeis entra no if

                    $file = $this->request->getFile('foto');                     // recupera a imagen caregada no name:'foto' do input


                    if ($file->isValid() && !$file->hasMoved()) {                //verifica se o arquivo é valido
                        $novoNome = $file->getRandomName();                      // da um novo nome para o arquivo
                        $file->move(WRITEPATH.'../public/uploads/',$novoNome);   // envia ele para pasta de destino              
                       
        
                        }
                        else {    
                            $data['msg'] = '<p style="color:red">Upload não realizado com sucesso</p>'; //msg de erro
                           
                        }
                             
        
        
            $categoriaModel->set('nome',$this->request->getPost('nome'));      //salva os dados no banco de dados
            $categoriaModel->set('endereco',$this->request->getPost('endereco'));//salva os dados no banco de dados
            $categoriaModel->set('foto',$novoNome );                           //salva os dados no banco de dados
                     
                    if ( $categoriaModel->insert()) {                          // se a variavel for setada entra no if
                        $data['msg'] = '<p style="color:green">Upload realizado com sucesso</p>';//msg de sucesso
                    }
                                      

                   
                 }else {    
                    $data['msg'] = '<p style="color:red">Upload não realizado </p><span style="font-size: .75em;" >* apenas extenção .jpg</span>';//msg de erro
                   
                }
             } else {    
                $data['msg'] = '<p style="font-size: .75em;" >* apenas extenção .jpg</p>';//msg  de  tipo de permição permitida
               
            }      
          
    
        echo View ('menu_form', $data );                                    // redireciona com as informçoes da variavel   
           
    }



    public function editar($id){                                           // id
   
        $data['titulo'] = '<p style="margin-left:50px">Editar Aluno </p>' ;
        $data['acao'] = 'Editar';
        $data['msg'] = '';
        $categoriaModel = new \App\Models\CategoriaModel();               // Seta as validaçoes do banco
        $categoria = $categoriaModel->find($id);                          // recebe o id do cadastro que queremos editar


        if($this->request->getMethod() === 'post'){                      //se o metodo usado for identico ao post ele entra no if

            $rules = [
                                                                         //configuraçoes de permição, no caso apenas arquivos .jpg
                'foto' =>[
                    'rules' => 'uploaded[foto]|ext_in[foto,jpg]',
                   
                ]
             ];
            if ($this->validate($rules)) {
                                                                                    // valida os registros
            $file = $this->request->getFile('foto');
            $novoNome = $file->getRandomName();                                    // da um novo nome para o arquivo
            $file->move(WRITEPATH.'../public/uploads/',$novoNome);                 // direciona até a pasta de destino

            $categoria->foto = ("$novoNome");                                      //altera os dados no banco de dados
            
                              }else {
                                $data['msg'] = '<p style="color:red">Erro ao editar cadastro</p><span style="font-size: .75em;" >* apenas extenção .jpg</span>';
                            }
            $categoria->nome = $this->request->getPost('nome');                    //altera os dados no banco de dados
            $categoria->endereco = $this->request->getPost('endereco');            //altera os dados no banco de dados
                                                
            

            if($categoriaModel->update($id, $categoria)){                          // atualiza o registro
                $data['msg'] = '<p style="color:green">Cadastro editado com sucesso!</p>';
               
            }else {
                $data['msg'] = '<p style="color:red">Erro ao editar cadastro</p>';
            }
            
           
        }else {
            $data['msg'] = '<p style="font-size: .75em;">apenas extenção .jpg</p>';
        }
        $data['categoria'] = $categoria;
        echo view('menu_form', $data);
    }
    




   public function excluir($id = null){
       if(is_null($id)){
                                                                                 // redirecionar a app para o categorias/index
                                                                                 //definir um msg via session
           $this->session->setFlashdata('msg', 'Categoria não encontrada');
           return redirect()->to(base_url('categorias'));
       }
       $categoriaModel = new \App\Models\CategoriaModel();                       // Seta as validaçoes do banco
       if($categoriaModel->delete($id)){
                                                                                 //excluiu com sucesso
            $this->session->setFlashdata('msg', 'Categoria excluida com sucesso');
       }else {
                                                                                 //erro ao excluir
         $this->session->setFlashdata('msg', 'Erro ao excluir categoria');
       }return redirect()->to(base_url('categorias/listar'));
   } 
}
