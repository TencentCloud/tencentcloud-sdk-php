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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewAddresses请求参数结构体
 *
 * @method array getAddressIds() 获取续费资源实例ID。
 * @method void setAddressIds(array $AddressIds) 设置续费资源实例ID。
 * @method AddressChargePrepaid getAddressChargePrepaid() 获取包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递。
 * @method void setAddressChargePrepaid(AddressChargePrepaid $AddressChargePrepaid) 设置包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递。
 */
class InquiryPriceRenewAddressesRequest extends AbstractModel
{
    /**
     * @var array 续费资源实例ID。
     */
    public $AddressIds;

    /**
     * @var AddressChargePrepaid 包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递。
     */
    public $AddressChargePrepaid;

    /**
     * @param array $AddressIds 续费资源实例ID。
     * @param AddressChargePrepaid $AddressChargePrepaid 包月按带宽预付费EIP的计费参数。EIP为包月按带宽预付费时，该参数必传，其余场景不需传递。
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
        if (array_key_exists("AddressIds",$param) and $param["AddressIds"] !== null) {
            $this->AddressIds = $param["AddressIds"];
        }

        if (array_key_exists("AddressChargePrepaid",$param) and $param["AddressChargePrepaid"] !== null) {
            $this->AddressChargePrepaid = new AddressChargePrepaid();
            $this->AddressChargePrepaid->deserialize($param["AddressChargePrepaid"]);
        }
    }
}
