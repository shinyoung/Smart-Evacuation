package my.info;

public class infoDTO {
	
	public infoDTO() {
		super();
		// TODO Auto-generated constructor stub
	}
	public infoDTO(String name, String age, String gender, String defect) {
		super();
		this.name = name;
		this.age = age;
		this.gender = gender;
		this.defect = defect;
	}
	private String name;
	private String age;
	private String gender;
	private String defect;
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getAge() {
		return age;
	}
	public void setAge(String age) {
		this.age = age;
	}
	public String getGender() {
		return gender;
	}
	public void setGender(String gender) {
		this.gender = gender;
	}
	public String getDefect() {
		return defect;
	}
	public void setDefect(String defect) {
		this.defect = defect;
	}
	
	
}
