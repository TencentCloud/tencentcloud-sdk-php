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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 边缘函数组件绑定配置，用于建立边缘函数与组件（如 KV 命名空间）的关联关系。通过绑定配置，边缘函数代码可在运行时通过指定的变量名访问绑定的资源。
 *
 * @method string getType() 获取绑定的组件类型。取值有：
<li>kv_namespace：KV 命名空间。</li>

 * @method void setType(string $Type) 设置绑定的组件类型。取值有：
<li>kv_namespace：KV 命名空间。</li>

 * @method string getVariableName() 获取用于绑定的变量名。限制 1-50 个字符，允许的字符为字母、数字和下划线，其中数字不能在开头。在边缘函数代码中通过该变量名访问绑定的组件。根据 Type 的取值不同，使用方式如下：
<li>当 Type 为 kv_namespace 时：在代码中可通过该变量名访问 KV 命名空间，例如设置为 "MY_KV" 时，可通过 MY_KV.get("key") 进行读写操作。</li>

 * @method void setVariableName(string $VariableName) 设置用于绑定的变量名。限制 1-50 个字符，允许的字符为字母、数字和下划线，其中数字不能在开头。在边缘函数代码中通过该变量名访问绑定的组件。根据 Type 的取值不同，使用方式如下：
<li>当 Type 为 kv_namespace 时：在代码中可通过该变量名访问 KV 命名空间，例如设置为 "MY_KV" 时，可通过 MY_KV.get("key") 进行读写操作。</li>

 * @method KVNamespaceParameters getKVNamespaceParameters() 获取KV 命名空间配置参数。用于指定绑定的 KV 命名空间详情。当 Type 为 kv_namespace 时，此字段必填。


注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKVNamespaceParameters(KVNamespaceParameters $KVNamespaceParameters) 设置KV 命名空间配置参数。用于指定绑定的 KV 命名空间详情。当 Type 为 kv_namespace 时，此字段必填。


注意：此字段可能返回 null，表示取不到有效值。
 */
class FunctionComponentBinding extends AbstractModel
{
    /**
     * @var string 绑定的组件类型。取值有：
<li>kv_namespace：KV 命名空间。</li>

     */
    public $Type;

    /**
     * @var string 用于绑定的变量名。限制 1-50 个字符，允许的字符为字母、数字和下划线，其中数字不能在开头。在边缘函数代码中通过该变量名访问绑定的组件。根据 Type 的取值不同，使用方式如下：
<li>当 Type 为 kv_namespace 时：在代码中可通过该变量名访问 KV 命名空间，例如设置为 "MY_KV" 时，可通过 MY_KV.get("key") 进行读写操作。</li>

     */
    public $VariableName;

    /**
     * @var KVNamespaceParameters KV 命名空间配置参数。用于指定绑定的 KV 命名空间详情。当 Type 为 kv_namespace 时，此字段必填。


注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KVNamespaceParameters;

    /**
     * @param string $Type 绑定的组件类型。取值有：
<li>kv_namespace：KV 命名空间。</li>

     * @param string $VariableName 用于绑定的变量名。限制 1-50 个字符，允许的字符为字母、数字和下划线，其中数字不能在开头。在边缘函数代码中通过该变量名访问绑定的组件。根据 Type 的取值不同，使用方式如下：
<li>当 Type 为 kv_namespace 时：在代码中可通过该变量名访问 KV 命名空间，例如设置为 "MY_KV" 时，可通过 MY_KV.get("key") 进行读写操作。</li>

     * @param KVNamespaceParameters $KVNamespaceParameters KV 命名空间配置参数。用于指定绑定的 KV 命名空间详情。当 Type 为 kv_namespace 时，此字段必填。


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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VariableName",$param) and $param["VariableName"] !== null) {
            $this->VariableName = $param["VariableName"];
        }

        if (array_key_exists("KVNamespaceParameters",$param) and $param["KVNamespaceParameters"] !== null) {
            $this->KVNamespaceParameters = new KVNamespaceParameters();
            $this->KVNamespaceParameters->deserialize($param["KVNamespaceParameters"]);
        }
    }
}
