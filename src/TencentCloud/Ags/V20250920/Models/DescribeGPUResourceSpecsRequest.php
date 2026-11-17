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
 * DescribeGPUResourceSpecs请求参数结构体
 *
 * @method string getGPUType() 获取<p>GPU 类型标识，例如 5090d；指定时必须同时提供 CPU、Memory、GPUNum。</p>
 * @method void setGPUType(string $GPUType) 设置<p>GPU 类型标识，例如 5090d；指定时必须同时提供 CPU、Memory、GPUNum。</p>
 * @method integer getCPU() 获取<p>CPU 核数，必须为正数；与 GPUType、Memory、GPUNum 同时提供。</p>
 * @method void setCPU(integer $CPU) 设置<p>CPU 核数，必须为正数；与 GPUType、Memory、GPUNum 同时提供。</p>
 * @method integer getMemory() 获取<p>主机内存 GiB，必须为正数；与 GPUType、CPU、GPUNum 同时提供。</p>
 * @method void setMemory(integer $Memory) 设置<p>主机内存 GiB，必须为正数；与 GPUType、CPU、GPUNum 同时提供。</p>
 * @method integer getGPUNum() 获取<p>单台 GPU 卡数，必须为正整数；与 GPUType、CPU、Memory 同时提供。</p>
 * @method void setGPUNum(integer $GPUNum) 设置<p>单台 GPU 卡数，必须为正整数；与 GPUType、CPU、Memory 同时提供。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为 0，必须大于等于 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为 0，必须大于等于 0。</p>
 * @method integer getLimit() 获取<p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
 */
class DescribeGPUResourceSpecsRequest extends AbstractModel
{
    /**
     * @var string <p>GPU 类型标识，例如 5090d；指定时必须同时提供 CPU、Memory、GPUNum。</p>
     */
    public $GPUType;

    /**
     * @var integer <p>CPU 核数，必须为正数；与 GPUType、Memory、GPUNum 同时提供。</p>
     */
    public $CPU;

    /**
     * @var integer <p>主机内存 GiB，必须为正数；与 GPUType、CPU、GPUNum 同时提供。</p>
     */
    public $Memory;

    /**
     * @var integer <p>单台 GPU 卡数，必须为正整数；与 GPUType、CPU、Memory 同时提供。</p>
     */
    public $GPUNum;

    /**
     * @var integer <p>分页偏移量，默认为 0，必须大于等于 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
     */
    public $Limit;

    /**
     * @param string $GPUType <p>GPU 类型标识，例如 5090d；指定时必须同时提供 CPU、Memory、GPUNum。</p>
     * @param integer $CPU <p>CPU 核数，必须为正数；与 GPUType、Memory、GPUNum 同时提供。</p>
     * @param integer $Memory <p>主机内存 GiB，必须为正数；与 GPUType、CPU、GPUNum 同时提供。</p>
     * @param integer $GPUNum <p>单台 GPU 卡数，必须为正整数；与 GPUType、CPU、Memory 同时提供。</p>
     * @param integer $Offset <p>分页偏移量，默认为 0，必须大于等于 0。</p>
     * @param integer $Limit <p>每页条数，省略或传 0 时取 100；非零取值范围 1–500。</p>
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

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
