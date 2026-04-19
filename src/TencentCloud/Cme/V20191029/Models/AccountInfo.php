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
 * 制作云用户账号信息。
 *
 * @method string getUserId() 获取<p>用户 Id。</p>
 * @method void setUserId(string $UserId) 设置<p>用户 Id。</p>
 * @method string getPhone() 获取<p>用户手机号码。</p>
 * @method void setPhone(string $Phone) 设置<p>用户手机号码。</p>
 * @method string getNick() 获取<p>用户昵称。</p>
 * @method void setNick(string $Nick) 设置<p>用户昵称。</p>
 * @method string getStatus() 获取<p>账号状态，取值：</p><li>Normal：有效；</li><li>Stopped：无效。</li>
 * @method void setStatus(string $Status) 设置<p>账号状态，取值：</p><li>Normal：有效；</li><li>Stopped：无效。</li>
 * @method string getCreateTime() 获取<p>账户的创建时间。</p><p>参数格式：使用 ISO 日期格式。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>账户的创建时间。</p><p>参数格式：使用 ISO 日期格式。</p>
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string <p>用户 Id。</p>
     */
    public $UserId;

    /**
     * @var string <p>用户手机号码。</p>
     */
    public $Phone;

    /**
     * @var string <p>用户昵称。</p>
     */
    public $Nick;

    /**
     * @var string <p>账号状态，取值：</p><li>Normal：有效；</li><li>Stopped：无效。</li>
     */
    public $Status;

    /**
     * @var string <p>账户的创建时间。</p><p>参数格式：使用 ISO 日期格式。</p>
     */
    public $CreateTime;

    /**
     * @param string $UserId <p>用户 Id。</p>
     * @param string $Phone <p>用户手机号码。</p>
     * @param string $Nick <p>用户昵称。</p>
     * @param string $Status <p>账号状态，取值：</p><li>Normal：有效；</li><li>Stopped：无效。</li>
     * @param string $CreateTime <p>账户的创建时间。</p><p>参数格式：使用 ISO 日期格式。</p>
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

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Nick",$param) and $param["Nick"] !== null) {
            $this->Nick = $param["Nick"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
