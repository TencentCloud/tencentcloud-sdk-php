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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRoleName() 获取角色名称
 * @method void setRoleName(string $RoleName) 设置角色名称
 * @method string getPolicyDocument() 获取策略文档
 * @method void setPolicyDocument(string $PolicyDocument) 设置策略文档
 * @method string getDescription() 获取角色描述
 * @method void setDescription(string $Description) 设置角色描述
 * @method integer getConsoleLogin() 获取是否允许登录
 * @method void setConsoleLogin(integer $ConsoleLogin) 设置是否允许登录
 */

/**
 *CreateRole请求参数结构体
 */
class CreateRoleRequest extends AbstractModel
{
    /**
     * @var string 角色名称
     */
    public $RoleName;

    /**
     * @var string 策略文档
     */
    public $PolicyDocument;

    /**
     * @var string 角色描述
     */
    public $Description;

    /**
     * @var integer 是否允许登录
     */
    public $ConsoleLogin;
    /**
     * @param string $RoleName 角色名称
     * @param string $PolicyDocument 策略文档
     * @param string $Description 角色描述
     * @param integer $ConsoleLogin 是否允许登录
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }
    }
}
