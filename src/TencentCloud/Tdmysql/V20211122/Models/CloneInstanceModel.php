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
 * 克隆实例对象
 *
 * @method string getCloneEndTime() 获取克隆任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneEndTime(string $CloneEndTime) 设置克隆任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloneId() 获取克隆记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneId(integer $CloneId) 设置克隆记录ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneInsType() 获取克隆实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneInsType(string $CloneInsType) 设置克隆实例类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneInstanceId() 获取克隆实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneInstanceId(string $CloneInstanceId) 设置克隆实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCloneInstanceIsDeleted() 获取克隆实例是否已经删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneInstanceIsDeleted(boolean $CloneInstanceIsDeleted) 设置克隆实例是否已经删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCloneProgress() 获取克隆任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneProgress(float $CloneProgress) 设置克隆任务进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneStartTime() 获取克隆任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneStartTime(string $CloneStartTime) 设置克隆任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneStatus() 获取克隆任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneStatus(string $CloneStatus) 设置克隆任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneTime() 获取克隆时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneTime(string $CloneTime) 设置克隆时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloneType() 获取克隆类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloneType(string $CloneType) 设置克隆类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBType() 获取引擎类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBType(string $DBType) 设置引擎类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceInstanceId() 获取源实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceInstanceId(string $SourceInstanceId) 设置源实例ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloneInstanceModel extends AbstractModel
{
    /**
     * @var string 克隆任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneEndTime;

    /**
     * @var integer 克隆记录ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneId;

    /**
     * @var string 克隆实例类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneInsType;

    /**
     * @var string 克隆实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneInstanceId;

    /**
     * @var boolean 克隆实例是否已经删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneInstanceIsDeleted;

    /**
     * @var float 克隆任务进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneProgress;

    /**
     * @var string 克隆任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneStartTime;

    /**
     * @var string 克隆任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneStatus;

    /**
     * @var string 克隆时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneTime;

    /**
     * @var string 克隆类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloneType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 引擎类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBType;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 源实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceInstanceId;

    /**
     * @param string $CloneEndTime 克隆任务结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloneId 克隆记录ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneInsType 克隆实例类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneInstanceId 克隆实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CloneInstanceIsDeleted 克隆实例是否已经删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CloneProgress 克隆任务进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneStartTime 克隆任务开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneStatus 克隆任务状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneTime 克隆时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloneType 克隆类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBType 引擎类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceInstanceId 源实例ID
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
        if (array_key_exists("CloneEndTime",$param) and $param["CloneEndTime"] !== null) {
            $this->CloneEndTime = $param["CloneEndTime"];
        }

        if (array_key_exists("CloneId",$param) and $param["CloneId"] !== null) {
            $this->CloneId = $param["CloneId"];
        }

        if (array_key_exists("CloneInsType",$param) and $param["CloneInsType"] !== null) {
            $this->CloneInsType = $param["CloneInsType"];
        }

        if (array_key_exists("CloneInstanceId",$param) and $param["CloneInstanceId"] !== null) {
            $this->CloneInstanceId = $param["CloneInstanceId"];
        }

        if (array_key_exists("CloneInstanceIsDeleted",$param) and $param["CloneInstanceIsDeleted"] !== null) {
            $this->CloneInstanceIsDeleted = $param["CloneInstanceIsDeleted"];
        }

        if (array_key_exists("CloneProgress",$param) and $param["CloneProgress"] !== null) {
            $this->CloneProgress = $param["CloneProgress"];
        }

        if (array_key_exists("CloneStartTime",$param) and $param["CloneStartTime"] !== null) {
            $this->CloneStartTime = $param["CloneStartTime"];
        }

        if (array_key_exists("CloneStatus",$param) and $param["CloneStatus"] !== null) {
            $this->CloneStatus = $param["CloneStatus"];
        }

        if (array_key_exists("CloneTime",$param) and $param["CloneTime"] !== null) {
            $this->CloneTime = $param["CloneTime"];
        }

        if (array_key_exists("CloneType",$param) and $param["CloneType"] !== null) {
            $this->CloneType = $param["CloneType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DBType",$param) and $param["DBType"] !== null) {
            $this->DBType = $param["DBType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceInstanceId",$param) and $param["SourceInstanceId"] !== null) {
            $this->SourceInstanceId = $param["SourceInstanceId"];
        }
    }
}
