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
 * Proxy 节点信息。
 *
 * @method string getProxyNodeId() 获取<p>Proxy 节点 ID</p>
 * @method void setProxyNodeId(string $ProxyNodeId) 设置<p>Proxy 节点 ID</p>
 * @method string getZone() 获取<p>Proxy 节点所在可用区</p>
 * @method void setZone(string $Zone) 设置<p>Proxy 节点所在可用区</p>
 * @method integer getCpu() 获取<p>节点 CPU 核数（核）</p>
 * @method void setCpu(integer $Cpu) 设置<p>节点 CPU 核数（核）</p>
 * @method integer getMem() 获取<p>节点内存大小（MB）</p><p>单位：MB</p>
 * @method void setMem(integer $Mem) 设置<p>节点内存大小（MB）</p><p>单位：MB</p>
 * @method string getStatus() 获取<p>节点状态：running/isolated/abnormal 等</p>
 * @method void setStatus(string $Status) 设置<p>节点状态：running/isolated/abnormal 等</p>
 * @method integer getConnection() 获取<p>节点当前连接数</p>
 * @method void setConnection(integer $Connection) 设置<p>节点当前连接数</p>
 */
class ProxyNode extends AbstractModel
{
    /**
     * @var string <p>Proxy 节点 ID</p>
     */
    public $ProxyNodeId;

    /**
     * @var string <p>Proxy 节点所在可用区</p>
     */
    public $Zone;

    /**
     * @var integer <p>节点 CPU 核数（核）</p>
     */
    public $Cpu;

    /**
     * @var integer <p>节点内存大小（MB）</p><p>单位：MB</p>
     */
    public $Mem;

    /**
     * @var string <p>节点状态：running/isolated/abnormal 等</p>
     */
    public $Status;

    /**
     * @var integer <p>节点当前连接数</p>
     */
    public $Connection;

    /**
     * @param string $ProxyNodeId <p>Proxy 节点 ID</p>
     * @param string $Zone <p>Proxy 节点所在可用区</p>
     * @param integer $Cpu <p>节点 CPU 核数（核）</p>
     * @param integer $Mem <p>节点内存大小（MB）</p><p>单位：MB</p>
     * @param string $Status <p>节点状态：running/isolated/abnormal 等</p>
     * @param integer $Connection <p>节点当前连接数</p>
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
        if (array_key_exists("ProxyNodeId",$param) and $param["ProxyNodeId"] !== null) {
            $this->ProxyNodeId = $param["ProxyNodeId"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = $param["Connection"];
        }
    }
}
