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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBProxyAddress请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例 ID，指定要创建代理地址的目标实例</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例 ID，指定要创建代理地址的目标实例</p>
 * @method string getVpcId() 获取<p>VPC ID，代理地址所属的私有网络</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID，代理地址所属的私有网络</p>
 * @method string getSubnetId() 获取<p>子网 ID，代理地址所属的子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID，代理地址所属的子网</p>
 * @method string getProxyGroupId() 获取<p>代理组 ID。不传则按实例自动查找其默认代理组</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>代理组 ID。不传则按实例自动查找其默认代理组</p>
 * @method array getSecurityGroup() 获取<p>安全组 ID 列表，用于代理地址的网络安全控制</p>
 * @method void setSecurityGroup(array $SecurityGroup) 设置<p>安全组 ID 列表，用于代理地址的网络安全控制</p>
 * @method string getDescription() 获取<p>代理地址备注信息，最长 256 个字符</p>
 * @method void setDescription(string $Description) 设置<p>代理地址备注信息，最长 256 个字符</p>
 * @method boolean getConnectionPool() 获取<p>连接池开关。true：开启连接池；false：关闭连接池</p>
 * @method void setConnectionPool(boolean $ConnectionPool) 设置<p>连接池开关。true：开启连接池；false：关闭连接池</p>
 * @method string getWeightMode() 获取<p>权重模式。取值：<ul><li>system：系统自动分配权重</li><li>custom：手动指定权重，需配合 ProxyAllocation 参数使用</li></ul></p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式。取值：<ul><li>system：系统自动分配权重</li><li>custom：手动指定权重，需配合 ProxyAllocation 参数使用</li></ul></p>
 * @method array getProxyAllocation() 获取<p>路由权重列表。WeightMode 为 custom 时必填。若WeightMode传system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method void setProxyAllocation(array $ProxyAllocation) 设置<p>路由权重列表。WeightMode 为 custom 时必填。若WeightMode传system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method boolean getRoAutoAdd() 获取<p>是否自动将新增的只读实例加入读写分离。true：自动加入；false：不自动加入</p>
 * @method void setRoAutoAdd(boolean $RoAutoAdd) 设置<p>是否自动将新增的只读实例加入读写分离。true：自动加入；false：不自动加入</p>
 * @method boolean getLatencyRemove() 获取<p>延迟剔除开关。true：开启延迟剔除，当只读实例延迟超过阈值时自动剔除路由；false：关闭延迟剔除。开启时 LatencyRemoveTime 必填</p>
 * @method void setLatencyRemove(boolean $LatencyRemove) 设置<p>延迟剔除开关。true：开启延迟剔除，当只读实例延迟超过阈值时自动剔除路由；false：关闭延迟剔除。开启时 LatencyRemoveTime 必填</p>
 * @method integer getLatencyRemoveTime() 获取<p>延迟剔除阈值，单位秒，取值范围 [1, 10000]。LatencyRemove 为 true 时必填</p>
 * @method void setLatencyRemoveTime(integer $LatencyRemoveTime) 设置<p>延迟剔除阈值，单位秒，取值范围 [1, 10000]。LatencyRemove 为 true 时必填</p>
 * @method integer getMinRouteNum() 获取<p>最小路由节点数，取值范围 [0, 256]。用于防止延迟剔除将所有节点剔除后的兜底策略</p>
 * @method void setMinRouteNum(integer $MinRouteNum) 设置<p>最小路由节点数，取值范围 [0, 256]。用于防止延迟剔除将所有节点剔除后的兜底策略</p>
 * @method integer getLoadBalancePolicy() 获取<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 * @method void setLoadBalancePolicy(integer $LoadBalancePolicy) 设置<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 */
class CreateDBProxyAddressRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID，指定要创建代理地址的目标实例</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>VPC ID，代理地址所属的私有网络</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID，代理地址所属的子网</p>
     */
    public $SubnetId;

    /**
     * @var string <p>代理组 ID。不传则按实例自动查找其默认代理组</p>
     */
    public $ProxyGroupId;

    /**
     * @var array <p>安全组 ID 列表，用于代理地址的网络安全控制</p>
     */
    public $SecurityGroup;

    /**
     * @var string <p>代理地址备注信息，最长 256 个字符</p>
     */
    public $Description;

    /**
     * @var boolean <p>连接池开关。true：开启连接池；false：关闭连接池</p>
     */
    public $ConnectionPool;

    /**
     * @var string <p>权重模式。取值：<ul><li>system：系统自动分配权重</li><li>custom：手动指定权重，需配合 ProxyAllocation 参数使用</li></ul></p>
     */
    public $WeightMode;

    /**
     * @var array <p>路由权重列表。WeightMode 为 custom 时必填。若WeightMode传system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
     */
    public $ProxyAllocation;

    /**
     * @var boolean <p>是否自动将新增的只读实例加入读写分离。true：自动加入；false：不自动加入</p>
     */
    public $RoAutoAdd;

    /**
     * @var boolean <p>延迟剔除开关。true：开启延迟剔除，当只读实例延迟超过阈值时自动剔除路由；false：关闭延迟剔除。开启时 LatencyRemoveTime 必填</p>
     */
    public $LatencyRemove;

    /**
     * @var integer <p>延迟剔除阈值，单位秒，取值范围 [1, 10000]。LatencyRemove 为 true 时必填</p>
     */
    public $LatencyRemoveTime;

    /**
     * @var integer <p>最小路由节点数，取值范围 [0, 256]。用于防止延迟剔除将所有节点剔除后的兜底策略</p>
     */
    public $MinRouteNum;

    /**
     * @var integer <p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
     */
    public $LoadBalancePolicy;

    /**
     * @param string $DBInstanceId <p>实例 ID，指定要创建代理地址的目标实例</p>
     * @param string $VpcId <p>VPC ID，代理地址所属的私有网络</p>
     * @param string $SubnetId <p>子网 ID，代理地址所属的子网</p>
     * @param string $ProxyGroupId <p>代理组 ID。不传则按实例自动查找其默认代理组</p>
     * @param array $SecurityGroup <p>安全组 ID 列表，用于代理地址的网络安全控制</p>
     * @param string $Description <p>代理地址备注信息，最长 256 个字符</p>
     * @param boolean $ConnectionPool <p>连接池开关。true：开启连接池；false：关闭连接池</p>
     * @param string $WeightMode <p>权重模式。取值：<ul><li>system：系统自动分配权重</li><li>custom：手动指定权重，需配合 ProxyAllocation 参数使用</li></ul></p>
     * @param array $ProxyAllocation <p>路由权重列表。WeightMode 为 custom 时必填。若WeightMode传system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
     * @param boolean $RoAutoAdd <p>是否自动将新增的只读实例加入读写分离。true：自动加入；false：不自动加入</p>
     * @param boolean $LatencyRemove <p>延迟剔除开关。true：开启延迟剔除，当只读实例延迟超过阈值时自动剔除路由；false：关闭延迟剔除。开启时 LatencyRemoveTime 必填</p>
     * @param integer $LatencyRemoveTime <p>延迟剔除阈值，单位秒，取值范围 [1, 10000]。LatencyRemove 为 true 时必填</p>
     * @param integer $MinRouteNum <p>最小路由节点数，取值范围 [0, 256]。用于防止延迟剔除将所有节点剔除后的兜底策略</p>
     * @param integer $LoadBalancePolicy <p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyRoute();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }

        if (array_key_exists("RoAutoAdd",$param) and $param["RoAutoAdd"] !== null) {
            $this->RoAutoAdd = $param["RoAutoAdd"];
        }

        if (array_key_exists("LatencyRemove",$param) and $param["LatencyRemove"] !== null) {
            $this->LatencyRemove = $param["LatencyRemove"];
        }

        if (array_key_exists("LatencyRemoveTime",$param) and $param["LatencyRemoveTime"] !== null) {
            $this->LatencyRemoveTime = $param["LatencyRemoveTime"];
        }

        if (array_key_exists("MinRouteNum",$param) and $param["MinRouteNum"] !== null) {
            $this->MinRouteNum = $param["MinRouteNum"];
        }

        if (array_key_exists("LoadBalancePolicy",$param) and $param["LoadBalancePolicy"] !== null) {
            $this->LoadBalancePolicy = $param["LoadBalancePolicy"];
        }
    }
}
