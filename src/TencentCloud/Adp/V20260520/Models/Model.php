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
 * @method array getBadgeList() 获取<p>模型徽章列表</p>
 * @method void setBadgeList(array $BadgeList) 设置<p>模型徽章列表</p>
 * @method ModelLimit getLimitInfo() 获取<p>模型限制信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitInfo(ModelLimit $LimitInfo) 设置<p>模型限制信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelBasic getModelBasic() 获取<p>模型基本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelBasic(ModelBasic $ModelBasic) 设置<p>模型基本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParameterList() 获取<p>模型超参配置</p>
 * @method void setParameterList(array $ParameterList) 设置<p>模型超参配置</p>
 * @method array getPropertyList() 获取<p>模型属性配置</p>
 * @method void setPropertyList(array $PropertyList) 设置<p>模型属性配置</p>
 * @method ModelProviderBasic getProviderInfo() 获取<p>模型提供商信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProviderInfo(ModelProviderBasic $ProviderInfo) 设置<p>模型提供商信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModelStatus getStatusInfo() 获取<p>模型状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusInfo(ModelStatus $StatusInfo) 设置<p>模型状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取<p>模型标签列表</p>
 * @method void setTagList(array $TagList) 设置<p>模型标签列表</p>
 * @method ModelDeveloperBasic getDeveloperInfo() 获取<p>模型作者信息</p>
 * @method void setDeveloperInfo(ModelDeveloperBasic $DeveloperInfo) 设置<p>模型作者信息</p>
 */
class Model extends AbstractModel
{
    /**
     * @var array <p>模型徽章列表</p>
     */
    public $BadgeList;

    /**
     * @var ModelLimit <p>模型限制信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitInfo;

    /**
     * @var ModelBasic <p>模型基本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelBasic;

    /**
     * @var array <p>模型超参配置</p>
     */
    public $ParameterList;

    /**
     * @var array <p>模型属性配置</p>
     */
    public $PropertyList;

    /**
     * @var ModelProviderBasic <p>模型提供商信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProviderInfo;

    /**
     * @var ModelStatus <p>模型状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusInfo;

    /**
     * @var array <p>模型标签列表</p>
     */
    public $TagList;

    /**
     * @var ModelDeveloperBasic <p>模型作者信息</p>
     */
    public $DeveloperInfo;

    /**
     * @param array $BadgeList <p>模型徽章列表</p>
     * @param ModelLimit $LimitInfo <p>模型限制信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelBasic $ModelBasic <p>模型基本信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParameterList <p>模型超参配置</p>
     * @param array $PropertyList <p>模型属性配置</p>
     * @param ModelProviderBasic $ProviderInfo <p>模型提供商信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModelStatus $StatusInfo <p>模型状态信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList <p>模型标签列表</p>
     * @param ModelDeveloperBasic $DeveloperInfo <p>模型作者信息</p>
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

        if (array_key_exists("DeveloperInfo",$param) and $param["DeveloperInfo"] !== null) {
            $this->DeveloperInfo = new ModelDeveloperBasic();
            $this->DeveloperInfo->deserialize($param["DeveloperInfo"]);
        }
    }
}
