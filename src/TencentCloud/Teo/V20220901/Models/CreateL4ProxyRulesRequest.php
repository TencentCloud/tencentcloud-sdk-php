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
 * CreateL4ProxyRules请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getProxyId() 获取四层代理实例 ID。
 * @method void setProxyId(string $ProxyId) 设置四层代理实例 ID。
 * @method array getL4ProxyRules() 获取转发规则列表。单次最多支持 200 条转发规则。
注意：L4ProxyRule 在此处使用时，Protocol、PortRange、OriginType、OriginValue、OriginPortRange 为必填字段；ClientIPPassThroughMode、SessionPersist、SessionPersistTime、RuleTag 均为选填字段；RuleId、Status 请勿填写。
 * @method void setL4ProxyRules(array $L4ProxyRules) 设置转发规则列表。单次最多支持 200 条转发规则。
注意：L4ProxyRule 在此处使用时，Protocol、PortRange、OriginType、OriginValue、OriginPortRange 为必填字段；ClientIPPassThroughMode、SessionPersist、SessionPersistTime、RuleTag 均为选填字段；RuleId、Status 请勿填写。
 */
class CreateL4ProxyRulesRequest extends AbstractModel
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
     * @var array 转发规则列表。单次最多支持 200 条转发规则。
注意：L4ProxyRule 在此处使用时，Protocol、PortRange、OriginType、OriginValue、OriginPortRange 为必填字段；ClientIPPassThroughMode、SessionPersist、SessionPersistTime、RuleTag 均为选填字段；RuleId、Status 请勿填写。
     */
    public $L4ProxyRules;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $ProxyId 四层代理实例 ID。
     * @param array $L4ProxyRules 转发规则列表。单次最多支持 200 条转发规则。
注意：L4ProxyRule 在此处使用时，Protocol、PortRange、OriginType、OriginValue、OriginPortRange 为必填字段；ClientIPPassThroughMode、SessionPersist、SessionPersistTime、RuleTag 均为选填字段；RuleId、Status 请勿填写。
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

        if (array_key_exists("L4ProxyRules",$param) and $param["L4ProxyRules"] !== null) {
            $this->L4ProxyRules = [];
            foreach ($param["L4ProxyRules"] as $key => $value){
                $obj = new L4ProxyRule();
                $obj->deserialize($value);
                array_push($this->L4ProxyRules, $obj);
            }
        }
    }
}
