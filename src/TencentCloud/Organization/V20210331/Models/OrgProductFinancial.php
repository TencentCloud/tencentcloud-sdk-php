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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组织产品财务信息
 *
 * @method string getProductName() 获取产品Code。
 * @method void setProductName(string $ProductName) 设置产品Code。
 * @method string getProductCode() 获取产品名。
 * @method void setProductCode(string $ProductCode) 设置产品名。
 * @method float getTotalCost() 获取产品消耗，单位：元。
 * @method void setTotalCost(float $TotalCost) 设置产品消耗，单位：元。
 * @method string getRatio() 获取占比%。
 * @method void setRatio(string $Ratio) 设置占比%。
 */
class OrgProductFinancial extends AbstractModel
{
    /**
     * @var string 产品Code。
     */
    public $ProductName;

    /**
     * @var string 产品名。
     */
    public $ProductCode;

    /**
     * @var float 产品消耗，单位：元。
     */
    public $TotalCost;

    /**
     * @var string 占比%。
     */
    public $Ratio;

    /**
     * @param string $ProductName 产品Code。
     * @param string $ProductCode 产品名。
     * @param float $TotalCost 产品消耗，单位：元。
     * @param string $Ratio 占比%。
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }
    }
}
