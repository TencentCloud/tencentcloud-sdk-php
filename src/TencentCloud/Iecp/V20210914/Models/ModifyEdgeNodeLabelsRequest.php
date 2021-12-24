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
 * ModifyEdgeNodeLabels请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method integer getNodeId() 获取IECP边缘节点ID
 * @method void setNodeId(integer $NodeId) 设置IECP边缘节点ID
 * @method array getLabels() 获取标签列表
 * @method void setLabels(array $Labels) 设置标签列表
 */
class ModifyEdgeNodeLabelsRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var integer IECP边缘节点ID
     */
    public $NodeId;

    /**
     * @var array 标签列表
     */
    public $Labels;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param integer $NodeId IECP边缘节点ID
     * @param array $Labels 标签列表
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

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new KeyValueObj();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
