class CreateDocuments < ActiveRecord::Migration
  def change
    create_table :documents do |t|
      t.string :name
      t.string :docUrl
      t.string :txtUrl

      t.timestamps
    end
  end
end
