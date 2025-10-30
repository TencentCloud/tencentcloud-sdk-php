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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchBackupStream请求参数结构体
 *
 * @method string getPushDomainName() 获取推流域名。
 * @method void setPushDomainName(string $PushDomainName) 设置推流域名。
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getUpstreamSequence() 获取查询接口获取到该流所有在推的上行 Sequence。指定要切到的目标上行 Sequence。
 * @method void setUpstreamSequence(string $UpstreamSequence) 设置查询接口获取到该流所有在推的上行 Sequence。指定要切到的目标上行 Sequence。
 */
class SwitchBackupStreamRequest extends AbstractModel
{
    /**
     * @var string 推流域名。
     */
    public $PushDomainName;

    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 查询接口获取到该流所有在推的上行 Sequence。指定要切到的目标上行 Sequence。
     */
    public $UpstreamSequence;

    /**
     * @param string $PushDomainName 推流域名。
     * @param string $AppName 应用名称。
     * @param string $StreamName 流名称。
     * @param string $UpstreamSequence 查询接口获取到该流所有在推的上行 Sequence。指定要切到的目标上行 Sequence。
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
        if (array_key_exists("PushDomainName",$param) and $param["PushDomainName"] !== null) {
            $this->PushDomainName = $param["PushDomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("UpstreamSequence",$param) and $param["UpstreamSequence"] !== null) {
            $this->UpstreamSequence = $param["UpstreamSequence"];
        }
    }
}
