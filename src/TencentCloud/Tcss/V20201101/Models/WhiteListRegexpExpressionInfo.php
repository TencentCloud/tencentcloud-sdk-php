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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 白名单正则表达式信息
 *
 * @method string getLogicSymbol() 获取逻辑符号
与 (AND)
或 (OR)
非 (NOT)
 * @method void setLogicSymbol(string $LogicSymbol) 设置逻辑符号
与 (AND)
或 (OR)
非 (NOT)
 * @method string getMatchField() 获取匹配字段
 * @method void setMatchField(string $MatchField) 设置匹配字段
 * @method string getMatchContent() 获取匹配内容
 * @method void setMatchContent(string $MatchContent) 设置匹配内容
 */
class WhiteListRegexpExpressionInfo extends AbstractModel
{
    /**
     * @var string 逻辑符号
与 (AND)
或 (OR)
非 (NOT)
     */
    public $LogicSymbol;

    /**
     * @var string 匹配字段
     */
    public $MatchField;

    /**
     * @var string 匹配内容
     */
    public $MatchContent;

    /**
     * @param string $LogicSymbol 逻辑符号
与 (AND)
或 (OR)
非 (NOT)
     * @param string $MatchField 匹配字段
     * @param string $MatchContent 匹配内容
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
        if (array_key_exists("LogicSymbol",$param) and $param["LogicSymbol"] !== null) {
            $this->LogicSymbol = $param["LogicSymbol"];
        }

        if (array_key_exists("MatchField",$param) and $param["MatchField"] !== null) {
            $this->MatchField = $param["MatchField"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
