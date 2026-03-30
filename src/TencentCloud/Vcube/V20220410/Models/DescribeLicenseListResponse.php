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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseList返回参数结构体
 *
 * @method integer getCount() 获取临期license数量
 * @method void setCount(integer $Count) 设置临期license数量
 * @method Overview getOverview() 获取正式license总览统计数据
 * @method void setOverview(Overview $Overview) 设置正式license总览统计数据
 * @method array getLicenseList() 获取临期license列表
 * @method void setLicenseList(array $LicenseList) 设置临期license列表
 * @method Overview getTrialOverview() 获取测试license总览统计数据
 * @method void setTrialOverview(Overview $TrialOverview) 设置测试license总览统计数据
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseListResponse extends AbstractModel
{
    /**
     * @var integer 临期license数量
     */
    public $Count;

    /**
     * @var Overview 正式license总览统计数据
     */
    public $Overview;

    /**
     * @var array 临期license列表
     */
    public $LicenseList;

    /**
     * @var Overview 测试license总览统计数据
     */
    public $TrialOverview;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count 临期license数量
     * @param Overview $Overview 正式license总览统计数据
     * @param array $LicenseList 临期license列表
     * @param Overview $TrialOverview 测试license总览统计数据
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Overview",$param) and $param["Overview"] !== null) {
            $this->Overview = new Overview();
            $this->Overview->deserialize($param["Overview"]);
        }

        if (array_key_exists("LicenseList",$param) and $param["LicenseList"] !== null) {
            $this->LicenseList = [];
            foreach ($param["LicenseList"] as $key => $value){
                $obj = new OverviewLicense();
                $obj->deserialize($value);
                array_push($this->LicenseList, $obj);
            }
        }

        if (array_key_exists("TrialOverview",$param) and $param["TrialOverview"] !== null) {
            $this->TrialOverview = new Overview();
            $this->TrialOverview->deserialize($param["TrialOverview"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
