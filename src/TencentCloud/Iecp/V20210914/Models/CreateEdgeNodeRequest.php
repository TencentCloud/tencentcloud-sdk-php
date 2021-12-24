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
 * CreateEdgeNode请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 */
class CreateEdgeNodeRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param string $Name 节点名称
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
    }
}
