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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频片段时间信息
 *
 * @method float getStartTime() 获取<p>该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。 示例值：0</p>
 * @method void setStartTime(float $StartTime) 设置<p>该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。 示例值：0</p>
 * @method float getFinishTime() 获取<p>该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。 示例值：15</p>
 * @method void setFinishTime(float $FinishTime) 设置<p>该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。 示例值：15</p>
 */
class AudioSegments extends AbstractModel
{
    /**
     * @var float <p>该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。 示例值：0</p>
     */
    public $StartTime;

    /**
     * @var float <p>该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。 示例值：15</p>
     */
    public $FinishTime;

    /**
     * @param float $StartTime <p>该参数用于返回对应语种标签的片段在音频文件内的开始时间，单位为秒。 示例值：0</p>
     * @param float $FinishTime <p>该参数用于返回对应语种标签的片段在音频文件内的结束时间，单位为秒。 示例值：15</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
