#include <iostream>
using namespace std;
struct Data { int dia;
int mes; int ano;
};

struct Pessoa { string nome;
Data dataNascimento; Data dataContratacao;
};

int main(){
  Pessoa p;
  cout<<"Cadastro de Pessoas\nNome;\n";
  cin>>p.nome;
  cout<<"\nData de nascimento;\nDia;\n";
  cin>>p.dataNascimento.dia;
  cout<<"\nMes;\n";
  cin>>p.dataNascimento.mes;
  cout<<"\nAno;\n";
  cin>>p.dataNascimento.ano;
  cout<<"\nData de contratacao;\nDia;\n";
  cin>>p.dataContratacao.dia;
  cout<<"\nMes;\n";
  cin>>p.dataContratacao.mes;
  cout<<"\nAno;\n";
  cin>>p.dataContratacao.ano;
  cout<<"\nSeu nome e;\n"<<p.nome<<".\nSua data de nascimento e;\n"<<p.dataNascimento.dia<<"/"<<p.dataNascimento.mes<<"/"<<p.dataNascimento.ano<<"\nSua data de contratacao e;\n"<<p.dataContratacao.dia<<"/"<<p.dataContratacao.mes<<"/"<<p.dataContratacao.ano<<".";
}
