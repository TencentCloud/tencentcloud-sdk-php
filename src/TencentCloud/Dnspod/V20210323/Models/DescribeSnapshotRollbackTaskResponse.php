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
 * DescribeSnapshotRollbackTask返回参数结构体
 *
 * @method string getDomain() 获取快照所属域名
 * @method void setDomain(string $Domain) 设置快照所属域名
 * @method string getSnapshotId() 获取快照 ID
 * @method void setSnapshotId(string $SnapshotId) 设置快照 ID
 * @method string getStatus() 获取回滚状态
 * @method void setStatus(string $Status) 设置回滚状态
 * @method integer getTaskId() 获取快照回滚任务 ID
 * @method void setTaskId(integer $TaskId) 设置快照回滚任务 ID
 * @method integer getRecordCount() 获取总数量
 * @method void setRecordCount(integer $RecordCount) 设置总数量
 * @method string getCreatedOn() 获取开始回滚时间
 * @method void setCreatedOn(string $CreatedOn) 设置开始回滚时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSnapshotRollbackTaskResponse extends AbstractModel
{
    /**
     * @var string 快照所属域名
     */
    public $Domain;

    /**
     * @var string 快照 ID
     */
    public $SnapshotId;

    /**
     * @var string 回滚状态
     */
    public $Status;

    /**
     * @var integer 快照回滚任务 ID
     */
    public $TaskId;

    /**
     * @var integer 总数量
     */
    public $RecordCount;

    /**
     * @var string 开始回滚时间
     */
    public $CreatedOn;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 快照所属域名
     * @param string $SnapshotId 快照 ID
     * @param string $Status 回滚状态
     * @param integer $TaskId 快照回滚任务 ID
     * @param integer $RecordCount 总数量
     * @param string $CreatedOn 开始回滚时间
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
