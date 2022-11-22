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
 * CheckSnapshotRollback返回参数结构体
 *
 * @method string getSnapshotId() 获取快照记录 ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照记录 ID
 * @method integer getCostMinutes() 获取回滚时长（分钟）
 * @method void setCostMinutes(integer $CostMinutes) 设置回滚时长（分钟）
 * @method string getDomain() 获取快照所属域名
 * @method void setDomain(string $Domain) 设置快照所属域名
 * @method integer getTotal() 获取解析记录总数
 * @method void setTotal(integer $Total) 设置解析记录总数
 * @method integer getTimeout() 获取值为 1，表示超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeout(integer $Timeout) 设置值为 1，表示超时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailed() 获取检查失败数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailed(integer $Failed) 设置检查失败数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFailedRecordList() 获取失败记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedRecordList(array $FailedRecordList) 设置失败记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckSnapshotRollbackResponse extends AbstractModel
{
    /**
     * @var string 快照记录 ID
     */
    public $SnapshotId;

    /**
     * @var integer 回滚时长（分钟）
     */
    public $CostMinutes;

    /**
     * @var string 快照所属域名
     */
    public $Domain;

    /**
     * @var integer 解析记录总数
     */
    public $Total;

    /**
     * @var integer 值为 1，表示超时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timeout;

    /**
     * @var integer 检查失败数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Failed;

    /**
     * @var array 失败记录信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedRecordList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SnapshotId 快照记录 ID
     * @param integer $CostMinutes 回滚时长（分钟）
     * @param string $Domain 快照所属域名
     * @param integer $Total 解析记录总数
     * @param integer $Timeout 值为 1，表示超时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Failed 检查失败数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FailedRecordList 失败记录信息
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("CostMinutes",$param) and $param["CostMinutes"] !== null) {
            $this->CostMinutes = $param["CostMinutes"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("FailedRecordList",$param) and $param["FailedRecordList"] !== null) {
            $this->FailedRecordList = [];
            foreach ($param["FailedRecordList"] as $key => $value){
                $obj = new SnapshotRecord();
                $obj->deserialize($value);
                array_push($this->FailedRecordList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
