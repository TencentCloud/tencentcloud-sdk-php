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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型完整信息
 *
 * @method array getBadgeList() 获取模型徽章列表
 * @method void setBadgeList(array $BadgeList) 设置模型徽章列表
 * @method ModelLimit getLimitInfo() 获取模型限制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitInfo(ModelLimit $LimitInfo) 设置模型限制信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelBasic getModelBasic() 获取模型基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelBasic(ModelBasic $ModelBasic) 设置模型基本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParameterList() 获取模型超参配置
 * @method void setParameterList(array $ParameterList) 设置模型超参配置
 * @method array getPropertyList() 获取模型属性配置
 * @method void setPropertyList(array $PropertyList) 设置模型属性配置
 * @method ModelProviderBasic getProviderInfo() 获取模型提供商信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProviderInfo(ModelProviderBasic $ProviderInfo) 设置模型提供商信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelStatus getStatusInfo() 获取模型状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusInfo(ModelStatus $StatusInfo) 设置模型状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取模型标签列表
 * @method void setTagList(array $TagList) 设置模型标签列表
 */
class Model extends AbstractModel
{
    /**
     * @var array 模型徽章列表
     */
    public $BadgeList;

    /**
     * @var ModelLimit 模型限制信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitInfo;

    /**
     * @var ModelBasic 模型基本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelBasic;

    /**
     * @var array 模型超参配置
     */
    public $ParameterList;

    /**
     * @var array 模型属性配置
     */
    public $PropertyList;

    /**
     * @var ModelProviderBasic 模型提供商信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProviderInfo;

    /**
     * @var ModelStatus 模型状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusInfo;

    /**
     * @var array 模型标签列表
     */
    public $TagList;

    /**
     * @param array $BadgeList 模型徽章列表
     * @param ModelLimit $LimitInfo 模型限制信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelBasic $ModelBasic 模型基本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParameterList 模型超参配置
     * @param array $PropertyList 模型属性配置
     * @param ModelProviderBasic $ProviderInfo 模型提供商信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelStatus $StatusInfo 模型状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 模型标签列表
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
        if (array_key_exists("BadgeList",$param) and $param["BadgeList"] !== null) {
            $this->BadgeList = [];
            foreach ($param["BadgeList"] as $key => $value){
                $obj = new ModelBadge();
                $obj->deserialize($value);
                array_push($this->BadgeList, $obj);
            }
        }

        if (array_key_exists("LimitInfo",$param) and $param["LimitInfo"] !== null) {
            $this->LimitInfo = new ModelLimit();
            $this->LimitInfo->deserialize($param["LimitInfo"]);
        }

        if (array_key_exists("ModelBasic",$param) and $param["ModelBasic"] !== null) {
            $this->ModelBasic = new ModelBasic();
            $this->ModelBasic->deserialize($param["ModelBasic"]);
        }

        if (array_key_exists("ParameterList",$param) and $param["ParameterList"] !== null) {
            $this->ParameterList = [];
            foreach ($param["ParameterList"] as $key => $value){
                $obj = new ModelParameter();
                $obj->deserialize($value);
                array_push($this->ParameterList, $obj);
            }
        }

        if (array_key_exists("PropertyList",$param) and $param["PropertyList"] !== null) {
            $this->PropertyList = [];
            foreach ($param["PropertyList"] as $key => $value){
                $obj = new ModelProperty();
                $obj->deserialize($value);
                array_push($this->PropertyList, $obj);
            }
        }

        if (array_key_exists("ProviderInfo",$param) and $param["ProviderInfo"] !== null) {
            $this->ProviderInfo = new ModelProviderBasic();
            $this->ProviderInfo->deserialize($param["ProviderInfo"]);
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = new ModelStatus();
            $this->StatusInfo->deserialize($param["StatusInfo"]);
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }
    }
}
