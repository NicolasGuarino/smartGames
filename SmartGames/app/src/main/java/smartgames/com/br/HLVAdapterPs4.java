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

import java.util.ArrayList;

/**
 * Created by nicol on 22/10/2017.
 */

public class HLVAdapterPs4 extends RecyclerView.Adapter<HLVAdapterPs4.ViewHolder> {

    ArrayList<Integer> image_produto;
    ArrayList<String> nome_produto;
    ArrayList<String> descricao_produto;
    ArrayList<String> preco_produto;
    ArrayList<String> marca_produto;
    Context context;

    public HLVAdapterPs4(ArrayList<Integer> image_produto, ArrayList<String> nome_produto, ArrayList<String> descricao_produto,
                      ArrayList<String> preco_produto, ArrayList<String> marca_produto, Context context) {
        super();
        this.image_produto = image_produto;
        this.nome_produto = nome_produto;
        this.descricao_produto = descricao_produto;
        this.preco_produto = preco_produto;
        this.marca_produto = marca_produto;
        this.context = context;
    }

    @Override
    public ViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext())
                .inflate(R.layout.recycler_home_ps4, viewGroup, false);
        ViewHolder viewHolder = new ViewHolder(v);
        return viewHolder;
    }

    @Override
    public void onBindViewHolder(ViewHolder viewHolder, int i) {
        viewHolder.nome_produto.setText(nome_produto.get(i));
        viewHolder.img_produto.setImageResource(image_produto.get(i));
        //viewHolder.descricao_produto.setText(descricao_produto.get(i));
        viewHolder.preco_produto.setText(preco_produto.get(i));
        viewHolder.marca_produto.setText(marca_produto.get(i));

        viewHolder.setClickListener(new ItemClickListener() {
            @Override
            public void onClick(View view, int position, boolean isLongClick) {
                if (isLongClick) {
                    Toast.makeText(context, "#" + position + " - " + nome_produto.get(position) + " (Long click)", Toast.LENGTH_SHORT).show();
                    context.startActivity(new Intent(context, MainActivity.class));
                } else {
                    Toast.makeText(context, "#" + position + " - " + nome_produto.get(position), Toast.LENGTH_SHORT).show();
                }
            }
        });
    }

    @Override
    public int getItemCount() {
        return nome_produto.size();
    }

    public static class ViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener, View.OnLongClickListener {

        public ImageView img_produto;
        public TextView nome_produto;
        public TextView marca_produto;
        public TextView descricao_produto;
        public TextView preco_produto;

        private ItemClickListener clickListener;

        public ViewHolder(View itemView) {
            super(itemView);
            img_produto = (ImageView) itemView.findViewById(R.id.img_produto);
            nome_produto = (TextView) itemView.findViewById(R.id.nome_produto);
            marca_produto = (TextView) itemView.findViewById(R.id.marca_produto);
            //descricao_produto = (TextView) itemView.findViewById(R.id.descricao_produto);
            preco_produto = (TextView) itemView.findViewById(R.id.preco_produto);

            itemView.setOnClickListener(this);
            itemView.setOnLongClickListener(this);
        }

        public void setClickListener(ItemClickListener itemClickListener) {
            this.clickListener = itemClickListener;
        }

        @Override
        public void onClick(View view) {
            clickListener.onClick(view, getPosition(), false);
        }

        @Override
        public boolean onLongClick(View view) {
            clickListener.onClick(view, getPosition(), true);
            return true;
        }
    }

}