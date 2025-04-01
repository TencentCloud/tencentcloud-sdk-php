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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 增量迁移回源参数。
 *
 * @method IncrementalMigrationHttpHeaderInfo getHttpHeaderInfo() 获取HTTP 头部透传信息。
 * @method void setHttpHeaderInfo(IncrementalMigrationHttpHeaderInfo $HttpHeaderInfo) 设置HTTP 头部透传信息。
 * @method string getProtocol() 获取回源协议。取值有：
<li>HTTP：强制 HTTP；</li>
<li>HTTPS：强制 HTTPS；</li>
<li>FOLLOW：跟随请求协议。</li>若不填，默认取值 `FOLLOW`。
 * @method void setProtocol(string $Protocol) 设置回源协议。取值有：
<li>HTTP：强制 HTTP；</li>
<li>HTTPS：强制 HTTPS；</li>
<li>FOLLOW：跟随请求协议。</li>若不填，默认取值 `FOLLOW`。
 * @method string getQueryStringFollowMode() 获取请求参数透传模式。取值有：
<li>FOLLOW：全部透传；</li>
<li>IGNORE：忽略，全部不透传。</li> 默认取值 `FOLLOW`。
 * @method void setQueryStringFollowMode(string $QueryStringFollowMode) 设置请求参数透传模式。取值有：
<li>FOLLOW：全部透传；</li>
<li>IGNORE：忽略，全部不透传。</li> 默认取值 `FOLLOW`。
 * @method integer getHttpRedirectCode() 获取重定向的 HTTP Code，目前仅支持 `301`，`302` 和 `307`。默认取值 `302`。
 * @method void setHttpRedirectCode(integer $HttpRedirectCode) 设置重定向的 HTTP Code，目前仅支持 `301`，`302` 和 `307`。默认取值 `302`。
 * @method string getOriginRedirectionFollowMode() 获取源站重定向跟随模式。取值有：
<li>FOLLOW：跟随源站重定向；</li>
<li>IGNORE：忽略源站重定向。</li> 默认取值 `FOLLOW` 跟随源站重定向，即源站返回 `3xx` 时，会默认跟随至对应源站拉取数据。
 * @method void setOriginRedirectionFollowMode(string $OriginRedirectionFollowMode) 设置源站重定向跟随模式。取值有：
<li>FOLLOW：跟随源站重定向；</li>
<li>IGNORE：忽略源站重定向。</li> 默认取值 `FOLLOW` 跟随源站重定向，即源站返回 `3xx` 时，会默认跟随至对应源站拉取数据。
 */
class IncrementalMigrationHttpOriginParameter extends AbstractModel
{
    /**
     * @var IncrementalMigrationHttpHeaderInfo HTTP 头部透传信息。
     */
    public $HttpHeaderInfo;

    /**
     * @var string 回源协议。取值有：
<li>HTTP：强制 HTTP；</li>
<li>HTTPS：强制 HTTPS；</li>
<li>FOLLOW：跟随请求协议。</li>若不填，默认取值 `FOLLOW`。
     */
    public $Protocol;

    /**
     * @var string 请求参数透传模式。取值有：
<li>FOLLOW：全部透传；</li>
<li>IGNORE：忽略，全部不透传。</li> 默认取值 `FOLLOW`。
     */
    public $QueryStringFollowMode;

    /**
     * @var integer 重定向的 HTTP Code，目前仅支持 `301`，`302` 和 `307`。默认取值 `302`。
     */
    public $HttpRedirectCode;

    /**
     * @var string 源站重定向跟随模式。取值有：
<li>FOLLOW：跟随源站重定向；</li>
<li>IGNORE：忽略源站重定向。</li> 默认取值 `FOLLOW` 跟随源站重定向，即源站返回 `3xx` 时，会默认跟随至对应源站拉取数据。
     */
    public $OriginRedirectionFollowMode;

    /**
     * @param IncrementalMigrationHttpHeaderInfo $HttpHeaderInfo HTTP 头部透传信息。
     * @param string $Protocol 回源协议。取值有：
<li>HTTP：强制 HTTP；</li>
<li>HTTPS：强制 HTTPS；</li>
<li>FOLLOW：跟随请求协议。</li>若不填，默认取值 `FOLLOW`。
     * @param string $QueryStringFollowMode 请求参数透传模式。取值有：
<li>FOLLOW：全部透传；</li>
<li>IGNORE：忽略，全部不透传。</li> 默认取值 `FOLLOW`。
     * @param integer $HttpRedirectCode 重定向的 HTTP Code，目前仅支持 `301`，`302` 和 `307`。默认取值 `302`。
     * @param string $OriginRedirectionFollowMode 源站重定向跟随模式。取值有：
<li>FOLLOW：跟随源站重定向；</li>
<li>IGNORE：忽略源站重定向。</li> 默认取值 `FOLLOW` 跟随源站重定向，即源站返回 `3xx` 时，会默认跟随至对应源站拉取数据。
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
        if (array_key_exists("HttpHeaderInfo",$param) and $param["HttpHeaderInfo"] !== null) {
            $this->HttpHeaderInfo = new IncrementalMigrationHttpHeaderInfo();
            $this->HttpHeaderInfo->deserialize($param["HttpHeaderInfo"]);
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("QueryStringFollowMode",$param) and $param["QueryStringFollowMode"] !== null) {
            $this->QueryStringFollowMode = $param["QueryStringFollowMode"];
        }

        if (array_key_exists("HttpRedirectCode",$param) and $param["HttpRedirectCode"] !== null) {
            $this->HttpRedirectCode = $param["HttpRedirectCode"];
        }

        if (array_key_exists("OriginRedirectionFollowMode",$param) and $param["OriginRedirectionFollowMode"] !== null) {
            $this->OriginRedirectionFollowMode = $param["OriginRedirectionFollowMode"];
        }
    }
}
