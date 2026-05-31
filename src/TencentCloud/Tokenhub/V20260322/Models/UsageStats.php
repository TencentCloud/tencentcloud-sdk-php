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
 * 时间周期内的统计聚合值（按 metric key 索引）。本期返回 tokens 族（statistics=sum）的累计 Token 用量；具体包含哪些 key、顺序如何，参见响应顶层 `MetricKeys` 字段。接口预留 MetricType 字段以支持后续指标族扩展，本期仅支持 tokens。
 *
 * @method integer getTotalToken() 获取时间周期内的累计总 token 数。
 * @method void setTotalToken(integer $TotalToken) 设置时间周期内的累计总 token 数。
 * @method integer getInputTotalToken() 获取时间周期内的累计输入 token 数。
 * @method void setInputTotalToken(integer $InputTotalToken) 设置时间周期内的累计输入 token 数。
 * @method integer getOutputTotalToken() 获取时间周期内的累计输出 token 数。
 * @method void setOutputTotalToken(integer $OutputTotalToken) 设置时间周期内的累计输出 token 数。
 */
class UsageStats extends AbstractModel
{
    /**
     * @var integer 时间周期内的累计总 token 数。
     */
    public $TotalToken;

    /**
     * @var integer 时间周期内的累计输入 token 数。
     */
    public $InputTotalToken;

    /**
     * @var integer 时间周期内的累计输出 token 数。
     */
    public $OutputTotalToken;

    /**
     * @param integer $TotalToken 时间周期内的累计总 token 数。
     * @param integer $InputTotalToken 时间周期内的累计输入 token 数。
     * @param integer $OutputTotalToken 时间周期内的累计输出 token 数。
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
