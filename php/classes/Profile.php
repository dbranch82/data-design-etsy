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
	 * constructor for this profile
	 *
	 * @param int|null $newProfile of this profile or null if a new Profile
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/

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
	public function setProfileId(int $profileId): void {
		//if profileId is null immediately return if
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}
		//verify that profileId is positive

		if($newProfileId <= 0) {
			throw(new \RangeException("profileId is not positive"));
		}
	}
	/**
	 * accessor method for profileActivationToken
	 *
	 * @return string value of profile activation token
	 **/
	public function getprofileActivationToken() : int{
		return($this->profileActivationToken);
	}

	/**
	 * mutator method for profileActivationToken
	 *
	 * @param int $newProfileActivationToken new value of tweet profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileActivationHandle(int $newProfileActivationToken) : void {

		// verify the profile id is positive
		if($newTweetProfileId <= 0) {
			throw(new \RangeException("tweet profile id is not positive"));
		}

		// convert and store the profile id
		$this->profileActivationToken = $newProfileActivationToken;
}