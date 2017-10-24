package smartgames.com.br;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by nicol on 22/10/2017.
 */

public class RecyclerViewAdapter extends RecyclerView.Adapter<RecyclerViewHolders> {
    private List<Produto> itemList;
    private Context context;
    public RecyclerViewAdapter(Context context, List<Produto> itemList) {
        this.itemList = itemList;
        this.context = context;
    }
    @Override
    public RecyclerViewHolders onCreateViewHolder(ViewGroup parent, int viewType) {
        View layoutView = LayoutInflater.from(parent.getContext()).inflate(R.layout.recycler_home, null);
        RecyclerViewHolders rcv = new RecyclerViewHolders(layoutView);
        return rcv;
    }
    @Override
    public void onBindViewHolder(RecyclerViewHolders holder, int position) {
        holder.img_produto.setImageResource(itemList.get(position).getImagem_produto());
        String url_foto = this.context.getString(R.string.link_imagens);
        /*Picasso.with(context)
                .load(url_foto)
                .into(holder.img_produto.setImageResource());*/

        holder.nome_produto.setText(itemList.get(position).getNome_produto());
        holder.marca_produto.setText(itemList.get(position).getMarca_modelo());
        holder.preco_produto.setText(itemList.get(position).getPreco_produto());
    }
    @Override
    public int getItemCount() {
        return this.itemList.size();
    }
}