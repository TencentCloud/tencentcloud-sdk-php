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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测任务基础配置
 *
 * @method string getName() 获取拨测任务名称
 * @method void setName(string $Name) 设置拨测任务名称
 * @method string getTargetAddress() 获取拨测目标地址
 * @method void setTargetAddress(string $TargetAddress) 设置拨测目标地址
 */
class ProbeTaskBasicConfiguration extends AbstractModel
{
    /**
     * @var string 拨测任务名称
     */
    public $Name;

    /**
     * @var string 拨测目标地址
     */
    public $TargetAddress;

    /**
     * @param string $Name 拨测任务名称
     * @param string $TargetAddress 拨测目标地址
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }
    }
}
