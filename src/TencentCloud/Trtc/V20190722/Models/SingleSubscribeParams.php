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
 * 单流旁路转推的用户上行信息。
 *
 * @method UserMediaStream getUserMediaStream() 获取用户媒体流参数。
 * @method void setUserMediaStream(UserMediaStream $UserMediaStream) 设置用户媒体流参数。
 */
class SingleSubscribeParams extends AbstractModel
{
    /**
     * @var UserMediaStream 用户媒体流参数。
     */
    public $UserMediaStream;

    /**
     * @param UserMediaStream $UserMediaStream 用户媒体流参数。
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
        if (array_key_exists("UserMediaStream",$param) and $param["UserMediaStream"] !== null) {
            $this->UserMediaStream = new UserMediaStream();
            $this->UserMediaStream->deserialize($param["UserMediaStream"]);
        }
    }
}
