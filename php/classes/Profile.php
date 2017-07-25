<?php

/**Section of Profile information
 *
 * This information is an example of what is stored when someone uses their profile. This
 * can be used for other information used in Etsy.
 * Created by PhpStorm.
 * @Author  Danielle Branch <dbranch6@cnm.edu>
 * Date: 7/24/17
 * Time: 2:47 PM
 * version 1.1
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
	 * @param int|null $newProfileId of this profile or null if a new Profile
	 * @throws \InvalidArgumentException if data types are not valid
	 * @throws \RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws \TypeError if data types violate type hints
	 * @throws \Exception if some other exception occurs
	 * @Documentation https://php.net/manual/en/language.oop5.decon.php
	 **/

	public function __construct(?int $newProfileId, string $newProfileActivationToken, string $newProfileAtHandle, $newProfileEmail, $newProfilePhone, $newProfileHash, $newProfileSalt = null) {
		try {
			$this->setProfileId($newProfileId);
			$this->setProfileActivationToken($newProfileActivationToken);
			$this->setProfileAtHandle($newProfileAtHandle);
			$this->setProfileEmail($newProfileEmail);
			$this->setProfilePhone($newProfilePhone);
			$this->setprofileHash($newProfileHash);
			$this->setprofileSalt($newProfileSalt);
		} //determine what exception type was thrown
		catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}

	/**
	 * accessor method for profile id
	 *
	 * @return int|null value of profile id
	 **/
	public function getProfileId(): int {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int|null $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileId(?int $newProfileId): void {
		//if profile id is null immediately return it
		if($newProfileId === null) {
			$this->profileId = null;
			return;
		}

		// verify the profile id is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profile id is not positive"));
		}

		// convert and store the profile id
		$this->profileId = $newProfileId;
	}

	/**
	 * accessor method for profile Activation Token
	 *
	 * @return int value of profile Activation Token
	 **/
	public function getProfileActivationToken(): string {
		return ($this->profileActivationToken);
	}

	/**
	 * mutator method for profileActivationToken
	 *
	 * @param int $newProfileActivationToken new value of profile Activation Token
	 * @throws \RangeException if $newProfileActivationToken is not positive
	 * @throws \TypeError if $newProfileActivationToken is not a string
	 **/
	public function setProfileActivationToken(string $newProfileActivationToken): void {

		// verify the profile id is positive
		if(empty($newProfileActivationToken) === true) {
			throw(new \InvalidArgumentException("profile activation token is empty or insecure"));
		}

		// convert and store the profile id
		$this->profileActivationToken = $newProfileActivationToken;
	}

	/**
	 * accessor method for profile At Handle
	 *
	 * @return string value of profile At Handle
	 **/
	public function getProfileAtHandle(): string {
		return ($this->profileAtHandle);
	}

	/**
	 * mutator method for profile At Handle
	 *
	 * @param string $newProfileAtHandle new value of profile at handle
	 * @throws \InvalidArgumentException if $newProfileAtHandle is not a string or insecure
	 * @throws \RangeException if $newProfileAtHandle is > 10 characters
	 * @throws \TypeError if $newProfileAtHandle is not a string
	 **/
	public function setProfileAtHandle(string $newProfileAtHandle): void {
		// verify the At handle is secure
		$newProfileAtHandle = trim($newProfileAtHandle);
		$newProfileAtHandle = filter_var($newProfileAtHandle, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newProfileAtHandle) === true) {
			throw(new \InvalidArgumentException("profile at handle is empty or insecure"));
		}
		// verify the tweet content will fit in the database
		if(strlen($newProfileAtHandle) > 10) {
			throw(new \RangeException("profile at handle content too large"));
		}

// store the profile at handle content
		$this->profileAtHandle = $newProfileAtHandle;
	}

	/**
	 * accessor method for profile email
	 *
	 * @return string value of profile email
	 **/
	public function getProfileEmail() {
		return ($this->profileEmail);
	}

	/**
	 * mutator method for profile Email
	 *
	 * @throws \InvalidArgumentException if $newProfileEmail is not a valid object or string
	 * @throws \RangeException if $newProfileEmail already exists
	 **/
	public function setProfileEmail($newProfileEmail = null): void {
		// base case: if the date is null, return error
		if($newProfileEmail === null) {
			$this->profileEmail = new \profileEmail();
			return;
		}
	}

	/**
	 * accessor method for profile phone
	 *
	 * @return string value of profile phone
	 **/
	public function getProfilePhone() {
		return ($this->profilePhone);
	}

	/**
	 * mutator method for profile phone
	 *
	 * @param int|null $newProfilePhone new value of profile phone
	 * @throws \RangeException if $newProfilePhone is not positive
	 * @throws \TypeError if $newProfilePhone is not a string
	 **/
	public function setProfilePhone(?int $newProfilePhone): void {
		//if profile phone is null immediately return it
		if($newProfilePhone === null) {
			$this->profilePhone = null;
			return;
		}
	}

	/**
	 * accessor method for profile hash
	 *
	 * @return string value of profile hash
	 **/
	public function getProfileHash() {
		return ($this->profileHash);
	}

	/**
	 * mutator method for profile phone
	 *
	 * @param int|null $newProfileHash new value of profile hash
	 * @throws \RangeException if $newProfileHash is not positive
	 * @throws \TypeError if $newProfileHash is not a string
	 **/
	public function setProfileHash(?int $newProfileHash): void {
		//if profile hash is null immediately return it
		if($newProfileHash === null) {
			$this->profileHash = null;
			return;
		}
	}

	/**
	 * accessor method for profile salt
	 *
	 * @return string value of profile salt
	 **/
	public function getProfileSalt() {
		return ($this->profileSalt);
	}

	/**
	 * mutator method for profile salt
	 *
	 * @param int|null $newProfileSalt new value of profile salt
	 * @throws \RangeException if $newProfileSalt is not positive
	 * @throws \TypeError if $newProfileSalt is not a string
	 **/
	public function setProfileSalt(?int $newProfileSalt): void {
		//if profile salt is null immediately return it
		if($newProfileSalt === null) {
			$this->profileSalt = null;
			return;
		}
	}
}

