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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostVulItemVPRInfo返回参数结构体
 *
 * @method array getLabel() 获取<p>VPR Label</p>
 * @method void setLabel(array $Label) 设置<p>VPR Label</p>
 * @method VPRRatingInfo getVRPRatingInfo() 获取<p>VPR评级过程和结果</p>
 * @method void setVRPRatingInfo(VPRRatingInfo $VRPRatingInfo) 设置<p>VPR评级过程和结果</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHostVulItemVPRInfoResponse extends AbstractModel
{
    /**
     * @var array <p>VPR Label</p>
     */
    public $Label;

    /**
     * @var VPRRatingInfo <p>VPR评级过程和结果</p>
     */
    public $VRPRatingInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Label <p>VPR Label</p>
     * @param VPRRatingInfo $VRPRatingInfo <p>VPR评级过程和结果</p>
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = [];
            foreach ($param["Label"] as $key => $value){
                $obj = new VPRLabel();
                $obj->deserialize($value);
                array_push($this->Label, $obj);
            }
        }

        if (array_key_exists("VRPRatingInfo",$param) and $param["VRPRatingInfo"] !== null) {
            $this->VRPRatingInfo = new VPRRatingInfo();
            $this->VRPRatingInfo->deserialize($param["VRPRatingInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
