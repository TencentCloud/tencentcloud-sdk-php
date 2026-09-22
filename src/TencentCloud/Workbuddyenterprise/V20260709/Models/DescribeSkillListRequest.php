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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSkillList请求参数结构体
 *
 * @method string getSource() 获取技能来源，必填：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）。数据通路判别，非筛选条件
 * @method void setSource(string $Source) 设置技能来源，必填：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）。数据通路判别，非筛选条件
 * @method array getFilters() 获取标准过滤条件：SkillId（精确，多值 OR ≤100，携带即按 ID 批量查询）/ Keyword（模糊）/ PublishStatus（DRAFT/PUBLISHED/ALL）/ Status（ENABLED/DISABLED/ALL）
 * @method void setFilters(array $Filters) 设置标准过滤条件：SkillId（精确，多值 OR ≤100，携带即按 ID 批量查询）/ Keyword（模糊）/ PublishStatus（DRAFT/PUBLISHED/ALL）/ Status（ENABLED/DISABLED/ALL）
 * @method integer getOffset() 获取偏移量，默认 0（按 ID 批量查询时忽略）
 * @method void setOffset(integer $Offset) 设置偏移量，默认 0（按 ID 批量查询时忽略）
 * @method integer getLimit() 获取每页数量，默认 20，最大 200（按 ID 批量查询时忽略）
 * @method void setLimit(integer $Limit) 设置每页数量，默认 20，最大 200（按 ID 批量查询时忽略）
 * @method string getAccountId() 获取授权方企业账号标识；仅 Source=AUTHORIZED 时生效。不传则由后端用 Uin 推导全部已授权范围；未携带 SkillId 的分页查询必传
 * @method void setAccountId(string $AccountId) 设置授权方企业账号标识；仅 Source=AUTHORIZED 时生效。不传则由后端用 Uin 推导全部已授权范围；未携带 SkillId 的分页查询必传
 * @method string getAgentId() 获取仅 Source=AUTHORIZED 时生效。Agent 绑定了 OneID 租户时，授权集合强制收窄到绑定租户；显式传入的 AccountId 必须等于绑定值，否则请求被拒绝。绑定 Agent 的分页查询可不传 AccountId（服务端按绑定值收窄到单一授权方）
 * @method void setAgentId(string $AgentId) 设置仅 Source=AUTHORIZED 时生效。Agent 绑定了 OneID 租户时，授权集合强制收窄到绑定租户；显式传入的 AccountId 必须等于绑定值，否则请求被拒绝。绑定 Agent 的分页查询可不传 AccountId（服务端按绑定值收窄到单一授权方）
 */
class DescribeSkillListRequest extends AbstractModel
{
    /**
     * @var string 技能来源，必填：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）。数据通路判别，非筛选条件
     */
    public $Source;

    /**
     * @var array 标准过滤条件：SkillId（精确，多值 OR ≤100，携带即按 ID 批量查询）/ Keyword（模糊）/ PublishStatus（DRAFT/PUBLISHED/ALL）/ Status（ENABLED/DISABLED/ALL）
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认 0（按 ID 批量查询时忽略）
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认 20，最大 200（按 ID 批量查询时忽略）
     */
    public $Limit;

    /**
     * @var string 授权方企业账号标识；仅 Source=AUTHORIZED 时生效。不传则由后端用 Uin 推导全部已授权范围；未携带 SkillId 的分页查询必传
     */
    public $AccountId;

    /**
     * @var string 仅 Source=AUTHORIZED 时生效。Agent 绑定了 OneID 租户时，授权集合强制收窄到绑定租户；显式传入的 AccountId 必须等于绑定值，否则请求被拒绝。绑定 Agent 的分页查询可不传 AccountId（服务端按绑定值收窄到单一授权方）
     */
    public $AgentId;

    /**
     * @param string $Source 技能来源，必填：BUILTIN（内置）/ CUSTOM（自建）/ AUTHORIZED（企业授权）。数据通路判别，非筛选条件
     * @param array $Filters 标准过滤条件：SkillId（精确，多值 OR ≤100，携带即按 ID 批量查询）/ Keyword（模糊）/ PublishStatus（DRAFT/PUBLISHED/ALL）/ Status（ENABLED/DISABLED/ALL）
     * @param integer $Offset 偏移量，默认 0（按 ID 批量查询时忽略）
     * @param integer $Limit 每页数量，默认 20，最大 200（按 ID 批量查询时忽略）
     * @param string $AccountId 授权方企业账号标识；仅 Source=AUTHORIZED 时生效。不传则由后端用 Uin 推导全部已授权范围；未携带 SkillId 的分页查询必传
     * @param string $AgentId 仅 Source=AUTHORIZED 时生效。Agent 绑定了 OneID 租户时，授权集合强制收窄到绑定租户；显式传入的 AccountId 必须等于绑定值，否则请求被拒绝。绑定 Agent 的分页查询可不传 AccountId（服务端按绑定值收窄到单一授权方）
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
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

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }
    }
}
