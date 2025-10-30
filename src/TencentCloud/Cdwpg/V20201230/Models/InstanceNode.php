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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance node
 *
 * @method integer getNodeId() 获取id
 * @method void setNodeId(integer $NodeId) 设置id
 * @method string getNodeType() 获取cn
 * @method void setNodeType(string $NodeType) 设置cn
 * @method string getNodeIp() 获取ip
 * @method void setNodeIp(string $NodeIp) 设置ip
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer id
     */
    public $NodeId;

    /**
     * @var string cn
     */
    public $NodeType;

    /**
     * @var string ip
     */
    public $NodeIp;

    /**
     * @param integer $NodeId id
     * @param string $NodeType cn
     * @param string $NodeIp ip
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

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }
    }
}
