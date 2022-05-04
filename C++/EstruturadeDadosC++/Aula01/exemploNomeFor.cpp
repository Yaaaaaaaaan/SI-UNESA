#include <iostream>
using namespace std;
int idade1=0, idade2=0, idade[4];
int main() {
  for(int x=0; x<2; x++){
  cout << "\nIntroduza a idade :\n";
  cin>>idade[x];
  cout<<"\nSua idade é: "<<idade[x]<<"\n";
  cout<<"\nindice: "<<x<<"\n";
  }
}