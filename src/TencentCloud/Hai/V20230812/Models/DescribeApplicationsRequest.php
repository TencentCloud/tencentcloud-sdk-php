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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method array getApplicationIds() 获取应用id列表。单次请求数量上限为100个。
 * @method void setApplicationIds(array $ApplicationIds) 设置应用id列表。单次请求数量上限为100个。
 * @method array getFilters() 获取过滤器，跟ApplicationIds不能共用，支持的filter主要有：application-id: 精确匹配;scene-id: 精确匹配，通过调用接口 [DescribeScenes](https://cloud.tencent.com/document/api/1721/101608)获取;application-name: 模糊匹配;application-type: 精确匹配，枚举类型如下：PUBLIC_APPLICATION（公共应用）/ PRIVATE_APPLICATION（自定义应用）/ COMMUNITY_APPLICATION（社区应用）;
 * @method void setFilters(array $Filters) 设置过滤器，跟ApplicationIds不能共用，支持的filter主要有：application-id: 精确匹配;scene-id: 精确匹配，通过调用接口 [DescribeScenes](https://cloud.tencent.com/document/api/1721/101608)获取;application-name: 模糊匹配;application-type: 精确匹配，枚举类型如下：PUBLIC_APPLICATION（公共应用）/ PRIVATE_APPLICATION（自定义应用）/ COMMUNITY_APPLICATION（社区应用）;
 * @method integer getOffset() 获取偏移量，不得小于0，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，不得小于0，默认为0
 * @method integer getLimit() 获取返回量，不得大于100，默认为20
 * @method void setLimit(integer $Limit) 设置返回量，不得大于100，默认为20
 * @method string getOrderField() 获取应用列表排序的依据字段。取值范围："CREATED_TIME"：依据应用的创建时间排序。 "APPLICATION_SIZE"：依据应用的大小排序。默认按应用的创建时间排序。
 * @method void setOrderField(string $OrderField) 设置应用列表排序的依据字段。取值范围："CREATED_TIME"：依据应用的创建时间排序。 "APPLICATION_SIZE"：依据应用的大小排序。默认按应用的创建时间排序。
 * @method string getOrder() 获取输出应用列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
 * @method void setOrder(string $Order) 设置输出应用列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var array 应用id列表。单次请求数量上限为100个。
     */
    public $ApplicationIds;

    /**
     * @var array 过滤器，跟ApplicationIds不能共用，支持的filter主要有：application-id: 精确匹配;scene-id: 精确匹配，通过调用接口 [DescribeScenes](https://cloud.tencent.com/document/api/1721/101608)获取;application-name: 模糊匹配;application-type: 精确匹配，枚举类型如下：PUBLIC_APPLICATION（公共应用）/ PRIVATE_APPLICATION（自定义应用）/ COMMUNITY_APPLICATION（社区应用）;
     */
    public $Filters;

    /**
     * @var integer 偏移量，不得小于0，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回量，不得大于100，默认为20
     */
    public $Limit;

    /**
     * @var string 应用列表排序的依据字段。取值范围："CREATED_TIME"：依据应用的创建时间排序。 "APPLICATION_SIZE"：依据应用的大小排序。默认按应用的创建时间排序。
     */
    public $OrderField;

    /**
     * @var string 输出应用列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
     */
    public $Order;

    /**
     * @param array $ApplicationIds 应用id列表。单次请求数量上限为100个。
     * @param array $Filters 过滤器，跟ApplicationIds不能共用，支持的filter主要有：application-id: 精确匹配;scene-id: 精确匹配，通过调用接口 [DescribeScenes](https://cloud.tencent.com/document/api/1721/101608)获取;application-name: 模糊匹配;application-type: 精确匹配，枚举类型如下：PUBLIC_APPLICATION（公共应用）/ PRIVATE_APPLICATION（自定义应用）/ COMMUNITY_APPLICATION（社区应用）;
     * @param integer $Offset 偏移量，不得小于0，默认为0
     * @param integer $Limit 返回量，不得大于100，默认为20
     * @param string $OrderField 应用列表排序的依据字段。取值范围："CREATED_TIME"：依据应用的创建时间排序。 "APPLICATION_SIZE"：依据应用的大小排序。默认按应用的创建时间排序。
     * @param string $Order 输出应用列表的排列顺序。取值范围："ASC"：升序排列。 "DESC"：降序排列。默认按降序排列。
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
        if (array_key_exists("ApplicationIds",$param) and $param["ApplicationIds"] !== null) {
            $this->ApplicationIds = $param["ApplicationIds"];
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

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
