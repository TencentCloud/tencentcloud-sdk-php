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
 * DescribeSimpleGroups请求参数结构体
 *
 * @method array getGroupIdList() 获取按照【部署组ID】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method void setGroupIdList(array $GroupIdList) 设置按照【部署组ID】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method string getApplicationId() 获取按照【应用ID】进行过滤，不填写时查询全量。可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置按照【应用ID】进行过滤，不填写时查询全量。可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method string getClusterId() 获取按照【集群ID】进行过滤，不填写时查询全量。可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method void setClusterId(string $ClusterId) 设置按照【集群ID】进行过滤，不填写时查询全量。可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method string getNamespaceId() 获取按照【命名空间ID】进行过滤，不填写时查询全量。可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置按照【命名空间ID】进行过滤，不填写时查询全量。可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method integer getLimit() 获取每页条数，默认值20，无上限
 * @method void setLimit(integer $Limit) 设置每页条数，默认值20，无上限
 * @method integer getOffset() 获取起始偏移量，默认值0
 * @method void setOffset(integer $Offset) 设置起始偏移量，默认值0
 * @method string getGroupId() 获取部署组ID，不填写时查询全量
 * @method void setGroupId(string $GroupId) 设置部署组ID，不填写时查询全量
 * @method string getSearchWord() 获取模糊查询，部署组名称，不填写时查询全量
 * @method void setSearchWord(string $SearchWord) 设置模糊查询，部署组名称，不填写时查询全量
 * @method string getAppMicroServiceType() 获取部署组类型，精确过滤字段，M：service mesh, P：原生应用， G：网关应用
 * @method void setAppMicroServiceType(string $AppMicroServiceType) 设置部署组类型，精确过滤字段，M：service mesh, P：原生应用， G：网关应用
 * @method string getGroupName() 获取按照【部署组名称】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 * @method void setGroupName(string $GroupName) 设置按照【部署组名称】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
 */
class DescribeSimpleGroupsRequest extends AbstractModel
{
    /**
     * @var array 按照【部署组ID】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     */
    public $GroupIdList;

    /**
     * @var string 按照【应用ID】进行过滤，不填写时查询全量。可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var string 按照【集群ID】进行过滤，不填写时查询全量。可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     */
    public $ClusterId;

    /**
     * @var string 按照【命名空间ID】进行过滤，不填写时查询全量。可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     */
    public $NamespaceId;

    /**
     * @var integer 每页条数，默认值20，无上限
     */
    public $Limit;

    /**
     * @var integer 起始偏移量，默认值0
     */
    public $Offset;

    /**
     * @var string 部署组ID，不填写时查询全量
     */
    public $GroupId;

    /**
     * @var string 模糊查询，部署组名称，不填写时查询全量
     */
    public $SearchWord;

    /**
     * @var string 部署组类型，精确过滤字段，M：service mesh, P：原生应用， G：网关应用
     */
    public $AppMicroServiceType;

    /**
     * @var string 按照【部署组名称】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     */
    public $GroupName;

    /**
     * @param array $GroupIdList 按照【部署组ID】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
     * @param string $ApplicationId 按照【应用ID】进行过滤，不填写时查询全量。可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     * @param string $ClusterId 按照【集群ID】进行过滤，不填写时查询全量。可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     * @param string $NamespaceId 按照【命名空间ID】进行过滤，不填写时查询全量。可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     * @param integer $Limit 每页条数，默认值20，无上限
     * @param integer $Offset 起始偏移量，默认值0
     * @param string $GroupId 部署组ID，不填写时查询全量
     * @param string $SearchWord 模糊查询，部署组名称，不填写时查询全量
     * @param string $AppMicroServiceType 部署组类型，精确过滤字段，M：service mesh, P：原生应用， G：网关应用
     * @param string $GroupName 按照【部署组名称】进行过滤，不填写时查询全量。可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-zvw6zp9a&tab=publish&subTab=group)进行查看；也可以调用[CreateGroup](https://cloud.tencent.com/document/product/649/36074)创建新的部署组。
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
        if (array_key_exists("GroupIdList",$param) and $param["GroupIdList"] !== null) {
            $this->GroupIdList = $param["GroupIdList"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("AppMicroServiceType",$param) and $param["AppMicroServiceType"] !== null) {
            $this->AppMicroServiceType = $param["AppMicroServiceType"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
