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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwRules请求参数结构体
 *
 * @method string getRuleType() 获取<p>规则域。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组；intrusion_prevention 入侵防御。RuleType=intrusion_prevention 时还必须传 ListType。</p>
 * @method void setRuleType(string $RuleType) 设置<p>规则域。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组；intrusion_prevention 入侵防御。RuleType=intrusion_prevention 时还必须传 ListType。</p>
 * @method string getListType() 获取<p>入侵防御列表类型。仅 RuleType=intrusion_prevention 时使用并必填。blocklist 表示封禁列表，whitelist 表示白名单策略，isolate 表示隔离列表。</p>
 * @method void setListType(string $ListType) 设置<p>入侵防御列表类型。仅 RuleType=intrusion_prevention 时使用并必填。blocklist 表示封禁列表，whitelist 表示白名单策略，isolate 表示隔离列表。</p>
 * @method integer getDirection() 获取<p>访问方向过滤。可选。0 表示出站，1 表示入站；不传则不过滤。RuleType=intrusion_prevention 时不支持。</p>
 * @method void setDirection(integer $Direction) 设置<p>访问方向过滤。可选。0 表示出站，1 表示入站；不传则不过滤。RuleType=intrusion_prevention 时不支持。</p>
 * @method integer getRuleAction() 获取<p>规则动作过滤。可选。0 表示观察，1 表示阻断，2 表示放行；不传则不过滤。</p>
 * @method void setRuleAction(integer $RuleAction) 设置<p>规则动作过滤。可选。0 表示观察，1 表示阻断，2 表示放行；不传则不过滤。</p>
 * @method boolean getEnabled() 获取<p>启用状态过滤。可选。默认只返回启用规则；传 false 只查询禁用规则。</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>启用状态过滤。可选。默认只返回启用规则；传 false 只查询禁用规则。</p>
 * @method boolean getIncludeDisabled() 获取<p>是否同时包含启用和禁用规则。可选。true 表示包含两类；不能和 Enabled 同时使用。</p>
 * @method void setIncludeDisabled(boolean $IncludeDisabled) 设置<p>是否同时包含启用和禁用规则。可选。true 表示包含两类；不能和 Enabled 同时使用。</p>
 * @method integer getRuleId() 获取<p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
 * @method void setRuleId(integer $RuleId) 设置<p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
 * @method string getRuleUuid() 获取<p>精确公开规则标识过滤。可选。推荐在用户提供规则标识时使用。</p>
 * @method void setRuleUuid(string $RuleUuid) 设置<p>精确公开规则标识过滤。可选。推荐在用户提供规则标识时使用。</p>
 * @method string getProtocol() 获取<p>协议过滤。可选。例如 TCP、UDP、ICMP、HTTP、HTTPS、ANY；不传则不过滤。</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议过滤。可选。例如 TCP、UDP、ICMP、HTTP、HTTPS、ANY；不传则不过滤。</p>
 * @method string getSrcIp() 获取<p>源地址或源内容关键字过滤。可选，支持模糊匹配。</p>
 * @method void setSrcIp(string $SrcIp) 设置<p>源地址或源内容关键字过滤。可选，支持模糊匹配。</p>
 * @method string getDstIp() 获取<p>目的地址、目的域名或目的内容关键字过滤。可选，支持模糊匹配。</p>
 * @method void setDstIp(string $DstIp) 设置<p>目的地址、目的域名或目的内容关键字过滤。可选，支持模糊匹配。</p>
 * @method string getDescription() 获取<p>规则描述关键字过滤。可选。</p>
 * @method void setDescription(string $Description) 设置<p>规则描述关键字过滤。可选。</p>
 * @method string getKeyword() 获取<p>入侵防御列表关键字搜索。可选，最大 100 字符。blocklist 搜索 ioc/address/comment/rule_source；whitelist 搜索 rule_name/ioc/comment/src_ip/dst_ip；isolate 搜索实例、公网 IP、内网 IP、VPC、地域。</p>
 * @method void setKeyword(string $Keyword) 设置<p>入侵防御列表关键字搜索。可选，最大 100 字符。blocklist 搜索 ioc/address/comment/rule_source；whitelist 搜索 rule_name/ioc/comment/src_ip/dst_ip；isolate 搜索实例、公网 IP、内网 IP、VPC、地域。</p>
 * @method string getInstanceId() 获取<p>精确实例 ID 过滤。仅 RuleType=intrusion_prevention 且 ListType=isolate 时使用；写操作前后核验应使用该参数而不是 Keyword。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>精确实例 ID 过滤。仅 RuleType=intrusion_prevention 且 ListType=isolate 时使用；写操作前后核验应使用该参数而不是 Keyword。</p>
 * @method boolean getExpandNames() 获取<p>是否展开模板、资产组、实例等名称。可选，默认 true；传 false 返回原始标识。</p>
 * @method void setExpandNames(boolean $ExpandNames) 设置<p>是否展开模板、资产组、实例等名称。可选，默认 true；传 false 返回原始标识。</p>
 * @method integer getLimit() 获取<p>单页返回规则数。可选，默认 100，最大 1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>单页返回规则数。可选，默认 100，最大 1000。</p>
 * @method integer getOffset() 获取<p>分页偏移。可选，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移。可选，默认 0。</p>
 */
class DescribeCfwRulesRequest extends AbstractModel
{
    /**
     * @var string <p>规则域。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组；intrusion_prevention 入侵防御。RuleType=intrusion_prevention 时还必须传 ListType。</p>
     */
    public $RuleType;

    /**
     * @var string <p>入侵防御列表类型。仅 RuleType=intrusion_prevention 时使用并必填。blocklist 表示封禁列表，whitelist 表示白名单策略，isolate 表示隔离列表。</p>
     */
    public $ListType;

    /**
     * @var integer <p>访问方向过滤。可选。0 表示出站，1 表示入站；不传则不过滤。RuleType=intrusion_prevention 时不支持。</p>
     */
    public $Direction;

    /**
     * @var integer <p>规则动作过滤。可选。0 表示观察，1 表示阻断，2 表示放行；不传则不过滤。</p>
     */
    public $RuleAction;

    /**
     * @var boolean <p>启用状态过滤。可选。默认只返回启用规则；传 false 只查询禁用规则。</p>
     */
    public $Enabled;

    /**
     * @var boolean <p>是否同时包含启用和禁用规则。可选。true 表示包含两类；不能和 Enabled 同时使用。</p>
     */
    public $IncludeDisabled;

    /**
     * @var integer <p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
     */
    public $RuleId;

    /**
     * @var string <p>精确公开规则标识过滤。可选。推荐在用户提供规则标识时使用。</p>
     */
    public $RuleUuid;

    /**
     * @var string <p>协议过滤。可选。例如 TCP、UDP、ICMP、HTTP、HTTPS、ANY；不传则不过滤。</p>
     */
    public $Protocol;

    /**
     * @var string <p>源地址或源内容关键字过滤。可选，支持模糊匹配。</p>
     */
    public $SrcIp;

    /**
     * @var string <p>目的地址、目的域名或目的内容关键字过滤。可选，支持模糊匹配。</p>
     */
    public $DstIp;

    /**
     * @var string <p>规则描述关键字过滤。可选。</p>
     */
    public $Description;

    /**
     * @var string <p>入侵防御列表关键字搜索。可选，最大 100 字符。blocklist 搜索 ioc/address/comment/rule_source；whitelist 搜索 rule_name/ioc/comment/src_ip/dst_ip；isolate 搜索实例、公网 IP、内网 IP、VPC、地域。</p>
     */
    public $Keyword;

    /**
     * @var string <p>精确实例 ID 过滤。仅 RuleType=intrusion_prevention 且 ListType=isolate 时使用；写操作前后核验应使用该参数而不是 Keyword。</p>
     */
    public $InstanceId;

    /**
     * @var boolean <p>是否展开模板、资产组、实例等名称。可选，默认 true；传 false 返回原始标识。</p>
     */
    public $ExpandNames;

    /**
     * @var integer <p>单页返回规则数。可选，默认 100，最大 1000。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移。可选，默认 0。</p>
     */
    public $Offset;

    /**
     * @param string $RuleType <p>规则域。必填。枚举：border 互联网边界；nat NAT 边界；vpc VPC 间；enterprise_sg 企业安全组；intrusion_prevention 入侵防御。RuleType=intrusion_prevention 时还必须传 ListType。</p>
     * @param string $ListType <p>入侵防御列表类型。仅 RuleType=intrusion_prevention 时使用并必填。blocklist 表示封禁列表，whitelist 表示白名单策略，isolate 表示隔离列表。</p>
     * @param integer $Direction <p>访问方向过滤。可选。0 表示出站，1 表示入站；不传则不过滤。RuleType=intrusion_prevention 时不支持。</p>
     * @param integer $RuleAction <p>规则动作过滤。可选。0 表示观察，1 表示阻断，2 表示放行；不传则不过滤。</p>
     * @param boolean $Enabled <p>启用状态过滤。可选。默认只返回启用规则；传 false 只查询禁用规则。</p>
     * @param boolean $IncludeDisabled <p>是否同时包含启用和禁用规则。可选。true 表示包含两类；不能和 Enabled 同时使用。</p>
     * @param integer $RuleId <p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
     * @param string $RuleUuid <p>精确公开规则标识过滤。可选。推荐在用户提供规则标识时使用。</p>
     * @param string $Protocol <p>协议过滤。可选。例如 TCP、UDP、ICMP、HTTP、HTTPS、ANY；不传则不过滤。</p>
     * @param string $SrcIp <p>源地址或源内容关键字过滤。可选，支持模糊匹配。</p>
     * @param string $DstIp <p>目的地址、目的域名或目的内容关键字过滤。可选，支持模糊匹配。</p>
     * @param string $Description <p>规则描述关键字过滤。可选。</p>
     * @param string $Keyword <p>入侵防御列表关键字搜索。可选，最大 100 字符。blocklist 搜索 ioc/address/comment/rule_source；whitelist 搜索 rule_name/ioc/comment/src_ip/dst_ip；isolate 搜索实例、公网 IP、内网 IP、VPC、地域。</p>
     * @param string $InstanceId <p>精确实例 ID 过滤。仅 RuleType=intrusion_prevention 且 ListType=isolate 时使用；写操作前后核验应使用该参数而不是 Keyword。</p>
     * @param boolean $ExpandNames <p>是否展开模板、资产组、实例等名称。可选，默认 true；传 false 返回原始标识。</p>
     * @param integer $Limit <p>单页返回规则数。可选，默认 100，最大 1000。</p>
     * @param integer $Offset <p>分页偏移。可选，默认 0。</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("ListType",$param) and $param["ListType"] !== null) {
            $this->ListType = $param["ListType"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("IncludeDisabled",$param) and $param["IncludeDisabled"] !== null) {
            $this->IncludeDisabled = $param["IncludeDisabled"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExpandNames",$param) and $param["ExpandNames"] !== null) {
            $this->ExpandNames = $param["ExpandNames"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
