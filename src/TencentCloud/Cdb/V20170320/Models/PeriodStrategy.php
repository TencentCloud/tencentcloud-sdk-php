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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 按周期扩容策略中的所选择的周期
 *
 * @method TImeCycle getTimeCycle() 获取扩容周期
 * @method void setTimeCycle(TImeCycle $TimeCycle) 设置扩容周期
 * @method TimeInterval getTimeInterval() 获取时间间隔
 * @method void setTimeInterval(TimeInterval $TimeInterval) 设置时间间隔
 */
class PeriodStrategy extends AbstractModel
{
    /**
     * @var TImeCycle 扩容周期
     */
    public $TimeCycle;

    /**
     * @var TimeInterval 时间间隔
     */
    public $TimeInterval;

    /**
     * @param TImeCycle $TimeCycle 扩容周期
     * @param TimeInterval $TimeInterval 时间间隔
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
        if (array_key_exists("TimeCycle",$param) and $param["TimeCycle"] !== null) {
            $this->TimeCycle = new TImeCycle();
            $this->TimeCycle->deserialize($param["TimeCycle"]);
        }

        if (array_key_exists("TimeInterval",$param) and $param["TimeInterval"] !== null) {
            $this->TimeInterval = new TimeInterval();
            $this->TimeInterval->deserialize($param["TimeInterval"]);
        }
    }
}
