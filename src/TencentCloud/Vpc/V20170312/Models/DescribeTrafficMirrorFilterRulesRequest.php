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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrorFilterRules请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像唯一ID
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像唯一ID
 * @method array getTrafficMirrorFilterRuleIds() 获取流量镜像出站、入站过滤唯一ID列表。
 * @method void setTrafficMirrorFilterRuleIds(array $TrafficMirrorFilterRuleIds) 设置流量镜像出站、入站过滤唯一ID列表。
 * @method array getFilters() 获取<li>traffic-mirror-filter-rule-id - String - （过滤条件） 流量镜像过滤规则，形如：tmfi-qfhrb7yj。 </li>
<li>action - String - （过滤条件）策略， 支持类型： ACCEPT， DROP。 </li>
<li>description - String - （过滤条件）描述。 </li>
<li>direction - String - （过滤条件）方向, 支持类型：INGRESS， EGRESS。</li>
 * @method void setFilters(array $Filters) 设置<li>traffic-mirror-filter-rule-id - String - （过滤条件） 流量镜像过滤规则，形如：tmfi-qfhrb7yj。 </li>
<li>action - String - （过滤条件）策略， 支持类型： ACCEPT， DROP。 </li>
<li>description - String - （过滤条件）描述。 </li>
<li>direction - String - （过滤条件）方向, 支持类型：INGRESS， EGRESS。</li>
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取请求对象个数。
 * @method void setLimit(integer $Limit) 设置请求对象个数。
 */
class DescribeTrafficMirrorFilterRulesRequest extends AbstractModel
{
    /**
     * @var string 流量镜像唯一ID
     */
    public $TrafficMirrorId;

    /**
     * @var array 流量镜像出站、入站过滤唯一ID列表。
     */
    public $TrafficMirrorFilterRuleIds;

    /**
     * @var array <li>traffic-mirror-filter-rule-id - String - （过滤条件） 流量镜像过滤规则，形如：tmfi-qfhrb7yj。 </li>
<li>action - String - （过滤条件）策略， 支持类型： ACCEPT， DROP。 </li>
<li>description - String - （过滤条件）描述。 </li>
<li>direction - String - （过滤条件）方向, 支持类型：INGRESS， EGRESS。</li>
     */
    public $Filters;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 请求对象个数。
     */
    public $Limit;

    /**
     * @param string $TrafficMirrorId 流量镜像唯一ID
     * @param array $TrafficMirrorFilterRuleIds 流量镜像出站、入站过滤唯一ID列表。
     * @param array $Filters <li>traffic-mirror-filter-rule-id - String - （过滤条件） 流量镜像过滤规则，形如：tmfi-qfhrb7yj。 </li>
<li>action - String - （过滤条件）策略， 支持类型： ACCEPT， DROP。 </li>
<li>description - String - （过滤条件）描述。 </li>
<li>direction - String - （过滤条件）方向, 支持类型：INGRESS， EGRESS。</li>
     * @param integer $Offset 偏移量。
     * @param integer $Limit 请求对象个数。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("TrafficMirrorFilterRuleIds",$param) and $param["TrafficMirrorFilterRuleIds"] !== null) {
            $this->TrafficMirrorFilterRuleIds = $param["TrafficMirrorFilterRuleIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
