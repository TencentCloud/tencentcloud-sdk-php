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
 * ModifyDBProxyAddress请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID</p>
 * @method string getAddressId() 获取<p>Proxy地址ID</p>
 * @method void setAddressId(string $AddressId) 设置<p>Proxy地址ID</p>
 * @method string getProxyGroupId() 获取<p>Proxy代理组 ID（不传则默认操作该实例下唯一的代理）</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>Proxy代理组 ID（不传则默认操作该实例下唯一的代理）</p>
 * @method string getDescription() 获取<p>地址描述/备注（最多 256 字符）</p>
 * @method void setDescription(string $Description) 设置<p>地址描述/备注（最多 256 字符）</p>
 * @method boolean getConnectionPool() 获取<p>连接池开关</p><p>枚举值：</p><ul><li>true： 开启</li><li>false： 关闭</li></ul>
 * @method void setConnectionPool(boolean $ConnectionPool) 设置<p>连接池开关</p><p>枚举值：</p><ul><li>true： 开启</li><li>false： 关闭</li></ul>
 * @method string getWeightMode() 获取<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配权重</li><li>custom： 自定义权重，此模式下ProxyAllocation参数必传</li></ul><p>默认值：system</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配权重</li><li>custom： 自定义权重，此模式下ProxyAllocation参数必传</li></ul><p>默认值：system</p>
 * @method array getProxyAllocation() 获取<p>system</p><p>入参限制：路由权重列表。若 WeightMode 传的是system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method void setProxyAllocation(array $ProxyAllocation) 设置<p>system</p><p>入参限制：路由权重列表。若 WeightMode 传的是system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
 * @method boolean getRoAutoAdd() 获取<p>新增只读实例是否自动加入当前连接地址，仅后续新建实例生效</p>
 * @method void setRoAutoAdd(boolean $RoAutoAdd) 设置<p>新增只读实例是否自动加入当前连接地址，仅后续新建实例生效</p>
 * @method boolean getLatencyRemove() 获取<p>延迟剔除开关</p>
 * @method void setLatencyRemove(boolean $LatencyRemove) 设置<p>延迟剔除开关</p>
 * @method integer getLatencyRemoveTime() 获取<p>延迟剔除阈值，仅在延迟剔除开关打开时有效</p><p>单位：秒</p>
 * @method void setLatencyRemoveTime(integer $LatencyRemoveTime) 设置<p>延迟剔除阈值，仅在延迟剔除开关打开时有效</p><p>单位：秒</p>
 * @method integer getMinRouteNum() 获取<p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
 * @method void setMinRouteNum(integer $MinRouteNum) 设置<p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
 * @method integer getLoadBalancePolicy() 获取<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 * @method void setLoadBalancePolicy(integer $LoadBalancePolicy) 设置<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 */
class ModifyDBProxyAddressRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>Proxy地址ID</p>
     */
    public $AddressId;

    /**
     * @var string <p>Proxy代理组 ID（不传则默认操作该实例下唯一的代理）</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>地址描述/备注（最多 256 字符）</p>
     */
    public $Description;

    /**
     * @var boolean <p>连接池开关</p><p>枚举值：</p><ul><li>true： 开启</li><li>false： 关闭</li></ul>
     */
    public $ConnectionPool;

    /**
     * @var string <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配权重</li><li>custom： 自定义权重，此模式下ProxyAllocation参数必传</li></ul><p>默认值：system</p>
     */
    public $WeightMode;

    /**
     * @var array <p>system</p><p>入参限制：路由权重列表。若 WeightMode 传的是system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
     */
    public $ProxyAllocation;

    /**
     * @var boolean <p>新增只读实例是否自动加入当前连接地址，仅后续新建实例生效</p>
     */
    public $RoAutoAdd;

    /**
     * @var boolean <p>延迟剔除开关</p>
     */
    public $LatencyRemove;

    /**
     * @var integer <p>延迟剔除阈值，仅在延迟剔除开关打开时有效</p><p>单位：秒</p>
     */
    public $LatencyRemoveTime;

    /**
     * @var integer <p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
     */
    public $MinRouteNum;

    /**
     * @var integer <p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
     */
    public $LoadBalancePolicy;

    /**
     * @param string $DBInstanceId <p>实例ID</p>
     * @param string $AddressId <p>Proxy地址ID</p>
     * @param string $ProxyGroupId <p>Proxy代理组 ID（不传则默认操作该实例下唯一的代理）</p>
     * @param string $Description <p>地址描述/备注（最多 256 字符）</p>
     * @param boolean $ConnectionPool <p>连接池开关</p><p>枚举值：</p><ul><li>true： 开启</li><li>false： 关闭</li></ul>
     * @param string $WeightMode <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配权重</li><li>custom： 自定义权重，此模式下ProxyAllocation参数必传</li></ul><p>默认值：system</p>
     * @param array $ProxyAllocation <p>system</p><p>入参限制：路由权重列表。若 WeightMode 传的是system或不传 ，则传入的权重不生效，由系统分配默认权重。</p>
     * @param boolean $RoAutoAdd <p>新增只读实例是否自动加入当前连接地址，仅后续新建实例生效</p>
     * @param boolean $LatencyRemove <p>延迟剔除开关</p>
     * @param integer $LatencyRemoveTime <p>延迟剔除阈值，仅在延迟剔除开关打开时有效</p><p>单位：秒</p>
     * @param integer $MinRouteNum <p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
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

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
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
