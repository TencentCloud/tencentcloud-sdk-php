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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点标记信息
 *
 * @method string getNodeType() 获取节点类型：master,core,task,router
 * @method void setNodeType(string $NodeType) 设置节点类型：master,core,task,router
 * @method array getNodeNames() 获取节点标记信息，目前只提供给tf平台使用，作为入参区分同类型节点信息
 * @method void setNodeNames(array $NodeNames) 设置节点标记信息，目前只提供给tf平台使用，作为入参区分同类型节点信息
 * @method string getZone() 获取可用区名称
 * @method void setZone(string $Zone) 设置可用区名称
 */
class NodeMark extends AbstractModel
{
    /**
     * @var string 节点类型：master,core,task,router
     */
    public $NodeType;

    /**
     * @var array 节点标记信息，目前只提供给tf平台使用，作为入参区分同类型节点信息
     */
    public $NodeNames;

    /**
     * @var string 可用区名称
     */
    public $Zone;

    /**
     * @param string $NodeType 节点类型：master,core,task,router
     * @param array $NodeNames 节点标记信息，目前只提供给tf平台使用，作为入参区分同类型节点信息
     * @param string $Zone 可用区名称
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
