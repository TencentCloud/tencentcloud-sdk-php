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
 * Proxy 节点自定义规格信息，每个 Zone 对应一组节点配置。
 *
 * @method integer getNodeCount() 获取<p>该可用区下的 Proxy 节点数量</p><p>取值范围：[1, 16]</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>该可用区下的 Proxy 节点数量</p><p>取值范围：[1, 16]</p>
 * @method string getZone() 获取<p>Proxy 节点所在可用区</p>
 * @method void setZone(string $Zone) 设置<p>Proxy 节点所在可用区</p>
 * @method integer getCpu() 获取<p>Proxy 节点 CPU 核数（核）</p>
 * @method void setCpu(integer $Cpu) 设置<p>Proxy 节点 CPU 核数（核）</p>
 * @method integer getMem() 获取<p>Proxy 节点内存大小（MB）</p><p>单位：MB</p>
 * @method void setMem(integer $Mem) 设置<p>Proxy 节点内存大小（MB）</p><p>单位：MB</p>
 */
class ProxyNodeCustom extends AbstractModel
{
    /**
     * @var integer <p>该可用区下的 Proxy 节点数量</p><p>取值范围：[1, 16]</p>
     */
    public $NodeCount;

    /**
     * @var string <p>Proxy 节点所在可用区</p>
     */
    public $Zone;

    /**
     * @var integer <p>Proxy 节点 CPU 核数（核）</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Proxy 节点内存大小（MB）</p><p>单位：MB</p>
     */
    public $Mem;

    /**
     * @param integer $NodeCount <p>该可用区下的 Proxy 节点数量</p><p>取值范围：[1, 16]</p>
     * @param string $Zone <p>Proxy 节点所在可用区</p>
     * @param integer $Cpu <p>Proxy 节点 CPU 核数（核）</p>
     * @param integer $Mem <p>Proxy 节点内存大小（MB）</p><p>单位：MB</p>
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
        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}
