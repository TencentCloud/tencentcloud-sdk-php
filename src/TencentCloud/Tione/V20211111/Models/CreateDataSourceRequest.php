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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataSource请求参数结构体
 *
 * @method string getName() 获取数据源名称
 * @method void setName(string $Name) 设置数据源名称
 * @method string getType() 获取数据源类型英文名
 * @method void setType(string $Type) 设置数据源类型英文名
 * @method string getPermission() 获取数据源权限，取值有RW RO
 * @method void setPermission(string $Permission) 设置数据源权限，取值有RW RO
 * @method string getStorageId() 获取存储实例ID
 * @method void setStorageId(string $StorageId) 设置存储实例ID
 * @method MountConfigureInfo getMountConfigure() 获取数据源挂载配置
 * @method void setMountConfigure(MountConfigureInfo $MountConfigure) 设置数据源挂载配置
 * @method array getTags() 获取标签配置
 * @method void setTags(array $Tags) 设置标签配置
 */
class CreateDataSourceRequest extends AbstractModel
{
    /**
     * @var string 数据源名称
     */
    public $Name;

    /**
     * @var string 数据源类型英文名
     */
    public $Type;

    /**
     * @var string 数据源权限，取值有RW RO
     */
    public $Permission;

    /**
     * @var string 存储实例ID
     */
    public $StorageId;

    /**
     * @var MountConfigureInfo 数据源挂载配置
     */
    public $MountConfigure;

    /**
     * @var array 标签配置
     */
    public $Tags;

    /**
     * @param string $Name 数据源名称
     * @param string $Type 数据源类型英文名
     * @param string $Permission 数据源权限，取值有RW RO
     * @param string $StorageId 存储实例ID
     * @param MountConfigureInfo $MountConfigure 数据源挂载配置
     * @param array $Tags 标签配置
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("MountConfigure",$param) and $param["MountConfigure"] !== null) {
            $this->MountConfigure = new MountConfigureInfo();
            $this->MountConfigure->deserialize($param["MountConfigure"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
