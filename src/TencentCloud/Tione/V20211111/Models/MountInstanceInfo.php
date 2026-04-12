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
 * @method string getType() 获取<p>类型英文名</p>
 * @method void setType(string $Type) 设置<p>类型英文名</p>
 * @method string getStorageId() 获取<p>存储实例ID</p>
 * @method void setStorageId(string $StorageId) 设置<p>存储实例ID</p>
 * @method string getStorageName() 获取<p>存储实例名称</p>
 * @method void setStorageName(string $StorageName) 设置<p>存储实例名称</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>0： 可挂载（正常）</li><li>1： 不可挂载（挂载限制）</li><li>2： 不可挂载（存储配置关闭）</li></ul>
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>0： 可挂载（正常）</li><li>1： 不可挂载（挂载限制）</li><li>2： 不可挂载（存储配置关闭）</li></ul>
 * @method StorageExtraConf getExtraConf() 获取<p>额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraConf(StorageExtraConf $ExtraConf) 设置<p>额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MountInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>类型英文名</p>
     */
    public $Type;

    /**
     * @var string <p>存储实例ID</p>
     */
    public $StorageId;

    /**
     * @var string <p>存储实例名称</p>
     */
    public $StorageName;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>0： 可挂载（正常）</li><li>1： 不可挂载（挂载限制）</li><li>2： 不可挂载（存储配置关闭）</li></ul>
     */
    public $Status;

    /**
     * @var StorageExtraConf <p>额外配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraConf;

    /**
     * @param string $Type <p>类型英文名</p>
     * @param string $StorageId <p>存储实例ID</p>
     * @param string $StorageName <p>存储实例名称</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>0： 可挂载（正常）</li><li>1： 不可挂载（挂载限制）</li><li>2： 不可挂载（存储配置关闭）</li></ul>
     * @param StorageExtraConf $ExtraConf <p>额外配置</p>
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
