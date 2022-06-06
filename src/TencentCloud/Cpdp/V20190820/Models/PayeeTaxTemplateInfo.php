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
 * 收款用户计税模板信息
 *
 * @method string getIncomeType() 获取收入类型
LABOR: 劳务所得
OCCASION: 偶然所得
 * @method void setIncomeType(string $IncomeType) 设置收入类型
LABOR: 劳务所得
OCCASION: 偶然所得
 * @method string getTaxTemplateId() 获取计税模板ID
 * @method void setTaxTemplateId(string $TaxTemplateId) 设置计税模板ID
 */
class PayeeTaxTemplateInfo extends AbstractModel
{
    /**
     * @var string 收入类型
LABOR: 劳务所得
OCCASION: 偶然所得
     */
    public $IncomeType;

    /**
     * @var string 计税模板ID
     */
    public $TaxTemplateId;

    /**
     * @param string $IncomeType 收入类型
LABOR: 劳务所得
OCCASION: 偶然所得
     * @param string $TaxTemplateId 计税模板ID
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
        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("TaxTemplateId",$param) and $param["TaxTemplateId"] !== null) {
            $this->TaxTemplateId = $param["TaxTemplateId"];
        }
    }
}
