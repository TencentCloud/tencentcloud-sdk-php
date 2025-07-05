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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 默认策略基础信息
 *
 * @method string getStrategyName() 获取策略名
 * @method void setStrategyName(string $StrategyName) 设置策略名
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 */
class DefaultStrategyInfo extends AbstractModel
{
    /**
     * @var string 策略名
     */
    public $StrategyName;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @param string $StrategyName 策略名
     * @param integer $StrategyId 策略id
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
        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }
    }
}
