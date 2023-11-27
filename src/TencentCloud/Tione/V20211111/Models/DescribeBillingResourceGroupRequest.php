<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingResourceGroup请求参数结构体
 *
 * @method string getResourceGroupId() 获取资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId
 * @method array getFilters() 获取过滤条件
注意: 
1. Filter.Name 只支持以下枚举值:
    InstanceId (资源组节点id)
    InstanceStatus (资源组节点状态)
2. Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
3. 每次请求的Filters的上限为10，Filter.Values的上限为100
 * @method void setFilters(array $Filters) 设置过滤条件
注意: 
1. Filter.Name 只支持以下枚举值:
    InstanceId (资源组节点id)
    InstanceStatus (资源组节点状态)
2. Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
3. 每次请求的Filters的上限为10，Filter.Values的上限为100
 * @method integer getOffset() 获取分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10....即每页左边为闭区间; 默认0
 * @method void setOffset(integer $Offset) 设置分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10....即每页左边为闭区间; 默认0
 * @method integer getLimit() 获取分页查询每页大小，最大30; 默认20
 * @method void setLimit(integer $Limit) 设置分页查询每页大小，最大30; 默认20
 * @method string getOrder() 获取排序方向; 枚举值: ASC | DESC；默认DESC
 * @method void setOrder(string $Order) 设置排序方向; 枚举值: ASC | DESC；默认DESC
 * @method string getOrderField() 获取排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime
 */
class DescribeBillingResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId
     */
    public $ResourceGroupId;

    /**
     * @var array 过滤条件
注意: 
1. Filter.Name 只支持以下枚举值:
    InstanceId (资源组节点id)
    InstanceStatus (资源组节点状态)
2. Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
3. 每次请求的Filters的上限为10，Filter.Values的上限为100
     */
    public $Filters;

    /**
     * @var integer 分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10....即每页左边为闭区间; 默认0
     */
    public $Offset;

    /**
     * @var integer 分页查询每页大小，最大30; 默认20
     */
    public $Limit;

    /**
     * @var string 排序方向; 枚举值: ASC | DESC；默认DESC
     */
    public $Order;

    /**
     * @var string 排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime
     */
    public $OrderField;

    /**
     * @param string $ResourceGroupId 资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId
     * @param array $Filters 过滤条件
注意: 
1. Filter.Name 只支持以下枚举值:
    InstanceId (资源组节点id)
    InstanceStatus (资源组节点状态)
2. Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询
3. 每次请求的Filters的上限为10，Filter.Values的上限为100
     * @param integer $Offset 分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10....即每页左边为闭区间; 默认0
     * @param integer $Limit 分页查询每页大小，最大30; 默认20
     * @param string $Order 排序方向; 枚举值: ASC | DESC；默认DESC
     * @param string $OrderField 排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
