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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理节点权重分布
 *
 * @method string getRegion() 获取代理节点所属地域
 * @method void setRegion(string $Region) 设置代理节点所属地域
 * @method string getZone() 获取代理节点所属可用区
 * @method void setZone(string $Zone) 设置代理节点所属可用区
 * @method array getProxyInstance() 获取代理实例分布
 * @method void setProxyInstance(array $ProxyInstance) 设置代理实例分布
 */
class ProxyAllocation extends AbstractModel
{
    /**
     * @var string 代理节点所属地域
     */
    public $Region;

    /**
     * @var string 代理节点所属可用区
     */
    public $Zone;

    /**
     * @var array 代理实例分布
     */
    public $ProxyInstance;

    /**
     * @param string $Region 代理节点所属地域
     * @param string $Zone 代理节点所属可用区
     * @param array $ProxyInstance 代理实例分布
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ProxyInstance",$param) and $param["ProxyInstance"] !== null) {
            $this->ProxyInstance = [];
            foreach ($param["ProxyInstance"] as $key => $value){
                $obj = new ProxyInst();
                $obj->deserialize($value);
                array_push($this->ProxyInstance, $obj);
            }
        }
    }
}
