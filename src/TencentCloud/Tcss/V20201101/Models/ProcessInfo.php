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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全进程列表
 *
 * @method string getStartTime() 获取进程启动时间
 * @method void setStartTime(string $StartTime) 设置进程启动时间
 * @method string getRunAs() 获取运行用户
 * @method void setRunAs(string $RunAs) 设置运行用户
 * @method string getCmdLine() 获取命令行参数
 * @method void setCmdLine(string $CmdLine) 设置命令行参数
 * @method string getExe() 获取Exe路径
 * @method void setExe(string $Exe) 设置Exe路径
 * @method integer getPID() 获取主机PID
 * @method void setPID(integer $PID) 设置主机PID
 * @method integer getContainerPID() 获取容器内pid
 * @method void setContainerPID(integer $ContainerPID) 设置容器内pid
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getProcessName() 获取进程名称
 * @method void setProcessName(string $ProcessName) 设置进程名称
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 */
class ProcessInfo extends AbstractModel
{
    /**
     * @var string 进程启动时间
     */
    public $StartTime;

    /**
     * @var string 运行用户
     */
    public $RunAs;

    /**
     * @var string 命令行参数
     */
    public $CmdLine;

    /**
     * @var string Exe路径
     */
    public $Exe;

    /**
     * @var integer 主机PID
     */
    public $PID;

    /**
     * @var integer 容器内pid
     */
    public $ContainerPID;

    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 进程名称
     */
    public $ProcessName;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @param string $StartTime 进程启动时间
     * @param string $RunAs 运行用户
     * @param string $CmdLine 命令行参数
     * @param string $Exe Exe路径
     * @param integer $PID 主机PID
     * @param integer $ContainerPID 容器内pid
     * @param string $ContainerName 容器名称
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $ProcessName 进程名称
     * @param string $HostName 主机名称
     * @param string $PublicIp 外网ip
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }
    }
}
