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
 * 网络加速的目标地址信息
 *
 * @method array getDestIp() 获取加速的目标IP，可多ip一起加速
 * @method void setDestIp(array $DestIp) 设置加速的目标IP，可多ip一起加速
 */
class DestAddressInfo extends AbstractModel
{
    /**
     * @var array 加速的目标IP，可多ip一起加速
     */
    public $DestIp;

    /**
     * @param array $DestIp 加速的目标IP，可多ip一起加速
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
        if (array_key_exists("DestIp",$param) and $param["DestIp"] !== null) {
            $this->DestIp = $param["DestIp"];
        }
    }
}
