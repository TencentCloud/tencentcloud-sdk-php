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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEventBuses请求参数结构体
 *
 * @method string getOrderBy() 获取根据哪个字段进行返回结果排序,支持以下字段：created_at（创建时间）, updated_at（修改时间）
 * @method void setOrderBy(string $OrderBy) 设置根据哪个字段进行返回结果排序,支持以下字段：created_at（创建时间）, updated_at（修改时间）
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method string getOrder() 获取以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
 * @method void setOrder(string $Order) 设置以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
 * @method array getFilters() 获取过滤字段范围: EventBusName(事件集名称)/EventBusId(事件集Id)/Type(事件集类型:Cloud(云服务);Platform(平台型);Custom(自定义))/TagKey(标签键)。每次请求的Filters的上限为10，Filter.Values的上限为5。[{"Name":"Type","Values":["Cloud","Platform"]}]
 * @method void setFilters(array $Filters) 设置过滤字段范围: EventBusName(事件集名称)/EventBusId(事件集Id)/Type(事件集类型:Cloud(云服务);Platform(平台型);Custom(自定义))/TagKey(标签键)。每次请求的Filters的上限为10，Filter.Values的上限为5。[{"Name":"Type","Values":["Cloud","Platform"]}]
 * @method integer getOffset() 获取分页偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0。
 */
class ListEventBusesRequest extends AbstractModel
{
    /**
     * @var string 根据哪个字段进行返回结果排序,支持以下字段：created_at（创建时间）, updated_at（修改时间）
     */
    public $OrderBy;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var string 以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
     */
    public $Order;

    /**
     * @var array 过滤字段范围: EventBusName(事件集名称)/EventBusId(事件集Id)/Type(事件集类型:Cloud(云服务);Platform(平台型);Custom(自定义))/TagKey(标签键)。每次请求的Filters的上限为10，Filter.Values的上限为5。[{"Name":"Type","Values":["Cloud","Platform"]}]
     */
    public $Filters;

    /**
     * @var integer 分页偏移量，默认为0。
     */
    public $Offset;

    /**
     * @param string $OrderBy 根据哪个字段进行返回结果排序,支持以下字段：created_at（创建时间）, updated_at（修改时间）
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param string $Order 以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
     * @param array $Filters 过滤字段范围: EventBusName(事件集名称)/EventBusId(事件集Id)/Type(事件集类型:Cloud(云服务);Platform(平台型);Custom(自定义))/TagKey(标签键)。每次请求的Filters的上限为10，Filter.Values的上限为5。[{"Name":"Type","Values":["Cloud","Platform"]}]
     * @param integer $Offset 分页偏移量，默认为0。
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
        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
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
    }
}
