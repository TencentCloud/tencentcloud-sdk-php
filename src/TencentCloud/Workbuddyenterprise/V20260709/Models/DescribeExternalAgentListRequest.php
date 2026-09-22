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
 * DescribeExternalAgentList请求参数结构体
 *
 * @method string getAgentId() 获取Agent 业务 ID（必填：绑定状态的归属主体）
 * @method void setAgentId(string $AgentId) 设置Agent 业务 ID（必填：绑定状态的归属主体）
 * @method array getFilters() 获取标准过滤条件，支持的 Name：Bound（BOUND=仅已绑定 / UNBOUND=仅未绑定 / ALL=全部，缺省 ALL）
 * @method void setFilters(array $Filters) 设置标准过滤条件，支持的 Name：Bound（BOUND=仅已绑定 / UNBOUND=仅未绑定 / ALL=全部，缺省 ALL）
 * @method integer getOffset() 获取偏移量，从 0 开始，默认 0
 * @method void setOffset(integer $Offset) 设置偏移量，从 0 开始，默认 0
 * @method integer getLimit() 获取每页数量，默认 20，最大 200
 * @method void setLimit(integer $Limit) 设置每页数量，默认 20，最大 200
 * @method string getDescribeExternalAgentList() 获取外部 Agent 列表查询关键字
 * @method void setDescribeExternalAgentList(string $DescribeExternalAgentList) 设置外部 Agent 列表查询关键字
 * @method string getVersionId() 获取版本 ID
 * @method void setVersionId(string $VersionId) 设置版本 ID
 */
class DescribeExternalAgentListRequest extends AbstractModel
{
    /**
     * @var string Agent 业务 ID（必填：绑定状态的归属主体）
     */
    public $AgentId;

    /**
     * @var array 标准过滤条件，支持的 Name：Bound（BOUND=仅已绑定 / UNBOUND=仅未绑定 / ALL=全部，缺省 ALL）
     */
    public $Filters;

    /**
     * @var integer 偏移量，从 0 开始，默认 0
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认 20，最大 200
     */
    public $Limit;

    /**
     * @var string 外部 Agent 列表查询关键字
     */
    public $DescribeExternalAgentList;

    /**
     * @var string 版本 ID
     */
    public $VersionId;

    /**
     * @param string $AgentId Agent 业务 ID（必填：绑定状态的归属主体）
     * @param array $Filters 标准过滤条件，支持的 Name：Bound（BOUND=仅已绑定 / UNBOUND=仅未绑定 / ALL=全部，缺省 ALL）
     * @param integer $Offset 偏移量，从 0 开始，默认 0
     * @param integer $Limit 每页数量，默认 20，最大 200
     * @param string $DescribeExternalAgentList 外部 Agent 列表查询关键字
     * @param string $VersionId 版本 ID
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
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

        if (array_key_exists("DescribeExternalAgentList",$param) and $param["DescribeExternalAgentList"] !== null) {
            $this->DescribeExternalAgentList = $param["DescribeExternalAgentList"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
