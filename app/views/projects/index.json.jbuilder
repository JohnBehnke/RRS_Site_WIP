json.array!(@projects) do |project|
  json.extract! project, :id, :content, :name
  json.url project_url(project, format: :json)
end
