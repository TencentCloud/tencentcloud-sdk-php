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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体替换信息。
 *
 * @method string getMediaType() 获取替换的媒体类型，取值有：
<li>CMEMaterialId：替换的媒体类型为媒体 ID；</li>
<li>ImageUrl：替换的媒体类型为图片 URL；</li>

注：默认为 CMEMaterialId 。
 * @method void setMediaType(string $MediaType) 设置替换的媒体类型，取值有：
<li>CMEMaterialId：替换的媒体类型为媒体 ID；</li>
<li>ImageUrl：替换的媒体类型为图片 URL；</li>

注：默认为 CMEMaterialId 。
 * @method string getMaterialId() 获取媒体 ID。
当媒体类型取值为 CMEMaterialId 时有效。
 * @method void setMaterialId(string $MaterialId) 设置媒体 ID。
当媒体类型取值为 CMEMaterialId 时有效。
 * @method string getMediaUrl() 获取媒体 URL。
当媒体类型取值为 ImageUrl 时有效，
图片仅支持 jpg、png 格式，且大小不超过 2M 。
 * @method void setMediaUrl(string $MediaUrl) 设置媒体 URL。
当媒体类型取值为 ImageUrl 时有效，
图片仅支持 jpg、png 格式，且大小不超过 2M 。
 * @method float getStartTimeOffset() 获取替换媒体选取的开始时间，单位为秒，默认为 0。
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置替换媒体选取的开始时间，单位为秒，默认为 0。
 * @method MediaPreprocessOperation getPreprocessOperation() 获取预处理操作。
注：目前该功能暂不支持，请勿使用。
 * @method void setPreprocessOperation(MediaPreprocessOperation $PreprocessOperation) 设置预处理操作。
注：目前该功能暂不支持，请勿使用。
 */
class MediaReplacementInfo extends AbstractModel
{
    /**
     * @var string 替换的媒体类型，取值有：
<li>CMEMaterialId：替换的媒体类型为媒体 ID；</li>
<li>ImageUrl：替换的媒体类型为图片 URL；</li>

注：默认为 CMEMaterialId 。
     */
    public $MediaType;

    /**
     * @var string 媒体 ID。
当媒体类型取值为 CMEMaterialId 时有效。
     */
    public $MaterialId;

    /**
     * @var string 媒体 URL。
当媒体类型取值为 ImageUrl 时有效，
图片仅支持 jpg、png 格式，且大小不超过 2M 。
     */
    public $MediaUrl;

    /**
     * @var float 替换媒体选取的开始时间，单位为秒，默认为 0。
     */
    public $StartTimeOffset;

    /**
     * @var MediaPreprocessOperation 预处理操作。
注：目前该功能暂不支持，请勿使用。
     */
    public $PreprocessOperation;

    /**
     * @param string $MediaType 替换的媒体类型，取值有：
<li>CMEMaterialId：替换的媒体类型为媒体 ID；</li>
<li>ImageUrl：替换的媒体类型为图片 URL；</li>

注：默认为 CMEMaterialId 。
     * @param string $MaterialId 媒体 ID。
当媒体类型取值为 CMEMaterialId 时有效。
     * @param string $MediaUrl 媒体 URL。
当媒体类型取值为 ImageUrl 时有效，
图片仅支持 jpg、png 格式，且大小不超过 2M 。
     * @param float $StartTimeOffset 替换媒体选取的开始时间，单位为秒，默认为 0。
     * @param MediaPreprocessOperation $PreprocessOperation 预处理操作。
注：目前该功能暂不支持，请勿使用。
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
        if (array_key_exists("MediaType",$param) and $param["MediaType"] !== null) {
            $this->MediaType = $param["MediaType"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("MediaUrl",$param) and $param["MediaUrl"] !== null) {
            $this->MediaUrl = $param["MediaUrl"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("PreprocessOperation",$param) and $param["PreprocessOperation"] !== null) {
            $this->PreprocessOperation = new MediaPreprocessOperation();
            $this->PreprocessOperation->deserialize($param["PreprocessOperation"]);
        }
    }
}
