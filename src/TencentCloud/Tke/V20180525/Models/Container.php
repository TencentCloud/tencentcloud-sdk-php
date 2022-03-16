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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EKS Instance Container容器
 *
 * @method string getImage() 获取镜像
 * @method void setImage(string $Image) 设置镜像
 * @method string getName() 获取容器名
 * @method void setName(string $Name) 设置容器名
 * @method array getCommands() 获取容器启动命令
 * @method void setCommands(array $Commands) 设置容器启动命令
 * @method array getArgs() 获取容器启动参数
 * @method void setArgs(array $Args) 设置容器启动参数
 * @method array getEnvironmentVars() 获取容器内操作系统的环境变量
 * @method void setEnvironmentVars(array $EnvironmentVars) 设置容器内操作系统的环境变量
 * @method float getCpu() 获取CPU，制改容器最多可使用的核数，该值不可超过容器实例的总核数。单位：核。
 * @method void setCpu(float $Cpu) 设置CPU，制改容器最多可使用的核数，该值不可超过容器实例的总核数。单位：核。
 * @method float getMemory() 获取内存，限制该容器最多可使用的内存值，该值不可超过容器实例的总内存值。单位：GiB
 * @method void setMemory(float $Memory) 设置内存，限制该容器最多可使用的内存值，该值不可超过容器实例的总内存值。单位：GiB
 * @method array getVolumeMounts() 获取数据卷挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumeMounts(array $VolumeMounts) 设置数据卷挂载信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerState getCurrentState() 获取当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentState(ContainerState $CurrentState) 设置当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkingDir() 获取容器工作目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkingDir(string $WorkingDir) 设置容器工作目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method LivenessOrReadinessProbe getLivenessProbe() 获取存活探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessProbe(LivenessOrReadinessProbe $LivenessProbe) 设置存活探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method LivenessOrReadinessProbe getReadinessProbe() 获取就绪探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadinessProbe(LivenessOrReadinessProbe $ReadinessProbe) 设置就绪探针
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGpuLimit() 获取Gpu限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGpuLimit(integer $GpuLimit) 设置Gpu限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method SecurityContext getSecurityContext() 获取容器的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityContext(SecurityContext $SecurityContext) 设置容器的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
 */
class Container extends AbstractModel
{
    /**
     * @var string 镜像
     */
    public $Image;

    /**
     * @var string 容器名
     */
    public $Name;

    /**
     * @var array 容器启动命令
     */
    public $Commands;

    /**
     * @var array 容器启动参数
     */
    public $Args;

    /**
     * @var array 容器内操作系统的环境变量
     */
    public $EnvironmentVars;

    /**
     * @var float CPU，制改容器最多可使用的核数，该值不可超过容器实例的总核数。单位：核。
     */
    public $Cpu;

    /**
     * @var float 内存，限制该容器最多可使用的内存值，该值不可超过容器实例的总内存值。单位：GiB
     */
    public $Memory;

    /**
     * @var array 数据卷挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumeMounts;

    /**
     * @var ContainerState 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentState;

    /**
     * @var integer 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestartCount;

    /**
     * @var string 容器工作目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkingDir;

    /**
     * @var LivenessOrReadinessProbe 存活探针
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessProbe;

    /**
     * @var LivenessOrReadinessProbe 就绪探针
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadinessProbe;

    /**
     * @var integer Gpu限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GpuLimit;

    /**
     * @var SecurityContext 容器的安全上下文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityContext;

    /**
     * @param string $Image 镜像
     * @param string $Name 容器名
     * @param array $Commands 容器启动命令
     * @param array $Args 容器启动参数
     * @param array $EnvironmentVars 容器内操作系统的环境变量
     * @param float $Cpu CPU，制改容器最多可使用的核数，该值不可超过容器实例的总核数。单位：核。
     * @param float $Memory 内存，限制该容器最多可使用的内存值，该值不可超过容器实例的总内存值。单位：GiB
     * @param array $VolumeMounts 数据卷挂载信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerState $CurrentState 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkingDir 容器工作目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param LivenessOrReadinessProbe $LivenessProbe 存活探针
注意：此字段可能返回 null，表示取不到有效值。
     * @param LivenessOrReadinessProbe $ReadinessProbe 就绪探针
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GpuLimit Gpu限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param SecurityContext $SecurityContext 容器的安全上下文
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Commands",$param) and $param["Commands"] !== null) {
            $this->Commands = $param["Commands"];
        }

        if (array_key_exists("Args",$param) and $param["Args"] !== null) {
            $this->Args = $param["Args"];
        }

        if (array_key_exists("EnvironmentVars",$param) and $param["EnvironmentVars"] !== null) {
            $this->EnvironmentVars = [];
            foreach ($param["EnvironmentVars"] as $key => $value){
                $obj = new EnvironmentVariable();
                $obj->deserialize($value);
                array_push($this->EnvironmentVars, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("VolumeMounts",$param) and $param["VolumeMounts"] !== null) {
            $this->VolumeMounts = [];
            foreach ($param["VolumeMounts"] as $key => $value){
                $obj = new VolumeMount();
                $obj->deserialize($value);
                array_push($this->VolumeMounts, $obj);
            }
        }

        if (array_key_exists("CurrentState",$param) and $param["CurrentState"] !== null) {
            $this->CurrentState = new ContainerState();
            $this->CurrentState->deserialize($param["CurrentState"]);
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("WorkingDir",$param) and $param["WorkingDir"] !== null) {
            $this->WorkingDir = $param["WorkingDir"];
        }

        if (array_key_exists("LivenessProbe",$param) and $param["LivenessProbe"] !== null) {
            $this->LivenessProbe = new LivenessOrReadinessProbe();
            $this->LivenessProbe->deserialize($param["LivenessProbe"]);
        }

        if (array_key_exists("ReadinessProbe",$param) and $param["ReadinessProbe"] !== null) {
            $this->ReadinessProbe = new LivenessOrReadinessProbe();
            $this->ReadinessProbe->deserialize($param["ReadinessProbe"]);
        }

        if (array_key_exists("GpuLimit",$param) and $param["GpuLimit"] !== null) {
            $this->GpuLimit = $param["GpuLimit"];
        }

        if (array_key_exists("SecurityContext",$param) and $param["SecurityContext"] !== null) {
            $this->SecurityContext = new SecurityContext();
            $this->SecurityContext->deserialize($param["SecurityContext"]);
        }
    }
}
