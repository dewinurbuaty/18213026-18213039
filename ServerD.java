import java.net.*;
import java.io.*;
import java.util.*;
 
public class ServerD
{ 
	private static Socket socket;
	public final static int SOCKET_PORT = 25000;
	public final static String FILE_TO_SEND1 = "C:/Users/d e w i/Documents/A.txt"; 
	public final static String FILE_TO_SEND2 = "C:/Users/d e w i/Documents/B.txt"; 
	public final static String FILE_TO_SEND3 = "C:/Users/d e w i/Documents/C.txt"; 
 
    public static void main(String[] args) throws IOException
    {
		Scanner in = new Scanner(System.in);
		
        try
        {
 
            int port = 25000;
            ServerSocket serverSocket = new ServerSocket(port);
            System.out.println("Server Started and listening to the port 25000");
			
            //Server is running always. This is done using this while(true) loop            
			while(true)
            {
				System.out.println("\n\nWaiting...");
                //Reading the message from the client
                socket = serverSocket.accept();
                InputStream is = socket.getInputStream();
                InputStreamReader isr = new InputStreamReader(is);
                BufferedReader br = new BufferedReader(isr);
                String number = br.readLine();
                System.out.println("Nomor File yang diminta : "+number);				
				int x = Integer.parseInt(number);				
				FileInputStream fis = null;
				BufferedInputStream bis = null;
				OutputStream os = null;
				ServerSocket servsock = serverSocket;
				Socket sock = null;
				
				
				switch(x){
					case 1:	
						System.out.println("Mengirim file A.txt..");
					
							try {
							  sock = servsock.accept();
							  System.out.println("Accepted connection : " + sock);
							  
							  // send file
							  File myFile = new File (FILE_TO_SEND1);
							  byte [] mybytearray  = new byte [(int)myFile.length()];
							  fis = new FileInputStream(myFile);
							  bis = new BufferedInputStream(fis);
							  bis.read(mybytearray,0,mybytearray.length);
							  os = sock.getOutputStream();
							  System.out.println("Sending " + FILE_TO_SEND1 + "(" + mybytearray.length + " bytes)");
							  os.write(mybytearray,0,mybytearray.length);
							  os.flush();
							  System.out.println("Done.");
							}
							finally {
							  if (bis != null) bis.close();
							  if (os != null) os.close();
							  if (sock!=null) sock.close();
							}
						
					break;
					
					case 2:
						System.out.println("Mengirim file B.txt..");

							try {
							  sock = servsock.accept();
							  System.out.println("Accepted connection : " + sock);
							  
							  // send file
							  File myFile = new File (FILE_TO_SEND2);
							  byte [] mybytearray  = new byte [(int)myFile.length()];
							  fis = new FileInputStream(myFile);
							  bis = new BufferedInputStream(fis);
							  bis.read(mybytearray,0,mybytearray.length);
							  os = sock.getOutputStream();
							  System.out.println("Sending " + FILE_TO_SEND2 + "(" + mybytearray.length + " bytes)");
							  os.write(mybytearray,0,mybytearray.length);
							  os.flush();
							  System.out.println("Done.");
							}
							finally {
							  if (bis != null) bis.close();
							  if (os != null) os.close();
							  if (sock!=null) sock.close();
							}
											
					break;
					
					case 3:
						System.out.println("Mengirim file C.txt.");
						try {
							  sock = servsock.accept();
							  System.out.println("Accepted connection : " + sock);
							  
							  // send file
							  File myFile = new File (FILE_TO_SEND3);
							  byte [] mybytearray  = new byte [(int)myFile.length()];
							  fis = new FileInputStream(myFile);
							  bis = new BufferedInputStream(fis);
							  bis.read(mybytearray,0,mybytearray.length);
							  os = sock.getOutputStream();
							  System.out.println("Sending " + FILE_TO_SEND3 + "(" + mybytearray.length + " bytes)");
							  os.write(mybytearray,0,mybytearray.length);
							  os.flush();
							  System.out.println("Done.");
							}
							finally {
							  if (bis != null) bis.close();
							  if (os != null) os.close();
							  if (sock!=null) sock.close();
							}

					break;
					
				}			
                
			}
        }
        catch (Exception e)
        {
            e.printStackTrace();
        }
        finally
        {
            try
            {
                socket.close();
            }
            catch(Exception e){}
        }
    }
}
