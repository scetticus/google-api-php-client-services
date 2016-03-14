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
 * The "autoscalers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $computeService = new Google_Service_Compute(...);
 *   $autoscalers = $computeService->autoscalers;
 *  </code>
 */
class Google_Service_Compute_AutoscalersResource extends Google_Service_Resource
{
  /**
   * Retrieves an aggregated list of autoscalers. (autoscalers.aggregatedList)
   *
   * @param string $project Project ID for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Sets a filter expression for filtering listed
   * resources, in the form filter={expression}. Your {expression} must be in the
   * format: field_name comparison_string literal_string.
   *
   * The field_name is the name of the field you want to compare. Only atomic
   * field types are supported (string, number, boolean). The comparison_string
   * must be either eq (equals) or ne (not equals). The literal_string is the
   * string value to filter to. The literal value must be valid for the type of
   * field you are filtering by (string, number, boolean). For string fields, the
   * literal value is interpreted as a regular expression using RE2 syntax. The
   * literal value must match the entire field.
   *
   * For example, to filter for instances that do not have a name of example-
   * instance, you would use filter=name ne example-instance.
   *
   * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
   * also filter on nested fields. For example, you could filter on instances that
   * have set the scheduling.automaticRestart field to true. In particular, use
   * filtering on nested fields to take advantage of instance labels to organize
   * and filter results based on label values.
   *
   * The Beta API also supports filtering on multiple expressions by providing
   * each separate expression within parentheses. For example,
   * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
   * expressions are treated as AND expressions, meaning that resources must match
   * all expressions to pass the filters.
   * @opt_param string maxResults The maximum number of results per page that
   * should be returned. If the number of available results is larger than
   * maxResults, Compute Engine returns a nextPageToken that can be used to get
   * the next page of results in subsequent list requests.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_AutoscalerAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), "Google_Service_Compute_AutoscalerAggregatedList");
  }
  /**
   * Deletes the specified autoscaler. (autoscalers.delete)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param string $autoscaler Name of the autoscaler to delete.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Operation
   */
  public function delete($project, $zone, $autoscaler, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), "Google_Service_Compute_Operation");
  }
  /**
   * Returns the specified autoscaler resource. Get a list of available
   * autoscalers by making a list() request. (autoscalers.get)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param string $autoscaler Name of the autoscaler to return.
   * @param array $optParams Optional parameters.
   * @return Google_Service_Autoscaler
   */
  public function get($project, $zone, $autoscaler, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Google_Service_Compute_Autoscaler");
  }
  /**
   * Creates an autoscaler in the specified project using the data included in the
   * request. (autoscalers.insert)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param Google_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Operation
   */
  public function insert($project, $zone, Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "Google_Service_Compute_Operation");
  }
  /**
   * Retrieves a list of autoscalers contained within the specified zone.
   * (autoscalers.listAutoscalers)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter Sets a filter expression for filtering listed
   * resources, in the form filter={expression}. Your {expression} must be in the
   * format: field_name comparison_string literal_string.
   *
   * The field_name is the name of the field you want to compare. Only atomic
   * field types are supported (string, number, boolean). The comparison_string
   * must be either eq (equals) or ne (not equals). The literal_string is the
   * string value to filter to. The literal value must be valid for the type of
   * field you are filtering by (string, number, boolean). For string fields, the
   * literal value is interpreted as a regular expression using RE2 syntax. The
   * literal value must match the entire field.
   *
   * For example, to filter for instances that do not have a name of example-
   * instance, you would use filter=name ne example-instance.
   *
   * Compute Engine Beta API Only: If you use filtering in the Beta API, you can
   * also filter on nested fields. For example, you could filter on instances that
   * have set the scheduling.automaticRestart field to true. In particular, use
   * filtering on nested fields to take advantage of instance labels to organize
   * and filter results based on label values.
   *
   * The Beta API also supports filtering on multiple expressions by providing
   * each separate expression within parentheses. For example,
   * (scheduling.automaticRestart eq true) (zone eq us-central1-f). Multiple
   * expressions are treated as AND expressions, meaning that resources must match
   * all expressions to pass the filters.
   * @opt_param string maxResults The maximum number of results per page that
   * should be returned. If the number of available results is larger than
   * maxResults, Compute Engine returns a nextPageToken that can be used to get
   * the next page of results in subsequent list requests.
   * @opt_param string pageToken Specifies a page token to use. Set pageToken to
   * the nextPageToken returned by a previous list request to get the next page of
   * results.
   * @return Google_Service_AutoscalerList
   */
  public function listAutoscalers($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Google_Service_Compute_AutoscalerList");
  }
  /**
   * Updates an autoscaler in the specified project using the data included in the
   * request. This method supports patch semantics. (autoscalers.patch)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param string $autoscaler Name of the autoscaler to update.
   * @param Google_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   * @return Google_Service_Operation
   */
  public function patch($project, $zone, $autoscaler, Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'autoscaler' => $autoscaler, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "Google_Service_Compute_Operation");
  }
  /**
   * Updates an autoscaler in the specified project using the data included in the
   * request. (autoscalers.update)
   *
   * @param string $project Project ID for this request.
   * @param string $zone Name of the zone for this request.
   * @param Google_Autoscaler $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string autoscaler Name of the autoscaler to update.
   * @return Google_Service_Operation
   */
  public function update($project, $zone, Autoscaler $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Google_Service_Compute_Operation");
  }
}