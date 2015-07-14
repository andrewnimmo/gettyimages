<?php

namespace Getty\Api\Request\Search {

    use Getty\Api\Request\Search\Filters\EditorialSegmentFilter;

    class SearchVideosEditorial extends SearchVideos {

        /**
         * @ignore
         */
        protected $route = "search/videos/editorial/";

        /**
         * Gets the route configuration of the current search
         *
         * @return string The relative route for this request type
         */
        public function getRoute() {
            return $this->route;
        }
    }
}
