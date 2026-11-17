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
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
 * @method string getName() 获取<p>数据源名称</p>
 * @method void setName(string $Name) 设置<p>数据源名称</p>
 * @method string getType() 获取<p>数据源类型英文名</p>
 * @method void setType(string $Type) 设置<p>数据源类型英文名</p>
 * @method string getPermission() 获取<p>数据源权限，取值有RW RO</p>
 * @method void setPermission(string $Permission) 设置<p>数据源权限，取值有RW RO</p>
 * @method string getStorageId() 获取<p>存储实例ID</p>
 * @method void setStorageId(string $StorageId) 设置<p>存储实例ID</p>
 * @method MountConfigureInfo getMountConfigure() 获取<p>数据源挂载配置</p>
 * @method void setMountConfigure(MountConfigureInfo $MountConfigure) 设置<p>数据源挂载配置</p>
 * @method array getTags() 获取<p>标签配置</p>
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
 * @method string getContainerPath() 获取<p>挂载数据源时默认填充的容器内路径</p>
 * @method void setContainerPath(string $ContainerPath) 设置<p>挂载数据源时默认填充的容器内路径</p>
 */
class CreateDataSourceRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     */
    public $TiProjectId;

    /**
     * @var string <p>数据源名称</p>
     */
    public $Name;

    /**
     * @var string <p>数据源类型英文名</p>
     */
    public $Type;

    /**
     * @var string <p>数据源权限，取值有RW RO</p>
     */
    public $Permission;

    /**
     * @var string <p>存储实例ID</p>
     */
    public $StorageId;

    /**
     * @var MountConfigureInfo <p>数据源挂载配置</p>
     */
    public $MountConfigure;

    /**
     * @var array <p>标签配置</p>
     */
    public $Tags;

    /**
     * @var string <p>挂载数据源时默认填充的容器内路径</p>
     */
    public $ContainerPath;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>使用非默认空间必须填写工作空间ID，使用默认空间无需填写工作空间ID。</p>
     * @param string $Name <p>数据源名称</p>
     * @param string $Type <p>数据源类型英文名</p>
     * @param string $Permission <p>数据源权限，取值有RW RO</p>
     * @param string $StorageId <p>存储实例ID</p>
     * @param MountConfigureInfo $MountConfigure <p>数据源挂载配置</p>
     * @param array $Tags <p>标签配置</p>
     * @param string $ContainerPath <p>挂载数据源时默认填充的容器内路径</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
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

        if (array_key_exists("ContainerPath",$param) and $param["ContainerPath"] !== null) {
            $this->ContainerPath = $param["ContainerPath"];
        }
    }
}
