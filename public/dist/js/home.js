var home = new Vue({
	el: '#home',
	data: {
		keyword: null,
		searchResult: null,
		addToCollectionVisibility: false,
		selectedCollectionToAdd: null,
		newCollectionTitle: null,
		addToExistingCollection: 'yes',
		collections: [],
		timeline: null
	},
	methods: {
		searchSites: function () {
			this.$http.get('/home/collections/sites/find', {params: {site: this.keyword}}).then(function (response) {
				this.searchResult = response.body
			})
		},
		getCollectionList: function () {
			this.$http.get('/home/collections').then(function (response) {
				this.collections = response.body
			})
		},
		addToCollection: function () {
			if (!this.addToCollectionVisibility) {
				this.addToCollectionVisibility = true
				return
			}

			if (this.addToExistingCollection === 'no') {
				this.$http.post('/home/collections', {
					collection_title: this.newCollectionTitle,
					site_id: this.searchResult.id,
					_token: csrf_token
				}).then(function (response) {
					this.searchResult = null
					this.newCollectionTitle = null
					this.getCollectionList()
				});
			} else {
				this.$http.post('/home/collections/add-site/' + this.selectedCollectionToAdd + '/' + this.searchResult.id, {
					_token: csrf_token
				})
				.then(function (response) {
					this.searchResult = null
					this.getCollectionList()
				})
			}
		},
		getTimeLine: function (url) {
			params = {}
			
			if (url) {
				params = {site: url}
			}

			this.$http.get('/home/collections/sites', {params: params}).then(function (response) {
				this.timeline = response.body
			})
		}
	}
});

home.getCollectionList()