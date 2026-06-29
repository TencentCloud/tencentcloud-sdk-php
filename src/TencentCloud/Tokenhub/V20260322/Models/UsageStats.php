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
 * 时间周期内的统计聚合值（按 metric key 索引）。声明 tokens / search 两族字段都在本 schema 中，按 MetricKeys 实际返回取值，参见响应顶层 `MetricKeys` 字段。
 *
 * @method integer getTotalToken() 获取<p>[tokens 族] 时间周期内的累计总 token 数。</p>
 * @method void setTotalToken(integer $TotalToken) 设置<p>[tokens 族] 时间周期内的累计总 token 数。</p>
 * @method integer getInputTotalToken() 获取<p>[tokens 族] 时间周期内的累计输入 token 数。</p>
 * @method void setInputTotalToken(integer $InputTotalToken) 设置<p>[tokens 族] 时间周期内的累计输入 token 数。</p>
 * @method integer getOutputTotalToken() 获取<p>[tokens 族] 时间周期内的累计输出 token 数。</p>
 * @method void setOutputTotalToken(integer $OutputTotalToken) 设置<p>[tokens 族] 时间周期内的累计输出 token 数。</p>
 * @method integer getCacheTotalToken() 获取<p>[tokens 族] 时间周期内的累计读缓存 token 数（命中缓存部分）</p>
 * @method void setCacheTotalToken(integer $CacheTotalToken) 设置<p>[tokens 族] 时间周期内的累计读缓存 token 数（命中缓存部分）</p>
 * @method integer getSearchRequestCount() 获取<p>[search 族] 整段累计联网搜索请求数</p>
 * @method void setSearchRequestCount(integer $SearchRequestCount) 设置<p>[search 族] 整段累计联网搜索请求数</p>
 * @method integer getSearchCount() 获取<p>[search 族] 整段累计搜索引擎调用次数</p>
 * @method void setSearchCount(integer $SearchCount) 设置<p>[search 族] 整段累计搜索引擎调用次数</p>
 */
class UsageStats extends AbstractModel
{
    /**
     * @var integer <p>[tokens 族] 时间周期内的累计总 token 数。</p>
     */
    public $TotalToken;

    /**
     * @var integer <p>[tokens 族] 时间周期内的累计输入 token 数。</p>
     */
    public $InputTotalToken;

    /**
     * @var integer <p>[tokens 族] 时间周期内的累计输出 token 数。</p>
     */
    public $OutputTotalToken;

    /**
     * @var integer <p>[tokens 族] 时间周期内的累计读缓存 token 数（命中缓存部分）</p>
     */
    public $CacheTotalToken;

    /**
     * @var integer <p>[search 族] 整段累计联网搜索请求数</p>
     */
    public $SearchRequestCount;

    /**
     * @var integer <p>[search 族] 整段累计搜索引擎调用次数</p>
     */
    public $SearchCount;

    /**
     * @param integer $TotalToken <p>[tokens 族] 时间周期内的累计总 token 数。</p>
     * @param integer $InputTotalToken <p>[tokens 族] 时间周期内的累计输入 token 数。</p>
     * @param integer $OutputTotalToken <p>[tokens 族] 时间周期内的累计输出 token 数。</p>
     * @param integer $CacheTotalToken <p>[tokens 族] 时间周期内的累计读缓存 token 数（命中缓存部分）</p>
     * @param integer $SearchRequestCount <p>[search 族] 整段累计联网搜索请求数</p>
     * @param integer $SearchCount <p>[search 族] 整段累计搜索引擎调用次数</p>
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

        if (array_key_exists("CacheTotalToken",$param) and $param["CacheTotalToken"] !== null) {
            $this->CacheTotalToken = $param["CacheTotalToken"];
        }

        if (array_key_exists("SearchRequestCount",$param) and $param["SearchRequestCount"] !== null) {
            $this->SearchRequestCount = $param["SearchRequestCount"];
        }

        if (array_key_exists("SearchCount",$param) and $param["SearchCount"] !== null) {
            $this->SearchCount = $param["SearchCount"];
        }
    }
}
