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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopySnapshotCrossRegions返回参数结构体
 *
 * @method array getSnapshotCopyResultSet() 获取快照跨地域复制的结果，如果请求下发成功，则返回相应地地域的新快照ID，否则返回Error。
 * @method void setSnapshotCopyResultSet(array $SnapshotCopyResultSet) 设置快照跨地域复制的结果，如果请求下发成功，则返回相应地地域的新快照ID，否则返回Error。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CopySnapshotCrossRegionsResponse extends AbstractModel
{
    /**
     * @var array 快照跨地域复制的结果，如果请求下发成功，则返回相应地地域的新快照ID，否则返回Error。
     */
    public $SnapshotCopyResultSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SnapshotCopyResultSet 快照跨地域复制的结果，如果请求下发成功，则返回相应地地域的新快照ID，否则返回Error。
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
        if (array_key_exists("SnapshotCopyResultSet",$param) and $param["SnapshotCopyResultSet"] !== null) {
            $this->SnapshotCopyResultSet = [];
            foreach ($param["SnapshotCopyResultSet"] as $key => $value){
                $obj = new SnapshotCopyResult();
                $obj->deserialize($value);
                array_push($this->SnapshotCopyResultSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
