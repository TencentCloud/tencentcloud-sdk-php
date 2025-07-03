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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFwEdgeIps返回参数结构体
 *
 * @method array getData() 获取ip 开关列表
 * @method void setData(array $Data) 设置ip 开关列表
 * @method integer getTotal() 获取ip 开关列表个数
 * @method void setTotal(integer $Total) 设置ip 开关列表个数
 * @method array getRegionLst() 获取地域列表
 * @method void setRegionLst(array $RegionLst) 设置地域列表
 * @method array getInstanceTypeLst() 获取实例类型列表
 * @method void setInstanceTypeLst(array $InstanceTypeLst) 设置实例类型列表
 * @method integer getSerilCount() 获取串行模式开关个数
 * @method void setSerilCount(integer $SerilCount) 设置串行模式开关个数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFwEdgeIpsResponse extends AbstractModel
{
    /**
     * @var array ip 开关列表
     */
    public $Data;

    /**
     * @var integer ip 开关列表个数
     */
    public $Total;

    /**
     * @var array 地域列表
     */
    public $RegionLst;

    /**
     * @var array 实例类型列表
     */
    public $InstanceTypeLst;

    /**
     * @var integer 串行模式开关个数
     */
    public $SerilCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data ip 开关列表
     * @param integer $Total ip 开关列表个数
     * @param array $RegionLst 地域列表
     * @param array $InstanceTypeLst 实例类型列表
     * @param integer $SerilCount 串行模式开关个数
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new EdgeIpInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("RegionLst",$param) and $param["RegionLst"] !== null) {
            $this->RegionLst = $param["RegionLst"];
        }

        if (array_key_exists("InstanceTypeLst",$param) and $param["InstanceTypeLst"] !== null) {
            $this->InstanceTypeLst = $param["InstanceTypeLst"];
        }

        if (array_key_exists("SerilCount",$param) and $param["SerilCount"] !== null) {
            $this->SerilCount = $param["SerilCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
