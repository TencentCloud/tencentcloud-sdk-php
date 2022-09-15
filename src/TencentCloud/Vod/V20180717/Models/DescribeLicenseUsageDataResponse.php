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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseUsageData返回参数结构体
 *
 * @method array getLicenseUsageDataSet() 获取License 查询次数统计数据，展示所查询 License 次数的明细数据。
 * @method void setLicenseUsageDataSet(array $LicenseUsageDataSet) 设置License 查询次数统计数据，展示所查询 License 次数的明细数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLicenseUsageDataResponse extends AbstractModel
{
    /**
     * @var array License 查询次数统计数据，展示所查询 License 次数的明细数据。
     */
    public $LicenseUsageDataSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LicenseUsageDataSet License 查询次数统计数据，展示所查询 License 次数的明细数据。
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
        if (array_key_exists("LicenseUsageDataSet",$param) and $param["LicenseUsageDataSet"] !== null) {
            $this->LicenseUsageDataSet = [];
            foreach ($param["LicenseUsageDataSet"] as $key => $value){
                $obj = new LicenseUsageDataItem();
                $obj->deserialize($value);
                array_push($this->LicenseUsageDataSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
