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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadRestriction返回参数结构体
 *
 * @method string getLimitType() 获取NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时， LimitVpc 和 LimitIp 才有意义。
 * @method void setLimitType(string $LimitType) 设置NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时， LimitVpc 和 LimitIp 才有意义。
 * @method string getVpcComparisonSymbol() 获取该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) 设置该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。
 * @method string getIpComparisonSymbol() 获取In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) 设置In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。
 * @method array getLimitVpc() 获取限制下载的vpc设置。
 * @method void setLimitVpc(array $LimitVpc) 设置限制下载的vpc设置。
 * @method array getLimitIp() 获取限制下载的ip设置。
 * @method void setLimitIp(array $LimitIp) 设置限制下载的ip设置。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBackupDownloadRestrictionResponse extends AbstractModel
{
    /**
     * @var string NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时， LimitVpc 和 LimitIp 才有意义。
     */
    public $LimitType;

    /**
     * @var string 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。
     */
    public $VpcComparisonSymbol;

    /**
     * @var string In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。
     */
    public $IpComparisonSymbol;

    /**
     * @var array 限制下载的vpc设置。
     */
    public $LimitVpc;

    /**
     * @var array 限制下载的ip设置。
     */
    public $LimitIp;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LimitType NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时， LimitVpc 和 LimitIp 才有意义。
     * @param string $VpcComparisonSymbol 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。
     * @param string $IpComparisonSymbol In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。
     * @param array $LimitVpc 限制下载的vpc设置。
     * @param array $LimitIp 限制下载的ip设置。
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
        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("VpcComparisonSymbol",$param) and $param["VpcComparisonSymbol"] !== null) {
            $this->VpcComparisonSymbol = $param["VpcComparisonSymbol"];
        }

        if (array_key_exists("IpComparisonSymbol",$param) and $param["IpComparisonSymbol"] !== null) {
            $this->IpComparisonSymbol = $param["IpComparisonSymbol"];
        }

        if (array_key_exists("LimitVpc",$param) and $param["LimitVpc"] !== null) {
            $this->LimitVpc = [];
            foreach ($param["LimitVpc"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpc, $obj);
            }
        }

        if (array_key_exists("LimitIp",$param) and $param["LimitIp"] !== null) {
            $this->LimitIp = $param["LimitIp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
