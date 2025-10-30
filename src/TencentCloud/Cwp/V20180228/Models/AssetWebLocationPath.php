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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产管理Web站点虚拟目录
 *
 * @method string getVirtualPath() 获取虚拟路径
 * @method void setVirtualPath(string $VirtualPath) 设置虚拟路径
 * @method string getRealPath() 获取物理路径
 * @method void setRealPath(string $RealPath) 设置物理路径
 * @method string getUser() 获取文件所有者
 * @method void setUser(string $User) 设置文件所有者
 * @method string getGroup() 获取文件所属组
 * @method void setGroup(string $Group) 设置文件所属组
 * @method string getPermission() 获取文件权限
 * @method void setPermission(string $Permission) 设置文件权限
 */
class AssetWebLocationPath extends AbstractModel
{
    /**
     * @var string 虚拟路径
     */
    public $VirtualPath;

    /**
     * @var string 物理路径
     */
    public $RealPath;

    /**
     * @var string 文件所有者
     */
    public $User;

    /**
     * @var string 文件所属组
     */
    public $Group;

    /**
     * @var string 文件权限
     */
    public $Permission;

    /**
     * @param string $VirtualPath 虚拟路径
     * @param string $RealPath 物理路径
     * @param string $User 文件所有者
     * @param string $Group 文件所属组
     * @param string $Permission 文件权限
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
        if (array_key_exists("VirtualPath",$param) and $param["VirtualPath"] !== null) {
            $this->VirtualPath = $param["VirtualPath"];
        }

        if (array_key_exists("RealPath",$param) and $param["RealPath"] !== null) {
            $this->RealPath = $param["RealPath"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
