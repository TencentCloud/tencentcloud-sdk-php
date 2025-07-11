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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RefundStorageService请求参数结构体
 *
 * @method string getServiceId() 获取云存服务ID
 * @method void setServiceId(string $ServiceId) 设置云存服务ID
 * @method string getOrderId() 获取云存子订单ID。如果指定子订单ID,则仅退订该子订单，如果未指定子定单ID，则退订所有子订单
 * @method void setOrderId(string $OrderId) 设置云存子订单ID。如果指定子订单ID,则仅退订该子订单，如果未指定子定单ID，则退订所有子订单
 */
class RefundStorageServiceRequest extends AbstractModel
{
    /**
     * @var string 云存服务ID
     */
    public $ServiceId;

    /**
     * @var string 云存子订单ID。如果指定子订单ID,则仅退订该子订单，如果未指定子定单ID，则退订所有子订单
     */
    public $OrderId;

    /**
     * @param string $ServiceId 云存服务ID
     * @param string $OrderId 云存子订单ID。如果指定子订单ID,则仅退订该子订单，如果未指定子定单ID，则退订所有子订单
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }
    }
}
