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
 * CreateNamespace请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置单元ID
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var integer 单元ID
     */
    public $EdgeUnitID;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @param integer $EdgeUnitID 单元ID
     * @param string $Namespace 命名空间
     * @param string $Description 描述信息
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
        if (array_key_exists("EdgeUnitID",$param) and $param["EdgeUnitID"] !== null) {
            $this->EdgeUnitID = $param["EdgeUnitID"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
