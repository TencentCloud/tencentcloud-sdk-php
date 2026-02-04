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
 * 直播智能字幕结果
 *
 * @method array getSmartSubtitleResult() 获取直播智能字幕任务结果列表。
 * @method void setSmartSubtitleResult(array $SmartSubtitleResult) 设置直播智能字幕任务结果列表。
 */
class LiveStreamAiSmartSubtitleResultInfo extends AbstractModel
{
    /**
     * @var array 直播智能字幕任务结果列表。
     */
    public $SmartSubtitleResult;

    /**
     * @param array $SmartSubtitleResult 直播智能字幕任务结果列表。
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
        if (array_key_exists("SmartSubtitleResult",$param) and $param["SmartSubtitleResult"] !== null) {
            $this->SmartSubtitleResult = [];
            foreach ($param["SmartSubtitleResult"] as $key => $value){
                $obj = new LiveSmartSubtitleResult();
                $obj->deserialize($value);
                array_push($this->SmartSubtitleResult, $obj);
            }
        }
    }
}
