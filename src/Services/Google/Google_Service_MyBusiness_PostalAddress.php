<?php

namespace Tipoff\GoogleApi\Services\Google;

use Google_Collection;

class Google_Service_MyBusiness_PostalAddress extends Google_Collection
{
    protected $collection_key = 'recipients';
    protected $internal_gapi_mappings = [];
    public $addressLines;
    public $administrativeArea;
    public $languageCode;
    public $locality;
    public $organization;
    public $postalCode;
    public $recipients;
    public $regionCode;
    public $revision;
    public $sortingCode;
    public $sublocality;

    public function setAddressLines($addressLines)
    {
        $this->addressLines = $addressLines;
    }

    public function getAddressLines()
    {
        return $this->addressLines;
    }

    public function setAdministrativeArea($administrativeArea)
    {
        $this->administrativeArea = $administrativeArea;
    }

    public function getAdministrativeArea()
    {
        return $this->administrativeArea;
    }

    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    public function setLocality($locality)
    {
        $this->locality = $locality;
    }

    public function getLocality()
    {
        return $this->locality;
    }

    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    public function getOrganization()
    {
        return $this->organization;
    }

    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
    }

    public function getRecipients()
    {
        return $this->recipients;
    }

    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
    }

    public function getRegionCode()
    {
        return $this->regionCode;
    }

    public function setRevision($revision)
    {
        $this->revision = $revision;
    }

    public function getRevision()
    {
        return $this->revision;
    }

    public function setSortingCode($sortingCode)
    {
        $this->sortingCode = $sortingCode;
    }

    public function getSortingCode()
    {
        return $this->sortingCode;
    }

    public function setSublocality($sublocality)
    {
        $this->sublocality = $sublocality;
    }

    public function getSublocality()
    {
        return $this->sublocality;
    }
}
