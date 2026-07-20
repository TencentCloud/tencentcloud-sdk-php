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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境基础信息
 *
 * @method IPLocation getLocation() 获取<p>IP地理位置信息</p>
 * @method void setLocation(IPLocation $Location) 设置<p>IP地理位置信息</p>
 * @method IPNetwork getNetwork() 获取<p>IP基础网络信息</p>
 * @method void setNetwork(IPNetwork $Network) 设置<p>IP基础网络信息</p>
 */
class Environment extends AbstractModel
{
    /**
     * @var IPLocation <p>IP地理位置信息</p>
     */
    public $Location;

    /**
     * @var IPNetwork <p>IP基础网络信息</p>
     */
    public $Network;

    /**
     * @param IPLocation $Location <p>IP地理位置信息</p>
     * @param IPNetwork $Network <p>IP基础网络信息</p>
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new IPLocation();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = new IPNetwork();
            $this->Network->deserialize($param["Network"]);
        }
    }
}
