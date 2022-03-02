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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterEndpointWanStatus请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getEndpointId() 获取接入点ID
 * @method void setEndpointId(string $EndpointId) 设置接入点ID
 * @method string getWanStatus() 获取取值为： 
 - OPEN：开启外网 
 - CLOSE：关闭外网
 * @method void setWanStatus(string $WanStatus) 设置取值为： 
 - OPEN：开启外网 
 - CLOSE：关闭外网
 */
class ModifyClusterEndpointWanStatusRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 接入点ID
     */
    public $EndpointId;

    /**
     * @var string 取值为： 
 - OPEN：开启外网 
 - CLOSE：关闭外网
     */
    public $WanStatus;

    /**
     * @param string $ClusterId 集群ID
     * @param string $EndpointId 接入点ID
     * @param string $WanStatus 取值为： 
 - OPEN：开启外网 
 - CLOSE：关闭外网
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }
    }
}
