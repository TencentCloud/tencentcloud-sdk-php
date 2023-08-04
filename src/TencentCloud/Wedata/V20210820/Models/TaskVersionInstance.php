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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务实例基本信息
 *
 * @method integer getInstanceVersion() 获取实例版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(integer $InstanceVersion) 设置实例版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionDesc() 获取实例描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionDesc(string $VersionDesc) 设置实例描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChangeType() 获取0, "新增"，1, "修改"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeType(integer $ChangeType) 设置0, "新增"，1, "修改"
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitterUin() 获取版本提交人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitterUin(string $SubmitterUin) 设置版本提交人UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceDate() 获取提交日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceDate(string $InstanceDate) 设置提交日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInstanceStatus() 获取0, "未启用"，1, "启用(生产态)"
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStatus(integer $InstanceStatus) 设置0, "未启用"，1, "启用(生产态)"
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskVersionInstance extends AbstractModel
{
    /**
     * @var integer 实例版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @var string 实例描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionDesc;

    /**
     * @var integer 0, "新增"，1, "修改"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeType;

    /**
     * @var string 版本提交人UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitterUin;

    /**
     * @var string 提交日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceDate;

    /**
     * @var integer 0, "未启用"，1, "启用(生产态)"
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStatus;

    /**
     * @param integer $InstanceVersion 实例版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionDesc 实例描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChangeType 0, "新增"，1, "修改"
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitterUin 版本提交人UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceDate 提交日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InstanceStatus 0, "未启用"，1, "启用(生产态)"
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
        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("VersionDesc",$param) and $param["VersionDesc"] !== null) {
            $this->VersionDesc = $param["VersionDesc"];
        }

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("SubmitterUin",$param) and $param["SubmitterUin"] !== null) {
            $this->SubmitterUin = $param["SubmitterUin"];
        }

        if (array_key_exists("InstanceDate",$param) and $param["InstanceDate"] !== null) {
            $this->InstanceDate = $param["InstanceDate"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }
    }
}
