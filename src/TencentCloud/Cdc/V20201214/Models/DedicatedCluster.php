<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专用集群列表
 *
 * @method string getDedicatedClusterId() 获取专用集群id。如"cluster-xxxxx"。
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置专用集群id。如"cluster-xxxxx"。
 * @method string getZone() 获取专用集群所属可用区名称。
 * @method void setZone(string $Zone) 设置专用集群所属可用区名称。
 * @method string getDescription() 获取专用集群的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置专用集群的描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取专用集群的名称。
 * @method void setName(string $Name) 设置专用集群的名称。
 * @method string getLifecycleStatus() 获取专用集群的生命周期。如"PENDING"。
 * @method void setLifecycleStatus(string $LifecycleStatus) 设置专用集群的生命周期。如"PENDING"。
 * @method string getCreateTime() 获取专用集群的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置专用集群的创建时间。
 * @method string getSiteId() 获取专用集群所属的站点id。
 * @method void setSiteId(string $SiteId) 设置专用集群所属的站点id。
 */
class DedicatedCluster extends AbstractModel
{
    /**
     * @var string 专用集群id。如"cluster-xxxxx"。
     */
    public $DedicatedClusterId;

    /**
     * @var string 专用集群所属可用区名称。
     */
    public $Zone;

    /**
     * @var string 专用集群的描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 专用集群的名称。
     */
    public $Name;

    /**
     * @var string 专用集群的生命周期。如"PENDING"。
     */
    public $LifecycleStatus;

    /**
     * @var string 专用集群的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 专用集群所属的站点id。
     */
    public $SiteId;

    /**
     * @param string $DedicatedClusterId 专用集群id。如"cluster-xxxxx"。
     * @param string $Zone 专用集群所属可用区名称。
     * @param string $Description 专用集群的描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 专用集群的名称。
     * @param string $LifecycleStatus 专用集群的生命周期。如"PENDING"。
     * @param string $CreateTime 专用集群的创建时间。
     * @param string $SiteId 专用集群所属的站点id。
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LifecycleStatus",$param) and $param["LifecycleStatus"] !== null) {
            $this->LifecycleStatus = $param["LifecycleStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }
    }
}
