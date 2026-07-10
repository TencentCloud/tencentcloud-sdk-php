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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDynamicDNS请求参数结构体
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method integer getRecordId() 获取<p>记录ID。 可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId</p>
 * @method void setRecordId(integer $RecordId) 设置<p>记录ID。 可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId</p>
 * @method string getRecordLine() 获取<p>记录线路，中文，比如：默认。</p>
 * @method void setRecordLine(string $RecordLine) 设置<p>记录线路，中文，比如：默认。</p>
 * @method integer getDomainId() 获取<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method string getSubDomain() 获取<p>主机记录，如 www，如果不传，默认为 @。</p>
 * @method void setSubDomain(string $SubDomain) 设置<p>主机记录，如 www，如果不传，默认为 @。</p>
 * @method string getRecordLineId() 获取<p>线路的 ID，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
 * @method void setRecordLineId(string $RecordLineId) 设置<p>线路的 ID，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
 * @method string getValue() 获取<p>IP 地址，支持 IPv4、IPv6，例如 119.29.29.29 或者 2402:4e00::</p>
 * @method void setValue(string $Value) 设置<p>IP 地址，支持 IPv4、IPv6，例如 119.29.29.29 或者 2402:4e00::</p>
 * @method integer getTtl() 获取<p>TTL值，如果不传，默认为域名的TTL值。</p>
 * @method void setTtl(integer $Ttl) 设置<p>TTL值，如果不传，默认为域名的TTL值。</p>
 * @method integer getTTL() 获取<p>TTL值，如果不传，默认为域名的TTL值。</p><p>新增规范参数，同时传递TTL和Ttl参数时，后端优先使用TTL参数</p>
 * @method void setTTL(integer $TTL) 设置<p>TTL值，如果不传，默认为域名的TTL值。</p><p>新增规范参数，同时传递TTL和Ttl参数时，后端优先使用TTL参数</p>
 */
class ModifyDynamicDNSRequest extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var integer <p>记录ID。 可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId</p>
     */
    public $RecordId;

    /**
     * @var string <p>记录线路，中文，比如：默认。</p>
     */
    public $RecordLine;

    /**
     * @var integer <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     */
    public $DomainId;

    /**
     * @var string <p>主机记录，如 www，如果不传，默认为 @。</p>
     */
    public $SubDomain;

    /**
     * @var string <p>线路的 ID，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
     */
    public $RecordLineId;

    /**
     * @var string <p>IP 地址，支持 IPv4、IPv6，例如 119.29.29.29 或者 2402:4e00::</p>
     */
    public $Value;

    /**
     * @var integer <p>TTL值，如果不传，默认为域名的TTL值。</p>
     * @deprecated
     */
    public $Ttl;

    /**
     * @var integer <p>TTL值，如果不传，默认为域名的TTL值。</p><p>新增规范参数，同时传递TTL和Ttl参数时，后端优先使用TTL参数</p>
     */
    public $TTL;

    /**
     * @param string $Domain <p>域名</p>
     * @param integer $RecordId <p>记录ID。 可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId</p>
     * @param string $RecordLine <p>记录线路，中文，比如：默认。</p>
     * @param integer $DomainId <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     * @param string $SubDomain <p>主机记录，如 www，如果不传，默认为 @。</p>
     * @param string $RecordLineId <p>线路的 ID，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
     * @param string $Value <p>IP 地址，支持 IPv4、IPv6，例如 119.29.29.29 或者 2402:4e00::</p>
     * @param integer $Ttl <p>TTL值，如果不传，默认为域名的TTL值。</p>
     * @param integer $TTL <p>TTL值，如果不传，默认为域名的TTL值。</p><p>新增规范参数，同时传递TTL和Ttl参数时，后端优先使用TTL参数</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }
    }
}
