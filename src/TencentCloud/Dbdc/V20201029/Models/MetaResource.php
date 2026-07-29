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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源信息。
 *
 * @method float getCpu() 获取<p>CPU核心</p><p>单位：核</p>
 * @method void setCpu(float $Cpu) 设置<p>CPU核心</p><p>单位：核</p>
 * @method float getMemory() 获取<p>内存</p><p>单位：GiB</p>
 * @method void setMemory(float $Memory) 设置<p>内存</p><p>单位：GiB</p>
 * @method integer getPods() 获取<p>POD数量</p><p>单位：个</p>
 * @method void setPods(integer $Pods) 设置<p>POD数量</p><p>单位：个</p>
 */
class MetaResource extends AbstractModel
{
    /**
     * @var float <p>CPU核心</p><p>单位：核</p>
     */
    public $Cpu;

    /**
     * @var float <p>内存</p><p>单位：GiB</p>
     */
    public $Memory;

    /**
     * @var integer <p>POD数量</p><p>单位：个</p>
     */
    public $Pods;

    /**
     * @param float $Cpu <p>CPU核心</p><p>单位：核</p>
     * @param float $Memory <p>内存</p><p>单位：GiB</p>
     * @param integer $Pods <p>POD数量</p><p>单位：个</p>
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = $param["Pods"];
        }
    }
}
