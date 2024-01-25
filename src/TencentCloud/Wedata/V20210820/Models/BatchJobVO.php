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
 * 操作列表实体类
 *
 * @method integer getJobId() 获取批量操作Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(integer $JobId) 设置批量操作Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobType() 获取批量操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(string $JobType) 设置批量操作类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
初始状态：INIT;运行中：RUNNING;成功：SUCCESS;失败：FAIL;部分成功PART_SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
初始状态：INIT;运行中：RUNNING;成功：SUCCESS;失败：FAIL;部分成功PART_SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerName() 获取操作人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerName(string $OwnerName) 设置操作人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerId() 获取操作人Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerId(string $OwnerId) 设置操作人Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchJobVO extends AbstractModel
{
    /**
     * @var integer 批量操作Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 批量操作类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var string 状态
初始状态：INIT;运行中：RUNNING;成功：SUCCESS;失败：FAIL;部分成功PART_SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 操作人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerName;

    /**
     * @var string 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 操作人Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerId;

    /**
     * @param integer $JobId 批量操作Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobType 批量操作类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
初始状态：INIT;运行中：RUNNING;成功：SUCCESS;失败：FAIL;部分成功PART_SUCCESS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerName 操作人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerId 操作人Id
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
