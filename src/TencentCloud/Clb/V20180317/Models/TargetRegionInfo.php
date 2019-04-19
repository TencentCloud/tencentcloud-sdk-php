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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getRegion() 获取Target所属地域
 * @method void setRegion(string $Region) 设置Target所属地域
 * @method string getVpcId() 获取Target所属VPC网络
 * @method void setVpcId(string $VpcId) 设置Target所属VPC网络
 */

/**
 *负载均衡实例所绑定的后端信息，包括所属地域、所属VPC网络。
 */
class TargetRegionInfo extends AbstractModel
{
    /**
     * @var string Target所属地域
     */
    public $Region;

    /**
     * @var string Target所属VPC网络
     */
    public $VpcId;
    /**
     * @param string $Region Target所属地域
     * @param string $VpcId Target所属VPC网络
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
