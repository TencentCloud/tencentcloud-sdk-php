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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务元数据信息，如服务名
 *
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getServiceChargeType() 获取<p>付费方式：POSTPAID_BY_HOUR 按量后付费，PREPAID_BY_MONTH 包年包月，SPOT 竞价售卖（竞价需先调用 BidSpotInferService 对套餐出价）</p>
 * @method void setServiceChargeType(string $ServiceChargeType) 设置<p>付费方式：POSTPAID_BY_HOUR 按量后付费，PREPAID_BY_MONTH 包年包月，SPOT 竞价售卖（竞价需先调用 BidSpotInferService 对套餐出价）</p>
 */
class ServiceMetaData extends AbstractModel
{
    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string <p>付费方式：POSTPAID_BY_HOUR 按量后付费，PREPAID_BY_MONTH 包年包月，SPOT 竞价售卖（竞价需先调用 BidSpotInferService 对套餐出价）</p>
     */
    public $ServiceChargeType;

    /**
     * @param string $ServiceName 服务名称
     * @param string $ServiceChargeType <p>付费方式：POSTPAID_BY_HOUR 按量后付费，PREPAID_BY_MONTH 包年包月，SPOT 竞价售卖（竞价需先调用 BidSpotInferService 对套餐出价）</p>
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceChargeType",$param) and $param["ServiceChargeType"] !== null) {
            $this->ServiceChargeType = $param["ServiceChargeType"];
        }
    }
}
