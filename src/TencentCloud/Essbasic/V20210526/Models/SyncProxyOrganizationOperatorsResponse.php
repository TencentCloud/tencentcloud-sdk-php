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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SyncProxyOrganizationOperators返回参数结构体
 *
 * @method integer getStatus() 获取 同步的状态,  全部同步失败接口是接口会直接报错

<ul><li> **1** :全部成功</li>
<li> **2** :部分成功</li></ul>
 * @method void setStatus(integer $Status) 设置 同步的状态,  全部同步失败接口是接口会直接报错

<ul><li> **1** :全部成功</li>
<li> **2** :部分成功</li></ul>
 * @method array getFailedList() 获取同步失败员工ID及其失败原因
 * @method void setFailedList(array $FailedList) 设置同步失败员工ID及其失败原因
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SyncProxyOrganizationOperatorsResponse extends AbstractModel
{
    /**
     * @var integer  同步的状态,  全部同步失败接口是接口会直接报错

<ul><li> **1** :全部成功</li>
<li> **2** :部分成功</li></ul>
     */
    public $Status;

    /**
     * @var array 同步失败员工ID及其失败原因
     */
    public $FailedList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status  同步的状态,  全部同步失败接口是接口会直接报错

<ul><li> **1** :全部成功</li>
<li> **2** :部分成功</li></ul>
     * @param array $FailedList 同步失败员工ID及其失败原因
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailedList",$param) and $param["FailedList"] !== null) {
            $this->FailedList = [];
            foreach ($param["FailedList"] as $key => $value){
                $obj = new SyncFailReason();
                $obj->deserialize($value);
                array_push($this->FailedList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
