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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetModelReadme返回参数结构体
 *
 * @method string getModelName() 获取<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvider() 获取<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvider(string $Provider) 设置<p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelType() 获取<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelType(string $ModelType) 设置<p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterSize() 获取<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterSize(string $ParameterSize) 设置<p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getBuiltIn() 获取<p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuiltIn(boolean $BuiltIn) 设置<p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadme() 获取<p>README 内容（Markdown 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadme(string $Readme) 设置<p>README 内容（Markdown 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetModelReadmeResponse extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Provider;

    /**
     * @var string <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelType;

    /**
     * @var string <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterSize;

    /**
     * @var boolean <p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuiltIn;

    /**
     * @var string <p>README 内容（Markdown 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Readme;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModelName <p>模型名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Provider <p>模型提供方</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelType <p>模型类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterSize <p>参数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $BuiltIn <p>是否是内置模型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Readme <p>README 内容（Markdown 格式）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ParameterSize",$param) and $param["ParameterSize"] !== null) {
            $this->ParameterSize = $param["ParameterSize"];
        }

        if (array_key_exists("BuiltIn",$param) and $param["BuiltIn"] !== null) {
            $this->BuiltIn = $param["BuiltIn"];
        }

        if (array_key_exists("Readme",$param) and $param["Readme"] !== null) {
            $this->Readme = $param["Readme"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
