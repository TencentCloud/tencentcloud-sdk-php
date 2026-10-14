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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVideoSnapshotTemplate请求参数结构体
 *
 * @method string getName() 获取<p>模板名称： 中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
 * @method void setName(string $Name) 设置<p>模板名称： 中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
 * @method integer getType() 获取<p>截图类型： 1-实时截帧 2-低频截帧<br>注意：实时截帧在生效时段期间一直拉取实时流， 低频截帧在生效时段期间按需拉取实时流，每次拉流的最短持续时间不低于1分钟</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method void setType(integer $Type) 设置<p>截图类型： 1-实时截帧 2-低频截帧<br>注意：实时截帧在生效时段期间一直拉取实时流， 低频截帧在生效时段期间按需拉取实时流，每次拉流的最短持续时间不低于1分钟</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
 * @method integer getInterval() 获取<p>截帧频率： Type = 1时，取值[5, 180]秒 Type = 2时 取值[30, 36000]秒</p>
 * @method void setInterval(integer $Interval) 设置<p>截帧频率： Type = 1时，取值[5, 180]秒 Type = 2时 取值[30, 36000]秒</p>
 * @method array getTimes() 获取<p>生效时段，注：数组大小不超过100个且每个时间段不低于1分钟</p>
 * @method void setTimes(array $Times) 设置<p>生效时段，注：数组大小不超过100个且每个时间段不低于1分钟</p>
 * @method MultiVideoSnapshotMode getMultiMode() 获取<p>多张模式</p>
 * @method void setMultiMode(MultiVideoSnapshotMode $MultiMode) 设置<p>多张模式</p>
 */
class CreateVideoSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称： 中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
     */
    public $Name;

    /**
     * @var integer <p>截图类型： 1-实时截帧 2-低频截帧<br>注意：实时截帧在生效时段期间一直拉取实时流， 低频截帧在生效时段期间按需拉取实时流，每次拉流的最短持续时间不低于1分钟</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>截帧频率： Type = 1时，取值[5, 180]秒 Type = 2时 取值[30, 36000]秒</p>
     */
    public $Interval;

    /**
     * @var array <p>生效时段，注：数组大小不超过100个且每个时间段不低于1分钟</p>
     */
    public $Times;

    /**
     * @var MultiVideoSnapshotMode <p>多张模式</p>
     */
    public $MultiMode;

    /**
     * @param string $Name <p>模板名称： 中文、英文、数字、“-”、“_” 长度不超过128个字符</p>
     * @param integer $Type <p>截图类型： 1-实时截帧 2-低频截帧<br>注意：实时截帧在生效时段期间一直拉取实时流， 低频截帧在生效时段期间按需拉取实时流，每次拉流的最短持续时间不低于1分钟</p><p>枚举值：</p><ul><li>1： 实时截帧</li><li>2： 低频截帧</li></ul>
     * @param integer $Interval <p>截帧频率： Type = 1时，取值[5, 180]秒 Type = 2时 取值[30, 36000]秒</p>
     * @param array $Times <p>生效时段，注：数组大小不超过100个且每个时间段不低于1分钟</p>
     * @param MultiVideoSnapshotMode $MultiMode <p>多张模式</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("MultiMode",$param) and $param["MultiMode"] !== null) {
            $this->MultiMode = new MultiVideoSnapshotMode();
            $this->MultiMode->deserialize($param["MultiMode"]);
        }
    }
}
