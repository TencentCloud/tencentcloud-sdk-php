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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预留券抵扣范围的描述信息，当抵扣范围为 Region 时，表示地域抵扣，其他参数不需要传；当抵扣范围为 Zone 时，表示可用区抵扣，Zone 参数必传；当抵扣范围为 Node 时，表示节点抵扣，参数 Zone、ClusterId和NodeName均必传。
 *
 * @method string getScope() 获取抵扣范围，取值：Region、Zone 和 Node
 * @method void setScope(string $Scope) 设置抵扣范围，取值：Region、Zone 和 Node
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getNodeName() 获取 节点名称
 * @method void setNodeName(string $NodeName) 设置 节点名称
 */
class ReservedInstanceScope extends AbstractModel
{
    /**
     * @var string 抵扣范围，取值：Region、Zone 和 Node
     */
    public $Scope;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string  节点名称
     */
    public $NodeName;

    /**
     * @param string $Scope 抵扣范围，取值：Region、Zone 和 Node
     * @param string $Zone 可用区
     * @param string $ClusterId 集群 ID
     * @param string $NodeName  节点名称
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
