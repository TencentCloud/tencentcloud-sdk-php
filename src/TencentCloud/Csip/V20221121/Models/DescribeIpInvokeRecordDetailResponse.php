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
 * DescribeIpInvokeRecordDetail返回参数结构体
 *
 * @method array getInvokeDetailInfo() 获取调用详情信息
 * @method void setInvokeDetailInfo(array $InvokeDetailInfo) 设置调用详情信息
 * @method array getInvokePermission() 获取调用权限相关
 * @method void setInvokePermission(array $InvokePermission) 设置调用权限相关
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeIpInvokeRecordDetailResponse extends AbstractModel
{
    /**
     * @var array 调用详情信息
     */
    public $InvokeDetailInfo;

    /**
     * @var array 调用权限相关
     */
    public $InvokePermission;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $InvokeDetailInfo 调用详情信息
     * @param array $InvokePermission 调用权限相关
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
        if (array_key_exists("InvokeDetailInfo",$param) and $param["InvokeDetailInfo"] !== null) {
            $this->InvokeDetailInfo = [];
            foreach ($param["InvokeDetailInfo"] as $key => $value){
                $obj = new CosInvokeDetailInfo();
                $obj->deserialize($value);
                array_push($this->InvokeDetailInfo, $obj);
            }
        }

        if (array_key_exists("InvokePermission",$param) and $param["InvokePermission"] !== null) {
            $this->InvokePermission = [];
            foreach ($param["InvokePermission"] as $key => $value){
                $obj = new CosPermissionInfo();
                $obj->deserialize($value);
                array_push($this->InvokePermission, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
