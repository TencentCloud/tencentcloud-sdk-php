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
 * SkillSummary 列表中的 Skill 摘要。
 *
 * @method SkillClassification getClassificationInfo() 获取分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationInfo(SkillClassification $ClassificationInfo) 设置分类信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SkillVersion getCurrentVersionInfo() 获取当前版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentVersionInfo(SkillVersion $CurrentVersionInfo) 设置当前版本信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFavorite() 获取当前用户是否收藏
 * @method void setIsFavorite(boolean $IsFavorite) 设置当前用户是否收藏
 * @method SkillProfile getProfile() 获取基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfile(SkillProfile $Profile) 设置基础信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkillId() 获取Skill ID
 * @method void setSkillId(string $SkillId) 设置Skill ID
 * @method array getShareList() 获取共享信息；可能有两条，一条是已共享的，一条是审核中的
 * @method void setShareList(array $ShareList) 设置共享信息；可能有两条，一条是已共享的，一条是审核中的
 */
class SkillSummary extends AbstractModel
{
    /**
     * @var SkillClassification 分类信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationInfo;

    /**
     * @var SkillVersion 当前版本信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentVersionInfo;

    /**
     * @var boolean 当前用户是否收藏
     */
    public $IsFavorite;

    /**
     * @var SkillProfile 基础信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profile;

    /**
     * @var string Skill ID
     */
    public $SkillId;

    /**
     * @var array 共享信息；可能有两条，一条是已共享的，一条是审核中的
     */
    public $ShareList;

    /**
     * @param SkillClassification $ClassificationInfo 分类信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SkillVersion $CurrentVersionInfo 当前版本信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFavorite 当前用户是否收藏
     * @param SkillProfile $Profile 基础信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkillId Skill ID
     * @param array $ShareList 共享信息；可能有两条，一条是已共享的，一条是审核中的
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
        if (array_key_exists("ClassificationInfo",$param) and $param["ClassificationInfo"] !== null) {
            $this->ClassificationInfo = new SkillClassification();
            $this->ClassificationInfo->deserialize($param["ClassificationInfo"]);
        }

        if (array_key_exists("CurrentVersionInfo",$param) and $param["CurrentVersionInfo"] !== null) {
            $this->CurrentVersionInfo = new SkillVersion();
            $this->CurrentVersionInfo->deserialize($param["CurrentVersionInfo"]);
        }

        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new SkillProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("ShareList",$param) and $param["ShareList"] !== null) {
            $this->ShareList = [];
            foreach ($param["ShareList"] as $key => $value){
                $obj = new SkillShare();
                $obj->deserialize($value);
                array_push($this->ShareList, $obj);
            }
        }
    }
}
