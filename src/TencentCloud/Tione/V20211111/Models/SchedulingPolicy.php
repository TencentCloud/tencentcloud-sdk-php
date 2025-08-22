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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的调度策略配置
 *
 * @method boolean getCrossResourceGroupScheduling() 获取是否启用了跨资源组调度开关
 * @method void setCrossResourceGroupScheduling(boolean $CrossResourceGroupScheduling) 设置是否启用了跨资源组调度开关
 */
class SchedulingPolicy extends AbstractModel
{
    /**
     * @var boolean 是否启用了跨资源组调度开关
     */
    public $CrossResourceGroupScheduling;

    /**
     * @param boolean $CrossResourceGroupScheduling 是否启用了跨资源组调度开关
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
        if (array_key_exists("CrossResourceGroupScheduling",$param) and $param["CrossResourceGroupScheduling"] !== null) {
            $this->CrossResourceGroupScheduling = $param["CrossResourceGroupScheduling"];
        }
    }
}
