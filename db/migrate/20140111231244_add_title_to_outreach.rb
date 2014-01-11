class AddTitleToOutreach < ActiveRecord::Migration
  def change
    add_column :outreaches, :title, :string
  end
end
