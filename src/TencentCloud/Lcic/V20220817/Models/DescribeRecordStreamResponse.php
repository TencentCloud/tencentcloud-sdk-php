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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordStream返回参数结构体
 *
 * @method integer getSchoolId() 获取学校ID
 * @method void setSchoolId(integer $SchoolId) 设置学校ID
 * @method integer getClassId() 获取课堂ID
 * @method void setClassId(integer $ClassId) 设置课堂ID
 * @method integer getClassType() 获取课堂类型
 * @method void setClassType(integer $ClassType) 设置课堂类型
 * @method array getStreamInfo() 获取用户流信息
 * @method void setStreamInfo(array $StreamInfo) 设置用户流信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRecordStreamResponse extends AbstractModel
{
    /**
     * @var integer 学校ID
     */
    public $SchoolId;

    /**
     * @var integer 课堂ID
     */
    public $ClassId;

    /**
     * @var integer 课堂类型
     */
    public $ClassType;

    /**
     * @var array 用户流信息
     */
    public $StreamInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $SchoolId 学校ID
     * @param integer $ClassId 课堂ID
     * @param integer $ClassType 课堂类型
     * @param array $StreamInfo 用户流信息
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
        if (array_key_exists("SchoolId",$param) and $param["SchoolId"] !== null) {
            $this->SchoolId = $param["SchoolId"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ClassType",$param) and $param["ClassType"] !== null) {
            $this->ClassType = $param["ClassType"];
        }

        if (array_key_exists("StreamInfo",$param) and $param["StreamInfo"] !== null) {
            $this->StreamInfo = [];
            foreach ($param["StreamInfo"] as $key => $value){
                $obj = new SingleStreamInfo();
                $obj->deserialize($value);
                array_push($this->StreamInfo, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
