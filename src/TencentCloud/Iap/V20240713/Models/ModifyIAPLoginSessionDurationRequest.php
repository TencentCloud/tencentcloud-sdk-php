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
namespace TencentCloud\Iap\V20240713\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIAPLoginSessionDuration请求参数结构体
 *
 * @method integer getDuration() 获取登录会话时长
 * @method void setDuration(integer $Duration) 设置登录会话时长
 */
class ModifyIAPLoginSessionDurationRequest extends AbstractModel
{
    /**
     * @var integer 登录会话时长
     */
    public $Duration;

    /**
     * @param integer $Duration 登录会话时长
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
