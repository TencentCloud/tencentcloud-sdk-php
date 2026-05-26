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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息
 *
 * @method string getResourceId() 获取<p>资源Id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源Id</p>
 * @method string getResourceName() 获取<p>资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称</p>
 * @method integer getStatus() 获取<p>资源状态，1-正常，2-隔离，3-销毁</p>
 * @method void setStatus(integer $Status) 设置<p>资源状态，1-正常，2-隔离，3-销毁</p>
 * @method string getVip() 获取<p>资源IP</p>
 * @method void setVip(string $Vip) 设置<p>资源IP</p>
 * @method string getVpcId() 获取<p>资源所属Vpc</p>
 * @method void setVpcId(string $VpcId) 设置<p>资源所属Vpc</p>
 * @method string getSubnetId() 获取<p>资源所属子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>资源所属子网</p>
 * @method string getModel() 获取<p>资源所属HSM规格</p>
 * @method void setModel(string $Model) 设置<p>资源所属HSM规格</p>
 * @method integer getVsmType() 获取<p>云加密机类型id</p>
 * @method void setVsmType(integer $VsmType) 设置<p>云加密机类型id</p>
 * @method integer getRegionId() 获取<p>地域Id</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域Id</p>
 * @method integer getZoneId() 获取<p>区域Id</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>区域Id</p>
 * @method integer getExpireTime() 获取<p>过期时间（Epoch Unix Timestamp）</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间（Epoch Unix Timestamp）</p>
 * @method string getRegionName() 获取<p>地域名</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名</p>
 * @method string getZoneName() 获取<p>区域名</p>
 * @method void setZoneName(string $ZoneName) 设置<p>区域名</p>
 * @method array getSgList() 获取<p>实例的安全组列表</p>
 * @method void setSgList(array $SgList) 设置<p>实例的安全组列表</p>
 * @method string getSubnetName() 获取<p>子网名称</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名称</p>
 * @method boolean getExpired() 获取<p>当前实例是否已经过期</p>
 * @method void setExpired(boolean $Expired) 设置<p>当前实例是否已经过期</p>
 * @method integer getRemainSeconds() 获取<p>为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒</p>
 * @method void setRemainSeconds(integer $RemainSeconds) 设置<p>为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒</p>
 * @method string getVpcName() 获取<p>Vpc名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>Vpc名称</p>
 * @method string getCreateUin() 获取<p>创建者Uin账号</p>
 * @method void setCreateUin(string $CreateUin) 设置<p>创建者Uin账号</p>
 * @method integer getRenewFlag() 获取<p>自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method string getManufacturer() 获取<p>厂商</p>
 * @method void setManufacturer(string $Manufacturer) 设置<p>厂商</p>
 * @method integer getAlarmStatus() 获取<p>告警状态，0：停用，1：启用</p>
 * @method void setAlarmStatus(integer $AlarmStatus) 设置<p>告警状态，0：停用，1：启用</p>
 * @method integer getPqcStatus() 获取<p>0不支持<br>1关闭<br>2开启</p>
 * @method void setPqcStatus(integer $PqcStatus) 设置<p>0不支持<br>1关闭<br>2开启</p>
 * @method integer getPqcFlag() 获取<p>0关闭，1开启</p>
 * @method void setPqcFlag(integer $PqcFlag) 设置<p>0关闭，1开启</p>
 * @method string getDeployEnv() 获取<p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
 * @method void setDeployEnv(string $DeployEnv) 设置<p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
 */
class ResourceInfo extends AbstractModel
{
    /**
     * @var string <p>资源Id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称</p>
     */
    public $ResourceName;

    /**
     * @var integer <p>资源状态，1-正常，2-隔离，3-销毁</p>
     */
    public $Status;

    /**
     * @var string <p>资源IP</p>
     */
    public $Vip;

    /**
     * @var string <p>资源所属Vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>资源所属子网</p>
     */
    public $SubnetId;

    /**
     * @var string <p>资源所属HSM规格</p>
     */
    public $Model;

    /**
     * @var integer <p>云加密机类型id</p>
     */
    public $VsmType;

    /**
     * @var integer <p>地域Id</p>
     */
    public $RegionId;

    /**
     * @var integer <p>区域Id</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>过期时间（Epoch Unix Timestamp）</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>地域名</p>
     */
    public $RegionName;

    /**
     * @var string <p>区域名</p>
     */
    public $ZoneName;

    /**
     * @var array <p>实例的安全组列表</p>
     */
    public $SgList;

    /**
     * @var string <p>子网名称</p>
     */
    public $SubnetName;

    /**
     * @var boolean <p>当前实例是否已经过期</p>
     */
    public $Expired;

    /**
     * @var integer <p>为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒</p>
     */
    public $RemainSeconds;

    /**
     * @var string <p>Vpc名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>创建者Uin账号</p>
     */
    public $CreateUin;

    /**
     * @var integer <p>自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续</p>
     */
    public $RenewFlag;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var string <p>厂商</p>
     */
    public $Manufacturer;

    /**
     * @var integer <p>告警状态，0：停用，1：启用</p>
     */
    public $AlarmStatus;

    /**
     * @var integer <p>0不支持<br>1关闭<br>2开启</p>
     */
    public $PqcStatus;

    /**
     * @var integer <p>0关闭，1开启</p>
     */
    public $PqcFlag;

    /**
     * @var string <p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
     */
    public $DeployEnv;

    /**
     * @param string $ResourceId <p>资源Id</p>
     * @param string $ResourceName <p>资源名称</p>
     * @param integer $Status <p>资源状态，1-正常，2-隔离，3-销毁</p>
     * @param string $Vip <p>资源IP</p>
     * @param string $VpcId <p>资源所属Vpc</p>
     * @param string $SubnetId <p>资源所属子网</p>
     * @param string $Model <p>资源所属HSM规格</p>
     * @param integer $VsmType <p>云加密机类型id</p>
     * @param integer $RegionId <p>地域Id</p>
     * @param integer $ZoneId <p>区域Id</p>
     * @param integer $ExpireTime <p>过期时间（Epoch Unix Timestamp）</p>
     * @param string $RegionName <p>地域名</p>
     * @param string $ZoneName <p>区域名</p>
     * @param array $SgList <p>实例的安全组列表</p>
     * @param string $SubnetName <p>子网名称</p>
     * @param boolean $Expired <p>当前实例是否已经过期</p>
     * @param integer $RemainSeconds <p>为正数表示实例距离过期时间还剩余多少秒，为负数表示已经过期多少秒</p>
     * @param string $VpcName <p>Vpc名称</p>
     * @param string $CreateUin <p>创建者Uin账号</p>
     * @param integer $RenewFlag <p>自动续费状态标识， 0-手动续费，1-自动续费，2-到期不续</p>
     * @param array $Tags <p>标签列表</p>
     * @param string $Manufacturer <p>厂商</p>
     * @param integer $AlarmStatus <p>告警状态，0：停用，1：启用</p>
     * @param integer $PqcStatus <p>0不支持<br>1关闭<br>2开启</p>
     * @param integer $PqcFlag <p>0关闭，1开启</p>
     * @param string $DeployEnv <p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VsmType",$param) and $param["VsmType"] !== null) {
            $this->VsmType = $param["VsmType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("SgList",$param) and $param["SgList"] !== null) {
            $this->SgList = [];
            foreach ($param["SgList"] as $key => $value){
                $obj = new SgUnit();
                $obj->deserialize($value);
                array_push($this->SgList, $obj);
            }
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("RemainSeconds",$param) and $param["RemainSeconds"] !== null) {
            $this->RemainSeconds = $param["RemainSeconds"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("AlarmStatus",$param) and $param["AlarmStatus"] !== null) {
            $this->AlarmStatus = $param["AlarmStatus"];
        }

        if (array_key_exists("PqcStatus",$param) and $param["PqcStatus"] !== null) {
            $this->PqcStatus = $param["PqcStatus"];
        }

        if (array_key_exists("PqcFlag",$param) and $param["PqcFlag"] !== null) {
            $this->PqcFlag = $param["PqcFlag"];
        }

        if (array_key_exists("DeployEnv",$param) and $param["DeployEnv"] !== null) {
            $this->DeployEnv = $param["DeployEnv"];
        }
    }
}
