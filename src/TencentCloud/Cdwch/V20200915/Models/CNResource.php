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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息
 *
 * @method integer getID() 获取资源id
 * @method void setID(integer $ID) 设置资源id
 * @method string getInstanceID() 获取集群的id
 * @method void setInstanceID(string $InstanceID) 设置集群的id
 * @method integer getAppID() 获取用户appid
 * @method void setAppID(integer $AppID) 设置用户appid
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method string getComponent() 获取组件
 * @method void setComponent(string $Component) 设置组件
 * @method integer getDeployMode() 获取部署模式
 * @method void setDeployMode(integer $DeployMode) 设置部署模式
 * @method string getSpecName() 获取规格名称
 * @method void setSpecName(string $SpecName) 设置规格名称
 * @method string getResourceID() 获取资源id
 * @method void setResourceID(string $ResourceID) 设置资源id
 * @method integer getStatus() 获取资源的状态
 * @method void setStatus(integer $Status) 设置资源的状态
 * @method string getIP() 获取私有网络ip
 * @method void setIP(string $IP) 设置私有网络ip
 * @method integer getCPU() 获取核数
 * @method void setCPU(integer $CPU) 设置核数
 * @method integer getMemory() 获取内存
 * @method void setMemory(integer $Memory) 设置内存
 * @method integer getStorage() 获取存储大小
 * @method void setStorage(integer $Storage) 设置存储大小
 * @method string getUUID() 获取服务器ID
 * @method void setUUID(string $UUID) 设置服务器ID
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取地区
 * @method void setZone(string $Zone) 设置地区
 * @method string getDetails() 获取详细信息
 * @method void setDetails(string $Details) 设置详细信息
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getExpireTime() 获取过期时间
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
 */
class CNResource extends AbstractModel
{
    /**
     * @var integer 资源id
     */
    public $ID;

    /**
     * @var string 集群的id
     */
    public $InstanceID;

    /**
     * @var integer 用户appid
     */
    public $AppID;

    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var string 组件
     */
    public $Component;

    /**
     * @var integer 部署模式
     */
    public $DeployMode;

    /**
     * @var string 规格名称
     */
    public $SpecName;

    /**
     * @var string 资源id
     */
    public $ResourceID;

    /**
     * @var integer 资源的状态
     */
    public $Status;

    /**
     * @var string 私有网络ip
     */
    public $IP;

    /**
     * @var integer 核数
     */
    public $CPU;

    /**
     * @var integer 内存
     */
    public $Memory;

    /**
     * @var integer 存储大小
     */
    public $Storage;

    /**
     * @var string 服务器ID
     */
    public $UUID;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 地区
     */
    public $Zone;

    /**
     * @var string 详细信息
     */
    public $Details;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 过期时间
     */
    public $ExpireTime;

    /**
     * @param integer $ID 资源id
     * @param string $InstanceID 集群的id
     * @param integer $AppID 用户appid
     * @param string $Uin 用户uin
     * @param string $Component 组件
     * @param integer $DeployMode 部署模式
     * @param string $SpecName 规格名称
     * @param string $ResourceID 资源id
     * @param integer $Status 资源的状态
     * @param string $IP 私有网络ip
     * @param integer $CPU 核数
     * @param integer $Memory 内存
     * @param integer $Storage 存储大小
     * @param string $UUID 服务器ID
     * @param string $Region 地域
     * @param string $Zone 地区
     * @param string $Details 详细信息
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param string $ExpireTime 过期时间
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

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = $param["Details"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
