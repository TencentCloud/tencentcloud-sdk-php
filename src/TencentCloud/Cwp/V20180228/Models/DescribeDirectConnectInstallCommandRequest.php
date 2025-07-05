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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDirectConnectInstallCommand请求参数结构体
 *
 * @method string getRegionCode() 获取地域标示
 * @method void setRegionCode(string $RegionCode) 设置地域标示
 * @method string getVpcId() 获取Vpc的ID
 * @method void setVpcId(string $VpcId) 设置Vpc的ID
 * @method string getExpireDate() 获取命令过期时间
 * @method void setExpireDate(string $ExpireDate) 设置命令过期时间
 */
class DescribeDirectConnectInstallCommandRequest extends AbstractModel
{
    /**
     * @var string 地域标示
     */
    public $RegionCode;

    /**
     * @var string Vpc的ID
     */
    public $VpcId;

    /**
     * @var string 命令过期时间
     */
    public $ExpireDate;

    /**
     * @param string $RegionCode 地域标示
     * @param string $VpcId Vpc的ID
     * @param string $ExpireDate 命令过期时间
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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }
    }
}
