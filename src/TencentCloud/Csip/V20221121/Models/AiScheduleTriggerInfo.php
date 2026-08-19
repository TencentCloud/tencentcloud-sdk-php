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
 * 触发器配置
 *
 * @method string getTriggerId() 获取<p>触发器 ID。</p>
 * @method void setTriggerId(string $TriggerId) 设置<p>触发器 ID。</p>
 * @method integer getTriggerType() 获取<p>触发器类型。取值：1（Cron 表达式）、2（固定时间）。</p>
 * @method void setTriggerType(integer $TriggerType) 设置<p>触发器类型。取值：1（Cron 表达式）、2（固定时间）。</p>
 */
class AiScheduleTriggerInfo extends AbstractModel
{
    /**
     * @var string <p>触发器 ID。</p>
     */
    public $TriggerId;

    /**
     * @var integer <p>触发器类型。取值：1（Cron 表达式）、2（固定时间）。</p>
     */
    public $TriggerType;

    /**
     * @param string $TriggerId <p>触发器 ID。</p>
     * @param integer $TriggerType <p>触发器类型。取值：1（Cron 表达式）、2（固定时间）。</p>
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
        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }
    }
}
