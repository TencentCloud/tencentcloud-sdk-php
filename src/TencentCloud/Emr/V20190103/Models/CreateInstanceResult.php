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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getClientToken() 获取客户端TOKEN
 * @method void setClientToken(string $ClientToken) 设置客户端TOKEN
 * @method string getInstanceName() 获取集群名称
 * @method void setInstanceName(string $InstanceName) 设置集群名称
 * @method array getDealNames() 获取订单列表
 * @method void setDealNames(array $DealNames) 设置订单列表
 */

/**
 *创建接口返回值
 */
class CreateInstanceResult extends AbstractModel
{
    /**
     * @var string 客户端TOKEN
     */
    public $ClientToken;

    /**
     * @var string 集群名称
     */
    public $InstanceName;

    /**
     * @var array 订单列表
     */
    public $DealNames;
    /**
     * @param string $ClientToken 客户端TOKEN
     * @param string $InstanceName 集群名称
     * @param array $DealNames 订单列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }
    }
}
