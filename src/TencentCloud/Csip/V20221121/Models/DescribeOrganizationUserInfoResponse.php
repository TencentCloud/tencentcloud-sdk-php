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
 * DescribeOrganizationUserInfo返回参数结构体
 *
 * @method integer getTotalCount() 获取总条数
 * @method void setTotalCount(integer $TotalCount) 设置总条数
 * @method array getData() 获取集团用户列表
 * @method void setData(array $Data) 设置集团用户列表
 * @method array getJoinTypeLst() 获取加入方式枚举
 * @method void setJoinTypeLst(array $JoinTypeLst) 设置加入方式枚举
 * @method array getCloudTypeLst() 获取云厂商枚举
 * @method void setCloudTypeLst(array $CloudTypeLst) 设置云厂商枚举
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOrganizationUserInfoResponse extends AbstractModel
{
    /**
     * @var integer 总条数
     */
    public $TotalCount;

    /**
     * @var array 集团用户列表
     */
    public $Data;

    /**
     * @var array 加入方式枚举
     */
    public $JoinTypeLst;

    /**
     * @var array 云厂商枚举
     */
    public $CloudTypeLst;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总条数
     * @param array $Data 集团用户列表
     * @param array $JoinTypeLst 加入方式枚举
     * @param array $CloudTypeLst 云厂商枚举
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

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new OrganizationUserInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("JoinTypeLst",$param) and $param["JoinTypeLst"] !== null) {
            $this->JoinTypeLst = [];
            foreach ($param["JoinTypeLst"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->JoinTypeLst, $obj);
            }
        }

        if (array_key_exists("CloudTypeLst",$param) and $param["CloudTypeLst"] !== null) {
            $this->CloudTypeLst = [];
            foreach ($param["CloudTypeLst"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->CloudTypeLst, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
