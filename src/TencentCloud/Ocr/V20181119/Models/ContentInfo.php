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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 卡证字段信息返回值
 *
 * @method string getContent() 获取字段内容
 * @method void setContent(string $Content) 设置字段内容
 * @method integer getConfidence() 获取结果置信度
 * @method void setConfidence(integer $Confidence) 设置结果置信度
 * @method integer getIsInComplete() 获取字段是否不完整（value内容）
0 字段正常
1 字段不完整
 * @method void setIsInComplete(integer $IsInComplete) 设置字段是否不完整（value内容）
0 字段正常
1 字段不完整
 * @method integer getIsReflect() 获取字段反光（value内容）
0 字段正常
1 字段有反光
 * @method void setIsReflect(integer $IsReflect) 设置字段反光（value内容）
0 字段正常
1 字段有反光
 * @method integer getIsKeyInComplete() 获取字段是否不完整（key内容）
0 字段正常
1 字段不完整
 * @method void setIsKeyInComplete(integer $IsKeyInComplete) 设置字段是否不完整（key内容）
0 字段正常
1 字段不完整
 * @method integer getIsKeyReflect() 获取字段反光（key内容）
0 字段正常
1 字段有反光
 * @method void setIsKeyReflect(integer $IsKeyReflect) 设置字段反光（key内容）
0 字段正常
1 字段有反光
 */
class ContentInfo extends AbstractModel
{
    /**
     * @var string 字段内容
     */
    public $Content;

    /**
     * @var integer 结果置信度
     */
    public $Confidence;

    /**
     * @var integer 字段是否不完整（value内容）
0 字段正常
1 字段不完整
     */
    public $IsInComplete;

    /**
     * @var integer 字段反光（value内容）
0 字段正常
1 字段有反光
     */
    public $IsReflect;

    /**
     * @var integer 字段是否不完整（key内容）
0 字段正常
1 字段不完整
     */
    public $IsKeyInComplete;

    /**
     * @var integer 字段反光（key内容）
0 字段正常
1 字段有反光
     */
    public $IsKeyReflect;

    /**
     * @param string $Content 字段内容
     * @param integer $Confidence 结果置信度
     * @param integer $IsInComplete 字段是否不完整（value内容）
0 字段正常
1 字段不完整
     * @param integer $IsReflect 字段反光（value内容）
0 字段正常
1 字段有反光
     * @param integer $IsKeyInComplete 字段是否不完整（key内容）
0 字段正常
1 字段不完整
     * @param integer $IsKeyReflect 字段反光（key内容）
0 字段正常
1 字段有反光
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("IsInComplete",$param) and $param["IsInComplete"] !== null) {
            $this->IsInComplete = $param["IsInComplete"];
        }

        if (array_key_exists("IsReflect",$param) and $param["IsReflect"] !== null) {
            $this->IsReflect = $param["IsReflect"];
        }

        if (array_key_exists("IsKeyInComplete",$param) and $param["IsKeyInComplete"] !== null) {
            $this->IsKeyInComplete = $param["IsKeyInComplete"];
        }

        if (array_key_exists("IsKeyReflect",$param) and $param["IsKeyReflect"] !== null) {
            $this->IsKeyReflect = $param["IsKeyReflect"];
        }
    }
}
