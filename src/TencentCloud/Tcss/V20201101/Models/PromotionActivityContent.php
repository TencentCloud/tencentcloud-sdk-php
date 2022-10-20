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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 促销活动内容
 *
 * @method integer getMonthNum() 获取月数
 * @method void setMonthNum(integer $MonthNum) 设置月数
 * @method integer getCoresCountLimit() 获取核数最低限量
 * @method void setCoresCountLimit(integer $CoresCountLimit) 设置核数最低限量
 * @method integer getProfessionalDiscount() 获取专业版折扣
 * @method void setProfessionalDiscount(integer $ProfessionalDiscount) 设置专业版折扣
 * @method integer getImageAuthorizationNum() 获取附赠镜像数
 * @method void setImageAuthorizationNum(integer $ImageAuthorizationNum) 设置附赠镜像数
 */
class PromotionActivityContent extends AbstractModel
{
    /**
     * @var integer 月数
     */
    public $MonthNum;

    /**
     * @var integer 核数最低限量
     */
    public $CoresCountLimit;

    /**
     * @var integer 专业版折扣
     */
    public $ProfessionalDiscount;

    /**
     * @var integer 附赠镜像数
     */
    public $ImageAuthorizationNum;

    /**
     * @param integer $MonthNum 月数
     * @param integer $CoresCountLimit 核数最低限量
     * @param integer $ProfessionalDiscount 专业版折扣
     * @param integer $ImageAuthorizationNum 附赠镜像数
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
        if (array_key_exists("MonthNum",$param) and $param["MonthNum"] !== null) {
            $this->MonthNum = $param["MonthNum"];
        }

        if (array_key_exists("CoresCountLimit",$param) and $param["CoresCountLimit"] !== null) {
            $this->CoresCountLimit = $param["CoresCountLimit"];
        }

        if (array_key_exists("ProfessionalDiscount",$param) and $param["ProfessionalDiscount"] !== null) {
            $this->ProfessionalDiscount = $param["ProfessionalDiscount"];
        }

        if (array_key_exists("ImageAuthorizationNum",$param) and $param["ImageAuthorizationNum"] !== null) {
            $this->ImageAuthorizationNum = $param["ImageAuthorizationNum"];
        }
    }
}
