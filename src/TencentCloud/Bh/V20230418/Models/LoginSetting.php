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
 * @method integer getTimeOut() 获取<p>登录会话超时，10分钟，20分钟，30分钟，默认20分钟</p>
 * @method void setTimeOut(integer $TimeOut) 设置<p>登录会话超时，10分钟，20分钟，30分钟，默认20分钟</p>
 * @method integer getLockThreshold() 获取<p>连续密码错误次数，超过锁定账号，3-5</p>
 * @method void setLockThreshold(integer $LockThreshold) 设置<p>连续密码错误次数，超过锁定账号，3-5</p>
 * @method integer getLockTime() 获取<p>账号锁定时长，10分钟，20分钟，30分钟</p>
 * @method void setLockTime(integer $LockTime) 设置<p>账号锁定时长，10分钟，20分钟，30分钟</p>
 * @method integer getInactiveUserLock() 获取<p>用户多少天不活跃，账号自动锁定</p>
 * @method void setInactiveUserLock(integer $InactiveUserLock) 设置<p>用户多少天不活跃，账号自动锁定</p>
 * @method integer getEnableSingleLogin() 获取<p>运维账号单点登录开关：0-关闭，1-开启</p>
 * @method void setEnableSingleLogin(integer $EnableSingleLogin) 设置<p>运维账号单点登录开关：0-关闭，1-开启</p>
 */
class LoginSetting extends AbstractModel
{
    /**
     * @var integer <p>登录会话超时，10分钟，20分钟，30分钟，默认20分钟</p>
     */
    public $TimeOut;

    /**
     * @var integer <p>连续密码错误次数，超过锁定账号，3-5</p>
     */
    public $LockThreshold;

    /**
     * @var integer <p>账号锁定时长，10分钟，20分钟，30分钟</p>
     */
    public $LockTime;

    /**
     * @var integer <p>用户多少天不活跃，账号自动锁定</p>
     */
    public $InactiveUserLock;

    /**
     * @var integer <p>运维账号单点登录开关：0-关闭，1-开启</p>
     */
    public $EnableSingleLogin;

    /**
     * @param integer $TimeOut <p>登录会话超时，10分钟，20分钟，30分钟，默认20分钟</p>
     * @param integer $LockThreshold <p>连续密码错误次数，超过锁定账号，3-5</p>
     * @param integer $LockTime <p>账号锁定时长，10分钟，20分钟，30分钟</p>
     * @param integer $InactiveUserLock <p>用户多少天不活跃，账号自动锁定</p>
     * @param integer $EnableSingleLogin <p>运维账号单点登录开关：0-关闭，1-开启</p>
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

        if (array_key_exists("EnableSingleLogin",$param) and $param["EnableSingleLogin"] !== null) {
            $this->EnableSingleLogin = $param["EnableSingleLogin"];
        }
    }
}
