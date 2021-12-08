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
 * 容器安全服务信息列表
 *
 * @method string getServiceID() 获取服务id
 * @method void setServiceID(string $ServiceID) 设置服务id
 * @method string getHostID() 获取主机id
 * @method void setHostID(string $HostID) 设置主机id
 * @method string getHostIP() 获取主机ip
 * @method void setHostIP(string $HostIP) 设置主机ip
 * @method string getContainerName() 获取容器名
 * @method void setContainerName(string $ContainerName) 设置容器名
 * @method string getType() 获取服务名 例如nginx/redis
 * @method void setType(string $Type) 设置服务名 例如nginx/redis
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getRunAs() 获取账号
 * @method void setRunAs(string $RunAs) 设置账号
 * @method array getListen() 获取监听端口
 * @method void setListen(array $Listen) 设置监听端口
 * @method string getConfig() 获取配置
 * @method void setConfig(string $Config) 设置配置
 * @method integer getProcessCnt() 获取关联进程数
 * @method void setProcessCnt(integer $ProcessCnt) 设置关联进程数
 * @method string getAccessLog() 获取访问日志
 * @method void setAccessLog(string $AccessLog) 设置访问日志
 * @method string getErrorLog() 获取错误日志
 * @method void setErrorLog(string $ErrorLog) 设置错误日志
 * @method string getDataPath() 获取数据目录
 * @method void setDataPath(string $DataPath) 设置数据目录
 * @method string getWebRoot() 获取web目录
 * @method void setWebRoot(string $WebRoot) 设置web目录
 * @method array getPids() 获取关联的进程id
 * @method void setPids(array $Pids) 设置关联的进程id
 * @method string getMainType() 获取服务类型 app,web,db
 * @method void setMainType(string $MainType) 设置服务类型 app,web,db
 * @method string getExe() 获取执行文件
 * @method void setExe(string $Exe) 设置执行文件
 * @method string getParameter() 获取服务命令行参数
 * @method void setParameter(string $Parameter) 设置服务命令行参数
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getPublicIp() 获取外网ip
 * @method void setPublicIp(string $PublicIp) 设置外网ip
 */
class ServiceInfo extends AbstractModel
{
    /**
     * @var string 服务id
     */
    public $ServiceID;

    /**
     * @var string 主机id
     */
    public $HostID;

    /**
     * @var string 主机ip
     */
    public $HostIP;

    /**
     * @var string 容器名
     */
    public $ContainerName;

    /**
     * @var string 服务名 例如nginx/redis
     */
    public $Type;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 账号
     */
    public $RunAs;

    /**
     * @var array 监听端口
     */
    public $Listen;

    /**
     * @var string 配置
     */
    public $Config;

    /**
     * @var integer 关联进程数
     */
    public $ProcessCnt;

    /**
     * @var string 访问日志
     */
    public $AccessLog;

    /**
     * @var string 错误日志
     */
    public $ErrorLog;

    /**
     * @var string 数据目录
     */
    public $DataPath;

    /**
     * @var string web目录
     */
    public $WebRoot;

    /**
     * @var array 关联的进程id
     */
    public $Pids;

    /**
     * @var string 服务类型 app,web,db
     */
    public $MainType;

    /**
     * @var string 执行文件
     */
    public $Exe;

    /**
     * @var string 服务命令行参数
     */
    public $Parameter;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 外网ip
     */
    public $PublicIp;

    /**
     * @param string $ServiceID 服务id
     * @param string $HostID 主机id
     * @param string $HostIP 主机ip
     * @param string $ContainerName 容器名
     * @param string $Type 服务名 例如nginx/redis
     * @param string $Version 版本
     * @param string $RunAs 账号
     * @param array $Listen 监听端口
     * @param string $Config 配置
     * @param integer $ProcessCnt 关联进程数
     * @param string $AccessLog 访问日志
     * @param string $ErrorLog 错误日志
     * @param string $DataPath 数据目录
     * @param string $WebRoot web目录
     * @param array $Pids 关联的进程id
     * @param string $MainType 服务类型 app,web,db
     * @param string $Exe 执行文件
     * @param string $Parameter 服务命令行参数
     * @param string $ContainerId 容器id
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("Listen",$param) and $param["Listen"] !== null) {
            $this->Listen = $param["Listen"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("AccessLog",$param) and $param["AccessLog"] !== null) {
            $this->AccessLog = $param["AccessLog"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("WebRoot",$param) and $param["WebRoot"] !== null) {
            $this->WebRoot = $param["WebRoot"];
        }

        if (array_key_exists("Pids",$param) and $param["Pids"] !== null) {
            $this->Pids = $param["Pids"];
        }

        if (array_key_exists("MainType",$param) and $param["MainType"] !== null) {
            $this->MainType = $param["MainType"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }
    }
}
