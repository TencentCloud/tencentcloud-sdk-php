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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录态信息
 *
 * @method string getUserId() 获取用户 Id。
 * @method void setUserId(string $UserId) 设置用户 Id。
 * @method string getStatus() 获取用户登录状态。
<li>Online：在线；</li>
<li>Offline：离线。</li>
 * @method void setStatus(string $Status) 设置用户登录状态。
<li>Online：在线；</li>
<li>Offline：离线。</li>
 */
class LoginStatusInfo extends AbstractModel
{
    /**
     * @var string 用户 Id。
     */
    public $UserId;

    /**
     * @var string 用户登录状态。
<li>Online：在线；</li>
<li>Offline：离线。</li>
     */
    public $Status;

    /**
     * @param string $UserId 用户 Id。
     * @param string $Status 用户登录状态。
<li>Online：在线；</li>
<li>Offline：离线。</li>
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
