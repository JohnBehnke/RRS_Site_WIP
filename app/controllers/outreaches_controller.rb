class OutreachesController < ApplicationController
  before_action :set_outreach, only: [:show, :edit, :update, :destroy]
  load_and_authorize_resource
  # GET /outreaches
  # GET /outreaches.json
  def index
    @outreaches = Outreach.all.reverse
  end

  # GET /outreaches/1
  # GET /outreaches/1.json
  def show
  end

  # GET /outreaches/new
  def new
    @outreach = Outreach.new
  end

  # GET /outreaches/1/edit
  def edit
  end

  # POST /outreaches
  # POST /outreaches.json
  def create
    @outreach = Outreach.new(outreach_params)

    respond_to do |format|
      if @outreach.save
        format.html { redirect_to @outreach, notice: 'Outreach was successfully created.' }
        format.json { render action: 'show', status: :created, location: @outreach }
      else
        format.html { render action: 'new' }
        format.json { render json: @outreach.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /outreaches/1
  # PATCH/PUT /outreaches/1.json
  def update
    respond_to do |format|
      if @outreach.update(outreach_params)
        format.html { redirect_to @outreach, notice: 'Outreach was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: 'edit' }
        format.json { render json: @outreach.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /outreaches/1
  # DELETE /outreaches/1.json
  def destroy
    @outreach.destroy
    respond_to do |format|
      format.html { redirect_to outreaches_url }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_outreach
      @outreach = Outreach.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def outreach_params
      params.require(:outreach).permit(:content, :title)
    end
end
