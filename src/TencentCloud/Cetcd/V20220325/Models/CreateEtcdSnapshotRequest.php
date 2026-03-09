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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEtcdSnapshot请求参数结构体
 *
 * @method string getInstanceId() 获取etcd实例id
 * @method void setInstanceId(string $InstanceId) 设置etcd实例id
 * @method string getSnapshotName() 获取etcd快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置etcd快照名称
 * @method string getUser() 获取备份用户名
 * @method void setUser(string $User) 设置备份用户名
 * @method string getPassword() 获取备份密码
 * @method void setPassword(string $Password) 设置备份密码
 */
class CreateEtcdSnapshotRequest extends AbstractModel
{
    /**
     * @var string etcd实例id
     */
    public $InstanceId;

    /**
     * @var string etcd快照名称
     */
    public $SnapshotName;

    /**
     * @var string 备份用户名
     */
    public $User;

    /**
     * @var string 备份密码
     */
    public $Password;

    /**
     * @param string $InstanceId etcd实例id
     * @param string $SnapshotName etcd快照名称
     * @param string $User 备份用户名
     * @param string $Password 备份密码
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

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
