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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 本轮对话在画布中经过的节点路径
 *
 * @method string getNodeName() 获取<p>画布中的节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>画布中的节点名称</p>
 * @method string getNodeType() 获取<p>画布中的节点类型</p><p>枚举值：</p><ul><li>DIALOGUE： 对话节点</li><li>API_CALL： 接口调用节点</li><li>TRANSFER： 转接节点</li><li>KEY_PRESS： 按键节点</li><li>END_CALL： 挂断节点</li></ul>
 * @method void setNodeType(string $NodeType) 设置<p>画布中的节点类型</p><p>枚举值：</p><ul><li>DIALOGUE： 对话节点</li><li>API_CALL： 接口调用节点</li><li>TRANSFER： 转接节点</li><li>KEY_PRESS： 按键节点</li><li>END_CALL： 挂断节点</li></ul>
 * @method integer getTimestamp() 获取<p>经过当前节点的时间戳</p><p>单位：ms</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>经过当前节点的时间戳</p><p>单位：ms</p>
 */
class AIRoundPath extends AbstractModel
{
    /**
     * @var string <p>画布中的节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>画布中的节点类型</p><p>枚举值：</p><ul><li>DIALOGUE： 对话节点</li><li>API_CALL： 接口调用节点</li><li>TRANSFER： 转接节点</li><li>KEY_PRESS： 按键节点</li><li>END_CALL： 挂断节点</li></ul>
     */
    public $NodeType;

    /**
     * @var integer <p>经过当前节点的时间戳</p><p>单位：ms</p>
     */
    public $Timestamp;

    /**
     * @param string $NodeName <p>画布中的节点名称</p>
     * @param string $NodeType <p>画布中的节点类型</p><p>枚举值：</p><ul><li>DIALOGUE： 对话节点</li><li>API_CALL： 接口调用节点</li><li>TRANSFER： 转接节点</li><li>KEY_PRESS： 按键节点</li><li>END_CALL： 挂断节点</li></ul>
     * @param integer $Timestamp <p>经过当前节点的时间戳</p><p>单位：ms</p>
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
