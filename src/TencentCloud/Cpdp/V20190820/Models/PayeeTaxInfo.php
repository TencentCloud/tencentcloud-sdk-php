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
 * 计税信息
 *
 * @method array getTaxTemplateInfoList() 获取计税模板列表
 * @method void setTaxTemplateInfoList(array $TaxTemplateInfoList) 设置计税模板列表
 * @method string getTaxpayerIdNo() 获取纳税人识别号
 * @method void setTaxpayerIdNo(string $TaxpayerIdNo) 设置纳税人识别号
 * @method string getTaxEntityType() 获取纳税主体类型
NATURAL:自然人
NON_NATURAL:非自然人
 * @method void setTaxEntityType(string $TaxEntityType) 设置纳税主体类型
NATURAL:自然人
NON_NATURAL:非自然人
 * @method string getTaxServiceProviderId() 获取财税服务商ID
 * @method void setTaxServiceProviderId(string $TaxServiceProviderId) 设置财税服务商ID
 */
class PayeeTaxInfo extends AbstractModel
{
    /**
     * @var array 计税模板列表
     */
    public $TaxTemplateInfoList;

    /**
     * @var string 纳税人识别号
     */
    public $TaxpayerIdNo;

    /**
     * @var string 纳税主体类型
NATURAL:自然人
NON_NATURAL:非自然人
     */
    public $TaxEntityType;

    /**
     * @var string 财税服务商ID
     */
    public $TaxServiceProviderId;

    /**
     * @param array $TaxTemplateInfoList 计税模板列表
     * @param string $TaxpayerIdNo 纳税人识别号
     * @param string $TaxEntityType 纳税主体类型
NATURAL:自然人
NON_NATURAL:非自然人
     * @param string $TaxServiceProviderId 财税服务商ID
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
        if (array_key_exists("TaxTemplateInfoList",$param) and $param["TaxTemplateInfoList"] !== null) {
            $this->TaxTemplateInfoList = [];
            foreach ($param["TaxTemplateInfoList"] as $key => $value){
                $obj = new PayeeTaxTemplateInfo();
                $obj->deserialize($value);
                array_push($this->TaxTemplateInfoList, $obj);
            }
        }

        if (array_key_exists("TaxpayerIdNo",$param) and $param["TaxpayerIdNo"] !== null) {
            $this->TaxpayerIdNo = $param["TaxpayerIdNo"];
        }

        if (array_key_exists("TaxEntityType",$param) and $param["TaxEntityType"] !== null) {
            $this->TaxEntityType = $param["TaxEntityType"];
        }

        if (array_key_exists("TaxServiceProviderId",$param) and $param["TaxServiceProviderId"] !== null) {
            $this->TaxServiceProviderId = $param["TaxServiceProviderId"];
        }
    }
}
