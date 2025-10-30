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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * web应用防火墙配置信息
 *
 * @method string getWafOpen() 获取web应用防火墙是否打开， 取值范围:OPEN, CLOSE
 * @method void setWafOpen(string $WafOpen) 设置web应用防火墙是否打开， 取值范围:OPEN, CLOSE
 * @method string getWafInstanceId() 获取web应用防火墙实例ID
 * @method void setWafInstanceId(string $WafInstanceId) 设置web应用防火墙实例ID
 */
class WafConf extends AbstractModel
{
    /**
     * @var string web应用防火墙是否打开， 取值范围:OPEN, CLOSE
     */
    public $WafOpen;

    /**
     * @var string web应用防火墙实例ID
     */
    public $WafInstanceId;

    /**
     * @param string $WafOpen web应用防火墙是否打开， 取值范围:OPEN, CLOSE
     * @param string $WafInstanceId web应用防火墙实例ID
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
        if (array_key_exists("WafOpen",$param) and $param["WafOpen"] !== null) {
            $this->WafOpen = $param["WafOpen"];
        }

        if (array_key_exists("WafInstanceId",$param) and $param["WafInstanceId"] !== null) {
            $this->WafInstanceId = $param["WafInstanceId"];
        }
    }
}
