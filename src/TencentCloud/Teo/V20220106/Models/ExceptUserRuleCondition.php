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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 例外规则生效的具体条件
 *
 * @method string getMatchFrom() 获取匹配项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchFrom(string $MatchFrom) 设置匹配项。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchParam() 获取匹配项的参数。当 MatchFrom 为 header 时，可以填入 header 的 key 作为参数。
 * @method void setMatchParam(string $MatchParam) 设置匹配项的参数。当 MatchFrom 为 header 时，可以填入 header 的 key 作为参数。
 * @method string getOperator() 获取匹配操作符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置匹配操作符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMatchContent() 获取匹配值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchContent(string $MatchContent) 设置匹配值。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExceptUserRuleCondition extends AbstractModel
{
    /**
     * @var string 匹配项。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchFrom;

    /**
     * @var string 匹配项的参数。当 MatchFrom 为 header 时，可以填入 header 的 key 作为参数。
     */
    public $MatchParam;

    /**
     * @var string 匹配操作符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 匹配值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchContent;

    /**
     * @param string $MatchFrom 匹配项。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchParam 匹配项的参数。当 MatchFrom 为 header 时，可以填入 header 的 key 作为参数。
     * @param string $Operator 匹配操作符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MatchContent 匹配值。
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
        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("MatchParam",$param) and $param["MatchParam"] !== null) {
            $this->MatchParam = $param["MatchParam"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
