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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * docker配置
 *
 * @method string getRegistryDomain() 获取镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryDomain(string $RegistryDomain) 设置镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 */
class DockerConfig extends AbstractModel
{
    /**
     * @var string 镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryDomain;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @param string $RegistryDomain 镜像仓库地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
     * @param string $Password 密码
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
        if (array_key_exists("RegistryDomain",$param) and $param["RegistryDomain"] !== null) {
            $this->RegistryDomain = $param["RegistryDomain"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }
    }
}
