<?php


/**
 * Skeleton subclass for representing a row from the 'jobeet_category' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Mon Feb 15 17:02:39 2016
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class JobeetCategory extends BaseJobeetCategory {

    public function __toString() {
        return $this->getName();
    }

    public function getActiveJobs($max = 10) {
        $criteria = new Criteria();
        $criteria->add(JobeetJobPeer::CATEGORY_ID, $this->getId());
        $criteria->setLimit($max);

        return JobeetJobPeer::getActiveJobs($criteria);
    }

    public function getSlug() {
        return Jobeet::slugify($this->getName());
    }

    public function countActiveJobs() {
        $criteria = new Criteria();
        $criteria->add(JobeetJobPeer::CATEGORY_ID, $this->getId());

        return JobeetJobPeer::countActiveJobs($criteria);
    }
} // JobeetCategory
