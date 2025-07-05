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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留券规格
 *
 * @method string getType() 获取资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v、a10\*pnv4、windows-common、windows-amd，common表示通用类型。
 * @method void setType(string $Type) 设置资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v、a10\*pnv4、windows-common、windows-amd，common表示通用类型。
 * @method float getCpu() 获取核数
 * @method void setCpu(float $Cpu) 设置核数
 * @method float getMemory() 获取内存
 * @method void setMemory(float $Memory) 设置内存
 * @method float getGpu() 获取GPU卡数，当Type为GPU类型时设置。
 * @method void setGpu(float $Gpu) 设置GPU卡数，当Type为GPU类型时设置。
 */
class ReservedInstanceSpec extends AbstractModel
{
    /**
     * @var string 资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v、a10\*pnv4、windows-common、windows-amd，common表示通用类型。
     */
    public $Type;

    /**
     * @var float 核数
     */
    public $Cpu;

    /**
     * @var float 内存
     */
    public $Memory;

    /**
     * @var float GPU卡数，当Type为GPU类型时设置。
     */
    public $Gpu;

    /**
     * @param string $Type 资源类型：common、amd、v100、t4、a10\*gnv4、a10\*gnv4v、a10\*pnv4、windows-common、windows-amd，common表示通用类型。
     * @param float $Cpu 核数
     * @param float $Memory 内存
     * @param float $Gpu GPU卡数，当Type为GPU类型时设置。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Gpu",$param) and $param["Gpu"] !== null) {
            $this->Gpu = $param["Gpu"];
        }
    }
}
