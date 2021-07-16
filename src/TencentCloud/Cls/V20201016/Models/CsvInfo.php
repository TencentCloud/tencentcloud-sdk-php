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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * csv内容描述
 *
 * @method boolean getPrintKey() 获取csv首行是否打印key
 * @method void setPrintKey(boolean $PrintKey) 设置csv首行是否打印key
 * @method array getKeys() 获取每列key的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeys(array $Keys) 设置每列key的名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDelimiter() 获取各字段间的分隔符
 * @method void setDelimiter(string $Delimiter) 设置各字段间的分隔符
 * @method string getEscapeChar() 获取若字段内容中包含分隔符，则使用该转义符包裹改字段，只能填写单引号、双引号、空字符串
 * @method void setEscapeChar(string $EscapeChar) 设置若字段内容中包含分隔符，则使用该转义符包裹改字段，只能填写单引号、双引号、空字符串
 * @method string getNonExistingField() 获取对于上面指定的不存在字段使用该内容填充
 * @method void setNonExistingField(string $NonExistingField) 设置对于上面指定的不存在字段使用该内容填充
 */
class CsvInfo extends AbstractModel
{
    /**
     * @var boolean csv首行是否打印key
     */
    public $PrintKey;

    /**
     * @var array 每列key的名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keys;

    /**
     * @var string 各字段间的分隔符
     */
    public $Delimiter;

    /**
     * @var string 若字段内容中包含分隔符，则使用该转义符包裹改字段，只能填写单引号、双引号、空字符串
     */
    public $EscapeChar;

    /**
     * @var string 对于上面指定的不存在字段使用该内容填充
     */
    public $NonExistingField;

    /**
     * @param boolean $PrintKey csv首行是否打印key
     * @param array $Keys 每列key的名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Delimiter 各字段间的分隔符
     * @param string $EscapeChar 若字段内容中包含分隔符，则使用该转义符包裹改字段，只能填写单引号、双引号、空字符串
     * @param string $NonExistingField 对于上面指定的不存在字段使用该内容填充
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
        if (array_key_exists("PrintKey",$param) and $param["PrintKey"] !== null) {
            $this->PrintKey = $param["PrintKey"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = $param["Keys"];
        }

        if (array_key_exists("Delimiter",$param) and $param["Delimiter"] !== null) {
            $this->Delimiter = $param["Delimiter"];
        }

        if (array_key_exists("EscapeChar",$param) and $param["EscapeChar"] !== null) {
            $this->EscapeChar = $param["EscapeChar"];
        }

        if (array_key_exists("NonExistingField",$param) and $param["NonExistingField"] !== null) {
            $this->NonExistingField = $param["NonExistingField"];
        }
    }
}
