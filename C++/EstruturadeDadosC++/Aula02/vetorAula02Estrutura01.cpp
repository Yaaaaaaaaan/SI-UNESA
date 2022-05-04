#include <iostream>
using namespace std;
struct Data{
  int dia, mes, ano;
};
struct Pessoa{
string nome;
int idade;
Data dataNascimento;
Data dataConclusaoCurso;
};
int main() {
Pessoa p[2];
Data d;  
cout<<"Cadastro\n";
for(int x=0; x<2;x++){
cout << "Insira nome\n";
cin>>p[x].nome;
cout<<"Insira idade\n";
cin>>p[x].idade;
cout<<"\n"<<p[x].nome<<" "<<p[x].idade<<endl;
}
if(p[0].idade > p[1].idade){
cout<<"P1 maior";
}else{cout<<"P0 Maior";}

}  