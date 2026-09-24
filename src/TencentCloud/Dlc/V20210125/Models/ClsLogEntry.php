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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志条目。
 *
 * @method integer getTime() 获取<p>Unix 毫秒时间戳。</p>
 * @method void setTime(integer $Time) 设置<p>Unix 毫秒时间戳。</p>
 * @method string getLogJson() 获取<p>日志 JSON 字符串。</p>
 * @method void setLogJson(string $LogJson) 设置<p>日志 JSON 字符串。</p>
 */
class ClsLogEntry extends AbstractModel
{
    /**
     * @var integer <p>Unix 毫秒时间戳。</p>
     */
    public $Time;

    /**
     * @var string <p>日志 JSON 字符串。</p>
     */
    public $LogJson;

    /**
     * @param integer $Time <p>Unix 毫秒时间戳。</p>
     * @param string $LogJson <p>日志 JSON 字符串。</p>
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("LogJson",$param) and $param["LogJson"] !== null) {
            $this->LogJson = $param["LogJson"];
        }
    }
}
