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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncPodState请求参数结构体
 *
 * @method PodState getMessage() 获取EmrService中pod状态信息
 * @method void setMessage(PodState $Message) 设置EmrService中pod状态信息
 */
class SyncPodStateRequest extends AbstractModel
{
    /**
     * @var PodState EmrService中pod状态信息
     */
    public $Message;

    /**
     * @param PodState $Message EmrService中pod状态信息
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
            $this->Message = new PodState();
            $this->Message->deserialize($param["Message"]);
        }
    }
}
