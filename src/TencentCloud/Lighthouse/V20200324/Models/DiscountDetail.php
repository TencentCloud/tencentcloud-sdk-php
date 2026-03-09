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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 套餐折扣详情（仅用于控制台调用询价相关接口返回）。
 *
 * @method integer getTimeSpan() 获取<p>计费时长。</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>计费时长。</p>
 * @method string getTimeUnit() 获取<p>时间单位。<br>取值为：</p><ul><li>m - 月</li><li>d - 日</li></ul>
 * @method void setTimeUnit(string $TimeUnit) 设置<p>时间单位。<br>取值为：</p><ul><li>m - 月</li><li>d - 日</li></ul>
 * @method float getTotalCost() 获取<p>总价。</p><p>单位：元</p>
 * @method void setTotalCost(float $TotalCost) 设置<p>总价。</p><p>单位：元</p>
 * @method float getRealTotalCost() 获取<p>折后总价。</p><p>单位：元</p>
 * @method void setRealTotalCost(float $RealTotalCost) 设置<p>折后总价。</p><p>单位：元</p>
 * @method float getDiscount() 获取<p>折扣。</p>
 * @method void setDiscount(float $Discount) 设置<p>折扣。</p>
 * @method PolicyDetail getPolicyDetail() 获取<p>具体折扣详情。</p>
 * @method void setPolicyDetail(PolicyDetail $PolicyDetail) 设置<p>具体折扣详情。</p>
 */
class DiscountDetail extends AbstractModel
{
    /**
     * @var integer <p>计费时长。</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>时间单位。<br>取值为：</p><ul><li>m - 月</li><li>d - 日</li></ul>
     */
    public $TimeUnit;

    /**
     * @var float <p>总价。</p><p>单位：元</p>
     */
    public $TotalCost;

    /**
     * @var float <p>折后总价。</p><p>单位：元</p>
     */
    public $RealTotalCost;

    /**
     * @var float <p>折扣。</p>
     */
    public $Discount;

    /**
     * @var PolicyDetail <p>具体折扣详情。</p>
     */
    public $PolicyDetail;

    /**
     * @param integer $TimeSpan <p>计费时长。</p>
     * @param string $TimeUnit <p>时间单位。<br>取值为：</p><ul><li>m - 月</li><li>d - 日</li></ul>
     * @param float $TotalCost <p>总价。</p><p>单位：元</p>
     * @param float $RealTotalCost <p>折后总价。</p><p>单位：元</p>
     * @param float $Discount <p>折扣。</p>
     * @param PolicyDetail $PolicyDetail <p>具体折扣详情。</p>
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
        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("PolicyDetail",$param) and $param["PolicyDetail"] !== null) {
            $this->PolicyDetail = new PolicyDetail();
            $this->PolicyDetail->deserialize($param["PolicyDetail"]);
        }
    }
}
