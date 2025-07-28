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
 * 智能字幕输入结构体
 *
 * @method integer getDefinition() 获取智能字幕模板 ID 。	
 * @method void setDefinition(integer $Definition) 设置智能字幕模板 ID 。	
 * @method string getUserExtPara() 获取用户扩展字段，一般场景不用填。
 * @method void setUserExtPara(string $UserExtPara) 设置用户扩展字段，一般场景不用填。
 * @method RawSmartSubtitleParameter getRawParameter() 获取智能字幕自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRawParameter(RawSmartSubtitleParameter $RawParameter) 设置智能字幕自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。	
注意：此字段可能返回 null，表示取不到有效值。
 * @method TaskOutputStorage getOutputStorage() 获取媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。 
**注意**：当InputInfo.Type为URL时，该参数是必填项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。 
**注意**：当InputInfo.Type为URL时，该参数是必填项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputObjectPath() 获取生成字幕文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。

相对路径示例:
- 文件名_{变量名}.{format}
- 文件名.{format}

绝对路径示例：
- /自定义路径/文件名_{变量名}.{format}

如果不填，则默认为相对路径: `{inputName}_smartsubtitle_{definition}.{format}`。
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置生成字幕文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。

相对路径示例:
- 文件名_{变量名}.{format}
- 文件名.{format}

绝对路径示例：
- /自定义路径/文件名_{变量名}.{format}

如果不填，则默认为相对路径: `{inputName}_smartsubtitle_{definition}.{format}`。
 */
class SmartSubtitlesTaskInput extends AbstractModel
{
    /**
     * @var integer 智能字幕模板 ID 。	
     */
    public $Definition;

    /**
     * @var string 用户扩展字段，一般场景不用填。
     */
    public $UserExtPara;

    /**
     * @var RawSmartSubtitleParameter 智能字幕自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RawParameter;

    /**
     * @var TaskOutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。 
**注意**：当InputInfo.Type为URL时，该参数是必填项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputStorage;

    /**
     * @var string 生成字幕文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。

相对路径示例:
- 文件名_{变量名}.{format}
- 文件名.{format}

绝对路径示例：
- /自定义路径/文件名_{变量名}.{format}

如果不填，则默认为相对路径: `{inputName}_smartsubtitle_{definition}.{format}`。
     */
    public $OutputObjectPath;

    /**
     * @param integer $Definition 智能字幕模板 ID 。	
     * @param string $UserExtPara 用户扩展字段，一般场景不用填。
     * @param RawSmartSubtitleParameter $RawParameter 智能字幕自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定智能字幕参数。	
注意：此字段可能返回 null，表示取不到有效值。
     * @param TaskOutputStorage $OutputStorage 媒体处理输出文件的目标存储。不填则继承 InputInfo 中的存储位置。 
**注意**：当InputInfo.Type为URL时，该参数是必填项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputObjectPath 生成字幕文件的输出路径，可以为相对路径或者绝对路径。
若需定义输出路径，路径需以`.{format}`结尾。变量名请参考 [文件名变量说明](https://cloud.tencent.com/document/product/862/37039)。

相对路径示例:
- 文件名_{变量名}.{format}
- 文件名.{format}

绝对路径示例：
- /自定义路径/文件名_{变量名}.{format}

如果不填，则默认为相对路径: `{inputName}_smartsubtitle_{definition}.{format}`。
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

        if (array_key_exists("UserExtPara",$param) and $param["UserExtPara"] !== null) {
            $this->UserExtPara = $param["UserExtPara"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawSmartSubtitleParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
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
