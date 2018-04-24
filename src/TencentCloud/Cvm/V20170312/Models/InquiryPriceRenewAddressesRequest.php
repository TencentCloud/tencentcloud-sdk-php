<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAddressIds() 获取1
 * @method void setAddressIds(string $addressIds) 设置1
 * @method AddressChargePrepaid getAddressChargePrepaid() 获取1
 * @method void setAddressChargePrepaid(AddressChargePrepaid $addressChargePrepaid) 设置1
 * @method string getDealId() 获取1
 * @method void setDealId(string $dealId) 设置1
 * @method string getCurrentDeadline() 获取1
 * @method void setCurrentDeadline(string $currentDeadline) 设置1
 */

/**
 *InquiryPriceRenewAddresses请求参数结构体
 */
class InquiryPriceRenewAddressesRequest extends AbstractModel
{
    /**
     * @var string 1
     */
    public $addressIds;

    /**
     * @var AddressChargePrepaid 1
     */
    public $addressChargePrepaid;

    /**
     * @var string 1
     */
    public $dealId;

    /**
     * @var string 1
     */
    public $currentDeadline;
    /**
     * @param string $addressIds 1
     * @param AddressChargePrepaid $addressChargePrepaid 1
     * @param string $dealId 1
     * @param string $currentDeadline 1
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->addressIds = $param["AddressIds"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->addressChargePrepaid = new AddressChargePrepaid();
            $this->addressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }

        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->dealId = $param["DealId"];
        }

        if (array_key_exists("CurrentDeadline",$param) and $param["CurrentDeadline"] !== null) {
            $this->currentDeadline = $param["CurrentDeadline"];
        }
    }
}
