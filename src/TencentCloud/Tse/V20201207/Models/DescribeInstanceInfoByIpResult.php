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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 根据公网IP查询云原生网关实例信息出参
 *
 * @method string getGatewayId() 获取实例id
 * @method void setGatewayId(string $GatewayId) 设置实例id
 * @method string getGroupId() 获取分组id
 * @method void setGroupId(string $GroupId) 设置分组id
 */
class DescribeInstanceInfoByIpResult extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $GatewayId;

    /**
     * @var string 分组id
     */
    public $GroupId;

    /**
     * @param string $GatewayId 实例id
     * @param string $GroupId 分组id
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
