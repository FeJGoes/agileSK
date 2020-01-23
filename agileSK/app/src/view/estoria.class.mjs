class Estoria {
    /**
     * 
     * @param {String} title 
     * @param {Number} status 
     * @param {String} owner 
     * @param {String} worker 
     * @param {String} category 
     * @param {String} projectName 
     * @param {String} description 
     * @param {Date} createdAt 
     * @param {Date} updatedAt 
     * @param {String} jobStep 
     */

    constructor (title, status, owner, worker, category, projectName, description, createdAt, updatedAt, jobStep){
        this.title = title;
        this.status = status;
        this.owner = owner;
        this.worker = worker;
        this.category = category;
        this.projectName = projectName;
        this.description = description;
        this.createdAt = createdAt;
        this.updatedAt = updatedAt;
        this.jobStep = jobStep;
    }



    
}


