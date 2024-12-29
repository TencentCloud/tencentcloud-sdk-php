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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参考价格，该价格为CPU、内存规格价格，不包括磁盘用量，实际价格以询价接口为准。
 *
 * @method integer getPrepaidPrice() 获取包年包月参考价格，单位-分
 * @method void setPrepaidPrice(integer $PrepaidPrice) 设置包年包月参考价格，单位-分
 * @method string getPrepaidPriceUnit() 获取包年包月价格单位，M-月
 * @method void setPrepaidPriceUnit(string $PrepaidPriceUnit) 设置包年包月价格单位，M-月
 * @method integer getPostpaidPrice() 获取按量付费价格，单位-分
 * @method void setPostpaidPrice(integer $PostpaidPrice) 设置按量付费价格，单位-分
 * @method string getPostpaidPriceUnit() 获取按量付费价格单位，H-小时
 * @method void setPostpaidPriceUnit(string $PostpaidPriceUnit) 设置按量付费价格单位，H-小时
 */
class Price extends AbstractModel
{
    /**
     * @var integer 包年包月参考价格，单位-分
     */
    public $PrepaidPrice;

    /**
     * @var string 包年包月价格单位，M-月
     */
    public $PrepaidPriceUnit;

    /**
     * @var integer 按量付费价格，单位-分
     */
    public $PostpaidPrice;

    /**
     * @var string 按量付费价格单位，H-小时
     */
    public $PostpaidPriceUnit;

    /**
     * @param integer $PrepaidPrice 包年包月参考价格，单位-分
     * @param string $PrepaidPriceUnit 包年包月价格单位，M-月
     * @param integer $PostpaidPrice 按量付费价格，单位-分
     * @param string $PostpaidPriceUnit 按量付费价格单位，H-小时
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
        if (array_key_exists("PrepaidPrice",$param) and $param["PrepaidPrice"] !== null) {
            $this->PrepaidPrice = $param["PrepaidPrice"];
        }

        if (array_key_exists("PrepaidPriceUnit",$param) and $param["PrepaidPriceUnit"] !== null) {
            $this->PrepaidPriceUnit = $param["PrepaidPriceUnit"];
        }

        if (array_key_exists("PostpaidPrice",$param) and $param["PostpaidPrice"] !== null) {
            $this->PostpaidPrice = $param["PostpaidPrice"];
        }

        if (array_key_exists("PostpaidPriceUnit",$param) and $param["PostpaidPriceUnit"] !== null) {
            $this->PostpaidPriceUnit = $param["PostpaidPriceUnit"];
        }
    }
}
