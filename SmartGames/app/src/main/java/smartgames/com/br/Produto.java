package smartgames.com.br;

import com.google.gson.annotations.SerializedName;

/**
 * Created by nicol on 22/10/2017.
 */
public class Produto {

    @SerializedName("id_produto")
    private Integer id_produto;
    @SerializedName("imagem_produto")
    private String imagem_produto;
    @SerializedName("nome_produto")
    private String nome_produto;
    @SerializedName("descricao_produto")
    private String descricao_produto;
    @SerializedName("preco_produto")
    private String preco_produto;
    @SerializedName("marca_modelo")
    private String marca_modelo;

    public Produto(Integer id_produto, String imagem_produto, String nome_produto, String descricao_produto, String preco_produto, String marca_modelo) {
        this.id_produto = id_produto;
        this.imagem_produto = imagem_produto;
        this.nome_produto = nome_produto;
        this.descricao_produto = descricao_produto;
        this.preco_produto = preco_produto;
        this.marca_modelo = marca_modelo;
    }

    public Integer getId_produto() {
        return id_produto;
    }

    public void setId_produto(Integer id_produto) {
        this.id_produto = id_produto;
    }

    public String getImagem_produto() {
        return imagem_produto;
    }

    public void setImagem_produto(String imagem_produto) {
        this.imagem_produto = imagem_produto;
    }

    public String getNome_produto() {
        return nome_produto;
    }

    public void setNome_produto(String nome_produto) {
        this.nome_produto = nome_produto;
    }

    public String getDescricao_produto() {
        return descricao_produto;
    }

    public void setDescricao_produto(String descricao_produto) {
        this.descricao_produto = descricao_produto;
    }

    public String getPreco_produto() {
        return preco_produto;
    }

    public void setPreco_produto(String preco_produto) {
        this.preco_produto = preco_produto;
    }

    public String getMarca_modelo() {
        return marca_modelo;
    }

    public void setMarca_modelo(String marca_modelo) {
        this.marca_modelo = marca_modelo;
    }
}
