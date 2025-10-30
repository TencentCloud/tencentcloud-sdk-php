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
 * 日志投递kafka用，描述部署组信息
 *
 * @method string getGroupId() 获取部署组ID
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看。
 * @method void setGroupId(string $GroupId) 设置部署组ID
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看。
 * @method string getGroupName() 获取部署组名称
 * @method void setGroupName(string $GroupName) 设置部署组名称
 * @method string getClusterType() 获取集群类型，C：容器集群，V：虚拟机集群
 * @method void setClusterType(string $ClusterType) 设置集群类型，C：容器集群，V：虚拟机集群
 * @method string getClusterId() 获取集群ID
可通过[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已经创建的集群列表，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1)查看。
 * @method void setClusterId(string $ClusterId) 设置集群ID
可通过[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已经创建的集群列表，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1)查看。
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getAssociateTime() 获取绑定时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setAssociateTime(string $AssociateTime) 设置绑定时间，格式yyyy-MM-dd HH:mm:ss
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 部署组ID
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看。
     */
    public $GroupId;

    /**
     * @var string 部署组名称
     */
    public $GroupName;

    /**
     * @var string 集群类型，C：容器集群，V：虚拟机集群
     */
    public $ClusterType;

    /**
     * @var string 集群ID
可通过[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已经创建的集群列表，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1)查看。
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 绑定时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $AssociateTime;

    /**
     * @param string $GroupId 部署组ID
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看。
     * @param string $GroupName 部署组名称
     * @param string $ClusterType 集群类型，C：容器集群，V：虚拟机集群
     * @param string $ClusterId 集群ID
可通过[DescribeClusters](https://cloud.tencent.com/document/product/649/85857)查询已经创建的集群列表，也可以通过登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1)查看。
     * @param string $ClusterName 集群名称
     * @param string $NamespaceName 命名空间名称
     * @param string $AssociateTime 绑定时间，格式yyyy-MM-dd HH:mm:ss
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

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("AssociateTime",$param) and $param["AssociateTime"] !== null) {
            $this->AssociateTime = $param["AssociateTime"];
        }
    }
}
