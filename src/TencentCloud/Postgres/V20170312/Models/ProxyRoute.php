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
 * Proxy 路由信息，描述某个 Proxy 接入地址下到具体 PG 节点的路由规则。
 *
 * @method string getNodeId() 获取<p>路由指向的 PG 节点 ID（实例或只读节点 ID）</p>
 * @method void setNodeId(string $NodeId) 设置<p>路由指向的 PG 节点 ID（实例或只读节点 ID）</p>
 * @method string getRole() 获取<p>节点角色：master/slave/readonly</p>
 * @method void setRole(string $Role) 设置<p>节点角色：master/slave/readonly</p>
 * @method integer getWeight() 获取<p>路由权重，取值范围 [0, 100]</p>
 * @method void setWeight(integer $Weight) 设置<p>路由权重，取值范围 [0, 100]</p>
 * @method string getStatus() 获取<p>路由状态：available/unavailable</p>
 * @method void setStatus(string $Status) 设置<p>路由状态：available/unavailable</p>
 */
class ProxyRoute extends AbstractModel
{
    /**
     * @var string <p>路由指向的 PG 节点 ID（实例或只读节点 ID）</p>
     */
    public $NodeId;

    /**
     * @var string <p>节点角色：master/slave/readonly</p>
     */
    public $Role;

    /**
     * @var integer <p>路由权重，取值范围 [0, 100]</p>
     */
    public $Weight;

    /**
     * @var string <p>路由状态：available/unavailable</p>
     */
    public $Status;

    /**
     * @param string $NodeId <p>路由指向的 PG 节点 ID（实例或只读节点 ID）</p>
     * @param string $Role <p>节点角色：master/slave/readonly</p>
     * @param integer $Weight <p>路由权重，取值范围 [0, 100]</p>
     * @param string $Status <p>路由状态：available/unavailable</p>
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
