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
 * 模型体验包信息
 *
 * @method integer getRecommendWeight() 获取推荐顺序，值越小排序越靠前。为空表示使用模型默认权重。
 * @method void setRecommendWeight(integer $RecommendWeight) 设置推荐顺序，值越小排序越靠前。为空表示使用模型默认权重。
 * @method integer getCapacitySize() 获取体验包容量大小。
 * @method void setCapacitySize(integer $CapacitySize) 设置体验包容量大小。
 * @method string getUnit() 获取容量单位。取值：token。
 * @method void setUnit(string $Unit) 设置容量单位。取值：token。
 * @method integer getValidityDays() 获取有效期天数（如90天）。为空表示不限期。
 * @method void setValidityDays(integer $ValidityDays) 设置有效期天数（如90天）。为空表示不限期。
 */
class ModelFreeTrialInfo extends AbstractModel
{
    /**
     * @var integer 推荐顺序，值越小排序越靠前。为空表示使用模型默认权重。
     */
    public $RecommendWeight;

    /**
     * @var integer 体验包容量大小。
     */
    public $CapacitySize;

    /**
     * @var string 容量单位。取值：token。
     */
    public $Unit;

    /**
     * @var integer 有效期天数（如90天）。为空表示不限期。
     */
    public $ValidityDays;

    /**
     * @param integer $RecommendWeight 推荐顺序，值越小排序越靠前。为空表示使用模型默认权重。
     * @param integer $CapacitySize 体验包容量大小。
     * @param string $Unit 容量单位。取值：token。
     * @param integer $ValidityDays 有效期天数（如90天）。为空表示不限期。
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
        if (array_key_exists("RecommendWeight",$param) and $param["RecommendWeight"] !== null) {
            $this->RecommendWeight = $param["RecommendWeight"];
        }

        if (array_key_exists("CapacitySize",$param) and $param["CapacitySize"] !== null) {
            $this->CapacitySize = $param["CapacitySize"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("ValidityDays",$param) and $param["ValidityDays"] !== null) {
            $this->ValidityDays = $param["ValidityDays"];
        }
    }
}
