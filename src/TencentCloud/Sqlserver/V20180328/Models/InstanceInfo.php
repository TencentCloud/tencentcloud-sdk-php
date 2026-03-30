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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVip() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVip(string $Vip) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArchitecture() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchitecture(string $Architecture) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getROFlag() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setROFlag(string $ROFlag) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHAFlag() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHAFlag(string $HAFlag) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuditLogStatus() 获取<p>审计日志状态 ON, OFF, ERROR</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditLogStatus(string $AuditLogStatus) 设置<p>审计日志状态 ON, OFF, ERROR</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuditLogHosts() 获取<p>审计日志上报地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditLogHosts(array $AuditLogHosts) 设置<p>审计日志上报地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuditLogStatusMessage() 获取<p>审计日志状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuditLogStatusMessage(string $AuditLogStatusMessage) 设置<p>审计日志状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置<p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionName() 获取<p>版本名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionName(string $VersionName) 设置<p>版本名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取<p>地域id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置<p>地域id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取<p>区id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置<p>区id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取<p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置<p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var array <p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var integer <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vip;

    /**
     * @var integer <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Architecture;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ROFlag;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HAFlag;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>审计日志状态 ON, OFF, ERROR</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditLogStatus;

    /**
     * @var array <p>审计日志上报地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditLogHosts;

    /**
     * @var string <p>审计日志状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuditLogStatusMessage;

    /**
     * @var string <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string <p>版本名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionName;

    /**
     * @var integer <p>地域id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer <p>区id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Vip <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Architecture <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ROFlag <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HAFlag <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>test</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuditLogStatus <p>审计日志状态 ON, OFF, ERROR</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuditLogHosts <p>审计日志上报地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuditLogStatusMessage <p>审计日志状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version <p>版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionName <p>版本名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId <p>地域id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId <p>区id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone <p>区</p>
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("ROFlag",$param) and $param["ROFlag"] !== null) {
            $this->ROFlag = $param["ROFlag"];
        }

        if (array_key_exists("HAFlag",$param) and $param["HAFlag"] !== null) {
            $this->HAFlag = $param["HAFlag"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AuditLogStatus",$param) and $param["AuditLogStatus"] !== null) {
            $this->AuditLogStatus = $param["AuditLogStatus"];
        }

        if (array_key_exists("AuditLogHosts",$param) and $param["AuditLogHosts"] !== null) {
            $this->AuditLogHosts = $param["AuditLogHosts"];
        }

        if (array_key_exists("AuditLogStatusMessage",$param) and $param["AuditLogStatusMessage"] !== null) {
            $this->AuditLogStatusMessage = $param["AuditLogStatusMessage"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
