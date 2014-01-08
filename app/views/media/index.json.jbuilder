json.array!(@media) do |medium|
  json.extract! medium, :id, :content
  json.url medium_url(medium, format: :json)
end
