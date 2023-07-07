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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyServiceAccount请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method string getName() 获取服务级账号名
 * @method void setName(string $Name) 设置服务级账号名
 * @method string getDescription() 获取服务级账号描述
 * @method void setDescription(string $Description) 设置服务级账号描述
 * @method integer getDuration() 获取有效期(单位：天)，从当前时间开始计算，优先级高于ExpiresAt
 * @method void setDuration(integer $Duration) 设置有效期(单位：天)，从当前时间开始计算，优先级高于ExpiresAt
 * @method integer getExpiresAt() 获取过期时间（时间戳，单位:毫秒）
 * @method void setExpiresAt(integer $ExpiresAt) 设置过期时间（时间戳，单位:毫秒）
 * @method boolean getDisable() 获取是否禁用服务级账号
 * @method void setDisable(boolean $Disable) 设置是否禁用服务级账号
 * @method array getPermissions() 获取策略列表
 * @method void setPermissions(array $Permissions) 设置策略列表
 */
class ModifyServiceAccountRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var string 服务级账号名
     */
    public $Name;

    /**
     * @var string 服务级账号描述
     */
    public $Description;

    /**
     * @var integer 有效期(单位：天)，从当前时间开始计算，优先级高于ExpiresAt
     */
    public $Duration;

    /**
     * @var integer 过期时间（时间戳，单位:毫秒）
     */
    public $ExpiresAt;

    /**
     * @var boolean 是否禁用服务级账号
     */
    public $Disable;

    /**
     * @var array 策略列表
     */
    public $Permissions;

    /**
     * @param string $RegistryId 实例Id
     * @param string $Name 服务级账号名
     * @param string $Description 服务级账号描述
     * @param integer $Duration 有效期(单位：天)，从当前时间开始计算，优先级高于ExpiresAt
     * @param integer $ExpiresAt 过期时间（时间戳，单位:毫秒）
     * @param boolean $Disable 是否禁用服务级账号
     * @param array $Permissions 策略列表
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = [];
            foreach ($param["Permissions"] as $key => $value){
                $obj = new Permission();
                $obj->deserialize($value);
                array_push($this->Permissions, $obj);
            }
        }
    }
}
