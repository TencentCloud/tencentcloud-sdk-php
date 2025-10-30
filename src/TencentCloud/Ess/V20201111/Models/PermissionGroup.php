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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限树中的权限组
 *
 * @method string getGroupName() 获取权限组名称
 * @method void setGroupName(string $GroupName) 设置权限组名称
 * @method string getGroupKey() 获取权限组key
 * @method void setGroupKey(string $GroupKey) 设置权限组key
 * @method integer getHide() 获取是否隐藏分组，0否1是
 * @method void setHide(integer $Hide) 设置是否隐藏分组，0否1是
 * @method array getPermissions() 获取权限集合
 * @method void setPermissions(array $Permissions) 设置权限集合
 */
class PermissionGroup extends AbstractModel
{
    /**
     * @var string 权限组名称
     */
    public $GroupName;

    /**
     * @var string 权限组key
     */
    public $GroupKey;

    /**
     * @var integer 是否隐藏分组，0否1是
     */
    public $Hide;

    /**
     * @var array 权限集合
     */
    public $Permissions;

    /**
     * @param string $GroupName 权限组名称
     * @param string $GroupKey 权限组key
     * @param integer $Hide 是否隐藏分组，0否1是
     * @param array $Permissions 权限集合
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupKey",$param) and $param["GroupKey"] !== null) {
            $this->GroupKey = $param["GroupKey"];
        }

        if (array_key_exists("Hide",$param) and $param["Hide"] !== null) {
            $this->Hide = $param["Hide"];
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
