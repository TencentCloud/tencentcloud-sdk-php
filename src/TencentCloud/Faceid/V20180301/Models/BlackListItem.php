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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BlackListItem
 *
 * @method string getModelId() 获取<p>黑名单条目 ID，客户创建条目时自定义，用于回溯是哪一条命中</p>
 * @method void setModelId(string $ModelId) 设置<p>黑名单条目 ID，客户创建条目时自定义，用于回溯是哪一条命中</p>
 * @method string getModelType() 获取<p>条目类型。当前仅有 face（人脸）</p>
 * @method void setModelType(string $ModelType) 设置<p>条目类型。当前仅有 face（人脸）</p>
 * @method string getFaceScore() 获取<p>人脸相似度，字符串形式表示，保留 4 位小数，取值 0.0000–1.0000</p>
 * @method void setFaceScore(string $FaceScore) 设置<p>人脸相似度，字符串形式表示，保留 4 位小数，取值 0.0000–1.0000</p>
 * @method string getBackgroundScore() 获取<p>背景相似度</p>
 * @method void setBackgroundScore(string $BackgroundScore) 设置<p>背景相似度</p>
 */
class BlackListItem extends AbstractModel
{
    /**
     * @var string <p>黑名单条目 ID，客户创建条目时自定义，用于回溯是哪一条命中</p>
     */
    public $ModelId;

    /**
     * @var string <p>条目类型。当前仅有 face（人脸）</p>
     */
    public $ModelType;

    /**
     * @var string <p>人脸相似度，字符串形式表示，保留 4 位小数，取值 0.0000–1.0000</p>
     */
    public $FaceScore;

    /**
     * @var string <p>背景相似度</p>
     */
    public $BackgroundScore;

    /**
     * @param string $ModelId <p>黑名单条目 ID，客户创建条目时自定义，用于回溯是哪一条命中</p>
     * @param string $ModelType <p>条目类型。当前仅有 face（人脸）</p>
     * @param string $FaceScore <p>人脸相似度，字符串形式表示，保留 4 位小数，取值 0.0000–1.0000</p>
     * @param string $BackgroundScore <p>背景相似度</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("FaceScore",$param) and $param["FaceScore"] !== null) {
            $this->FaceScore = $param["FaceScore"];
        }

        if (array_key_exists("BackgroundScore",$param) and $param["BackgroundScore"] !== null) {
            $this->BackgroundScore = $param["BackgroundScore"];
        }
    }
}
