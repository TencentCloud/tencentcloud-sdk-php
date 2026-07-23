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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音画质检测策略信息。
 *
 * @method string getStrategyType() 获取<p>策略类型。</p><p>枚举值：</p><ul><li>TimeSpotCheck： 根据时间的抽检策略。</li></ul>
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型。</p><p>枚举值：</p><ul><li>TimeSpotCheck： 根据时间的抽检策略。</li></ul>
 * @method QualityInspectTimeSpotCheck getTimeSpotCheck() 获取<p>根据时间的抽检策略参数，当 StrategyType 为 TimeSpotCheck 时有效。</p>
 * @method void setTimeSpotCheck(QualityInspectTimeSpotCheck $TimeSpotCheck) 设置<p>根据时间的抽检策略参数，当 StrategyType 为 TimeSpotCheck 时有效。</p>
 */
class QualityInspectStrategy extends AbstractModel
{
    /**
     * @var string <p>策略类型。</p><p>枚举值：</p><ul><li>TimeSpotCheck： 根据时间的抽检策略。</li></ul>
     */
    public $StrategyType;

    /**
     * @var QualityInspectTimeSpotCheck <p>根据时间的抽检策略参数，当 StrategyType 为 TimeSpotCheck 时有效。</p>
     */
    public $TimeSpotCheck;

    /**
     * @param string $StrategyType <p>策略类型。</p><p>枚举值：</p><ul><li>TimeSpotCheck： 根据时间的抽检策略。</li></ul>
     * @param QualityInspectTimeSpotCheck $TimeSpotCheck <p>根据时间的抽检策略参数，当 StrategyType 为 TimeSpotCheck 时有效。</p>
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
            $this->TimeSpotCheck = new QualityInspectTimeSpotCheck();
            $this->TimeSpotCheck->deserialize($param["TimeSpotCheck"]);
        }
    }
}
