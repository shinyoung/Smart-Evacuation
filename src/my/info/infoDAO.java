package my.info;

import java.sql.*;

public class infoDAO {

	Connection con;
	PreparedStatement ps;
	ResultSet rs;
	
	String url, user, pass;
	
	public infoDAO(){
		try {
			Class.forName("org.gjt.mm.mysql.Driver");
		} catch (ClassNotFoundException e) {
			e.printStackTrace();// TODO: handle exception
		}
		url = "jdbc:mysql://127.0.0.1:3306/sds";
		user = "root"; pass="1234";
	}
	public int insertInfo(String name, String age, String gender, String defect)
			throws SQLException {
String sql = "insert into user values(null,?,?,?,?)";
try{
con = DriverManager.getConnection(url, user, pass);
ps = con.prepareStatement(sql);
ps.setString(1, name);
ps.setString(2, age);
ps.setString(3, gender);
ps.setString(4, defect);

int result = ps.executeUpdate();
return result;
}finally{
if (ps != null) ps.close();
if (con != null) con.close();
}
	}
}










