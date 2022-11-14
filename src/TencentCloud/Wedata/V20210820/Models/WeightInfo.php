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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权重信息
 *
 * @method integer getWeight() 获取权重
 * @method void setWeight(integer $Weight) 设置权重
 * @method integer getQualityDim() 获取维度类型 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 * @method void setQualityDim(integer $QualityDim) 设置维度类型 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
 */
class WeightInfo extends AbstractModel
{
    /**
     * @var integer 权重
     */
    public $Weight;

    /**
     * @var integer 维度类型 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
     */
    public $QualityDim;

    /**
     * @param integer $Weight 权重
     * @param integer $QualityDim 维度类型 1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }
    }
}
