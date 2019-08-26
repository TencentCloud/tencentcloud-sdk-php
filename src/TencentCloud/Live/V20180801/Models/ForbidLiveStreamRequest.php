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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method string getDomainName() 获取您的加速域名。
 * @method void setDomainName(string $DomainName) 设置您的加速域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getResumeTime() 获取恢复流的时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：默认禁播90天，且最长支持禁播90天。
 * @method void setResumeTime(string $ResumeTime) 设置恢复流的时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：默认禁播90天，且最长支持禁播90天。
 * @method string getReason() 获取禁推原因。
注明：请务必填写禁推原因，防止误操作。
长度限制：2048字节。
 * @method void setReason(string $Reason) 设置禁推原因。
注明：请务必填写禁推原因，防止误操作。
长度限制：2048字节。
 */

/**
 *ForbidLiveStream请求参数结构体
 */
class ForbidLiveStreamRequest extends AbstractModel
{
    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 您的加速域名。
     */
    public $DomainName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 恢复流的时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：默认禁播90天，且最长支持禁播90天。
     */
    public $ResumeTime;

    /**
     * @var string 禁推原因。
注明：请务必填写禁推原因，防止误操作。
长度限制：2048字节。
     */
    public $Reason;
    /**
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     * @param string $DomainName 您的加速域名。
     * @param string $StreamName 流名称。
     * @param string $ResumeTime 恢复流的时间。UTC 格式，例如：2018-11-29T19:00:00Z。
注意：默认禁播90天，且最长支持禁播90天。
     * @param string $Reason 禁推原因。
注明：请务必填写禁推原因，防止误操作。
长度限制：2048字节。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
