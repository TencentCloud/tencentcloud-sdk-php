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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAgentAppServices请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>应用ID</p>
 * @method void setID(string $ID) 设置<p>应用ID</p>
 * @method array getServices() 获取<p>服务详情</p>
 * @method void setServices(array $Services) 设置<p>服务详情</p>
 */
class CreateAgentAppServicesRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>应用ID</p>
     */
    public $ID;

    /**
     * @var array <p>服务详情</p>
     */
    public $Services;

    /**
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>应用ID</p>
     * @param array $Services <p>服务详情</p>
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

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new AgentAppServiceDTO();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }
    }
}
