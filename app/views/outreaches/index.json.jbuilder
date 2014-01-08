json.array!(@outreaches) do |outreach|
  json.extract! outreach, :id, :content
  json.url outreach_url(outreach, format: :json)
end
