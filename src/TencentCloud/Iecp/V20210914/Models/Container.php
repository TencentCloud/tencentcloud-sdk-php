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
 * 容器配置信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getImageName() 获取镜像名
 * @method void setImageName(string $ImageName) 设置镜像名
 * @method string getImageVersion() 获取镜像版本
 * @method void setImageVersion(string $ImageVersion) 设置镜像版本
 * @method string getImagePullPolicy() 获取镜像拉取策略(Always|Never|IfNotPresent)
 * @method void setImagePullPolicy(string $ImagePullPolicy) 设置镜像拉取策略(Always|Never|IfNotPresent)
 * @method array getVolumeMounts() 获取卷挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMounts(array $VolumeMounts) 设置卷挂载配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCpuRequest() 获取cpu最低配置
 * @method void setCpuRequest(string $CpuRequest) 设置cpu最低配置
 * @method string getCpuLimit() 获取cpu最高限制
 * @method void setCpuLimit(string $CpuLimit) 设置cpu最高限制
 * @method string getMemoryRequest() 获取内存最低要求
 * @method void setMemoryRequest(string $MemoryRequest) 设置内存最低要求
 * @method string getMemoryLimit() 获取内存最高要求
 * @method void setMemoryLimit(string $MemoryLimit) 设置内存最高要求
 * @method string getMemoryUnit() 获取内存单位
 * @method void setMemoryUnit(string $MemoryUnit) 设置内存单位
 * @method string getGpuLimit() 获取gpu最高限制
 * @method void setGpuLimit(string $GpuLimit) 设置gpu最高限制
 * @method array getResourceMapCloud() 获取资源配置
 * @method void setResourceMapCloud(array $ResourceMapCloud) 设置资源配置
 * @method array getEnvs() 获取环境配置
 * @method void setEnvs(array $Envs) 设置环境配置
 * @method string getWorkingDir() 获取工作目录
 * @method void setWorkingDir(string $WorkingDir) 设置工作目录
 * @method array getCommands() 获取命令
 * @method void setCommands(array $Commands) 设置命令
 * @method array getArgs() 获取参数
 * @method void setArgs(array $Args) 设置参数
 * @method SecurityContext getSecurityContext() 获取安全配置
 * @method void setSecurityContext(SecurityContext $SecurityContext) 设置安全配置
 * @method Probe getReadinessProbe() 获取就绪探针配置
 * @method void setReadinessProbe(Probe $ReadinessProbe) 设置就绪探针配置
 */
class Container extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 镜像名
     */
    public $ImageName;

    /**
     * @var string 镜像版本
     */
    public $ImageVersion;

    /**
     * @var string 镜像拉取策略(Always|Never|IfNotPresent)
     */
    public $ImagePullPolicy;

    /**
     * @var array 卷挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMounts;

    /**
     * @var string cpu最低配置
     */
    public $CpuRequest;

    /**
     * @var string cpu最高限制
     */
    public $CpuLimit;

    /**
     * @var string 内存最低要求
     */
    public $MemoryRequest;

    /**
     * @var string 内存最高要求
     */
    public $MemoryLimit;

    /**
     * @var string 内存单位
     */
    public $MemoryUnit;

    /**
     * @var string gpu最高限制
     */
    public $GpuLimit;

    /**
     * @var array 资源配置
     */
    public $ResourceMapCloud;

    /**
     * @var array 环境配置
     */
    public $Envs;

    /**
     * @var string 工作目录
     */
    public $WorkingDir;

    /**
     * @var array 命令
     */
    public $Commands;

    /**
     * @var array 参数
     */
    public $Args;

    /**
     * @var SecurityContext 安全配置
     */
    public $SecurityContext;

    /**
     * @var Probe 就绪探针配置
     */
    public $ReadinessProbe;

    /**
     * @param string $Name 名称
     * @param string $ImageName 镜像名
     * @param string $ImageVersion 镜像版本
     * @param string $ImagePullPolicy 镜像拉取策略(Always|Never|IfNotPresent)
     * @param array $VolumeMounts 卷挂载配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CpuRequest cpu最低配置
     * @param string $CpuLimit cpu最高限制
     * @param string $MemoryRequest 内存最低要求
     * @param string $MemoryLimit 内存最高要求
     * @param string $MemoryUnit 内存单位
     * @param string $GpuLimit gpu最高限制
     * @param array $ResourceMapCloud 资源配置
     * @param array $Envs 环境配置
     * @param string $WorkingDir 工作目录
     * @param array $Commands 命令
     * @param array $Args 参数
     * @param SecurityContext $SecurityContext 安全配置
     * @param Probe $ReadinessProbe 就绪探针配置
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

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("CpuRequest",$param) and $param["CpuRequest"] !== null) {
            $this->CpuRequest = $param["CpuRequest"];
        }

        if (array_key_exists("CpuLimit",$param) and $param["CpuLimit"] !== null) {
            $this->CpuLimit = $param["CpuLimit"];
        }

        if (array_key_exists("MemoryRequest",$param) and $param["MemoryRequest"] !== null) {
            $this->MemoryRequest = $param["MemoryRequest"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("MemoryUnit",$param) and $param["MemoryUnit"] !== null) {
            $this->MemoryUnit = $param["MemoryUnit"];
        }

        if (array_key_exists("GpuLimit",$param) and $param["GpuLimit"] !== null) {
            $this->GpuLimit = $param["GpuLimit"];
        }

        if (array_key_exists("ResourceMapCloud",$param) and $param["ResourceMapCloud"] !== null) {
            $this->ResourceMapCloud = [];
            foreach ($param["ResourceMapCloud"] as $key => $value){
                $obj = new KeyValueObj();
                $obj->deserialize($value);
                array_push($this->ResourceMapCloud, $obj);
            }
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new Env();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("WorkingDir",$param) and $param["WorkingDir"] !== null) {
            $this->WorkingDir = $param["WorkingDir"];
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = $param["Commands"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("SecurityContext",$param) and $param["SecurityContext"] !== null) {
            $this->SecurityContext = new SecurityContext();
            $this->SecurityContext->deserialize($param["SecurityContext"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new Probe();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }
    }
}
