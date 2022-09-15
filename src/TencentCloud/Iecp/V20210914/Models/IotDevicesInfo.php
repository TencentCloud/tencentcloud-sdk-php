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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子设备列表信息
 *
 * @method integer getId() 获取设备id
 * @method void setId(integer $Id) 设置设备id
 * @method string getName() 获取设备名称
 * @method void setName(string $Name) 设置设备名称
 * @method integer getStatus() 获取设备状态
 * @method void setStatus(integer $Status) 设置设备状态
 * @method boolean getDisabled() 获取设备打开状态
 * @method void setDisabled(boolean $Disabled) 设置设备打开状态
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreateTime() 获取设备创建时间
 * @method void setCreateTime(string $CreateTime) 设置设备创建时间
 * @method string getLastOnlineTime() 获取最后在线时间
 * @method void setLastOnlineTime(string $LastOnlineTime) 设置最后在线时间
 * @method boolean getIsBound() 获取设备是否绑定到节点
 * @method void setIsBound(boolean $IsBound) 设置设备是否绑定到节点
 * @method string getVersion() 获取设备版本
 * @method void setVersion(string $Version) 设置设备版本
 * @method string getRegion() 获取无
 * @method void setRegion(string $Region) 设置无
 * @method integer getUnitID() 获取无
 * @method void setUnitID(integer $UnitID) 设置无
 * @method string getUnitName() 获取无
 * @method void setUnitName(string $UnitName) 设置无
 */
class IotDevicesInfo extends AbstractModel
{
    /**
     * @var integer 设备id
     */
    public $Id;

    /**
     * @var string 设备名称
     */
    public $Name;

    /**
     * @var integer 设备状态
     */
    public $Status;

    /**
     * @var boolean 设备打开状态
     */
    public $Disabled;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 设备创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后在线时间
     */
    public $LastOnlineTime;

    /**
     * @var boolean 设备是否绑定到节点
     */
    public $IsBound;

    /**
     * @var string 设备版本
     */
    public $Version;

    /**
     * @var string 无
     */
    public $Region;

    /**
     * @var integer 无
     */
    public $UnitID;

    /**
     * @var string 无
     */
    public $UnitName;

    /**
     * @param integer $Id 设备id
     * @param string $Name 设备名称
     * @param integer $Status 设备状态
     * @param boolean $Disabled 设备打开状态
     * @param string $Description 描述
     * @param string $CreateTime 设备创建时间
     * @param string $LastOnlineTime 最后在线时间
     * @param boolean $IsBound 设备是否绑定到节点
     * @param string $Version 设备版本
     * @param string $Region 无
     * @param integer $UnitID 无
     * @param string $UnitName 无
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastOnlineTime",$param) and $param["LastOnlineTime"] !== null) {
            $this->LastOnlineTime = $param["LastOnlineTime"];
        }

        if (array_key_exists("IsBound",$param) and $param["IsBound"] !== null) {
            $this->IsBound = $param["IsBound"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("UnitID",$param) and $param["UnitID"] !== null) {
            $this->UnitID = $param["UnitID"];
        }

        if (array_key_exists("UnitName",$param) and $param["UnitName"] !== null) {
            $this->UnitName = $param["UnitName"];
        }
    }
}
