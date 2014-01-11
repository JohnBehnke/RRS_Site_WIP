json.array!(@documents) do |document|
  json.extract! document, :id, :name, :docUrl, :txtUrl
  json.url document_url(document, format: :json)
end
