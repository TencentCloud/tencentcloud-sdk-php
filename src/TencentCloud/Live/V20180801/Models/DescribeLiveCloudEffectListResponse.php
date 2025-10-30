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
 * DescribeLiveCloudEffectList返回参数结构体
 *
 * @method array getInfoList() 获取云端特效信息列表。
 * @method void setInfoList(array $InfoList) 设置云端特效信息列表。
 * @method integer getEnableCreateNum() 获取允许创建的云端特效个数。
 * @method void setEnableCreateNum(integer $EnableCreateNum) 设置允许创建的云端特效个数。
 * @method integer getTotalNum() 获取当前已有的特效总个数。
 * @method void setTotalNum(integer $TotalNum) 设置当前已有的特效总个数。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveCloudEffectListResponse extends AbstractModel
{
    /**
     * @var array 云端特效信息列表。
     */
    public $InfoList;

    /**
     * @var integer 允许创建的云端特效个数。
     */
    public $EnableCreateNum;

    /**
     * @var integer 当前已有的特效总个数。
     */
    public $TotalNum;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InfoList 云端特效信息列表。
     * @param integer $EnableCreateNum 允许创建的云端特效个数。
     * @param integer $TotalNum 当前已有的特效总个数。
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
        if (array_key_exists("InfoList",$param) and $param["InfoList"] !== null) {
            $this->InfoList = [];
            foreach ($param["InfoList"] as $key => $value){
                $obj = new CloudEffectInfo();
                $obj->deserialize($value);
                array_push($this->InfoList, $obj);
            }
        }

        if (array_key_exists("EnableCreateNum",$param) and $param["EnableCreateNum"] !== null) {
            $this->EnableCreateNum = $param["EnableCreateNum"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
