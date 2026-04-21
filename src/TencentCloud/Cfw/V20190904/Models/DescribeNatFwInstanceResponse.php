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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwInstance返回参数结构体
 *
 * @method array getNatinsLst() 获取<p>实例数组</p>
 * @method void setNatinsLst(array $NatinsLst) 设置<p>实例数组</p>
 * @method array getNatClusterLst() 获取<p>nat ccn集群防火墙列表</p>
 * @method void setNatClusterLst(array $NatClusterLst) 设置<p>nat ccn集群防火墙列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeNatFwInstanceResponse extends AbstractModel
{
    /**
     * @var array <p>实例数组</p>
     */
    public $NatinsLst;

    /**
     * @var array <p>nat ccn集群防火墙列表</p>
     */
    public $NatClusterLst;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $NatinsLst <p>实例数组</p>
     * @param array $NatClusterLst <p>nat ccn集群防火墙列表</p>
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
        if (array_key_exists("NatinsLst",$param) and $param["NatinsLst"] !== null) {
            $this->NatinsLst = [];
            foreach ($param["NatinsLst"] as $key => $value){
                $obj = new NatFwInstance();
                $obj->deserialize($value);
                array_push($this->NatinsLst, $obj);
            }
        }

        if (array_key_exists("NatClusterLst",$param) and $param["NatClusterLst"] !== null) {
            $this->NatClusterLst = [];
            foreach ($param["NatClusterLst"] as $key => $value){
                $obj = new NatClusterInfo();
                $obj->deserialize($value);
                array_push($this->NatClusterLst, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
