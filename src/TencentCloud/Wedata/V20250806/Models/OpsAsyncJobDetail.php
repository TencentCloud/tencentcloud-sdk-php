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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步操作详情
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getAsyncId() 获取操作id
 * @method void setAsyncId(string $AsyncId) 设置操作id
 * @method string getAsyncType() 获取异步操作类型
 * @method void setAsyncType(string $AsyncType) 设置异步操作类型
 * @method string getStatus() 获取异步操作状态：初始状态: INIT; 运行中: RUNNING; 成功: SUCCESS; 失败: FAIL; 部分成功: PART_SUCCESS
 * @method void setStatus(string $Status) 设置异步操作状态：初始状态: INIT; 运行中: RUNNING; 成功: SUCCESS; 失败: FAIL; 部分成功: PART_SUCCESS
 * @method string getErrorDesc() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalSubProcessCount() 获取子操作总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalSubProcessCount(integer $TotalSubProcessCount) 设置子操作总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFinishedSubProcessCount() 获取已完成的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinishedSubProcessCount(integer $FinishedSubProcessCount) 设置已完成的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessSubProcessCount() 获取已成功的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessSubProcessCount(integer $SuccessSubProcessCount) 设置已成功的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUserUin() 获取操作人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUserUin(string $CreateUserUin) 设置操作人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取操作创建时间
 * @method void setCreateTime(string $CreateTime) 设置操作创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class OpsAsyncJobDetail extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 操作id
     */
    public $AsyncId;

    /**
     * @var string 异步操作类型
     */
    public $AsyncType;

    /**
     * @var string 异步操作状态：初始状态: INIT; 运行中: RUNNING; 成功: SUCCESS; 失败: FAIL; 部分成功: PART_SUCCESS
     */
    public $Status;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @var integer 子操作总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalSubProcessCount;

    /**
     * @var integer 已完成的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinishedSubProcessCount;

    /**
     * @var integer 已成功的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessSubProcessCount;

    /**
     * @var string 操作人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUserUin;

    /**
     * @var string 操作创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ProjectId 项目id
     * @param string $AsyncId 操作id
     * @param string $AsyncType 异步操作类型
     * @param string $Status 异步操作状态：初始状态: INIT; 运行中: RUNNING; 成功: SUCCESS; 失败: FAIL; 部分成功: PART_SUCCESS
     * @param string $ErrorDesc 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalSubProcessCount 子操作总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FinishedSubProcessCount 已完成的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessSubProcessCount 已成功的子操作个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUserUin 操作人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 操作创建时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AsyncId",$param) and $param["AsyncId"] !== null) {
            $this->AsyncId = $param["AsyncId"];
        }

        if (array_key_exists("AsyncType",$param) and $param["AsyncType"] !== null) {
            $this->AsyncType = $param["AsyncType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("TotalSubProcessCount",$param) and $param["TotalSubProcessCount"] !== null) {
            $this->TotalSubProcessCount = $param["TotalSubProcessCount"];
        }

        if (array_key_exists("FinishedSubProcessCount",$param) and $param["FinishedSubProcessCount"] !== null) {
            $this->FinishedSubProcessCount = $param["FinishedSubProcessCount"];
        }

        if (array_key_exists("SuccessSubProcessCount",$param) and $param["SuccessSubProcessCount"] !== null) {
            $this->SuccessSubProcessCount = $param["SuccessSubProcessCount"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
