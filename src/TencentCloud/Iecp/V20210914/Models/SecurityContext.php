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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全上下文
 *
 * @method boolean getPrivilege() 获取是否开启特权模式
 * @method void setPrivilege(boolean $Privilege) 设置是否开启特权模式
 * @method string getProcMount() 获取目录/Proc挂载方式
 * @method void setProcMount(string $ProcMount) 设置目录/Proc挂载方式
 * @method SecurityCapabilities getCapabilities() 获取安全配置
 * @method void setCapabilities(SecurityCapabilities $Capabilities) 设置安全配置
 */
class SecurityContext extends AbstractModel
{
    /**
     * @var boolean 是否开启特权模式
     */
    public $Privilege;

    /**
     * @var string 目录/Proc挂载方式
     */
    public $ProcMount;

    /**
     * @var SecurityCapabilities 安全配置
     */
    public $Capabilities;

    /**
     * @param boolean $Privilege 是否开启特权模式
     * @param string $ProcMount 目录/Proc挂载方式
     * @param SecurityCapabilities $Capabilities 安全配置
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
        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = $param["Privilege"];
        }

        if (array_key_exists("ProcMount",$param) and $param["ProcMount"] !== null) {
            $this->ProcMount = $param["ProcMount"];
        }

        if (array_key_exists("Capabilities",$param) and $param["Capabilities"] !== null) {
            $this->Capabilities = new SecurityCapabilities();
            $this->Capabilities->deserialize($param["Capabilities"]);
        }
    }
}
