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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getFunctionName() 获取函数名
 * @method void setFunctionName(string $FunctionName) 设置函数名
 * @method string getNewFunctionName() 获取新函数的名称
 * @method void setNewFunctionName(string $NewFunctionName) 设置新函数的名称
 * @method string getNamespace() 获取命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置命名空间，默认为default
 * @method string getTargetNamespace() 获取将函数复制到的命名空间，默认为default
 * @method void setTargetNamespace(string $TargetNamespace) 设置将函数复制到的命名空间，默认为default
 * @method string getDescription() 获取函数描述
 * @method void setDescription(string $Description) 设置函数描述
 * @method string getTargetRegion() 获取要将函数复制到的地域，不填则默认为当前地域
 * @method void setTargetRegion(string $TargetRegion) 设置要将函数复制到的地域，不填则默认为当前地域
 */

/**
 *CopyFunction请求参数结构体
 */
class CopyFunctionRequest extends AbstractModel
{
    /**
     * @var string 函数名
     */
    public $FunctionName;

    /**
     * @var string 新函数的名称
     */
    public $NewFunctionName;

    /**
     * @var string 命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var string 将函数复制到的命名空间，默认为default
     */
    public $TargetNamespace;

    /**
     * @var string 函数描述
     */
    public $Description;

    /**
     * @var string 要将函数复制到的地域，不填则默认为当前地域
     */
    public $TargetRegion;
    /**
     * @param string $FunctionName 函数名
     * @param string $NewFunctionName 新函数的名称
     * @param string $Namespace 命名空间，默认为default
     * @param string $TargetNamespace 将函数复制到的命名空间，默认为default
     * @param string $Description 函数描述
     * @param string $TargetRegion 要将函数复制到的地域，不填则默认为当前地域
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("NewFunctionName",$param) and $param["NewFunctionName"] !== null) {
            $this->NewFunctionName = $param["NewFunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("TargetNamespace",$param) and $param["TargetNamespace"] !== null) {
            $this->TargetNamespace = $param["TargetNamespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }
    }
}
