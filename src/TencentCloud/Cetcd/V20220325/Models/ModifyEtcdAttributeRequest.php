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
 * ModifyEtcdAttribute请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取实例名
 * @method void setName(string $Name) 设置实例名
 * @method string getDescription() 获取实例描述
 * @method void setDescription(string $Description) 设置实例描述
 * @method string getPassword() 获取root账号密码
 * @method void setPassword(string $Password) 设置root账号密码
 * @method boolean getEnableAuth() 获取同步auth状态
 * @method void setEnableAuth(boolean $EnableAuth) 设置同步auth状态
 * @method boolean getEnableDeleteCos() 获取删除集群关联的cos数据
 * @method void setEnableDeleteCos(boolean $EnableDeleteCos) 设置删除集群关联的cos数据
 * @method array getSubnetIds() 获取子网id，数组
 * @method void setSubnetIds(array $SubnetIds) 设置子网id，数组
 */
class ModifyEtcdAttributeRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $Name;

    /**
     * @var string 实例描述
     */
    public $Description;

    /**
     * @var string root账号密码
     */
    public $Password;

    /**
     * @var boolean 同步auth状态
     */
    public $EnableAuth;

    /**
     * @var boolean 删除集群关联的cos数据
     */
    public $EnableDeleteCos;

    /**
     * @var array 子网id，数组
     */
    public $SubnetIds;

    /**
     * @param string $InstanceId 实例id
     * @param string $Name 实例名
     * @param string $Description 实例描述
     * @param string $Password root账号密码
     * @param boolean $EnableAuth 同步auth状态
     * @param boolean $EnableDeleteCos 删除集群关联的cos数据
     * @param array $SubnetIds 子网id，数组
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("EnableAuth",$param) and $param["EnableAuth"] !== null) {
            $this->EnableAuth = $param["EnableAuth"];
        }

        if (array_key_exists("EnableDeleteCos",$param) and $param["EnableDeleteCos"] !== null) {
            $this->EnableDeleteCos = $param["EnableDeleteCos"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
