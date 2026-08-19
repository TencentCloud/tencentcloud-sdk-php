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
 * DescribeAssetInfo返回参数结构体
 *
 * @method array getBasic() 获取基本信息
 * @method void setBasic(array $Basic) 设置基本信息
 * @method array getNetwork() 获取网络信息
 * @method void setNetwork(array $Network) 设置网络信息
 * @method array getProtection() 获取防护信息
 * @method void setProtection(array $Protection) 设置防护信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetInfoResponse extends AbstractModel
{
    /**
     * @var array 基本信息
     */
    public $Basic;

    /**
     * @var array 网络信息
     */
    public $Network;

    /**
     * @var array 防护信息
     */
    public $Protection;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Basic 基本信息
     * @param array $Network 网络信息
     * @param array $Protection 防护信息
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
        if (array_key_exists("Basic",$param) and $param["Basic"] !== null) {
            $this->Basic = [];
            foreach ($param["Basic"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->Basic, $obj);
            }
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = [];
            foreach ($param["Network"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->Network, $obj);
            }
        }

        if (array_key_exists("Protection",$param) and $param["Protection"] !== null) {
            $this->Protection = [];
            foreach ($param["Protection"] as $key => $value){
                $obj = new FieldConfig();
                $obj->deserialize($value);
                array_push($this->Protection, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
