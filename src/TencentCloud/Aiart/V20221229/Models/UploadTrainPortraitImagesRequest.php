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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadTrainPortraitImages请求参数结构体
 *
 * @method string getModelId() 获取<p>写真模型 ID。由英文大小写字母、数字及下划线组成。<br>用于唯一标识一个写真模型，一个写真模型只能用于一个人物的写真图片生成。</p>
 * @method void setModelId(string $ModelId) 设置<p>写真模型 ID。由英文大小写字母、数字及下划线组成。<br>用于唯一标识一个写真模型，一个写真模型只能用于一个人物的写真图片生成。</p>
 * @method string getBaseUrl() 获取<p>写真模型训练用的基础图像 URL，用于固定写真模型可生成的人物。<br>图片数量：1张。<br>图片内容：单人，脸部清晰。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
 * @method void setBaseUrl(string $BaseUrl) 设置<p>写真模型训练用的基础图像 URL，用于固定写真模型可生成的人物。<br>图片数量：1张。<br>图片内容：单人，脸部清晰。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
 * @method array getUrls() 获取<p>写真模型训练用的图像 URL 列表，仅常规训练模式需要上传。<br>图片数量：19 - 24 张。<br>图片内容：单人，脸部清晰，和基础图像中的人物为同一人。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
 * @method void setUrls(array $Urls) 设置<p>写真模型训练用的图像 URL 列表，仅常规训练模式需要上传。<br>图片数量：19 - 24 张。<br>图片内容：单人，脸部清晰，和基础图像中的人物为同一人。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
 * @method Filter getFilter() 获取<p>训练图像质量过滤开关配置。<br>支持开启或关闭对训练图像分辨率下限、脸部区域大小、脸部遮挡的过滤，默认开启以上过滤。<br>如果训练图像内包含多人脸或无人脸、和 Base 人像不为同一人也将被过滤，不可关闭该过滤条件。<br>建议：关闭以上过滤可能导致写真生成效果受损，建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的图像进行训练。<br>示例值：{&quot;Resolution&quot;:1,&quot;Size&quot;:1,&quot;Occlusion&quot;:1}</p>
 * @method void setFilter(Filter $Filter) 设置<p>训练图像质量过滤开关配置。<br>支持开启或关闭对训练图像分辨率下限、脸部区域大小、脸部遮挡的过滤，默认开启以上过滤。<br>如果训练图像内包含多人脸或无人脸、和 Base 人像不为同一人也将被过滤，不可关闭该过滤条件。<br>建议：关闭以上过滤可能导致写真生成效果受损，建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的图像进行训练。<br>示例值：{&quot;Resolution&quot;:1,&quot;Size&quot;:1,&quot;Occlusion&quot;:1}</p>
 * @method integer getTrainMode() 获取<p>训练模式。<br>默认使用常规训练模式。如果使用快速训练模式和免训练模式，只需要在 BaseUrl 中传入1张图片，Urls.N 中无需传入图片。<br>0：常规训练模式，上传多张图片用于模型训练，完成训练后可生成写真图片。<br>1：快速训练模式，仅需上传1张图片用于模型训练，训练速度更快，完成训练后可生成写真图片。<br>2：免训练模式，仅需上传1张图片，跳过模型训练环节，直接生成写真图片。</p>
 * @method void setTrainMode(integer $TrainMode) 设置<p>训练模式。<br>默认使用常规训练模式。如果使用快速训练模式和免训练模式，只需要在 BaseUrl 中传入1张图片，Urls.N 中无需传入图片。<br>0：常规训练模式，上传多张图片用于模型训练，完成训练后可生成写真图片。<br>1：快速训练模式，仅需上传1张图片用于模型训练，训练速度更快，完成训练后可生成写真图片。<br>2：免训练模式，仅需上传1张图片，跳过模型训练环节，直接生成写真图片。</p>
 */
class UploadTrainPortraitImagesRequest extends AbstractModel
{
    /**
     * @var string <p>写真模型 ID。由英文大小写字母、数字及下划线组成。<br>用于唯一标识一个写真模型，一个写真模型只能用于一个人物的写真图片生成。</p>
     */
    public $ModelId;

    /**
     * @var string <p>写真模型训练用的基础图像 URL，用于固定写真模型可生成的人物。<br>图片数量：1张。<br>图片内容：单人，脸部清晰。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
     */
    public $BaseUrl;

    /**
     * @var array <p>写真模型训练用的图像 URL 列表，仅常规训练模式需要上传。<br>图片数量：19 - 24 张。<br>图片内容：单人，脸部清晰，和基础图像中的人物为同一人。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
     */
    public $Urls;

    /**
     * @var Filter <p>训练图像质量过滤开关配置。<br>支持开启或关闭对训练图像分辨率下限、脸部区域大小、脸部遮挡的过滤，默认开启以上过滤。<br>如果训练图像内包含多人脸或无人脸、和 Base 人像不为同一人也将被过滤，不可关闭该过滤条件。<br>建议：关闭以上过滤可能导致写真生成效果受损，建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的图像进行训练。<br>示例值：{&quot;Resolution&quot;:1,&quot;Size&quot;:1,&quot;Occlusion&quot;:1}</p>
     */
    public $Filter;

    /**
     * @var integer <p>训练模式。<br>默认使用常规训练模式。如果使用快速训练模式和免训练模式，只需要在 BaseUrl 中传入1张图片，Urls.N 中无需传入图片。<br>0：常规训练模式，上传多张图片用于模型训练，完成训练后可生成写真图片。<br>1：快速训练模式，仅需上传1张图片用于模型训练，训练速度更快，完成训练后可生成写真图片。<br>2：免训练模式，仅需上传1张图片，跳过模型训练环节，直接生成写真图片。</p>
     */
    public $TrainMode;

    /**
     * @param string $ModelId <p>写真模型 ID。由英文大小写字母、数字及下划线组成。<br>用于唯一标识一个写真模型，一个写真模型只能用于一个人物的写真图片生成。</p>
     * @param string $BaseUrl <p>写真模型训练用的基础图像 URL，用于固定写真模型可生成的人物。<br>图片数量：1张。<br>图片内容：单人，脸部清晰。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
     * @param array $Urls <p>写真模型训练用的图像 URL 列表，仅常规训练模式需要上传。<br>图片数量：19 - 24 张。<br>图片内容：单人，脸部清晰，和基础图像中的人物为同一人。<br>图片限制：单边分辨率小于2000px，转成 Base64 字符串后小于 5MB。</p>
     * @param Filter $Filter <p>训练图像质量过滤开关配置。<br>支持开启或关闭对训练图像分辨率下限、脸部区域大小、脸部遮挡的过滤，默认开启以上过滤。<br>如果训练图像内包含多人脸或无人脸、和 Base 人像不为同一人也将被过滤，不可关闭该过滤条件。<br>建议：关闭以上过滤可能导致写真生成效果受损，建议使用单人、正脸、脸部区域占比较大、脸部清晰无遮挡、无大角度偏转、无夸张表情的图像进行训练。<br>示例值：{&quot;Resolution&quot;:1,&quot;Size&quot;:1,&quot;Occlusion&quot;:1}</p>
     * @param integer $TrainMode <p>训练模式。<br>默认使用常规训练模式。如果使用快速训练模式和免训练模式，只需要在 BaseUrl 中传入1张图片，Urls.N 中无需传入图片。<br>0：常规训练模式，上传多张图片用于模型训练，完成训练后可生成写真图片。<br>1：快速训练模式，仅需上传1张图片用于模型训练，训练速度更快，完成训练后可生成写真图片。<br>2：免训练模式，仅需上传1张图片，跳过模型训练环节，直接生成写真图片。</p>
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

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("TrainMode",$param) and $param["TrainMode"] !== null) {
            $this->TrainMode = $param["TrainMode"];
        }
    }
}
