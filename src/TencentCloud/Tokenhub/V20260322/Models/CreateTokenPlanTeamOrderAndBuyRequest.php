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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTokenPlanTeamOrderAndBuy请求参数结构体
 *
 * @method string getProductType() 获取套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。
 * @method void setProductType(string $ProductType) 设置套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。
 * @method string getTeamName() 获取套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符
 * @method void setTeamName(string $TeamName) 设置套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符
 * @method integer getTimeSpan() 获取购买时长。单位：月。必须大于 0。
 * @method void setTimeSpan(integer $TimeSpan) 设置购买时长。单位：月。必须大于 0。
 * @method integer getCreditOrToken() 获取购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。
 * @method void setCreditOrToken(integer $CreditOrToken) 设置购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。
 * @method boolean getEnableAutoRenew() 获取是否开启自动续费。默认不开启。
 * @method void setEnableAutoRenew(boolean $EnableAutoRenew) 设置是否开启自动续费。默认不开启。
 */
class CreateTokenPlanTeamOrderAndBuyRequest extends AbstractModel
{
    /**
     * @var string 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。
     */
    public $ProductType;

    /**
     * @var string 套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符
     */
    public $TeamName;

    /**
     * @var integer 购买时长。单位：月。必须大于 0。
     */
    public $TimeSpan;

    /**
     * @var integer 购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。
     */
    public $CreditOrToken;

    /**
     * @var boolean 是否开启自动续费。默认不开启。
     */
    public $EnableAutoRenew;

    /**
     * @param string $ProductType 套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。
     * @param string $TeamName 套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符
     * @param integer $TimeSpan 购买时长。单位：月。必须大于 0。
     * @param integer $CreditOrToken 购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。
     * @param boolean $EnableAutoRenew 是否开启自动续费。默认不开启。
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
        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("TeamName",$param) and $param["TeamName"] !== null) {
            $this->TeamName = $param["TeamName"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("CreditOrToken",$param) and $param["CreditOrToken"] !== null) {
            $this->CreditOrToken = $param["CreditOrToken"];
        }

        if (array_key_exists("EnableAutoRenew",$param) and $param["EnableAutoRenew"] !== null) {
            $this->EnableAutoRenew = $param["EnableAutoRenew"];
        }
    }
}
