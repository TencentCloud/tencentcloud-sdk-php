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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessRegionsByDestRegion请求参数结构体
 *
 * @method string getDestRegion() 获取源站区域：接口DescribeDestRegions返回DestRegionSet中的RegionId字段值
 * @method void setDestRegion(string $DestRegion) 设置源站区域：接口DescribeDestRegions返回DestRegionSet中的RegionId字段值
 * @method string getIPAddressVersion() 获取IP版本，可取值：IPv4、IPv6，默认值IPv4
 * @method void setIPAddressVersion(string $IPAddressVersion) 设置IP版本，可取值：IPv4、IPv6，默认值IPv4
 */
class DescribeAccessRegionsByDestRegionRequest extends AbstractModel
{
    /**
     * @var string 源站区域：接口DescribeDestRegions返回DestRegionSet中的RegionId字段值
     */
    public $DestRegion;

    /**
     * @var string IP版本，可取值：IPv4、IPv6，默认值IPv4
     */
    public $IPAddressVersion;

    /**
     * @param string $DestRegion 源站区域：接口DescribeDestRegions返回DestRegionSet中的RegionId字段值
     * @param string $IPAddressVersion IP版本，可取值：IPv4、IPv6，默认值IPv4
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
        if (array_key_exists("DestRegion",$param) and $param["DestRegion"] !== null) {
            $this->DestRegion = $param["DestRegion"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }
    }
}
