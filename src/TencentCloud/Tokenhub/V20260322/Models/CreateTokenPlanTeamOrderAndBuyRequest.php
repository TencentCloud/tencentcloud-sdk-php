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
 * @method string getProductType() 获取<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
 * @method void setProductType(string $ProductType) 设置<p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
 * @method string getTeamName() 获取<p>套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符</p>
 * @method void setTeamName(string $TeamName) 设置<p>套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符</p>
 * @method integer getTimeSpan() 获取<p>购买时长。单位：月。必须大于 0，支持1个月～12个月。</p>
 * @method void setTimeSpan(integer $TimeSpan) 设置<p>购买时长。单位：月。必须大于 0，支持1个月～12个月。</p>
 * @method integer getCreditOrToken() 获取<p>购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。</p>
 * @method void setCreditOrToken(integer $CreditOrToken) 设置<p>购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。</p>
 * @method boolean getEnableAutoRenew() 获取<p>是否开启自动续费。默认不开启。</p>
 * @method void setEnableAutoRenew(boolean $EnableAutoRenew) 设置<p>是否开启自动续费。默认不开启。</p>
 * @method string getTeamId() 获取<p>已有套餐 ID（非空时走过期续费，空时走新购）</p>
 * @method void setTeamId(string $TeamId) 设置<p>已有套餐 ID（非空时走过期续费，空时走新购）</p>
 */
class CreateTokenPlanTeamOrderAndBuyRequest extends AbstractModel
{
    /**
     * @var string <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
     */
    public $ProductType;

    /**
     * @var string <p>套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符</p>
     */
    public $TeamName;

    /**
     * @var integer <p>购买时长。单位：月。必须大于 0，支持1个月～12个月。</p>
     */
    public $TimeSpan;

    /**
     * @var integer <p>购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。</p>
     */
    public $CreditOrToken;

    /**
     * @var boolean <p>是否开启自动续费。默认不开启。</p>
     */
    public $EnableAutoRenew;

    /**
     * @var string <p>已有套餐 ID（非空时走过期续费，空时走新购）</p>
     */
    public $TeamId;

    /**
     * @param string $ProductType <p>套餐类型。取值：enterprise（企业版专业套餐）、enterprise-auto（企业版轻享套餐）。</p>
     * @param string $TeamName <p>套餐名称。只能包含中文、字母、数字、下划线、连字符，以中文或者字母开头，以中文或字母或数字结尾，2~50个字符</p>
     * @param integer $TimeSpan <p>购买时长。单位：月。必须大于 0，支持1个月～12个月。</p>
     * @param integer $CreditOrToken <p>购买的套餐规格。套餐类型为专业套餐（enterprise），单位取值为积分；轻享套餐（enterprise-auto），单位取值为 tokens。</p>
     * @param boolean $EnableAutoRenew <p>是否开启自动续费。默认不开启。</p>
     * @param string $TeamId <p>已有套餐 ID（非空时走过期续费，空时走新购）</p>
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

        if (array_key_exists("TeamId",$param) and $param["TeamId"] !== null) {
            $this->TeamId = $param["TeamId"];
        }
    }
}
