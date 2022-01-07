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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRules请求参数结构体
 *
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getOrderBy() 获取根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）
 * @method void setOrderBy(string $OrderBy) 设置根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取分页偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认为0。
 * @method string getOrder() 获取以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
 * @method void setOrder(string $Order) 设置以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
 */
class ListRulesRequest extends AbstractModel
{
    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string 根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）
     */
    public $OrderBy;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
     */
    public $Order;

    /**
     * @param string $EventBusId 事件集ID
     * @param string $OrderBy 根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 分页偏移量，默认为0。
     * @param string $Order 以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
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
    }
}
