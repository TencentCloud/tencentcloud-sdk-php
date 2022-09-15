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
 * 缓存键配置
 *
 * @method string getFullUrlCache() 获取是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullUrlCache(string $FullUrlCache) 设置是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIgnoreCase() 获取是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreCase(string $IgnoreCase) 设置是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QueryString getQueryString() 获取CacheKey中包含请求参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(QueryString $QueryString) 设置CacheKey中包含请求参数。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string 是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullUrlCache;

    /**
     * @var string 是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreCase;

    /**
     * @var QueryString CacheKey中包含请求参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @param string $FullUrlCache 是否开启全路径缓存，取值有：
<li>on：开启全路径缓存（即关闭参数忽略）；</li>
<li>off：关闭全路径缓存（即开启参数忽略）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IgnoreCase 是否忽略大小写缓存，取值有：
<li>on：忽略；</li>
<li>off：不忽略。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QueryString $QueryString CacheKey中包含请求参数。
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
        if (array_key_exists("FullUrlCache",$param) and $param["FullUrlCache"] !== null) {
            $this->FullUrlCache = $param["FullUrlCache"];
        }

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new QueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }
    }
}
