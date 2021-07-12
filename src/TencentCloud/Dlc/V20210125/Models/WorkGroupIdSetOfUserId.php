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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同一个用户绑定的工作组集合
 *
 * @method string getUserId() 获取用户Id，和CAM侧Uin匹配
 * @method void setUserId(string $UserId) 设置用户Id，和CAM侧Uin匹配
 * @method array getWorkGroupIds() 获取工作组Id集合
 * @method void setWorkGroupIds(array $WorkGroupIds) 设置工作组Id集合
 */
class WorkGroupIdSetOfUserId extends AbstractModel
{
    /**
     * @var string 用户Id，和CAM侧Uin匹配
     */
    public $UserId;

    /**
     * @var array 工作组Id集合
     */
    public $WorkGroupIds;

    /**
     * @param string $UserId 用户Id，和CAM侧Uin匹配
     * @param array $WorkGroupIds 工作组Id集合
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkGroupIds",$param) and $param["WorkGroupIds"] !== null) {
            $this->WorkGroupIds = $param["WorkGroupIds"];
        }
    }
}
