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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanTo3DMotionJob请求参数结构体
 *
 * @method string getPrompt() 获取<p>输入文本prompt，限定最大字符为128。</p>
 * @method void setPrompt(string $Prompt) 设置<p>输入文本prompt，限定最大字符为128。</p>
 * @method string getModel() 获取<p>模型名称：HY-Motion-1.0，默认HY-Motion-1.0。</p>
 * @method void setModel(string $Model) 设置<p>模型名称：HY-Motion-1.0，默认HY-Motion-1.0。</p>
 * @method InputFile3D getRetargetFile() 获取<p>需重定向的模型地址，只能支持混元生3D动画生成的模型（动画模板的接口）</p>
 * @method void setRetargetFile(InputFile3D $RetargetFile) 设置<p>需重定向的模型地址，只能支持混元生3D动画生成的模型（动画模板的接口）</p>
 * @method integer getDuration() 获取<p>生成动画的时长，默认5，范围：1-12（单位s）</p>
 * @method void setDuration(integer $Duration) 设置<p>生成动画的时长，默认5，范围：1-12（单位s）</p>
 * @method boolean getEnableMesh() 获取<p>默认true，返回的fbx是否带蒙皮mesh</p>
 * @method void setEnableMesh(boolean $EnableMesh) 设置<p>默认true，返回的fbx是否带蒙皮mesh</p>
 * @method boolean getEnableRewrite() 获取<p>是否开启prompt扩写，开启后将补充完善输入的prompt。<br>默认false。</p>
 * @method void setEnableRewrite(boolean $EnableRewrite) 设置<p>是否开启prompt扩写，开启后将补充完善输入的prompt。<br>默认false。</p>
 * @method boolean getEnableDurationEst() 获取<p>是否开启时长自动匹配，开启后将自动根据prompt匹配适合时长的动作数据<br>默认false。</p>
 * @method void setEnableDurationEst(boolean $EnableDurationEst) 设置<p>是否开启时长自动匹配，开启后将自动根据prompt匹配适合时长的动作数据<br>默认false。</p>
 */
class SubmitHunyuanTo3DMotionJobRequest extends AbstractModel
{
    /**
     * @var string <p>输入文本prompt，限定最大字符为128。</p>
     */
    public $Prompt;

    /**
     * @var string <p>模型名称：HY-Motion-1.0，默认HY-Motion-1.0。</p>
     */
    public $Model;

    /**
     * @var InputFile3D <p>需重定向的模型地址，只能支持混元生3D动画生成的模型（动画模板的接口）</p>
     */
    public $RetargetFile;

    /**
     * @var integer <p>生成动画的时长，默认5，范围：1-12（单位s）</p>
     */
    public $Duration;

    /**
     * @var boolean <p>默认true，返回的fbx是否带蒙皮mesh</p>
     */
    public $EnableMesh;

    /**
     * @var boolean <p>是否开启prompt扩写，开启后将补充完善输入的prompt。<br>默认false。</p>
     */
    public $EnableRewrite;

    /**
     * @var boolean <p>是否开启时长自动匹配，开启后将自动根据prompt匹配适合时长的动作数据<br>默认false。</p>
     */
    public $EnableDurationEst;

    /**
     * @param string $Prompt <p>输入文本prompt，限定最大字符为128。</p>
     * @param string $Model <p>模型名称：HY-Motion-1.0，默认HY-Motion-1.0。</p>
     * @param InputFile3D $RetargetFile <p>需重定向的模型地址，只能支持混元生3D动画生成的模型（动画模板的接口）</p>
     * @param integer $Duration <p>生成动画的时长，默认5，范围：1-12（单位s）</p>
     * @param boolean $EnableMesh <p>默认true，返回的fbx是否带蒙皮mesh</p>
     * @param boolean $EnableRewrite <p>是否开启prompt扩写，开启后将补充完善输入的prompt。<br>默认false。</p>
     * @param boolean $EnableDurationEst <p>是否开启时长自动匹配，开启后将自动根据prompt匹配适合时长的动作数据<br>默认false。</p>
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("RetargetFile",$param) and $param["RetargetFile"] !== null) {
            $this->RetargetFile = new InputFile3D();
            $this->RetargetFile->deserialize($param["RetargetFile"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("EnableMesh",$param) and $param["EnableMesh"] !== null) {
            $this->EnableMesh = $param["EnableMesh"];
        }

        if (array_key_exists("EnableRewrite",$param) and $param["EnableRewrite"] !== null) {
            $this->EnableRewrite = $param["EnableRewrite"];
        }

        if (array_key_exists("EnableDurationEst",$param) and $param["EnableDurationEst"] !== null) {
            $this->EnableDurationEst = $param["EnableDurationEst"];
        }
    }
}
