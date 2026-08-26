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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSandboxDLPAlertList请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认 0</p>
 * @method integer getLimit() 获取<p>每页数量，默认 10，上限 200</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量，默认 10，上限 200</p>
 * @method array getFilters() 获取<p>过滤条件<br>支持的过滤项：<br>ID：按告警记录 ID 查询单条<br>BelongAssetType：归属资产类型，可选值：HOST（主机） / CONTAINER（容器）<br>RuleName：按命中规则名称搜索<br>RuleAction：命中动作，可选值：PASS（加白） / BLOCK（拦截并告警） / MONITOR（告警）<br>InstanceId：按资产实例 ID 精确过滤（用于资产详情页查看该资产的告警列表等场景）<br>InstanceName：按资产实例名模糊搜索，多个值之间为&quot;或&quot;关系<br>Status：处理状态，可选值：PENDING（未处理） / HANDLED（已处理） / IGNORE（已忽略） / PASS（已加白） / BLOCK（已拦截）</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>支持的过滤项：<br>ID：按告警记录 ID 查询单条<br>BelongAssetType：归属资产类型，可选值：HOST（主机） / CONTAINER（容器）<br>RuleName：按命中规则名称搜索<br>RuleAction：命中动作，可选值：PASS（加白） / BLOCK（拦截并告警） / MONITOR（告警）<br>InstanceId：按资产实例 ID 精确过滤（用于资产详情页查看该资产的告警列表等场景）<br>InstanceName：按资产实例名模糊搜索，多个值之间为&quot;或&quot;关系<br>Status：处理状态，可选值：PENDING（未处理） / HANDLED（已处理） / IGNORE（已忽略） / PASS（已加白） / BLOCK（已拦截）</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 */
class DescribeSandboxDLPAlertListRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量，默认 10，上限 200</p>
     */
    public $Limit;

    /**
     * @var array <p>过滤条件<br>支持的过滤项：<br>ID：按告警记录 ID 查询单条<br>BelongAssetType：归属资产类型，可选值：HOST（主机） / CONTAINER（容器）<br>RuleName：按命中规则名称搜索<br>RuleAction：命中动作，可选值：PASS（加白） / BLOCK（拦截并告警） / MONITOR（告警）<br>InstanceId：按资产实例 ID 精确过滤（用于资产详情页查看该资产的告警列表等场景）<br>InstanceName：按资产实例名模糊搜索，多个值之间为&quot;或&quot;关系<br>Status：处理状态，可选值：PENDING（未处理） / HANDLED（已处理） / IGNORE（已忽略） / PASS（已加白） / BLOCK（已拦截）</p>
     */
    public $Filters;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @param integer $Offset <p>偏移量，默认 0</p>
     * @param integer $Limit <p>每页数量，默认 10，上限 200</p>
     * @param array $Filters <p>过滤条件<br>支持的过滤项：<br>ID：按告警记录 ID 查询单条<br>BelongAssetType：归属资产类型，可选值：HOST（主机） / CONTAINER（容器）<br>RuleName：按命中规则名称搜索<br>RuleAction：命中动作，可选值：PASS（加白） / BLOCK（拦截并告警） / MONITOR（告警）<br>InstanceId：按资产实例 ID 精确过滤（用于资产详情页查看该资产的告警列表等场景）<br>InstanceName：按资产实例名模糊搜索，多个值之间为&quot;或&quot;关系<br>Status：处理状态，可选值：PENDING（未处理） / HANDLED（已处理） / IGNORE（已忽略） / PASS（已加白） / BLOCK（已拦截）</p>
     * @param array $MemberId <p>集团账号的成员id</p>
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }
    }
}
