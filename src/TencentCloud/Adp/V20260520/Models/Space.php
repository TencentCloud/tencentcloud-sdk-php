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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间信息
 *
 * @method string getSpaceId() 获取空间id
 * @method void setSpaceId(string $SpaceId) 设置空间id
 * @method string getName() 获取空间名称
 * @method void setName(string $Name) 设置空间名称
 * @method string getDescription() 获取空间描述
 * @method void setDescription(string $Description) 设置空间描述
 * @method array getPermissionIdList() 获取空间权限
 * @method void setPermissionIdList(array $PermissionIdList) 设置空间权限
 */
class Space extends AbstractModel
{
    /**
     * @var string 空间id
     */
    public $SpaceId;

    /**
     * @var string 空间名称
     */
    public $Name;

    /**
     * @var string 空间描述
     */
    public $Description;

    /**
     * @var array 空间权限
     */
    public $PermissionIdList;

    /**
     * @param string $SpaceId 空间id
     * @param string $Name 空间名称
     * @param string $Description 空间描述
     * @param array $PermissionIdList 空间权限
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PermissionIdList",$param) and $param["PermissionIdList"] !== null) {
            $this->PermissionIdList = $param["PermissionIdList"];
        }
    }
}
