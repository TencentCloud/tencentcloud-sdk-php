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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代码匹配信息
 *
 * @method integer getNumber() 获取行号
 * @method void setNumber(integer $Number) 设置行号
 * @method string getLine() 获取行内容
 * @method void setLine(string $Line) 设置行内容
 * @method string getNodeType() 获取离线节点类型
 * @method void setNodeType(string $NodeType) 设置离线节点类型
 */
class CodeMatchInfo extends AbstractModel
{
    /**
     * @var integer 行号
     */
    public $Number;

    /**
     * @var string 行内容
     */
    public $Line;

    /**
     * @var string 离线节点类型
     */
    public $NodeType;

    /**
     * @param integer $Number 行号
     * @param string $Line 行内容
     * @param string $NodeType 离线节点类型
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = $param["Line"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
