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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigFileReleaseHistories返回参数结构体
 *
 * @method integer getTotalCount() 获取<p>数据总数量</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>数据总数量</p>
 * @method array getConfigFileReleaseHistories() 获取<p>配置文件发布历史列表</p>
 * @method void setConfigFileReleaseHistories(array $ConfigFileReleaseHistories) 设置<p>配置文件发布历史列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConfigFileReleaseHistoriesResponse extends AbstractModel
{
    /**
     * @var integer <p>数据总数量</p>
     */
    public $TotalCount;

    /**
     * @var array <p>配置文件发布历史列表</p>
     */
    public $ConfigFileReleaseHistories;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount <p>数据总数量</p>
     * @param array $ConfigFileReleaseHistories <p>配置文件发布历史列表</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ConfigFileReleaseHistories",$param) and $param["ConfigFileReleaseHistories"] !== null) {
            $this->ConfigFileReleaseHistories = [];
            foreach ($param["ConfigFileReleaseHistories"] as $key => $value){
                $obj = new ConfigFileReleaseHistory();
                $obj->deserialize($value);
                array_push($this->ConfigFileReleaseHistories, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
