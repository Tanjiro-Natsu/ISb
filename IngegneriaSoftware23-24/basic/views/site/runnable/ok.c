#include <windows.h>
#include <string.h>
#include <stdio.h>

int main(int argc,char *argv[]){
    
    char c[100]="java C:\\xampp\\htdocs\\IngegneriaSoftware23-24\\basic\\views\\site\\runnable\\bravo.java ";
    strcat(c,argv[1]);
    system(c);
    
}