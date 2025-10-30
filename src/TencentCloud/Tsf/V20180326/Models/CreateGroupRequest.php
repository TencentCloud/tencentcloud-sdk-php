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
 * CreateGroup请求参数结构体
 *
 * @method string getApplicationId() 获取部署组所属的【应用ID】，可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method void setApplicationId(string $ApplicationId) 设置部署组所属的【应用ID】，可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
 * @method string getNamespaceId() 获取部署组所属【命名空间ID】，可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method void setNamespaceId(string $NamespaceId) 设置部署组所属【命名空间ID】，可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getClusterId() 获取部署组所属的【集群ID】，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method void setClusterId(string $ClusterId) 设置部署组所属的【集群ID】，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
 * @method string getGroupDesc() 获取部署组描述
 * @method void setGroupDesc(string $GroupDesc) 设置部署组描述
 * @method string getGroupResourceType() 获取部署组资源类型；DEF 表示默认资源类型
 * @method void setGroupResourceType(string $GroupResourceType) 设置部署组资源类型；DEF 表示默认资源类型
 * @method string getAlias() 获取部署组备注
 * @method void setAlias(string $Alias) 设置部署组备注
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method string getK8sNamespaceName() 获取k8s命名空间名称
 * @method void setK8sNamespaceName(string $K8sNamespaceName) 设置k8s命名空间名称
 */
class CreateGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组所属的【应用ID】，可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     */
    public $ApplicationId;

    /**
     * @var string 部署组所属【命名空间ID】，可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     */
    public $NamespaceId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var string 部署组所属的【集群ID】，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     */
    public $ClusterId;

    /**
     * @var string 部署组描述
     */
    public $GroupDesc;

    /**
     * @var string 部署组资源类型；DEF 表示默认资源类型
     */
    public $GroupResourceType;

    /**
     * @var string 部署组备注
     */
    public $Alias;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var string k8s命名空间名称
     */
    public $K8sNamespaceName;

    /**
     * @param string $ApplicationId 部署组所属的【应用ID】，可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已创建的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)进行查看；也可以调用[CreateApplication](https://cloud.tencent.com/document/product/649/36094)创建新的应用。
     * @param string $NamespaceId 部署组所属【命名空间ID】，可通过调用[DescribeSimpleNamespaces](https://cloud.tencent.com/document/product/649/36096)查询已创建的命名空间列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=namespace)进行查看；也可以调用[CreateNamespace](https://cloud.tencent.com/document/product/649/36098)创建新的命名空间。
     * @param string $GroupName 部署组名称
     * @param string $ClusterId 部署组所属的【集群ID】，可通过调用[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已创建的集群列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=docker)进行查看；也可以调用[CreateCluster](https://cloud.tencent.com/document/product/649/36049)创建新的集群。
     * @param string $GroupDesc 部署组描述
     * @param string $GroupResourceType 部署组资源类型；DEF 表示默认资源类型
     * @param string $Alias 部署组备注
     * @param array $Tags 标签列表
     * @param string $K8sNamespaceName k8s命名空间名称
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupDesc",$param) and $param["GroupDesc"] !== null) {
            $this->GroupDesc = $param["GroupDesc"];
        }

        if (array_key_exists("GroupResourceType",$param) and $param["GroupResourceType"] !== null) {
            $this->GroupResourceType = $param["GroupResourceType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("K8sNamespaceName",$param) and $param["K8sNamespaceName"] !== null) {
            $this->K8sNamespaceName = $param["K8sNamespaceName"];
        }
    }
}
