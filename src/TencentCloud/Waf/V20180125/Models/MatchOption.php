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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流规则中匹配条件
 *
 * @method string getParams() 获取匹配参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置匹配参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFunc() 获取逻辑符号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFunc(string $Func) 设置逻辑符号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取匹配内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置匹配内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class MatchOption extends AbstractModel
{
    /**
     * @var string 匹配参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string 逻辑符号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Func;

    /**
     * @var string 匹配内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Params 匹配参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Func 逻辑符号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 匹配内容
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
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Func",$param) and $param["Func"] !== null) {
            $this->Func = $param["Func"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
