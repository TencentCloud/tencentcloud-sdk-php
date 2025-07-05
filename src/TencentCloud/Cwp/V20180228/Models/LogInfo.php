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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method string getContent() 获取日志内容的Json序列化字符串
 * @method void setContent(string $Content) 设置日志内容的Json序列化字符串
 * @method string getFileName() 获取日志文件名称
 * @method void setFileName(string $FileName) 设置日志文件名称
 * @method string getSource() 获取日志来源IP
 * @method void setSource(string $Source) 设置日志来源IP
 * @method integer getTimeStamp() 获取日志时间，单位ms
 * @method void setTimeStamp(integer $TimeStamp) 设置日志时间，单位ms
 */
class LogInfo extends AbstractModel
{
    /**
     * @var string 日志内容的Json序列化字符串
     */
    public $Content;

    /**
     * @var string 日志文件名称
     */
    public $FileName;

    /**
     * @var string 日志来源IP
     */
    public $Source;

    /**
     * @var integer 日志时间，单位ms
     */
    public $TimeStamp;

    /**
     * @param string $Content 日志内容的Json序列化字符串
     * @param string $FileName 日志文件名称
     * @param string $Source 日志来源IP
     * @param integer $TimeStamp 日志时间，单位ms
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("TimeStamp",$param) and $param["TimeStamp"] !== null) {
            $this->TimeStamp = $param["TimeStamp"];
        }
    }
}
