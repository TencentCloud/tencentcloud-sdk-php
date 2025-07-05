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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构件树响应体
 *
 * @method string getBuildingId() 获取建筑id
 * @method void setBuildingId(string $BuildingId) 设置建筑id
 * @method string getParentElementId() 获取父级构件id
 * @method void setParentElementId(string $ParentElementId) 设置父级构件id
 * @method ElementProfileTreeNode getRoot() 获取构件树
 * @method void setRoot(ElementProfileTreeNode $Root) 设置构件树
 */
class ElementProfileTreeRes extends AbstractModel
{
    /**
     * @var string 建筑id
     */
    public $BuildingId;

    /**
     * @var string 父级构件id
     */
    public $ParentElementId;

    /**
     * @var ElementProfileTreeNode 构件树
     */
    public $Root;

    /**
     * @param string $BuildingId 建筑id
     * @param string $ParentElementId 父级构件id
     * @param ElementProfileTreeNode $Root 构件树
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
        if (array_key_exists("BuildingId",$param) and $param["BuildingId"] !== null) {
            $this->BuildingId = $param["BuildingId"];
        }

        if (array_key_exists("ParentElementId",$param) and $param["ParentElementId"] !== null) {
            $this->ParentElementId = $param["ParentElementId"];
        }

        if (array_key_exists("Root",$param) and $param["Root"] !== null) {
            $this->Root = new ElementProfileTreeNode();
            $this->Root->deserialize($param["Root"]);
        }
    }
}
