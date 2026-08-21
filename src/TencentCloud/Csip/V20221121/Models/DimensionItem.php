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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 维度扣分项
 *
 * @method string getDimensionId() 获取维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
protection_config：防护配置
 * @method void setDimensionId(string $DimensionId) 设置维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
protection_config：防护配置
 * @method string getDimensionName() 获取维度名称
 * @method void setDimensionName(string $DimensionName) 设置维度名称
 * @method integer getMaxDeductScore() 获取维度扣分上限
 * @method void setMaxDeductScore(integer $MaxDeductScore) 设置维度扣分上限
 * @method integer getDeductScore() 获取维度实际扣分
 * @method void setDeductScore(integer $DeductScore) 设置维度实际扣分
 * @method array getCategories() 获取子项列表
 * @method void setCategories(array $Categories) 设置子项列表
 */
class DimensionItem extends AbstractModel
{
    /**
     * @var string 维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
protection_config：防护配置
     */
    public $DimensionId;

    /**
     * @var string 维度名称
     */
    public $DimensionName;

    /**
     * @var integer 维度扣分上限
     */
    public $MaxDeductScore;

    /**
     * @var integer 维度实际扣分
     */
    public $DeductScore;

    /**
     * @var array 子项列表
     */
    public $Categories;

    /**
     * @param string $DimensionId 维度ID
枚举值：
risk_governance：风险治理
threat_detection：威胁检测
protection_config：防护配置
     * @param string $DimensionName 维度名称
     * @param integer $MaxDeductScore 维度扣分上限
     * @param integer $DeductScore 维度实际扣分
     * @param array $Categories 子项列表
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
        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("DimensionName",$param) and $param["DimensionName"] !== null) {
            $this->DimensionName = $param["DimensionName"];
        }

        if (array_key_exists("MaxDeductScore",$param) and $param["MaxDeductScore"] !== null) {
            $this->MaxDeductScore = $param["MaxDeductScore"];
        }

        if (array_key_exists("DeductScore",$param) and $param["DeductScore"] !== null) {
            $this->DeductScore = $param["DeductScore"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new CategoryItem();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }
    }
}
