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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存键配置。
 *
 * @method string getFullURLCache() 获取是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
 * @method void setFullURLCache(string $FullURLCache) 设置是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
 * @method string getIgnoreCase() 获取是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
 * @method void setIgnoreCase(string $IgnoreCase) 设置是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
 * @method CacheKeyQueryString getQueryString() 获取查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
 * @method void setQueryString(CacheKeyQueryString $QueryString) 设置查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
 */
class CacheKeyConfigParameters extends AbstractModel
{
    /**
     * @var string 是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
     */
    public $FullURLCache;

    /**
     * @var string 是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
     */
    public $IgnoreCase;

    /**
     * @var CacheKeyQueryString 查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
     */
    public $QueryString;

    /**
     * @param string $FullURLCache 是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
     * @param string $IgnoreCase 是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
     * @param CacheKeyQueryString $QueryString 查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
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
        if (array_key_exists("FullURLCache",$param) and $param["FullURLCache"] !== null) {
            $this->FullURLCache = $param["FullURLCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new CacheKeyQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
