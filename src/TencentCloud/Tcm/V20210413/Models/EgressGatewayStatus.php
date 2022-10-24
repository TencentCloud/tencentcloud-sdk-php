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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * egress gateway 的状态
 *
 * @method string getCurrentVersion() 获取egress gateway的当前版本
 * @method void setCurrentVersion(string $CurrentVersion) 设置egress gateway的当前版本
 * @method string getDesiredVersion() 获取egress gateway的目标版本
 * @method void setDesiredVersion(string $DesiredVersion) 设置egress gateway的目标版本
 * @method string getState() 获取egress gateway的状态，取值：running，upgrading，rollbacking
 * @method void setState(string $State) 设置egress gateway的状态，取值：running，upgrading，rollbacking
 */
class EgressGatewayStatus extends AbstractModel
{
    /**
     * @var string egress gateway的当前版本
     */
    public $CurrentVersion;

    /**
     * @var string egress gateway的目标版本
     */
    public $DesiredVersion;

    /**
     * @var string egress gateway的状态，取值：running，upgrading，rollbacking
     */
    public $State;

    /**
     * @param string $CurrentVersion egress gateway的当前版本
     * @param string $DesiredVersion egress gateway的目标版本
     * @param string $State egress gateway的状态，取值：running，upgrading，rollbacking
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
        if (array_key_exists("CurrentVersion",$param) and $param["CurrentVersion"] !== null) {
            $this->CurrentVersion = $param["CurrentVersion"];
        }

        if (array_key_exists("DesiredVersion",$param) and $param["DesiredVersion"] !== null) {
            $this->DesiredVersion = $param["DesiredVersion"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }
    }
}
