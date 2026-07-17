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
 * 推理服务部署日志信息。
 *
 * @method string getLogMessage() 获取日志消息内容。
 * @method void setLogMessage(string $LogMessage) 设置日志消息内容。
 * @method string getTimestamp() 获取日志产生时间。
 * @method void setTimestamp(string $Timestamp) 设置日志产生时间。
 */
class InferenceServiceDeploymentLogInfo extends AbstractModel
{
    /**
     * @var string 日志消息内容。
     */
    public $LogMessage;

    /**
     * @var string 日志产生时间。
     */
    public $Timestamp;

    /**
     * @param string $LogMessage 日志消息内容。
     * @param string $Timestamp 日志产生时间。
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
        if (array_key_exists("LogMessage",$param) and $param["LogMessage"] !== null) {
            $this->LogMessage = $param["LogMessage"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
