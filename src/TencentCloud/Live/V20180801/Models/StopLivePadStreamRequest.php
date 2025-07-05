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
 * StopLivePadStream请求参数结构体
 *
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method string getPushDomainName() 获取您的推流域名。
 * @method void setPushDomainName(string $PushDomainName) 设置您的推流域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method string getOperator() 获取操作人备注信息。
 * @method void setOperator(string $Operator) 设置操作人备注信息。
 */
class StopLivePadStreamRequest extends AbstractModel
{
    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 您的推流域名。
     */
    public $PushDomainName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var string 操作人备注信息。
     */
    public $Operator;

    /**
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     * @param string $PushDomainName 您的推流域名。
     * @param string $StreamName 流名称。
     * @param string $Operator 操作人备注信息。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PushDomainName",$param) and $param["PushDomainName"] !== null) {
            $this->PushDomainName = $param["PushDomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
