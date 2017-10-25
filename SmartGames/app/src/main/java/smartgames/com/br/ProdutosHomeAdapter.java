package smartgames.com.br;

import android.content.Context;
import android.support.annotation.NonNull;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.squareup.picasso.Picasso;

import java.util.List;

import smartgames.com.br.Produto;

/**
 * Created by 16165886 on 25/09/2017.
 */



public class ProdutosHomeAdapter extends ArrayAdapter<Produto> {

    int resource;
    Context context;
    public ProdutosHomeAdapter(Context context, int resource, List<Produto> objects) {
        super(context, resource, objects);
        this.resource = resource;
    }

    @NonNull
    @Override
    public View getView(int position, View convertView, ViewGroup parent) {

        View v = convertView;

        if (v == null) {
            v = LayoutInflater.from(getContext())
                    .inflate(resource,null);
            /* Resource é o layout do item da lista */
        }

        Produto item = getItem(position); /*Pegando o item que está sendo carregado naquela posição */

        if (item != null) {

            ImageView img_produto = (ImageView) v.findViewById(R.id.img_produto);
            TextView nome_produto = (TextView) v.findViewById(R.id.nome_produto);
            TextView preco_produto = (TextView) v.findViewById(R.id.preco_produto);



            String url = getContext().getString(R.string.link_imagens) + item.getImagem_produto();



            Picasso.with(getContext())
                    .load(url)
                    .into(img_produto);


            //img_produto.setImageResource(Picasso.with(getContext()).load(item.getImg_produto()).into(img_produto));
            nome_produto.setText(item.getNome_produto());
            preco_produto.setText(item.getPreco_produto());
        }

        return v;
    }

}
