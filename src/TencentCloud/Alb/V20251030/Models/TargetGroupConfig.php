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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组配置
 *
 * @method array getTargetGroups() 获取目标组列表。
 * @method void setTargetGroups(array $TargetGroups) 设置目标组列表。
 * @method TargetGroupStickySession getTargetGroupStickySession() 获取目标组间会话保持
 * @method void setTargetGroupStickySession(TargetGroupStickySession $TargetGroupStickySession) 设置目标组间会话保持
 */
class TargetGroupConfig extends AbstractModel
{
    /**
     * @var array 目标组列表。
     */
    public $TargetGroups;

    /**
     * @var TargetGroupStickySession 目标组间会话保持
     */
    public $TargetGroupStickySession;

    /**
     * @param array $TargetGroups 目标组列表。
     * @param TargetGroupStickySession $TargetGroupStickySession 目标组间会话保持
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
        if (array_key_exists("TargetGroups",$param) and $param["TargetGroups"] !== null) {
            $this->TargetGroups = [];
            foreach ($param["TargetGroups"] as $key => $value){
                $obj = new TargetGroupTuple();
                $obj->deserialize($value);
                array_push($this->TargetGroups, $obj);
            }
        }

        if (array_key_exists("TargetGroupStickySession",$param) and $param["TargetGroupStickySession"] !== null) {
            $this->TargetGroupStickySession = new TargetGroupStickySession();
            $this->TargetGroupStickySession->deserialize($param["TargetGroupStickySession"]);
        }
    }
}
