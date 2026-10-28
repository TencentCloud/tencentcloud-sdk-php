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
 * @method string getSpaceId() 获取<p>空间id</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间id</p>
 * @method string getName() 获取<p>空间名称</p>
 * @method void setName(string $Name) 设置<p>空间名称</p>
 * @method string getDescription() 获取<p>空间描述</p>
 * @method void setDescription(string $Description) 设置<p>空间描述</p>
 * @method array getPermissionIdList() 获取<p>空间权限</p>
 * @method void setPermissionIdList(array $PermissionIdList) 设置<p>空间权限</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：秒时间戳</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：秒时间戳</p>
 * @method string getUpdateTime() 获取<p>更新时间</p><p>参数格式：秒时间戳</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p><p>参数格式：秒时间戳</p>
 */
class Space extends AbstractModel
{
    /**
     * @var string <p>空间id</p>
     */
    public $SpaceId;

    /**
     * @var string <p>空间名称</p>
     */
    public $Name;

    /**
     * @var string <p>空间描述</p>
     */
    public $Description;

    /**
     * @var array <p>空间权限</p>
     */
    public $PermissionIdList;

    /**
     * @var string <p>创建时间</p><p>参数格式：秒时间戳</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：秒时间戳</p>
     */
    public $UpdateTime;

    /**
     * @param string $SpaceId <p>空间id</p>
     * @param string $Name <p>空间名称</p>
     * @param string $Description <p>空间描述</p>
     * @param array $PermissionIdList <p>空间权限</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：秒时间戳</p>
     * @param string $UpdateTime <p>更新时间</p><p>参数格式：秒时间戳</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
