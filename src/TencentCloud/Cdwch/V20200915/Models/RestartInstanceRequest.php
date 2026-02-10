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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getNodeType() 获取节点类型，可选值：CK / ZK / CHPROXY
 * @method void setNodeType(string $NodeType) 设置节点类型，可选值：CK / ZK / CHPROXY
 * @method array getNodeIpList() 获取符合节点类型的要重启的节点ip列表
 * @method void setNodeIpList(array $NodeIpList) 设置符合节点类型的要重启的节点ip列表
 * @method boolean getRollingRestart() 获取是否滚动重启，默认为true
 * @method void setRollingRestart(boolean $RollingRestart) 设置是否滚动重启，默认为true
 */
class RestartInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 节点类型，可选值：CK / ZK / CHPROXY
     */
    public $NodeType;

    /**
     * @var array 符合节点类型的要重启的节点ip列表
     */
    public $NodeIpList;

    /**
     * @var boolean 是否滚动重启，默认为true
     */
    public $RollingRestart;

    /**
     * @param string $InstanceId 实例id
     * @param string $NodeType 节点类型，可选值：CK / ZK / CHPROXY
     * @param array $NodeIpList 符合节点类型的要重启的节点ip列表
     * @param boolean $RollingRestart 是否滚动重启，默认为true
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeIpList",$param) and $param["NodeIpList"] !== null) {
            $this->NodeIpList = $param["NodeIpList"];
        }

        if (array_key_exists("RollingRestart",$param) and $param["RollingRestart"] !== null) {
            $this->RollingRestart = $param["RollingRestart"];
        }
    }
}
