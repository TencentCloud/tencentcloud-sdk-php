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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测节点数（新建任务页面重构）
 *
 * @method string getID() 获取节点ID
 * @method void setID(string $ID) 设置节点ID
 * @method string getContent() 获取节点名称
 * @method void setContent(string $Content) 设置节点名称
 * @method array getChildren() 获取子节点
 * @method void setChildren(array $Children) 设置子节点
 */
class NodeTree extends AbstractModel
{
    /**
     * @var string 节点ID
     */
    public $ID;

    /**
     * @var string 节点名称
     */
    public $Content;

    /**
     * @var array 子节点
     */
    public $Children;

    /**
     * @param string $ID 节点ID
     * @param string $Content 节点名称
     * @param array $Children 子节点
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new NodeLeaf();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }
    }
}
