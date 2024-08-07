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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务端控制AI对话机器人播报指定文本
 *
 * @method string getText() 获取服务端推送播报文本
 * @method void setText(string $Text) 设置服务端推送播报文本
 * @method boolean getInterrupt() 获取是否允许该文本打断机器人说话
 * @method void setInterrupt(boolean $Interrupt) 设置是否允许该文本打断机器人说话
 * @method boolean getStopAfterPlay() 获取播报完文本后，是否自动关闭对话任务
 * @method void setStopAfterPlay(boolean $StopAfterPlay) 设置播报完文本后，是否自动关闭对话任务
 */
class ServerPushText extends AbstractModel
{
    /**
     * @var string 服务端推送播报文本
     */
    public $Text;

    /**
     * @var boolean 是否允许该文本打断机器人说话
     */
    public $Interrupt;

    /**
     * @var boolean 播报完文本后，是否自动关闭对话任务
     */
    public $StopAfterPlay;

    /**
     * @param string $Text 服务端推送播报文本
     * @param boolean $Interrupt 是否允许该文本打断机器人说话
     * @param boolean $StopAfterPlay 播报完文本后，是否自动关闭对话任务
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }

        if (array_key_exists("StopAfterPlay",$param) and $param["StopAfterPlay"] !== null) {
            $this->StopAfterPlay = $param["StopAfterPlay"];
        }
    }
}
