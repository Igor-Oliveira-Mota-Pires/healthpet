<?php

/**
 * Created by PhpStorm.
 * User: GORILLA
 * Date: 31/10/2017
 * Time: 15:08
 */
class PetShopServicoModel extends Model
{
    protected $table = 'petshop_servico';

    public function All(){
        return $this->buscarAllModel($this->table);
    }
    public function salvar($data){

        if(array_key_exists('id_petshop_servico',$data)){
            $id['id_petshop_servico'] = $data['id_petshop_servico'];
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
    public function getServicosByPetShopId($id){
        $result = parent::where($this->table,$id,'id_servico');
        return $result;
    }
    public function where($post, $return = null, $option = null)
    {
        return parent::where($this->table, $post, $return, $option); // TODO: Change the autogenerated stub
    }

    public function getById($id){

        return parent::buscarModel($this->table,$id);
    }
}