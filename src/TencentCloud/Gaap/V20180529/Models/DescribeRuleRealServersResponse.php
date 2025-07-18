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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleRealServers返回参数结构体
 *
 * @method integer getTotalCount() 获取可绑定的源站个数
 * @method void setTotalCount(integer $TotalCount) 设置可绑定的源站个数
 * @method array getRealServerSet() 获取可绑定的源站信息列表
 * @method void setRealServerSet(array $RealServerSet) 设置可绑定的源站信息列表
 * @method integer getBindRealServerTotalCount() 获取已绑定的源站个数
 * @method void setBindRealServerTotalCount(integer $BindRealServerTotalCount) 设置已绑定的源站个数
 * @method array getBindRealServerSet() 获取已绑定的源站信息列表
 * @method void setBindRealServerSet(array $BindRealServerSet) 设置已绑定的源站信息列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRuleRealServersResponse extends AbstractModel
{
    /**
     * @var integer 可绑定的源站个数
     */
    public $TotalCount;

    /**
     * @var array 可绑定的源站信息列表
     */
    public $RealServerSet;

    /**
     * @var integer 已绑定的源站个数
     */
    public $BindRealServerTotalCount;

    /**
     * @var array 已绑定的源站信息列表
     */
    public $BindRealServerSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 可绑定的源站个数
     * @param array $RealServerSet 可绑定的源站信息列表
     * @param integer $BindRealServerTotalCount 已绑定的源站个数
     * @param array $BindRealServerSet 已绑定的源站信息列表
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

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new RealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("BindRealServerTotalCount",$param) and $param["BindRealServerTotalCount"] !== null) {
            $this->BindRealServerTotalCount = $param["BindRealServerTotalCount"];
        }

        if (array_key_exists("BindRealServerSet",$param) and $param["BindRealServerSet"] !== null) {
            $this->BindRealServerSet = [];
            foreach ($param["BindRealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->BindRealServerSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
