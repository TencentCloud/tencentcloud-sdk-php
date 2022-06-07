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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理镜像详情
 *
 * @method string getInferTemplateId() 获取模板ID
 * @method void setInferTemplateId(string $InferTemplateId) 设置模板ID
 * @method string getInferTemplateImage() 获取模板镜像
 * @method void setInferTemplateImage(string $InferTemplateImage) 设置模板镜像
 */
class InferTemplate extends AbstractModel
{
    /**
     * @var string 模板ID
     */
    public $InferTemplateId;

    /**
     * @var string 模板镜像
     */
    public $InferTemplateImage;

    /**
     * @param string $InferTemplateId 模板ID
     * @param string $InferTemplateImage 模板镜像
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
        if (array_key_exists("InferTemplateId",$param) and $param["InferTemplateId"] !== null) {
            $this->InferTemplateId = $param["InferTemplateId"];
        }

        if (array_key_exists("InferTemplateImage",$param) and $param["InferTemplateImage"] !== null) {
            $this->InferTemplateImage = $param["InferTemplateImage"];
        }
    }
}
