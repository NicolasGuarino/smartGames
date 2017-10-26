package smartgames.com.br;

/**
 * Created by nicol on 25/10/2017.
 */
public class DetalhesProdutoGetSetter {

    int id_produto;
    String preco_detalhes_produto, descricao_detalhes_produto, marca_detalhes_produto, nome_detalhes_produto, foto_produto;
    String nome_loja, cep;

    public DetalhesProdutoGetSetter(int id_produto, String preco_detalhes_produto, String descricao_detalhes_produto,
                                    String marca_detalhes_produto, String nome_detalhes_produto,
                                    String foto_produto, String nome_loja, String cep) {
        this.id_produto = id_produto;
        this.preco_detalhes_produto = preco_detalhes_produto;
        this.descricao_detalhes_produto = descricao_detalhes_produto;
        this.marca_detalhes_produto = marca_detalhes_produto;
        this.nome_detalhes_produto = nome_detalhes_produto;
        this.foto_produto = foto_produto;
        this.nome_loja = nome_loja;
        this.cep = cep;
    }

    public int getId_produto() {
        return id_produto;
    }

    public void setId_produto(int id_produto) {
        this.id_produto = id_produto;
    }

    public String getPreco_detalhes_produto() {
        return preco_detalhes_produto;
    }

    public void setPreco_detalhes_produto(String preco_detalhes_produto) {
        this.preco_detalhes_produto = preco_detalhes_produto;
    }

    public String getDescricao_detalhes_produto() {
        return descricao_detalhes_produto;
    }

    public void setDescricao_detalhes_produto(String descricao_detalhes_produto) {
        this.descricao_detalhes_produto = descricao_detalhes_produto;
    }

    public String getMarca_detalhes_produto() {
        return marca_detalhes_produto;
    }

    public void setMarca_detalhes_produto(String marca_detalhes_produto) {
        this.marca_detalhes_produto = marca_detalhes_produto;
    }

    public String getNome_detalhes_produto() {
        return nome_detalhes_produto;
    }

    public void setNome_detalhes_produto(String nome_detalhes_produto) {
        this.nome_detalhes_produto = nome_detalhes_produto;
    }

    public String getFoto_produto() {
        return foto_produto;
    }

    public void setFoto_produto(String foto_produto) {
        this.foto_produto = foto_produto;
    }

    public String getNome_loja() {
        return nome_loja;
    }

    public void setNome_loja(String nome_loja) {
        this.nome_loja = nome_loja;
    }

    public String getCep() {
        return cep;
    }

    public void setCep(String cep) {
        this.cep = cep;
    }
}
