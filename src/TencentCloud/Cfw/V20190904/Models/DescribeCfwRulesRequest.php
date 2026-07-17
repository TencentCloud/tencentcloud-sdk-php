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
 * @method integer getRuleId() 获取<p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
 * @method void setRuleId(integer $RuleId) 设置<p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
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
     * @var integer <p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
     */
    public $RuleId;

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
     * @param integer $RuleId <p>精确规则 ID 过滤。可选。用于按数值规则标识定位单条规则。</p>
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
