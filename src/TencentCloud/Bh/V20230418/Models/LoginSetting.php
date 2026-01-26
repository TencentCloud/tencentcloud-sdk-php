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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 登录安全设置
 *
 * @method integer getTimeOut() 获取登录会话超时，10分钟，20分钟，30分钟，默认20分钟
 * @method void setTimeOut(integer $TimeOut) 设置登录会话超时，10分钟，20分钟，30分钟，默认20分钟
 * @method integer getLockThreshold() 获取连续密码错误次数，超过锁定账号，3-5
 * @method void setLockThreshold(integer $LockThreshold) 设置连续密码错误次数，超过锁定账号，3-5
 * @method integer getLockTime() 获取账号锁定时长，10分钟，20分钟，30分钟
 * @method void setLockTime(integer $LockTime) 设置账号锁定时长，10分钟，20分钟，30分钟
 * @method integer getInactiveUserLock() 获取用户多少天不活跃，账号自动锁定
 * @method void setInactiveUserLock(integer $InactiveUserLock) 设置用户多少天不活跃，账号自动锁定
 */
class LoginSetting extends AbstractModel
{
    /**
     * @var integer 登录会话超时，10分钟，20分钟，30分钟，默认20分钟
     */
    public $TimeOut;

    /**
     * @var integer 连续密码错误次数，超过锁定账号，3-5
     */
    public $LockThreshold;

    /**
     * @var integer 账号锁定时长，10分钟，20分钟，30分钟
     */
    public $LockTime;

    /**
     * @var integer 用户多少天不活跃，账号自动锁定
     */
    public $InactiveUserLock;

    /**
     * @param integer $TimeOut 登录会话超时，10分钟，20分钟，30分钟，默认20分钟
     * @param integer $LockThreshold 连续密码错误次数，超过锁定账号，3-5
     * @param integer $LockTime 账号锁定时长，10分钟，20分钟，30分钟
     * @param integer $InactiveUserLock 用户多少天不活跃，账号自动锁定
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
        if (array_key_exists("TimeOut",$param) and $param["TimeOut"] !== null) {
            $this->TimeOut = $param["TimeOut"];
        }

        if (array_key_exists("LockThreshold",$param) and $param["LockThreshold"] !== null) {
            $this->LockThreshold = $param["LockThreshold"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("InactiveUserLock",$param) and $param["InactiveUserLock"] !== null) {
            $this->InactiveUserLock = $param["InactiveUserLock"];
        }
    }
}
