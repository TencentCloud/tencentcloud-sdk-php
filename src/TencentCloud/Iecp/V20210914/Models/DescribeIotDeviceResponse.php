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
 * DescribeIotDevice返回参数结构体
 *
 * @method integer getId() 获取设备id
 * @method void setId(integer $Id) 设置设备id
 * @method string getName() 获取设备名称
 * @method void setName(string $Name) 设置设备名称
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getCert() 获取ssl证书
 * @method void setCert(string $Cert) 设置ssl证书
 * @method string getPrivateKey() 获取ssl私钥
 * @method void setPrivateKey(string $PrivateKey) 设置ssl私钥
 * @method string getPsk() 获取psk认证密钥
 * @method void setPsk(string $Psk) 设置psk认证密钥
 * @method boolean getDisabled() 获取设备是否打开
 * @method void setDisabled(boolean $Disabled) 设置设备是否打开
 * @method integer getLogSetting() 获取设备日志
 * @method void setLogSetting(integer $LogSetting) 设置设备日志
 * @method integer getLogLevel() 获取设备日志级别
 * @method void setLogLevel(integer $LogLevel) 设置设备日志级别
 * @method string getUserName() 获取mqtt参数
 * @method void setUserName(string $UserName) 设置mqtt参数
 * @method string getPassword() 获取mqtt参数
 * @method void setPassword(string $Password) 设置mqtt参数
 * @method string getClientID() 获取mqtt参数
 * @method void setClientID(string $ClientID) 设置mqtt参数
 * @method string getPskHex() 获取16进制的psk格式
 * @method void setPskHex(string $PskHex) 设置16进制的psk格式
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getStatus() 获取设备在线状态
 * @method void setStatus(integer $Status) 设置设备在线状态
 * @method string getRegion() 获取无
 * @method void setRegion(string $Region) 设置无
 * @method integer getUnitID() 获取无
 * @method void setUnitID(integer $UnitID) 设置无
 * @method string getUnitName() 获取无
 * @method void setUnitName(string $UnitName) 设置无
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIotDeviceResponse extends AbstractModel
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
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string ssl证书
     */
    public $Cert;

    /**
     * @var string ssl私钥
     */
    public $PrivateKey;

    /**
     * @var string psk认证密钥
     */
    public $Psk;

    /**
     * @var boolean 设备是否打开
     */
    public $Disabled;

    /**
     * @var integer 设备日志
     */
    public $LogSetting;

    /**
     * @var integer 设备日志级别
     */
    public $LogLevel;

    /**
     * @var string mqtt参数
     */
    public $UserName;

    /**
     * @var string mqtt参数
     */
    public $Password;

    /**
     * @var string mqtt参数
     */
    public $ClientID;

    /**
     * @var string 16进制的psk格式
     */
    public $PskHex;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 设备在线状态
     */
    public $Status;

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
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 设备id
     * @param string $Name 设备名称
     * @param string $Version 版本号
     * @param string $Cert ssl证书
     * @param string $PrivateKey ssl私钥
     * @param string $Psk psk认证密钥
     * @param boolean $Disabled 设备是否打开
     * @param integer $LogSetting 设备日志
     * @param integer $LogLevel 设备日志级别
     * @param string $UserName mqtt参数
     * @param string $Password mqtt参数
     * @param string $ClientID mqtt参数
     * @param string $PskHex 16进制的psk格式
     * @param string $Description 描述
     * @param integer $Status 设备在线状态
     * @param string $Region 无
     * @param integer $UnitID 无
     * @param string $UnitName 无
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("Psk",$param) and $param["Psk"] !== null) {
            $this->Psk = $param["Psk"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("LogSetting",$param) and $param["LogSetting"] !== null) {
            $this->LogSetting = $param["LogSetting"];
        }

        if (array_key_exists("LogLevel",$param) and $param["LogLevel"] !== null) {
            $this->LogLevel = $param["LogLevel"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ClientID",$param) and $param["ClientID"] !== null) {
            $this->ClientID = $param["ClientID"];
        }

        if (array_key_exists("PskHex",$param) and $param["PskHex"] !== null) {
            $this->PskHex = $param["PskHex"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
