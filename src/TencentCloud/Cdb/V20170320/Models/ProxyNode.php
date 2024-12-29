<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理节点
 *
 * @method string getProxyId() 获取代理节点ID
 * @method void setProxyId(string $ProxyId) 设置代理节点ID
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMem() 获取内存大小
 * @method void setMem(integer $Mem) 设置内存大小
 * @method string getStatus() 获取节点状态
 * @method void setStatus(string $Status) 设置节点状态
 * @method string getZone() 获取代理节点可用区
 * @method void setZone(string $Zone) 设置代理节点可用区
 * @method string getRegion() 获取代理节点地域
 * @method void setRegion(string $Region) 设置代理节点地域
 * @method integer getConnection() 获取连接数
 * @method void setConnection(integer $Connection) 设置连接数
 */
class ProxyNode extends AbstractModel
{
    /**
     * @var string 代理节点ID
     */
    public $ProxyId;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小
     */
    public $Mem;

    /**
     * @var string 节点状态
     */
    public $Status;

    /**
     * @var string 代理节点可用区
     */
    public $Zone;

    /**
     * @var string 代理节点地域
     */
    public $Region;

    /**
     * @var integer 连接数
     */
    public $Connection;

    /**
     * @param string $ProxyId 代理节点ID
     * @param integer $Cpu CPU核数
     * @param integer $Mem 内存大小
     * @param string $Status 节点状态
     * @param string $Zone 代理节点可用区
     * @param string $Region 代理节点地域
     * @param integer $Connection 连接数
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = $param["Connection"];
        }
    }
}
