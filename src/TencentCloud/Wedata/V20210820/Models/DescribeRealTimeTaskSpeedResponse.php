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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealTimeTaskSpeed返回参数结构体
 *
 * @method array getRecordsSpeedList() 获取同步速度条/s列表
 * @method void setRecordsSpeedList(array $RecordsSpeedList) 设置同步速度条/s列表
 * @method array getBytesSpeedList() 获取同步速度字节/s列表
 * @method void setBytesSpeedList(array $BytesSpeedList) 设置同步速度字节/s列表
 * @method RealTimeTaskSpeed getData() 获取同步速度，包括了RecordsSpeedList和BytesSpeedList
 * @method void setData(RealTimeTaskSpeed $Data) 设置同步速度，包括了RecordsSpeedList和BytesSpeedList
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRealTimeTaskSpeedResponse extends AbstractModel
{
    /**
     * @var array 同步速度条/s列表
     */
    public $RecordsSpeedList;

    /**
     * @var array 同步速度字节/s列表
     */
    public $BytesSpeedList;

    /**
     * @var RealTimeTaskSpeed 同步速度，包括了RecordsSpeedList和BytesSpeedList
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RecordsSpeedList 同步速度条/s列表
     * @param array $BytesSpeedList 同步速度字节/s列表
     * @param RealTimeTaskSpeed $Data 同步速度，包括了RecordsSpeedList和BytesSpeedList
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RecordsSpeedList",$param) and $param["RecordsSpeedList"] !== null) {
            $this->RecordsSpeedList = [];
            foreach ($param["RecordsSpeedList"] as $key => $value){
                $obj = new RecordsSpeed();
                $obj->deserialize($value);
                array_push($this->RecordsSpeedList, $obj);
            }
        }

        if (array_key_exists("BytesSpeedList",$param) and $param["BytesSpeedList"] !== null) {
            $this->BytesSpeedList = [];
            foreach ($param["BytesSpeedList"] as $key => $value){
                $obj = new BytesSpeed();
                $obj->deserialize($value);
                array_push($this->BytesSpeedList, $obj);
            }
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new RealTimeTaskSpeed();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
