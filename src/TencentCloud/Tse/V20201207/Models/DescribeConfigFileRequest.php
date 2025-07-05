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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigFile请求参数结构体
 *
 * @method string getInstanceId() 获取TSE实例id
 * @method void setInstanceId(string $InstanceId) 设置TSE实例id
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getGroup() 获取组
 * @method void setGroup(string $Group) 设置组
 * @method string getName() 获取配置文件名称
 * @method void setName(string $Name) 设置配置文件名称
 * @method string getId() 获取配置文件Id
 * @method void setId(string $Id) 设置配置文件Id
 */
class DescribeConfigFileRequest extends AbstractModel
{
    /**
     * @var string TSE实例id
     */
    public $InstanceId;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 组
     */
    public $Group;

    /**
     * @var string 配置文件名称
     */
    public $Name;

    /**
     * @var string 配置文件Id
     */
    public $Id;

    /**
     * @param string $InstanceId TSE实例id
     * @param string $Namespace 命名空间
     * @param string $Group 组
     * @param string $Name 配置文件名称
     * @param string $Id 配置文件Id
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
