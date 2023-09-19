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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播编排任务输出
 *
 * @method string getActivityType() 获取原子任务类型。
<li>LiveRecord：直播录制。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityType(string $ActivityType) 设置原子任务类型。
<li>LiveRecord：直播录制。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LiveActivityResItem getLiveActivityResItem() 获取原子任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveActivityResItem(LiveActivityResItem $LiveActivityResItem) 设置原子任务输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveActivityResult extends AbstractModel
{
    /**
     * @var string 原子任务类型。
<li>LiveRecord：直播录制。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityType;

    /**
     * @var LiveActivityResItem 原子任务输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveActivityResItem;

    /**
     * @param string $ActivityType 原子任务类型。
<li>LiveRecord：直播录制。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LiveActivityResItem $LiveActivityResItem 原子任务输出。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("LiveActivityResItem",$param) and $param["LiveActivityResItem"] !== null) {
            $this->LiveActivityResItem = new LiveActivityResItem();
            $this->LiveActivityResItem->deserialize($param["LiveActivityResItem"]);
        }
    }
}
