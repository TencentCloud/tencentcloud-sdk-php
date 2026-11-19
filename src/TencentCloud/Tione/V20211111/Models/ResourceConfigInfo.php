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
 * 资源配置
 *
 * @method string getRole() 获取<p>角色，eg：PS、WORKER、DRIVER、EXECUTOR</p>
 * @method void setRole(string $Role) 设置<p>角色，eg：PS、WORKER、DRIVER、EXECUTOR</p>
 * @method integer getCpu() 获取<p>cpu核数，使用资源组时需配置。单位：1/1000，即1000=1核</p>
 * @method void setCpu(integer $Cpu) 设置<p>cpu核数，使用资源组时需配置。单位：1/1000，即1000=1核</p>
 * @method integer getMemory() 获取<p>内存，使用资源组时需配置。单位为MB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存，使用资源组时需配置。单位为MB</p>
 * @method string getGpuType() 获取<p>gpu卡类型，使用资源组时需配置</p>
 * @method void setGpuType(string $GpuType) 设置<p>gpu卡类型，使用资源组时需配置</p>
 * @method integer getGpu() 获取<p>gpu卡数，使用资源组时需配置。单位：1/100，即100=1卡</p>
 * @method void setGpu(integer $Gpu) 设置<p>gpu卡数，使用资源组时需配置。单位：1/100，即100=1卡</p>
 * @method string getInstanceType() 获取<p>算力规格ID<br>计算规格 (for后付费)，可选值如下：<br>TI.S.LARGE.POST: 4C8G<br>TI.S.2XLARGE16.POST:  8C16G<br>TI.S.2XLARGE32.POST:  8C32G<br>TI.S.4XLARGE32.POST:  16C32G<br>TI.S.4XLARGE64.POST:  16C64G<br>TI.S.6XLARGE48.POST:  24C48G<br>TI.S.6XLARGE96.POST:  24C96G<br>TI.S.8XLARGE64.POST:  32C64G<br>TI.S.8XLARGE128.POST : 32C128G<br>TI.GN10.2XLARGE40.POST: 8C40G V100<em>1<br>TI.GN10.5XLARGE80.POST:  18C80G V100</em>2<br>TI.GN10.10XLARGE160.POST :  32C160G V100<em>4<br>TI.GN10.20XLARGE320.POST :  72C320G V100</em>8<br>TI.GN7.8XLARGE128.POST: 32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST: 40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST: 80C32</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>算力规格ID<br>计算规格 (for后付费)，可选值如下：<br>TI.S.LARGE.POST: 4C8G<br>TI.S.2XLARGE16.POST:  8C16G<br>TI.S.2XLARGE32.POST:  8C32G<br>TI.S.4XLARGE32.POST:  16C32G<br>TI.S.4XLARGE64.POST:  16C64G<br>TI.S.6XLARGE48.POST:  24C48G<br>TI.S.6XLARGE96.POST:  24C96G<br>TI.S.8XLARGE64.POST:  32C64G<br>TI.S.8XLARGE128.POST : 32C128G<br>TI.GN10.2XLARGE40.POST: 8C40G V100<em>1<br>TI.GN10.5XLARGE80.POST:  18C80G V100</em>2<br>TI.GN10.10XLARGE160.POST :  32C160G V100<em>4<br>TI.GN10.20XLARGE320.POST :  72C320G V100</em>8<br>TI.GN7.8XLARGE128.POST: 32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST: 40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST: 80C32</p>
 * @method integer getInstanceNum() 获取<p>计算节点数</p>
 * @method void setInstanceNum(integer $InstanceNum) 设置<p>计算节点数</p>
 * @method string getInstanceTypeAlias() 获取<p>算力规格名称<br>计算规格 (for后付费)，可选值如下：<br>4C8G<br>8C16G<br>8C32G<br>16C32G<br>6C64G<br>24C48G<br>24C96G<br>32C64G<br>32C128G<br>8C40G V100<em>1<br>8C80G V100</em>2<br>32C160G V100<em>4<br>72C320G V100</em>8<br>32C128G T4<em>1<br>40C160G T4</em>2<br>80C32</p>
 * @method void setInstanceTypeAlias(string $InstanceTypeAlias) 设置<p>算力规格名称<br>计算规格 (for后付费)，可选值如下：<br>4C8G<br>8C16G<br>8C32G<br>16C32G<br>6C64G<br>24C48G<br>24C96G<br>32C64G<br>32C128G<br>8C40G V100<em>1<br>8C80G V100</em>2<br>32C160G V100<em>4<br>72C320G V100</em>8<br>32C128G T4<em>1<br>40C160G T4</em>2<br>80C32</p>
 * @method RDMAConfig getRDMAConfig() 获取<p>RDMA配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRDMAConfig(RDMAConfig $RDMAConfig) 设置<p>RDMA配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResourceConfigInfo extends AbstractModel
{
    /**
     * @var string <p>角色，eg：PS、WORKER、DRIVER、EXECUTOR</p>
     */
    public $Role;

    /**
     * @var integer <p>cpu核数，使用资源组时需配置。单位：1/1000，即1000=1核</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存，使用资源组时需配置。单位为MB</p>
     */
    public $Memory;

    /**
     * @var string <p>gpu卡类型，使用资源组时需配置</p>
     */
    public $GpuType;

    /**
     * @var integer <p>gpu卡数，使用资源组时需配置。单位：1/100，即100=1卡</p>
     */
    public $Gpu;

    /**
     * @var string <p>算力规格ID<br>计算规格 (for后付费)，可选值如下：<br>TI.S.LARGE.POST: 4C8G<br>TI.S.2XLARGE16.POST:  8C16G<br>TI.S.2XLARGE32.POST:  8C32G<br>TI.S.4XLARGE32.POST:  16C32G<br>TI.S.4XLARGE64.POST:  16C64G<br>TI.S.6XLARGE48.POST:  24C48G<br>TI.S.6XLARGE96.POST:  24C96G<br>TI.S.8XLARGE64.POST:  32C64G<br>TI.S.8XLARGE128.POST : 32C128G<br>TI.GN10.2XLARGE40.POST: 8C40G V100<em>1<br>TI.GN10.5XLARGE80.POST:  18C80G V100</em>2<br>TI.GN10.10XLARGE160.POST :  32C160G V100<em>4<br>TI.GN10.20XLARGE320.POST :  72C320G V100</em>8<br>TI.GN7.8XLARGE128.POST: 32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST: 40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST: 80C32</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>计算节点数</p>
     */
    public $InstanceNum;

    /**
     * @var string <p>算力规格名称<br>计算规格 (for后付费)，可选值如下：<br>4C8G<br>8C16G<br>8C32G<br>16C32G<br>6C64G<br>24C48G<br>24C96G<br>32C64G<br>32C128G<br>8C40G V100<em>1<br>8C80G V100</em>2<br>32C160G V100<em>4<br>72C320G V100</em>8<br>32C128G T4<em>1<br>40C160G T4</em>2<br>80C32</p>
     */
    public $InstanceTypeAlias;

    /**
     * @var RDMAConfig <p>RDMA配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RDMAConfig;

    /**
     * @param string $Role <p>角色，eg：PS、WORKER、DRIVER、EXECUTOR</p>
     * @param integer $Cpu <p>cpu核数，使用资源组时需配置。单位：1/1000，即1000=1核</p>
     * @param integer $Memory <p>内存，使用资源组时需配置。单位为MB</p>
     * @param string $GpuType <p>gpu卡类型，使用资源组时需配置</p>
     * @param integer $Gpu <p>gpu卡数，使用资源组时需配置。单位：1/100，即100=1卡</p>
     * @param string $InstanceType <p>算力规格ID<br>计算规格 (for后付费)，可选值如下：<br>TI.S.LARGE.POST: 4C8G<br>TI.S.2XLARGE16.POST:  8C16G<br>TI.S.2XLARGE32.POST:  8C32G<br>TI.S.4XLARGE32.POST:  16C32G<br>TI.S.4XLARGE64.POST:  16C64G<br>TI.S.6XLARGE48.POST:  24C48G<br>TI.S.6XLARGE96.POST:  24C96G<br>TI.S.8XLARGE64.POST:  32C64G<br>TI.S.8XLARGE128.POST : 32C128G<br>TI.GN10.2XLARGE40.POST: 8C40G V100<em>1<br>TI.GN10.5XLARGE80.POST:  18C80G V100</em>2<br>TI.GN10.10XLARGE160.POST :  32C160G V100<em>4<br>TI.GN10.20XLARGE320.POST :  72C320G V100</em>8<br>TI.GN7.8XLARGE128.POST: 32C128G T4<em>1<br>TI.GN7.10XLARGE160.POST: 40C160G T4</em>2<br>TI.GN7.20XLARGE320.POST: 80C32</p>
     * @param integer $InstanceNum <p>计算节点数</p>
     * @param string $InstanceTypeAlias <p>算力规格名称<br>计算规格 (for后付费)，可选值如下：<br>4C8G<br>8C16G<br>8C32G<br>16C32G<br>6C64G<br>24C48G<br>24C96G<br>32C64G<br>32C128G<br>8C40G V100<em>1<br>8C80G V100</em>2<br>32C160G V100<em>4<br>72C320G V100</em>8<br>32C128G T4<em>1<br>40C160G T4</em>2<br>80C32</p>
     * @param RDMAConfig $RDMAConfig <p>RDMA配置</p>
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("GpuType",$param) and $param["GpuType"] !== null) {
            $this->GpuType = $param["GpuType"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("InstanceTypeAlias",$param) and $param["InstanceTypeAlias"] !== null) {
            $this->InstanceTypeAlias = $param["InstanceTypeAlias"];
        }

        if (array_key_exists("RDMAConfig",$param) and $param["RDMAConfig"] !== null) {
            $this->RDMAConfig = new RDMAConfig();
            $this->RDMAConfig->deserialize($param["RDMAConfig"]);
        }
    }
}
