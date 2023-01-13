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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 视频智能分析输入参数类型
 *
 * @method integer getDefinition() 获取视频内容分析模板 ID。
 * @method void setDefinition(integer $Definition) 设置视频内容分析模板 ID。
 * @method string getExtendedParameter() 获取扩展参数，其值为序列化的 json字符串。
注意：此参数为定制需求参数，需要线下对接。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtendedParameter(string $ExtendedParameter) 设置扩展参数，其值为序列化的 json字符串。
注意：此参数为定制需求参数，需要线下对接。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AiAnalysisTaskInput extends AbstractModel
{
    /**
     * @var integer 视频内容分析模板 ID。
     */
    public $Definition;

    /**
     * @var string 扩展参数，其值为序列化的 json字符串。
注意：此参数为定制需求参数，需要线下对接。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition 视频内容分析模板 ID。
     * @param string $ExtendedParameter 扩展参数，其值为序列化的 json字符串。
注意：此参数为定制需求参数，需要线下对接。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
