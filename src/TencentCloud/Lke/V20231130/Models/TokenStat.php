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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 当前执行的 token 统计信息
 *
 * @method string getSessionId() 获取会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置会话 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取请求 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置请求 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordId() 获取对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(string $RecordId) 设置对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedCount() 获取token 已使用数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedCount(integer $UsedCount) 设置token 已使用数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFreeCount() 获取免费 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFreeCount(integer $FreeCount) 设置免费 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrderCount() 获取订单总 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderCount(integer $OrderCount) 设置订单总 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusSummary() 获取当前执行状态汇总, 常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusSummary(string $StatusSummary) 设置当前执行状态汇总, 常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusSummaryTitle() 获取当前执行状态汇总后中文展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusSummaryTitle(string $StatusSummaryTitle) 设置当前执行状态汇总后中文展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElapsed() 获取当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElapsed(integer $Elapsed) 设置当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTokenCount() 获取当前请求消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTokenCount(integer $TokenCount) 设置当前请求消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProcedures() 获取执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcedures(array $Procedures) 设置执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class TokenStat extends AbstractModel
{
    /**
     * @var string 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string 请求 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @var string 对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer token 已使用数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedCount;

    /**
     * @var integer 免费 token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FreeCount;

    /**
     * @var integer 订单总 token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderCount;

    /**
     * @var string 当前执行状态汇总, 常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusSummary;

    /**
     * @var string 当前执行状态汇总后中文展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusSummaryTitle;

    /**
     * @var integer 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Elapsed;

    /**
     * @var integer 当前请求消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TokenCount;

    /**
     * @var array 执行过程信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Procedures;

    /**
     * @param string $SessionId 会话 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 请求 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordId 对应哪条会话, 会话 ID, 用于回答的消息存储使用, 可提前生成, 保存消息时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedCount token 已使用数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FreeCount 免费 token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OrderCount 订单总 token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusSummary 当前执行状态汇总, 常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusSummaryTitle 当前执行状态汇总后中文展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Elapsed 当前请求执行时间, 单位 ms
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TokenCount 当前请求消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Procedures 执行过程信息
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("UsedCount",$param) and $param["UsedCount"] !== null) {
            $this->UsedCount = $param["UsedCount"];
        }

        if (array_key_exists("FreeCount",$param) and $param["FreeCount"] !== null) {
            $this->FreeCount = $param["FreeCount"];
        }

        if (array_key_exists("OrderCount",$param) and $param["OrderCount"] !== null) {
            $this->OrderCount = $param["OrderCount"];
        }

        if (array_key_exists("StatusSummary",$param) and $param["StatusSummary"] !== null) {
            $this->StatusSummary = $param["StatusSummary"];
        }

        if (array_key_exists("StatusSummaryTitle",$param) and $param["StatusSummaryTitle"] !== null) {
            $this->StatusSummaryTitle = $param["StatusSummaryTitle"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("TokenCount",$param) and $param["TokenCount"] !== null) {
            $this->TokenCount = $param["TokenCount"];
        }

        if (array_key_exists("Procedures",$param) and $param["Procedures"] !== null) {
            $this->Procedures = [];
            foreach ($param["Procedures"] as $key => $value){
                $obj = new Procedure();
                $obj->deserialize($value);
                array_push($this->Procedures, $obj);
            }
        }
    }
}
