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
 * 部署组容器信息
 *
 * @method string getTagName() 获取镜像版本名称
 * @method void setTagName(string $TagName) 设置镜像版本名称
 * @method string getContainerName() 获取容器名字
 * @method void setContainerName(string $ContainerName) 设置容器名字
 * @method string getRepoName() 获取镜像名
 * @method void setRepoName(string $RepoName) 设置镜像名
 * @method string getRepoType() 获取仓库类型,tcr，address，personal，默认personal
 * @method void setRepoType(string $RepoType) 设置仓库类型,tcr，address，personal，默认personal
 * @method TcrRepoInfo getTcrRepoInfo() 获取tcr仓库信息
 * @method void setTcrRepoInfo(TcrRepoInfo $TcrRepoInfo) 设置tcr仓库信息
 * @method string getServer() 获取镜像server
 * @method void setServer(string $Server) 设置镜像server
 * @method string getSecretName() 获取凭证名字
 * @method void setSecretName(string $SecretName) 设置凭证名字
 * @method string getJvmOpts() 获取jvm 参数
 * @method void setJvmOpts(string $JvmOpts) 设置jvm 参数
 * @method string getCpuLimit() 获取容器最大的 CPU 核数，对应 K8S 的 limit
 * @method void setCpuLimit(string $CpuLimit) 设置容器最大的 CPU 核数，对应 K8S 的 limit
 * @method string getCpuRequest() 获取容器分配的 CPU 核数，对应 K8S 的 request
 * @method void setCpuRequest(string $CpuRequest) 设置容器分配的 CPU 核数，对应 K8S 的 request
 * @method string getMemRequest() 获取容器分配的内存 MiB 数，对应 K8S 的 request
 * @method void setMemRequest(string $MemRequest) 设置容器分配的内存 MiB 数，对应 K8S 的 request
 * @method string getMemLimit() 获取容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method void setMemLimit(string $MemLimit) 设置容器最大的内存 MiB 数，对应 K8S 的 limit
 * @method HealthCheckSettings getHealthCheckSettings() 获取健康检查配置信息
 * @method void setHealthCheckSettings(HealthCheckSettings $HealthCheckSettings) 设置健康检查配置信息
 * @method array getEnvs() 获取环境变量
 * @method void setEnvs(array $Envs) 设置环境变量
 * @method array getUserEnvs() 获取环境变量,作为入参时不用填
 * @method void setUserEnvs(array $UserEnvs) 设置环境变量,作为入参时不用填
 * @method array getVolumeMountInfoList() 获取数据卷挂载点信息
 * @method void setVolumeMountInfoList(array $VolumeMountInfoList) 设置数据卷挂载点信息
 */
class GroupContainerInfo extends AbstractModel
{
    /**
     * @var string 镜像版本名称
     */
    public $TagName;

    /**
     * @var string 容器名字
     */
    public $ContainerName;

    /**
     * @var string 镜像名
     */
    public $RepoName;

    /**
     * @var string 仓库类型,tcr，address，personal，默认personal
     */
    public $RepoType;

    /**
     * @var TcrRepoInfo tcr仓库信息
     */
    public $TcrRepoInfo;

    /**
     * @var string 镜像server
     */
    public $Server;

    /**
     * @var string 凭证名字
     */
    public $SecretName;

    /**
     * @var string jvm 参数
     */
    public $JvmOpts;

    /**
     * @var string 容器最大的 CPU 核数，对应 K8S 的 limit
     */
    public $CpuLimit;

    /**
     * @var string 容器分配的 CPU 核数，对应 K8S 的 request
     */
    public $CpuRequest;

    /**
     * @var string 容器分配的内存 MiB 数，对应 K8S 的 request
     */
    public $MemRequest;

    /**
     * @var string 容器最大的内存 MiB 数，对应 K8S 的 limit
     */
    public $MemLimit;

    /**
     * @var HealthCheckSettings 健康检查配置信息
     */
    public $HealthCheckSettings;

    /**
     * @var array 环境变量
     */
    public $Envs;

    /**
     * @var array 环境变量,作为入参时不用填
     */
    public $UserEnvs;

    /**
     * @var array 数据卷挂载点信息
     */
    public $VolumeMountInfoList;

    /**
     * @param string $TagName 镜像版本名称
     * @param string $ContainerName 容器名字
     * @param string $RepoName 镜像名
     * @param string $RepoType 仓库类型,tcr，address，personal，默认personal
     * @param TcrRepoInfo $TcrRepoInfo tcr仓库信息
     * @param string $Server 镜像server
     * @param string $SecretName 凭证名字
     * @param string $JvmOpts jvm 参数
     * @param string $CpuLimit 容器最大的 CPU 核数，对应 K8S 的 limit
     * @param string $CpuRequest 容器分配的 CPU 核数，对应 K8S 的 request
     * @param string $MemRequest 容器分配的内存 MiB 数，对应 K8S 的 request
     * @param string $MemLimit 容器最大的内存 MiB 数，对应 K8S 的 limit
     * @param HealthCheckSettings $HealthCheckSettings 健康检查配置信息
     * @param array $Envs 环境变量
     * @param array $UserEnvs 环境变量,作为入参时不用填
     * @param array $VolumeMountInfoList 数据卷挂载点信息
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
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

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("JvmOpts",$param) and $param["JvmOpts"] !== null) {
            $this->JvmOpts = $param["JvmOpts"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("MemRequest",$param) and $param["MemRequest"] !== null) {
            $this->MemRequest = $param["MemRequest"];
        }

        if (array_key_exists("MemLimit",$param) and $param["MemLimit"] !== null) {
            $this->MemLimit = $param["MemLimit"];
        }

        if (array_key_exists("HealthCheckSettings",$param) and $param["HealthCheckSettings"] !== null) {
            $this->HealthCheckSettings = new HealthCheckSettings();
            $this->HealthCheckSettings->deserialize($param["HealthCheckSettings"]);
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

        if (array_key_exists("VolumeMountInfoList",$param) and $param["VolumeMountInfoList"] !== null) {
            $this->VolumeMountInfoList = [];
            foreach ($param["VolumeMountInfoList"] as $key => $value){
                $obj = new VolumeMountInfo();
                $obj->deserialize($value);
                array_push($this->VolumeMountInfoList, $obj);
            }
        }
    }
}
