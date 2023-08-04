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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期，云文件生命周期设置，管理文件冷、热存储的时间
 *
 * @method integer getTransition() 获取云文件热存储时长，单位天，最小1天，最大3650天
 * @method void setTransition(integer $Transition) 设置云文件热存储时长，单位天，最小1天，最大3650天
 * @method integer getExpiration() 获取云文件冷存储时长， 单位天，0表示不设置，设置时最小60天，Expiration字段加Transition字段不超过3650天
 * @method void setExpiration(integer $Expiration) 设置云文件冷存储时长， 单位天，0表示不设置，设置时最小60天，Expiration字段加Transition字段不超过3650天
 */
class LifeCycleData extends AbstractModel
{
    /**
     * @var integer 云文件热存储时长，单位天，最小1天，最大3650天
     */
    public $Transition;

    /**
     * @var integer 云文件冷存储时长， 单位天，0表示不设置，设置时最小60天，Expiration字段加Transition字段不超过3650天
     */
    public $Expiration;

    /**
     * @param integer $Transition 云文件热存储时长，单位天，最小1天，最大3650天
     * @param integer $Expiration 云文件冷存储时长， 单位天，0表示不设置，设置时最小60天，Expiration字段加Transition字段不超过3650天
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
        if (array_key_exists("Transition",$param) and $param["Transition"] !== null) {
            $this->Transition = $param["Transition"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
