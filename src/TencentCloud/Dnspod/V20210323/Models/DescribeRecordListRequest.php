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
 * DescribeRecordList请求参数结构体
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method integer getDomainId() 获取<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId</p>
 * @method string getSubdomain() 获取<p>解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录</p>
 * @method void setSubdomain(string $Subdomain) 设置<p>解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录</p>
 * @method string getRecordType() 获取<p>获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等</p>
 * @method void setRecordType(string $RecordType) 设置<p>获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等</p>
 * @method string getRecordLine() 获取<p>获取某条线路名称的解析记录。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
 * @method void setRecordLine(string $RecordLine) 设置<p>获取某条线路名称的解析记录。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
 * @method string getRecordLineId() 获取<p>获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
 * @method void setRecordLineId(string $RecordLineId) 设置<p>获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
 * @method integer getGroupId() 获取<p>获取某个分组下的解析记录时，传这个分组Id。可通过DescribeRecordGroupList接口获取所有分组</p>
 * @method void setGroupId(integer $GroupId) 设置<p>获取某个分组下的解析记录时，传这个分组Id。可通过DescribeRecordGroupList接口获取所有分组</p>
 * @method string getKeyword() 获取<p>通过关键字搜索解析记录，当前支持搜索主机头和记录值</p>
 * @method void setKeyword(string $Keyword) 设置<p>通过关键字搜索解析记录，当前支持搜索主机头和记录值</p>
 * @method string getSortField() 获取<p>排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。</p>
 * @method void setSortField(string $SortField) 设置<p>排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。</p>
 * @method string getSortType() 获取<p>排序方式，正序：ASC，逆序：DESC。默认值为ASC。</p>
 * @method void setSortType(string $SortType) 设置<p>排序方式，正序：ASC，逆序：DESC。默认值为ASC。</p>
 * @method integer getOffset() 获取<p>偏移量，默认值为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认值为0。</p>
 * @method integer getLimit() 获取<p>限制数量，当前Limit最大支持3000。默认值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数量，当前Limit最大支持3000。默认值为100。</p>
 * @method string getErrorOnEmpty() 获取<p>查询不到数据时是否报错</p>枚举值：<ul><li> yes： 报错</li><li> no： 不报错，返回空列表</li></ul>默认值：yes
 * @method void setErrorOnEmpty(string $ErrorOnEmpty) 设置<p>查询不到数据时是否报错</p>枚举值：<ul><li> yes： 报错</li><li> no： 不报错，返回空列表</li></ul>默认值：yes
 */
class DescribeRecordListRequest extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var integer <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId</p>
     */
    public $DomainId;

    /**
     * @var string <p>解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录</p>
     */
    public $Subdomain;

    /**
     * @var string <p>获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等</p>
     */
    public $RecordType;

    /**
     * @var string <p>获取某条线路名称的解析记录。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
     */
    public $RecordLine;

    /**
     * @var string <p>获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
     */
    public $RecordLineId;

    /**
     * @var integer <p>获取某个分组下的解析记录时，传这个分组Id。可通过DescribeRecordGroupList接口获取所有分组</p>
     */
    public $GroupId;

    /**
     * @var string <p>通过关键字搜索解析记录，当前支持搜索主机头和记录值</p>
     */
    public $Keyword;

    /**
     * @var string <p>排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。</p>
     */
    public $SortField;

    /**
     * @var string <p>排序方式，正序：ASC，逆序：DESC。默认值为ASC。</p>
     */
    public $SortType;

    /**
     * @var integer <p>偏移量，默认值为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数量，当前Limit最大支持3000。默认值为100。</p>
     */
    public $Limit;

    /**
     * @var string <p>查询不到数据时是否报错</p>枚举值：<ul><li> yes： 报错</li><li> no： 不报错，返回空列表</li></ul>默认值：yes
     */
    public $ErrorOnEmpty;

    /**
     * @param string $Domain <p>域名</p>
     * @param integer $DomainId <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。可以通过接口DescribeDomainList查到所有的Domain以及DomainId</p>
     * @param string $Subdomain <p>解析记录的主机头，如果传了此参数，则只会返回此主机头对应的解析记录</p>
     * @param string $RecordType <p>获取某种类型的解析记录，如 A，CNAME，NS，AAAA，显性URL，隐性URL，CAA，SPF等</p>
     * @param string $RecordLine <p>获取某条线路名称的解析记录。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
     * @param string $RecordLineId <p>获取某个线路Id对应的解析记录，如果传RecordLineId，系统会忽略RecordLine参数。可以通过接口DescribeRecordLineList查看当前域名允许的线路信息</p>
     * @param integer $GroupId <p>获取某个分组下的解析记录时，传这个分组Id。可通过DescribeRecordGroupList接口获取所有分组</p>
     * @param string $Keyword <p>通过关键字搜索解析记录，当前支持搜索主机头和记录值</p>
     * @param string $SortField <p>排序字段，支持 name,line,type,value,weight,mx,ttl,updated_on 几个字段。</p>
     * @param string $SortType <p>排序方式，正序：ASC，逆序：DESC。默认值为ASC。</p>
     * @param integer $Offset <p>偏移量，默认值为0。</p>
     * @param integer $Limit <p>限制数量，当前Limit最大支持3000。默认值为100。</p>
     * @param string $ErrorOnEmpty <p>查询不到数据时是否报错</p>枚举值：<ul><li> yes： 报错</li><li> no： 不报错，返回空列表</li></ul>默认值：yes
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Subdomain",$param) and $param["Subdomain"] !== null) {
            $this->Subdomain = $param["Subdomain"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("RecordLineId",$param) and $param["RecordLineId"] !== null) {
            $this->RecordLineId = $param["RecordLineId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ErrorOnEmpty",$param) and $param["ErrorOnEmpty"] !== null) {
            $this->ErrorOnEmpty = $param["ErrorOnEmpty"];
        }
    }
}
