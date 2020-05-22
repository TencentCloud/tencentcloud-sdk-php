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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 广交会消息内容
 *
 * @method MediaGjh getMedia() 获取具体消息内容
 * @method void setMedia(MediaGjh $Media) 设置具体消息内容
 * @method UserInfoGjh getUser() 获取发表该信息的用户的信息
 * @method void setUser(UserInfoGjh $User) 设置发表该信息的用户的信息
 * @method ContentMsgGjh getMsg() 获取发表该消息的设备的消息
 * @method void setMsg(ContentMsgGjh $Msg) 设置发表该消息的设备的消息
 */
class MessageContentGjh extends AbstractModel
{
    /**
     * @var MediaGjh 具体消息内容
     */
    public $Media;

    /**
     * @var UserInfoGjh 发表该信息的用户的信息
     */
    public $User;

    /**
     * @var ContentMsgGjh 发表该消息的设备的消息
     */
    public $Msg;

    /**
     * @param MediaGjh $Media 具体消息内容
     * @param UserInfoGjh $User 发表该信息的用户的信息
     * @param ContentMsgGjh $Msg 发表该消息的设备的消息
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
        if (array_key_exists("Media",$param) and $param["Media"] !== null) {
            $this->Media = new MediaGjh();
            $this->Media->deserialize($param["Media"]);
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new UserInfoGjh();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = new ContentMsgGjh();
            $this->Msg->deserialize($param["Msg"]);
        }
    }
}
