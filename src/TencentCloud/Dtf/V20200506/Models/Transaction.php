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
namespace TencentCloud\Dtf\V20200506\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主事务
 *
 * @method integer getTransactionId() 获取主事务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionId(integer $TransactionId) 设置主事务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionBegin() 获取主事务开始时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionBegin(integer $TransactionBegin) 设置主事务开始时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionEnd() 获取主事务结束时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionEnd(integer $TransactionEnd) 设置主事务结束时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionCommit() 获取主事务提交时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionCommit(integer $TransactionCommit) 设置主事务提交时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionRollback() 获取主事务回滚时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionRollback(integer $TransactionRollback) 设置主事务回滚时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionError() 获取主事务异常停止时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionError(integer $TransactionError) 设置主事务异常停止时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeout() 获取主事务超时时长，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置主事务超时时长，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取主事务状态：0:Trying, 1:Confirming, 2: Confirmed, 3:Canceling, 4: Canceled
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置主事务状态：0:Trying, 1:Confirming, 2: Confirmed, 3:Canceling, 4: Canceled
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndFlag() 获取主事务结束标识：0:运行中, 1: 已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndFlag(integer $EndFlag) 设置主事务结束标识：0:运行中, 1: 已结束
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeoutFlag() 获取主事务超时标识：0:运行中, 1: 已超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeoutFlag(integer $TimeoutFlag) 设置主事务超时标识：0:运行中, 1: 已超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComment() 获取异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComment(string $Comment) 设置异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupId() 获取事务分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupId(string $GroupId) 设置事务分组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServer() 获取主事务来源服务标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置主事务来源服务标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBranchQuantity() 获取分支事务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranchQuantity(integer $BranchQuantity) 设置分支事务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRetryFlag() 获取重试标识：true：可以重试；false：不可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetryFlag(boolean $RetryFlag) 设置重试标识：true：可以重试；false：不可重试
注意：此字段可能返回 null，表示取不到有效值。
 */
class Transaction extends AbstractModel
{
    /**
     * @var integer 主事务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionId;

    /**
     * @var integer 主事务开始时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionBegin;

    /**
     * @var integer 主事务结束时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionEnd;

    /**
     * @var integer 主事务提交时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionCommit;

    /**
     * @var integer 主事务回滚时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionRollback;

    /**
     * @var integer 主事务异常停止时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionError;

    /**
     * @var integer 主事务超时时长，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var integer 主事务状态：0:Trying, 1:Confirming, 2: Confirmed, 3:Canceling, 4: Canceled
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 主事务结束标识：0:运行中, 1: 已结束
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndFlag;

    /**
     * @var integer 主事务超时标识：0:运行中, 1: 已超时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeoutFlag;

    /**
     * @var string 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comment;

    /**
     * @var string 事务分组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupId;

    /**
     * @var string 主事务来源服务标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @var integer 分支事务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BranchQuantity;

    /**
     * @var boolean 重试标识：true：可以重试；false：不可重试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetryFlag;

    /**
     * @param integer $TransactionId 主事务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionBegin 主事务开始时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionEnd 主事务结束时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionCommit 主事务提交时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionRollback 主事务回滚时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionError 主事务异常停止时间戳，UTC，精确到毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timeout 主事务超时时长，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 主事务状态：0:Trying, 1:Confirming, 2: Confirmed, 3:Canceling, 4: Canceled
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndFlag 主事务结束标识：0:运行中, 1: 已结束
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeoutFlag 主事务超时标识：0:运行中, 1: 已超时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comment 异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupId 事务分组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Server 主事务来源服务标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BranchQuantity 分支事务数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RetryFlag 重试标识：true：可以重试；false：不可重试
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
        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("TransactionBegin",$param) and $param["TransactionBegin"] !== null) {
            $this->TransactionBegin = $param["TransactionBegin"];
        }

        if (array_key_exists("TransactionEnd",$param) and $param["TransactionEnd"] !== null) {
            $this->TransactionEnd = $param["TransactionEnd"];
        }

        if (array_key_exists("TransactionCommit",$param) and $param["TransactionCommit"] !== null) {
            $this->TransactionCommit = $param["TransactionCommit"];
        }

        if (array_key_exists("TransactionRollback",$param) and $param["TransactionRollback"] !== null) {
            $this->TransactionRollback = $param["TransactionRollback"];
        }

        if (array_key_exists("TransactionError",$param) and $param["TransactionError"] !== null) {
            $this->TransactionError = $param["TransactionError"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndFlag",$param) and $param["EndFlag"] !== null) {
            $this->EndFlag = $param["EndFlag"];
        }

        if (array_key_exists("TimeoutFlag",$param) and $param["TimeoutFlag"] !== null) {
            $this->TimeoutFlag = $param["TimeoutFlag"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("BranchQuantity",$param) and $param["BranchQuantity"] !== null) {
            $this->BranchQuantity = $param["BranchQuantity"];
        }

        if (array_key_exists("RetryFlag",$param) and $param["RetryFlag"] !== null) {
            $this->RetryFlag = $param["RetryFlag"];
        }
    }
}
