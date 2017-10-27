package smartgames.com.br;

/**
 * Created by nicol on 27/10/2017.
 */
public class LocalizacaoProduto {
    String latitude, longitude, cep;

    public LocalizacaoProduto(String latitude, String longitude, String cep) {
        this.latitude = latitude;
        this.longitude = longitude;
        this.cep = cep;
    }

    public String getLatitude() {
        return latitude;
    }

    public void setLatitude(String latitude) {
        this.latitude = latitude;
    }

    public String getLongitude() {
        return longitude;
    }

    public void setLongitude(String longitude) {
        this.longitude = longitude;
    }

    public String getCep() {
        return cep;
    }

    public void setCep(String cep) {
        this.cep = cep;
    }
}
