<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method integer getID() 获取无
 * @method void setID(integer $ID) 设置无
 * @method string getInstanceID() 获取无
 * @method void setInstanceID(string $InstanceID) 设置无
 * @method integer getAppID() 获取无
 * @method void setAppID(integer $AppID) 设置无
 * @method string getUin() 获取无
 * @method void setUin(string $Uin) 设置无
 * @method string getComponent() 获取无
 * @method void setComponent(string $Component) 设置无
 * @method integer getDeployMode() 获取无
 * @method void setDeployMode(integer $DeployMode) 设置无
 * @method string getSpecName() 获取无
 * @method void setSpecName(string $SpecName) 设置无
 * @method string getResourceID() 获取无
 * @method void setResourceID(string $ResourceID) 设置无
 * @method integer getStatus() 获取无
 * @method void setStatus(integer $Status) 设置无
 * @method string getIP() 获取无
 * @method void setIP(string $IP) 设置无
 * @method integer getCPU() 获取无
 * @method void setCPU(integer $CPU) 设置无
 * @method integer getMemory() 获取无
 * @method void setMemory(integer $Memory) 设置无
 * @method integer getStorage() 获取无
 * @method void setStorage(integer $Storage) 设置无
 * @method string getUUID() 获取无
 * @method void setUUID(string $UUID) 设置无
 * @method string getRegion() 获取无
 * @method void setRegion(string $Region) 设置无
 * @method string getZone() 获取无
 * @method void setZone(string $Zone) 设置无
 * @method string getDetails() 获取无
 * @method void setDetails(string $Details) 设置无
 * @method string getCreateTime() 获取无
 * @method void setCreateTime(string $CreateTime) 设置无
 * @method string getModifyTime() 获取无
 * @method void setModifyTime(string $ModifyTime) 设置无
 * @method string getExpireTime() 获取无
 * @method void setExpireTime(string $ExpireTime) 设置无
 */
class CNResource extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $ID;

    /**
     * @var string 无
     */
    public $InstanceID;

    /**
     * @var integer 无
     */
    public $AppID;

    /**
     * @var string 无
     */
    public $Uin;

    /**
     * @var string 无
     */
    public $Component;

    /**
     * @var integer 无
     */
    public $DeployMode;

    /**
     * @var string 无
     */
    public $SpecName;

    /**
     * @var string 无
     */
    public $ResourceID;

    /**
     * @var integer 无
     */
    public $Status;

    /**
     * @var string 无
     */
    public $IP;

    /**
     * @var integer 无
     */
    public $CPU;

    /**
     * @var integer 无
     */
    public $Memory;

    /**
     * @var integer 无
     */
    public $Storage;

    /**
     * @var string 无
     */
    public $UUID;

    /**
     * @var string 无
     */
    public $Region;

    /**
     * @var string 无
     */
    public $Zone;

    /**
     * @var string 无
     */
    public $Details;

    /**
     * @var string 无
     */
    public $CreateTime;

    /**
     * @var string 无
     */
    public $ModifyTime;

    /**
     * @var string 无
     */
    public $ExpireTime;

    /**
     * @param integer $ID 无
     * @param string $InstanceID 无
     * @param integer $AppID 无
     * @param string $Uin 无
     * @param string $Component 无
     * @param integer $DeployMode 无
     * @param string $SpecName 无
     * @param string $ResourceID 无
     * @param integer $Status 无
     * @param string $IP 无
     * @param integer $CPU 无
     * @param integer $Memory 无
     * @param integer $Storage 无
     * @param string $UUID 无
     * @param string $Region 无
     * @param string $Zone 无
     * @param string $Details 无
     * @param string $CreateTime 无
     * @param string $ModifyTime 无
     * @param string $ExpireTime 无
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
