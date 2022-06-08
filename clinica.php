<?php
    class Clinica{
        private $dados_gerais, $horario, $data, 
        $crm_medico, $cpf_medico, 
        $cpf_paciente, $nome_paciente, $idade_paciente
        $senha_login $tipo_login;

        public function getDados_gerais(){
            return $this->dados_gerais;
        }

        public function setDados_gerais(){
            $this->dados_gerais = $dg;
        }
        public function getHorario(){
            return $this->horario;
        }

        public function setHorario(){
            $this->horario = $horario;
        }

        public function getData(){
            return $this->data;
        }

        public function setData(){
            $this->data = $data;
        }

        public function getCrm_medico(){
            return $this->crm_medico;
        }

        public function setCrm_medico(){
            $this->crm_medico = $crm;
        }

        public function getCpf_medico(){
            return $this->cpf_medico;
        }

        public function setCpf_medico(){
            $this->cpf_medico = $cpf;
        }

        public function getCpf_pacienete(){
            return $this->cpf_paciente;
        }

        public function setCpf_paciente(){
            $this->cpf_paciente = $cpf;
        }

        public function getNome_paciente(){
            return $this->nome_paciente;
        }

        public function setNome_paciente(){
            $this->nome_paciente = $nome_paciente;
        }

        public function getIdade_paciente(){
            return $this->idade_paciente;
        }

        public function setIdade_paciente(){
            $this->idade_paciente = $idade_paciente;
        }

        public function getSEnha_login(){
            return $this->senha_login;
        }

        public function setSenha_login(){
            $this->senha_login = $senha_login;
        }
        public function getTipo_login(){
            return $this->tipo_login;
        }

        public function setTipo_login(){
            $this->tipo_login = $tipo_login;
        }
    }
?>