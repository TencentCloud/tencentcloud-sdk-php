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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精简集群信息
 *
 * @method integer getID() 获取ID
 * @method void setID(integer $ID) 设置ID
 * @method string getInstanceId() 获取集群Id
 * @method void setInstanceId(string $InstanceId) 设置集群Id
 * @method string getInstanceName() 获取集群名字
 * @method void setInstanceName(string $InstanceName) 设置集群名字
 * @method string getVersion() 获取内核版本
 * @method void setVersion(string $Version) 设置内核版本
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getRegionId() 获取地域Id
 * @method void setRegionId(integer $RegionId) 设置地域Id
 * @method string getRegionDesc() 获取地域详情
 * @method void setRegionDesc(string $RegionDesc) 设置地域详情
 * @method string getZone() 获取地区
 * @method void setZone(string $Zone) 设置地区
 * @method integer getZoneId() 获取地区id
 * @method void setZoneId(integer $ZoneId) 设置地区id
 * @method string getZoneDesc() 获取地区详情
 * @method void setZoneDesc(string $ZoneDesc) 设置地区详情
 * @method string getVpcId() 获取私有网络
 * @method void setVpcId(string $VpcId) 设置私有网络
 * @method string getSubnetId() 获取子网
 * @method void setSubnetId(string $SubnetId) 设置子网
 * @method string getCreateTime() 获取开始时间
 * @method void setCreateTime(string $CreateTime) 设置开始时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 * @method string getAccessInfo() 获取访问地址
 * @method void setAccessInfo(string $AccessInfo) 设置访问地址
 * @method string getPayMode() 获取计费方式
 * @method void setPayMode(string $PayMode) 设置计费方式
 * @method boolean getRenewFlag() 获取自动续费
 * @method void setRenewFlag(boolean $RenewFlag) 设置自动续费
 */
class InstanceSimpleInfoNew extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $ID;

    /**
     * @var string 集群Id
     */
    public $InstanceId;

    /**
     * @var string 集群名字
     */
    public $InstanceName;

    /**
     * @var string 内核版本
     */
    public $Version;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 地域Id
     */
    public $RegionId;

    /**
     * @var string 地域详情
     */
    public $RegionDesc;

    /**
     * @var string 地区
     */
    public $Zone;

    /**
     * @var integer 地区id
     */
    public $ZoneId;

    /**
     * @var string 地区详情
     */
    public $ZoneDesc;

    /**
     * @var string 私有网络
     */
    public $VpcId;

    /**
     * @var string 子网
     */
    public $SubnetId;

    /**
     * @var string 开始时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @var string 访问地址
     */
    public $AccessInfo;

    /**
     * @var string 计费方式
     */
    public $PayMode;

    /**
     * @var boolean 自动续费
     */
    public $RenewFlag;

    /**
     * @param integer $ID ID
     * @param string $InstanceId 集群Id
     * @param string $InstanceName 集群名字
     * @param string $Version 内核版本
     * @param string $Region 地域
     * @param integer $RegionId 地域Id
     * @param string $RegionDesc 地域详情
     * @param string $Zone 地区
     * @param integer $ZoneId 地区id
     * @param string $ZoneDesc 地区详情
     * @param string $VpcId 私有网络
     * @param string $SubnetId 子网
     * @param string $CreateTime 开始时间
     * @param string $ExpireTime 过期时间
     * @param string $AccessInfo 访问地址
     * @param string $PayMode 计费方式
     * @param boolean $RenewFlag 自动续费
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
