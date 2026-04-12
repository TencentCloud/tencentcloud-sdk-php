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
 * @method integer getCount() 获取<p>临期license数量</p>
 * @method void setCount(integer $Count) 设置<p>临期license数量</p>
 * @method Overview getOverview() 获取<p>正式license总览统计数据</p>
 * @method void setOverview(Overview $Overview) 设置<p>正式license总览统计数据</p>
 * @method array getLicenseList() 获取<p>临期license列表</p>
 * @method void setLicenseList(array $LicenseList) 设置<p>临期license列表</p>
 * @method Overview getTrialOverview() 获取<p>测试license总览统计数据</p>
 * @method void setTrialOverview(Overview $TrialOverview) 设置<p>测试license总览统计数据</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseListResponse extends AbstractModel
{
    /**
     * @var integer <p>临期license数量</p>
     */
    public $Count;

    /**
     * @var Overview <p>正式license总览统计数据</p>
     */
    public $Overview;

    /**
     * @var array <p>临期license列表</p>
     */
    public $LicenseList;

    /**
     * @var Overview <p>测试license总览统计数据</p>
     */
    public $TrialOverview;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Count <p>临期license数量</p>
     * @param Overview $Overview <p>正式license总览统计数据</p>
     * @param array $LicenseList <p>临期license列表</p>
     * @param Overview $TrialOverview <p>测试license总览统计数据</p>
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
