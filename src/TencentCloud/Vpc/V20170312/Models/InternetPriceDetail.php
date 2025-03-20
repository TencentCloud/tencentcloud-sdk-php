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
 * 公网IP询价出参
 *
 * @method float getUnitPrice() 获取付费单价，单位：元，仅后付费价格查询返回。
 * @method void setUnitPrice(float $UnitPrice) 设置付费单价，单位：元，仅后付费价格查询返回。
 * @method float getDiscountPrice() 获取折扣后的价格，单位：元。
 * @method void setDiscountPrice(float $DiscountPrice) 设置折扣后的价格，单位：元。
 * @method string getChargeUnit() 获取计价单元，可取值范围：<ul> <li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）。</li></ul>
 * @method void setChargeUnit(string $ChargeUnit) 设置计价单元，可取值范围：<ul> <li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）。</li></ul>
 * @method float getOriginalPrice() 获取原价，单位：元，仅预付费价格查询返回。
 * @method void setOriginalPrice(float $OriginalPrice) 设置原价，单位：元，仅预付费价格查询返回。
 */
class InternetPriceDetail extends AbstractModel
{
    /**
     * @var float 付费单价，单位：元，仅后付费价格查询返回。
     */
    public $UnitPrice;

    /**
     * @var float 折扣后的价格，单位：元。
     */
    public $DiscountPrice;

    /**
     * @var string 计价单元，可取值范围：<ul> <li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）。</li></ul>
     */
    public $ChargeUnit;

    /**
     * @var float 原价，单位：元，仅预付费价格查询返回。
     */
    public $OriginalPrice;

    /**
     * @param float $UnitPrice 付费单价，单位：元，仅后付费价格查询返回。
     * @param float $DiscountPrice 折扣后的价格，单位：元。
     * @param string $ChargeUnit 计价单元，可取值范围：<ul> <li>HOUR：表示计价单元是按每小时来计算。当前涉及该计价单元的场景有：流量按小时后付费（TRAFFIC_POSTPAID_BY_HOUR）、带宽按小时后付费（BANDWIDTH_POSTPAID_BY_HOUR）。</li></ul>
     * @param float $OriginalPrice 原价，单位：元，仅预付费价格查询返回。
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }
    }
}
