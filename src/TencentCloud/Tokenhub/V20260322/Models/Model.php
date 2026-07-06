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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型信息
 *
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method string getModelId() 获取<p>模型 ID。</p>
 * @method void setModelId(string $ModelId) 设置<p>模型 ID。</p>
 * @method string getDisplayName() 获取<p>模型显示名称。</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>模型显示名称。</p>
 * @method string getDescription() 获取<p>模型描述。</p>
 * @method void setDescription(string $Description) 设置<p>模型描述。</p>
 * @method string getSummary() 获取<p>模型概要。</p>
 * @method void setSummary(string $Summary) 设置<p>模型概要。</p>
 * @method string getModelType() 获取<p>模型类型。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p><p>枚举值：</p><ul><li>Text： 语言模型</li><li>Vision： 视觉模型</li><li>Multimodal： 多模态模型</li></ul>
 * @method void setModelType(string $ModelType) 设置<p>模型类型。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p><p>枚举值：</p><ul><li>Text： 语言模型</li><li>Vision： 视觉模型</li><li>Multimodal： 多模态模型</li></ul>
 * @method string getBrand() 获取<p>模型品牌。</p>
 * @method void setBrand(string $Brand) 设置<p>模型品牌。</p>
 * @method ModelImage getModelImage() 获取<p>模型图标。</p>
 * @method void setModelImage(ModelImage $ModelImage) 设置<p>模型图标。</p>
 * @method string getProvider() 获取<p>模型供应商。</p>
 * @method void setProvider(string $Provider) 设置<p>模型供应商。</p>
 * @method string getStatus() 获取<p>模型状态。取值：online（上线）、offline（下线）。</p><p>枚举值：</p><ul><li>online ： 上线</li><li>pre-offline： 预下线</li></ul>
 * @method void setStatus(string $Status) 设置<p>模型状态。取值：online（上线）、offline（下线）。</p><p>枚举值：</p><ul><li>online ： 上线</li><li>pre-offline： 预下线</li></ul>
 * @method array getTags() 获取<p>标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>标签列表。</p>
 * @method array getModelChargingInfo() 获取<p>计费信息列表。</p>
 * @method void setModelChargingInfo(array $ModelChargingInfo) 设置<p>计费信息列表。</p>
 * @method ModelSpec getModelSpec() 获取<p>模型规格。</p>
 * @method void setModelSpec(ModelSpec $ModelSpec) 设置<p>模型规格。</p>
 * @method string getReleaseAt() 获取<p>发布时间。</p>
 * @method void setReleaseAt(string $ReleaseAt) 设置<p>发布时间。</p>
 * @method integer getRecommendWeight() 获取<p>推荐顺序，值越小排序越靠前。</p>
 * @method void setRecommendWeight(integer $RecommendWeight) 设置<p>推荐顺序，值越小排序越靠前。</p>
 * @method ModelAccessInfo getModelAccessInfo() 获取<p>模型访问信息。包含模型在各站点和地域的可用性配置。为空时表示未配置地域信息，模型不可用。</p>
 * @method void setModelAccessInfo(ModelAccessInfo $ModelAccessInfo) 设置<p>模型访问信息。包含模型在各站点和地域的可用性配置。为空时表示未配置地域信息，模型不可用。</p>
 * @method ModelFreeTrialInfo getFreeTrialInfo() 获取<p>体验包信息。</p>
 * @method void setFreeTrialInfo(ModelFreeTrialInfo $FreeTrialInfo) 设置<p>体验包信息。</p>
 * @method string getOfflineAt() 获取<p>模型下线时间，Status=pre-offline 时，会配置模型下线时间</p>
 * @method void setOfflineAt(string $OfflineAt) 设置<p>模型下线时间，Status=pre-offline 时，会配置模型下线时间</p>
 */
class Model extends AbstractModel
{
    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型 ID。</p>
     */
    public $ModelId;

    /**
     * @var string <p>模型显示名称。</p>
     */
    public $DisplayName;

    /**
     * @var string <p>模型描述。</p>
     */
    public $Description;

    /**
     * @var string <p>模型概要。</p>
     */
    public $Summary;

    /**
     * @var string <p>模型类型。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p><p>枚举值：</p><ul><li>Text： 语言模型</li><li>Vision： 视觉模型</li><li>Multimodal： 多模态模型</li></ul>
     */
    public $ModelType;

    /**
     * @var string <p>模型品牌。</p>
     */
    public $Brand;

    /**
     * @var ModelImage <p>模型图标。</p>
     */
    public $ModelImage;

    /**
     * @var string <p>模型供应商。</p>
     */
    public $Provider;

    /**
     * @var string <p>模型状态。取值：online（上线）、offline（下线）。</p><p>枚举值：</p><ul><li>online ： 上线</li><li>pre-offline： 预下线</li></ul>
     */
    public $Status;

    /**
     * @var array <p>标签列表。</p>
     */
    public $Tags;

    /**
     * @var array <p>计费信息列表。</p>
     */
    public $ModelChargingInfo;

    /**
     * @var ModelSpec <p>模型规格。</p>
     */
    public $ModelSpec;

    /**
     * @var string <p>发布时间。</p>
     */
    public $ReleaseAt;

    /**
     * @var integer <p>推荐顺序，值越小排序越靠前。</p>
     */
    public $RecommendWeight;

    /**
     * @var ModelAccessInfo <p>模型访问信息。包含模型在各站点和地域的可用性配置。为空时表示未配置地域信息，模型不可用。</p>
     */
    public $ModelAccessInfo;

    /**
     * @var ModelFreeTrialInfo <p>体验包信息。</p>
     */
    public $FreeTrialInfo;

    /**
     * @var string <p>模型下线时间，Status=pre-offline 时，会配置模型下线时间</p>
     */
    public $OfflineAt;

    /**
     * @param string $ModelName <p>模型名称</p>
     * @param string $ModelId <p>模型 ID。</p>
     * @param string $DisplayName <p>模型显示名称。</p>
     * @param string $Description <p>模型描述。</p>
     * @param string $Summary <p>模型概要。</p>
     * @param string $ModelType <p>模型类型。取值：Text（文本）、Vision（视觉）、Multimodal（多模态）、Speech（语音）、Embedding（向量）。</p><p>枚举值：</p><ul><li>Text： 语言模型</li><li>Vision： 视觉模型</li><li>Multimodal： 多模态模型</li></ul>
     * @param string $Brand <p>模型品牌。</p>
     * @param ModelImage $ModelImage <p>模型图标。</p>
     * @param string $Provider <p>模型供应商。</p>
     * @param string $Status <p>模型状态。取值：online（上线）、offline（下线）。</p><p>枚举值：</p><ul><li>online ： 上线</li><li>pre-offline： 预下线</li></ul>
     * @param array $Tags <p>标签列表。</p>
     * @param array $ModelChargingInfo <p>计费信息列表。</p>
     * @param ModelSpec $ModelSpec <p>模型规格。</p>
     * @param string $ReleaseAt <p>发布时间。</p>
     * @param integer $RecommendWeight <p>推荐顺序，值越小排序越靠前。</p>
     * @param ModelAccessInfo $ModelAccessInfo <p>模型访问信息。包含模型在各站点和地域的可用性配置。为空时表示未配置地域信息，模型不可用。</p>
     * @param ModelFreeTrialInfo $FreeTrialInfo <p>体验包信息。</p>
     * @param string $OfflineAt <p>模型下线时间，Status=pre-offline 时，会配置模型下线时间</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("ModelImage",$param) and $param["ModelImage"] !== null) {
            $this->ModelImage = new ModelImage();
            $this->ModelImage->deserialize($param["ModelImage"]);
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("ModelChargingInfo",$param) and $param["ModelChargingInfo"] !== null) {
            $this->ModelChargingInfo = [];
            foreach ($param["ModelChargingInfo"] as $key => $value){
                $obj = new ModelChargingInfo();
                $obj->deserialize($value);
                array_push($this->ModelChargingInfo, $obj);
            }
        }

        if (array_key_exists("ModelSpec",$param) and $param["ModelSpec"] !== null) {
            $this->ModelSpec = new ModelSpec();
            $this->ModelSpec->deserialize($param["ModelSpec"]);
        }

        if (array_key_exists("ReleaseAt",$param) and $param["ReleaseAt"] !== null) {
            $this->ReleaseAt = $param["ReleaseAt"];
        }

        if (array_key_exists("RecommendWeight",$param) and $param["RecommendWeight"] !== null) {
            $this->RecommendWeight = $param["RecommendWeight"];
        }

        if (array_key_exists("ModelAccessInfo",$param) and $param["ModelAccessInfo"] !== null) {
            $this->ModelAccessInfo = new ModelAccessInfo();
            $this->ModelAccessInfo->deserialize($param["ModelAccessInfo"]);
        }

        if (array_key_exists("FreeTrialInfo",$param) and $param["FreeTrialInfo"] !== null) {
            $this->FreeTrialInfo = new ModelFreeTrialInfo();
            $this->FreeTrialInfo->deserialize($param["FreeTrialInfo"]);
        }

        if (array_key_exists("OfflineAt",$param) and $param["OfflineAt"] !== null) {
            $this->OfflineAt = $param["OfflineAt"];
        }
    }
}
