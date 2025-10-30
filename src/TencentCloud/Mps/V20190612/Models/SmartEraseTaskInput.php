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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能擦除任务
 *
 * @method integer getDefinition() 获取智能擦除模板id。
 * @method void setDefinition(integer $Definition) 设置智能擦除模板id。
 * @method RawSmartEraseParameter getRawParameter() 获取智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawParameter(RawSmartEraseParameter $RawParameter) 设置智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OverrideEraseParameter getOverrideParameter() 获取智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。
 * @method void setOverrideParameter(OverrideEraseParameter $OverrideParameter) 设置智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。
 * @method TaskOutputStorage getOutputStorage() 获取文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>

**注意**：目前不支持`BatchProcessMedia`接口。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>

**注意**：目前不支持`BatchProcessMedia`接口。
 */
class SmartEraseTaskInput extends AbstractModel
{
    /**
     * @var integer 智能擦除模板id。
     */
    public $Definition;

    /**
     * @var RawSmartEraseParameter 智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawParameter;

    /**
     * @var OverrideEraseParameter 智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage 文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>

**注意**：目前不支持`BatchProcessMedia`接口。
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition 智能擦除模板id。
     * @param RawSmartEraseParameter $RawParameter 智能擦除自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能擦除参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OverrideEraseParameter $OverrideParameter 智能擦除自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分擦除参数时，将使用填写的参数覆盖智能擦除模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定智能擦除参数。
     * @param TaskOutputStorage $OutputStorage 文件的目标存储，不填则继承上层的 OutputStorage 值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath 文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。
相对路径示例：
<li>文件名_{变量名}.{format}</li>
<li>文件名.{format}</li>
绝对路径示例：
<li>/自定义路径/文件名_{变量名}.{format}</li>

**注意**：目前不支持`BatchProcessMedia`接口。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartEraseParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideEraseParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }
    }
}
