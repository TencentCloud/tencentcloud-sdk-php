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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音转文本信息
 *
 * @method string getUser() 获取用户方
 * @method void setUser(string $User) 设置用户方
 * @method string getMessage() 获取消息内容
 * @method void setMessage(string $Message) 设置消息内容
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method integer getStart() 获取句子开始时间，Unix 毫秒时间戳
 * @method void setStart(integer $Start) 设置句子开始时间，Unix 毫秒时间戳
 * @method integer getEnd() 获取句子结束时间，Unix 毫秒时间戳
 * @method void setEnd(integer $End) 设置句子结束时间，Unix 毫秒时间戳
 */
class AsrData extends AbstractModel
{
    /**
     * @var string 用户方
     */
    public $User;

    /**
     * @var string 消息内容
     */
    public $Message;

    /**
     * @var integer 时间戳
     * @deprecated
     */
    public $Timestamp;

    /**
     * @var integer 句子开始时间，Unix 毫秒时间戳
     */
    public $Start;

    /**
     * @var integer 句子结束时间，Unix 毫秒时间戳
     */
    public $End;

    /**
     * @param string $User 用户方
     * @param string $Message 消息内容
     * @param integer $Timestamp 时间戳
     * @param integer $Start 句子开始时间，Unix 毫秒时间戳
     * @param integer $End 句子结束时间，Unix 毫秒时间戳
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }
    }
}
