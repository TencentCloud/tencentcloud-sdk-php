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
 * 编排任务输出
 *
 * @method string getActivityType() 获取原子任务类型。
<li>Transcode：转码。</li>
<li>SampleSnapshot：采样截图。</li>
<li>AnimatedGraphics：转动图。</li>
<li>SnapshotByTimeOffset：时间点截图。</li>
<li>ImageSprites：雪碧图。</li>
<li>AdaptiveDynamicStreaming：自适应码流。</li>
<li>AiContentReview：内容审核。</li>
<li>AIRecognition：智能识别。</li>
<li>AIAnalysis：智能分析。</li>
 * @method void setActivityType(string $ActivityType) 设置原子任务类型。
<li>Transcode：转码。</li>
<li>SampleSnapshot：采样截图。</li>
<li>AnimatedGraphics：转动图。</li>
<li>SnapshotByTimeOffset：时间点截图。</li>
<li>ImageSprites：雪碧图。</li>
<li>AdaptiveDynamicStreaming：自适应码流。</li>
<li>AiContentReview：内容审核。</li>
<li>AIRecognition：智能识别。</li>
<li>AIAnalysis：智能分析。</li>
 * @method ActivityResItem getActivityResItem() 获取原子任务输出。
 * @method void setActivityResItem(ActivityResItem $ActivityResItem) 设置原子任务输出。
 */
class ActivityResult extends AbstractModel
{
    /**
     * @var string 原子任务类型。
<li>Transcode：转码。</li>
<li>SampleSnapshot：采样截图。</li>
<li>AnimatedGraphics：转动图。</li>
<li>SnapshotByTimeOffset：时间点截图。</li>
<li>ImageSprites：雪碧图。</li>
<li>AdaptiveDynamicStreaming：自适应码流。</li>
<li>AiContentReview：内容审核。</li>
<li>AIRecognition：智能识别。</li>
<li>AIAnalysis：智能分析。</li>
     */
    public $ActivityType;

    /**
     * @var ActivityResItem 原子任务输出。
     */
    public $ActivityResItem;

    /**
     * @param string $ActivityType 原子任务类型。
<li>Transcode：转码。</li>
<li>SampleSnapshot：采样截图。</li>
<li>AnimatedGraphics：转动图。</li>
<li>SnapshotByTimeOffset：时间点截图。</li>
<li>ImageSprites：雪碧图。</li>
<li>AdaptiveDynamicStreaming：自适应码流。</li>
<li>AiContentReview：内容审核。</li>
<li>AIRecognition：智能识别。</li>
<li>AIAnalysis：智能分析。</li>
     * @param ActivityResItem $ActivityResItem 原子任务输出。
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

        if (array_key_exists("ActivityResItem",$param) and $param["ActivityResItem"] !== null) {
            $this->ActivityResItem = new ActivityResItem();
            $this->ActivityResItem->deserialize($param["ActivityResItem"]);
        }
    }
}
