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
 * 当前地域可售 GPU 规格与当前租户可购买额度。
 *
 * @method string getGPUType() 获取<p>GPU 类型标识，例如 5090d。</p>
 * @method void setGPUType(string $GPUType) 设置<p>GPU 类型标识，例如 5090d。</p>
 * @method string getGPUTypeAlias() 获取<p>GPU 类型展示名称；为空时使用 GPUType 展示。</p>
 * @method void setGPUTypeAlias(string $GPUTypeAlias) 设置<p>GPU 类型展示名称；为空时使用 GPUType 展示。</p>
 * @method integer getGPUMemoryGiB() 获取<p>单台实例全部 GPU 的总显存，单位 GiB；不需要再乘 GPUNum。0 表示展示元数据未维护。</p>
 * @method void setGPUMemoryGiB(integer $GPUMemoryGiB) 设置<p>单台实例全部 GPU 的总显存，单位 GiB；不需要再乘 GPUNum。0 表示展示元数据未维护。</p>
 * @method integer getCPU() 获取<p>单台实例 CPU 核数。</p>
 * @method void setCPU(integer $CPU) 设置<p>单台实例 CPU 核数。</p>
 * @method integer getMemory() 获取<p>单台实例主机内存，单位 GiB；不是 GPU 显存。</p>
 * @method void setMemory(integer $Memory) 设置<p>单台实例主机内存，单位 GiB；不是 GPU 显存。</p>
 * @method integer getGPUNum() 获取<p>单台实例的 GPU 卡数。</p>
 * @method void setGPUNum(integer $GPUNum) 设置<p>单台实例的 GPU 卡数。</p>
 * @method integer getAvailableCount() 获取<p>当前可购买数量，单位台，不是卡数；0 表示确认无额度，null 表示额度未知。实际购买时仍会重新校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableCount(integer $AvailableCount) 设置<p>当前可购买数量，单位台，不是卡数；0 表示确认无额度，null 表示额度未知。实际购买时仍会重新校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class GPUResourceSpec extends AbstractModel
{
    /**
     * @var string <p>GPU 类型标识，例如 5090d。</p>
     */
    public $GPUType;

    /**
     * @var string <p>GPU 类型展示名称；为空时使用 GPUType 展示。</p>
     */
    public $GPUTypeAlias;

    /**
     * @var integer <p>单台实例全部 GPU 的总显存，单位 GiB；不需要再乘 GPUNum。0 表示展示元数据未维护。</p>
     */
    public $GPUMemoryGiB;

    /**
     * @var integer <p>单台实例 CPU 核数。</p>
     */
    public $CPU;

    /**
     * @var integer <p>单台实例主机内存，单位 GiB；不是 GPU 显存。</p>
     */
    public $Memory;

    /**
     * @var integer <p>单台实例的 GPU 卡数。</p>
     */
    public $GPUNum;

    /**
     * @var integer <p>当前可购买数量，单位台，不是卡数；0 表示确认无额度，null 表示额度未知。实际购买时仍会重新校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableCount;

    /**
     * @param string $GPUType <p>GPU 类型标识，例如 5090d。</p>
     * @param string $GPUTypeAlias <p>GPU 类型展示名称；为空时使用 GPUType 展示。</p>
     * @param integer $GPUMemoryGiB <p>单台实例全部 GPU 的总显存，单位 GiB；不需要再乘 GPUNum。0 表示展示元数据未维护。</p>
     * @param integer $CPU <p>单台实例 CPU 核数。</p>
     * @param integer $Memory <p>单台实例主机内存，单位 GiB；不是 GPU 显存。</p>
     * @param integer $GPUNum <p>单台实例的 GPU 卡数。</p>
     * @param integer $AvailableCount <p>当前可购买数量，单位台，不是卡数；0 表示确认无额度，null 表示额度未知。实际购买时仍会重新校验。</p>
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
        if (array_key_exists("GPUType",$param) and $param["GPUType"] !== null) {
            $this->GPUType = $param["GPUType"];
        }

        if (array_key_exists("GPUTypeAlias",$param) and $param["GPUTypeAlias"] !== null) {
            $this->GPUTypeAlias = $param["GPUTypeAlias"];
        }

        if (array_key_exists("GPUMemoryGiB",$param) and $param["GPUMemoryGiB"] !== null) {
            $this->GPUMemoryGiB = $param["GPUMemoryGiB"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }
    }
}
