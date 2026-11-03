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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIGWCustomGuardrailPolicyList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method integer getLimit() 获取<p>单页数量，范围 1～100</p>
 * @method void setLimit(integer $Limit) 设置<p>单页数量，范围 1～100</p>
 * @method string getKeyword() 获取<p>按策略名称或描述模糊搜索</p>
 * @method void setKeyword(string $Keyword) 设置<p>按策略名称或描述模糊搜索</p>
 * @method array getFilters() 获取<p>策略过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>策略过滤条件</p>
 * @method integer getOffset() 获取<p>分页偏移量，最小 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，最小 0</p>
 */
class DescribeAIGWCustomGuardrailPolicyListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>单页数量，范围 1～100</p>
     */
    public $Limit;

    /**
     * @var string <p>按策略名称或描述模糊搜索</p>
     */
    public $Keyword;

    /**
     * @var array <p>策略过滤条件</p>
     */
    public $Filters;

    /**
     * @var integer <p>分页偏移量，最小 0</p>
     */
    public $Offset;

    /**
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param integer $Limit <p>单页数量，范围 1～100</p>
     * @param string $Keyword <p>按策略名称或描述模糊搜索</p>
     * @param array $Filters <p>策略过滤条件</p>
     * @param integer $Offset <p>分页偏移量，最小 0</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CustomGuardrailPolicyFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
