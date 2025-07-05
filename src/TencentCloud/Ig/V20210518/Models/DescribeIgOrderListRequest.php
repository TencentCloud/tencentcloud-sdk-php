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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIgOrderList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页数目
 * @method void setPageSize(integer $PageSize) 设置每页数目
 * @method string getProductType() 获取产品类型
 * @method void setProductType(string $ProductType) 设置产品类型
 * @method integer getOrderStatus() 获取订单状态
 * @method void setOrderStatus(integer $OrderStatus) 设置订单状态
 * @method string getKeyWord() 获取搜索关键字
 * @method void setKeyWord(string $KeyWord) 设置搜索关键字
 */
class DescribeIgOrderListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页数目
     */
    public $PageSize;

    /**
     * @var string 产品类型
     */
    public $ProductType;

    /**
     * @var integer 订单状态
     */
    public $OrderStatus;

    /**
     * @var string 搜索关键字
     */
    public $KeyWord;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页数目
     * @param string $ProductType 产品类型
     * @param integer $OrderStatus 订单状态
     * @param string $KeyWord 搜索关键字
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("OrderStatus",$param) and $param["OrderStatus"] !== null) {
            $this->OrderStatus = $param["OrderStatus"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }
    }
}
