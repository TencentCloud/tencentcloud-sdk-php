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
 * 资源限制范围。
 *
 * @method string getMaxCPU() 获取最大CPU设置
 * @method void setMaxCPU(string $MaxCPU) 设置最大CPU设置
 * @method string getMaxMemory() 获取最大内存设置（单位：Mi，Gi，Ti，M，G，T）
 * @method void setMaxMemory(string $MaxMemory) 设置最大内存设置（单位：Mi，Gi，Ti，M，G，T）
 */
class LimitRange extends AbstractModel
{
    /**
     * @var string 最大CPU设置
     */
    public $MaxCPU;

    /**
     * @var string 最大内存设置（单位：Mi，Gi，Ti，M，G，T）
     */
    public $MaxMemory;

    /**
     * @param string $MaxCPU 最大CPU设置
     * @param string $MaxMemory 最大内存设置（单位：Mi，Gi，Ti，M，G，T）
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
        if (array_key_exists("MaxCPU",$param) and $param["MaxCPU"] !== null) {
            $this->MaxCPU = $param["MaxCPU"];
        }

        if (array_key_exists("MaxMemory",$param) and $param["MaxMemory"] !== null) {
            $this->MaxMemory = $param["MaxMemory"];
        }
    }
}
