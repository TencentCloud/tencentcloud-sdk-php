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
 * 病理内容
 *
 * @method string getPathologicalType() 获取病理类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathologicalType(string $PathologicalType) 设置病理类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInfiltrationDepth() 获取侵润深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInfiltrationDepth(string $InfiltrationDepth) 设置侵润深度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPTNM() 获取PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPTNM(string $PTNM) 设置PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistanceMetastasis() 获取远处转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistanceMetastasis(string $DistanceMetastasis) 设置远处转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSummaryText() 获取影像诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummaryText(string $SummaryText) 设置影像诊断
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescText() 获取影像所见
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescText(string $DescText) 设置影像所见
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHistologyType() 获取组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologyType(string $HistologyType) 设置组织学类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHistologyLevel() 获取组织学等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologyLevel(string $HistologyLevel) 设置组织学等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSampleType() 获取标本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleType(string $SampleType) 设置标本类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSamplePart() 获取标本部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSamplePart(string $SamplePart) 设置标本部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSampleSize() 获取标本大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSize(string $SampleSize) 设置标本大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInvasiveList() 获取肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInvasiveList(array $InvasiveList) 设置肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetastasisList() 获取肿瘤转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetastasisList(array $MetastasisList) 设置肿瘤转移
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIHCList() 获取免疫组化信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIHCList(array $IHCList) 设置免疫组化信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Pathology extends AbstractModel
{
    /**
     * @var string 病理类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathologicalType;

    /**
     * @var string 侵润深度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InfiltrationDepth;

    /**
     * @var string PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PTNM;

    /**
     * @var string 远处转移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistanceMetastasis;

    /**
     * @var string 影像诊断
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SummaryText;

    /**
     * @var string 影像所见
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DescText;

    /**
     * @var string 组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologyType;

    /**
     * @var string 组织学等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologyLevel;

    /**
     * @var string 标本类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleType;

    /**
     * @var string 标本部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SamplePart;

    /**
     * @var string 标本大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSize;

    /**
     * @var array 肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InvasiveList;

    /**
     * @var array 肿瘤转移
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetastasisList;

    /**
     * @var array 免疫组化信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IHCList;

    /**
     * @param string $PathologicalType 病理类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InfiltrationDepth 侵润深度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PTNM PTNM分期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DistanceMetastasis 远处转移
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SummaryText 影像诊断
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DescText 影像所见
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HistologyType 组织学类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HistologyLevel 组织学等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SampleType 标本类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SamplePart 标本部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SampleSize 标本大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InvasiveList 肿瘤扩散
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MetastasisList 肿瘤转移
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IHCList 免疫组化信息
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
        if (array_key_exists("PathologicalType",$param) and $param["PathologicalType"] !== null) {
            $this->PathologicalType = $param["PathologicalType"];
        }

        if (array_key_exists("InfiltrationDepth",$param) and $param["InfiltrationDepth"] !== null) {
            $this->InfiltrationDepth = $param["InfiltrationDepth"];
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = $param["PTNM"];
        }

        if (array_key_exists("DistanceMetastasis",$param) and $param["DistanceMetastasis"] !== null) {
            $this->DistanceMetastasis = $param["DistanceMetastasis"];
        }

        if (array_key_exists("SummaryText",$param) and $param["SummaryText"] !== null) {
            $this->SummaryText = $param["SummaryText"];
        }

        if (array_key_exists("DescText",$param) and $param["DescText"] !== null) {
            $this->DescText = $param["DescText"];
        }

        if (array_key_exists("HistologyType",$param) and $param["HistologyType"] !== null) {
            $this->HistologyType = $param["HistologyType"];
        }

        if (array_key_exists("HistologyLevel",$param) and $param["HistologyLevel"] !== null) {
            $this->HistologyLevel = $param["HistologyLevel"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = $param["SampleType"];
        }

        if (array_key_exists("SamplePart",$param) and $param["SamplePart"] !== null) {
            $this->SamplePart = $param["SamplePart"];
        }

        if (array_key_exists("SampleSize",$param) and $param["SampleSize"] !== null) {
            $this->SampleSize = $param["SampleSize"];
        }

        if (array_key_exists("InvasiveList",$param) and $param["InvasiveList"] !== null) {
            $this->InvasiveList = [];
            foreach ($param["InvasiveList"] as $key => $value){
                $obj = new Invasive();
                $obj->deserialize($value);
                array_push($this->InvasiveList, $obj);
            }
        }

        if (array_key_exists("MetastasisList",$param) and $param["MetastasisList"] !== null) {
            $this->MetastasisList = [];
            foreach ($param["MetastasisList"] as $key => $value){
                $obj = new Metastasis();
                $obj->deserialize($value);
                array_push($this->MetastasisList, $obj);
            }
        }

        if (array_key_exists("IHCList",$param) and $param["IHCList"] !== null) {
            $this->IHCList = [];
            foreach ($param["IHCList"] as $key => $value){
                $obj = new IHC();
                $obj->deserialize($value);
                array_push($this->IHCList, $obj);
            }
        }
    }
}
