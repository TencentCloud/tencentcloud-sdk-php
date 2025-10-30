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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Logstash节点信息
 *
 * @method string getNodeId() 获取节点ID
 * @method void setNodeId(string $NodeId) 设置节点ID
 * @method string getIp() 获取节点IP
 * @method void setIp(string $Ip) 设置节点IP
 * @method integer getPort() 获取节点端口
 * @method void setPort(integer $Port) 设置节点端口
 * @method string getZone() 获取节点所在zone
 * @method void setZone(string $Zone) 设置节点所在zone
 */
class LogstashNodeInfo extends AbstractModel
{
    /**
     * @var string 节点ID
     */
    public $NodeId;

    /**
     * @var string 节点IP
     */
    public $Ip;

    /**
     * @var integer 节点端口
     */
    public $Port;

    /**
     * @var string 节点所在zone
     */
    public $Zone;

    /**
     * @param string $NodeId 节点ID
     * @param string $Ip 节点IP
     * @param integer $Port 节点端口
     * @param string $Zone 节点所在zone
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
