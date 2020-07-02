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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDCDBRenewalPrice返回参数结构体
 *
 * @method integer getOriginalPrice() 获取原价，单位：分
 * @method void setOriginalPrice(integer $OriginalPrice) 设置原价，单位：分
 * @method integer getPrice() 获取实际价格，单位：分。受折扣等影响，可能和原价不同。
 * @method void setPrice(integer $Price) 设置实际价格，单位：分。受折扣等影响，可能和原价不同。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDCDBRenewalPriceResponse extends AbstractModel
{
    /**
     * @var integer 原价，单位：分
     */
    public $OriginalPrice;

    /**
     * @var integer 实际价格，单位：分。受折扣等影响，可能和原价不同。
     */
    public $Price;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $OriginalPrice 原价，单位：分
     * @param integer $Price 实际价格，单位：分。受折扣等影响，可能和原价不同。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('OriginalPrice',$param) and $param['OriginalPrice'] !== null) {
            $this->OriginalPrice = $param['OriginalPrice'];
        }

        if (array_key_exists('Price',$param) and $param['Price'] !== null) {
            $this->Price = $param['Price'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
