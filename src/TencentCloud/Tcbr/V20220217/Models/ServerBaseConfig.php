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
 * @method string getEnvId() 获取<p>环境 Id</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境 Id</p>
 * @method string getServerName() 获取<p>服务名</p>
 * @method void setServerName(string $ServerName) 设置<p>服务名</p>
 * @method array getOpenAccessTypes() 获取<p>是否开启公网访问</p>
 * @method void setOpenAccessTypes(array $OpenAccessTypes) 设置<p>是否开启公网访问</p>
 * @method float getCpu() 获取<p>Cpu 规格</p>
 * @method void setCpu(float $Cpu) 设置<p>Cpu 规格</p>
 * @method float getMem() 获取<p>Mem 规格</p>
 * @method void setMem(float $Mem) 设置<p>Mem 规格</p>
 * @method integer getMinNum() 获取<p>最小副本数</p>
 * @method void setMinNum(integer $MinNum) 设置<p>最小副本数</p>
 * @method integer getMaxNum() 获取<p>最大副本数</p>
 * @method void setMaxNum(integer $MaxNum) 设置<p>最大副本数</p>
 * @method array getPolicyDetails() 获取<p>扩缩容配置</p>
 * @method void setPolicyDetails(array $PolicyDetails) 设置<p>扩缩容配置</p>
 * @method string getCustomLogs() 获取<p>日志采集路径</p>
 * @method void setCustomLogs(string $CustomLogs) 设置<p>日志采集路径</p>
 * @method string getEnvParams() 获取<p>环境变量</p>
 * @method void setEnvParams(string $EnvParams) 设置<p>环境变量</p>
 * @method integer getInitialDelaySeconds() 获取<p>延迟检测时间</p>
 * @method void setInitialDelaySeconds(integer $InitialDelaySeconds) 设置<p>延迟检测时间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getPort() 获取<p>服务端口</p>
 * @method void setPort(integer $Port) 设置<p>服务端口</p>
 * @method boolean getHasDockerfile() 获取<p>是否有Dockerfile</p>
 * @method void setHasDockerfile(boolean $HasDockerfile) 设置<p>是否有Dockerfile</p>
 * @method string getDockerfile() 获取<p>Dockerfile 文件名</p>
 * @method void setDockerfile(string $Dockerfile) 设置<p>Dockerfile 文件名</p>
 * @method string getBuildDir() 获取<p>构建目录</p>
 * @method void setBuildDir(string $BuildDir) 设置<p>构建目录</p>
 * @method string getLogType() 获取<p>日志类型: none | default | custom</p>
 * @method void setLogType(string $LogType) 设置<p>日志类型: none | default | custom</p>
 * @method string getLogSetId() 获取<p>cls setId</p>
 * @method void setLogSetId(string $LogSetId) 设置<p>cls setId</p>
 * @method string getLogTopicId() 获取<p>cls 主题id</p>
 * @method void setLogTopicId(string $LogTopicId) 设置<p>cls 主题id</p>
 * @method string getLogParseType() 获取<p>解析类型：json ｜ line</p>
 * @method void setLogParseType(string $LogParseType) 设置<p>解析类型：json ｜ line</p>
 * @method string getTag() 获取<p>服务标签, function: 函数托管</p>
 * @method void setTag(string $Tag) 设置<p>服务标签, function: 函数托管</p>
 * @method string getInternalAccess() 获取<p>内网访问开关 close | open</p>
 * @method void setInternalAccess(string $InternalAccess) 设置<p>内网访问开关 close | open</p>
 * @method string getInternalDomain() 获取<p>内网域名</p>
 * @method void setInternalDomain(string $InternalDomain) 设置<p>内网域名</p>
 * @method string getOperationMode() 获取<p>运行模式</p>
 * @method void setOperationMode(string $OperationMode) 设置<p>运行模式</p>
 * @method array getTimerScale() 获取<p>定时扩缩容配置</p>
 * @method void setTimerScale(array $TimerScale) 设置<p>定时扩缩容配置</p>
 * @method array getEntryPoint() 获取<p>Dockerfile EntryPoint 参数</p>
 * @method void setEntryPoint(array $EntryPoint) 设置<p>Dockerfile EntryPoint 参数</p>
 * @method array getCmd() 获取<p>Dockerfile Cmd 参数</p>
 * @method void setCmd(array $Cmd) 设置<p>Dockerfile Cmd 参数</p>
 * @method string getSessionAffinity() 获取<p>会话亲和性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionAffinity(string $SessionAffinity) 设置<p>会话亲和性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcConf getVpcConf() 获取<p>Vpc 配置参数</p>
 * @method void setVpcConf(VpcConf $VpcConf) 设置<p>Vpc 配置参数</p>
 * @method array getVolumesConf() 获取<p>存储配置信息</p>
 * @method void setVolumesConf(array $VolumesConf) 设置<p>存储配置信息</p>
 * @method string getLinkImageRegistry() 获取<p>关联镜像密钥</p>
 * @method void setLinkImageRegistry(string $LinkImageRegistry) 设置<p>关联镜像密钥</p>
 * @method PublicNetConf getPublicNetConf() 获取<p>公网访问配置</p>
 * @method void setPublicNetConf(PublicNetConf $PublicNetConf) 设置<p>公网访问配置</p>
 */
class ServerBaseConfig extends AbstractModel
{
    /**
     * @var string <p>环境 Id</p>
     */
    public $EnvId;

    /**
     * @var string <p>服务名</p>
     */
    public $ServerName;

    /**
     * @var array <p>是否开启公网访问</p>
     */
    public $OpenAccessTypes;

    /**
     * @var float <p>Cpu 规格</p>
     */
    public $Cpu;

    /**
     * @var float <p>Mem 规格</p>
     */
    public $Mem;

    /**
     * @var integer <p>最小副本数</p>
     */
    public $MinNum;

    /**
     * @var integer <p>最大副本数</p>
     */
    public $MaxNum;

    /**
     * @var array <p>扩缩容配置</p>
     */
    public $PolicyDetails;

    /**
     * @var string <p>日志采集路径</p>
     */
    public $CustomLogs;

    /**
     * @var string <p>环境变量</p>
     */
    public $EnvParams;

    /**
     * @var integer <p>延迟检测时间</p>
     */
    public $InitialDelaySeconds;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>服务端口</p>
     */
    public $Port;

    /**
     * @var boolean <p>是否有Dockerfile</p>
     */
    public $HasDockerfile;

    /**
     * @var string <p>Dockerfile 文件名</p>
     */
    public $Dockerfile;

    /**
     * @var string <p>构建目录</p>
     */
    public $BuildDir;

    /**
     * @var string <p>日志类型: none | default | custom</p>
     */
    public $LogType;

    /**
     * @var string <p>cls setId</p>
     */
    public $LogSetId;

    /**
     * @var string <p>cls 主题id</p>
     */
    public $LogTopicId;

    /**
     * @var string <p>解析类型：json ｜ line</p>
     */
    public $LogParseType;

    /**
     * @var string <p>服务标签, function: 函数托管</p>
     */
    public $Tag;

    /**
     * @var string <p>内网访问开关 close | open</p>
     */
    public $InternalAccess;

    /**
     * @var string <p>内网域名</p>
     */
    public $InternalDomain;

    /**
     * @var string <p>运行模式</p>
     */
    public $OperationMode;

    /**
     * @var array <p>定时扩缩容配置</p>
     */
    public $TimerScale;

    /**
     * @var array <p>Dockerfile EntryPoint 参数</p>
     */
    public $EntryPoint;

    /**
     * @var array <p>Dockerfile Cmd 参数</p>
     */
    public $Cmd;

    /**
     * @var string <p>会话亲和性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionAffinity;

    /**
     * @var VpcConf <p>Vpc 配置参数</p>
     */
    public $VpcConf;

    /**
     * @var array <p>存储配置信息</p>
     */
    public $VolumesConf;

    /**
     * @var string <p>关联镜像密钥</p>
     */
    public $LinkImageRegistry;

    /**
     * @var PublicNetConf <p>公网访问配置</p>
     */
    public $PublicNetConf;

    /**
     * @param string $EnvId <p>环境 Id</p>
     * @param string $ServerName <p>服务名</p>
     * @param array $OpenAccessTypes <p>是否开启公网访问</p>
     * @param float $Cpu <p>Cpu 规格</p>
     * @param float $Mem <p>Mem 规格</p>
     * @param integer $MinNum <p>最小副本数</p>
     * @param integer $MaxNum <p>最大副本数</p>
     * @param array $PolicyDetails <p>扩缩容配置</p>
     * @param string $CustomLogs <p>日志采集路径</p>
     * @param string $EnvParams <p>环境变量</p>
     * @param integer $InitialDelaySeconds <p>延迟检测时间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $Port <p>服务端口</p>
     * @param boolean $HasDockerfile <p>是否有Dockerfile</p>
     * @param string $Dockerfile <p>Dockerfile 文件名</p>
     * @param string $BuildDir <p>构建目录</p>
     * @param string $LogType <p>日志类型: none | default | custom</p>
     * @param string $LogSetId <p>cls setId</p>
     * @param string $LogTopicId <p>cls 主题id</p>
     * @param string $LogParseType <p>解析类型：json ｜ line</p>
     * @param string $Tag <p>服务标签, function: 函数托管</p>
     * @param string $InternalAccess <p>内网访问开关 close | open</p>
     * @param string $InternalDomain <p>内网域名</p>
     * @param string $OperationMode <p>运行模式</p>
     * @param array $TimerScale <p>定时扩缩容配置</p>
     * @param array $EntryPoint <p>Dockerfile EntryPoint 参数</p>
     * @param array $Cmd <p>Dockerfile Cmd 参数</p>
     * @param string $SessionAffinity <p>会话亲和性开关</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcConf $VpcConf <p>Vpc 配置参数</p>
     * @param array $VolumesConf <p>存储配置信息</p>
     * @param string $LinkImageRegistry <p>关联镜像密钥</p>
     * @param PublicNetConf $PublicNetConf <p>公网访问配置</p>
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

        if (array_key_exists("VolumesConf",$param) and $param["VolumesConf"] !== null) {
            $this->VolumesConf = [];
            foreach ($param["VolumesConf"] as $key => $value){
                $obj = new VolumeConf();
                $obj->deserialize($value);
                array_push($this->VolumesConf, $obj);
            }
        }

        if (array_key_exists("LinkImageRegistry",$param) and $param["LinkImageRegistry"] !== null) {
            $this->LinkImageRegistry = $param["LinkImageRegistry"];
        }

        if (array_key_exists("PublicNetConf",$param) and $param["PublicNetConf"] !== null) {
            $this->PublicNetConf = new PublicNetConf();
            $this->PublicNetConf->deserialize($param["PublicNetConf"]);
        }
    }
}
