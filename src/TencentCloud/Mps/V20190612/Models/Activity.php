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
 * 编排原子任务
 *
 * @method string getActivityType() 获取原子任务类型：
<li>input: 起始节点</li>
<li>output：终止节点</li>
<li>action-trans：转码</li>
<li>action-samplesnapshot：采样截图</li>
<li>action-AIAnalysis: 分析</li>
<li>action-AIRecognition：识别</li>
<li>action-aiReview：审核</li>
<li>action-animated-graphics：转动图</li>
<li>action-image-sprite：雪碧图</li>
<li>action-snapshotByTimeOffset: 时间点截图</li>
<li>action-adaptive-substream：自适应码流</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityType(string $ActivityType) 设置原子任务类型：
<li>input: 起始节点</li>
<li>output：终止节点</li>
<li>action-trans：转码</li>
<li>action-samplesnapshot：采样截图</li>
<li>action-AIAnalysis: 分析</li>
<li>action-AIRecognition：识别</li>
<li>action-aiReview：审核</li>
<li>action-animated-graphics：转动图</li>
<li>action-image-sprite：雪碧图</li>
<li>action-snapshotByTimeOffset: 时间点截图</li>
<li>action-adaptive-substream：自适应码流</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReardriveIndex() 获取后驱节点索引数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReardriveIndex(array $ReardriveIndex) 设置后驱节点索引数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method ActivityPara getActivityPara() 获取原子任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivityPara(ActivityPara $ActivityPara) 设置原子任务参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Activity extends AbstractModel
{
    /**
     * @var string 原子任务类型：
<li>input: 起始节点</li>
<li>output：终止节点</li>
<li>action-trans：转码</li>
<li>action-samplesnapshot：采样截图</li>
<li>action-AIAnalysis: 分析</li>
<li>action-AIRecognition：识别</li>
<li>action-aiReview：审核</li>
<li>action-animated-graphics：转动图</li>
<li>action-image-sprite：雪碧图</li>
<li>action-snapshotByTimeOffset: 时间点截图</li>
<li>action-adaptive-substream：自适应码流</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityType;

    /**
     * @var array 后驱节点索引数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReardriveIndex;

    /**
     * @var ActivityPara 原子任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivityPara;

    /**
     * @param string $ActivityType 原子任务类型：
<li>input: 起始节点</li>
<li>output：终止节点</li>
<li>action-trans：转码</li>
<li>action-samplesnapshot：采样截图</li>
<li>action-AIAnalysis: 分析</li>
<li>action-AIRecognition：识别</li>
<li>action-aiReview：审核</li>
<li>action-animated-graphics：转动图</li>
<li>action-image-sprite：雪碧图</li>
<li>action-snapshotByTimeOffset: 时间点截图</li>
<li>action-adaptive-substream：自适应码流</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReardriveIndex 后驱节点索引数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param ActivityPara $ActivityPara 原子任务参数
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

        if (array_key_exists("ReardriveIndex",$param) and $param["ReardriveIndex"] !== null) {
            $this->ReardriveIndex = $param["ReardriveIndex"];
        }

        if (array_key_exists("ActivityPara",$param) and $param["ActivityPara"] !== null) {
            $this->ActivityPara = new ActivityPara();
            $this->ActivityPara->deserialize($param["ActivityPara"]);
        }
    }
}
