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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMarketComponentList请求参数结构体
 *
 * @method integer getOffset() 获取页偏移，从0开始
 * @method void setOffset(integer $Offset) 设置页偏移，从0开始
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method string getFilter() 获取名称模糊筛选
 * @method void setFilter(string $Filter) 设置名称模糊筛选
 * @method string getOrder() 获取以名称排序，ASC、DESC
 * @method void setOrder(string $Order) 设置以名称排序，ASC、DESC
 */
class GetMarketComponentListRequest extends AbstractModel
{
    /**
     * @var integer 页偏移，从0开始
     */
    public $Offset;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var string 名称模糊筛选
     */
    public $Filter;

    /**
     * @var string 以名称排序，ASC、DESC
     */
    public $Order;

    /**
     * @param integer $Offset 页偏移，从0开始
     * @param integer $Limit 每页条数
     * @param string $Filter 名称模糊筛选
     * @param string $Order 以名称排序，ASC、DESC
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
