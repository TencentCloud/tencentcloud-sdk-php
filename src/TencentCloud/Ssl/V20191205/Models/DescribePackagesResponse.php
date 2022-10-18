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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePackages返回参数结构体
 *
 * @method array getPackages() 获取权益包列表。
 * @method void setPackages(array $Packages) 设置权益包列表。
 * @method integer getTotalCount() 获取总条数。
 * @method void setTotalCount(integer $TotalCount) 设置总条数。
 * @method integer getTotalBalance() 获取权益点总余额。
 * @method void setTotalBalance(integer $TotalBalance) 设置权益点总余额。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePackagesResponse extends AbstractModel
{
    /**
     * @var array 权益包列表。
     */
    public $Packages;

    /**
     * @var integer 总条数。
     */
    public $TotalCount;

    /**
     * @var integer 权益点总余额。
     */
    public $TotalBalance;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Packages 权益包列表。
     * @param integer $TotalCount 总条数。
     * @param integer $TotalBalance 权益点总余额。
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
        if (array_key_exists("Packages",$param) and $param["Packages"] !== null) {
            $this->Packages = [];
            foreach ($param["Packages"] as $key => $value){
                $obj = new PackageInfo();
                $obj->deserialize($value);
                array_push($this->Packages, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalBalance",$param) and $param["TotalBalance"] !== null) {
            $this->TotalBalance = $param["TotalBalance"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
