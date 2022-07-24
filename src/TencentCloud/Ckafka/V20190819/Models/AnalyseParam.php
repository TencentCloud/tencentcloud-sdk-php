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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理-解析参数
 *
 * @method string getFormat() 获取解析格式，JSON，DELIMITER分隔符，REGULAR正则提取，SOURCE处理上层所有结果
 * @method void setFormat(string $Format) 设置解析格式，JSON，DELIMITER分隔符，REGULAR正则提取，SOURCE处理上层所有结果
 * @method string getRegex() 获取分隔符、正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(string $Regex) 设置分隔符、正则表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputValueType() 获取需再次处理的KEY——模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputValueType(string $InputValueType) 设置需再次处理的KEY——模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputValue() 获取需再次处理的KEY——KEY表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputValue(string $InputValue) 设置需再次处理的KEY——KEY表达式
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnalyseParam extends AbstractModel
{
    /**
     * @var string 解析格式，JSON，DELIMITER分隔符，REGULAR正则提取，SOURCE处理上层所有结果
     */
    public $Format;

    /**
     * @var string 分隔符、正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @var string 需再次处理的KEY——模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputValueType;

    /**
     * @var string 需再次处理的KEY——KEY表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputValue;

    /**
     * @param string $Format 解析格式，JSON，DELIMITER分隔符，REGULAR正则提取，SOURCE处理上层所有结果
     * @param string $Regex 分隔符、正则表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputValueType 需再次处理的KEY——模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputValue 需再次处理的KEY——KEY表达式
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("InputValueType",$param) and $param["InputValueType"] !== null) {
            $this->InputValueType = $param["InputValueType"];
        }

        if (array_key_exists("InputValue",$param) and $param["InputValue"] !== null) {
            $this->InputValue = $param["InputValue"];
        }
    }
}
