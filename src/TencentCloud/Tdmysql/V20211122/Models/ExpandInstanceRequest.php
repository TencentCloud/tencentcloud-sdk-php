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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExpandInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getStorageNodeNum() 获取<p>存储节点扩容至多少个节点，如果没有变化，传当前节点数</p>
 * @method void setStorageNodeNum(integer $StorageNodeNum) 设置<p>存储节点扩容至多少个节点，如果没有变化，传当前节点数</p>
 * @method array getZones() 获取<p>可用区列表</p>
 * @method void setZones(array $Zones) 设置<p>可用区列表</p>
 * @method integer getAZMode() 获取<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
 * @method void setAZMode(integer $AZMode) 设置<p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
 * @method string getPrimaryAZ() 获取<p>AZMode传3时，表示主AZ</p>
 * @method void setPrimaryAZ(string $PrimaryAZ) 设置<p>AZMode传3时，表示主AZ</p>
 * @method integer getFullReplications() 获取<p>全能型副本数，取值范围包括1-3</p>
 * @method void setFullReplications(integer $FullReplications) 设置<p>全能型副本数，取值范围包括1-3</p>
 */
class ExpandInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>存储节点扩容至多少个节点，如果没有变化，传当前节点数</p>
     */
    public $StorageNodeNum;

    /**
     * @var array <p>可用区列表</p>
     */
    public $Zones;

    /**
     * @var integer <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
     */
    public $AZMode;

    /**
     * @var string <p>AZMode传3时，表示主AZ</p>
     */
    public $PrimaryAZ;

    /**
     * @var integer <p>全能型副本数，取值范围包括1-3</p>
     */
    public $FullReplications;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $StorageNodeNum <p>存储节点扩容至多少个节点，如果没有变化，传当前节点数</p>
     * @param array $Zones <p>可用区列表</p>
     * @param integer $AZMode <p>az模式，1: 单AZ 2: 多AZ非主AZ模式 3: 多AZ主AZ模式</p>
     * @param string $PrimaryAZ <p>AZMode传3时，表示主AZ</p>
     * @param integer $FullReplications <p>全能型副本数，取值范围包括1-3</p>
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

        if (array_key_exists("StorageNodeNum",$param) and $param["StorageNodeNum"] !== null) {
            $this->StorageNodeNum = $param["StorageNodeNum"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("AZMode",$param) and $param["AZMode"] !== null) {
            $this->AZMode = $param["AZMode"];
        }

        if (array_key_exists("PrimaryAZ",$param) and $param["PrimaryAZ"] !== null) {
            $this->PrimaryAZ = $param["PrimaryAZ"];
        }

        if (array_key_exists("FullReplications",$param) and $param["FullReplications"] !== null) {
            $this->FullReplications = $param["FullReplications"];
        }
    }
}
