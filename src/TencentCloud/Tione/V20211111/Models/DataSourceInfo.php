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
 * 数据源信息
 *
 * @method string getId() 获取<p>数据源ID</p>
 * @method void setId(string $Id) 设置<p>数据源ID</p>
 * @method string getName() 获取<p>数据源名称</p>
 * @method void setName(string $Name) 设置<p>数据源名称</p>
 * @method string getCreator() 获取<p>创建者uin</p>
 * @method void setCreator(string $Creator) 设置<p>创建者uin</p>
 * @method string getCreatorName() 获取<p>创建者名称</p>
 * @method void setCreatorName(string $CreatorName) 设置<p>创建者名称</p>
 * @method string getType() 获取<p>数据源类型英文名</p>
 * @method void setType(string $Type) 设置<p>数据源类型英文名</p>
 * @method string getPermission() 获取<p>数据源权限，取值有RW RO</p>
 * @method void setPermission(string $Permission) 设置<p>数据源权限，取值有RW RO</p>
 * @method string getStorageId() 获取<p>数据源所属存储实例ID</p>
 * @method void setStorageId(string $StorageId) 设置<p>数据源所属存储实例ID</p>
 * @method string getStorageName() 获取<p>数据源所属存储实例名称</p>
 * @method void setStorageName(string $StorageName) 设置<p>数据源所属存储实例名称</p>
 * @method MountConfigureInfo getMountConfigure() 获取<p>数据源挂载配置</p>
 * @method void setMountConfigure(MountConfigureInfo $MountConfigure) 设置<p>数据源挂载配置</p>
 * @method string getCreateTime() 获取<p>创建时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
 * @method string getUpdateTime() 获取<p>更新时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
 * @method boolean getLimitMount() 获取<p>限制开关是否开启，只有开启时才有限制</p>
 * @method void setLimitMount(boolean $LimitMount) 设置<p>限制开关是否开启，只有开启时才有限制</p>
 * @method array getTags() 获取<p>标签配置</p>
 * @method void setTags(array $Tags) 设置<p>标签配置</p>
 * @method StorageExtraConf getExtraConf() 获取<p>额外配置,对应存储实例的额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraConf(StorageExtraConf $ExtraConf) 设置<p>额外配置,对应存储实例的额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataSourceInfo extends AbstractModel
{
    /**
     * @var string <p>数据源ID</p>
     */
    public $Id;

    /**
     * @var string <p>数据源名称</p>
     */
    public $Name;

    /**
     * @var string <p>创建者uin</p>
     */
    public $Creator;

    /**
     * @var string <p>创建者名称</p>
     */
    public $CreatorName;

    /**
     * @var string <p>数据源类型英文名</p>
     */
    public $Type;

    /**
     * @var string <p>数据源权限，取值有RW RO</p>
     */
    public $Permission;

    /**
     * @var string <p>数据源所属存储实例ID</p>
     */
    public $StorageId;

    /**
     * @var string <p>数据源所属存储实例名称</p>
     */
    public $StorageName;

    /**
     * @var MountConfigureInfo <p>数据源挂载配置</p>
     */
    public $MountConfigure;

    /**
     * @var string <p>创建时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>限制开关是否开启，只有开启时才有限制</p>
     */
    public $LimitMount;

    /**
     * @var array <p>标签配置</p>
     */
    public $Tags;

    /**
     * @var StorageExtraConf <p>额外配置,对应存储实例的额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraConf;

    /**
     * @param string $Id <p>数据源ID</p>
     * @param string $Name <p>数据源名称</p>
     * @param string $Creator <p>创建者uin</p>
     * @param string $CreatorName <p>创建者名称</p>
     * @param string $Type <p>数据源类型英文名</p>
     * @param string $Permission <p>数据源权限，取值有RW RO</p>
     * @param string $StorageId <p>数据源所属存储实例ID</p>
     * @param string $StorageName <p>数据源所属存储实例名称</p>
     * @param MountConfigureInfo $MountConfigure <p>数据源挂载配置</p>
     * @param string $CreateTime <p>创建时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
     * @param string $UpdateTime <p>更新时间, 格式为yyyy-mm-ddThh:mm:ssZ</p>
     * @param boolean $LimitMount <p>限制开关是否开启，只有开启时才有限制</p>
     * @param array $Tags <p>标签配置</p>
     * @param StorageExtraConf $ExtraConf <p>额外配置,对应存储实例的额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
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

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("MountConfigure",$param) and $param["MountConfigure"] !== null) {
            $this->MountConfigure = new MountConfigureInfo();
            $this->MountConfigure->deserialize($param["MountConfigure"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LimitMount",$param) and $param["LimitMount"] !== null) {
            $this->LimitMount = $param["LimitMount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ExtraConf",$param) and $param["ExtraConf"] !== null) {
            $this->ExtraConf = new StorageExtraConf();
            $this->ExtraConf->deserialize($param["ExtraConf"]);
        }
    }
}
