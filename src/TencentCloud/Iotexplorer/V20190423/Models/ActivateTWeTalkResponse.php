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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateTWeTalk返回参数结构体
 *
 * @method array getFailureRecords() 获取设备激活失败返回数据
 * @method void setFailureRecords(array $FailureRecords) 设置设备激活失败返回数据
 * @method array getSuccessRecords() 获取设备激活成功返回数据
 * @method void setSuccessRecords(array $SuccessRecords) 设置设备激活成功返回数据
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ActivateTWeTalkResponse extends AbstractModel
{
    /**
     * @var array 设备激活失败返回数据
     */
    public $FailureRecords;

    /**
     * @var array 设备激活成功返回数据
     */
    public $SuccessRecords;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FailureRecords 设备激活失败返回数据
     * @param array $SuccessRecords 设备激活成功返回数据
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
        if (array_key_exists("FailureRecords",$param) and $param["FailureRecords"] !== null) {
            $this->FailureRecords = [];
            foreach ($param["FailureRecords"] as $key => $value){
                $obj = new TalkActivationInfo();
                $obj->deserialize($value);
                array_push($this->FailureRecords, $obj);
            }
        }

        if (array_key_exists("SuccessRecords",$param) and $param["SuccessRecords"] !== null) {
            $this->SuccessRecords = [];
            foreach ($param["SuccessRecords"] as $key => $value){
                $obj = new TalkActivationInfo();
                $obj->deserialize($value);
                array_push($this->SuccessRecords, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
