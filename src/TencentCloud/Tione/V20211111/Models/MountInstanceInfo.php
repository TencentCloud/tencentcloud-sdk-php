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
 * 挂载的实例列表
 *
 * @method string getType() 获取类型英文名
 * @method void setType(string $Type) 设置类型英文名
 * @method string getStorageId() 获取存储实例ID
 * @method void setStorageId(string $StorageId) 设置存储实例ID
 * @method string getStorageName() 获取存储实例名称
 * @method void setStorageName(string $StorageName) 设置存储实例名称
 * @method integer getStatus() 获取状态，0可挂载 1不可挂载(挂载限制)
 * @method void setStatus(integer $Status) 设置状态，0可挂载 1不可挂载(挂载限制)
 * @method StorageExtraConf getExtraConf() 获取额外配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraConf(StorageExtraConf $ExtraConf) 设置额外配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class MountInstanceInfo extends AbstractModel
{
    /**
     * @var string 类型英文名
     */
    public $Type;

    /**
     * @var string 存储实例ID
     */
    public $StorageId;

    /**
     * @var string 存储实例名称
     */
    public $StorageName;

    /**
     * @var integer 状态，0可挂载 1不可挂载(挂载限制)
     */
    public $Status;

    /**
     * @var StorageExtraConf 额外配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraConf;

    /**
     * @param string $Type 类型英文名
     * @param string $StorageId 存储实例ID
     * @param string $StorageName 存储实例名称
     * @param integer $Status 状态，0可挂载 1不可挂载(挂载限制)
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExtraConf",$param) and $param["ExtraConf"] !== null) {
            $this->ExtraConf = new StorageExtraConf();
            $this->ExtraConf->deserialize($param["ExtraConf"]);
        }
    }
}
