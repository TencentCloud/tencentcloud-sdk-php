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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LibraDB 节点信息
 *
 * @method string getNodeId() 获取LibraDB节点ID
 * @method void setNodeId(string $NodeId) 设置LibraDB节点ID
 * @method string getStatus() 获取节点状态
 * @method void setStatus(string $Status) 设置节点状态
 * @method string getDataStatus() 获取数据同步中
 * @method void setDataStatus(string $DataStatus) 设置数据同步中
 * @method integer getCpu() 获取CPU核数
 * @method void setCpu(integer $Cpu) 设置CPU核数
 * @method integer getMemory() 获取内存大小，单位 G
 * @method void setMemory(integer $Memory) 设置内存大小，单位 G
 * @method integer getStorage() 获取磁盘大小，单位G
 * @method void setStorage(integer $Storage) 设置磁盘大小，单位G
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 */
class LibraDBNodeInfo extends AbstractModel
{
    /**
     * @var string LibraDB节点ID
     */
    public $NodeId;

    /**
     * @var string 节点状态
     */
    public $Status;

    /**
     * @var string 数据同步中
     */
    public $DataStatus;

    /**
     * @var integer CPU核数
     */
    public $Cpu;

    /**
     * @var integer 内存大小，单位 G
     */
    public $Memory;

    /**
     * @var integer 磁盘大小，单位G
     */
    public $Storage;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @param string $NodeId LibraDB节点ID
     * @param string $Status 节点状态
     * @param string $DataStatus 数据同步中
     * @param integer $Cpu CPU核数
     * @param integer $Memory 内存大小，单位 G
     * @param integer $Storage 磁盘大小，单位G
     * @param string $Message 错误信息
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
