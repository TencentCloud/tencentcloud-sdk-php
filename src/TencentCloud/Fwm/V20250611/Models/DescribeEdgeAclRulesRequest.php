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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeAclRules请求参数结构体
 *
 * @method string getGroupId() 获取规则组ID
 * @method void setGroupId(string $GroupId) 设置规则组ID
 * @method integer getDirection() 获取规则方向：0-出向，1-入向
 * @method void setDirection(integer $Direction) 设置规则方向：0-出向，1-入向
 * @method array getFilters() 获取过滤条件列表，支持按 RuleId、Direction、Protocol、RuleAction 等字段过滤
 * @method void setFilters(array $Filters) 设置过滤条件列表，支持按 RuleId、Direction、Protocol、RuleAction 等字段过滤
 * @method integer getLimit() 获取分页大小，默认100，最大1000
 * @method void setLimit(integer $Limit) 设置分页大小，默认100，最大1000
 * @method integer getOffset() 获取分页偏移，默认0
 * @method void setOffset(integer $Offset) 设置分页偏移，默认0
 * @method string getOrder() 获取排序顺序，asc:升序 desc:降序
 * @method void setOrder(string $Order) 设置排序顺序，asc:升序 desc:降序
 * @method string getBy() 获取排序字段，支持 Sequence、RuleId 等
 * @method void setBy(string $By) 设置排序字段，支持 Sequence、RuleId 等
 */
class DescribeEdgeAclRulesRequest extends AbstractModel
{
    /**
     * @var string 规则组ID
     */
    public $GroupId;

    /**
     * @var integer 规则方向：0-出向，1-入向
     */
    public $Direction;

    /**
     * @var array 过滤条件列表，支持按 RuleId、Direction、Protocol、RuleAction 等字段过滤
     */
    public $Filters;

    /**
     * @var integer 分页大小，默认100，最大1000
     */
    public $Limit;

    /**
     * @var integer 分页偏移，默认0
     */
    public $Offset;

    /**
     * @var string 排序顺序，asc:升序 desc:降序
     */
    public $Order;

    /**
     * @var string 排序字段，支持 Sequence、RuleId 等
     */
    public $By;

    /**
     * @param string $GroupId 规则组ID
     * @param integer $Direction 规则方向：0-出向，1-入向
     * @param array $Filters 过滤条件列表，支持按 RuleId、Direction、Protocol、RuleAction 等字段过滤
     * @param integer $Limit 分页大小，默认100，最大1000
     * @param integer $Offset 分页偏移，默认0
     * @param string $Order 排序顺序，asc:升序 desc:降序
     * @param string $By 排序字段，支持 Sequence、RuleId 等
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
