/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package progif2;
import java.io.*;
import java.net.*;
import java.util.*;

/**
 *
 * @author acer
 */
    

public class Crawling{

public static void tulisFile(String teks, String namaFile) {
    try {
        PrintWriter out = new PrintWriter(new BufferedWriter(new FileWriter(namaFile, true)));
        out.println(teks);
        out.close();
    } catch (IOException e) {
    System.out.println("Gagal menulis ke file " + namaFile);
    //e.printStackTrace();
				}
}
    
public static void main(String[] args) {
    URL url;
    InputStream is = null;
    BufferedReader br;
    String line;
    String namaFile = "listhtml.txt"; //file buat nampung output dari cmd
    
   

    try {
        url = new URL("http://www.itb.ac.id");	
        is = url.openStream();  // throws an IOException
        br = new BufferedReader(new InputStreamReader(is));
        File file=new File(namaFile);
        while ((line = br.readLine()) != null) {
            System.out.println(line);
            tulisFile(line,namaFile);
        }
    } catch (MalformedURLException mue) {
         mue.printStackTrace();
    } catch (IOException ioe) {
         ioe.printStackTrace();
    } finally {
        try {
            if (is != null) is.close();
        } catch (IOException ioe) {
            // nothing to see here
        }
    }
}
}

