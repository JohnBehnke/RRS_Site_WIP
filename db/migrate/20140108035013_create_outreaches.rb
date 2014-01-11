class CreateOutreaches < ActiveRecord::Migration
  def change
    create_table :outreaches do |t|
      t.text :content

      t.timestamps
    end
  end
end
