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
 * CreateRecord请求参数结构体
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getRecordType() 获取<p>记录类型，可通过接口DescribeRecordType获得，大写英文，比如：A 。</p>
 * @method void setRecordType(string $RecordType) 设置<p>记录类型，可通过接口DescribeRecordType获得，大写英文，比如：A 。</p>
 * @method string getRecordLine() 获取<p>记录线路，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，中文，比如：默认。</p>
 * @method void setRecordLine(string $RecordLine) 设置<p>记录线路，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，中文，比如：默认。</p>
 * @method string getValue() 获取<p>记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。</p>
 * @method void setValue(string $Value) 设置<p>记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。</p>
 * @method integer getDomainId() 获取<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method void setDomainId(integer $DomainId) 设置<p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
 * @method string getSubDomain() 获取<p>主机记录，如 www，如果不传，默认为 @。</p>
 * @method void setSubDomain(string $SubDomain) 设置<p>主机记录，如 www，如果不传，默认为 @。</p>
 * @method string getRecordLineId() 获取<p>线路的 ID，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
 * @method void setRecordLineId(string $RecordLineId) 设置<p>线路的 ID，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
 * @method integer getMX() 获取<p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p><p>取值范围：[0, 65535]</p>
 * @method void setMX(integer $MX) 设置<p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p><p>取值范围：[0, 65535]</p>
 * @method integer getTTL() 获取<p>TTL，范围1-604800，不同套餐域名最小值不同。</p>
 * @method void setTTL(integer $TTL) 设置<p>TTL，范围1-604800，不同套餐域名最小值不同。</p>
 * @method integer getWeight() 获取<p>权重信息，0到100的整数。0 表示关闭，不传该参数，表示不设置权重信息。</p>
 * @method void setWeight(integer $Weight) 设置<p>权重信息，0到100的整数。0 表示关闭，不传该参数，表示不设置权重信息。</p>
 * @method string getStatus() 获取<p>记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。</p>
 * @method void setStatus(string $Status) 设置<p>记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。</p>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getDnssecConflictMode() 获取<p>开启DNSSEC时，强制添加CNAME/URL记录</p>
 * @method void setDnssecConflictMode(string $DnssecConflictMode) 设置<p>开启DNSSEC时，强制添加CNAME/URL记录</p>
 * @method integer getGroupId() 获取<p>记录分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/83225">DescribeRecordGroupList</a></p>
 * @method void setGroupId(integer $GroupId) 设置<p>记录分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/83225">DescribeRecordGroupList</a></p>
 */
class CreateRecordRequest extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>记录类型，可通过接口DescribeRecordType获得，大写英文，比如：A 。</p>
     */
    public $RecordType;

    /**
     * @var string <p>记录线路，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，中文，比如：默认。</p>
     */
    public $RecordLine;

    /**
     * @var string <p>记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。</p>
     */
    public $Value;

    /**
     * @var integer <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     */
    public $DomainId;

    /**
     * @var string <p>主机记录，如 www，如果不传，默认为 @。</p>
     */
    public $SubDomain;

    /**
     * @var string <p>线路的 ID，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
     */
    public $RecordLineId;

    /**
     * @var integer <p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p><p>取值范围：[0, 65535]</p>
     */
    public $MX;

    /**
     * @var integer <p>TTL，范围1-604800，不同套餐域名最小值不同。</p>
     */
    public $TTL;

    /**
     * @var integer <p>权重信息，0到100的整数。0 表示关闭，不传该参数，表示不设置权重信息。</p>
     */
    public $Weight;

    /**
     * @var string <p>记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。</p>
     */
    public $Status;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>开启DNSSEC时，强制添加CNAME/URL记录</p>
     */
    public $DnssecConflictMode;

    /**
     * @var integer <p>记录分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/83225">DescribeRecordGroupList</a></p>
     */
    public $GroupId;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $RecordType <p>记录类型，可通过接口DescribeRecordType获得，大写英文，比如：A 。</p>
     * @param string $RecordLine <p>记录线路，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，中文，比如：默认。</p>
     * @param string $Value <p>记录值，如 IP : 200.200.200.200， CNAME : cname.dnspod.com.， MX : mail.dnspod.com.。</p>
     * @param integer $DomainId <p>域名 ID 。参数 DomainId 优先级比参数 Domain 高，如果传递参数 DomainId 将忽略参数 Domain 。</p>
     * @param string $SubDomain <p>主机记录，如 www，如果不传，默认为 @。</p>
     * @param string $RecordLineId <p>线路的 ID，可以通过接口DescribeRecordLineList查看当前域名允许的线路信息，英文字符串，比如：10=1。参数RecordLineId优先级高于RecordLine，如果同时传递二者，优先使用RecordLineId参数。</p>
     * @param integer $MX <p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p><p>取值范围：[0, 65535]</p>
     * @param integer $TTL <p>TTL，范围1-604800，不同套餐域名最小值不同。</p>
     * @param integer $Weight <p>权重信息，0到100的整数。0 表示关闭，不传该参数，表示不设置权重信息。</p>
     * @param string $Status <p>记录初始状态，取值范围为 ENABLE 和 DISABLE 。默认为 ENABLE ，如果传入 DISABLE，解析不会生效，也不会验证负载均衡的限制。</p>
     * @param string $Remark <p>备注</p>
     * @param string $DnssecConflictMode <p>开启DNSSEC时，强制添加CNAME/URL记录</p>
     * @param integer $GroupId <p>记录分组 Id。可以通过接口 DescribeRecordGroupList 接口 GroupId 字段获取。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/83225">DescribeRecordGroupList</a></p>
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

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }

        if (array_key_exists("RecordLine",$param) and $param["RecordLine"] !== null) {
            $this->RecordLine = $param["RecordLine"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
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

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }

        if (array_key_exists("TTL",$param) and $param["TTL"] !== null) {
            $this->TTL = $param["TTL"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DnssecConflictMode",$param) and $param["DnssecConflictMode"] !== null) {
            $this->DnssecConflictMode = $param["DnssecConflictMode"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
