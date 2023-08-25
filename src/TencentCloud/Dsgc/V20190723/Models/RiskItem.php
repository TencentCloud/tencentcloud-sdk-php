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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 风险TOP5统计项
 *
 * @method string getItemName() 获取名称
 * @method void setItemName(string $ItemName) 设置名称
 * @method integer getRiskNum() 获取风险数量
 * @method void setRiskNum(integer $RiskNum) 设置风险数量
 */
class RiskItem extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $ItemName;

    /**
     * @var integer 风险数量
     */
    public $RiskNum;

    /**
     * @param string $ItemName 名称
     * @param integer $RiskNum 风险数量
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
        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("RiskNum",$param) and $param["RiskNum"] !== null) {
            $this->RiskNum = $param["RiskNum"];
        }
    }
}
