<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigReleaseLogs请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method void setGroupId(string $GroupId) 设置部署组ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method string getNamespaceId() 获取命名空间ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method string getClusterId() 获取集群ID，不传入时查询全量。该参数可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/649/85857) 的返回值中的 ClusterId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method void setClusterId(string $ClusterId) 设置集群ID，不传入时查询全量。该参数可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/649/85857) 的返回值中的 ClusterId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method string getApplicationId() 获取应用ID，不传入时查询全量。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，不传入时查询全量。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 */
class DescribeConfigReleaseLogsRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     */
    public $GroupId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 命名空间ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 集群ID，不传入时查询全量。该参数可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/649/85857) 的返回值中的 ClusterId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     */
    public $ClusterId;

    /**
     * @var string 应用ID，不传入时查询全量。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @param string $GroupId 部署组ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleGroups](https://cloud.tencent.com/document/product/649/36064) 的返回值中的 GroupId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource)-查看部署组页查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param string $NamespaceId 命名空间ID，不传入时查询全量。该参数可以通过调用 [DescribeSimpleNamespaces](https://cloud.tencent.com/document/api/649/36096) 的返回值中的 NamespaceId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     * @param string $ClusterId 集群ID，不传入时查询全量。该参数可以通过调用 [DescribeClusters](https://cloud.tencent.com/document/product/649/85857) 的返回值中的 ClusterId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?tab=namespace)查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     * @param string $ApplicationId 应用ID，不传入时查询全量。该参数可以通过调用 [DescribeApplications](https://cloud.tencent.com/document/product/649/36090) 的返回值中的 ApplicationId 字段来获取或通过登录[控制台](https://console.cloud.tencent.com/tsf/app)查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
