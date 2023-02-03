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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimeShiftStreamList返回参数结构体
 *
 * @method integer getTotalSize() 获取时间段内所有的数据量。
 * @method void setTotalSize(integer $TotalSize) 设置时间段内所有的数据量。
 * @method array getStreamList() 获取流列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamList(array $StreamList) 设置流列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTimeShiftStreamListResponse extends AbstractModel
{
    /**
     * @var integer 时间段内所有的数据量。
     */
    public $TotalSize;

    /**
     * @var array 流列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalSize 时间段内所有的数据量。
     * @param array $StreamList 流列表。
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
        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("StreamList",$param) and $param["StreamList"] !== null) {
            $this->StreamList = [];
            foreach ($param["StreamList"] as $key => $value){
                $obj = new TimeShiftStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
