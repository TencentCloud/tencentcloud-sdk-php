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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型解析人脸识别配置
 *
 * @method string getSwitch() 获取<p>人脸识别任务开关</p><p>枚举值：</p><ul><li>ON： 开启智能人脸识别任务</li><li>OFF： 关闭智能人脸识别任务</li></ul><p>默认值：OFF</p>
 * @method void setSwitch(string $Switch) 设置<p>人脸识别任务开关</p><p>枚举值：</p><ul><li>ON： 开启智能人脸识别任务</li><li>OFF： 关闭智能人脸识别任务</li></ul><p>默认值：OFF</p>
 * @method float getScore() 获取<p>人脸识别过滤分数，当识别结果达到该分数以上，返回识别结果</p><p>取值范围：[0, 100]</p>
 * @method void setScore(float $Score) 设置<p>人脸识别过滤分数，当识别结果达到该分数以上，返回识别结果</p><p>取值范围：[0, 100]</p>
 * @method array getDefaultLibraryLabelSet() 获取<p>默认人物过滤标签，指定需要返回的默认人物的标签。如果未填或者为空，则全部默认人物结果都返回。</p><p>枚举值：</p><ul><li>entertainment： 娱乐明星</li><li>sport： 体育明星</li><li>politician： 政治人物</li></ul>
 * @method void setDefaultLibraryLabelSet(array $DefaultLibraryLabelSet) 设置<p>默认人物过滤标签，指定需要返回的默认人物的标签。如果未填或者为空，则全部默认人物结果都返回。</p><p>枚举值：</p><ul><li>entertainment： 娱乐明星</li><li>sport： 体育明星</li><li>politician： 政治人物</li></ul>
 * @method array getUserDefineLibraryLabelSet() 获取<p>用户自定义人物过滤标签，指定需要返回的用户自定义人物的标签。如果未填或者为空，则全部自定义人物结果都返回。 </p><p>入参限制：标签个数最多 100 个，每个标签长度最多 16 个字符。</p>
 * @method void setUserDefineLibraryLabelSet(array $UserDefineLibraryLabelSet) 设置<p>用户自定义人物过滤标签，指定需要返回的用户自定义人物的标签。如果未填或者为空，则全部自定义人物结果都返回。 </p><p>入参限制：标签个数最多 100 个，每个标签长度最多 16 个字符。</p>
 * @method string getFaceLibrary() 获取<p>人物库选择</p><p>枚举值：</p><ul><li>Default： 使用默认人物库</li><li>UserDefine： 使用用户自定义人物库</li><li>All： 同时使用默认人物库和用户自定义人物库</li></ul><p>默认值：All</p>
 * @method void setFaceLibrary(string $FaceLibrary) 设置<p>人物库选择</p><p>枚举值：</p><ul><li>Default： 使用默认人物库</li><li>UserDefine： 使用用户自定义人物库</li><li>All： 同时使用默认人物库和用户自定义人物库</li></ul><p>默认值：All</p>
 */
class LLMComprehendFaceRecognitionForUpdate extends AbstractModel
{
    /**
     * @var string <p>人脸识别任务开关</p><p>枚举值：</p><ul><li>ON： 开启智能人脸识别任务</li><li>OFF： 关闭智能人脸识别任务</li></ul><p>默认值：OFF</p>
     */
    public $Switch;

    /**
     * @var float <p>人脸识别过滤分数，当识别结果达到该分数以上，返回识别结果</p><p>取值范围：[0, 100]</p>
     */
    public $Score;

    /**
     * @var array <p>默认人物过滤标签，指定需要返回的默认人物的标签。如果未填或者为空，则全部默认人物结果都返回。</p><p>枚举值：</p><ul><li>entertainment： 娱乐明星</li><li>sport： 体育明星</li><li>politician： 政治人物</li></ul>
     */
    public $DefaultLibraryLabelSet;

    /**
     * @var array <p>用户自定义人物过滤标签，指定需要返回的用户自定义人物的标签。如果未填或者为空，则全部自定义人物结果都返回。 </p><p>入参限制：标签个数最多 100 个，每个标签长度最多 16 个字符。</p>
     */
    public $UserDefineLibraryLabelSet;

    /**
     * @var string <p>人物库选择</p><p>枚举值：</p><ul><li>Default： 使用默认人物库</li><li>UserDefine： 使用用户自定义人物库</li><li>All： 同时使用默认人物库和用户自定义人物库</li></ul><p>默认值：All</p>
     */
    public $FaceLibrary;

    /**
     * @param string $Switch <p>人脸识别任务开关</p><p>枚举值：</p><ul><li>ON： 开启智能人脸识别任务</li><li>OFF： 关闭智能人脸识别任务</li></ul><p>默认值：OFF</p>
     * @param float $Score <p>人脸识别过滤分数，当识别结果达到该分数以上，返回识别结果</p><p>取值范围：[0, 100]</p>
     * @param array $DefaultLibraryLabelSet <p>默认人物过滤标签，指定需要返回的默认人物的标签。如果未填或者为空，则全部默认人物结果都返回。</p><p>枚举值：</p><ul><li>entertainment： 娱乐明星</li><li>sport： 体育明星</li><li>politician： 政治人物</li></ul>
     * @param array $UserDefineLibraryLabelSet <p>用户自定义人物过滤标签，指定需要返回的用户自定义人物的标签。如果未填或者为空，则全部自定义人物结果都返回。 </p><p>入参限制：标签个数最多 100 个，每个标签长度最多 16 个字符。</p>
     * @param string $FaceLibrary <p>人物库选择</p><p>枚举值：</p><ul><li>Default： 使用默认人物库</li><li>UserDefine： 使用用户自定义人物库</li><li>All： 同时使用默认人物库和用户自定义人物库</li></ul><p>默认值：All</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("DefaultLibraryLabelSet",$param) and $param["DefaultLibraryLabelSet"] !== null) {
            $this->DefaultLibraryLabelSet = $param["DefaultLibraryLabelSet"];
        }

        if (array_key_exists("UserDefineLibraryLabelSet",$param) and $param["UserDefineLibraryLabelSet"] !== null) {
            $this->UserDefineLibraryLabelSet = $param["UserDefineLibraryLabelSet"];
        }

        if (array_key_exists("FaceLibrary",$param) and $param["FaceLibrary"] !== null) {
            $this->FaceLibrary = $param["FaceLibrary"];
        }
    }
}
