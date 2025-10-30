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
 * DescribeSubUserInfo返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getData() 获取子用户列表
 * @method void setData(array $Data) 设置子用户列表
 * @method array getCloudTypeLst() 获取厂商枚举列表
 * @method void setCloudTypeLst(array $CloudTypeLst) 设置厂商枚举列表
 * @method array getOwnerAppIDLst() 获取所属主账号appid枚举
 * @method void setOwnerAppIDLst(array $OwnerAppIDLst) 设置所属主账号appid枚举
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubUserInfoResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 子用户列表
     */
    public $Data;

    /**
     * @var array 厂商枚举列表
     */
    public $CloudTypeLst;

    /**
     * @var array 所属主账号appid枚举
     */
    public $OwnerAppIDLst;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
     * @param array $Data 子用户列表
     * @param array $CloudTypeLst 厂商枚举列表
     * @param array $OwnerAppIDLst 所属主账号appid枚举
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
                $obj = new SubUserInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
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

        if (array_key_exists("OwnerAppIDLst",$param) and $param["OwnerAppIDLst"] !== null) {
            $this->OwnerAppIDLst = [];
            foreach ($param["OwnerAppIDLst"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->OwnerAppIDLst, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
