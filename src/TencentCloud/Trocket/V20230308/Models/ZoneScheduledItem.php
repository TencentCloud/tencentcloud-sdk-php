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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy调度时各个可用区有无调度任务
 *
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method boolean getNodePermWipeFlag() 获取有剔除的调度任务且没有切回的可用区时，该值为true，反之为false
 * @method void setNodePermWipeFlag(boolean $NodePermWipeFlag) 设置有剔除的调度任务且没有切回的可用区时，该值为true，反之为false
 */
class ZoneScheduledItem extends AbstractModel
{
    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var boolean 有剔除的调度任务且没有切回的可用区时，该值为true，反之为false
     */
    public $NodePermWipeFlag;

    /**
     * @param string $ZoneId 可用区ID
     * @param boolean $NodePermWipeFlag 有剔除的调度任务且没有切回的可用区时，该值为true，反之为false
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NodePermWipeFlag",$param) and $param["NodePermWipeFlag"] !== null) {
            $this->NodePermWipeFlag = $param["NodePermWipeFlag"];
        }
    }
}
