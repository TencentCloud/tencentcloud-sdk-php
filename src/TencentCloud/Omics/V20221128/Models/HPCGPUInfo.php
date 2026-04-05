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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HPC实例GPU
 *
 * @method string getGPUType() 获取GPU类型
 * @method void setGPUType(string $GPUType) 设置GPU类型
 * @method float getGPUCount() 获取GPU数量
 * @method void setGPUCount(float $GPUCount) 设置GPU数量
 */
class HPCGPUInfo extends AbstractModel
{
    /**
     * @var string GPU类型
     */
    public $GPUType;

    /**
     * @var float GPU数量
     */
    public $GPUCount;

    /**
     * @param string $GPUType GPU类型
     * @param float $GPUCount GPU数量
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

        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }
    }
}
