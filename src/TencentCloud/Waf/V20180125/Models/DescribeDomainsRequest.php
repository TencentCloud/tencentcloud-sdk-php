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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDomains请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
 * @method integer getLimit() 获取<p>返回域名的数量</p>
 * @method void setLimit(integer $Limit) 设置<p>返回域名的数量</p>
 * @method array getFilters() 获取<p>过滤数组，过滤字段包括：Edition：实例版本，sparta-waf或clb-waf AlbType：七层接入类型细分，clb或tsegw或apisix或scf Domain：域名 DomainId：域名ID InstanceName：实例名称 InstanceId：实例ID FlowMode：流量接入模式，仅支持CLBWAF FlowCheckMode：流量体检模式，仅支持CLBWAF ClsStatus：日志开关 Status：WAF开关BotStatus：BOT开关 ApiStatus：API安全开关 Engine：引擎模式 UpstreamIP：源站IP，仅支持SAAS型WAF UpstreamDomain：源站域名，仅支持SAAS型WAF DomainState：域名状态，仅支持SAAS型WAF SgState：安全组状态，仅支持SAAS型WAF Label：分组标签，同时仅支持一种标签过滤</p>
 * @method void setFilters(array $Filters) 设置<p>过滤数组，过滤字段包括：Edition：实例版本，sparta-waf或clb-waf AlbType：七层接入类型细分，clb或tsegw或apisix或scf Domain：域名 DomainId：域名ID InstanceName：实例名称 InstanceId：实例ID FlowMode：流量接入模式，仅支持CLBWAF FlowCheckMode：流量体检模式，仅支持CLBWAF ClsStatus：日志开关 Status：WAF开关BotStatus：BOT开关 ApiStatus：API安全开关 Engine：引擎模式 UpstreamIP：源站IP，仅支持SAAS型WAF UpstreamDomain：源站域名，仅支持SAAS型WAF DomainState：域名状态，仅支持SAAS型WAF SgState：安全组状态，仅支持SAAS型WAF Label：分组标签，同时仅支持一种标签过滤</p>
 */
class DescribeDomainsRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回域名的数量</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤数组，过滤字段包括：Edition：实例版本，sparta-waf或clb-waf AlbType：七层接入类型细分，clb或tsegw或apisix或scf Domain：域名 DomainId：域名ID InstanceName：实例名称 InstanceId：实例ID FlowMode：流量接入模式，仅支持CLBWAF FlowCheckMode：流量体检模式，仅支持CLBWAF ClsStatus：日志开关 Status：WAF开关BotStatus：BOT开关 ApiStatus：API安全开关 Engine：引擎模式 UpstreamIP：源站IP，仅支持SAAS型WAF UpstreamDomain：源站域名，仅支持SAAS型WAF DomainState：域名状态，仅支持SAAS型WAF SgState：安全组状态，仅支持SAAS型WAF Label：分组标签，同时仅支持一种标签过滤</p>
     */
    public $Filters;

    /**
     * @param integer $Offset <p>分页偏移量，取Limit整数倍。最小值为0，最大值= Total/Limit向上取整</p>
     * @param integer $Limit <p>返回域名的数量</p>
     * @param array $Filters <p>过滤数组，过滤字段包括：Edition：实例版本，sparta-waf或clb-waf AlbType：七层接入类型细分，clb或tsegw或apisix或scf Domain：域名 DomainId：域名ID InstanceName：实例名称 InstanceId：实例ID FlowMode：流量接入模式，仅支持CLBWAF FlowCheckMode：流量体检模式，仅支持CLBWAF ClsStatus：日志开关 Status：WAF开关BotStatus：BOT开关 ApiStatus：API安全开关 Engine：引擎模式 UpstreamIP：源站IP，仅支持SAAS型WAF UpstreamDomain：源站域名，仅支持SAAS型WAF DomainState：域名状态，仅支持SAAS型WAF SgState：安全组状态，仅支持SAAS型WAF Label：分组标签，同时仅支持一种标签过滤</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
