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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Es导入时间字段信息
 *
 * @method integer getType() 获取时间类型 1: 日志采集时间 2: 指定日志字段
 * @method void setType(integer $Type) 设置时间类型 1: 日志采集时间 2: 指定日志字段
 * @method string getTimeKey() 获取日志时间字段。

时间类型为 2: 指定日志字段时必填
 * @method void setTimeKey(string $TimeKey) 设置日志时间字段。

时间类型为 2: 指定日志字段时必填
 * @method string getTimeFormat() 获取日志时间格式。

时间类型为 2: 指定日志字段时必填
 * @method void setTimeFormat(string $TimeFormat) 设置日志时间格式。

时间类型为 2: 指定日志字段时必填
 * @method string getTimeZone() 获取时间字段时区。

时间类型为 2: 指定日志字段时必填
 * @method void setTimeZone(string $TimeZone) 设置时间字段时区。

时间类型为 2: 指定日志字段时必填
 */
class EsTimeInfo extends AbstractModel
{
    /**
     * @var integer 时间类型 1: 日志采集时间 2: 指定日志字段
     */
    public $Type;

    /**
     * @var string 日志时间字段。

时间类型为 2: 指定日志字段时必填
     */
    public $TimeKey;

    /**
     * @var string 日志时间格式。

时间类型为 2: 指定日志字段时必填
     */
    public $TimeFormat;

    /**
     * @var string 时间字段时区。

时间类型为 2: 指定日志字段时必填
     */
    public $TimeZone;

    /**
     * @param integer $Type 时间类型 1: 日志采集时间 2: 指定日志字段
     * @param string $TimeKey 日志时间字段。

时间类型为 2: 指定日志字段时必填
     * @param string $TimeFormat 日志时间格式。

时间类型为 2: 指定日志字段时必填
     * @param string $TimeZone 时间字段时区。

时间类型为 2: 指定日志字段时必填
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
