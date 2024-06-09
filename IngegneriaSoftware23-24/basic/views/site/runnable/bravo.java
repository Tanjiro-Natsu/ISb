package views.site.runnable;

import java.io.PrintWriter;
import java.io.File;
import java.io.FileReader;
import java.util.ArrayList;
import java.io.BufferedReader;
import java.io.FileReader;
import java.util.Scanner;
public class bravo
{
    private static int level =0;
    private static String[] nomeoriginale=new String[]{"pp","pds","pbd","abstract","control","demostrate","enforce","hide","inform","minimize","separete"};
    private static String[] nomepaginaHTML=new String[]{"Privacy Patterns","Privacy Design Strategy","Principle Privacy by Design ","Astrarre","Controllare","Dimostrare","Rinforzare","Nascondere","Informare","Minimizare","Separare"};
    public static void main(String[] args) {
    args[0]=args[0].toLowerCase();
    for(int k=0;k<args.length;k++){
        if(k>0){
args[0]+=" "+args[k];
        }
    }
    
    File[] filesInDir = new File("C:\\xampp\\htdocs\\IngegneriaSoftware23-24\\basic\\views\\site").listFiles();
   
 
    ArrayList<String> founded=new ArrayList<String>();
 
    for(int i=0;i<filesInDir.length;i++){
        String [] splitted=args[0].split(" ");
        for(int y=0;y<splitted.length;y++){
            for(int u=0;u<nomeoriginale.length;u++){
                if(splitted[y].equalsIgnoreCase(nomepaginaHTML[u])){
splitted[y]=nomeoriginale[u];
                }
            }
            
            if(filesInDir[i].toString().contains(splitted[y])){
                if(!founded.contains(filesInDir[i].toString()) ){
founded.add(filesInDir[i].toString());
                }
            }
        }
    }

   
    try{
        PrintWriter a=new PrintWriter("C:\\xampp\\htdocs\\IngegneriaSoftware23-24\\basic\\views\\site\\eseguibile.php");
    String php="<?php /** @var yii\\web\\View $this */ $this->title = 'Risultati';?><body background=\"https://wallpaperbat.com/img/759479-tackling-cybersecurity-vulnerabilities-with-daas.jpg\"><div class=\"site-index\"> ";
    if(founded.size()!=0){
        level=1;
        php+="<div class=\"jumbotron text-center bg-transparent mt-5 mb-5\"> <h1 class=\"display-4\" style=\"color:white;font-family:Impact;\"><strong>Risultati ricerca \""+args[0] +"\"</strong> </h1> </div><br><br><br><br><br>";
        for(int i=0;i<founded.size();i++){
            String temp[]=founded.get(i).split("\\\\");
        String fin[]=temp[temp.length-1].split("\\.");
        String href=fin[0];
        fin[0]=fin[0].replace("-"," ");
        fin[0]=fin[0].substring(0,1).toUpperCase()+fin[0].substring(1);
        for(int u=0;u<nomepaginaHTML.length;u++){
            if(fin[0].equalsIgnoreCase(nomeoriginale[u])){
fin[0]=nomepaginaHTML[u];
            }
        }

        php+="<div style=\"width:100%;box-shadow:5px 5px 3px #a3a0a1;background-color:rgb(3, 192, 74,0.4);vertical-align:middle;text-align:center;border:ridge;\"><div class=\"row\"><div class=\"col\"><h2 style=\"font-family:Impact;color:white;\">"+fin[0]+"</h2></div><div class=\"col\"></div><div class=\"col\"><br><br><p style=\"text-align:right\"><a class=\"btn btn-outline-secondary\" style=\"background-color:white;\" href=http://localhost:8080/index.php?r=site%2F"+href+">Documentation &raquo;</a></p></div></div></div><br><br><br>";
    }}

    for(int q=0;q<filesInDir.length;q++){
        try{
          
        
            BufferedReader b=new BufferedReader(new FileReader(filesInDir[q]));
            if(!founded.contains(filesInDir[q].toString())){while(true){
                String s=b.readLine();
                s.toLowerCase();
                String Cartesio=args[0];
                for(int f=0;f<nomeoriginale.length;f++){
                    if(Cartesio.equalsIgnoreCase(nomepaginaHTML[f])){
                        Cartesio=nomeoriginale[f];
                    }
                }
                if(s.contains(args[0]) || s.contains(Cartesio) ||s==null){
                    if(s!=null){
                        
                        level=1;
                        String temp[]=filesInDir[q].toString().split("\\\\");
        String fin[]=temp[temp.length-1].split("\\.");
        String href=fin[0];
        fin[0]=fin[0].substring(0,1).toUpperCase()+fin[0].substring(1);
        String container=fin[0].replace("-"," ");
        for(int f=0;f<nomeoriginale.length;f++){
            if(container.equalsIgnoreCase(nomeoriginale[f])){
                container=nomepaginaHTML[f];
            }
        }
        
                        php+="<div style=\"width:100%;box-shadow:5px 5px 3px #a3a0a1;background-color:rgb(3, 192, 74,0.4);vertical-align:middle;text-align:center;border:ridge;\"><div class=\"row\"><div class=\"col\"><h2 style=\"font-family:Impact;color:white;\">"+container+"</h2></div><div class=\"col\"></div><div class=\"col\"><br><br><p style=\"text-align:right\"><a class=\"btn btn-outline-secondary\" style=\"background-color:white;\" href=http://localhost:8080/index.php?r=site%2F"+href+">Documentation &raquo;</a></p></div></div></div><br><br><br>";
                    }
break;
                }
            }}
b.close();
        }
        catch(Exception e){}
    }
    if(level==0){
           php+="<div class=\"site-index\"> <div class=\"jumbotron text-center bg-transparent mt-5 mb-5\"> <h3 class=\"display-4\" style=\"color:white;font-family:Impact;\"><strong>Nessun elemento trovato per \""+args[0]+"\"</strong> </h3> </div><br><br><br><br><br><div class=\"row\"><div class=\"col-lg-4 mb-3\"><div style=\"width:100%;box-shadow:5px 5px 3px #a3a0a1;background-color:rgb(3, 192, 74,0.5);vertical-align:middle;text-align:center;border:ridge;\"><h2 style=\"font-family:Impact;color:white;\">Principle of Privacy by Design</h2><p style=\"font-family:Impact;\">In questa sezione verranno spiegati i vari principi della Privacy by Design (PbD)</p><p><a class=\"btn btn-outline-secondary\" style=\"color:white;\" href=\"http://localhost:8080/index.php?r=site%2Fpbd\">PbD Documentation &raquo;</a></p></div></div><div class=\"col-lg-4 mb-3\"><div style=\"width:100%;box-shadow:5px 5px 3px #a3a0a1;background-color:rgb(3, 192, 74,0.5);vertical-align:middle;text-align:center;border:ridge;\"><h2 style=\"font-family:Impact;color:white;\">Privacy Design Strategies</h2><p style=\"font-family:Impact;\">In questa sezione verranno spiegate le varie strategie adottate per rispettare i vari principi di PbD</p><p><a class=\"btn btn-outline-secondary\" style=\"color:white;\" href=\"http://localhost:8080/index.php?r=site%2Fpds\">Privacy Design Strategies Documentation &raquo;</a></p></div></div><div class=\"col-lg-4\"><div style=\"width:100%;box-shadow:5px 5px 3px #a3a0a1;background-color:rgb(3, 192, 74,0.5);vertical-align:middle;text-align:center;border:ridge;\"><h2 style=\"font-family:Impact;color:white;\">Privacy Patterns</h2><p style=\"font-family:Impact;\">In questa sezione verranno spiegati i pattern da attuare in base alla Privacy Design Strategies scelta</p><p><a class=\"btn btn-outline-secondary\"  style=\"color:white;\" href=\"http://localhost:8080/index.php?r=site%2Fpp\">Privacy Patterns Documentation &raquo;</a></p></div></div></div></div>";
        
    }
    a.print(php);
    a.close();}
        catch(Exception e){}
    
    }
}