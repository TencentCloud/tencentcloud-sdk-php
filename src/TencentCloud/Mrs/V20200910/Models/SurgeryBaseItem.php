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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告-外科
 *
 * @method SurgeryHeadNeck getHeadNeck() 获取体检报告-外科-头颈部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadNeck(SurgeryHeadNeck $HeadNeck) 设置体检报告-外科-头颈部
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryThyroid getThyroid() 获取体检报告-外科-甲状腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThyroid(SurgeryThyroid $Thyroid) 设置体检报告-外科-甲状腺
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryBreast getBreast() 获取体检报告-外科-乳房
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBreast(SurgeryBreast $Breast) 设置体检报告-外科-乳房
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryLymphNode getLymphNode() 获取体检报告-外科-浅表淋巴结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLymphNode(SurgeryLymphNode $LymphNode) 设置体检报告-外科-浅表淋巴结
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgerySpinalExtremities getSpinalExtremities() 获取体检报告-外科-脊柱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpinalExtremities(SurgerySpinalExtremities $SpinalExtremities) 设置体检报告-外科-脊柱
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgerySkin getSkin() 获取体检报告-外科-皮肤
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkin(SurgerySkin $Skin) 设置体检报告-外科-皮肤
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryAnorectal getAnorectal() 获取体检报告-外科-肛门直肠
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnorectal(SurgeryAnorectal $Anorectal) 设置体检报告-外科-肛门直肠
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryUrogenitalSystem getUrogenitalSystem() 获取体检报告-外科-泌尿生殖系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrogenitalSystem(SurgeryUrogenitalSystem $UrogenitalSystem) 设置体检报告-外科-泌尿生殖系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取体检报告-外科-外科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置体检报告-外科-外科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method SurgeryBriefSummary getBriefSummary() 获取体检报告-外科-小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(SurgeryBriefSummary $BriefSummary) 设置体检报告-外科-小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class SurgeryBaseItem extends AbstractModel
{
    /**
     * @var SurgeryHeadNeck 体检报告-外科-头颈部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadNeck;

    /**
     * @var SurgeryThyroid 体检报告-外科-甲状腺
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Thyroid;

    /**
     * @var SurgeryBreast 体检报告-外科-乳房
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Breast;

    /**
     * @var SurgeryLymphNode 体检报告-外科-浅表淋巴结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LymphNode;

    /**
     * @var SurgerySpinalExtremities 体检报告-外科-脊柱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpinalExtremities;

    /**
     * @var SurgerySkin 体检报告-外科-皮肤
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Skin;

    /**
     * @var SurgeryAnorectal 体检报告-外科-肛门直肠
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Anorectal;

    /**
     * @var SurgeryUrogenitalSystem 体检报告-外科-泌尿生殖系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrogenitalSystem;

    /**
     * @var array 体检报告-外科-外科其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var SurgeryBriefSummary 体检报告-外科-小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param SurgeryHeadNeck $HeadNeck 体检报告-外科-头颈部
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryThyroid $Thyroid 体检报告-外科-甲状腺
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryBreast $Breast 体检报告-外科-乳房
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryLymphNode $LymphNode 体检报告-外科-浅表淋巴结
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgerySpinalExtremities $SpinalExtremities 体检报告-外科-脊柱
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgerySkin $Skin 体检报告-外科-皮肤
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryAnorectal $Anorectal 体检报告-外科-肛门直肠
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryUrogenitalSystem $UrogenitalSystem 体检报告-外科-泌尿生殖系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 体检报告-外科-外科其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param SurgeryBriefSummary $BriefSummary 体检报告-外科-小结
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("HeadNeck",$param) and $param["HeadNeck"] !== null) {
            $this->HeadNeck = new SurgeryHeadNeck();
            $this->HeadNeck->deserialize($param["HeadNeck"]);
        }

        if (array_key_exists("Thyroid",$param) and $param["Thyroid"] !== null) {
            $this->Thyroid = new SurgeryThyroid();
            $this->Thyroid->deserialize($param["Thyroid"]);
        }

        if (array_key_exists("Breast",$param) and $param["Breast"] !== null) {
            $this->Breast = new SurgeryBreast();
            $this->Breast->deserialize($param["Breast"]);
        }

        if (array_key_exists("LymphNode",$param) and $param["LymphNode"] !== null) {
            $this->LymphNode = new SurgeryLymphNode();
            $this->LymphNode->deserialize($param["LymphNode"]);
        }

        if (array_key_exists("SpinalExtremities",$param) and $param["SpinalExtremities"] !== null) {
            $this->SpinalExtremities = new SurgerySpinalExtremities();
            $this->SpinalExtremities->deserialize($param["SpinalExtremities"]);
        }

        if (array_key_exists("Skin",$param) and $param["Skin"] !== null) {
            $this->Skin = new SurgerySkin();
            $this->Skin->deserialize($param["Skin"]);
        }

        if (array_key_exists("Anorectal",$param) and $param["Anorectal"] !== null) {
            $this->Anorectal = new SurgeryAnorectal();
            $this->Anorectal->deserialize($param["Anorectal"]);
        }

        if (array_key_exists("UrogenitalSystem",$param) and $param["UrogenitalSystem"] !== null) {
            $this->UrogenitalSystem = new SurgeryUrogenitalSystem();
            $this->UrogenitalSystem->deserialize($param["UrogenitalSystem"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = [];
            foreach ($param["Others"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Others, $obj);
            }
        }

        if (array_key_exists("BriefSummary",$param) and $param["BriefSummary"] !== null) {
            $this->BriefSummary = new SurgeryBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
