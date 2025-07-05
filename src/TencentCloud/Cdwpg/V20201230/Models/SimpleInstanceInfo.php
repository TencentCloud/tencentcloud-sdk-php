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
 * 集群信息
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
 * @method string getZone() 获取地区
 * @method void setZone(string $Zone) 设置地区
 * @method string getUserVPCID() 获取私有网络
 * @method void setUserVPCID(string $UserVPCID) 设置私有网络
 * @method string getUserSubnetID() 获取子网
 * @method void setUserSubnetID(string $UserSubnetID) 设置子网
 * @method string getCreateTime() 获取开始时间
 * @method void setCreateTime(string $CreateTime) 设置开始时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getAccessInfo() 获取访问地址
 * @method void setAccessInfo(string $AccessInfo) 设置访问地址
 * @method integer getRenewFlag() 获取自动续费开关，0为不自动续费，1为自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费开关，0为不自动续费，1为自动续费
 * @method ChargeProperties getChargeProperties() 获取计费方式
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置计费方式
 * @method array getResources() 获取资源集合
 * @method void setResources(array $Resources) 设置资源集合
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getStatus() 获取集群状态
 * @method void setStatus(integer $Status) 设置集群状态
 */
class SimpleInstanceInfo extends AbstractModel
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
     * @var string 地区
     */
    public $Zone;

    /**
     * @var string 私有网络
     */
    public $UserVPCID;

    /**
     * @var string 子网
     */
    public $UserSubnetID;

    /**
     * @var string 开始时间
     */
    public $CreateTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 访问地址
     */
    public $AccessInfo;

    /**
     * @var integer 自动续费开关，0为不自动续费，1为自动续费
     */
    public $RenewFlag;

    /**
     * @var ChargeProperties 计费方式
     */
    public $ChargeProperties;

    /**
     * @var array 资源集合
     */
    public $Resources;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 集群状态
     */
    public $Status;

    /**
     * @param integer $ID ID
     * @param string $InstanceId 集群Id
     * @param string $InstanceName 集群名字
     * @param string $Version 内核版本
     * @param string $Region 地域
     * @param string $Zone 地区
     * @param string $UserVPCID 私有网络
     * @param string $UserSubnetID 子网
     * @param string $CreateTime 开始时间
     * @param string $ExpireTime 到期时间
     * @param string $AccessInfo 访问地址
     * @param integer $RenewFlag 自动续费开关，0为不自动续费，1为自动续费
     * @param ChargeProperties $ChargeProperties 计费方式
     * @param array $Resources 资源集合
     * @param array $Tags 标签列表
     * @param integer $Status 集群状态
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UserVPCID",$param) and $param["UserVPCID"] !== null) {
            $this->UserVPCID = $param["UserVPCID"];
        }

        if (array_key_exists("UserSubnetID",$param) and $param["UserSubnetID"] !== null) {
            $this->UserSubnetID = $param["UserSubnetID"];
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
