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
 * 服务级账号
 *
 * @method string getName() 获取服务级账号名
 * @method void setName(string $Name) 设置服务级账号名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method boolean getDisable() 获取是否禁用
 * @method void setDisable(boolean $Disable) 设置是否禁用
 * @method integer getExpiresAt() 获取过期时间
 * @method void setExpiresAt(integer $ExpiresAt) 设置过期时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method array getPermissions() 获取策略
 * @method void setPermissions(array $Permissions) 设置策略
 */
class ServiceAccount extends AbstractModel
{
    /**
     * @var string 服务级账号名
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var boolean 是否禁用
     */
    public $Disable;

    /**
     * @var integer 过期时间
     */
    public $ExpiresAt;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 策略
     */
    public $Permissions;

    /**
     * @param string $Name 服务级账号名
     * @param string $Description 描述
     * @param boolean $Disable 是否禁用
     * @param integer $ExpiresAt 过期时间
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param array $Permissions 策略
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("ExpiresAt",$param) and $param["ExpiresAt"] !== null) {
            $this->ExpiresAt = $param["ExpiresAt"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
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
