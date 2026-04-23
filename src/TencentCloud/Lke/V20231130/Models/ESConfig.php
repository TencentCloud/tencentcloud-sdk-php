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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ES存储配置
 *
 * @method integer getStorageType() 获取<p>存储类型，0: 未知类型， 1:默认存储(平台提供)，2: 自定义存储(用户自建ES)</p>
 * @method void setStorageType(integer $StorageType) 设置<p>存储类型，0: 未知类型， 1:默认存储(平台提供)，2: 自定义存储(用户自建ES)</p>
 * @method string getInstanceName() 获取<p>ES集群名称(自定义存储时必填)</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ES集群名称(自定义存储时必填)</p>
 * @method string getInstanceId() 获取<p>ES集群ID(自定义存储时必填)</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES集群ID(自定义存储时必填)</p>
 * @method string getUsername() 获取<p>ES用户名(自定义存储时必填)</p>
 * @method void setUsername(string $Username) 设置<p>ES用户名(自定义存储时必填)</p>
 * @method string getPassword() 获取<p>ES密码(自定义存储时必填)</p>
 * @method void setPassword(string $Password) 设置<p>ES密码(自定义存储时必填)</p>
 * @method boolean getCanModify() 获取<p>允许修改存储方式</p>
 * @method void setCanModify(boolean $CanModify) 设置<p>允许修改存储方式</p>
 */
class ESConfig extends AbstractModel
{
    /**
     * @var integer <p>存储类型，0: 未知类型， 1:默认存储(平台提供)，2: 自定义存储(用户自建ES)</p>
     */
    public $StorageType;

    /**
     * @var string <p>ES集群名称(自定义存储时必填)</p>
     */
    public $InstanceName;

    /**
     * @var string <p>ES集群ID(自定义存储时必填)</p>
     */
    public $InstanceId;

    /**
     * @var string <p>ES用户名(自定义存储时必填)</p>
     */
    public $Username;

    /**
     * @var string <p>ES密码(自定义存储时必填)</p>
     */
    public $Password;

    /**
     * @var boolean <p>允许修改存储方式</p>
     */
    public $CanModify;

    /**
     * @param integer $StorageType <p>存储类型，0: 未知类型， 1:默认存储(平台提供)，2: 自定义存储(用户自建ES)</p>
     * @param string $InstanceName <p>ES集群名称(自定义存储时必填)</p>
     * @param string $InstanceId <p>ES集群ID(自定义存储时必填)</p>
     * @param string $Username <p>ES用户名(自定义存储时必填)</p>
     * @param string $Password <p>ES密码(自定义存储时必填)</p>
     * @param boolean $CanModify <p>允许修改存储方式</p>
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CanModify",$param) and $param["CanModify"] !== null) {
            $this->CanModify = $param["CanModify"];
        }
    }
}
