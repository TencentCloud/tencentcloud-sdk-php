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
 * 日志分析的日志信息
 *
 * @method integer getTimestamp() 获取日志产生的时间点，采用 unix 毫秒级时间戳。
 * @method void setTimestamp(integer $Timestamp) 设置日志产生的时间点，采用 unix 毫秒级时间戳。
 * @method string getLogJson() 获取日志的具体内容，采用JSON字符串格式。
 * @method void setLogJson(string $LogJson) 设置日志的具体内容，采用JSON字符串格式。
 */
class LogItem extends AbstractModel
{
    /**
     * @var integer 日志产生的时间点，采用 unix 毫秒级时间戳。
     */
    public $Timestamp;

    /**
     * @var string 日志的具体内容，采用JSON字符串格式。
     */
    public $LogJson;

    /**
     * @param integer $Timestamp 日志产生的时间点，采用 unix 毫秒级时间戳。
     * @param string $LogJson 日志的具体内容，采用JSON字符串格式。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }
    }
}
