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
 * CreateUpdateNodeUnit请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getNodeGroupName() 获取NodeUnit所属的NodeGroup名称
 * @method void setNodeGroupName(string $NodeGroupName) 设置NodeUnit所属的NodeGroup名称
 * @method string getNamespace() 获取命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认为default
 * @method string getNodeUnitName() 获取NodeUnit名称，通过模版创建可不填
 * @method void setNodeUnitName(string $NodeUnitName) 设置NodeUnit名称，通过模版创建可不填
 * @method array getNodes() 获取NodeUnit包含的节点列表，通过模版创建可不填
 * @method void setNodes(array $Nodes) 设置NodeUnit包含的节点列表，通过模版创建可不填
 * @method array getNodeUnitTemplateIDs() 获取NodeUnit模版ID列表
 * @method void setNodeUnitTemplateIDs(array $NodeUnitTemplateIDs) 设置NodeUnit模版ID列表
 */
class CreateUpdateNodeUnitRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string NodeUnit所属的NodeGroup名称
     */
    public $NodeGroupName;

    /**
     * @var string 命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var string NodeUnit名称，通过模版创建可不填
     */
    public $NodeUnitName;

    /**
     * @var array NodeUnit包含的节点列表，通过模版创建可不填
     */
    public $Nodes;

    /**
     * @var array NodeUnit模版ID列表
     */
    public $NodeUnitTemplateIDs;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $NodeGroupName NodeUnit所属的NodeGroup名称
     * @param string $Namespace 命名空间，默认为default
     * @param string $NodeUnitName NodeUnit名称，通过模版创建可不填
     * @param array $Nodes NodeUnit包含的节点列表，通过模版创建可不填
     * @param array $NodeUnitTemplateIDs NodeUnit模版ID列表
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("NodeGroupName",$param) and $param["NodeGroupName"] !== null) {
            $this->NodeGroupName = $param["NodeGroupName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NodeUnitName",$param) and $param["NodeUnitName"] !== null) {
            $this->NodeUnitName = $param["NodeUnitName"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("NodeUnitTemplateIDs",$param) and $param["NodeUnitTemplateIDs"] !== null) {
            $this->NodeUnitTemplateIDs = $param["NodeUnitTemplateIDs"];
        }
    }
}
