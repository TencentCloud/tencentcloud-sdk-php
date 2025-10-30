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
 * 自定义规则-基础访问管控配置。
 *
 * @method string getAction() 获取动作，取值有：
<li> drop：拦截；</li>
<li> trans：放行；</li>
<li> monitor：观察。</li>
 * @method void setAction(string $Action) 设置动作，取值有：
<li> drop：拦截；</li>
<li> trans：放行；</li>
<li> monitor：观察。</li>
 * @method string getMatchFrom() 获取根据类型匹配，取值有：
<li>ip：客户端 IP 进行匹配；</li>
<li>area：客户端 IP 所属地区匹配；</li>
<li>asn：客户端所属的自治系统进行匹配；</li>
<li>referer：请求头 Referer 进行匹配；</li>
<li>ua：请求头 User-Agent 进行匹配；</li>
<li>url：请求 URL 进行匹配。</li>
 * @method void setMatchFrom(string $MatchFrom) 设置根据类型匹配，取值有：
<li>ip：客户端 IP 进行匹配；</li>
<li>area：客户端 IP 所属地区匹配；</li>
<li>asn：客户端所属的自治系统进行匹配；</li>
<li>referer：请求头 Referer 进行匹配；</li>
<li>ua：请求头 User-Agent 进行匹配；</li>
<li>url：请求 URL 进行匹配。</li>
 * @method string getOperator() 获取规则的匹配方式。取值有：
<li> match：匹配，适用于 MatchFrom 为 ip；</li>
<li> not_match：不匹配，适用于 MatchFrom 为 ip；</li>
<li> include_area：地域包含，适用于 MatchFrom 为 area；</li>
<li> not_include_area：地域不包含，适用于 MatchFrom 为 area；</li>
<li> asn_match：ASN 包含，适用于 MatchFrom 为 asn；</li>
<li> asn_not_match：ASN 不包含，适用于 MatchFrom 为 asn；</li>
<li> equal：等于，适用于 MatchFrom 为 ua , referer；</li>
<li> not_equal：不等于，适用于 MatchFrom 为 ua , referer；</li>
<li> include：通配符匹配，适用于 MatchFrom 为 ua , referer , url；</li>
<li> not_include：通配符不匹配，适用于 MatchFrom 为 ua , referer；</li>
<li> is_emty：配置内容为空，适用于 MatchFrom 为 ua , referer；</li>
<li> not_exists：配置内容不存在，适用于 MatchFrom 为 ua , referer。</li>
 * @method void setOperator(string $Operator) 设置规则的匹配方式。取值有：
<li> match：匹配，适用于 MatchFrom 为 ip；</li>
<li> not_match：不匹配，适用于 MatchFrom 为 ip；</li>
<li> include_area：地域包含，适用于 MatchFrom 为 area；</li>
<li> not_include_area：地域不包含，适用于 MatchFrom 为 area；</li>
<li> asn_match：ASN 包含，适用于 MatchFrom 为 asn；</li>
<li> asn_not_match：ASN 不包含，适用于 MatchFrom 为 asn；</li>
<li> equal：等于，适用于 MatchFrom 为 ua , referer；</li>
<li> not_equal：不等于，适用于 MatchFrom 为 ua , referer；</li>
<li> include：通配符匹配，适用于 MatchFrom 为 ua , referer , url；</li>
<li> not_include：通配符不匹配，适用于 MatchFrom 为 ua , referer；</li>
<li> is_emty：配置内容为空，适用于 MatchFrom 为 ua , referer；</li>
<li> not_exists：配置内容不存在，适用于 MatchFrom 为 ua , referer。</li>
 * @method integer getRuleID() 获取规则id。仅出参使用。
 * @method void setRuleID(integer $RuleID) 设置规则id。仅出参使用。
 * @method string getUpdateTime() 获取更新时间。仅出参使用。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。仅出参使用。
 * @method string getStatus() 获取规则启用状态。取值有：
<li> on：启用；</li>
<li> off：未启用。</li>
当入参缺省时，按 on 取值。
 * @method void setStatus(string $Status) 设置规则启用状态。取值有：
<li> on：启用；</li>
<li> off：未启用。</li>
当入参缺省时，按 on 取值。
 * @method string getRuleName() 获取规则名。
 * @method void setRuleName(string $RuleName) 设置规则名。
 * @method string getMatchContent() 获取匹配内容。支持多值输入。
<li>当输入多个匹配值时，请使用英文逗号分隔；</li>
<li>当 MatchFrom 为 ua 时，不支持多值输入；</li>
<li>当 Operator 为 is_empty 或 not_exists 时，本字段入参值无效。</li>
 * @method void setMatchContent(string $MatchContent) 设置匹配内容。支持多值输入。
<li>当输入多个匹配值时，请使用英文逗号分隔；</li>
<li>当 MatchFrom 为 ua 时，不支持多值输入；</li>
<li>当 Operator 为 is_empty 或 not_exists 时，本字段入参值无效。</li>
 */
class IpTableRule extends AbstractModel
{
    /**
     * @var string 动作，取值有：
<li> drop：拦截；</li>
<li> trans：放行；</li>
<li> monitor：观察。</li>
     */
    public $Action;

    /**
     * @var string 根据类型匹配，取值有：
<li>ip：客户端 IP 进行匹配；</li>
<li>area：客户端 IP 所属地区匹配；</li>
<li>asn：客户端所属的自治系统进行匹配；</li>
<li>referer：请求头 Referer 进行匹配；</li>
<li>ua：请求头 User-Agent 进行匹配；</li>
<li>url：请求 URL 进行匹配。</li>
     */
    public $MatchFrom;

    /**
     * @var string 规则的匹配方式。取值有：
<li> match：匹配，适用于 MatchFrom 为 ip；</li>
<li> not_match：不匹配，适用于 MatchFrom 为 ip；</li>
<li> include_area：地域包含，适用于 MatchFrom 为 area；</li>
<li> not_include_area：地域不包含，适用于 MatchFrom 为 area；</li>
<li> asn_match：ASN 包含，适用于 MatchFrom 为 asn；</li>
<li> asn_not_match：ASN 不包含，适用于 MatchFrom 为 asn；</li>
<li> equal：等于，适用于 MatchFrom 为 ua , referer；</li>
<li> not_equal：不等于，适用于 MatchFrom 为 ua , referer；</li>
<li> include：通配符匹配，适用于 MatchFrom 为 ua , referer , url；</li>
<li> not_include：通配符不匹配，适用于 MatchFrom 为 ua , referer；</li>
<li> is_emty：配置内容为空，适用于 MatchFrom 为 ua , referer；</li>
<li> not_exists：配置内容不存在，适用于 MatchFrom 为 ua , referer。</li>
     */
    public $Operator;

    /**
     * @var integer 规则id。仅出参使用。
     */
    public $RuleID;

    /**
     * @var string 更新时间。仅出参使用。
     */
    public $UpdateTime;

    /**
     * @var string 规则启用状态。取值有：
<li> on：启用；</li>
<li> off：未启用。</li>
当入参缺省时，按 on 取值。
     */
    public $Status;

    /**
     * @var string 规则名。
     */
    public $RuleName;

    /**
     * @var string 匹配内容。支持多值输入。
<li>当输入多个匹配值时，请使用英文逗号分隔；</li>
<li>当 MatchFrom 为 ua 时，不支持多值输入；</li>
<li>当 Operator 为 is_empty 或 not_exists 时，本字段入参值无效。</li>
     */
    public $MatchContent;

    /**
     * @param string $Action 动作，取值有：
<li> drop：拦截；</li>
<li> trans：放行；</li>
<li> monitor：观察。</li>
     * @param string $MatchFrom 根据类型匹配，取值有：
<li>ip：客户端 IP 进行匹配；</li>
<li>area：客户端 IP 所属地区匹配；</li>
<li>asn：客户端所属的自治系统进行匹配；</li>
<li>referer：请求头 Referer 进行匹配；</li>
<li>ua：请求头 User-Agent 进行匹配；</li>
<li>url：请求 URL 进行匹配。</li>
     * @param string $Operator 规则的匹配方式。取值有：
<li> match：匹配，适用于 MatchFrom 为 ip；</li>
<li> not_match：不匹配，适用于 MatchFrom 为 ip；</li>
<li> include_area：地域包含，适用于 MatchFrom 为 area；</li>
<li> not_include_area：地域不包含，适用于 MatchFrom 为 area；</li>
<li> asn_match：ASN 包含，适用于 MatchFrom 为 asn；</li>
<li> asn_not_match：ASN 不包含，适用于 MatchFrom 为 asn；</li>
<li> equal：等于，适用于 MatchFrom 为 ua , referer；</li>
<li> not_equal：不等于，适用于 MatchFrom 为 ua , referer；</li>
<li> include：通配符匹配，适用于 MatchFrom 为 ua , referer , url；</li>
<li> not_include：通配符不匹配，适用于 MatchFrom 为 ua , referer；</li>
<li> is_emty：配置内容为空，适用于 MatchFrom 为 ua , referer；</li>
<li> not_exists：配置内容不存在，适用于 MatchFrom 为 ua , referer。</li>
     * @param integer $RuleID 规则id。仅出参使用。
     * @param string $UpdateTime 更新时间。仅出参使用。
     * @param string $Status 规则启用状态。取值有：
<li> on：启用；</li>
<li> off：未启用。</li>
当入参缺省时，按 on 取值。
     * @param string $RuleName 规则名。
     * @param string $MatchContent 匹配内容。支持多值输入。
<li>当输入多个匹配值时，请使用英文逗号分隔；</li>
<li>当 MatchFrom 为 ua 时，不支持多值输入；</li>
<li>当 Operator 为 is_empty 或 not_exists 时，本字段入参值无效。</li>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchFrom",$param) and $param["MatchFrom"] !== null) {
            $this->MatchFrom = $param["MatchFrom"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MatchContent",$param) and $param["MatchContent"] !== null) {
            $this->MatchContent = $param["MatchContent"];
        }
    }
}
