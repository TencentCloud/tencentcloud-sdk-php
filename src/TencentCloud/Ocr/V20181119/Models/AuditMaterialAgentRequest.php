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
 * AuditMaterialAgent请求参数结构体
 *
 * @method string getAgentType() 获取<p>资料审核Agent类型，不同类型包含不同的输入、输出参数，提供不同的审核能力。</p><p>枚举值：</p><ul><li>StorePicAudit： 商户照片审核</li></ul>
 * @method void setAgentType(string $AgentType) 设置<p>资料审核Agent类型，不同类型包含不同的输入、输出参数，提供不同的审核能力。</p><p>枚举值：</p><ul><li>StorePicAudit： 商户照片审核</li></ul>
 * @method string getImageUrl() 获取<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
 * @method string getImageBase64() 获取<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
 * @method boolean getNeedSceneType() 获取<p>商户照片分类是否输出具体场景标签。注：开启后耗时会增加。 支持该入参的资料审核Agent类型：StorePicAudit</p>
 * @method void setNeedSceneType(boolean $NeedSceneType) 设置<p>商户照片分类是否输出具体场景标签。注：开启后耗时会增加。 支持该入参的资料审核Agent类型：StorePicAudit</p>
 * @method string getStoreInfoHint() 获取<p>商户名称信息，辅助判断具体场景标签。注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method void setStoreInfoHint(string $StoreInfoHint) 设置<p>商户名称信息，辅助判断具体场景标签。注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
 * @method array getIgnoreWatermarkCategories() 获取<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
 * @method void setIgnoreWatermarkCategories(array $IgnoreWatermarkCategories) 设置<p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
 */
class AuditMaterialAgentRequest extends AbstractModel
{
    /**
     * @var string <p>资料审核Agent类型，不同类型包含不同的输入、输出参数，提供不同的审核能力。</p><p>枚举值：</p><ul><li>StorePicAudit： 商户照片审核</li></ul>
     */
    public $AgentType;

    /**
     * @var string <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     */
    public $ImageBase64;

    /**
     * @var boolean <p>商户照片分类是否输出具体场景标签。注：开启后耗时会增加。 支持该入参的资料审核Agent类型：StorePicAudit</p>
     */
    public $NeedSceneType;

    /**
     * @var string <p>商户名称信息，辅助判断具体场景标签。注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
     */
    public $StoreInfoHint;

    /**
     * @var array <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
     */
    public $IgnoreWatermarkCategories;

    /**
     * @param string $AgentType <p>资料审核Agent类型，不同类型包含不同的输入、输出参数，提供不同的审核能力。</p><p>枚举值：</p><ul><li>StorePicAudit： 商户照片审核</li></ul>
     * @param string $ImageUrl <p>图片的 Url 地址。要求图片经Base64编码后不超过 10M。</p>
     * @param string $ImageBase64 <p>图片的 Base64 值。要求图片经Base64编码后不超过 10M。</p>
     * @param boolean $NeedSceneType <p>商户照片分类是否输出具体场景标签。注：开启后耗时会增加。 支持该入参的资料审核Agent类型：StorePicAudit</p>
     * @param string $StoreInfoHint <p>商户名称信息，辅助判断具体场景标签。注：仅SceneType配置为true时支持。  支持该出参的资料审核Agent类型：StorePicAudit</p>
     * @param array $IgnoreWatermarkCategories <p>水印提示排除类型，选择出参“水印提示”排除掉的水印类型，不传的话即代表任意水印都会提示。<br>PhoneCam：手机相机水印<br>WatermarkCam：水印相机水印</p>
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
        if (array_key_exists("AgentType",$param) and $param["AgentType"] !== null) {
            $this->AgentType = $param["AgentType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("NeedSceneType",$param) and $param["NeedSceneType"] !== null) {
            $this->NeedSceneType = $param["NeedSceneType"];
        }

        if (array_key_exists("StoreInfoHint",$param) and $param["StoreInfoHint"] !== null) {
            $this->StoreInfoHint = $param["StoreInfoHint"];
        }

        if (array_key_exists("IgnoreWatermarkCategories",$param) and $param["IgnoreWatermarkCategories"] !== null) {
            $this->IgnoreWatermarkCategories = $param["IgnoreWatermarkCategories"];
        }
    }
}
