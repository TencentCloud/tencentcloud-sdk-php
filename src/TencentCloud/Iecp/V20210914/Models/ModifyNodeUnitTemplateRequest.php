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
 * ModifyNodeUnitTemplate请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method integer getNodeUnitTemplateID() 获取NodeUnit模板ID
 * @method void setNodeUnitTemplateID(integer $NodeUnitTemplateID) 设置NodeUnit模板ID
 * @method array getNodes() 获取包含的节点列表
 * @method void setNodes(array $Nodes) 设置包含的节点列表
 */
class ModifyNodeUnitTemplateRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer NodeUnit模板ID
     */
    public $NodeUnitTemplateID;

    /**
     * @var array 包含的节点列表
     */
    public $Nodes;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param integer $NodeUnitTemplateID NodeUnit模板ID
     * @param array $Nodes 包含的节点列表
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

        if (array_key_exists("NodeUnitTemplateID",$param) and $param["NodeUnitTemplateID"] !== null) {
            $this->NodeUnitTemplateID = $param["NodeUnitTemplateID"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }
    }
}
