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
 * 自定义 Cache Key 配置参数。该配置参数的 FullURLCache 和 QueryString 采用组合表达，具体示例可以参考：
- 查询字符串全部保留。开启忽略大小写。
```
{
  "CacheKey": {
    "FullURLCache": "on",
    "QueryString": {
      "Switch": "off"
    },
    "IgnoreCase": "on"
  }
}
```
- 查询字符串全部忽略。开启忽略大小写。
```
{
  "CacheKey": {
    "FullURLCache": "off",
    "QueryString": {
      "Switch": "off"
    },
    "IgnoreCase": "on"
  }
}
```
- 查询字符串保留指定参数。关闭忽略大小写。
```
{
  "CacheKey": {
    "FullURLCache": "off",
    "QueryString": {
        "Switch": "on",
        "Action": "includeCustom",
        "Values": ["name1","name2","name3"]
    },
    "IgnoreCase": "off"
  }
}
```
- 查询字符串忽略指定参数。关闭忽略大小写。
```
{
  "CacheKey": {
    "FullURLCache": "off",
    "QueryString": {
        "Switch": "on",
        "Action": "excludeCustom",
        "Values": ["name1","name2","name3"]
    },
    "IgnoreCase": "off"
  }
}
```
 *
 * @method string getFullURLCache() 获取查询字符串全部保留开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。此字段和 QueryString.Switch 必须同时设置，但不能同为 on。
 * @method void setFullURLCache(string $FullURLCache) 设置查询字符串全部保留开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。此字段和 QueryString.Switch 必须同时设置，但不能同为 on。
 * @method CacheKeyQueryString getQueryString() 获取查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(CacheKeyQueryString $QueryString) 设置查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreCase() 获取忽略大小写开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
 * @method void setIgnoreCase(string $IgnoreCase) 设置忽略大小写开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
 * @method CacheKeyHeader getHeader() 获取HTTP 请求头配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeader(CacheKeyHeader $Header) 设置HTTP 请求头配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheme() 获取请求协议开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
 * @method void setScheme(string $Scheme) 设置请求协议开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
 * @method CacheKeyCookie getCookie() 获取Cookie 配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCookie(CacheKeyCookie $Cookie) 设置Cookie 配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheKeyParameters extends AbstractModel
{
    /**
     * @var string 查询字符串全部保留开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。此字段和 QueryString.Switch 必须同时设置，但不能同为 on。
     */
    public $FullURLCache;

    /**
     * @var CacheKeyQueryString 查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @var string 忽略大小写开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
     */
    public $IgnoreCase;

    /**
     * @var CacheKeyHeader HTTP 请求头配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Header;

    /**
     * @var string 请求协议开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
     */
    public $Scheme;

    /**
     * @var CacheKeyCookie Cookie 配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cookie;

    /**
     * @param string $FullURLCache 查询字符串全部保留开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。此字段和 QueryString.Switch 必须同时设置，但不能同为 on。
     * @param CacheKeyQueryString $QueryString 查询字符串保留配置参数。此字段和 FullURLCache 必须同时设置，但不能同为 on。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreCase 忽略大小写开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
     * @param CacheKeyHeader $Header HTTP 请求头配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheme 请求协议开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>注意：FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
     * @param CacheKeyCookie $Cookie Cookie 配置参数。FullURLCache、IgnoreCase、Header、Scheme、Cookie 至少设置一个配置。
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
        if (array_key_exists("FullURLCache",$param) and $param["FullURLCache"] !== null) {
            $this->FullURLCache = $param["FullURLCache"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new CacheKeyQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new CacheKeyHeader();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new CacheKeyCookie();
            $this->Cookie->deserialize($param["Cookie"]);
        }
    }
}
