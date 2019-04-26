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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getDefinition() 获取视频智能识别模板 ID ，固定为 10，同时进行按帧标签识别、精彩片段识别、视频头尾识别、拆条、人脸识别、文字识别、语音识别、文字全文识别、语音全文识别，后续会推出用户自定义模板，可根据需要选择相应的识别任务。
 * @method void setDefinition(integer $Definition) 设置视频智能识别模板 ID ，固定为 10，同时进行按帧标签识别、精彩片段识别、视频头尾识别、拆条、人脸识别、文字识别、语音识别、文字全文识别、语音全文识别，后续会推出用户自定义模板，可根据需要选择相应的识别任务。
 */

/**
 *视频内容识别输入参数类型
 */
class AiRecognitionTaskInput extends AbstractModel
{
    /**
     * @var integer 视频智能识别模板 ID ，固定为 10，同时进行按帧标签识别、精彩片段识别、视频头尾识别、拆条、人脸识别、文字识别、语音识别、文字全文识别、语音全文识别，后续会推出用户自定义模板，可根据需要选择相应的识别任务。
     */
    public $Definition;
    /**
     * @param integer $Definition 视频智能识别模板 ID ，固定为 10，同时进行按帧标签识别、精彩片段识别、视频头尾识别、拆条、人脸识别、文字识别、语音识别、文字全文识别、语音全文识别，后续会推出用户自定义模板，可根据需要选择相应的识别任务。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
