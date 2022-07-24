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
 * 数据处理——Value处理参数
 *
 * @method string getType() 获取处理模式，REPLACE替换，SUBSTR截取，DATE日期转换，TRIM去除前后空格，REGEX_REPLACE正则替换
 * @method void setType(string $Type) 设置处理模式，REPLACE替换，SUBSTR截取，DATE日期转换，TRIM去除前后空格，REGEX_REPLACE正则替换
 * @method ReplaceParam getReplace() 获取替换，TYPE=REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplace(ReplaceParam $Replace) 设置替换，TYPE=REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method SubstrParam getSubstr() 获取截取，TYPE=SUBSTR时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubstr(SubstrParam $Substr) 设置截取，TYPE=SUBSTR时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method DateParam getDate() 获取时间转换，TYPE=DATE时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDate(DateParam $Date) 设置时间转换，TYPE=DATE时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegexReplaceParam getRegexReplace() 获取正则替换，TYPE=REGEX_REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegexReplace(RegexReplaceParam $RegexReplace) 设置正则替换，TYPE=REGEX_REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
 */
class ValueParam extends AbstractModel
{
    /**
     * @var string 处理模式，REPLACE替换，SUBSTR截取，DATE日期转换，TRIM去除前后空格，REGEX_REPLACE正则替换
     */
    public $Type;

    /**
     * @var ReplaceParam 替换，TYPE=REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replace;

    /**
     * @var SubstrParam 截取，TYPE=SUBSTR时必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Substr;

    /**
     * @var DateParam 时间转换，TYPE=DATE时必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Date;

    /**
     * @var RegexReplaceParam 正则替换，TYPE=REGEX_REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegexReplace;

    /**
     * @param string $Type 处理模式，REPLACE替换，SUBSTR截取，DATE日期转换，TRIM去除前后空格，REGEX_REPLACE正则替换
     * @param ReplaceParam $Replace 替换，TYPE=REPLACE时必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param SubstrParam $Substr 截取，TYPE=SUBSTR时必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param DateParam $Date 时间转换，TYPE=DATE时必传
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegexReplaceParam $RegexReplace 正则替换，TYPE=REGEX_REPLACE时必传
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

        if (array_key_exists("Replace",$param) and $param["Replace"] !== null) {
            $this->Replace = new ReplaceParam();
            $this->Replace->deserialize($param["Replace"]);
        }

        if (array_key_exists("Substr",$param) and $param["Substr"] !== null) {
            $this->Substr = new SubstrParam();
            $this->Substr->deserialize($param["Substr"]);
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = new DateParam();
            $this->Date->deserialize($param["Date"]);
        }

        if (array_key_exists("RegexReplace",$param) and $param["RegexReplace"] !== null) {
            $this->RegexReplace = new RegexReplaceParam();
            $this->RegexReplace->deserialize($param["RegexReplace"]);
        }
    }
}
