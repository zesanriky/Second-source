import java.awt.Graphics;
import java.awt.Image;
import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class ArkaPlanPanel extends JPanel{
	@Override
	
protected void paintComponent(Graphics g){
	super.paintComponent(g);
	
		Image image = new ImageIcon("img/ai-image.jpg").getImage();
		int baslangicx=0;
		int baslangicy=0;
		
		g.drawImage(image,baslangicx,baslangicy,null);		
		
	}
	
	public static void main(String[]args)
	{
		ArkaPlanPanel arkaPlanPanel= new ArkaPlanPanel();
		JFrame f = new JFrame();
		f.add(arkaPlanPanel);
		f.setSize(400,400);
		f.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		f.setVisible(true);
	}

}
