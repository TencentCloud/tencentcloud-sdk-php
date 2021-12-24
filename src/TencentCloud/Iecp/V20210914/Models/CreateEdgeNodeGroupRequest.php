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
 * CreateEdgeNodeGroup请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取IECP边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置IECP边缘单元ID
 * @method string getName() 获取NodeGroup名称
 * @method void setName(string $Name) 设置NodeGroup名称
 * @method string getNamespace() 获取命名空间，不填默认为default
 * @method void setNamespace(string $Namespace) 设置命名空间，不填默认为default
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method array getNodeUnitTemplateIDs() 获取模版ID数组
 * @method void setNodeUnitTemplateIDs(array $NodeUnitTemplateIDs) 设置模版ID数组
 */
class CreateEdgeNodeGroupRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string NodeGroup名称
     */
    public $Name;

    /**
     * @var string 命名空间，不填默认为default
     */
    public $Namespace;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var array 模版ID数组
     */
    public $NodeUnitTemplateIDs;

    /**
     * @param integer $EdgeUnitId IECP边缘单元ID
     * @param string $Name NodeGroup名称
     * @param string $Namespace 命名空间，不填默认为default
     * @param string $Description 描述
     * @param array $NodeUnitTemplateIDs 模版ID数组
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("NodeUnitTemplateIDs",$param) and $param["NodeUnitTemplateIDs"] !== null) {
            $this->NodeUnitTemplateIDs = $param["NodeUnitTemplateIDs"];
        }
    }
}
