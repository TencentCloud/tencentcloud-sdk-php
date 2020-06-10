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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存键配置（过滤参数配置）
 *
 * @method string getFullUrlCache() 获取是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
 * @method void setFullUrlCache(string $FullUrlCache) 设置是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
 * @method QueryStringKey getQueryString() 获取是否使用请求参数作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(QueryStringKey $QueryString) 设置是否使用请求参数作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method HeaderKey getHeader() 获取是否使用请求头部作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeader(HeaderKey $Header) 设置是否使用请求头部作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method CookieKey getCookie() 获取是否使用Cookie作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCookie(CookieKey $Cookie) 设置是否使用Cookie作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method SchemeKey getScheme() 获取是否使用请求协议作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(SchemeKey $Scheme) 设置是否使用请求协议作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheTagKey getCacheTag() 获取是否使用自定义字符串作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheTag(CacheTagKey $CacheTag) 设置是否使用自定义字符串作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheKey extends AbstractModel
{
    /**
     * @var string 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
     */
    public $FullUrlCache;

    /**
     * @var QueryStringKey 是否使用请求参数作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @var HeaderKey 是否使用请求头部作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Header;

    /**
     * @var CookieKey 是否使用Cookie作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cookie;

    /**
     * @var SchemeKey 是否使用请求协议作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @var CacheTagKey 是否使用自定义字符串作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheTag;

    /**
     * @param string $FullUrlCache 是否开启全路径缓存
on：开启全路径缓存（即关闭参数过滤）
off：关闭全路径缓存（即开启参数过滤）
     * @param QueryStringKey $QueryString 是否使用请求参数作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param HeaderKey $Header 是否使用请求头部作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param CookieKey $Cookie 是否使用Cookie作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param SchemeKey $Scheme 是否使用请求协议作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheTagKey $CacheTag 是否使用自定义字符串作为CacheKey的一部分
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

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new QueryStringKey();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = new HeaderKey();
            $this->Header->deserialize($param["Header"]);
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new CookieKey();
            $this->Cookie->deserialize($param["Cookie"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = new SchemeKey();
            $this->Scheme->deserialize($param["Scheme"]);
        }

        if (array_key_exists("CacheTag",$param) and $param["CacheTag"] !== null) {
            $this->CacheTag = new CacheTagKey();
            $this->CacheTag->deserialize($param["CacheTag"]);
        }
    }
}
