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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEdgeNodeUnitTemplates请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method array getNodeUnitTemplateIDs() 获取删除的NodeUnit模板ID列表
 * @method void setNodeUnitTemplateIDs(array $NodeUnitTemplateIDs) 设置删除的NodeUnit模板ID列表
 */
class DeleteEdgeNodeUnitTemplatesRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var array 删除的NodeUnit模板ID列表
     */
    public $NodeUnitTemplateIDs;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param array $NodeUnitTemplateIDs 删除的NodeUnit模板ID列表
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

        if (array_key_exists("NodeUnitTemplateIDs",$param) and $param["NodeUnitTemplateIDs"] !== null) {
            $this->NodeUnitTemplateIDs = $param["NodeUnitTemplateIDs"];
        }
    }
}
