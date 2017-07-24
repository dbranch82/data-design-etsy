<?php

/**Section of Profile information
 *
 * This information is an example of what is stored when someone uses their profile. This
 * can be used for other information used in Etsy.
 * Created by PhpStorm.
 * User: dbranch6
 * Date: 7/24/17
 * Time: 2:47 PM
 */
class Profile {
	/**
	 *id for this profile; this is the primary key
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 *Random token that activates profile
	 * @var int $profileActivationToken
	 *
	 **/
	private $profileActivationToken;
	/**
	 *User created information to identify user
	 * @var string $profileAtHandle
	 *
	 **/
	private $profileAtHandle;
	/**
	 * Email address used to identify user
	 * @var string $profileEmail
	 *
	 **/
	private $profileEmail;
	/**
	 * Phone number that is attached to user
	 * @var string $profilePhone
	 *
	 **/
	private $profilePhone;
	/**
	 * Hash for profile Password
	 * @var string $profileHash
	 *
	 **/
	private $profileHash;
	/**
	 *Salt for profile password
	 * @var string $profileSalt
	 *
	 **/
	private $profileSalt;

	/**
	 * accessor method for profileId
	 *
	 * @return int|null value of profileId
	 *
	 **/
	/**
	 * @return int
	 */
	public function getProfileId(): int {
		return $this->profileId;
	}
	/**
	 *mutator method for profileId
	 *
	 * @param int|null $newProfileId new value of profile Id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 *
	 **/
	public function setProfileId(int $profileId) {
		$this->profileId = $profileId;
	}
}