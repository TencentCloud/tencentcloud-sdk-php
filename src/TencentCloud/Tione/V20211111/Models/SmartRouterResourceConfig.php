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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Gateway（Envoy）与 Scheduler（EPP）资源配置（字段完全一致，合并为统一类型）
 *
 * @method integer getReplicas() 获取<p>副本数，最小 1，建议 &gt;=2 以确保高可用；Scheduler（EPP）默认 2（保障 EPP 高可用与 Gossip 同步）</p>
 * @method void setReplicas(integer $Replicas) 设置<p>副本数，最小 1，建议 &gt;=2 以确保高可用；Scheduler（EPP）默认 2（保障 EPP 高可用与 Gossip 同步）</p>
 * @method integer getCpu() 获取<p>处理器资源，单位为 1/1000 核（milliCPU），与 EMS 一致</p>
 * @method void setCpu(integer $Cpu) 设置<p>处理器资源，单位为 1/1000 核（milliCPU），与 EMS 一致</p>
 * @method integer getMemory() 获取<p>内存资源，单位为 1MB，与 EMS 一致</p>
 * @method void setMemory(integer $Memory) 设置<p>内存资源，单位为 1MB，与 EMS 一致</p>
 * @method array getEnv() 获取<p>自定义环境变量，用于覆盖 Deployment 内置默认环境变量。Gateway 典型用途：覆盖 BACKEND_SERVICE_HOST 等；Scheduler 典型用途：覆盖 LRU_CAPACITY、BLOCK_SIZE_TOKENS 等</p>
 * @method void setEnv(array $Env) 设置<p>自定义环境变量，用于覆盖 Deployment 内置默认环境变量。Gateway 典型用途：覆盖 BACKEND_SERVICE_HOST 等；Scheduler 典型用途：覆盖 LRU_CAPACITY、BLOCK_SIZE_TOKENS 等</p>
 * @method string getInstanceType() 获取<p>实例类型/规格，用于指定组件运行的机器规格</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型/规格，用于指定组件运行的机器规格</p>
 * @method SidecarSpec getSidecar() 获取<p>sidecar 容器配置，复用推理服务同款 SidecarSpec；未设置或 ImageInfo.ImageUrl 为空时不创建 sidecar 容器。sidecar 容器环境变量与组件主容器保持一致，不单独下发</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSidecar(SidecarSpec $Sidecar) 设置<p>sidecar 容器配置，复用推理服务同款 SidecarSpec；未设置或 ImageInfo.ImageUrl 为空时不创建 sidecar 容器。sidecar 容器环境变量与组件主容器保持一致，不单独下发</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartRouterResourceConfig extends AbstractModel
{
    /**
     * @var integer <p>副本数，最小 1，建议 &gt;=2 以确保高可用；Scheduler（EPP）默认 2（保障 EPP 高可用与 Gossip 同步）</p>
     */
    public $Replicas;

    /**
     * @var integer <p>处理器资源，单位为 1/1000 核（milliCPU），与 EMS 一致</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存资源，单位为 1MB，与 EMS 一致</p>
     */
    public $Memory;

    /**
     * @var array <p>自定义环境变量，用于覆盖 Deployment 内置默认环境变量。Gateway 典型用途：覆盖 BACKEND_SERVICE_HOST 等；Scheduler 典型用途：覆盖 LRU_CAPACITY、BLOCK_SIZE_TOKENS 等</p>
     */
    public $Env;

    /**
     * @var string <p>实例类型/规格，用于指定组件运行的机器规格</p>
     */
    public $InstanceType;

    /**
     * @var SidecarSpec <p>sidecar 容器配置，复用推理服务同款 SidecarSpec；未设置或 ImageInfo.ImageUrl 为空时不创建 sidecar 容器。sidecar 容器环境变量与组件主容器保持一致，不单独下发</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sidecar;

    /**
     * @param integer $Replicas <p>副本数，最小 1，建议 &gt;=2 以确保高可用；Scheduler（EPP）默认 2（保障 EPP 高可用与 Gossip 同步）</p>
     * @param integer $Cpu <p>处理器资源，单位为 1/1000 核（milliCPU），与 EMS 一致</p>
     * @param integer $Memory <p>内存资源，单位为 1MB，与 EMS 一致</p>
     * @param array $Env <p>自定义环境变量，用于覆盖 Deployment 内置默认环境变量。Gateway 典型用途：覆盖 BACKEND_SERVICE_HOST 等；Scheduler 典型用途：覆盖 LRU_CAPACITY、BLOCK_SIZE_TOKENS 等</p>
     * @param string $InstanceType <p>实例类型/规格，用于指定组件运行的机器规格</p>
     * @param SidecarSpec $Sidecar <p>sidecar 容器配置，复用推理服务同款 SidecarSpec；未设置或 ImageInfo.ImageUrl 为空时不创建 sidecar 容器。sidecar 容器环境变量与组件主容器保持一致，不单独下发</p>
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
        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = [];
            foreach ($param["Env"] as $key => $value){
                $obj = new EnvVar();
                $obj->deserialize($value);
                array_push($this->Env, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Sidecar",$param) and $param["Sidecar"] !== null) {
            $this->Sidecar = new SidecarSpec();
            $this->Sidecar->deserialize($param["Sidecar"]);
        }
    }
}
