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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteScheduledAction请求参数结构体
 *
 * @method array getScheduledActionIds() 获取<p>定时伸缩任务 ID 列表，最多 20 个。</p>
 * @method void setScheduledActionIds(array $ScheduledActionIds) 设置<p>定时伸缩任务 ID 列表，最多 20 个。</p>
 */
class DeleteScheduledActionRequest extends AbstractModel
{
    /**
     * @var array <p>定时伸缩任务 ID 列表，最多 20 个。</p>
     */
    public $ScheduledActionIds;

    /**
     * @param array $ScheduledActionIds <p>定时伸缩任务 ID 列表，最多 20 个。</p>
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
        if (array_key_exists("ScheduledActionIds",$param) and $param["ScheduledActionIds"] !== null) {
            $this->ScheduledActionIds = $param["ScheduledActionIds"];
        }
    }
}
