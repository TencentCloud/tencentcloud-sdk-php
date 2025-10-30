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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupDownloadRestriction请求参数结构体
 *
 * @method string getLimitType() 获取NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时，才可以设置 LimitVpc 和 LimitIp 。
 * @method void setLimitType(string $LimitType) 设置NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时，才可以设置 LimitVpc 和 LimitIp 。
 * @method string getVpcComparisonSymbol() 获取该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In。
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) 设置该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In。
 * @method string getIpComparisonSymbol() 获取In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。 默认为In。
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) 设置In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。 默认为In。
 * @method array getLimitVpc() 获取限制下载的vpc设置。
 * @method void setLimitVpc(array $LimitVpc) 设置限制下载的vpc设置。
 * @method array getLimitIp() 获取限制下载的ip设置
 * @method void setLimitIp(array $LimitIp) 设置限制下载的ip设置
 */
class ModifyBackupDownloadRestrictionRequest extends AbstractModel
{
    /**
     * @var string NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时，才可以设置 LimitVpc 和 LimitIp 。
     */
    public $LimitType;

    /**
     * @var string 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In。
     */
    public $VpcComparisonSymbol;

    /**
     * @var string In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。 默认为In。
     */
    public $IpComparisonSymbol;

    /**
     * @var array 限制下载的vpc设置。
     */
    public $LimitVpc;

    /**
     * @var array 限制下载的ip设置
     */
    public $LimitIp;

    /**
     * @param string $LimitType NoLimit 不限制,内外网都可以下载； LimitOnlyIntranet 仅内网可下载； Customize 用户自定义vpc:ip可下载。 只有该值为 Customize 时，才可以设置 LimitVpc 和 LimitIp 。
     * @param string $VpcComparisonSymbol 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In。
     * @param string $IpComparisonSymbol In: 指定的ip可以下载； NotIn: 指定的ip不可以下载。 默认为In。
     * @param array $LimitVpc 限制下载的vpc设置。
     * @param array $LimitIp 限制下载的ip设置
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
    }
}
