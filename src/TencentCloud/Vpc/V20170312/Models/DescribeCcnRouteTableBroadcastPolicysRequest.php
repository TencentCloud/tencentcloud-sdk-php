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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCcnRouteTableBroadcastPolicys请求参数结构体
 *
 * @method string getCcnId() 获取云联网ID
 * @method void setCcnId(string $CcnId) 设置云联网ID
 * @method string getRouteTableId() 获取云联网路由表ID
 * @method void setRouteTableId(string $RouteTableId) 设置云联网路由表ID
 * @method integer getPolicyVersion() 获取路由传播策略版本号
 * @method void setPolicyVersion(integer $PolicyVersion) 设置路由传播策略版本号
 */
class DescribeCcnRouteTableBroadcastPolicysRequest extends AbstractModel
{
    /**
     * @var string 云联网ID
     */
    public $CcnId;

    /**
     * @var string 云联网路由表ID
     */
    public $RouteTableId;

    /**
     * @var integer 路由传播策略版本号
     */
    public $PolicyVersion;

    /**
     * @param string $CcnId 云联网ID
     * @param string $RouteTableId 云联网路由表ID
     * @param integer $PolicyVersion 路由传播策略版本号
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

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
        }
    }
}
