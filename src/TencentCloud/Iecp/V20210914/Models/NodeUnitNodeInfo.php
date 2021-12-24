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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodeUnit中边缘节点信息
 *
 * @method integer getId() 获取节点ID
 * @method void setId(integer $Id) 设置节点ID
 * @method string getStatus() 获取节点状态  NodeStatusHealthy (健康)/NodeStatusAbnormal (异常)/NodeStatusOffline (下线)/NodeStatusNotActivated (未激活
 * @method void setStatus(string $Status) 设置节点状态  NodeStatusHealthy (健康)/NodeStatusAbnormal (异常)/NodeStatusOffline (下线)/NodeStatusNotActivated (未激活
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method string getInternalIP() 获取内网节点IP
 * @method void setInternalIP(string $InternalIP) 设置内网节点IP
 */
class NodeUnitNodeInfo extends AbstractModel
{
    /**
     * @var integer 节点ID
     */
    public $Id;

    /**
     * @var string 节点状态  NodeStatusHealthy (健康)/NodeStatusAbnormal (异常)/NodeStatusOffline (下线)/NodeStatusNotActivated (未激活
     */
    public $Status;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var string 内网节点IP
     */
    public $InternalIP;

    /**
     * @param integer $Id 节点ID
     * @param string $Status 节点状态  NodeStatusHealthy (健康)/NodeStatusAbnormal (异常)/NodeStatusOffline (下线)/NodeStatusNotActivated (未激活
     * @param string $NodeName 节点名称
     * @param string $InternalIP 内网节点IP
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("InternalIP",$param) and $param["InternalIP"] !== null) {
            $this->InternalIP = $param["InternalIP"];
        }
    }
}
