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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的限流限速等配置
 *
 * @method boolean getEnableInstanceRpsLimit() 获取是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
 * @method void setEnableInstanceRpsLimit(boolean $EnableInstanceRpsLimit) 设置是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
 * @method integer getInstanceRpsLimit() 获取每个服务实例的 request per second 限速, 0 为不限流
 * @method void setInstanceRpsLimit(integer $InstanceRpsLimit) 设置每个服务实例的 request per second 限速, 0 为不限流
 */
class ServiceLimit extends AbstractModel
{
    /**
     * @var boolean 是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
     */
    public $EnableInstanceRpsLimit;

    /**
     * @var integer 每个服务实例的 request per second 限速, 0 为不限流
     */
    public $InstanceRpsLimit;

    /**
     * @param boolean $EnableInstanceRpsLimit 是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
     * @param integer $InstanceRpsLimit 每个服务实例的 request per second 限速, 0 为不限流
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
        if (array_key_exists("EnableInstanceRpsLimit",$param) and $param["EnableInstanceRpsLimit"] !== null) {
            $this->EnableInstanceRpsLimit = $param["EnableInstanceRpsLimit"];
        }

        if (array_key_exists("InstanceRpsLimit",$param) and $param["InstanceRpsLimit"] !== null) {
            $this->InstanceRpsLimit = $param["InstanceRpsLimit"];
        }
    }
}
