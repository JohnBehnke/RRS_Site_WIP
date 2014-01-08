class CreateHomes < ActiveRecord::Migration
  def change
    create_table :homes do |t|
      t.string :content

      t.timestamps
    end
  end
end
