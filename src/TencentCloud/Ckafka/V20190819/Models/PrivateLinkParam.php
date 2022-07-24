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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 建立私有连接的参数
 *
 * @method string getServiceVip() 获取客户实例的vip
 * @method void setServiceVip(string $ServiceVip) 设置客户实例的vip
 * @method string getUniqVpcId() 获取客户实例的vpcId
 * @method void setUniqVpcId(string $UniqVpcId) 设置客户实例的vpcId
 */
class PrivateLinkParam extends AbstractModel
{
    /**
     * @var string 客户实例的vip
     */
    public $ServiceVip;

    /**
     * @var string 客户实例的vpcId
     */
    public $UniqVpcId;

    /**
     * @param string $ServiceVip 客户实例的vip
     * @param string $UniqVpcId 客户实例的vpcId
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
        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }
    }
}
