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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分析引擎节点信息
 *
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method string getStatus() 获取节点状态
 * @method void setStatus(string $Status) 设置节点状态
 * @method string getDataStatus() 获取数据加载状态
 * @method void setDataStatus(string $DataStatus) 设置数据加载状态
 * @method integer getCpu() 获取cpu核数，单位：核
 * @method void setCpu(integer $Cpu) 设置cpu核数，单位：核
 * @method integer getMemory() 获取内存大小，单位: MB
 * @method void setMemory(integer $Memory) 设置内存大小，单位: MB
 * @method integer getStorage() 获取磁盘大小，单位：GB
 * @method void setStorage(integer $Storage) 设置磁盘大小，单位：GB
 * @method string getZone() 获取节点所在可用区
 * @method void setZone(string $Zone) 设置节点所在可用区
 * @method string getMessage() 获取数据同步错误信息
 * @method void setMessage(string $Message) 设置数据同步错误信息
 */
class AnalysisNodeInfo extends AbstractModel
{
    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var string 节点状态
     */
    public $Status;

    /**
     * @var string 数据加载状态
     */
    public $DataStatus;

    /**
     * @var integer cpu核数，单位：核
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位: MB
     */
    public $Memory;

    /**
     * @var integer 磁盘大小，单位：GB
     */
    public $Storage;

    /**
     * @var string 节点所在可用区
     */
    public $Zone;

    /**
     * @var string 数据同步错误信息
     */
    public $Message;

    /**
     * @param string $NodeId 节点ID
     * @param string $Status 节点状态
     * @param string $DataStatus 数据加载状态
     * @param integer $Cpu cpu核数，单位：核
     * @param integer $Memory 内存大小，单位: MB
     * @param integer $Storage 磁盘大小，单位：GB
     * @param string $Zone 节点所在可用区
     * @param string $Message 数据同步错误信息
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DataStatus",$param) and $param["DataStatus"] !== null) {
            $this->DataStatus = $param["DataStatus"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
