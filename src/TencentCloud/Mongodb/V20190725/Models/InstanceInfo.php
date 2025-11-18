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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息详情
 *
 * @method integer getAuditLogExpireDay() 获取审计日志保存时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditLogExpireDay(integer $AuditLogExpireDay) 设置审计日志保存时长。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuditStatus() 获取审计状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditStatus(string $AuditStatus) 设置审计状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceRole() 获取实例角色。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceRole(string $InstanceRole) 设置实例角色。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取实例类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMongodbVersion() 获取数据库版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongodbVersion(string $MongodbVersion) 设置数据库版本。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置实例状态。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportAudit() 获取是否支持审计。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportAudit(boolean $SupportAudit) 设置是否支持审计。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer 审计日志保存时长。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditLogExpireDay;

    /**
     * @var string 审计状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditStatus;

    /**
     * @var string 实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 实例名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 实例角色。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceRole;

    /**
     * @var string 实例类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 数据库版本。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongodbVersion;

    /**
     * @var integer 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 地域。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 实例状态。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var boolean 是否支持审计。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportAudit;

    /**
     * @var string 可用区。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @param integer $AuditLogExpireDay 审计日志保存时长。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuditStatus 审计状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceRole 实例角色。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType 实例类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MongodbVersion 数据库版本。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId 项目 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例状态。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportAudit 是否支持审计。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 标签信息
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
        if (array_key_exists("AuditLogExpireDay",$param) and $param["AuditLogExpireDay"] !== null) {
            $this->AuditLogExpireDay = $param["AuditLogExpireDay"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MongodbVersion",$param) and $param["MongodbVersion"] !== null) {
            $this->MongodbVersion = $param["MongodbVersion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SupportAudit",$param) and $param["SupportAudit"] !== null) {
            $this->SupportAudit = $param["SupportAudit"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
