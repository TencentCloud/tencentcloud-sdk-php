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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主账号资源信息
 *
 * @method integer getSandboxTools() 获取<p>沙箱工具配额或当前用量</p><p>单位：个</p>
 * @method void setSandboxTools(integer $SandboxTools) 设置<p>沙箱工具配额或当前用量</p><p>单位：个</p>
 * @method integer getSandboxInstances() 获取<p>沙箱实例配额或当前用量</p><p>单位：个</p>
 * @method void setSandboxInstances(integer $SandboxInstances) 设置<p>沙箱实例配额或当前用量</p><p>单位：个</p>
 * @method integer getPausedInstances() 获取<p>暂停实例配额或当前用量</p><p>单位：个</p>
 * @method void setPausedInstances(integer $PausedInstances) 设置<p>暂停实例配额或当前用量</p><p>单位：个</p>
 * @method float getCPUCores() 获取<p>暂停实例配额或当前用量。目前只在主账号中返回</p><p>单位：核</p>
 * @method void setCPUCores(float $CPUCores) 设置<p>暂停实例配额或当前用量。目前只在主账号中返回</p><p>单位：核</p>
 * @method float getMemoryGiB() 获取<p>内存配额或当前用量</p><p>单位：GiB</p>
 * @method void setMemoryGiB(float $MemoryGiB) 设置<p>内存配额或当前用量</p><p>单位：GiB</p>
 */
class QuotaResourceInfo extends AbstractModel
{
    /**
     * @var integer <p>沙箱工具配额或当前用量</p><p>单位：个</p>
     */
    public $SandboxTools;

    /**
     * @var integer <p>沙箱实例配额或当前用量</p><p>单位：个</p>
     */
    public $SandboxInstances;

    /**
     * @var integer <p>暂停实例配额或当前用量</p><p>单位：个</p>
     */
    public $PausedInstances;

    /**
     * @var float <p>暂停实例配额或当前用量。目前只在主账号中返回</p><p>单位：核</p>
     */
    public $CPUCores;

    /**
     * @var float <p>内存配额或当前用量</p><p>单位：GiB</p>
     */
    public $MemoryGiB;

    /**
     * @param integer $SandboxTools <p>沙箱工具配额或当前用量</p><p>单位：个</p>
     * @param integer $SandboxInstances <p>沙箱实例配额或当前用量</p><p>单位：个</p>
     * @param integer $PausedInstances <p>暂停实例配额或当前用量</p><p>单位：个</p>
     * @param float $CPUCores <p>暂停实例配额或当前用量。目前只在主账号中返回</p><p>单位：核</p>
     * @param float $MemoryGiB <p>内存配额或当前用量</p><p>单位：GiB</p>
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
        if (array_key_exists("SandboxTools",$param) and $param["SandboxTools"] !== null) {
            $this->SandboxTools = $param["SandboxTools"];
        }

        if (array_key_exists("SandboxInstances",$param) and $param["SandboxInstances"] !== null) {
            $this->SandboxInstances = $param["SandboxInstances"];
        }

        if (array_key_exists("PausedInstances",$param) and $param["PausedInstances"] !== null) {
            $this->PausedInstances = $param["PausedInstances"];
        }

        if (array_key_exists("CPUCores",$param) and $param["CPUCores"] !== null) {
            $this->CPUCores = $param["CPUCores"];
        }

        if (array_key_exists("MemoryGiB",$param) and $param["MemoryGiB"] !== null) {
            $this->MemoryGiB = $param["MemoryGiB"];
        }
    }
}
