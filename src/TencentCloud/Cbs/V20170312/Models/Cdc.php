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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述独享集群的详细信息。
 *
 * @method string getCageId() 获取独享集群围笼ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCageId(string $CageId) 设置独享集群围笼ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcState() 获取独享集群状态。取值范围：<br><li>NORMAL:正常<br><li>CLOSED：关闭售卖<br><li>FAULT：状态异常<br><li>ISOLATED：已隔离。
 * @method void setCdcState(string $CdcState) 设置独享集群状态。取值范围：<br><li>NORMAL:正常<br><li>CLOSED：关闭售卖<br><li>FAULT：状态异常<br><li>ISOLATED：已隔离。
 * @method string getZone() 获取独享集群所属的[可用区](/document/api/213/9452#zone)ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置独享集群所属的[可用区](/document/api/213/9452#zone)ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcName() 获取独享集群实例名称。
 * @method void setCdcName(string $CdcName) 设置独享集群实例名称。
 * @method CdcSize getCdcResource() 获取独享集群的资源大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdcResource(CdcSize $CdcResource) 设置独享集群的资源大小。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdcId() 获取独享集群实例id。
 * @method void setCdcId(string $CdcId) 设置独享集群实例id。
 * @method string getDiskType() 获取独享集群类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘集群<br><li>CLOUD_PREMIUM：表示高性能云硬盘集群<br><li>CLOUD_SSD：SSD表示SSD云硬盘集群。
 * @method void setDiskType(string $DiskType) 设置独享集群类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘集群<br><li>CLOUD_PREMIUM：表示高性能云硬盘集群<br><li>CLOUD_SSD：SSD表示SSD云硬盘集群。
 * @method string getExpiredTime() 获取独享集群过期时间。
 * @method void setExpiredTime(string $ExpiredTime) 设置独享集群过期时间。
 */
class Cdc extends AbstractModel
{
    /**
     * @var string 独享集群围笼ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CageId;

    /**
     * @var string 独享集群状态。取值范围：<br><li>NORMAL:正常<br><li>CLOSED：关闭售卖<br><li>FAULT：状态异常<br><li>ISOLATED：已隔离。
     */
    public $CdcState;

    /**
     * @var string 独享集群所属的[可用区](/document/api/213/9452#zone)ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 独享集群实例名称。
     */
    public $CdcName;

    /**
     * @var CdcSize 独享集群的资源大小。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdcResource;

    /**
     * @var string 独享集群实例id。
     */
    public $CdcId;

    /**
     * @var string 独享集群类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘集群<br><li>CLOUD_PREMIUM：表示高性能云硬盘集群<br><li>CLOUD_SSD：SSD表示SSD云硬盘集群。
     */
    public $DiskType;

    /**
     * @var string 独享集群过期时间。
     */
    public $ExpiredTime;

    /**
     * @param string $CageId 独享集群围笼ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcState 独享集群状态。取值范围：<br><li>NORMAL:正常<br><li>CLOSED：关闭售卖<br><li>FAULT：状态异常<br><li>ISOLATED：已隔离。
     * @param string $Zone 独享集群所属的[可用区](/document/api/213/9452#zone)ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcName 独享集群实例名称。
     * @param CdcSize $CdcResource 独享集群的资源大小。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdcId 独享集群实例id。
     * @param string $DiskType 独享集群类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘集群<br><li>CLOUD_PREMIUM：表示高性能云硬盘集群<br><li>CLOUD_SSD：SSD表示SSD云硬盘集群。
     * @param string $ExpiredTime 独享集群过期时间。
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
        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("CdcState",$param) and $param["CdcState"] !== null) {
            $this->CdcState = $param["CdcState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }

        if (array_key_exists("CdcResource",$param) and $param["CdcResource"] !== null) {
            $this->CdcResource = new CdcSize();
            $this->CdcResource->deserialize($param["CdcResource"]);
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
