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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例错误日志返回类型
 *
 * @method integer getTimestamp() 获取日志时间戳
 * @method void setTimestamp(integer $Timestamp) 设置日志时间戳
 * @method string getLevel() 获取日志等级
 * @method void setLevel(string $Level) 设置日志等级
 * @method string getContent() 获取日志内容
 * @method void setContent(string $Content) 设置日志内容
 */
class CynosdbErrorLogItem extends AbstractModel
{
    /**
     * @var integer 日志时间戳
     */
    public $Timestamp;

    /**
     * @var string 日志等级
     */
    public $Level;

    /**
     * @var string 日志内容
     */
    public $Content;

    /**
     * @param integer $Timestamp 日志时间戳
     * @param string $Level 日志等级
     * @param string $Content 日志内容
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

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
