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
 * 数据湖计算服务（Data Lake Compute，简称DLC）数据分区额外信息
 *
 * @method string getTimeFormat() 获取时间格式	eg: %Y-%m-%d %H:%M:%S.%f
 * @method void setTimeFormat(string $TimeFormat) 设置时间格式	eg: %Y-%m-%d %H:%M:%S.%f
 * @method string getTimeZone() 获取时间时区
 * @method void setTimeZone(string $TimeZone) 设置时间时区
 */
class DlcPartitionExtra extends AbstractModel
{
    /**
     * @var string 时间格式	eg: %Y-%m-%d %H:%M:%S.%f
     */
    public $TimeFormat;

    /**
     * @var string 时间时区
     */
    public $TimeZone;

    /**
     * @param string $TimeFormat 时间格式	eg: %Y-%m-%d %H:%M:%S.%f
     * @param string $TimeZone 时间时区
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
        if (array_key_exists("TimeFormat",$param) and $param["TimeFormat"] !== null) {
            $this->TimeFormat = $param["TimeFormat"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
