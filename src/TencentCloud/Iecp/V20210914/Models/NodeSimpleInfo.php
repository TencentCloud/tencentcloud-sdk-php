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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点基础信息
 *
 * @method integer getID() 获取节点ID
 * @method void setID(integer $ID) 设置节点ID
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 */
class NodeSimpleInfo extends AbstractModel
{
    /**
     * @var integer 节点ID
     */
    public $ID;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @param integer $ID 节点ID
     * @param string $NodeName 节点名称
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
