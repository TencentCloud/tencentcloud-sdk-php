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
 * 资源配置
 *
 * @method string getCPU() 获取<p>cpu 资源量</p>
 * @method void setCPU(string $CPU) 设置<p>cpu 资源量</p>
 * @method string getMemory() 获取<p>内存资源量</p>
 * @method void setMemory(string $Memory) 设置<p>内存资源量</p>
 */
class ResourceConfiguration extends AbstractModel
{
    /**
     * @var string <p>cpu 资源量</p>
     */
    public $CPU;

    /**
     * @var string <p>内存资源量</p>
     */
    public $Memory;

    /**
     * @param string $CPU <p>cpu 资源量</p>
     * @param string $Memory <p>内存资源量</p>
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
        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
