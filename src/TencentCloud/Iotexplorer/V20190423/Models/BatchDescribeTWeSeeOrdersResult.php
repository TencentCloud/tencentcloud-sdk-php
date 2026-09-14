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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个订单的查询结果。查询失败时 ErrorCode 和 ErrorMessage 非空。
 *
 * @method string getOrderId() 获取<p>订单 ID</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单 ID</p>
 * @method string getStatus() 获取<p>订单状态。</p><p>枚举值：</p><ul><li>DELIVERED： 已发货</li><li>DELIVERING： 发货中</li><li>DELIVER_FAILED： 发货失败</li><li>NOT_DELIVERED： 未发货</li></ul>
 * @method void setStatus(string $Status) 设置<p>订单状态。</p><p>枚举值：</p><ul><li>DELIVERED： 已发货</li><li>DELIVERING： 发货中</li><li>DELIVER_FAILED： 发货失败</li><li>NOT_DELIVERED： 未发货</li></ul>
 * @method string getResourceId() 获取<p>资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID</p>
 * @method string getCurrency() 获取<p>币种</p>
 * @method void setCurrency(string $Currency) 设置<p>币种</p>
 * @method string getPrice() 获取<p>订单价格</p>
 * @method void setPrice(string $Price) 设置<p>订单价格</p>
 * @method string getCustomOrderId() 获取<p>自定义订单 ID</p>
 * @method void setCustomOrderId(string $CustomOrderId) 设置<p>自定义订单 ID</p>
 * @method string getErrorCode() 获取<p>单个订单的查询错误码，查询成功时为空</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>单个订单的查询错误码，查询成功时为空</p>
 * @method string getErrorMessage() 获取<p>单个订单的查询错误信息，查询成功时为空</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>单个订单的查询错误信息，查询成功时为空</p>
 */
class BatchDescribeTWeSeeOrdersResult extends AbstractModel
{
    /**
     * @var string <p>订单 ID</p>
     */
    public $OrderId;

    /**
     * @var string <p>订单状态。</p><p>枚举值：</p><ul><li>DELIVERED： 已发货</li><li>DELIVERING： 发货中</li><li>DELIVER_FAILED： 发货失败</li><li>NOT_DELIVERED： 未发货</li></ul>
     */
    public $Status;

    /**
     * @var string <p>资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>币种</p>
     */
    public $Currency;

    /**
     * @var string <p>订单价格</p>
     */
    public $Price;

    /**
     * @var string <p>自定义订单 ID</p>
     */
    public $CustomOrderId;

    /**
     * @var string <p>单个订单的查询错误码，查询成功时为空</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>单个订单的查询错误信息，查询成功时为空</p>
     */
    public $ErrorMessage;

    /**
     * @param string $OrderId <p>订单 ID</p>
     * @param string $Status <p>订单状态。</p><p>枚举值：</p><ul><li>DELIVERED： 已发货</li><li>DELIVERING： 发货中</li><li>DELIVER_FAILED： 发货失败</li><li>NOT_DELIVERED： 未发货</li></ul>
     * @param string $ResourceId <p>资源 ID</p>
     * @param string $Currency <p>币种</p>
     * @param string $Price <p>订单价格</p>
     * @param string $CustomOrderId <p>自定义订单 ID</p>
     * @param string $ErrorCode <p>单个订单的查询错误码，查询成功时为空</p>
     * @param string $ErrorMessage <p>单个订单的查询错误信息，查询成功时为空</p>
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("CustomOrderId",$param) and $param["CustomOrderId"] !== null) {
            $this->CustomOrderId = $param["CustomOrderId"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
