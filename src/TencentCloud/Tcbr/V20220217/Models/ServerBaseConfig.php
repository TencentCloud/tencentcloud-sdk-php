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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务基础配置信息
 *
 * @method string getEnvId() 获取环境 Id
 * @method void setEnvId(string $EnvId) 设置环境 Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method array getOpenAccessTypes() 获取是否开启公网访问
 * @method void setOpenAccessTypes(array $OpenAccessTypes) 设置是否开启公网访问
 * @method float getCpu() 获取Cpu 规格
 * @method void setCpu(float $Cpu) 设置Cpu 规格
 * @method float getMem() 获取Mem 规格
 * @method void setMem(float $Mem) 设置Mem 规格
 * @method integer getMinNum() 获取最小副本数
 * @method void setMinNum(integer $MinNum) 设置最小副本数
 * @method integer getMaxNum() 获取最大副本数
 * @method void setMaxNum(integer $MaxNum) 设置最大副本数
 * @method array getPolicyDetails() 获取扩缩容配置
 * @method void setPolicyDetails(array $PolicyDetails) 设置扩缩容配置
 * @method string getCustomLogs() 获取日志采集路径
 * @method void setCustomLogs(string $CustomLogs) 设置日志采集路径
 * @method string getEnvParams() 获取环境变量
 * @method void setEnvParams(string $EnvParams) 设置环境变量
 * @method integer getInitialDelaySeconds() 获取延迟检测时间
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置延迟检测时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getPort() 获取服务端口
 * @method void setPort(integer $Port) 设置服务端口
 * @method boolean getHasDockerfile() 获取是否有Dockerfile
 * @method void setHasDockerfile(boolean $HasDockerfile) 设置是否有Dockerfile
 * @method string getDockerfile() 获取Dockerfile 文件名
 * @method void setDockerfile(string $Dockerfile) 设置Dockerfile 文件名
 * @method string getBuildDir() 获取构建目录
 * @method void setBuildDir(string $BuildDir) 设置构建目录
 * @method string getLogType() 获取日志类型: none | default | custom
 * @method void setLogType(string $LogType) 设置日志类型: none | default | custom
 * @method string getLogSetId() 获取cls setId
 * @method void setLogSetId(string $LogSetId) 设置cls setId
 * @method string getLogTopicId() 获取cls 主题id
 * @method void setLogTopicId(string $LogTopicId) 设置cls 主题id
 * @method string getLogParseType() 获取解析类型：json ｜ line
 * @method void setLogParseType(string $LogParseType) 设置解析类型：json ｜ line
 * @method string getTag() 获取服务标签, function: 函数托管
 * @method void setTag(string $Tag) 设置服务标签, function: 函数托管
 * @method string getInternalAccess() 获取内网访问开关 close | open
 * @method void setInternalAccess(string $InternalAccess) 设置内网访问开关 close | open
 * @method string getInternalDomain() 获取内网域名
 * @method void setInternalDomain(string $InternalDomain) 设置内网域名
 * @method string getOperationMode() 获取运行模式
 * @method void setOperationMode(string $OperationMode) 设置运行模式
 * @method array getTimerScale() 获取定时扩缩容配置
 * @method void setTimerScale(array $TimerScale) 设置定时扩缩容配置
 * @method array getEntryPoint() 获取Dockerfile EntryPoint 参数
 * @method void setEntryPoint(array $EntryPoint) 设置Dockerfile EntryPoint 参数
 * @method array getCmd() 获取Dockerfile Cmd 参数
 * @method void setCmd(array $Cmd) 设置Dockerfile Cmd 参数
 * @method string getSessionAffinity() 获取会话亲和性开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionAffinity(string $SessionAffinity) 设置会话亲和性开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcConf getVpcConf() 获取Vpc 配置参数
 * @method void setVpcConf(VpcConf $VpcConf) 设置Vpc 配置参数
 */
class ServerBaseConfig extends AbstractModel
{
    /**
     * @var string 环境 Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var array 是否开启公网访问
     */
    public $OpenAccessTypes;

    /**
     * @var float Cpu 规格
     */
    public $Cpu;

    /**
     * @var float Mem 规格
     */
    public $Mem;

    /**
     * @var integer 最小副本数
     */
    public $MinNum;

    /**
     * @var integer 最大副本数
     */
    public $MaxNum;

    /**
     * @var array 扩缩容配置
     */
    public $PolicyDetails;

    /**
     * @var string 日志采集路径
     */
    public $CustomLogs;

    /**
     * @var string 环境变量
     */
    public $EnvParams;

    /**
     * @var integer 延迟检测时间
     */
    public $InitialDelaySeconds;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 服务端口
     */
    public $Port;

    /**
     * @var boolean 是否有Dockerfile
     */
    public $HasDockerfile;

    /**
     * @var string Dockerfile 文件名
     */
    public $Dockerfile;

    /**
     * @var string 构建目录
     */
    public $BuildDir;

    /**
     * @var string 日志类型: none | default | custom
     */
    public $LogType;

    /**
     * @var string cls setId
     */
    public $LogSetId;

    /**
     * @var string cls 主题id
     */
    public $LogTopicId;

    /**
     * @var string 解析类型：json ｜ line
     */
    public $LogParseType;

    /**
     * @var string 服务标签, function: 函数托管
     */
    public $Tag;

    /**
     * @var string 内网访问开关 close | open
     */
    public $InternalAccess;

    /**
     * @var string 内网域名
     */
    public $InternalDomain;

    /**
     * @var string 运行模式
     */
    public $OperationMode;

    /**
     * @var array 定时扩缩容配置
     */
    public $TimerScale;

    /**
     * @var array Dockerfile EntryPoint 参数
     */
    public $EntryPoint;

    /**
     * @var array Dockerfile Cmd 参数
     */
    public $Cmd;

    /**
     * @var string 会话亲和性开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionAffinity;

    /**
     * @var VpcConf Vpc 配置参数
     */
    public $VpcConf;

    /**
     * @param string $EnvId 环境 Id
     * @param string $ServerName 服务名
     * @param array $OpenAccessTypes 是否开启公网访问
     * @param float $Cpu Cpu 规格
     * @param float $Mem Mem 规格
     * @param integer $MinNum 最小副本数
     * @param integer $MaxNum 最大副本数
     * @param array $PolicyDetails 扩缩容配置
     * @param string $CustomLogs 日志采集路径
     * @param string $EnvParams 环境变量
     * @param integer $InitialDelaySeconds 延迟检测时间
     * @param string $CreateTime 创建时间
     * @param integer $Port 服务端口
     * @param boolean $HasDockerfile 是否有Dockerfile
     * @param string $Dockerfile Dockerfile 文件名
     * @param string $BuildDir 构建目录
     * @param string $LogType 日志类型: none | default | custom
     * @param string $LogSetId cls setId
     * @param string $LogTopicId cls 主题id
     * @param string $LogParseType 解析类型：json ｜ line
     * @param string $Tag 服务标签, function: 函数托管
     * @param string $InternalAccess 内网访问开关 close | open
     * @param string $InternalDomain 内网域名
     * @param string $OperationMode 运行模式
     * @param array $TimerScale 定时扩缩容配置
     * @param array $EntryPoint Dockerfile EntryPoint 参数
     * @param array $Cmd Dockerfile Cmd 参数
     * @param string $SessionAffinity 会话亲和性开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcConf $VpcConf Vpc 配置参数
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OpenAccessTypes",$param) and $param["OpenAccessTypes"] !== null) {
            $this->OpenAccessTypes = $param["OpenAccessTypes"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("MinNum",$param) and $param["MinNum"] !== null) {
            $this->MinNum = $param["MinNum"];
        }

        if (array_key_exists("MaxNum",$param) and $param["MaxNum"] !== null) {
            $this->MaxNum = $param["MaxNum"];
        }

        if (array_key_exists("PolicyDetails",$param) and $param["PolicyDetails"] !== null) {
            $this->PolicyDetails = [];
            foreach ($param["PolicyDetails"] as $key => $value){
                $obj = new HpaPolicy();
                $obj->deserialize($value);
                array_push($this->PolicyDetails, $obj);
            }
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
        }

        if (array_key_exists("EnvParams",$param) and $param["EnvParams"] !== null) {
            $this->EnvParams = $param["EnvParams"];
        }

        if (array_key_exists("InitialDelaySeconds",$param) and $param["InitialDelaySeconds"] !== null) {
            $this->InitialDelaySeconds = $param["InitialDelaySeconds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HasDockerfile",$param) and $param["HasDockerfile"] !== null) {
            $this->HasDockerfile = $param["HasDockerfile"];
        }

        if (array_key_exists("Dockerfile",$param) and $param["Dockerfile"] !== null) {
            $this->Dockerfile = $param["Dockerfile"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("LogSetId",$param) and $param["LogSetId"] !== null) {
            $this->LogSetId = $param["LogSetId"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("LogParseType",$param) and $param["LogParseType"] !== null) {
            $this->LogParseType = $param["LogParseType"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("InternalAccess",$param) and $param["InternalAccess"] !== null) {
            $this->InternalAccess = $param["InternalAccess"];
        }

        if (array_key_exists("InternalDomain",$param) and $param["InternalDomain"] !== null) {
            $this->InternalDomain = $param["InternalDomain"];
        }

        if (array_key_exists("OperationMode",$param) and $param["OperationMode"] !== null) {
            $this->OperationMode = $param["OperationMode"];
        }

        if (array_key_exists("TimerScale",$param) and $param["TimerScale"] !== null) {
            $this->TimerScale = [];
            foreach ($param["TimerScale"] as $key => $value){
                $obj = new TimerScale();
                $obj->deserialize($value);
                array_push($this->TimerScale, $obj);
            }
        }

        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            $this->EntryPoint = $param["EntryPoint"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("SessionAffinity",$param) and $param["SessionAffinity"] !== null) {
            $this->SessionAffinity = $param["SessionAffinity"];
        }

        if (array_key_exists("VpcConf",$param) and $param["VpcConf"] !== null) {
            $this->VpcConf = new VpcConf();
            $this->VpcConf->deserialize($param["VpcConf"]);
        }
    }
}
