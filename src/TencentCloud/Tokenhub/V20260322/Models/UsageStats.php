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
 * 时间周期内的统计聚合值，按 MetricKeys 实际返回取值，参见响应顶层 `MetricKeys` 字段。
 *
 * @method integer getTotalToken() 获取<p>[tokens / apikey_usage 族] 时间周期内的累计总 token 数。</p>
 * @method void setTotalToken(integer $TotalToken) 设置<p>[tokens / apikey_usage 族] 时间周期内的累计总 token 数。</p>
 * @method integer getInputTotalToken() 获取<p>[tokens / apikey_usage 族] 时间周期内的累计输入 token 数。</p>
 * @method void setInputTotalToken(integer $InputTotalToken) 设置<p>[tokens / apikey_usage 族] 时间周期内的累计输入 token 数。</p>
 * @method integer getOutputTotalToken() 获取<p>[tokens / apikey_usage 族] 时间周期内的累计输出 token 数。</p>
 * @method void setOutputTotalToken(integer $OutputTotalToken) 设置<p>[tokens / apikey_usage 族] 时间周期内的累计输出 token 数。</p>
 * @method integer getCacheTotalToken() 获取<p>[tokens / apikey_usage 族] 时间周期内的累计读缓存 token 数（命中缓存部分）注意：CacheTotalToken 是 InputTotalToken 的子集（已包含在内）。</p>
 * @method void setCacheTotalToken(integer $CacheTotalToken) 设置<p>[tokens / apikey_usage 族] 时间周期内的累计读缓存 token 数（命中缓存部分）注意：CacheTotalToken 是 InputTotalToken 的子集（已包含在内）。</p>
 * @method integer getSearchRequestCount() 获取<p>[search 族] 时间周期内的累计联网搜索请求数</p>
 * @method void setSearchRequestCount(integer $SearchRequestCount) 设置<p>[search 族] 时间周期内的累计联网搜索请求数</p>
 * @method integer getSearchCount() 获取<p>[search 族] 时间周期内的累计搜索引擎调用次数</p>
 * @method void setSearchCount(integer $SearchCount) 设置<p>[search 族] 时间周期内的累计搜索引擎调用次数</p>
 * @method integer getRequestCount() 获取<p>[apikey_usage 族] 时间周期内的累计请求次数</p>
 * @method void setRequestCount(integer $RequestCount) 设置<p>[apikey_usage 族] 时间周期内的累计请求次数</p>
 * @method integer getRequestFailCount() 获取<p>[apikey_usage 族] 时间周期内的累计请求失败次数</p>
 * @method void setRequestFailCount(integer $RequestFailCount) 设置<p>[apikey_usage 族] 时间周期内的累计请求失败次数</p>
 */
class UsageStats extends AbstractModel
{
    /**
     * @var integer <p>[tokens / apikey_usage 族] 时间周期内的累计总 token 数。</p>
     */
    public $TotalToken;

    /**
     * @var integer <p>[tokens / apikey_usage 族] 时间周期内的累计输入 token 数。</p>
     */
    public $InputTotalToken;

    /**
     * @var integer <p>[tokens / apikey_usage 族] 时间周期内的累计输出 token 数。</p>
     */
    public $OutputTotalToken;

    /**
     * @var integer <p>[tokens / apikey_usage 族] 时间周期内的累计读缓存 token 数（命中缓存部分）注意：CacheTotalToken 是 InputTotalToken 的子集（已包含在内）。</p>
     */
    public $CacheTotalToken;

    /**
     * @var integer <p>[search 族] 时间周期内的累计联网搜索请求数</p>
     */
    public $SearchRequestCount;

    /**
     * @var integer <p>[search 族] 时间周期内的累计搜索引擎调用次数</p>
     */
    public $SearchCount;

    /**
     * @var integer <p>[apikey_usage 族] 时间周期内的累计请求次数</p>
     */
    public $RequestCount;

    /**
     * @var integer <p>[apikey_usage 族] 时间周期内的累计请求失败次数</p>
     */
    public $RequestFailCount;

    /**
     * @param integer $TotalToken <p>[tokens / apikey_usage 族] 时间周期内的累计总 token 数。</p>
     * @param integer $InputTotalToken <p>[tokens / apikey_usage 族] 时间周期内的累计输入 token 数。</p>
     * @param integer $OutputTotalToken <p>[tokens / apikey_usage 族] 时间周期内的累计输出 token 数。</p>
     * @param integer $CacheTotalToken <p>[tokens / apikey_usage 族] 时间周期内的累计读缓存 token 数（命中缓存部分）注意：CacheTotalToken 是 InputTotalToken 的子集（已包含在内）。</p>
     * @param integer $SearchRequestCount <p>[search 族] 时间周期内的累计联网搜索请求数</p>
     * @param integer $SearchCount <p>[search 族] 时间周期内的累计搜索引擎调用次数</p>
     * @param integer $RequestCount <p>[apikey_usage 族] 时间周期内的累计请求次数</p>
     * @param integer $RequestFailCount <p>[apikey_usage 族] 时间周期内的累计请求失败次数</p>
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

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("RequestFailCount",$param) and $param["RequestFailCount"] !== null) {
            $this->RequestFailCount = $param["RequestFailCount"];
        }
    }
}
