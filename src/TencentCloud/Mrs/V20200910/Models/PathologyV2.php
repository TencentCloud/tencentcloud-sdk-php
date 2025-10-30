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
 * 病理报告v2
 *
 * @method Report getPathologicalReportType() 获取报告类型
 * @method void setPathologicalReportType(Report $PathologicalReportType) 设置报告类型
 * @method DescInfo getDesc() 获取描述段落
 * @method void setDesc(DescInfo $Desc) 设置描述段落
 * @method SummaryInfo getSummary() 获取诊断结论
 * @method void setSummary(SummaryInfo $Summary) 设置诊断结论
 * @method string getReportText() 获取报告全文
 * @method void setReportText(string $ReportText) 设置报告全文
 * @method array getLymphTotal() 获取淋巴结总计转移信息
 * @method void setLymphTotal(array $LymphTotal) 设置淋巴结总计转移信息
 * @method array getLymphNodes() 获取单淋巴结转移信息
 * @method void setLymphNodes(array $LymphNodes) 设置单淋巴结转移信息
 * @method array getIhc() 获取ihc信息
 * @method void setIhc(array $Ihc) 设置ihc信息
 * @method BaseInfo getClinical() 获取临床诊断
 * @method void setClinical(BaseInfo $Clinical) 设置临床诊断
 * @method HistologyClass getPrecancer() 获取是否癌前病变
 * @method void setPrecancer(HistologyClass $Precancer) 设置是否癌前病变
 * @method HistologyClass getMalignant() 获取是否恶性肿瘤
 * @method void setMalignant(HistologyClass $Malignant) 设置是否恶性肿瘤
 * @method HistologyClass getBenigntumor() 获取是否良性肿瘤
 * @method void setBenigntumor(HistologyClass $Benigntumor) 设置是否良性肿瘤
 * @method BaseInfo getSampleType() 获取送检材料
 * @method void setSampleType(BaseInfo $SampleType) 设置送检材料
 * @method array getLymphSize() 获取淋巴结大小
 * @method void setLymphSize(array $LymphSize) 设置淋巴结大小
 * @method array getMolecular() 获取分子病理
 * @method void setMolecular(array $Molecular) 设置分子病理
 * @method integer getPage() 获取数据在原PDF文件中的第几页
 * @method void setPage(integer $Page) 设置数据在原PDF文件中的第几页
 */
class PathologyV2 extends AbstractModel
{
    /**
     * @var Report 报告类型
     */
    public $PathologicalReportType;

    /**
     * @var DescInfo 描述段落
     */
    public $Desc;

    /**
     * @var SummaryInfo 诊断结论
     */
    public $Summary;

    /**
     * @var string 报告全文
     */
    public $ReportText;

    /**
     * @var array 淋巴结总计转移信息
     */
    public $LymphTotal;

    /**
     * @var array 单淋巴结转移信息
     */
    public $LymphNodes;

    /**
     * @var array ihc信息
     */
    public $Ihc;

    /**
     * @var BaseInfo 临床诊断
     */
    public $Clinical;

    /**
     * @var HistologyClass 是否癌前病变
     */
    public $Precancer;

    /**
     * @var HistologyClass 是否恶性肿瘤
     */
    public $Malignant;

    /**
     * @var HistologyClass 是否良性肿瘤
     */
    public $Benigntumor;

    /**
     * @var BaseInfo 送检材料
     */
    public $SampleType;

    /**
     * @var array 淋巴结大小
     */
    public $LymphSize;

    /**
     * @var array 分子病理
     */
    public $Molecular;

    /**
     * @var integer 数据在原PDF文件中的第几页
     */
    public $Page;

    /**
     * @param Report $PathologicalReportType 报告类型
     * @param DescInfo $Desc 描述段落
     * @param SummaryInfo $Summary 诊断结论
     * @param string $ReportText 报告全文
     * @param array $LymphTotal 淋巴结总计转移信息
     * @param array $LymphNodes 单淋巴结转移信息
     * @param array $Ihc ihc信息
     * @param BaseInfo $Clinical 临床诊断
     * @param HistologyClass $Precancer 是否癌前病变
     * @param HistologyClass $Malignant 是否恶性肿瘤
     * @param HistologyClass $Benigntumor 是否良性肿瘤
     * @param BaseInfo $SampleType 送检材料
     * @param array $LymphSize 淋巴结大小
     * @param array $Molecular 分子病理
     * @param integer $Page 数据在原PDF文件中的第几页
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
        if (array_key_exists("PathologicalReportType",$param) and $param["PathologicalReportType"] !== null) {
            $this->PathologicalReportType = new Report();
            $this->PathologicalReportType->deserialize($param["PathologicalReportType"]);
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = new DescInfo();
            $this->Desc->deserialize($param["Desc"]);
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = new SummaryInfo();
            $this->Summary->deserialize($param["Summary"]);
        }

        if (array_key_exists("ReportText",$param) and $param["ReportText"] !== null) {
            $this->ReportText = $param["ReportText"];
        }

        if (array_key_exists("LymphTotal",$param) and $param["LymphTotal"] !== null) {
            $this->LymphTotal = [];
            foreach ($param["LymphTotal"] as $key => $value){
                $obj = new LymphTotal();
                $obj->deserialize($value);
                array_push($this->LymphTotal, $obj);
            }
        }

        if (array_key_exists("LymphNodes",$param) and $param["LymphNodes"] !== null) {
            $this->LymphNodes = [];
            foreach ($param["LymphNodes"] as $key => $value){
                $obj = new LymphNode();
                $obj->deserialize($value);
                array_push($this->LymphNodes, $obj);
            }
        }

        if (array_key_exists("Ihc",$param) and $param["Ihc"] !== null) {
            $this->Ihc = [];
            foreach ($param["Ihc"] as $key => $value){
                $obj = new IHCV2();
                $obj->deserialize($value);
                array_push($this->Ihc, $obj);
            }
        }

        if (array_key_exists("Clinical",$param) and $param["Clinical"] !== null) {
            $this->Clinical = new BaseInfo();
            $this->Clinical->deserialize($param["Clinical"]);
        }

        if (array_key_exists("Precancer",$param) and $param["Precancer"] !== null) {
            $this->Precancer = new HistologyClass();
            $this->Precancer->deserialize($param["Precancer"]);
        }

        if (array_key_exists("Malignant",$param) and $param["Malignant"] !== null) {
            $this->Malignant = new HistologyClass();
            $this->Malignant->deserialize($param["Malignant"]);
        }

        if (array_key_exists("Benigntumor",$param) and $param["Benigntumor"] !== null) {
            $this->Benigntumor = new HistologyClass();
            $this->Benigntumor->deserialize($param["Benigntumor"]);
        }

        if (array_key_exists("SampleType",$param) and $param["SampleType"] !== null) {
            $this->SampleType = new BaseInfo();
            $this->SampleType->deserialize($param["SampleType"]);
        }

        if (array_key_exists("LymphSize",$param) and $param["LymphSize"] !== null) {
            $this->LymphSize = [];
            foreach ($param["LymphSize"] as $key => $value){
                $obj = new Size();
                $obj->deserialize($value);
                array_push($this->LymphSize, $obj);
            }
        }

        if (array_key_exists("Molecular",$param) and $param["Molecular"] !== null) {
            $this->Molecular = [];
            foreach ($param["Molecular"] as $key => $value){
                $obj = new Molecular();
                $obj->deserialize($value);
                array_push($this->Molecular, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
