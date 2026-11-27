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
 * 日志url信息。
 *
 * @method string getLogName() 获取<p>日志名称。</p>
 * @method void setLogName(string $LogName) 设置<p>日志名称。</p>
 * @method string getLogUrl() 获取<p>日志 URL。</p>
 * @method void setLogUrl(string $LogUrl) 设置<p>日志 URL。</p>
 * @method string getLogTime() 获取<p>日志生成时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method void setLogTime(string $LogTime) 设置<p>日志生成时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
 * @method integer getFileSize() 获取<p>文件大小，单位字节。</p>
 * @method void setFileSize(integer $FileSize) 设置<p>文件大小，单位字节。</p>
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string <p>日志名称。</p>
     */
    public $LogName;

    /**
     * @var string <p>日志 URL。</p>
     */
    public $LogUrl;

    /**
     * @var string <p>日志生成时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
     */
    public $LogTime;

    /**
     * @var integer <p>文件大小，单位字节。</p>
     */
    public $FileSize;

    /**
     * @param string $LogName <p>日志名称。</p>
     * @param string $LogUrl <p>日志 URL。</p>
     * @param string $LogTime <p>日志生成时间。<br>注：此字段为北京时间（UTC+8时区）。</p>
     * @param integer $FileSize <p>文件大小，单位字节。</p>
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
        if (array_key_exists("LogName",$param) and $param["LogName"] !== null) {
            $this->LogName = $param["LogName"];
        }

        if (array_key_exists("LogUrl",$param) and $param["LogUrl"] !== null) {
            $this->LogUrl = $param["LogUrl"];
        }

        if (array_key_exists("LogTime",$param) and $param["LogTime"] !== null) {
            $this->LogTime = $param["LogTime"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }
    }
}
