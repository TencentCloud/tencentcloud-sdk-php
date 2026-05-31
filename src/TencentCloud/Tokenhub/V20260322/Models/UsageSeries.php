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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用量时间周期内的时序点列表（按 metric key 索引）。为 JSON 数组的字符串形式,数组长度与响应 Timestamps 一致，无数据点处为 null。具体包含哪些 key 由响应 MetricKeys 决定。
 *
 * @method string getTotalToken() 获取总 token 数用量时间周期内的 JSON 字符串形式，如 `"[12,null,15]"`。
 * @method void setTotalToken(string $TotalToken) 设置总 token 数用量时间周期内的 JSON 字符串形式，如 `"[12,null,15]"`。
 * @method string getInputTotalToken() 获取输入 token 数用量时间周期内的 JSON 字符串形式，如 `"[7,null,9]"`。
 * @method void setInputTotalToken(string $InputTotalToken) 设置输入 token 数用量时间周期内的 JSON 字符串形式，如 `"[7,null,9]"`。
 * @method string getOutputTotalToken() 获取输出 token 数用量时间周期内的 JSON 字符串形式，如 `"[5,null,6]"`。
 * @method void setOutputTotalToken(string $OutputTotalToken) 设置输出 token 数用量时间周期内的 JSON 字符串形式，如 `"[5,null,6]"`。
 */
class UsageSeries extends AbstractModel
{
    /**
     * @var string 总 token 数用量时间周期内的 JSON 字符串形式，如 `"[12,null,15]"`。
     */
    public $TotalToken;

    /**
     * @var string 输入 token 数用量时间周期内的 JSON 字符串形式，如 `"[7,null,9]"`。
     */
    public $InputTotalToken;

    /**
     * @var string 输出 token 数用量时间周期内的 JSON 字符串形式，如 `"[5,null,6]"`。
     */
    public $OutputTotalToken;

    /**
     * @param string $TotalToken 总 token 数用量时间周期内的 JSON 字符串形式，如 `"[12,null,15]"`。
     * @param string $InputTotalToken 输入 token 数用量时间周期内的 JSON 字符串形式，如 `"[7,null,9]"`。
     * @param string $OutputTotalToken 输出 token 数用量时间周期内的 JSON 字符串形式，如 `"[5,null,6]"`。
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
        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("InputTotalToken",$param) and $param["InputTotalToken"] !== null) {
            $this->InputTotalToken = $param["InputTotalToken"];
        }

        if (array_key_exists("OutputTotalToken",$param) and $param["OutputTotalToken"] !== null) {
            $this->OutputTotalToken = $param["OutputTotalToken"];
        }
    }
}
