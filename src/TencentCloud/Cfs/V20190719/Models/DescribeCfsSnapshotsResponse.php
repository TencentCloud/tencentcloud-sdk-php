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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfsSnapshots返回参数结构体
 *
 * @method integer getTotalCount() 获取总个数
 * @method void setTotalCount(integer $TotalCount) 设置总个数
 * @method array getSnapshots() 获取快照信息描述
 * @method void setSnapshots(array $Snapshots) 设置快照信息描述
 * @method integer getTotalSize() 获取快照列表快照汇总
 * @method void setTotalSize(integer $TotalSize) 设置快照列表快照汇总
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCfsSnapshotsResponse extends AbstractModel
{
    /**
     * @var integer 总个数
     */
    public $TotalCount;

    /**
     * @var array 快照信息描述
     */
    public $Snapshots;

    /**
     * @var integer 快照列表快照汇总
     */
    public $TotalSize;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总个数
     * @param array $Snapshots 快照信息描述
     * @param integer $TotalSize 快照列表快照汇总
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Snapshots",$param) and $param["Snapshots"] !== null) {
            $this->Snapshots = [];
            foreach ($param["Snapshots"] as $key => $value){
                $obj = new SnapshotInfo();
                $obj->deserialize($value);
                array_push($this->Snapshots, $obj);
            }
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
