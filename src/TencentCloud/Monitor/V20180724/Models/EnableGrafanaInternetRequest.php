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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableGrafanaInternet请求参数结构体
 *
 * @method string getInstanceID() 获取Grafana 实例 ID，例如：grafana-kleu3gt0
 * @method void setInstanceID(string $InstanceID) 设置Grafana 实例 ID，例如：grafana-kleu3gt0
 * @method boolean getEnableInternet() 获取开启或关闭公网访问，true为开启，false 为不开启
 * @method void setEnableInternet(boolean $EnableInternet) 设置开启或关闭公网访问，true为开启，false 为不开启
 */
class EnableGrafanaInternetRequest extends AbstractModel
{
    /**
     * @var string Grafana 实例 ID，例如：grafana-kleu3gt0
     */
    public $InstanceID;

    /**
     * @var boolean 开启或关闭公网访问，true为开启，false 为不开启
     */
    public $EnableInternet;

    /**
     * @param string $InstanceID Grafana 实例 ID，例如：grafana-kleu3gt0
     * @param boolean $EnableInternet 开启或关闭公网访问，true为开启，false 为不开启
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }
    }
}
