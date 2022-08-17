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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS地域封禁
 *
 * @method string getSwitch() 获取区域封禁清空标识，取值有：
<li>off ：清空地域封禁列表 ；</li>
<li>on ：不做处理 。</li>
 * @method void setSwitch(string $Switch) 设置区域封禁清空标识，取值有：
<li>off ：清空地域封禁列表 ；</li>
<li>on ：不做处理 。</li>
 * @method array getRegionId() 获取地域信息，ID参考[DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/76031?!preview&!document=1)。
 * @method void setRegionId(array $RegionId) 设置地域信息，ID参考[DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/76031?!preview&!document=1)。
 */
class DDoSGeoIp extends AbstractModel
{
    /**
     * @var string 区域封禁清空标识，取值有：
<li>off ：清空地域封禁列表 ；</li>
<li>on ：不做处理 。</li>
     */
    public $Switch;

    /**
     * @var array 地域信息，ID参考[DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/76031?!preview&!document=1)。
     */
    public $RegionId;

    /**
     * @param string $Switch 区域封禁清空标识，取值有：
<li>off ：清空地域封禁列表 ；</li>
<li>on ：不做处理 。</li>
     * @param array $RegionId 地域信息，ID参考[DescribeSecurityPolicyRegions](https://tcloud4api.woa.com/document/product/1657/76031?!preview&!document=1)。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
