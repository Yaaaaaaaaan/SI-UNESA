#include <iostream>

using namespace std;

struct Data{
int dia,mes,ano;
};

struct pessoa{
  string nome;
  Data dataNascimento;
  Data dataConclusao;
};
int main() {
  pessoa p;
    cout<<"\nCadastro de pessoas\n";
    cout<<"Nome: \n";
    cin>>p.nome;
    cout << "Dia de nascimento: \n";
  cin>>p.dataNascimento.dia;
  cout << "Mes de nascimento: \n";
  cin>>p.dataNascimento.mes;
  cout << "Ano de nascimento: \n";
  cin>>p.dataNascimento.ano;
  cout << "Dia de conclusao: \n";
  cin>>p.dataConclusao.dia;
  cout << "Mes de conclusao: \n";
  cin>>p.dataConclusao.mes;
  cout << "Ano de conclusao: \n";
  cin>>p.dataConclusao.ano;
  cout << "\nVoce nasceu em: "<<p.dataNascimento.dia<<"/"<<p.dataNascimento.mes<<"/"<<p.dataNascimento.ano<<", seu nome é: "<<p.nome<<", ira concluir o curso dia: "<<p.dataConclusao.dia<<"/"<<p.dataConclusao.mes<<"/"<<p.dataConclusao.ano;
}