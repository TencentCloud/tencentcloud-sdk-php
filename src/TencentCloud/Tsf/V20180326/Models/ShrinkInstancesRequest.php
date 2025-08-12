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
 * ShrinkInstances请求参数结构体
 *
 * @method string getGroupId() 获取部署组ID，可通过调用[获取虚拟机部署组列表](https://cloud.tencent.com/document/api/649/36065)接口时出参中的Result.Content.GroupId，或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-aaaaaaaa&tab=publish&subTab=group)选择对应应用进入应用部署页面查看，同时也是调用[创建部署组](https://cloud.tencent.com/document/api/649/36074)接口返回的Result值
 * @method void setGroupId(string $GroupId) 设置部署组ID，可通过调用[获取虚拟机部署组列表](https://cloud.tencent.com/document/api/649/36065)接口时出参中的Result.Content.GroupId，或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-aaaaaaaa&tab=publish&subTab=group)选择对应应用进入应用部署页面查看，同时也是调用[创建部署组](https://cloud.tencent.com/document/api/649/36074)接口返回的Result值
 * @method array getInstanceIdList() 获取实例ID列表，实例ID可通过调用[查询虚拟机部署组云主机列表](https://cloud.tencent.com/document/product/649/36066)接口时出参中的Result.Content.InstanceId，或登录[控制台](https://console.cloud.tencent.com/tsf/resource-detail?rid=1&id=cluster-aaaaaaaa)选择对应的虚拟机集群查看云主机信息，同时也是[集群添加云主机](https://cloud.tencent.com/document/product/649/41225?ls=doc-search!current)接口的的返回值Result中的节点列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置实例ID列表，实例ID可通过调用[查询虚拟机部署组云主机列表](https://cloud.tencent.com/document/product/649/36066)接口时出参中的Result.Content.InstanceId，或登录[控制台](https://console.cloud.tencent.com/tsf/resource-detail?rid=1&id=cluster-aaaaaaaa)选择对应的虚拟机集群查看云主机信息，同时也是[集群添加云主机](https://cloud.tencent.com/document/product/649/41225?ls=doc-search!current)接口的的返回值Result中的节点列表
 */
class ShrinkInstancesRequest extends AbstractModel
{
    /**
     * @var string 部署组ID，可通过调用[获取虚拟机部署组列表](https://cloud.tencent.com/document/api/649/36065)接口时出参中的Result.Content.GroupId，或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-aaaaaaaa&tab=publish&subTab=group)选择对应应用进入应用部署页面查看，同时也是调用[创建部署组](https://cloud.tencent.com/document/api/649/36074)接口返回的Result值
     */
    public $GroupId;

    /**
     * @var array 实例ID列表，实例ID可通过调用[查询虚拟机部署组云主机列表](https://cloud.tencent.com/document/product/649/36066)接口时出参中的Result.Content.InstanceId，或登录[控制台](https://console.cloud.tencent.com/tsf/resource-detail?rid=1&id=cluster-aaaaaaaa)选择对应的虚拟机集群查看云主机信息，同时也是[集群添加云主机](https://cloud.tencent.com/document/product/649/41225?ls=doc-search!current)接口的的返回值Result中的节点列表
     */
    public $InstanceIdList;

    /**
     * @param string $GroupId 部署组ID，可通过调用[获取虚拟机部署组列表](https://cloud.tencent.com/document/api/649/36065)接口时出参中的Result.Content.GroupId，或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-aaaaaaaa&tab=publish&subTab=group)选择对应应用进入应用部署页面查看，同时也是调用[创建部署组](https://cloud.tencent.com/document/api/649/36074)接口返回的Result值
     * @param array $InstanceIdList 实例ID列表，实例ID可通过调用[查询虚拟机部署组云主机列表](https://cloud.tencent.com/document/product/649/36066)接口时出参中的Result.Content.InstanceId，或登录[控制台](https://console.cloud.tencent.com/tsf/resource-detail?rid=1&id=cluster-aaaaaaaa)选择对应的虚拟机集群查看云主机信息，同时也是[集群添加云主机](https://cloud.tencent.com/document/product/649/41225?ls=doc-search!current)接口的的返回值Result中的节点列表
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

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }
    }
}
