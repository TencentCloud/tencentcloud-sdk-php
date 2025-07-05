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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单连接下载限速配置参数。
 *
 * @method string getMode() 获取下载限速模式，取值有：
<li>LimitUponDownload：全过程下载限速；</li>
<li>LimitAfterSpecificBytesDownloaded：全速下载特定字节后开始限速；</li>
<li>LimitAfterSpecificSecondsDownloaded：全速下载特定时间后开始限速。</li>
 * @method void setMode(string $Mode) 设置下载限速模式，取值有：
<li>LimitUponDownload：全过程下载限速；</li>
<li>LimitAfterSpecificBytesDownloaded：全速下载特定字节后开始限速；</li>
<li>LimitAfterSpecificSecondsDownloaded：全速下载特定时间后开始限速。</li>
 * @method string getMaxSpeed() 获取限速值，指定限速大小，填写含单位的数值或变量。当前支持单位有：KB/s。
 * @method void setMaxSpeed(string $MaxSpeed) 设置限速值，指定限速大小，填写含单位的数值或变量。当前支持单位有：KB/s。
 * @method string getStartAt() 获取限速开始值，可以为下载大小或指定时长，填写含单位的数值或变量，指定下载大小或指定时长。

- 当Mode 取值为 LimitAfterSpecificBytesDownloaded 时，单位取值有： KB；

- 当Mode 取值为 LimitAfterSpecificSecondsDownloaded 时，单位取值有： s。

 * @method void setStartAt(string $StartAt) 设置限速开始值，可以为下载大小或指定时长，填写含单位的数值或变量，指定下载大小或指定时长。

- 当Mode 取值为 LimitAfterSpecificBytesDownloaded 时，单位取值有： KB；

- 当Mode 取值为 LimitAfterSpecificSecondsDownloaded 时，单位取值有： s。
 */
class ResponseSpeedLimitParameters extends AbstractModel
{
    /**
     * @var string 下载限速模式，取值有：
<li>LimitUponDownload：全过程下载限速；</li>
<li>LimitAfterSpecificBytesDownloaded：全速下载特定字节后开始限速；</li>
<li>LimitAfterSpecificSecondsDownloaded：全速下载特定时间后开始限速。</li>
     */
    public $Mode;

    /**
     * @var string 限速值，指定限速大小，填写含单位的数值或变量。当前支持单位有：KB/s。
     */
    public $MaxSpeed;

    /**
     * @var string 限速开始值，可以为下载大小或指定时长，填写含单位的数值或变量，指定下载大小或指定时长。

- 当Mode 取值为 LimitAfterSpecificBytesDownloaded 时，单位取值有： KB；

- 当Mode 取值为 LimitAfterSpecificSecondsDownloaded 时，单位取值有： s。

     */
    public $StartAt;

    /**
     * @param string $Mode 下载限速模式，取值有：
<li>LimitUponDownload：全过程下载限速；</li>
<li>LimitAfterSpecificBytesDownloaded：全速下载特定字节后开始限速；</li>
<li>LimitAfterSpecificSecondsDownloaded：全速下载特定时间后开始限速。</li>
     * @param string $MaxSpeed 限速值，指定限速大小，填写含单位的数值或变量。当前支持单位有：KB/s。
     * @param string $StartAt 限速开始值，可以为下载大小或指定时长，填写含单位的数值或变量，指定下载大小或指定时长。

- 当Mode 取值为 LimitAfterSpecificBytesDownloaded 时，单位取值有： KB；

- 当Mode 取值为 LimitAfterSpecificSecondsDownloaded 时，单位取值有： s。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("MaxSpeed",$param) and $param["MaxSpeed"] !== null) {
            $this->MaxSpeed = $param["MaxSpeed"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }
    }
}
