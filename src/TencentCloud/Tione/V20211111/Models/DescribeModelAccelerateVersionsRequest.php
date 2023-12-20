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
 * DescribeModelAccelerateVersions请求参数结构体
 *
 * @method array getFilters() 获取过滤条件
    Filter.Name: 枚举值: ModelJobName (任务名称)|TrainingModelVersionId (模型版本id)
    Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为10，Filter.Values的上限为100
 * @method void setFilters(array $Filters) 设置过滤条件
    Filter.Name: 枚举值: ModelJobName (任务名称)|TrainingModelVersionId (模型版本id)
    Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为10，Filter.Values的上限为100
 * @method string getOrderField() 获取排序字段; 枚举值: CreateTime (创建时间) ；默认CreateTime
 * @method void setOrderField(string $OrderField) 设置排序字段; 枚举值: CreateTime (创建时间) ；默认CreateTime
 * @method string getOrder() 获取排序方向; 枚举值: ASC | DESC；默认DESC
 * @method void setOrder(string $Order) 设置排序方向; 枚举值: ASC | DESC；默认DESC
 * @method integer getOffset() 获取分页查询起始位置，如：Limit为100，第一页Offset为0，第二页Offset为100....即每页左边为闭区间; 默认0
 * @method void setOffset(integer $Offset) 设置分页查询起始位置，如：Limit为100，第一页Offset为0，第二页Offset为100....即每页左边为闭区间; 默认0
 * @method integer getLimit() 获取分页查询每页大小，最大20000; 默认10
 * @method void setLimit(integer $Limit) 设置分页查询每页大小，最大20000; 默认10
 * @method string getTrainingModelId() 获取模型ID
 * @method void setTrainingModelId(string $TrainingModelId) 设置模型ID
 */
class DescribeModelAccelerateVersionsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件
    Filter.Name: 枚举值: ModelJobName (任务名称)|TrainingModelVersionId (模型版本id)
    Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为10，Filter.Values的上限为100
     */
    public $Filters;

    /**
     * @var string 排序字段; 枚举值: CreateTime (创建时间) ；默认CreateTime
     */
    public $OrderField;

    /**
     * @var string 排序方向; 枚举值: ASC | DESC；默认DESC
     */
    public $Order;

    /**
     * @var integer 分页查询起始位置，如：Limit为100，第一页Offset为0，第二页Offset为100....即每页左边为闭区间; 默认0
     */
    public $Offset;

    /**
     * @var integer 分页查询每页大小，最大20000; 默认10
     */
    public $Limit;

    /**
     * @var string 模型ID
     */
    public $TrainingModelId;

    /**
     * @param array $Filters 过滤条件
    Filter.Name: 枚举值: ModelJobName (任务名称)|TrainingModelVersionId (模型版本id)
    Filter.Values: 当长度为1时，支持模糊查询; 不为1时，精确查询
每次请求的Filters的上限为10，Filter.Values的上限为100
     * @param string $OrderField 排序字段; 枚举值: CreateTime (创建时间) ；默认CreateTime
     * @param string $Order 排序方向; 枚举值: ASC | DESC；默认DESC
     * @param integer $Offset 分页查询起始位置，如：Limit为100，第一页Offset为0，第二页Offset为100....即每页左边为闭区间; 默认0
     * @param integer $Limit 分页查询每页大小，最大20000; 默认10
     * @param string $TrainingModelId 模型ID
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TrainingModelId",$param) and $param["TrainingModelId"] !== null) {
            $this->TrainingModelId = $param["TrainingModelId"];
        }
    }
}
