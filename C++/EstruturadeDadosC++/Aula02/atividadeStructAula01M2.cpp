#include <iostream>
using namespace std;
struct Pessoa{
int idade;
string nome;
float salario;
};

int main() {
  Pessoa p;
  std::cout << "Digite sua idade;\n";
  cin>>p.idade;
  std::cout << "Digite seu nome;\n";
  cin>>p.nome;
  std::cout << "Digite seu salario;\n";
  cin>>p.salario;

  cout<<"\n Seus dados: \n"<<p.idade<<" "<<p.nome<<" "<<p.salario;
}