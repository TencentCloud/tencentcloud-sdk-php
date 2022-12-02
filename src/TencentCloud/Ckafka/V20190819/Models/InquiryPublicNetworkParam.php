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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网带宽参数
 *
 * @method string getPublicNetworkChargeType() 获取公网计费模式: BANDWIDTH_PREPAID(包年包月), BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时计费)
 * @method void setPublicNetworkChargeType(string $PublicNetworkChargeType) 设置公网计费模式: BANDWIDTH_PREPAID(包年包月), BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时计费)
 * @method integer getPublicNetworkMonthly() 获取公网带宽, 单位MB
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) 设置公网带宽, 单位MB
 */
class InquiryPublicNetworkParam extends AbstractModel
{
    /**
     * @var string 公网计费模式: BANDWIDTH_PREPAID(包年包月), BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时计费)
     */
    public $PublicNetworkChargeType;

    /**
     * @var integer 公网带宽, 单位MB
     */
    public $PublicNetworkMonthly;

    /**
     * @param string $PublicNetworkChargeType 公网计费模式: BANDWIDTH_PREPAID(包年包月), BANDWIDTH_POSTPAID_BY_HOUR(带宽按小时计费)
     * @param integer $PublicNetworkMonthly 公网带宽, 单位MB
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
        if (array_key_exists("PublicNetworkChargeType",$param) and $param["PublicNetworkChargeType"] !== null) {
            $this->PublicNetworkChargeType = $param["PublicNetworkChargeType"];
        }

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }
    }
}
