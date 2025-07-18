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
 * ModifyL4ProxyRulesStatus请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyId() 获取四层代理实例 ID。
 * @method void setProxyId(string $ProxyId) 设置四层代理实例 ID。
 * @method array getRuleIds() 获取转发规则 ID 列表。单次最多支持 200 条转发规则。
 * @method void setRuleIds(array $RuleIds) 设置转发规则 ID 列表。单次最多支持 200 条转发规则。
 * @method string getStatus() 获取转发规则状态，取值有：
<li>online：启用；</li>
<li>offline：停用。</li>
 * @method void setStatus(string $Status) 设置转发规则状态，取值有：
<li>online：启用；</li>
<li>offline：停用。</li>
 */
class ModifyL4ProxyRulesStatusRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 四层代理实例 ID。
     */
    public $ProxyId;

    /**
     * @var array 转发规则 ID 列表。单次最多支持 200 条转发规则。
     */
    public $RuleIds;

    /**
     * @var string 转发规则状态，取值有：
<li>online：启用；</li>
<li>offline：停用。</li>
     */
    public $Status;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyId 四层代理实例 ID。
     * @param array $RuleIds 转发规则 ID 列表。单次最多支持 200 条转发规则。
     * @param string $Status 转发规则状态，取值有：
<li>online：启用；</li>
<li>offline：停用。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
