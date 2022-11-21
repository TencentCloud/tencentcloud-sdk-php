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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActiveCarrierPrivilegeNumber返回参数结构体
 *
 * @method integer getTotalCount() 获取总数量
 * @method void setTotalCount(integer $TotalCount) 设置总数量
 * @method array getActiveCarrierPrivilegeNumbers() 获取生效列表
 * @method void setActiveCarrierPrivilegeNumbers(array $ActiveCarrierPrivilegeNumbers) 设置生效列表
 * @method array getPendingApplicantIds() 获取待审核单号
 * @method void setPendingApplicantIds(array $PendingApplicantIds) 设置待审核单号
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeActiveCarrierPrivilegeNumberResponse extends AbstractModel
{
    /**
     * @var integer 总数量
     */
    public $TotalCount;

    /**
     * @var array 生效列表
     */
    public $ActiveCarrierPrivilegeNumbers;

    /**
     * @var array 待审核单号
     */
    public $PendingApplicantIds;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数量
     * @param array $ActiveCarrierPrivilegeNumbers 生效列表
     * @param array $PendingApplicantIds 待审核单号
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ActiveCarrierPrivilegeNumbers",$param) and $param["ActiveCarrierPrivilegeNumbers"] !== null) {
            $this->ActiveCarrierPrivilegeNumbers = [];
            foreach ($param["ActiveCarrierPrivilegeNumbers"] as $key => $value){
                $obj = new ActiveCarrierPrivilegeNumber();
                $obj->deserialize($value);
                array_push($this->ActiveCarrierPrivilegeNumbers, $obj);
            }
        }

        if (array_key_exists("PendingApplicantIds",$param) and $param["PendingApplicantIds"] !== null) {
            $this->PendingApplicantIds = $param["PendingApplicantIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
