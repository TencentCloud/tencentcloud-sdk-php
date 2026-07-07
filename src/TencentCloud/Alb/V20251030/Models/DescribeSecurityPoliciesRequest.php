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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicies请求参数结构体
 *
 * @method array getFilters() 获取过滤条件列表，用于筛选符合指定条件的安全策略。多个过滤条件之间为"与"关系。

**支持的过滤条件：**
- **SecurityPolicyNames**：按安全策略名称筛选，支持模糊匹配。
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。

**说明：** 每个过滤条件最多支持 10 个取值。

 * @method void setFilters(array $Filters) 设置过滤条件列表，用于筛选符合指定条件的安全策略。多个过滤条件之间为"与"关系。

**支持的过滤条件：**
- **SecurityPolicyNames**：按安全策略名称筛选，支持模糊匹配。
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。

**说明：** 每个过滤条件最多支持 10 个取值。

 * @method integer getMaxResults() 获取单次请求返回的最大结果数。用于分页查询，与 NextToken 配合使用。

**取值范围：** 1~100。

**默认值：** 20。

 * @method void setMaxResults(integer $MaxResults) 设置单次请求返回的最大结果数。用于分页查询，与 NextToken 配合使用。

**取值范围：** 1~100。

**默认值：** 20。

 * @method string getNextToken() 获取分页查询的起始令牌。用于获取下一页结果数据。

**使用说明：**
- 首次查询时无需设置此参数。
- 如果上一次查询返回了 NextToken，表示还有更多数据，请将该值传入此参数以获取下一页。
- 若上一次查询未返回 NextToken 或返回为空，表示已是最后一页。

 * @method void setNextToken(string $NextToken) 设置分页查询的起始令牌。用于获取下一页结果数据。

**使用说明：**
- 首次查询时无需设置此参数。
- 如果上一次查询返回了 NextToken，表示还有更多数据，请将该值传入此参数以获取下一页。
- 若上一次查询未返回 NextToken 或返回为空，表示已是最后一页。

 * @method array getSecurityPolicyIds() 获取安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 * @method void setSecurityPolicyIds(array $SecurityPolicyIds) 设置安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
 */
class DescribeSecurityPoliciesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件列表，用于筛选符合指定条件的安全策略。多个过滤条件之间为"与"关系。

**支持的过滤条件：**
- **SecurityPolicyNames**：按安全策略名称筛选，支持模糊匹配。
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。

**说明：** 每个过滤条件最多支持 10 个取值。

     */
    public $Filters;

    /**
     * @var integer 单次请求返回的最大结果数。用于分页查询，与 NextToken 配合使用。

**取值范围：** 1~100。

**默认值：** 20。

     */
    public $MaxResults;

    /**
     * @var string 分页查询的起始令牌。用于获取下一页结果数据。

**使用说明：**
- 首次查询时无需设置此参数。
- 如果上一次查询返回了 NextToken，表示还有更多数据，请将该值传入此参数以获取下一页。
- 若上一次查询未返回 NextToken 或返回为空，表示已是最后一页。

     */
    public $NextToken;

    /**
     * @var array 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
     */
    public $SecurityPolicyIds;

    /**
     * @param array $Filters 过滤条件列表，用于筛选符合指定条件的安全策略。多个过滤条件之间为"与"关系。

**支持的过滤条件：**
- **SecurityPolicyNames**：按安全策略名称筛选，支持模糊匹配。
- **tag:tag-key**：按标签键值对筛选，tag-key 请替换为实际的标签键。例如 `tag:env` 表示按标签键 `env` 筛选。

**说明：** 每个过滤条件最多支持 10 个取值。

     * @param integer $MaxResults 单次请求返回的最大结果数。用于分页查询，与 NextToken 配合使用。

**取值范围：** 1~100。

**默认值：** 20。

     * @param string $NextToken 分页查询的起始令牌。用于获取下一页结果数据。

**使用说明：**
- 首次查询时无需设置此参数。
- 如果上一次查询返回了 NextToken，表示还有更多数据，请将该值传入此参数以获取下一页。
- 若上一次查询未返回 NextToken 或返回为空，表示已是最后一页。

     * @param array $SecurityPolicyIds 安全策略 ID 列表，ID 格式为 tls- 后接 8 位字母数字。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("SecurityPolicyIds",$param) and $param["SecurityPolicyIds"] !== null) {
            $this->SecurityPolicyIds = $param["SecurityPolicyIds"];
        }
    }
}
