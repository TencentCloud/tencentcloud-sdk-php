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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR-TKE 集群资源用量
 *
 * @method string getCpu() 获取<p>CPU 用量，例如 2core</p>
 * @method void setCpu(string $Cpu) 设置<p>CPU 用量，例如 2core</p>
 * @method string getMem() 获取<p>内存用量，例如 4GB</p>
 * @method void setMem(string $Mem) 设置<p>内存用量，例如 4GB</p>
 */
class EmrResourceUsage extends AbstractModel
{
    /**
     * @var string <p>CPU 用量，例如 2core</p>
     */
    public $Cpu;

    /**
     * @var string <p>内存用量，例如 4GB</p>
     */
    public $Mem;

    /**
     * @param string $Cpu <p>CPU 用量，例如 2core</p>
     * @param string $Mem <p>内存用量，例如 4GB</p>
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}
