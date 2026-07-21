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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话重置信息
 *
 * @method string getResetTime() 获取<p>最近一次重置的毫秒级时间戳</p>
 * @method void setResetTime(string $ResetTime) 设置<p>最近一次重置的毫秒级时间戳</p>
 * @method string getResetThroughRecordId() 获取<p>最近一次重置边界；该记录及更早的记录不再作为对话上下文</p>
 * @method void setResetThroughRecordId(string $ResetThroughRecordId) 设置<p>最近一次重置边界；该记录及更早的记录不再作为对话上下文</p>
 */
class ConversationResetInfo extends AbstractModel
{
    /**
     * @var string <p>最近一次重置的毫秒级时间戳</p>
     */
    public $ResetTime;

    /**
     * @var string <p>最近一次重置边界；该记录及更早的记录不再作为对话上下文</p>
     */
    public $ResetThroughRecordId;

    /**
     * @param string $ResetTime <p>最近一次重置的毫秒级时间戳</p>
     * @param string $ResetThroughRecordId <p>最近一次重置边界；该记录及更早的记录不再作为对话上下文</p>
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
        if (array_key_exists("ResetTime",$param) and $param["ResetTime"] !== null) {
            $this->ResetTime = $param["ResetTime"];
        }

        if (array_key_exists("ResetThroughRecordId",$param) and $param["ResetThroughRecordId"] !== null) {
            $this->ResetThroughRecordId = $param["ResetThroughRecordId"];
        }
    }
}
