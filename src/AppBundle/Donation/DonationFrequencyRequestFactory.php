<?php

namespace AppBundle\Donation;

class DonationFrequencyRequestFactory
{
    public function create(): DonationTypeRequest
    {
        return new DonationTypeRequest();
    }
}
