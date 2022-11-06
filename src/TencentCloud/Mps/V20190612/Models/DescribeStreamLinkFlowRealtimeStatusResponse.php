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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowRealtimeStatus返回参数结构体
 *
 * @method integer getTimestamp() 获取查询时间，单位s。
 * @method void setTimestamp(integer $Timestamp) 设置查询时间，单位s。
 * @method array getDatas() 获取实时数据信息列表。
 * @method void setDatas(array $Datas) 设置实时数据信息列表。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeStreamLinkFlowRealtimeStatusResponse extends AbstractModel
{
    /**
     * @var integer 查询时间，单位s。
     */
    public $Timestamp;

    /**
     * @var array 实时数据信息列表。
     */
    public $Datas;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Timestamp 查询时间，单位s。
     * @param array $Datas 实时数据信息列表。
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Datas",$param) and $param["Datas"] !== null) {
            $this->Datas = [];
            foreach ($param["Datas"] as $key => $value){
                $obj = new FlowRealtimeStatusItem();
                $obj->deserialize($value);
                array_push($this->Datas, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
