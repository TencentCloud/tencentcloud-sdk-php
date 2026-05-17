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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos权限信息
 *
 * @method string getPermissionSource() 获取权限来源
 * @method void setPermissionSource(string $PermissionSource) 设置权限来源
 * @method string getPermissionContent() 获取权限内容
 * @method void setPermissionContent(string $PermissionContent) 设置权限内容
 * @method string getGrantResource() 获取授权资源
 * @method void setGrantResource(string $GrantResource) 设置授权资源
 * @method string getGrantAction() 获取授权动作
 * @method void setGrantAction(string $GrantAction) 设置授权动作
 * @method string getGrantCondition() 获取授权条件
 * @method void setGrantCondition(string $GrantCondition) 设置授权条件
 */
class CosPermissionInfo extends AbstractModel
{
    /**
     * @var string 权限来源
     */
    public $PermissionSource;

    /**
     * @var string 权限内容
     */
    public $PermissionContent;

    /**
     * @var string 授权资源
     */
    public $GrantResource;

    /**
     * @var string 授权动作
     */
    public $GrantAction;

    /**
     * @var string 授权条件
     */
    public $GrantCondition;

    /**
     * @param string $PermissionSource 权限来源
     * @param string $PermissionContent 权限内容
     * @param string $GrantResource 授权资源
     * @param string $GrantAction 授权动作
     * @param string $GrantCondition 授权条件
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
        if (array_key_exists("PermissionSource",$param) and $param["PermissionSource"] !== null) {
            $this->PermissionSource = $param["PermissionSource"];
        }

        if (array_key_exists("PermissionContent",$param) and $param["PermissionContent"] !== null) {
            $this->PermissionContent = $param["PermissionContent"];
        }

        if (array_key_exists("GrantResource",$param) and $param["GrantResource"] !== null) {
            $this->GrantResource = $param["GrantResource"];
        }

        if (array_key_exists("GrantAction",$param) and $param["GrantAction"] !== null) {
            $this->GrantAction = $param["GrantAction"];
        }

        if (array_key_exists("GrantCondition",$param) and $param["GrantCondition"] !== null) {
            $this->GrantCondition = $param["GrantCondition"];
        }
    }
}
