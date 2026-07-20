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
 * DescribeCcnInstanceRegionStatus请求参数结构体
 *
 * @method string getCcnId() 获取<p>云联网ID</p>
 * @method void setCcnId(string $CcnId) 设置<p>云联网ID</p>
 * @method array getInstanceIds() 获取<p>要查询引流网络部署状态的云联网关联的实例ID列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>要查询引流网络部署状态的云联网关联的实例ID列表</p>
 * @method integer getRoutingMode() 获取<p>引流路由方法 0:多路由表, 1:策略路由</p>
 * @method void setRoutingMode(integer $RoutingMode) 设置<p>引流路由方法 0:多路由表, 1:策略路由</p>
 */
class DescribeCcnInstanceRegionStatusRequest extends AbstractModel
{
    /**
     * @var string <p>云联网ID</p>
     */
    public $CcnId;

    /**
     * @var array <p>要查询引流网络部署状态的云联网关联的实例ID列表</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>引流路由方法 0:多路由表, 1:策略路由</p>
     */
    public $RoutingMode;

    /**
     * @param string $CcnId <p>云联网ID</p>
     * @param array $InstanceIds <p>要查询引流网络部署状态的云联网关联的实例ID列表</p>
     * @param integer $RoutingMode <p>引流路由方法 0:多路由表, 1:策略路由</p>
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RoutingMode",$param) and $param["RoutingMode"] !== null) {
            $this->RoutingMode = $param["RoutingMode"];
        }
    }
}
