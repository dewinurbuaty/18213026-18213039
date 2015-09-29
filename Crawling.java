import java.io.*;
import java.net.*;

public class Crawling{

public static void main(String[] args) {
    URL url;
    InputStream is = null;
    BufferedReader br;
    String line;

    try {
        url = new URL("http://www.itb.ac.id");
        is = url.openStream();  // throws an IOException
        br = new BufferedReader(new InputStreamReader(is));

        while ((line = br.readLine()) != null) {
            System.out.println(line);
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
