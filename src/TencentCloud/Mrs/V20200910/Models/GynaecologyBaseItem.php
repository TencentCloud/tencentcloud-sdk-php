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
 * 体检报告-妇科
 *
 * @method GynaecologyVulva getVulva() 获取外阴
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulva(GynaecologyVulva $Vulva) 设置外阴
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyVagina getVagina() 获取阴道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVagina(GynaecologyVagina $Vagina) 设置阴道
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyCervix getCervix() 获取子宫颈
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCervix(GynaecologyCervix $Cervix) 设置子宫颈
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyUterus getUterus() 获取子宫
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUterus(GynaecologyUterus $Uterus) 设置子宫
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyAdnexal getAdnexal() 获取子宫附件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdnexal(GynaecologyAdnexal $Adnexal) 设置子宫附件
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyPelvicCavity getPelvicCavity() 获取盆腔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPelvicCavity(GynaecologyPelvicCavity $PelvicCavity) 设置盆腔
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOthers() 获取妇科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthers(array $Others) 设置妇科其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyMenstrualHistory getMenstrualHistory() 获取月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMenstrualHistory(GynaecologyMenstrualHistory $MenstrualHistory) 设置月经史
注意：此字段可能返回 null，表示取不到有效值。
 * @method GynaecologyBriefSummary getBriefSummary() 获取小结
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBriefSummary(GynaecologyBriefSummary $BriefSummary) 设置小结
注意：此字段可能返回 null，表示取不到有效值。
 */
class GynaecologyBaseItem extends AbstractModel
{
    /**
     * @var GynaecologyVulva 外阴
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vulva;

    /**
     * @var GynaecologyVagina 阴道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vagina;

    /**
     * @var GynaecologyCervix 子宫颈
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cervix;

    /**
     * @var GynaecologyUterus 子宫
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uterus;

    /**
     * @var GynaecologyAdnexal 子宫附件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Adnexal;

    /**
     * @var GynaecologyPelvicCavity 盆腔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PelvicCavity;

    /**
     * @var array 妇科其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Others;

    /**
     * @var GynaecologyMenstrualHistory 月经史
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MenstrualHistory;

    /**
     * @var GynaecologyBriefSummary 小结
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BriefSummary;

    /**
     * @param GynaecologyVulva $Vulva 外阴
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyVagina $Vagina 阴道
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyCervix $Cervix 子宫颈
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyUterus $Uterus 子宫
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyAdnexal $Adnexal 子宫附件
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyPelvicCavity $PelvicCavity 盆腔
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Others 妇科其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyMenstrualHistory $MenstrualHistory 月经史
注意：此字段可能返回 null，表示取不到有效值。
     * @param GynaecologyBriefSummary $BriefSummary 小结
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
        if (array_key_exists("Vulva",$param) and $param["Vulva"] !== null) {
            $this->Vulva = new GynaecologyVulva();
            $this->Vulva->deserialize($param["Vulva"]);
        }

        if (array_key_exists("Vagina",$param) and $param["Vagina"] !== null) {
            $this->Vagina = new GynaecologyVagina();
            $this->Vagina->deserialize($param["Vagina"]);
        }

        if (array_key_exists("Cervix",$param) and $param["Cervix"] !== null) {
            $this->Cervix = new GynaecologyCervix();
            $this->Cervix->deserialize($param["Cervix"]);
        }

        if (array_key_exists("Uterus",$param) and $param["Uterus"] !== null) {
            $this->Uterus = new GynaecologyUterus();
            $this->Uterus->deserialize($param["Uterus"]);
        }

        if (array_key_exists("Adnexal",$param) and $param["Adnexal"] !== null) {
            $this->Adnexal = new GynaecologyAdnexal();
            $this->Adnexal->deserialize($param["Adnexal"]);
        }

        if (array_key_exists("PelvicCavity",$param) and $param["PelvicCavity"] !== null) {
            $this->PelvicCavity = new GynaecologyPelvicCavity();
            $this->PelvicCavity->deserialize($param["PelvicCavity"]);
        }

        if (array_key_exists("Others",$param) and $param["Others"] !== null) {
            $this->Others = [];
            foreach ($param["Others"] as $key => $value){
                $obj = new KeyValueItem();
                $obj->deserialize($value);
                array_push($this->Others, $obj);
            }
        }

        if (array_key_exists("MenstrualHistory",$param) and $param["MenstrualHistory"] !== null) {
            $this->MenstrualHistory = new GynaecologyMenstrualHistory();
            $this->MenstrualHistory->deserialize($param["MenstrualHistory"]);
        }

        if (array_key_exists("BriefSummary",$param) and $param["BriefSummary"] !== null) {
            $this->BriefSummary = new GynaecologyBriefSummary();
            $this->BriefSummary->deserialize($param["BriefSummary"]);
        }
    }
}
