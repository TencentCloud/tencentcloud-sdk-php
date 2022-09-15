<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送自定义信息指令参数
 *
 * @method string getMessage() 获取自定义消息，json格式字符串。
 * @method void setMessage(string $Message) 设置自定义消息，json格式字符串。
 * @method integer getRepeat() 获取消息重复次数，默认为 1。
 * @method void setRepeat(integer $Repeat) 设置消息重复次数，默认为 1。
 */
class SendMessageCommandInput extends AbstractModel
{
    /**
     * @var string 自定义消息，json格式字符串。
     */
    public $Message;

    /**
     * @var integer 消息重复次数，默认为 1。
     */
    public $Repeat;

    /**
     * @param string $Message 自定义消息，json格式字符串。
     * @param integer $Repeat 消息重复次数，默认为 1。
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Repeat",$param) and $param["Repeat"] !== null) {
            $this->Repeat = $param["Repeat"];
        }
    }
}
