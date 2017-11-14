<?php

/**
 * Created by PhpStorm.
 * User: GORILLA
 * Date: 31/10/2017
 * Time: 15:06
 */
class PetShopModel extends Model
{
    protected $table = 'petshop';

    public function All(){
        return $this->buscarAllModel($this->table);
    }
    public function salvar($data){

        if(array_key_exists('id_petshop',$data)){
            $id['id_petshop'] = $data['id_petshop'];
            return $this->update($data,$id);
        }else{
            return $this->inserir($data);
        }
    }

    public function exclui($post)
    {
        return parent::excluirModel($this->table, $post); // TODO: Change the autogenerated stub
    }

    private function inserir($data){
        return parent::gravarModel($this->table,$data);
    }

    private function update($data,$id){

        return parent::alterarModel($this->table,$data,$id);
    }
    public function filtrar($post)
    {
        return parent::filtrar($this->table, $post); // TODO: Change the autogenerated stub
    }

    public function getNomePetShopById($post,$return=null){
        $result = parent::where($this->table,$post,$return);
        return $result['nm_petshop'];
    }
    public function getById($id){

        return parent::buscarModel($this->table,$id);
    }

}