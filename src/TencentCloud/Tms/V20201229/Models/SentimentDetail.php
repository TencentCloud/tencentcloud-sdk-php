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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 情感分析明细
 *
 * @method integer getPositive() 获取正向分数，取值范围0到100
 * @method void setPositive(integer $Positive) 设置正向分数，取值范围0到100
 * @method integer getNegative() 获取负向分数，取值范围0到100
 * @method void setNegative(integer $Negative) 设置负向分数，取值范围0到100
 */
class SentimentDetail extends AbstractModel
{
    /**
     * @var integer 正向分数，取值范围0到100
     */
    public $Positive;

    /**
     * @var integer 负向分数，取值范围0到100
     */
    public $Negative;

    /**
     * @param integer $Positive 正向分数，取值范围0到100
     * @param integer $Negative 负向分数，取值范围0到100
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
        if (array_key_exists("Positive",$param) and $param["Positive"] !== null) {
            $this->Positive = $param["Positive"];
        }

        if (array_key_exists("Negative",$param) and $param["Negative"] !== null) {
            $this->Negative = $param["Negative"];
        }
    }
}
