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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnterRescueMode请求参数结构体
 *
 * @method string getInstanceId() 获取需要进入救援模式的实例id
 * @method void setInstanceId(string $InstanceId) 设置需要进入救援模式的实例id
 * @method string getPassword() 获取救援模式下系统密码
 * @method void setPassword(string $Password) 设置救援模式下系统密码
 * @method string getUsername() 获取救援模式下系统用户名
 * @method void setUsername(string $Username) 设置救援模式下系统用户名
 * @method boolean getForceStop() 获取是否强制关机
 * @method void setForceStop(boolean $ForceStop) 设置是否强制关机
 */
class EnterRescueModeRequest extends AbstractModel
{
    /**
     * @var string 需要进入救援模式的实例id
     */
    public $InstanceId;

    /**
     * @var string 救援模式下系统密码
     */
    public $Password;

    /**
     * @var string 救援模式下系统用户名
     */
    public $Username;

    /**
     * @var boolean 是否强制关机
     */
    public $ForceStop;

    /**
     * @param string $InstanceId 需要进入救援模式的实例id
     * @param string $Password 救援模式下系统密码
     * @param string $Username 救援模式下系统用户名
     * @param boolean $ForceStop 是否强制关机
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

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
