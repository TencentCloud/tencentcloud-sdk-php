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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翼扬诊断小程序的诊断报告风险数据
 *
 * @method integer getRiskItem1Score() 获取代码防护(基础诊断)
 * @method void setRiskItem1Score(integer $RiskItem1Score) 设置代码防护(基础诊断)
 * @method integer getRiskItem2Score() 获取开发测试信息泄露(基础诊断)
 * @method void setRiskItem2Score(integer $RiskItem2Score) 设置开发测试信息泄露(基础诊断)
 * @method integer getRiskItem3Score() 获取编码规范(基础诊断)
 * @method void setRiskItem3Score(integer $RiskItem3Score) 设置编码规范(基础诊断)
 * @method integer getRiskItem4Score() 获取配置风险(基础诊断)
 * @method void setRiskItem4Score(integer $RiskItem4Score) 设置配置风险(基础诊断)
 * @method integer getRiskItem5Score() 获取账号安全(基础诊断)
 * @method void setRiskItem5Score(integer $RiskItem5Score) 设置账号安全(基础诊断)
 * @method integer getRiskItem6Score() 获取用户信息安全(基础诊断)
 * @method void setRiskItem6Score(integer $RiskItem6Score) 设置用户信息安全(基础诊断)
 * @method integer getRiskItem7Score() 获取内部信息泄露(基础诊断)
 * @method void setRiskItem7Score(integer $RiskItem7Score) 设置内部信息泄露(基础诊断)
 * @method integer getRiskItem8Score() 获取其他安全(基础诊断)
 * @method void setRiskItem8Score(integer $RiskItem8Score) 设置其他安全(基础诊断)
 */
class FlySecMiniAppRiskItems extends AbstractModel
{
    /**
     * @var integer 代码防护(基础诊断)
     */
    public $RiskItem1Score;

    /**
     * @var integer 开发测试信息泄露(基础诊断)
     */
    public $RiskItem2Score;

    /**
     * @var integer 编码规范(基础诊断)
     */
    public $RiskItem3Score;

    /**
     * @var integer 配置风险(基础诊断)
     */
    public $RiskItem4Score;

    /**
     * @var integer 账号安全(基础诊断)
     */
    public $RiskItem5Score;

    /**
     * @var integer 用户信息安全(基础诊断)
     */
    public $RiskItem6Score;

    /**
     * @var integer 内部信息泄露(基础诊断)
     */
    public $RiskItem7Score;

    /**
     * @var integer 其他安全(基础诊断)
     */
    public $RiskItem8Score;

    /**
     * @param integer $RiskItem1Score 代码防护(基础诊断)
     * @param integer $RiskItem2Score 开发测试信息泄露(基础诊断)
     * @param integer $RiskItem3Score 编码规范(基础诊断)
     * @param integer $RiskItem4Score 配置风险(基础诊断)
     * @param integer $RiskItem5Score 账号安全(基础诊断)
     * @param integer $RiskItem6Score 用户信息安全(基础诊断)
     * @param integer $RiskItem7Score 内部信息泄露(基础诊断)
     * @param integer $RiskItem8Score 其他安全(基础诊断)
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
        if (array_key_exists("RiskItem1Score",$param) and $param["RiskItem1Score"] !== null) {
            $this->RiskItem1Score = $param["RiskItem1Score"];
        }

        if (array_key_exists("RiskItem2Score",$param) and $param["RiskItem2Score"] !== null) {
            $this->RiskItem2Score = $param["RiskItem2Score"];
        }

        if (array_key_exists("RiskItem3Score",$param) and $param["RiskItem3Score"] !== null) {
            $this->RiskItem3Score = $param["RiskItem3Score"];
        }

        if (array_key_exists("RiskItem4Score",$param) and $param["RiskItem4Score"] !== null) {
            $this->RiskItem4Score = $param["RiskItem4Score"];
        }

        if (array_key_exists("RiskItem5Score",$param) and $param["RiskItem5Score"] !== null) {
            $this->RiskItem5Score = $param["RiskItem5Score"];
        }

        if (array_key_exists("RiskItem6Score",$param) and $param["RiskItem6Score"] !== null) {
            $this->RiskItem6Score = $param["RiskItem6Score"];
        }

        if (array_key_exists("RiskItem7Score",$param) and $param["RiskItem7Score"] !== null) {
            $this->RiskItem7Score = $param["RiskItem7Score"];
        }

        if (array_key_exists("RiskItem8Score",$param) and $param["RiskItem8Score"] !== null) {
            $this->RiskItem8Score = $param["RiskItem8Score"];
        }
    }
}
