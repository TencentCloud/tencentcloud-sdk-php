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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网卡流量指标数据
 *
 * @method string getNetInfoName() 获取网卡名
 * @method void setNetInfoName(string $NetInfoName) 设置网卡名
 * @method string getPublicIP() 获取公网IP
 * @method void setPublicIP(string $PublicIP) 设置公网IP
 * @method float getCurrent() 获取指标数据（bps/ms/%）
 * @method void setCurrent(float $Current) 设置指标数据（bps/ms/%）
 */
class SlotNetInfo extends AbstractModel
{
    /**
     * @var string 网卡名
     */
    public $NetInfoName;

    /**
     * @var string 公网IP
     */
    public $PublicIP;

    /**
     * @var float 指标数据（bps/ms/%）
     */
    public $Current;

    /**
     * @param string $NetInfoName 网卡名
     * @param string $PublicIP 公网IP
     * @param float $Current 指标数据（bps/ms/%）
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
        if (array_key_exists("NetInfoName",$param) and $param["NetInfoName"] !== null) {
            $this->NetInfoName = $param["NetInfoName"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }
    }
}
