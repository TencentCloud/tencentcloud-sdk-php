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
 * 对象存储调用源ip信息
 *
 * @method array getUA() 获取调用UA
 * @method void setUA(array $UA) 设置调用UA
 * @method CosInvokeIpVpcInfo getVpcInfo() 获取调用vpc信息
 * @method void setVpcInfo(CosInvokeIpVpcInfo $VpcInfo) 设置调用vpc信息
 */
class CosSourceIpInfo extends AbstractModel
{
    /**
     * @var array 调用UA
     */
    public $UA;

    /**
     * @var CosInvokeIpVpcInfo 调用vpc信息
     */
    public $VpcInfo;

    /**
     * @param array $UA 调用UA
     * @param CosInvokeIpVpcInfo $VpcInfo 调用vpc信息
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
        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = new CosInvokeIpVpcInfo();
            $this->VpcInfo->deserialize($param["VpcInfo"]);
        }
    }
}
