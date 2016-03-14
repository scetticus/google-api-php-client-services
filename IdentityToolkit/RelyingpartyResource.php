<?php
/*
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * The "relyingparty" collection of methods.
 * Typical usage is:
 *  <code>
 *   $identitytoolkitService = new Google_Service_IdentityToolkit(...);
 *   $relyingparty = $identitytoolkitService->relyingparty;
 *  </code>
 */
class Google_Service_IdentityToolkit_RelyingpartyResource extends Google_Service_Resource
{
  /**
   * Creates the URI used by the IdP to authenticate the user.
   * (relyingparty.createAuthUri)
   *
   * @param Google_IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_CreateAuthUriResponse
   */
  public function createAuthUri(IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createAuthUri', array($params), "Google_Service_IdentityToolkit_CreateAuthUriResponse");
  }
  /**
   * Delete user account. (relyingparty.deleteAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DeleteAccountResponse
   */
  public function deleteAccount(IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccount', array($params), "Google_Service_IdentityToolkit_DeleteAccountResponse");
  }
  /**
   * Batch download user accounts. (relyingparty.downloadAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_DownloadAccountResponse
   */
  public function downloadAccount(IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('downloadAccount', array($params), "Google_Service_IdentityToolkit_DownloadAccountResponse");
  }
  /**
   * Returns the account info. (relyingparty.getAccountInfo)
   *
   * @param Google_IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GetAccountInfoResponse
   */
  public function getAccountInfo(IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getAccountInfo', array($params), "Google_Service_IdentityToolkit_GetAccountInfoResponse");
  }
  /**
   * Get a code for user action confirmation.
   * (relyingparty.getOobConfirmationCode)
   *
   * @param Google_Relyingparty $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_GetOobConfirmationCodeResponse
   */
  public function getOobConfirmationCode(Relyingparty $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getOobConfirmationCode', array($params), "Google_Service_IdentityToolkit_GetOobConfirmationCodeResponse");
  }
  /**
   * Get project configuration. (relyingparty.getProjectConfig)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string delegatedProjectNumber Delegated GCP project number of the
   * request.
   * @opt_param string projectNumber GCP project number of the request.
   * @return Google_Service_IdentitytoolkitRelyingpartyGetProjectConfigResponse
   */
  public function getProjectConfig($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getProjectConfig', array($params), "Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetProjectConfigResponse");
  }
  /**
   * Get token signing public key. (relyingparty.getPublicKeys)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentitytoolkitRelyingpartyGetPublicKeysResponse
   */
  public function getPublicKeys($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getPublicKeys', array($params), "Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartyGetPublicKeysResponse");
  }
  /**
   * Get recaptcha secure param. (relyingparty.getRecaptchaParam)
   *
   * @param array $optParams Optional parameters.
   * @return Google_Service_GetRecaptchaParamResponse
   */
  public function getRecaptchaParam($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('getRecaptchaParam', array($params), "Google_Service_IdentityToolkit_GetRecaptchaParamResponse");
  }
  /**
   * Reset password for a user. (relyingparty.resetPassword)
   *
   * @param Google_IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_ResetPasswordResponse
   */
  public function resetPassword(IdentitytoolkitRelyingpartyResetPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resetPassword', array($params), "Google_Service_IdentityToolkit_ResetPasswordResponse");
  }
  /**
   * Set account info for a user. (relyingparty.setAccountInfo)
   *
   * @param Google_IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SetAccountInfoResponse
   */
  public function setAccountInfo(IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAccountInfo', array($params), "Google_Service_IdentityToolkit_SetAccountInfoResponse");
  }
  /**
   * Set project configuration. (relyingparty.setProjectConfig)
   *
   * @param Google_IdentitytoolkitRelyingpartySetProjectConfigRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentitytoolkitRelyingpartySetProjectConfigResponse
   */
  public function setProjectConfig(IdentitytoolkitRelyingpartySetProjectConfigRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setProjectConfig', array($params), "Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySetProjectConfigResponse");
  }
  /**
   * Sign out user. (relyingparty.signOutUser)
   *
   * @param Google_IdentitytoolkitRelyingpartySignOutUserRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_IdentitytoolkitRelyingpartySignOutUserResponse
   */
  public function signOutUser(IdentitytoolkitRelyingpartySignOutUserRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signOutUser', array($params), "Google_Service_IdentityToolkit_IdentitytoolkitRelyingpartySignOutUserResponse");
  }
  /**
   * Signup new user. (relyingparty.signupNewUser)
   *
   * @param Google_IdentitytoolkitRelyingpartySignupNewUserRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_SignupNewUserResponse
   */
  public function signupNewUser(IdentitytoolkitRelyingpartySignupNewUserRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('signupNewUser', array($params), "Google_Service_IdentityToolkit_SignupNewUserResponse");
  }
  /**
   * Batch upload existing user accounts. (relyingparty.uploadAccount)
   *
   * @param Google_IdentitytoolkitRelyingpartyUploadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_UploadAccountResponse
   */
  public function uploadAccount(IdentitytoolkitRelyingpartyUploadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('uploadAccount', array($params), "Google_Service_IdentityToolkit_UploadAccountResponse");
  }
  /**
   * Verifies the assertion returned by the IdP. (relyingparty.verifyAssertion)
   *
   * @param Google_IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_VerifyAssertionResponse
   */
  public function verifyAssertion(IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyAssertion', array($params), "Google_Service_IdentityToolkit_VerifyAssertionResponse");
  }
  /**
   * Verifies the developer asserted ID token. (relyingparty.verifyCustomToken)
   *
   * @param Google_IdentitytoolkitRelyingpartyVerifyCustomTokenRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_VerifyCustomTokenResponse
   */
  public function verifyCustomToken(IdentitytoolkitRelyingpartyVerifyCustomTokenRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyCustomToken', array($params), "Google_Service_IdentityToolkit_VerifyCustomTokenResponse");
  }
  /**
   * Verifies the user entered password. (relyingparty.verifyPassword)
   *
   * @param Google_IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_VerifyPasswordResponse
   */
  public function verifyPassword(IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyPassword', array($params), "Google_Service_IdentityToolkit_VerifyPasswordResponse");
  }
}