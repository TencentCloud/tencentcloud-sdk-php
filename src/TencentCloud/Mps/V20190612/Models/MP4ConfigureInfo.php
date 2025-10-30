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
 * MP4配置参数
 *
 * @method integer getInterval() 获取录制周期，单位：秒，取值范围 10 分钟到720分钟。默认值：60分钟（3600秒）。
 * @method void setInterval(integer $Interval) 设置录制周期，单位：秒，取值范围 10 分钟到720分钟。默认值：60分钟（3600秒）。
 */
class MP4ConfigureInfo extends AbstractModel
{
    /**
     * @var integer 录制周期，单位：秒，取值范围 10 分钟到720分钟。默认值：60分钟（3600秒）。
     */
    public $Interval;

    /**
     * @param integer $Interval 录制周期，单位：秒，取值范围 10 分钟到720分钟。默认值：60分钟（3600秒）。
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
