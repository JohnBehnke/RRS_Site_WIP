class CreateMedia < ActiveRecord::Migration
  def change
    create_table :media do |t|
      t.text :content

      t.timestamps
    end
  end
end
