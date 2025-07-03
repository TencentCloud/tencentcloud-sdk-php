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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机进程内容
 *
 * @method string getCloudAccountID() 获取云账号ID
 * @method void setCloudAccountID(string $CloudAccountID) 设置云账号ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getAppID() 获取租户ID
 * @method void setAppID(integer $AppID) 设置租户ID
 * @method string getCloudAccountName() 获取云账号名称
 * @method void setCloudAccountName(string $CloudAccountName) 设置云账号名称
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getProcessID() 获取进程ID
 * @method void setProcessID(string $ProcessID) 设置进程ID
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getCmdLine() 获取命令行
 * @method void setCmdLine(string $CmdLine) 设置命令行
 * @method string getPort() 获取监听端口列表
 * @method void setPort(string $Port) 设置监听端口列表
 */
class AssetProcessItem extends AbstractModel
{
    /**
     * @var string 云账号ID
     */
    public $CloudAccountID;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 租户ID
     */
    public $AppID;

    /**
     * @var string 云账号名称
     */
    public $CloudAccountName;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 进程ID
     */
    public $ProcessID;

    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 命令行
     */
    public $CmdLine;

    /**
     * @var string 监听端口列表
     */
    public $Port;

    /**
     * @param string $CloudAccountID 云账号ID
     * @param string $InstanceName 实例名称
     * @param integer $AppID 租户ID
     * @param string $CloudAccountName 云账号名称
     * @param string $InstanceID 实例ID
     * @param string $PublicIp 公网IP
     * @param string $PrivateIp 内网IP
     * @param string $ProcessID 进程ID
     * @param string $ProcessName 进程名称
     * @param string $CmdLine 命令行
     * @param string $Port 监听端口列表
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
        if (array_key_exists("CloudAccountID",$param) and $param["CloudAccountID"] !== null) {
            $this->CloudAccountID = $param["CloudAccountID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CloudAccountName",$param) and $param["CloudAccountName"] !== null) {
            $this->CloudAccountName = $param["CloudAccountName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("ProcessID",$param) and $param["ProcessID"] !== null) {
            $this->ProcessID = $param["ProcessID"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
