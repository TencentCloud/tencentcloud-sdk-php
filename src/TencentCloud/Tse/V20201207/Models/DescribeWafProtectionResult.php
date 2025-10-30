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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取WAF保护资源状态
 *
 * @method string getGlobalStatus() 获取全局防护状态
 * @method void setGlobalStatus(string $GlobalStatus) 设置全局防护状态
 * @method array getServicesStatus() 获取服务防护状态
 * @method void setServicesStatus(array $ServicesStatus) 设置服务防护状态
 * @method array getRouteStatus() 获取路由防护状态
 * @method void setRouteStatus(array $RouteStatus) 设置路由防护状态
 * @method string getObjectStatus() 获取对象防护状态
 * @method void setObjectStatus(string $ObjectStatus) 设置对象防护状态
 */
class DescribeWafProtectionResult extends AbstractModel
{
    /**
     * @var string 全局防护状态
     */
    public $GlobalStatus;

    /**
     * @var array 服务防护状态
     */
    public $ServicesStatus;

    /**
     * @var array 路由防护状态
     */
    public $RouteStatus;

    /**
     * @var string 对象防护状态
     */
    public $ObjectStatus;

    /**
     * @param string $GlobalStatus 全局防护状态
     * @param array $ServicesStatus 服务防护状态
     * @param array $RouteStatus 路由防护状态
     * @param string $ObjectStatus 对象防护状态
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
        if (array_key_exists("GlobalStatus",$param) and $param["GlobalStatus"] !== null) {
            $this->GlobalStatus = $param["GlobalStatus"];
        }

        if (array_key_exists("ServicesStatus",$param) and $param["ServicesStatus"] !== null) {
            $this->ServicesStatus = [];
            foreach ($param["ServicesStatus"] as $key => $value){
                $obj = new ServiceWafStatus();
                $obj->deserialize($value);
                array_push($this->ServicesStatus, $obj);
            }
        }

        if (array_key_exists("RouteStatus",$param) and $param["RouteStatus"] !== null) {
            $this->RouteStatus = [];
            foreach ($param["RouteStatus"] as $key => $value){
                $obj = new RouteWafStatus();
                $obj->deserialize($value);
                array_push($this->RouteStatus, $obj);
            }
        }

        if (array_key_exists("ObjectStatus",$param) and $param["ObjectStatus"] !== null) {
            $this->ObjectStatus = $param["ObjectStatus"];
        }
    }
}
