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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器详细信息
 *
 * @method string getName() 获取容器名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置容器名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerId() 获取容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerId(string $ContainerId) 设置容器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置容器状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReason() 获取容器的Reason
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置容器的Reason
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置镜像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsBusinessMainContainer() 获取是否为业务主容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBusinessMainContainer(boolean $IsBusinessMainContainer) 设置是否为业务主容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServer() 获取镜像Server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置镜像Server
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoName() 获取镜像名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoName(string $RepoName) 设置镜像名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRepoType() 获取仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRepoType(string $RepoType) 设置仓库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method TcrRepoInfo getTcrRepoInfo() 获取TCR 仓库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置TCR 仓库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretName() 获取容器访问凭证名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretName(string $SecretName) 设置容器访问凭证名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTagName() 获取镜像版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagName(string $TagName) 设置镜像版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取容器Cpu request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuRequest(string $CpuRequest) 设置容器Cpu request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuLimit() 获取容器Cpu limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuLimit(string $CpuLimit) 设置容器Cpu limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemRequest() 获取容器Mem request
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemRequest(string $MemRequest) 设置容器Mem request
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemLimit() 获取容器Mem Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemLimit(string $MemLimit) 设置容器Mem Limit
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnvs() 获取环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvs(array $Envs) 设置环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserEnvs() 获取环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserEnvs(array $UserEnvs) 设置环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJvmOpts() 获取JVM参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJvmOpts(string $JvmOpts) 设置JVM参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumeMountInfoList() 获取挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMountInfoList(array $VolumeMountInfoList) 设置挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getInitContainerEnable() 获取是否为初始化容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitContainerEnable(boolean $InitContainerEnable) 设置是否为初始化容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLifeCycleHookList() 获取生命周期钩子
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeCycleHookList(array $LifeCycleHookList) 设置生命周期钩子
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPrivilegeContainerEnable() 获取是否为特权容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeContainerEnable(boolean $PrivilegeContainerEnable) 设置是否为特权容器
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunCommand() 获取运行命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunCommand(string $RunCommand) 设置运行命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunArg() 获取运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunArg(string $RunArg) 设置运行参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取容器名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置容器名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContainerInfo extends AbstractModel
{
    /**
     * @var string 容器名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerId;

    /**
     * @var string 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 容器的Reason
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var boolean 是否为业务主容器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBusinessMainContainer;

    /**
     * @var string 镜像Server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var string 镜像名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoName;

    /**
     * @var string 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RepoType;

    /**
     * @var TcrRepoInfo TCR 仓库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TcrRepoInfo;

    /**
     * @var string 容器访问凭证名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretName;

    /**
     * @var string 镜像版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagName;

    /**
     * @var HealthCheckSettings 健康检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthCheckSettings;

    /**
     * @var string 容器Cpu request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuRequest;

    /**
     * @var string 容器Cpu limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuLimit;

    /**
     * @var string 容器Mem request
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemRequest;

    /**
     * @var string 容器Mem Limit
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemLimit;

    /**
     * @var array 环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Envs;

    /**
     * @var array 环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserEnvs;

    /**
     * @var string JVM参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JvmOpts;

    /**
     * @var array 挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMountInfoList;

    /**
     * @var boolean 是否为初始化容器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitContainerEnable;

    /**
     * @var array 生命周期钩子
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeCycleHookList;

    /**
     * @var boolean 是否为特权容器
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeContainerEnable;

    /**
     * @var string 运行命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunCommand;

    /**
     * @var string 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunArg;

    /**
     * @var string 容器名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @param string $Name 容器名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerId 容器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 容器状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reason 容器的Reason
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 镜像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsBusinessMainContainer 是否为业务主容器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Server 镜像Server
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoName 镜像名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RepoType 仓库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param TcrRepoInfo $TcrRepoInfo TCR 仓库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretName 容器访问凭证名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TagName 镜像版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param HealthCheckSettings $HealthCheckSettings 健康检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest 容器Cpu request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuLimit 容器Cpu limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemRequest 容器Mem request
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemLimit 容器Mem Limit
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Envs 环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserEnvs 环境变量参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JvmOpts JVM参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumeMountInfoList 挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $InitContainerEnable 是否为初始化容器
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LifeCycleHookList 生命周期钩子
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PrivilegeContainerEnable 是否为特权容器
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunCommand 运行命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunArg 运行参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName 容器名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("IsBusinessMainContainer",$param) and $param["IsBusinessMainContainer"] !== null) {
            $this->IsBusinessMainContainer = $param["IsBusinessMainContainer"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("TcrRepoInfo",$param) and $param["TcrRepoInfo"] !== null) {
            $this->TcrRepoInfo = new TcrRepoInfo();
            $this->TcrRepoInfo->deserialize($param["TcrRepoInfo"]);
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("UserEnvs",$param) and $param["UserEnvs"] !== null) {
            $this->UserEnvs = [];
            foreach ($param["UserEnvs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->UserEnvs, $obj);
            }
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("VolumeMountInfoList",$param) and $param["VolumeMountInfoList"] !== null) {
            $this->VolumeMountInfoList = [];
            foreach ($param["VolumeMountInfoList"] as $key => $value){
                $obj = new VolumeMountInfo();
                $obj->deserialize($value);
                array_push($this->VolumeMountInfoList, $obj);
            }
        }

        if (array_key_exists("InitContainerEnable",$param) and $param["InitContainerEnable"] !== null) {
            $this->InitContainerEnable = $param["InitContainerEnable"];
        }

        if (array_key_exists("LifeCycleHookList",$param) and $param["LifeCycleHookList"] !== null) {
            $this->LifeCycleHookList = [];
            foreach ($param["LifeCycleHookList"] as $key => $value){
                $obj = new LifeCycleHook();
                $obj->deserialize($value);
                array_push($this->LifeCycleHookList, $obj);
            }
        }

        if (array_key_exists("PrivilegeContainerEnable",$param) and $param["PrivilegeContainerEnable"] !== null) {
            $this->PrivilegeContainerEnable = $param["PrivilegeContainerEnable"];
        }

        if (array_key_exists("RunCommand",$param) and $param["RunCommand"] !== null) {
            $this->RunCommand = $param["RunCommand"];
        }

        if (array_key_exists("RunArg",$param) and $param["RunArg"] !== null) {
            $this->RunArg = $param["RunArg"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }
    }
}
