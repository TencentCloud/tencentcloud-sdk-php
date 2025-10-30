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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePullTransformPushInfo返回参数结构体
 *
 * @method array getDataInfoList() 获取时长统计数据列表
 * @method void setDataInfoList(array $DataInfoList) 设置时长统计数据列表
 * @method integer getTotalDuration() 获取拉流转推得总时长
 * @method void setTotalDuration(integer $TotalDuration) 设置拉流转推得总时长
 * @method integer getTotalDurationSecond() 获取拉流转推得总时长（秒）
 * @method void setTotalDurationSecond(integer $TotalDurationSecond) 设置拉流转推得总时长（秒）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePullTransformPushInfoResponse extends AbstractModel
{
    /**
     * @var array 时长统计数据列表
     */
    public $DataInfoList;

    /**
     * @var integer 拉流转推得总时长
     */
    public $TotalDuration;

    /**
     * @var integer 拉流转推得总时长（秒）
     */
    public $TotalDurationSecond;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataInfoList 时长统计数据列表
     * @param integer $TotalDuration 拉流转推得总时长
     * @param integer $TotalDurationSecond 拉流转推得总时长（秒）
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
        if (array_key_exists("DataInfoList",$param) and $param["DataInfoList"] !== null) {
            $this->DataInfoList = [];
            foreach ($param["DataInfoList"] as $key => $value){
                $obj = new TaskDurationInfo();
                $obj->deserialize($value);
                array_push($this->DataInfoList, $obj);
            }
        }

        if (array_key_exists("TotalDuration",$param) and $param["TotalDuration"] !== null) {
            $this->TotalDuration = $param["TotalDuration"];
        }

        if (array_key_exists("TotalDurationSecond",$param) and $param["TotalDurationSecond"] !== null) {
            $this->TotalDurationSecond = $param["TotalDurationSecond"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
