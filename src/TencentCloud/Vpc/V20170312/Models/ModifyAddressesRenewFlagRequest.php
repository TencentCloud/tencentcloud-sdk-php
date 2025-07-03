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
 * ModifyAddressesRenewFlag请求参数结构体
 *
 * @method array getAddressIds() 获取EIP唯一标识ID列表，形如'eip-xxxx'，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method void setAddressIds(array $AddressIds) 设置EIP唯一标识ID列表，形如'eip-xxxx'，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
 * @method string getRenewFlag() 获取自动续费标识。取值范围： NOTIFY_AND_AUTO_RENEW：通知过期且自动续费 NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。 示例值：NOTIFY_AND_AUTO_RENEW
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围： NOTIFY_AND_AUTO_RENEW：通知过期且自动续费 NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。 示例值：NOTIFY_AND_AUTO_RENEW
 */
class ModifyAddressesRenewFlagRequest extends AbstractModel
{
    /**
     * @var array EIP唯一标识ID列表，形如'eip-xxxx'，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     */
    public $AddressIds;

    /**
     * @var string 自动续费标识。取值范围： NOTIFY_AND_AUTO_RENEW：通知过期且自动续费 NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。 示例值：NOTIFY_AND_AUTO_RENEW
     */
    public $RenewFlag;

    /**
     * @param array $AddressIds EIP唯一标识ID列表，形如'eip-xxxx'，可以使用[DescribeAddresses](https://cloud.tencent.com/document/product/215/16702)接口获取AddressId。
     * @param string $RenewFlag 自动续费标识。取值范围： NOTIFY_AND_AUTO_RENEW：通知过期且自动续费 NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费 DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费  若该参数指定为NOTIFY_AND_AUTO_RENEW，在账户余额充足的情况下，实例到期后将按月自动续费。 示例值：NOTIFY_AND_AUTO_RENEW
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
