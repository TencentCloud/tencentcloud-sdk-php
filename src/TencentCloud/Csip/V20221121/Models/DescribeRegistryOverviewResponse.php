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
 * DescribeRegistryOverview返回参数结构体
 *
 * @method integer getRegistryCount() 获取<p>镜像仓库总数</p>
 * @method void setRegistryCount(integer $RegistryCount) 设置<p>镜像仓库总数</p>
 * @method integer getRegistryConnectFailedCount() 获取<p>连接镜像仓库失败数</p>
 * @method void setRegistryConnectFailedCount(integer $RegistryConnectFailedCount) 设置<p>连接镜像仓库失败数</p>
 * @method array getRegistryTypeList() 获取<p>镜像仓库类型数列表</p>
 * @method void setRegistryTypeList(array $RegistryTypeList) 设置<p>镜像仓库类型数列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRegistryOverviewResponse extends AbstractModel
{
    /**
     * @var integer <p>镜像仓库总数</p>
     */
    public $RegistryCount;

    /**
     * @var integer <p>连接镜像仓库失败数</p>
     */
    public $RegistryConnectFailedCount;

    /**
     * @var array <p>镜像仓库类型数列表</p>
     */
    public $RegistryTypeList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RegistryCount <p>镜像仓库总数</p>
     * @param integer $RegistryConnectFailedCount <p>连接镜像仓库失败数</p>
     * @param array $RegistryTypeList <p>镜像仓库类型数列表</p>
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
        if (array_key_exists("RegistryCount",$param) and $param["RegistryCount"] !== null) {
            $this->RegistryCount = $param["RegistryCount"];
        }

        if (array_key_exists("RegistryConnectFailedCount",$param) and $param["RegistryConnectFailedCount"] !== null) {
            $this->RegistryConnectFailedCount = $param["RegistryConnectFailedCount"];
        }

        if (array_key_exists("RegistryTypeList",$param) and $param["RegistryTypeList"] !== null) {
            $this->RegistryTypeList = [];
            foreach ($param["RegistryTypeList"] as $key => $value){
                $obj = new ImageRegistryTypeCountItem();
                $obj->deserialize($value);
                array_push($this->RegistryTypeList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
