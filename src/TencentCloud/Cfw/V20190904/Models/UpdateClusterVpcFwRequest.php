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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateClusterVpcFw请求参数结构体
 *
 * @method CcnSwitchInfo getCcnSwitch() 获取ccn防火墙开关配置信息
 * @method void setCcnSwitch(CcnSwitchInfo $CcnSwitch) 设置ccn防火墙开关配置信息
 */
class UpdateClusterVpcFwRequest extends AbstractModel
{
    /**
     * @var CcnSwitchInfo ccn防火墙开关配置信息
     */
    public $CcnSwitch;

    /**
     * @param CcnSwitchInfo $CcnSwitch ccn防火墙开关配置信息
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
        if (array_key_exists("CcnSwitch",$param) and $param["CcnSwitch"] !== null) {
            $this->CcnSwitch = new CcnSwitchInfo();
            $this->CcnSwitch->deserialize($param["CcnSwitch"]);
        }
    }
}
