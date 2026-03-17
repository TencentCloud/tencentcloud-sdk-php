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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRaspLicenseList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件
- AssetType 资产类型(CWP 主机安全资产, TCSS_HOST 容器主机节点,TCSS_EKS 容器超级节点)
- PluginStatus 插件状态(Normal 使用正常,Abnormal 存在异常,Unused 未使用)
- ProtectionSwitch 防护开关(Enable 开启,Disable 未开启)
- ProtectionVersion 防护版本(Rasp 重保授权包,Unauthorized 未授权)
- InstanceID 实例ID
- InstanceName 实例名称
- InstanceIP 实例IP(内网IP/外网IP)
- NodeID 容器节点ID
- NodeName 容器节点名称
- ClusterID 容器集群ID
- ClusterName 容器集群名称
 * @method void setFilters(array $Filters) 设置过滤条件
- AssetType 资产类型(CWP 主机安全资产, TCSS_HOST 容器主机节点,TCSS_EKS 容器超级节点)
- PluginStatus 插件状态(Normal 使用正常,Abnormal 存在异常,Unused 未使用)
- ProtectionSwitch 防护开关(Enable 开启,Disable 未开启)
- ProtectionVersion 防护版本(Rasp 重保授权包,Unauthorized 未授权)
- InstanceID 实例ID
- InstanceName 实例名称
- InstanceIP 实例IP(内网IP/外网IP)
- NodeID 容器节点ID
- NodeName 容器节点名称
- ClusterID 容器集群ID
- ClusterName 容器集群名称
 * @method integer getLimit() 获取限制条数,默认10
 * @method void setLimit(integer $Limit) 设置限制条数,默认10
 * @method integer getOffset() 获取偏移量,默认0
 * @method void setOffset(integer $Offset) 设置偏移量,默认0
 * @method string getOrder() 获取排序方式,ASC 正序,DESC 倒序
 * @method void setOrder(string $Order) 设置排序方式,ASC 正序,DESC 倒序
 * @method string getBy() 获取排序值
- LatestUpdateTime 最近更新时间
 * @method void setBy(string $By) 设置排序值
- LatestUpdateTime 最近更新时间
 */
class DescribeRaspLicenseListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件
- AssetType 资产类型(CWP 主机安全资产, TCSS_HOST 容器主机节点,TCSS_EKS 容器超级节点)
- PluginStatus 插件状态(Normal 使用正常,Abnormal 存在异常,Unused 未使用)
- ProtectionSwitch 防护开关(Enable 开启,Disable 未开启)
- ProtectionVersion 防护版本(Rasp 重保授权包,Unauthorized 未授权)
- InstanceID 实例ID
- InstanceName 实例名称
- InstanceIP 实例IP(内网IP/外网IP)
- NodeID 容器节点ID
- NodeName 容器节点名称
- ClusterID 容器集群ID
- ClusterName 容器集群名称
     */
    public $Filters;

    /**
     * @var integer 限制条数,默认10
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0
     */
    public $Offset;

    /**
     * @var string 排序方式,ASC 正序,DESC 倒序
     */
    public $Order;

    /**
     * @var string 排序值
- LatestUpdateTime 最近更新时间
     */
    public $By;

    /**
     * @param array $Filters 过滤条件
- AssetType 资产类型(CWP 主机安全资产, TCSS_HOST 容器主机节点,TCSS_EKS 容器超级节点)
- PluginStatus 插件状态(Normal 使用正常,Abnormal 存在异常,Unused 未使用)
- ProtectionSwitch 防护开关(Enable 开启,Disable 未开启)
- ProtectionVersion 防护版本(Rasp 重保授权包,Unauthorized 未授权)
- InstanceID 实例ID
- InstanceName 实例名称
- InstanceIP 实例IP(内网IP/外网IP)
- NodeID 容器节点ID
- NodeName 容器节点名称
- ClusterID 容器集群ID
- ClusterName 容器集群名称
     * @param integer $Limit 限制条数,默认10
     * @param integer $Offset 偏移量,默认0
     * @param string $Order 排序方式,ASC 正序,DESC 倒序
     * @param string $By 排序值
- LatestUpdateTime 最近更新时间
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
