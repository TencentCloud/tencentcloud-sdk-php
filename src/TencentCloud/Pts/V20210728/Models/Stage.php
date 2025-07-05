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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分阶段施压时，对单个阶段的配置
 *
 * @method integer getDurationSeconds() 获取施压时间
 * @method void setDurationSeconds(integer $DurationSeconds) 设置施压时间
 * @method integer getTargetVirtualUsers() 获取虚拟用户数
 * @method void setTargetVirtualUsers(integer $TargetVirtualUsers) 设置虚拟用户数
 */
class Stage extends AbstractModel
{
    /**
     * @var integer 施压时间
     */
    public $DurationSeconds;

    /**
     * @var integer 虚拟用户数
     */
    public $TargetVirtualUsers;

    /**
     * @param integer $DurationSeconds 施压时间
     * @param integer $TargetVirtualUsers 虚拟用户数
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
        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("TargetVirtualUsers",$param) and $param["TargetVirtualUsers"] !== null) {
            $this->TargetVirtualUsers = $param["TargetVirtualUsers"];
        }
    }
}
