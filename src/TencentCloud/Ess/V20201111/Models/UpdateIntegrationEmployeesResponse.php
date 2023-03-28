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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateIntegrationEmployees返回参数结构体
 *
 * @method array getSuccessEmployeeData() 获取更新成功的用户列表
 * @method void setSuccessEmployeeData(array $SuccessEmployeeData) 设置更新成功的用户列表
 * @method array getFailedEmployeeData() 获取更新失败的用户列表
 * @method void setFailedEmployeeData(array $FailedEmployeeData) 设置更新失败的用户列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateIntegrationEmployeesResponse extends AbstractModel
{
    /**
     * @var array 更新成功的用户列表
     */
    public $SuccessEmployeeData;

    /**
     * @var array 更新失败的用户列表
     */
    public $FailedEmployeeData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $SuccessEmployeeData 更新成功的用户列表
     * @param array $FailedEmployeeData 更新失败的用户列表
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
        if (array_key_exists("SuccessEmployeeData",$param) and $param["SuccessEmployeeData"] !== null) {
            $this->SuccessEmployeeData = [];
            foreach ($param["SuccessEmployeeData"] as $key => $value){
                $obj = new SuccessUpdateStaffData();
                $obj->deserialize($value);
                array_push($this->SuccessEmployeeData, $obj);
            }
        }

        if (array_key_exists("FailedEmployeeData",$param) and $param["FailedEmployeeData"] !== null) {
            $this->FailedEmployeeData = [];
            foreach ($param["FailedEmployeeData"] as $key => $value){
                $obj = new FailedUpdateStaffData();
                $obj->deserialize($value);
                array_push($this->FailedEmployeeData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
