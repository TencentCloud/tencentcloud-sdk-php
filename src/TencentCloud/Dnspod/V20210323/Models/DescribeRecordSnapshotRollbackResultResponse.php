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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordSnapshotRollbackResult返回参数结构体
 *
 * @method integer getJobId() 获取回滚任务 ID
 * @method void setJobId(integer $JobId) 设置回滚任务 ID
 * @method string getStatus() 获取回滚状态
 * @method void setStatus(string $Status) 设置回滚状态
 * @method array getFailedRecordList() 获取失败的记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedRecordList(array $FailedRecordList) 设置失败的记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取所属域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置所属域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProgress() 获取回滚进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgress(integer $Progress) 设置回滚进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLeftMinutes() 获取回滚剩余时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLeftMinutes(integer $LeftMinutes) 设置回滚剩余时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置总记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailed() 获取失败记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailed(integer $Failed) 设置失败记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccess() 获取成功记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccess(integer $Success) 设置成功记录数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosUrl() 获取快照下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosUrl(string $CosUrl) 设置快照下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRecordSnapshotRollbackResultResponse extends AbstractModel
{
    /**
     * @var integer 回滚任务 ID
     */
    public $JobId;

    /**
     * @var string 回滚状态
     */
    public $Status;

    /**
     * @var array 失败的记录信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedRecordList;

    /**
     * @var string 所属域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var integer 回滚进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Progress;

    /**
     * @var integer 回滚剩余时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LeftMinutes;

    /**
     * @var integer 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var integer 失败记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failed;

    /**
     * @var integer 成功记录数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Success;

    /**
     * @var string 快照下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $JobId 回滚任务 ID
     * @param string $Status 回滚状态
     * @param array $FailedRecordList 失败的记录信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 所属域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Progress 回滚进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LeftMinutes 回滚剩余时间（单位：分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total 总记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Failed 失败记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Success 成功记录数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosUrl 快照下载地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedRecordList",$param) and $param["FailedRecordList"] !== null) {
            $this->FailedRecordList = [];
            foreach ($param["FailedRecordList"] as $key => $value){
                $obj = new SnapshotRecord();
                $obj->deserialize($value);
                array_push($this->FailedRecordList, $obj);
            }
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("LeftMinutes",$param) and $param["LeftMinutes"] !== null) {
            $this->LeftMinutes = $param["LeftMinutes"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
