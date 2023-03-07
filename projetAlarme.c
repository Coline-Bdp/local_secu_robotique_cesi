#include <stdio.h>


int main()  {
    if(controlCard() == 1)  {

    }else{
        Alarme = on;
    }




}

int controlCard() {
    int tentative = 3;

    while(tentative > 3)    {
        if(Ok)  {
            diode = vert;
            LCD = BADGE RECONNU;
            return 1;
        }else {
            LCD = BADGE RECONNU;
            diode = rouge;
            tentative--;
        }
    }
    return 0;
}