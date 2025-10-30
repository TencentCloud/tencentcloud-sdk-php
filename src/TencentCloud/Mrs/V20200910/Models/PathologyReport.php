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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 病理报告
 *
 * @method Part getCancerPart() 获取癌症部位
 * @method void setCancerPart(Part $CancerPart) 设置癌症部位
 * @method array getCancerSize() 获取癌症部位大小
 * @method void setCancerSize(array $CancerSize) 设置癌症部位大小
 * @method string getDescText() 获取描述文本
 * @method void setDescText(string $DescText) 设置描述文本
 * @method HistologyLevel getHistologyLevel() 获取组织学等级
 * @method void setHistologyLevel(HistologyLevel $HistologyLevel) 设置组织学等级
 * @method HistologyType getHistologyType() 获取组织学类型
 * @method void setHistologyType(HistologyType $HistologyType) 设置组织学类型
 * @method array getIHC() 获取IHC信息
 * @method void setIHC(array $IHC) 设置IHC信息
 * @method BlockInfo getInfiltrationDepth() 获取浸润深度
 * @method void setInfiltrationDepth(BlockInfo $InfiltrationDepth) 设置浸润深度
 * @method array getInvasive() 获取肿瘤扩散
 * @method void setInvasive(array $Invasive) 设置肿瘤扩散
 * @method array getLymphNodes() 获取淋巴结
 * @method void setLymphNodes(array $LymphNodes) 设置淋巴结
 * @method BlockInfo getPTNM() 获取PTNM信息
 * @method void setPTNM(BlockInfo $PTNM) 设置PTNM信息
 * @method BlockInfo getPathologicalReportType() 获取病理报告类型
 * @method void setPathologicalReportType(BlockInfo $PathologicalReportType) 设置病理报告类型
 * @method string getReportText() 获取报告原文
 * @method void setReportText(string $ReportText) 设置报告原文
 * @method BlockInfo getSampleType() 获取标本类型
 * @method void setSampleType(BlockInfo $SampleType) 设置标本类型
 * @method string getSummaryText() 获取结论文本
 * @method void setSummaryText(string $SummaryText) 设置结论文本
 */
class PathologyReport extends AbstractModel
{
    /**
     * @var Part 癌症部位
     */
    public $CancerPart;

    /**
     * @var array 癌症部位大小
     */
    public $CancerSize;

    /**
     * @var string 描述文本
     */
    public $DescText;

    /**
     * @var HistologyLevel 组织学等级
     */
    public $HistologyLevel;

    /**
     * @var HistologyType 组织学类型
     */
    public $HistologyType;

    /**
     * @var array IHC信息
     */
    public $IHC;

    /**
     * @var BlockInfo 浸润深度
     */
    public $InfiltrationDepth;

    /**
     * @var array 肿瘤扩散
     */
    public $Invasive;

    /**
     * @var array 淋巴结
     */
    public $LymphNodes;

    /**
     * @var BlockInfo PTNM信息
     */
    public $PTNM;

    /**
     * @var BlockInfo 病理报告类型
     */
    public $PathologicalReportType;

    /**
     * @var string 报告原文
     */
    public $ReportText;

    /**
     * @var BlockInfo 标本类型
     */
    public $SampleType;

    /**
     * @var string 结论文本
     */
    public $SummaryText;

    /**
     * @param Part $CancerPart 癌症部位
     * @param array $CancerSize 癌症部位大小
     * @param string $DescText 描述文本
     * @param HistologyLevel $HistologyLevel 组织学等级
     * @param HistologyType $HistologyType 组织学类型
     * @param array $IHC IHC信息
     * @param BlockInfo $InfiltrationDepth 浸润深度
     * @param array $Invasive 肿瘤扩散
     * @param array $LymphNodes 淋巴结
     * @param BlockInfo $PTNM PTNM信息
     * @param BlockInfo $PathologicalReportType 病理报告类型
     * @param string $ReportText 报告原文
     * @param BlockInfo $SampleType 标本类型
     * @param string $SummaryText 结论文本
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
        if (array_key_exists("CancerPart",$param) and $param["CancerPart"] !== null) {
            $this->CancerPart = new Part();
            $this->CancerPart->deserialize($param["CancerPart"]);
        }

        if (array_key_exists("CancerSize",$param) and $param["CancerSize"] !== null) {
            $this->CancerSize = [];
            foreach ($param["CancerSize"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->CancerSize, $obj);
            }
        }

        if (array_key_exists("DescText",$param) and $param["DescText"] !== null) {
            $this->DescText = $param["DescText"];
        }

        if (array_key_exists("HistologyLevel",$param) and $param["HistologyLevel"] !== null) {
            $this->HistologyLevel = new HistologyLevel();
            $this->HistologyLevel->deserialize($param["HistologyLevel"]);
        }

        if (array_key_exists("HistologyType",$param) and $param["HistologyType"] !== null) {
            $this->HistologyType = new HistologyType();
            $this->HistologyType->deserialize($param["HistologyType"]);
        }

        if (array_key_exists("IHC",$param) and $param["IHC"] !== null) {
            $this->IHC = [];
            foreach ($param["IHC"] as $key => $value){
                $obj = new IHCInfo();
                $obj->deserialize($value);
                array_push($this->IHC, $obj);
            }
        }

        if (array_key_exists("InfiltrationDepth",$param) and $param["InfiltrationDepth"] !== null) {
            $this->InfiltrationDepth = new BlockInfo();
            $this->InfiltrationDepth->deserialize($param["InfiltrationDepth"]);
        }

        if (array_key_exists("Invasive",$param) and $param["Invasive"] !== null) {
            $this->Invasive = [];
            foreach ($param["Invasive"] as $key => $value){
                $obj = new Invas();
                $obj->deserialize($value);
                array_push($this->Invasive, $obj);
            }
        }

        if (array_key_exists("LymphNodes",$param) and $param["LymphNodes"] !== null) {
            $this->LymphNodes = [];
            foreach ($param["LymphNodes"] as $key => $value){
                $obj = new Lymph();
                $obj->deserialize($value);
                array_push($this->LymphNodes, $obj);
            }
        }

        if (array_key_exists("PTNM",$param) and $param["PTNM"] !== null) {
            $this->PTNM = new BlockInfo();
            $this->PTNM->deserialize($param["PTNM"]);
        }

        if (array_key_exists("PathologicalReportType",$param) and $param["PathologicalReportType"] !== null) {
            $this->PathologicalReportType = new BlockInfo();
            $this->PathologicalReportType->deserialize($param["PathologicalReportType"]);
        }

        if (array_key_exists("ReportText",$param) and $param["ReportText"] !== null) {
            $this->ReportText = $param["ReportText"];
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = new BlockInfo();
            $this->SampleType->deserialize($param["SampleType"]);
        }

        if (array_key_exists("SummaryText",$param) and $param["SummaryText"] !== null) {
            $this->SummaryText = $param["SummaryText"];
        }
    }
}
