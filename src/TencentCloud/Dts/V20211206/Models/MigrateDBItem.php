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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询迁移实例列表的实例对象
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getVip() 获取<p>实例Vip</p>
 * @method void setVip(string $Vip) 设置<p>实例Vip</p>
 * @method integer getVport() 获取<p>实例Vport</p>
 * @method void setVport(integer $Vport) 设置<p>实例Vport</p>
 * @method integer getUsable() 获取<p>是否可以作为迁移对象，1-可以，0-不可以</p>
 * @method void setUsable(integer $Usable) 设置<p>是否可以作为迁移对象，1-可以，0-不可以</p>
 * @method string getHint() 获取<p>不可以作为迁移对象的原因</p>
 * @method void setHint(string $Hint) 设置<p>不可以作为迁移对象的原因</p>
 * @method string getStorageType() 获取<p>硬盘类型，仅Postgresql适用</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 本地SSD</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： SSD云硬盘</li><li>CLOUD_HSSD： 增强型SSD云硬盘</li></ul>
 * @method void setStorageType(string $StorageType) 设置<p>硬盘类型，仅Postgresql适用</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 本地SSD</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： SSD云硬盘</li><li>CLOUD_HSSD： 增强型SSD云硬盘</li></ul>
 */
class MigrateDBItem extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例Vip</p>
     */
    public $Vip;

    /**
     * @var integer <p>实例Vport</p>
     */
    public $Vport;

    /**
     * @var integer <p>是否可以作为迁移对象，1-可以，0-不可以</p>
     */
    public $Usable;

    /**
     * @var string <p>不可以作为迁移对象的原因</p>
     */
    public $Hint;

    /**
     * @var string <p>硬盘类型，仅Postgresql适用</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 本地SSD</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： SSD云硬盘</li><li>CLOUD_HSSD： 增强型SSD云硬盘</li></ul>
     */
    public $StorageType;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $Vip <p>实例Vip</p>
     * @param integer $Vport <p>实例Vport</p>
     * @param integer $Usable <p>是否可以作为迁移对象，1-可以，0-不可以</p>
     * @param string $Hint <p>不可以作为迁移对象的原因</p>
     * @param string $StorageType <p>硬盘类型，仅Postgresql适用</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 本地SSD</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： SSD云硬盘</li><li>CLOUD_HSSD： 增强型SSD云硬盘</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Usable",$param) and $param["Usable"] !== null) {
            $this->Usable = $param["Usable"];
        }

        if (array_key_exists("Hint",$param) and $param["Hint"] !== null) {
            $this->Hint = $param["Hint"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
