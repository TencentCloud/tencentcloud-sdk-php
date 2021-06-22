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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可视化节点配置
 *
 * @method integer getNodeNum() 获取可视化节点个数，固定为1
 * @method void setNodeNum(integer $NodeNum) 设置可视化节点个数，固定为1
 * @method string getNodeType() 获取可视化节点规格
 * @method void setNodeType(string $NodeType) 设置可视化节点规格
 */
class WebNodeTypeInfo extends AbstractModel
{
    /**
     * @var integer 可视化节点个数，固定为1
     */
    public $NodeNum;

    /**
     * @var string 可视化节点规格
     */
    public $NodeType;

    /**
     * @param integer $NodeNum 可视化节点个数，固定为1
     * @param string $NodeType 可视化节点规格
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
        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
