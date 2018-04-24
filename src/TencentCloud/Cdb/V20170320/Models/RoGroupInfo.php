<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getUGroupId() 获取RO组的ID，形如cdbrg-c1nl9rpv
 * @method void setUGroupId(string $uGroupId) 设置RO组的ID，形如cdbrg-c1nl9rpv
 * @method string getGroupName() 获取RO组的名称
 * @method void setGroupName(string $groupName) 设置RO组的名称
 * @method string getMasterInstanceId() 获取RO组对应的主实例的ID
 * @method void setMasterInstanceId(string $masterInstanceId) 设置RO组对应的主实例的ID
 * @method integer getMaxDelay() 获取RO实例的延时阈值，超过阈值将会被剔出RO组
 * @method void setMaxDelay(integer $maxDelay) 设置RO实例的延时阈值，超过阈值将会被剔出RO组
 * @method integer getIsKickOut() 获取RO组内的实例超过延时阈值，是否将RO实例剔除，0-否，1-是
 * @method void setIsKickOut(integer $isKickOut) 设置RO组内的实例超过延时阈值，是否将RO实例剔除，0-否，1-是
 * @method integer getMinCount() 获取RO组内需保留的最小实例数量
 * @method void setMinCount(integer $minCount) 设置RO组内需保留的最小实例数量
 * @method string getUpdateTime() 获取RO组的最近更新时间
 * @method void setUpdateTime(string $updateTime) 设置RO组的最近更新时间
 * @method string getCreateTime() 获取RO组的创建时间
 * @method void setCreateTime(string $createTime) 设置RO组的创建时间
 * @method integer getVpcId() 获取RO组所在的私有网络的ID
 * @method void setVpcId(integer $vpcId) 设置RO组所在的私有网络的ID
 * @method integer getSubnetId() 获取RO组所在私有网络下子网的ID
 * @method void setSubnetId(integer $subnetId) 设置RO组所在私有网络下子网的ID
 * @method string getVip() 获取RO组的私有网络地址
 * @method void setVip(string $vip) 设置RO组的私有网络地址
 * @method integer getVport() 获取RO组的私有网络端口
 * @method void setVport(integer $vport) 设置RO组的私有网络端口
 * @method string getWeightMode() 获取RO组内的权重设置的模式，"system":系统自动设置，"custom":自定义设置
 * @method void setWeightMode(string $weightMode) 设置RO组内的权重设置的模式，"system":系统自动设置，"custom":自定义设置
 * @method array getRoInstances() 获取RO组内RO实例信息数组
 * @method void setRoInstances(array $roInstances) 设置RO组内RO实例信息数组
 */

/**
 *RO组的详细信息
 */
class RoGroupInfo extends AbstractModel
{
    /**
     * @var string RO组的ID，形如cdbrg-c1nl9rpv
     */
    public $uGroupId;

    /**
     * @var string RO组的名称
     */
    public $groupName;

    /**
     * @var string RO组对应的主实例的ID
     */
    public $masterInstanceId;

    /**
     * @var integer RO实例的延时阈值，超过阈值将会被剔出RO组
     */
    public $maxDelay;

    /**
     * @var integer RO组内的实例超过延时阈值，是否将RO实例剔除，0-否，1-是
     */
    public $isKickOut;

    /**
     * @var integer RO组内需保留的最小实例数量
     */
    public $minCount;

    /**
     * @var string RO组的最近更新时间
     */
    public $updateTime;

    /**
     * @var string RO组的创建时间
     */
    public $createTime;

    /**
     * @var integer RO组所在的私有网络的ID
     */
    public $vpcId;

    /**
     * @var integer RO组所在私有网络下子网的ID
     */
    public $subnetId;

    /**
     * @var string RO组的私有网络地址
     */
    public $vip;

    /**
     * @var integer RO组的私有网络端口
     */
    public $vport;

    /**
     * @var string RO组内的权重设置的模式，"system":系统自动设置，"custom":自定义设置
     */
    public $weightMode;

    /**
     * @var array RO组内RO实例信息数组
     */
    public $roInstances;
    /**
     * @param string $uGroupId RO组的ID，形如cdbrg-c1nl9rpv
     * @param string $groupName RO组的名称
     * @param string $masterInstanceId RO组对应的主实例的ID
     * @param integer $maxDelay RO实例的延时阈值，超过阈值将会被剔出RO组
     * @param integer $isKickOut RO组内的实例超过延时阈值，是否将RO实例剔除，0-否，1-是
     * @param integer $minCount RO组内需保留的最小实例数量
     * @param string $updateTime RO组的最近更新时间
     * @param string $createTime RO组的创建时间
     * @param integer $vpcId RO组所在的私有网络的ID
     * @param integer $subnetId RO组所在私有网络下子网的ID
     * @param string $vip RO组的私有网络地址
     * @param integer $vport RO组的私有网络端口
     * @param string $weightMode RO组内的权重设置的模式，"system":系统自动设置，"custom":自定义设置
     * @param array $roInstances RO组内RO实例信息数组
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("UGroupId",$param) and $param["UGroupId"] !== null) {
            $this->uGroupId = $param["UGroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->groupName = $param["GroupName"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->masterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->maxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->isKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->minCount = $param["MinCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->updateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->createTime = $param["CreateTime"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->vpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->subnetId = $param["SubnetId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->vport = $param["Vport"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->weightMode = $param["WeightMode"];
        }

        if (array_key_exists("RoInstances",$param) and $param["RoInstances"] !== null) {
            $this->roInstances = [];
            foreach ($param["RoInstances"] as $key => $value){
                $obj = new RoInstanceInfo();
                $obj->deserialize($value);
                array_push($this->roInstances, $obj);
            }
        }
    }
}
