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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy节点信息。
 *
 * @method string getNodeId() 获取节点 ID。
 * @method void setNodeId(string $NodeId) 设置节点 ID。
 * @method integer getZoneId() 获取可用区 ID。
 * @method void setZoneId(integer $ZoneId) 设置可用区 ID。
 */
class ProxyNodes extends AbstractModel
{
    /**
     * @var string 节点 ID。
     */
    public $NodeId;

    /**
     * @var integer 可用区 ID。
     */
    public $ZoneId;

    /**
     * @param string $NodeId 节点 ID。
     * @param integer $ZoneId 可用区 ID。
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

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
