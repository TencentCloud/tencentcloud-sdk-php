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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCustomDomains请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认0
 * @method void setOffset(integer $Offset) 设置偏移量，默认0
 * @method integer getLimit() 获取容量，默认20
 * @method void setLimit(integer $Limit) 设置容量，默认20
 * @method string getOrderBy() 获取取值范围：AddTime，ModTime， 默认AddTime
 * @method void setOrderBy(string $OrderBy) 设置取值范围：AddTime，ModTime， 默认AddTime
 * @method string getOrder() 获取取值范围：DESC, ASC 默认DESC
 * @method void setOrder(string $Order) 设置取值范围：DESC, ASC 默认DESC
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 */
class ListCustomDomainsRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认0
     */
    public $Offset;

    /**
     * @var integer 容量，默认20
     */
    public $Limit;

    /**
     * @var string 取值范围：AddTime，ModTime， 默认AddTime
     */
    public $OrderBy;

    /**
     * @var string 取值范围：DESC, ASC 默认DESC
     */
    public $Order;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认0
     * @param integer $Limit 容量，默认20
     * @param string $OrderBy 取值范围：AddTime，ModTime， 默认AddTime
     * @param string $Order 取值范围：DESC, ASC 默认DESC
     * @param array $Filters 过滤条件
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

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
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
    }
}
