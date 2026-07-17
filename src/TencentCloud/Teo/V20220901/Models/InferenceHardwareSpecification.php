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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理硬件规格信息。
 *
 * @method string getSpec() 获取规格标识。
 * @method void setSpec(string $Spec) 设置规格标识。
 * @method string getName() 获取规格名称。
 * @method void setName(string $Name) 设置规格名称。
 * @method float getCPUNum() 获取CPU 核数。
 * @method void setCPUNum(float $CPUNum) 设置CPU 核数。
 * @method integer getMemSize() 获取内存大小。单位为 MB。
 * @method void setMemSize(integer $MemSize) 设置内存大小。单位为 MB。
 * @method float getGPUNum() 获取GPU 卡数。
 * @method void setGPUNum(float $GPUNum) 设置GPU 卡数。
 * @method integer getGPUMemSize() 获取显存大小。单位为 MB。
 * @method void setGPUMemSize(integer $GPUMemSize) 设置显存大小。单位为 MB。
 */
class InferenceHardwareSpecification extends AbstractModel
{
    /**
     * @var string 规格标识。
     */
    public $Spec;

    /**
     * @var string 规格名称。
     */
    public $Name;

    /**
     * @var float CPU 核数。
     */
    public $CPUNum;

    /**
     * @var integer 内存大小。单位为 MB。
     */
    public $MemSize;

    /**
     * @var float GPU 卡数。
     */
    public $GPUNum;

    /**
     * @var integer 显存大小。单位为 MB。
     */
    public $GPUMemSize;

    /**
     * @param string $Spec 规格标识。
     * @param string $Name 规格名称。
     * @param float $CPUNum CPU 核数。
     * @param integer $MemSize 内存大小。单位为 MB。
     * @param float $GPUNum GPU 卡数。
     * @param integer $GPUMemSize 显存大小。单位为 MB。
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CPUNum",$param) and $param["CPUNum"] !== null) {
            $this->CPUNum = $param["CPUNum"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GPUNum",$param) and $param["GPUNum"] !== null) {
            $this->GPUNum = $param["GPUNum"];
        }

        if (array_key_exists("GPUMemSize",$param) and $param["GPUMemSize"] !== null) {
            $this->GPUMemSize = $param["GPUMemSize"];
        }
    }
}
