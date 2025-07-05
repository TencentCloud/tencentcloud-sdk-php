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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSnapshotOperationLogs请求参数结构体
 *
 * @method string getSnapshotId() 获取快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
 * @method string getStartTime() 获取起始时间，格式“YYYY-MM-DD hh:mm:ss”
 * @method void setStartTime(string $StartTime) 设置起始时间，格式“YYYY-MM-DD hh:mm:ss”
 * @method string getEndTime() 获取结束时间，格式“YYYY-MM-DD hh:mm:ss”
 * @method void setEndTime(string $EndTime) 设置结束时间，格式“YYYY-MM-DD hh:mm:ss”
 */
class DescribeSnapshotOperationLogsRequest extends AbstractModel
{
    /**
     * @var string 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     */
    public $SnapshotId;

    /**
     * @var string 起始时间，格式“YYYY-MM-DD hh:mm:ss”
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式“YYYY-MM-DD hh:mm:ss”
     */
    public $EndTime;

    /**
     * @param string $SnapshotId 快照ID，可以通过[DescribeCfsSnapshots](https://cloud.tencent.com/document/api/582/80206) 查询获取
     * @param string $StartTime 起始时间，格式“YYYY-MM-DD hh:mm:ss”
     * @param string $EndTime 结束时间，格式“YYYY-MM-DD hh:mm:ss”
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
