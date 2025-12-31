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
 * @method string getCPU() 获取cpu 资源量
 * @method void setCPU(string $CPU) 设置cpu 资源量
 * @method string getMemory() 获取内存资源量
 * @method void setMemory(string $Memory) 设置内存资源量
 */
class ResourceConfiguration extends AbstractModel
{
    /**
     * @var string cpu 资源量
     */
    public $CPU;

    /**
     * @var string 内存资源量
     */
    public $Memory;

    /**
     * @param string $CPU cpu 资源量
     * @param string $Memory 内存资源量
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
