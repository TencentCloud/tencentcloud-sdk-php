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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商品裂变任务信息
 *
 * @method integer getDuration() 获取<p>视频输出时长</p><p>取值范围：[4, 15]</p><p>单位：秒</p><p>默认值：15</p>
 * @method void setDuration(integer $Duration) 设置<p>视频输出时长</p><p>取值范围：[4, 15]</p><p>单位：秒</p><p>默认值：15</p>
 * @method string getModelTier() 获取<p>模型档位</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 旗舰版</li></ul>
 * @method void setModelTier(string $ModelTier) 设置<p>模型档位</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 旗舰版</li></ul>
 * @method string getRatio() 获取<p>视频画面比例</p><p>枚举值：</p><ul><li>9:16： 9:16</li><li>16:9： 16:9</li><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li></ul>
 * @method void setRatio(string $Ratio) 设置<p>视频画面比例</p><p>枚举值：</p><ul><li>9:16： 9:16</li><li>16:9： 16:9</li><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li></ul>
 * @method string getResolution() 获取<p>输出分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li><li>2k： 2k</li><li>4k： 4k</li></ul>
 * @method void setResolution(string $Resolution) 设置<p>输出分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li><li>2k： 2k</li><li>4k： 4k</li></ul>
 * @method string getMarket() 获取<p>目标市场</p><p>枚举值：</p><ul><li>north_america： 北美</li><li>europe： 欧洲</li><li>china： 中国</li><li>japan： 日本</li><li>korea： 韩国</li><li>southeast_asia： 东南亚</li><li>brazil： 巴西</li><li>global： 全球</li><li>other： 其他</li></ul><p>影响默认出镜模特族裔与本地化风格；未指定 CustomModel 时按市场自动决定人种</p>
 * @method void setMarket(string $Market) 设置<p>目标市场</p><p>枚举值：</p><ul><li>north_america： 北美</li><li>europe： 欧洲</li><li>china： 中国</li><li>japan： 日本</li><li>korea： 韩国</li><li>southeast_asia： 东南亚</li><li>brazil： 巴西</li><li>global： 全球</li><li>other： 其他</li></ul><p>影响默认出镜模特族裔与本地化风格；未指定 CustomModel 时按市场自动决定人种</p>
 * @method string getLanguage() 获取<p>口播/字幕语言</p><p>枚举值：</p><ul><li>english： 英文</li><li>chinese： 中文</li><li>japanese： 日语</li><li>korean： 韩语</li><li>spanish： 西班牙语</li><li>portuguese： 葡萄牙语</li><li>music_only： 纯音乐无口播</li></ul>
 * @method void setLanguage(string $Language) 设置<p>口播/字幕语言</p><p>枚举值：</p><ul><li>english： 英文</li><li>chinese： 中文</li><li>japanese： 日语</li><li>korean： 韩语</li><li>spanish： 西班牙语</li><li>portuguese： 葡萄牙语</li><li>music_only： 纯音乐无口播</li></ul>
 * @method string getVideoType() 获取<p>视频类型</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示（纯商品、无人声）</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
 * @method void setVideoType(string $VideoType) 设置<p>视频类型</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示（纯商品、无人声）</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
 * @method integer getSplitCount() 获取<p>裂变数量</p><p>取值范围：[0, 1]</p><p>单位：个</p>
 * @method void setSplitCount(integer $SplitCount) 设置<p>裂变数量</p><p>取值范围：[0, 1]</p><p>单位：个</p>
 * @method CustomModel getCustomModel() 获取<p>定制出镜模特</p>
 * @method void setCustomModel(CustomModel $CustomModel) 设置<p>定制出镜模特</p>
 */
class FissionTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>视频输出时长</p><p>取值范围：[4, 15]</p><p>单位：秒</p><p>默认值：15</p>
     */
    public $Duration;

    /**
     * @var string <p>模型档位</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 旗舰版</li></ul>
     */
    public $ModelTier;

    /**
     * @var string <p>视频画面比例</p><p>枚举值：</p><ul><li>9:16： 9:16</li><li>16:9： 16:9</li><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li></ul>
     */
    public $Ratio;

    /**
     * @var string <p>输出分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li><li>2k： 2k</li><li>4k： 4k</li></ul>
     */
    public $Resolution;

    /**
     * @var string <p>目标市场</p><p>枚举值：</p><ul><li>north_america： 北美</li><li>europe： 欧洲</li><li>china： 中国</li><li>japan： 日本</li><li>korea： 韩国</li><li>southeast_asia： 东南亚</li><li>brazil： 巴西</li><li>global： 全球</li><li>other： 其他</li></ul><p>影响默认出镜模特族裔与本地化风格；未指定 CustomModel 时按市场自动决定人种</p>
     */
    public $Market;

    /**
     * @var string <p>口播/字幕语言</p><p>枚举值：</p><ul><li>english： 英文</li><li>chinese： 中文</li><li>japanese： 日语</li><li>korean： 韩语</li><li>spanish： 西班牙语</li><li>portuguese： 葡萄牙语</li><li>music_only： 纯音乐无口播</li></ul>
     */
    public $Language;

    /**
     * @var string <p>视频类型</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示（纯商品、无人声）</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
     */
    public $VideoType;

    /**
     * @var integer <p>裂变数量</p><p>取值范围：[0, 1]</p><p>单位：个</p>
     */
    public $SplitCount;

    /**
     * @var CustomModel <p>定制出镜模特</p>
     */
    public $CustomModel;

    /**
     * @param integer $Duration <p>视频输出时长</p><p>取值范围：[4, 15]</p><p>单位：秒</p><p>默认值：15</p>
     * @param string $ModelTier <p>模型档位</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 旗舰版</li></ul>
     * @param string $Ratio <p>视频画面比例</p><p>枚举值：</p><ul><li>9:16： 9:16</li><li>16:9： 16:9</li><li>1:1： 1:1</li><li>3:4： 3:4</li><li>4:3： 4:3</li></ul>
     * @param string $Resolution <p>输出分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li><li>2k： 2k</li><li>4k： 4k</li></ul>
     * @param string $Market <p>目标市场</p><p>枚举值：</p><ul><li>north_america： 北美</li><li>europe： 欧洲</li><li>china： 中国</li><li>japan： 日本</li><li>korea： 韩国</li><li>southeast_asia： 东南亚</li><li>brazil： 巴西</li><li>global： 全球</li><li>other： 其他</li></ul><p>影响默认出镜模特族裔与本地化风格；未指定 CustomModel 时按市场自动决定人种</p>
     * @param string $Language <p>口播/字幕语言</p><p>枚举值：</p><ul><li>english： 英文</li><li>chinese： 中文</li><li>japanese： 日语</li><li>korean： 韩语</li><li>spanish： 西班牙语</li><li>portuguese： 葡萄牙语</li><li>music_only： 纯音乐无口播</li></ul>
     * @param string $VideoType <p>视频类型</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示（纯商品、无人声）</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
     * @param integer $SplitCount <p>裂变数量</p><p>取值范围：[0, 1]</p><p>单位：个</p>
     * @param CustomModel $CustomModel <p>定制出镜模特</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModelTier",$param) and $param["ModelTier"] !== null) {
            $this->ModelTier = $param["ModelTier"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("VideoType",$param) and $param["VideoType"] !== null) {
            $this->VideoType = $param["VideoType"];
        }

        if (array_key_exists("SplitCount",$param) and $param["SplitCount"] !== null) {
            $this->SplitCount = $param["SplitCount"];
        }

        if (array_key_exists("CustomModel",$param) and $param["CustomModel"] !== null) {
            $this->CustomModel = new CustomModel();
            $this->CustomModel->deserialize($param["CustomModel"]);
        }
    }
}
