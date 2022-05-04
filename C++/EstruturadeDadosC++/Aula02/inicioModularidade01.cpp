#include <iostream>
using namespace std;
void media(float n1, float n2){
  float md= (n1+n2)/2;
cout<<"\n"<<md<<endl;
}
float media2(float n1, float n2){
  return(n1+n2)/2;
}
int main() {
  std::cout << "Hello World!\n";
 media(7,5);
  cout<<media2(8,5);
}