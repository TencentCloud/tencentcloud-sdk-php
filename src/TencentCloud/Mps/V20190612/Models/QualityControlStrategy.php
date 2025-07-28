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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体质检检测策略。
 *
 * @method string getStrategyType() 获取策略类型。取值：
- TimeSpotCheck
 * @method void setStrategyType(string $StrategyType) 设置策略类型。取值：
- TimeSpotCheck
 * @method TimeSpotCheck getTimeSpotCheck() 获取根据时间的抽检策略。
 * @method void setTimeSpotCheck(TimeSpotCheck $TimeSpotCheck) 设置根据时间的抽检策略。
 */
class QualityControlStrategy extends AbstractModel
{
    /**
     * @var string 策略类型。取值：
- TimeSpotCheck
     */
    public $StrategyType;

    /**
     * @var TimeSpotCheck 根据时间的抽检策略。
     */
    public $TimeSpotCheck;

    /**
     * @param string $StrategyType 策略类型。取值：
- TimeSpotCheck
     * @param TimeSpotCheck $TimeSpotCheck 根据时间的抽检策略。
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TimeSpotCheck",$param) and $param["TimeSpotCheck"] !== null) {
            $this->TimeSpotCheck = new TimeSpotCheck();
            $this->TimeSpotCheck->deserialize($param["TimeSpotCheck"]);
        }
    }
}
