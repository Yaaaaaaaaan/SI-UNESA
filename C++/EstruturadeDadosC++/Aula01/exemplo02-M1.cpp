#include <iostream>
#include <string>
using namespace std;
struct Pessoa{
  string nome;
  int idade;
  float salario;
};
int main() {
  Pessoa p;

  std::cout << "Insira o nome: \n";
  cin>>p.nome;
  std::cout << "Insira a idade: \n";
  cin>>p.idade;
  std::cout << "Insira o salario: \n";
  cin>>p.salario;
  cout << "Nome:  "<<p.nome<<"\n";
  cout << "Idade:  "<<p.idade<<"\n";
  cout << "Salario:  "<<p.salario<<"\n";
}