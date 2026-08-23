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
 * Proxy 接入地址信息，包含 VIP/VPort、读写分离与连接池相关配置以及对应路由列表。
 *
 * @method string getAddressId() 获取<p>Proxy 接入地址 ID</p>
 * @method void setAddressId(string $AddressId) 设置<p>Proxy 接入地址 ID</p>
 * @method string getVip() 获取<p>Proxy 接入地址 IP</p>
 * @method void setVip(string $Vip) 设置<p>Proxy 接入地址 IP</p>
 * @method integer getVport() 获取<p>Proxy 接入地址端口</p>
 * @method void setVport(integer $Vport) 设置<p>Proxy 接入地址端口</p>
 * @method string getVpcId() 获取<p>VPC ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID</p>
 * @method string getSubnetId() 获取<p>子网 ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
 * @method string getDescription() 获取<p>接入地址描述</p>
 * @method void setDescription(string $Description) 设置<p>接入地址描述</p>
 * @method boolean getConnectionPool() 获取<p>是否开启连接池：0-未开启，1-开启</p>
 * @method void setConnectionPool(boolean $ConnectionPool) 设置<p>是否开启连接池：0-未开启，1-开启</p>
 * @method array getRoutes() 获取<p>路由列表</p>
 * @method void setRoutes(array $Routes) 设置<p>路由列表</p>
 * @method integer getConnectionPoolLimit() 获取<p>连接池大小</p>
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) 设置<p>连接池大小</p>
 * @method boolean getRwSplitEnable() 获取<p>读写分离开关。启用后 proxy 将读请求分发到只读节点，写请求仍走主节点。</p>
 * @method void setRwSplitEnable(boolean $RwSplitEnable) 设置<p>读写分离开关。启用后 proxy 将读请求分发到只读节点，写请求仍走主节点。</p>
 * @method string getWeightMode() 获取<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配</li><li>custom： 用户自定义权重</li></ul>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配</li><li>custom： 用户自定义权重</li></ul>
 * @method boolean getRoAutoAdd() 获取<p>新增只读是否自动加入读写分离</p>
 * @method void setRoAutoAdd(boolean $RoAutoAdd) 设置<p>新增只读是否自动加入读写分离</p>
 * @method boolean getLatencyRemove() 获取<p>延迟剔除开关</p>
 * @method void setLatencyRemove(boolean $LatencyRemove) 设置<p>延迟剔除开关</p>
 * @method integer getLatencyRemoveTime() 获取<p>延迟剔除阈值</p><p>单位：秒</p>
 * @method void setLatencyRemoveTime(integer $LatencyRemoveTime) 设置<p>延迟剔除阈值</p><p>单位：秒</p>
 * @method integer getMinRouteNum() 获取<p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
 * @method void setMinRouteNum(integer $MinRouteNum) 设置<p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
 * @method boolean getFailOver() 获取<p>只读全部异常时是否回切到主</p>
 * @method void setFailOver(boolean $FailOver) 设置<p>只读全部异常时是否回切到主</p>
 * @method integer getLoadBalancePolicy() 获取<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 * @method void setLoadBalancePolicy(integer $LoadBalancePolicy) 设置<p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
 */
class ProxyAddress extends AbstractModel
{
    /**
     * @var string <p>Proxy 接入地址 ID</p>
     */
    public $AddressId;

    /**
     * @var string <p>Proxy 接入地址 IP</p>
     */
    public $Vip;

    /**
     * @var integer <p>Proxy 接入地址端口</p>
     */
    public $Vport;

    /**
     * @var string <p>VPC ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>接入地址描述</p>
     */
    public $Description;

    /**
     * @var boolean <p>是否开启连接池：0-未开启，1-开启</p>
     */
    public $ConnectionPool;

    /**
     * @var array <p>路由列表</p>
     */
    public $Routes;

    /**
     * @var integer <p>连接池大小</p>
     */
    public $ConnectionPoolLimit;

    /**
     * @var boolean <p>读写分离开关。启用后 proxy 将读请求分发到只读节点，写请求仍走主节点。</p>
     */
    public $RwSplitEnable;

    /**
     * @var string <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配</li><li>custom： 用户自定义权重</li></ul>
     */
    public $WeightMode;

    /**
     * @var boolean <p>新增只读是否自动加入读写分离</p>
     */
    public $RoAutoAdd;

    /**
     * @var boolean <p>延迟剔除开关</p>
     */
    public $LatencyRemove;

    /**
     * @var integer <p>延迟剔除阈值</p><p>单位：秒</p>
     */
    public $LatencyRemoveTime;

    /**
     * @var integer <p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
     */
    public $MinRouteNum;

    /**
     * @var boolean <p>只读全部异常时是否回切到主</p>
     */
    public $FailOver;

    /**
     * @var integer <p>负载均衡策略</p><p>枚举值：</p><ul><li>0： 按活跃连接数(默认)</li><li>1： 按请求数</li></ul>
     */
    public $LoadBalancePolicy;

    /**
     * @param string $AddressId <p>Proxy 接入地址 ID</p>
     * @param string $Vip <p>Proxy 接入地址 IP</p>
     * @param integer $Vport <p>Proxy 接入地址端口</p>
     * @param string $VpcId <p>VPC ID</p>
     * @param string $SubnetId <p>子网 ID</p>
     * @param string $Description <p>接入地址描述</p>
     * @param boolean $ConnectionPool <p>是否开启连接池：0-未开启，1-开启</p>
     * @param array $Routes <p>路由列表</p>
     * @param integer $ConnectionPoolLimit <p>连接池大小</p>
     * @param boolean $RwSplitEnable <p>读写分离开关。启用后 proxy 将读请求分发到只读节点，写请求仍走主节点。</p>
     * @param string $WeightMode <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统自动分配</li><li>custom： 用户自定义权重</li></ul>
     * @param boolean $RoAutoAdd <p>新增只读是否自动加入读写分离</p>
     * @param boolean $LatencyRemove <p>延迟剔除开关</p>
     * @param integer $LatencyRemoveTime <p>延迟剔除阈值</p><p>单位：秒</p>
     * @param integer $MinRouteNum <p>最小保留路由数。在延迟/故障剔除时，至少保留的路由数量，防止所有节点被剔除导致服务不可用。</p>
     * @param boolean $FailOver <p>只读全部异常时是否回切到主</p>
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
        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new ProxyRoute();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("RwSplitEnable",$param) and $param["RwSplitEnable"] !== null) {
            $this->RwSplitEnable = $param["RwSplitEnable"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
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

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("LoadBalancePolicy",$param) and $param["LoadBalancePolicy"] !== null) {
            $this->LoadBalancePolicy = $param["LoadBalancePolicy"];
        }
    }
}
