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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOfficialOverview返回参数结构体
 *
 * @method integer getQuantity() 获取云盘实例数量
 * @method void setQuantity(integer $Quantity) 设置云盘实例数量
 * @method string getStorage() 获取已经使用的总存储量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setStorage(string $Storage) 设置已经使用的总存储量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method integer getUserCount() 获取已经分配和使用的总用户数
 * @method void setUserCount(integer $UserCount) 设置已经分配和使用的总用户数
 * @method string getInternetTraffic() 获取本月外网下行流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method void setInternetTraffic(string $InternetTraffic) 设置本月外网下行流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOfficialOverviewResponse extends AbstractModel
{
    /**
     * @var integer 云盘实例数量
     */
    public $Quantity;

    /**
     * @var string 已经使用的总存储量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $Storage;

    /**
     * @var integer 已经分配和使用的总用户数
     */
    public $UserCount;

    /**
     * @var string 本月外网下行流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     */
    public $InternetTraffic;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Quantity 云盘实例数量
     * @param string $Storage 已经使用的总存储量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
     * @param integer $UserCount 已经分配和使用的总用户数
     * @param string $InternetTraffic 本月外网下行流量，单位为 Bytes，由于数字类型精度限制，该字段为 String 类型。
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
        if (array_key_exists("Quantity",$param) and $param["Quantity"] !== null) {
            $this->Quantity = $param["Quantity"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = $param["UserCount"];
        }

        if (array_key_exists("InternetTraffic",$param) and $param["InternetTraffic"] !== null) {
            $this->InternetTraffic = $param["InternetTraffic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
