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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentRiskSideList返回参数结构体
 *
 * @method array getRiskSideItmeList() 获取风险面列表
 * @method void setRiskSideItmeList(array $RiskSideItmeList) 设置风险面列表
 * @method array getRiskSideItemList() 获取风险面列表
 * @method void setRiskSideItemList(array $RiskSideItemList) 设置风险面列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentRiskSideListResponse extends AbstractModel
{
    /**
     * @var array 风险面列表
     * @deprecated
     */
    public $RiskSideItmeList;

    /**
     * @var array 风险面列表
     */
    public $RiskSideItemList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $RiskSideItmeList 风险面列表
     * @param array $RiskSideItemList 风险面列表
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
        if (array_key_exists("RiskSideItmeList",$param) and $param["RiskSideItmeList"] !== null) {
            $this->RiskSideItmeList = [];
            foreach ($param["RiskSideItmeList"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->RiskSideItmeList, $obj);
            }
        }

        if (array_key_exists("RiskSideItemList",$param) and $param["RiskSideItemList"] !== null) {
            $this->RiskSideItemList = [];
            foreach ($param["RiskSideItemList"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->RiskSideItemList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
