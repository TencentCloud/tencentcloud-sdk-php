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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分段计费区间信息
 *
 * @method string getCardType() 获取卡类型，银联产品使用 
DEBIT：借记卡 
CREDIT：贷记卡
 * @method void setCardType(string $CardType) 设置卡类型，银联产品使用 
DEBIT：借记卡 
CREDIT：贷记卡
 * @method integer getRangeStartValue() 获取区间起始金额，单位（分）
 * @method void setRangeStartValue(integer $RangeStartValue) 设置区间起始金额，单位（分）
 * @method integer getRangeEndValue() 获取区间结束金额，单位（分）
 * @method void setRangeEndValue(integer $RangeEndValue) 设置区间结束金额，单位（分）
 * @method string getRangeFeeMode() 获取分段计费模式 
SINGLE：按金额计费 
RATIO：按费率计费
 * @method void setRangeFeeMode(string $RangeFeeMode) 设置分段计费模式 
SINGLE：按金额计费 
RATIO：按费率计费
 * @method integer getFeeValue() 获取费用值，单位（0.01%或分）
 * @method void setFeeValue(integer $FeeValue) 设置费用值，单位（0.01%或分）
 * @method integer getMinFee() 获取最低收费金额，单位（分）
 * @method void setMinFee(integer $MinFee) 设置最低收费金额，单位（分）
 * @method integer getMaxFee() 获取最高收费金额，单位（分）
 * @method void setMaxFee(integer $MaxFee) 设置最高收费金额，单位（分）
 */
class FeeRangInfo extends AbstractModel
{
    /**
     * @var string 卡类型，银联产品使用 
DEBIT：借记卡 
CREDIT：贷记卡
     */
    public $CardType;

    /**
     * @var integer 区间起始金额，单位（分）
     */
    public $RangeStartValue;

    /**
     * @var integer 区间结束金额，单位（分）
     */
    public $RangeEndValue;

    /**
     * @var string 分段计费模式 
SINGLE：按金额计费 
RATIO：按费率计费
     */
    public $RangeFeeMode;

    /**
     * @var integer 费用值，单位（0.01%或分）
     */
    public $FeeValue;

    /**
     * @var integer 最低收费金额，单位（分）
     */
    public $MinFee;

    /**
     * @var integer 最高收费金额，单位（分）
     */
    public $MaxFee;

    /**
     * @param string $CardType 卡类型，银联产品使用 
DEBIT：借记卡 
CREDIT：贷记卡
     * @param integer $RangeStartValue 区间起始金额，单位（分）
     * @param integer $RangeEndValue 区间结束金额，单位（分）
     * @param string $RangeFeeMode 分段计费模式 
SINGLE：按金额计费 
RATIO：按费率计费
     * @param integer $FeeValue 费用值，单位（0.01%或分）
     * @param integer $MinFee 最低收费金额，单位（分）
     * @param integer $MaxFee 最高收费金额，单位（分）
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
        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("RangeStartValue",$param) and $param["RangeStartValue"] !== null) {
            $this->RangeStartValue = $param["RangeStartValue"];
        }

        if (array_key_exists("RangeEndValue",$param) and $param["RangeEndValue"] !== null) {
            $this->RangeEndValue = $param["RangeEndValue"];
        }

        if (array_key_exists("RangeFeeMode",$param) and $param["RangeFeeMode"] !== null) {
            $this->RangeFeeMode = $param["RangeFeeMode"];
        }

        if (array_key_exists("FeeValue",$param) and $param["FeeValue"] !== null) {
            $this->FeeValue = $param["FeeValue"];
        }

        if (array_key_exists("MinFee",$param) and $param["MinFee"] !== null) {
            $this->MinFee = $param["MinFee"];
        }

        if (array_key_exists("MaxFee",$param) and $param["MaxFee"] !== null) {
            $this->MaxFee = $param["MaxFee"];
        }
    }
}
