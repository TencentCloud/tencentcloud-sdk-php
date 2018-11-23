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
namespace TencentCloud\Hcm\V20181106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getSessionId() 获取图片唯一标识，一张图片一个SessionId；
 * @method void setSessionId(string $SessionId) 设置图片唯一标识，一张图片一个SessionId；
 * @method string getImage() 获取图片数据，需要使用base64对图片的二进制数据进行编码；
 * @method void setImage(string $Image) 设置图片数据，需要使用base64对图片的二进制数据进行编码；
 */

/**
 *Evaluation请求参数结构体
 */
class EvaluationRequest extends AbstractModel
{
    /**
     * @var string 图片唯一标识，一张图片一个SessionId；
     */
    public $SessionId;

    /**
     * @var string 图片数据，需要使用base64对图片的二进制数据进行编码；
     */
    public $Image;
    /**
     * @param string $SessionId 图片唯一标识，一张图片一个SessionId；
     * @param string $Image 图片数据，需要使用base64对图片的二进制数据进行编码；
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
