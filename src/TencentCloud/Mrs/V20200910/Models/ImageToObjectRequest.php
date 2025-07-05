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
 * ImageToObject请求参数结构体
 *
 * @method integer getType() 获取报告类型，目前支持11（检验报告），12（检查报告），15（病理报告），28（出院报告），29（入院报告），210（门诊病历），212（手术记录），218（诊断证明），363（心电图），27（内窥镜检查），215（处方单），219（免疫接种证明），301（C14呼气试验）。如果不清楚报告类型，可以使用分类引擎，该字段传0（同时IsUsedClassify字段必须为True，否则无法输出结果）
 * @method void setType(integer $Type) 设置报告类型，目前支持11（检验报告），12（检查报告），15（病理报告），28（出院报告），29（入院报告），210（门诊病历），212（手术记录），218（诊断证明），363（心电图），27（内窥镜检查），215（处方单），219（免疫接种证明），301（C14呼气试验）。如果不清楚报告类型，可以使用分类引擎，该字段传0（同时IsUsedClassify字段必须为True，否则无法输出结果）
 * @method boolean getIsUsedClassify() 获取是否使用分类引擎，当不确定报告类型时，可以使用收费的报告分类引擎服务。若该字段为 False，则 Type 字段不能为 0，否则无法输出结果。
注意：当 IsUsedClassify 为True 时，表示使用收费的报告分类服务，将会产生额外的费用，具体收费标准参见 [购买指南的产品价格](https://cloud.tencent.com/document/product/1314/54264)。
 * @method void setIsUsedClassify(boolean $IsUsedClassify) 设置是否使用分类引擎，当不确定报告类型时，可以使用收费的报告分类引擎服务。若该字段为 False，则 Type 字段不能为 0，否则无法输出结果。
注意：当 IsUsedClassify 为True 时，表示使用收费的报告分类服务，将会产生额外的费用，具体收费标准参见 [购买指南的产品价格](https://cloud.tencent.com/document/product/1314/54264)。
 * @method HandleParam getHandleParam() 获取图片处理参数
 * @method void setHandleParam(HandleParam $HandleParam) 设置图片处理参数
 * @method array getImageInfoList() 获取图片列表，目前只支持传入一张图片，需要是图片base64编码，图片url暂不支持
 * @method void setImageInfoList(array $ImageInfoList) 设置图片列表，目前只支持传入一张图片，需要是图片base64编码，图片url暂不支持
 * @method integer getUserType() 获取后付费的用户类型，新客户传1，老客户可不传或传 0。2022 年 12 月 15 新增了计费项，在此时间之前已经通过商务指定优惠价格的大客户，请不传这个字段或传 0，如果传 1 会导致以前获得的折扣价格失效。在 2022 年 12 月 15 日之后，通过商务指定优惠价格的大客户请传 1。
 * @method void setUserType(integer $UserType) 设置后付费的用户类型，新客户传1，老客户可不传或传 0。2022 年 12 月 15 新增了计费项，在此时间之前已经通过商务指定优惠价格的大客户，请不传这个字段或传 0，如果传 1 会导致以前获得的折扣价格失效。在 2022 年 12 月 15 日之后，通过商务指定优惠价格的大客户请传 1。
 * @method array getReportTypeVersion() 获取可选。用于指定不同报告使用的结构化引擎版本，不同版本返回的JSON 数据结果不兼容。若不指定版本号，就默认用旧的版本号。
（1）检验报告 11，默认使用 V2，最高支持 V3。
（2）病理报告 15，默认使用 V1，最高支持 V2。
（3）入院记录29、出院记录 28、病历记录 216、病程记录 217、门诊记录 210，默认使用 V1，最高支持 V2。
 * @method void setReportTypeVersion(array $ReportTypeVersion) 设置可选。用于指定不同报告使用的结构化引擎版本，不同版本返回的JSON 数据结果不兼容。若不指定版本号，就默认用旧的版本号。
（1）检验报告 11，默认使用 V2，最高支持 V3。
（2）病理报告 15，默认使用 V1，最高支持 V2。
（3）入院记录29、出院记录 28、病历记录 216、病程记录 217、门诊记录 210，默认使用 V1，最高支持 V2。
 * @method array getOcrInfoList() 获取可选。 图片OCR信息列表，每一个元素是一张图片的OCR结果。适用于不想将医疗报告图片传入腾讯云的客户，客户可对图片OCR信息中的敏感信息去除之后再传入。与 ImageInfoList 二选一，同时存在则使用OcrInfoList
 * @method void setOcrInfoList(array $OcrInfoList) 设置可选。 图片OCR信息列表，每一个元素是一张图片的OCR结果。适用于不想将医疗报告图片传入腾讯云的客户，客户可对图片OCR信息中的敏感信息去除之后再传入。与 ImageInfoList 二选一，同时存在则使用OcrInfoList
 */
class ImageToObjectRequest extends AbstractModel
{
    /**
     * @var integer 报告类型，目前支持11（检验报告），12（检查报告），15（病理报告），28（出院报告），29（入院报告），210（门诊病历），212（手术记录），218（诊断证明），363（心电图），27（内窥镜检查），215（处方单），219（免疫接种证明），301（C14呼气试验）。如果不清楚报告类型，可以使用分类引擎，该字段传0（同时IsUsedClassify字段必须为True，否则无法输出结果）
     */
    public $Type;

    /**
     * @var boolean 是否使用分类引擎，当不确定报告类型时，可以使用收费的报告分类引擎服务。若该字段为 False，则 Type 字段不能为 0，否则无法输出结果。
注意：当 IsUsedClassify 为True 时，表示使用收费的报告分类服务，将会产生额外的费用，具体收费标准参见 [购买指南的产品价格](https://cloud.tencent.com/document/product/1314/54264)。
     */
    public $IsUsedClassify;

    /**
     * @var HandleParam 图片处理参数
     */
    public $HandleParam;

    /**
     * @var array 图片列表，目前只支持传入一张图片，需要是图片base64编码，图片url暂不支持
     */
    public $ImageInfoList;

    /**
     * @var integer 后付费的用户类型，新客户传1，老客户可不传或传 0。2022 年 12 月 15 新增了计费项，在此时间之前已经通过商务指定优惠价格的大客户，请不传这个字段或传 0，如果传 1 会导致以前获得的折扣价格失效。在 2022 年 12 月 15 日之后，通过商务指定优惠价格的大客户请传 1。
     */
    public $UserType;

    /**
     * @var array 可选。用于指定不同报告使用的结构化引擎版本，不同版本返回的JSON 数据结果不兼容。若不指定版本号，就默认用旧的版本号。
（1）检验报告 11，默认使用 V2，最高支持 V3。
（2）病理报告 15，默认使用 V1，最高支持 V2。
（3）入院记录29、出院记录 28、病历记录 216、病程记录 217、门诊记录 210，默认使用 V1，最高支持 V2。
     */
    public $ReportTypeVersion;

    /**
     * @var array 可选。 图片OCR信息列表，每一个元素是一张图片的OCR结果。适用于不想将医疗报告图片传入腾讯云的客户，客户可对图片OCR信息中的敏感信息去除之后再传入。与 ImageInfoList 二选一，同时存在则使用OcrInfoList
     */
    public $OcrInfoList;

    /**
     * @param integer $Type 报告类型，目前支持11（检验报告），12（检查报告），15（病理报告），28（出院报告），29（入院报告），210（门诊病历），212（手术记录），218（诊断证明），363（心电图），27（内窥镜检查），215（处方单），219（免疫接种证明），301（C14呼气试验）。如果不清楚报告类型，可以使用分类引擎，该字段传0（同时IsUsedClassify字段必须为True，否则无法输出结果）
     * @param boolean $IsUsedClassify 是否使用分类引擎，当不确定报告类型时，可以使用收费的报告分类引擎服务。若该字段为 False，则 Type 字段不能为 0，否则无法输出结果。
注意：当 IsUsedClassify 为True 时，表示使用收费的报告分类服务，将会产生额外的费用，具体收费标准参见 [购买指南的产品价格](https://cloud.tencent.com/document/product/1314/54264)。
     * @param HandleParam $HandleParam 图片处理参数
     * @param array $ImageInfoList 图片列表，目前只支持传入一张图片，需要是图片base64编码，图片url暂不支持
     * @param integer $UserType 后付费的用户类型，新客户传1，老客户可不传或传 0。2022 年 12 月 15 新增了计费项，在此时间之前已经通过商务指定优惠价格的大客户，请不传这个字段或传 0，如果传 1 会导致以前获得的折扣价格失效。在 2022 年 12 月 15 日之后，通过商务指定优惠价格的大客户请传 1。
     * @param array $ReportTypeVersion 可选。用于指定不同报告使用的结构化引擎版本，不同版本返回的JSON 数据结果不兼容。若不指定版本号，就默认用旧的版本号。
（1）检验报告 11，默认使用 V2，最高支持 V3。
（2）病理报告 15，默认使用 V1，最高支持 V2。
（3）入院记录29、出院记录 28、病历记录 216、病程记录 217、门诊记录 210，默认使用 V1，最高支持 V2。
     * @param array $OcrInfoList 可选。 图片OCR信息列表，每一个元素是一张图片的OCR结果。适用于不想将医疗报告图片传入腾讯云的客户，客户可对图片OCR信息中的敏感信息去除之后再传入。与 ImageInfoList 二选一，同时存在则使用OcrInfoList
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsUsedClassify",$param) and $param["IsUsedClassify"] !== null) {
            $this->IsUsedClassify = $param["IsUsedClassify"];
        }

        if (array_key_exists("HandleParam",$param) and $param["HandleParam"] !== null) {
            $this->HandleParam = new HandleParam();
            $this->HandleParam->deserialize($param["HandleParam"]);
        }

        if (array_key_exists("ImageInfoList",$param) and $param["ImageInfoList"] !== null) {
            $this->ImageInfoList = [];
            foreach ($param["ImageInfoList"] as $key => $value){
                $obj = new ImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfoList, $obj);
            }
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("ReportTypeVersion",$param) and $param["ReportTypeVersion"] !== null) {
            $this->ReportTypeVersion = [];
            foreach ($param["ReportTypeVersion"] as $key => $value){
                $obj = new ReportTypeVersion();
                $obj->deserialize($value);
                array_push($this->ReportTypeVersion, $obj);
            }
        }

        if (array_key_exists("OcrInfoList",$param) and $param["OcrInfoList"] !== null) {
            $this->OcrInfoList = [];
            foreach ($param["OcrInfoList"] as $key => $value){
                $obj = new OcrInfo();
                $obj->deserialize($value);
                array_push($this->OcrInfoList, $obj);
            }
        }
    }
}
