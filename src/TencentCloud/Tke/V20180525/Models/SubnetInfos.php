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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子网信息
 *
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getName() 获取子网节点名称
 * @method void setName(string $Name) 设置子网节点名称
 * @method array getSecurityGroups() 获取安全组id
 * @method void setSecurityGroups(array $SecurityGroups) 设置安全组id
 * @method string getOs() 获取系统
 * @method void setOs(string $Os) 设置系统
 * @method string getArch() 获取硬件架构
 * @method void setArch(string $Arch) 设置硬件架构
 */
class SubnetInfos extends AbstractModel
{
    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string 子网节点名称
     */
    public $Name;

    /**
     * @var array 安全组id
     */
    public $SecurityGroups;

    /**
     * @var string 系统
     */
    public $Os;

    /**
     * @var string 硬件架构
     */
    public $Arch;

    /**
     * @param string $SubnetId 子网id
     * @param string $Name 子网节点名称
     * @param array $SecurityGroups 安全组id
     * @param string $Os 系统
     * @param string $Arch 硬件架构
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("Os",$param) and $param["Os"] !== null) {
            $this->Os = $param["Os"];
        }

        if (array_key_exists("Arch",$param) and $param["Arch"] !== null) {
            $this->Arch = $param["Arch"];
        }
    }
}
