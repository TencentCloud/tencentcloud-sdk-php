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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板中配置的发送用户信息
 *
 * @method string getUserId() 获取<p>腾讯云用户id，<strong>不是账号uin</strong></p>
 * @method void setUserId(string $UserId) 设置<p>腾讯云用户id，<strong>不是账号uin</strong></p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 */
class NoticeUserInfo extends AbstractModel
{
    /**
     * @var string <p>腾讯云用户id，<strong>不是账号uin</strong></p>
     */
    public $UserId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @param string $UserId <p>腾讯云用户id，<strong>不是账号uin</strong></p>
     * @param string $UserName <p>用户名</p>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
