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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy可售规格信息
 *
 * @method integer getCpu() 获取<p>CPU 核数</p><p>单位：核</p>
 * @method void setCpu(integer $Cpu) 设置<p>CPU 核数</p><p>单位：核</p>
 * @method integer getMemory() 获取<p>内存大小</p><p>单位：MB</p>
 * @method void setMemory(integer $Memory) 设置<p>内存大小</p><p>单位：MB</p>
 * @method integer getMinNodeNum() 获取<p>最小节点数</p>
 * @method void setMinNodeNum(integer $MinNodeNum) 设置<p>最小节点数</p>
 * @method integer getMaxNodeNum() 获取<p>最大节点数</p>
 * @method void setMaxNodeNum(integer $MaxNodeNum) 设置<p>最大节点数</p>
 */
class ProxySpecItem extends AbstractModel
{
    /**
     * @var integer <p>CPU 核数</p><p>单位：核</p>
     */
    public $Cpu;

    /**
     * @var integer <p>内存大小</p><p>单位：MB</p>
     */
    public $Memory;

    /**
     * @var integer <p>最小节点数</p>
     */
    public $MinNodeNum;

    /**
     * @var integer <p>最大节点数</p>
     */
    public $MaxNodeNum;

    /**
     * @param integer $Cpu <p>CPU 核数</p><p>单位：核</p>
     * @param integer $Memory <p>内存大小</p><p>单位：MB</p>
     * @param integer $MinNodeNum <p>最小节点数</p>
     * @param integer $MaxNodeNum <p>最大节点数</p>
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

        if (array_key_exists("MinNodeNum",$param) and $param["MinNodeNum"] !== null) {
            $this->MinNodeNum = $param["MinNodeNum"];
        }

        if (array_key_exists("MaxNodeNum",$param) and $param["MaxNodeNum"] !== null) {
            $this->MaxNodeNum = $param["MaxNodeNum"];
        }
    }
}
