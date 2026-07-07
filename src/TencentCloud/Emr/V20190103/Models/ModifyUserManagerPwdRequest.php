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
 * ModifyUserManagerPwd请求参数结构体
 *
 * @method string getInstanceId() 获取<p>集群实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>集群实例ID</p>
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getPassWord() 获取<p>密码</p>
 * @method void setPassWord(string $PassWord) 设置<p>密码</p>
 * @method boolean getSyncPwd() 获取<p>是否同步密码</p>
 * @method void setSyncPwd(boolean $SyncPwd) 设置<p>是否同步密码</p>
 */
class ModifyUserManagerPwdRequest extends AbstractModel
{
    /**
     * @var string <p>集群实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>密码</p>
     */
    public $PassWord;

    /**
     * @var boolean <p>是否同步密码</p>
     */
    public $SyncPwd;

    /**
     * @param string $InstanceId <p>集群实例ID</p>
     * @param string $UserName <p>用户名</p>
     * @param string $PassWord <p>密码</p>
     * @param boolean $SyncPwd <p>是否同步密码</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("SyncPwd",$param) and $param["SyncPwd"] !== null) {
            $this->SyncPwd = $param["SyncPwd"];
        }
    }
}
