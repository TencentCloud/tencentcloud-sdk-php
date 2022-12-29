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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF云函数（Serverless Cloud Function）相关信息。
 *
 * @method string getFunctionNamespace() 获取函数命名空间
 * @method void setFunctionNamespace(string $FunctionNamespace) 设置函数命名空间
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getFunctionQualifier() 获取函数的版本名称或别名
 * @method void setFunctionQualifier(string $FunctionQualifier) 设置函数的版本名称或别名
 * @method string getFunctionQualifierType() 获取标识 FunctionQualifier 参数的类型，可取值： VERSION（版本）、ALIAS（别名）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunctionQualifierType(string $FunctionQualifierType) 设置标识 FunctionQualifier 参数的类型，可取值： VERSION（版本）、ALIAS（别名）
注意：此字段可能返回 null，表示取不到有效值。
 */
class FunctionInfo extends AbstractModel
{
    /**
     * @var string 函数命名空间
     */
    public $FunctionNamespace;

    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数的版本名称或别名
     */
    public $FunctionQualifier;

    /**
     * @var string 标识 FunctionQualifier 参数的类型，可取值： VERSION（版本）、ALIAS（别名）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FunctionQualifierType;

    /**
     * @param string $FunctionNamespace 函数命名空间
     * @param string $FunctionName 函数名称
     * @param string $FunctionQualifier 函数的版本名称或别名
     * @param string $FunctionQualifierType 标识 FunctionQualifier 参数的类型，可取值： VERSION（版本）、ALIAS（别名）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("FunctionNamespace",$param) and $param["FunctionNamespace"] !== null) {
            $this->FunctionNamespace = $param["FunctionNamespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionQualifier",$param) and $param["FunctionQualifier"] !== null) {
            $this->FunctionQualifier = $param["FunctionQualifier"];
        }

        if (array_key_exists("FunctionQualifierType",$param) and $param["FunctionQualifierType"] !== null) {
            $this->FunctionQualifierType = $param["FunctionQualifierType"];
        }
    }
}
