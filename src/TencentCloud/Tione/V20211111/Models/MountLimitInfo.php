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
 * 挂载限制
 *
 * @method string getType() 获取数据源类型英文名
 * @method void setType(string $Type) 设置数据源类型英文名
 * @method string getStorageId() 获取数据源所属存储实例ID
 * @method void setStorageId(string $StorageId) 设置数据源所属存储实例ID
 * @method string getStorageName() 获取数据源所属存储实例名称
 * @method void setStorageName(string $StorageName) 设置数据源所属存储实例名称
 * @method boolean getLimitMount() 获取限制开关是否开启，只有开启时才有限制
 * @method void setLimitMount(boolean $LimitMount) 设置限制开关是否开启，只有开启时才有限制
 * @method string getCreator() 获取创建者uin
 * @method void setCreator(string $Creator) 设置创建者uin
 * @method string getCreatorName() 获取创建者名称
 * @method void setCreatorName(string $CreatorName) 设置创建者名称
 * @method string getCreateTime() 获取创建时间, 格式为yyyy-mm-ddThh:mm:ssZ
 * @method void setCreateTime(string $CreateTime) 设置创建时间, 格式为yyyy-mm-ddThh:mm:ssZ
 * @method string getUpdateTime() 获取更新时间, 格式为yyyy-mm-ddThh:mm:ssZ
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间, 格式为yyyy-mm-ddThh:mm:ssZ
 * @method StorageExtraConf getExtraConf() 获取额外配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraConf(StorageExtraConf $ExtraConf) 设置额外配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class MountLimitInfo extends AbstractModel
{
    /**
     * @var string 数据源类型英文名
     */
    public $Type;

    /**
     * @var string 数据源所属存储实例ID
     */
    public $StorageId;

    /**
     * @var string 数据源所属存储实例名称
     */
    public $StorageName;

    /**
     * @var boolean 限制开关是否开启，只有开启时才有限制
     */
    public $LimitMount;

    /**
     * @var string 创建者uin
     */
    public $Creator;

    /**
     * @var string 创建者名称
     */
    public $CreatorName;

    /**
     * @var string 创建时间, 格式为yyyy-mm-ddThh:mm:ssZ
     */
    public $CreateTime;

    /**
     * @var string 更新时间, 格式为yyyy-mm-ddThh:mm:ssZ
     */
    public $UpdateTime;

    /**
     * @var StorageExtraConf 额外配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraConf;

    /**
     * @param string $Type 数据源类型英文名
     * @param string $StorageId 数据源所属存储实例ID
     * @param string $StorageName 数据源所属存储实例名称
     * @param boolean $LimitMount 限制开关是否开启，只有开启时才有限制
     * @param string $Creator 创建者uin
     * @param string $CreatorName 创建者名称
     * @param string $CreateTime 创建时间, 格式为yyyy-mm-ddThh:mm:ssZ
     * @param string $UpdateTime 更新时间, 格式为yyyy-mm-ddThh:mm:ssZ
     * @param StorageExtraConf $ExtraConf 额外配置
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StorageId",$param) and $param["StorageId"] !== null) {
            $this->StorageId = $param["StorageId"];
        }

        if (array_key_exists("StorageName",$param) and $param["StorageName"] !== null) {
            $this->StorageName = $param["StorageName"];
        }

        if (array_key_exists("LimitMount",$param) and $param["LimitMount"] !== null) {
            $this->LimitMount = $param["LimitMount"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreatorName",$param) and $param["CreatorName"] !== null) {
            $this->CreatorName = $param["CreatorName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExtraConf",$param) and $param["ExtraConf"] !== null) {
            $this->ExtraConf = new StorageExtraConf();
            $this->ExtraConf->deserialize($param["ExtraConf"]);
        }
    }
}
