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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志实例信息
 *
 * @method string getInstanceName() 获取<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProjectId() 获取<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(integer $ProjectId) 设置<p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置<p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngine() 获取<p>引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngine(string $Engine) 设置<p>引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineVersion() 获取<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineVersion(string $EngineVersion) 设置<p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceStatus() 获取<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(string $InstanceStatus) 设置<p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportAudit() 获取<p>是否支持审计。1代表支持，0代表不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportAudit(integer $IsSupportAudit) 设置<p>是否支持审计。1代表支持，0代表不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getAuditType() 获取<p>日志类型</p><p>枚举值：</p><ul><li>complex： 精细审计</li><li>simple： 极速审计</li></ul>
 * @method void setAuditType(string $AuditType) 设置<p>日志类型</p><p>枚举值：</p><ul><li>complex： 精细审计</li><li>simple： 极速审计</li></ul>
 */
class LogInstanceInfo extends AbstractModel
{
    /**
     * @var string <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

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
     * @var string <p>引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Engine;

    /**
     * @var string <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineVersion;

    /**
     * @var string <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @var integer <p>是否支持审计。1代表支持，0代表不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportAudit;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>日志类型</p><p>枚举值：</p><ul><li>complex： 精细审计</li><li>simple： 极速审计</li></ul>
     */
    public $AuditType;

    /**
     * @param string $InstanceName <p>实例名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProjectId <p>项目ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>实例标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Engine <p>引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineVersion <p>引擎版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceStatus <p>实例状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportAudit <p>是否支持审计。1代表支持，0代表不支持。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例ID</p>
     * @param string $AuditType <p>日志类型</p><p>枚举值：</p><ul><li>complex： 精细审计</li><li>simple： 极速审计</li></ul>
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("IsSupportAudit",$param) and $param["IsSupportAudit"] !== null) {
            $this->IsSupportAudit = $param["IsSupportAudit"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AuditType",$param) and $param["AuditType"] !== null) {
            $this->AuditType = $param["AuditType"];
        }
    }
}
