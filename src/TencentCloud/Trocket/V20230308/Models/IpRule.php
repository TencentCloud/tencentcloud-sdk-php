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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP规则
 *
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method boolean getAllow() 获取是否允许放行，默认为false表示拒绝
 * @method void setAllow(boolean $Allow) 设置是否允许放行，默认为false表示拒绝
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 */
class IpRule extends AbstractModel
{
    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var boolean 是否允许放行，默认为false表示拒绝
     */
    public $Allow;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @param string $Ip IP地址
     * @param boolean $Allow 是否允许放行，默认为false表示拒绝
     * @param string $Remark 备注信息
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
