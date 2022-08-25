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
 * 直播进房输入参数
 *
 * @method TRTCJoinRoomInput getTRTCJoinRoomInput() 获取TRTC进房参数
 * @method void setTRTCJoinRoomInput(TRTCJoinRoomInput $TRTCJoinRoomInput) 设置TRTC进房参数
 */
class JoinRoomInput extends AbstractModel
{
    /**
     * @var TRTCJoinRoomInput TRTC进房参数
     */
    public $TRTCJoinRoomInput;

    /**
     * @param TRTCJoinRoomInput $TRTCJoinRoomInput TRTC进房参数
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
        if (array_key_exists("TRTCJoinRoomInput",$param) and $param["TRTCJoinRoomInput"] !== null) {
            $this->TRTCJoinRoomInput = new TRTCJoinRoomInput();
            $this->TRTCJoinRoomInput->deserialize($param["TRTCJoinRoomInput"]);
        }
    }
}
