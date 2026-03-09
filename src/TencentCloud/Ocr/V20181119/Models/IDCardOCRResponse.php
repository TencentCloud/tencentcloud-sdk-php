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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IDCardOCR返回参数结构体
 *
 * @method string getName() 获取<p>姓名（人像面）</p>
 * @method void setName(string $Name) 设置<p>姓名（人像面）</p>
 * @method string getSex() 获取<p>性别（人像面）</p>
 * @method void setSex(string $Sex) 设置<p>性别（人像面）</p>
 * @method string getNation() 获取<p>民族（人像面）</p>
 * @method void setNation(string $Nation) 设置<p>民族（人像面）</p>
 * @method string getBirth() 获取<p>出生日期（人像面）</p>
 * @method void setBirth(string $Birth) 设置<p>出生日期（人像面）</p>
 * @method string getAddress() 获取<p>地址（人像面）</p>
 * @method void setAddress(string $Address) 设置<p>地址（人像面）</p>
 * @method string getIdNum() 获取<p>身份证号（人像面）</p>
 * @method void setIdNum(string $IdNum) 设置<p>身份证号（人像面）</p>
 * @method string getAuthority() 获取<p>发证机关（国徽面）</p>
 * @method void setAuthority(string $Authority) 设置<p>发证机关（国徽面）</p>
 * @method string getValidDate() 获取<p>证件有效期（国徽面）</p>
 * @method void setValidDate(string $ValidDate) 设置<p>证件有效期（国徽面）</p>
 * @method string getAdvancedInfo() 获取<p>扩展信息，不请求则不返回，具体输入参考示例3和示例4。<br>IdCard，裁剪后身份证照片的base64编码，请求 Config.CropIdCard 时返回；<br>Portrait，身份证头像照片的base64编码，请求 Config.CropPortrait 时返回；<br>Quality，图片质量分数，请求 Config.Quality 时返回（取值范围：0 ~ 100，分数越低越模糊，建议阈值≥50）;<br>BorderCodeValue，身份证边框不完整告警阈值分数，请求 Config.BorderCheckWarn时返回（取值范围：0 ~ 100，分数越低边框遮挡可能性越低，建议阈值≤50）;<br>WarnInfos，告警信息，Code 告警码列表和释义：<br>-9100 身份证有效日期不合法告警，<br>-9101 身份证边框不完整告警，<br>-9102 身份证复印件告警（黑白及彩色复印件）,<br>-9108 身份证复印件告警（仅黑白复印件），<br>-9103 身份证翻拍告警，<br>-9105 身份证框内遮挡告警，<br>-9104 临时身份证告警，<br>-9106 身份证疑似存在PS痕迹告警，<br>-9107 身份证反光告警，<br>-9110 电子身份证告警，<br>-9111 水印告警（仅CardWarnType参数为Advanced时）</p>
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置<p>扩展信息，不请求则不返回，具体输入参考示例3和示例4。<br>IdCard，裁剪后身份证照片的base64编码，请求 Config.CropIdCard 时返回；<br>Portrait，身份证头像照片的base64编码，请求 Config.CropPortrait 时返回；<br>Quality，图片质量分数，请求 Config.Quality 时返回（取值范围：0 ~ 100，分数越低越模糊，建议阈值≥50）;<br>BorderCodeValue，身份证边框不完整告警阈值分数，请求 Config.BorderCheckWarn时返回（取值范围：0 ~ 100，分数越低边框遮挡可能性越低，建议阈值≤50）;<br>WarnInfos，告警信息，Code 告警码列表和释义：<br>-9100 身份证有效日期不合法告警，<br>-9101 身份证边框不完整告警，<br>-9102 身份证复印件告警（黑白及彩色复印件）,<br>-9108 身份证复印件告警（仅黑白复印件），<br>-9103 身份证翻拍告警，<br>-9105 身份证框内遮挡告警，<br>-9104 临时身份证告警，<br>-9106 身份证疑似存在PS痕迹告警，<br>-9107 身份证反光告警，<br>-9110 电子身份证告警，<br>-9111 水印告警（仅CardWarnType参数为Advanced时）</p>
 * @method array getReflectDetailInfos() 获取<p>反光点覆盖区域详情结果，具体内容请点击左侧链接</p>
 * @method void setReflectDetailInfos(array $ReflectDetailInfos) 设置<p>反光点覆盖区域详情结果，具体内容请点击左侧链接</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class IDCardOCRResponse extends AbstractModel
{
    /**
     * @var string <p>姓名（人像面）</p>
     */
    public $Name;

    /**
     * @var string <p>性别（人像面）</p>
     */
    public $Sex;

    /**
     * @var string <p>民族（人像面）</p>
     */
    public $Nation;

    /**
     * @var string <p>出生日期（人像面）</p>
     */
    public $Birth;

    /**
     * @var string <p>地址（人像面）</p>
     */
    public $Address;

    /**
     * @var string <p>身份证号（人像面）</p>
     */
    public $IdNum;

    /**
     * @var string <p>发证机关（国徽面）</p>
     */
    public $Authority;

    /**
     * @var string <p>证件有效期（国徽面）</p>
     */
    public $ValidDate;

    /**
     * @var string <p>扩展信息，不请求则不返回，具体输入参考示例3和示例4。<br>IdCard，裁剪后身份证照片的base64编码，请求 Config.CropIdCard 时返回；<br>Portrait，身份证头像照片的base64编码，请求 Config.CropPortrait 时返回；<br>Quality，图片质量分数，请求 Config.Quality 时返回（取值范围：0 ~ 100，分数越低越模糊，建议阈值≥50）;<br>BorderCodeValue，身份证边框不完整告警阈值分数，请求 Config.BorderCheckWarn时返回（取值范围：0 ~ 100，分数越低边框遮挡可能性越低，建议阈值≤50）;<br>WarnInfos，告警信息，Code 告警码列表和释义：<br>-9100 身份证有效日期不合法告警，<br>-9101 身份证边框不完整告警，<br>-9102 身份证复印件告警（黑白及彩色复印件）,<br>-9108 身份证复印件告警（仅黑白复印件），<br>-9103 身份证翻拍告警，<br>-9105 身份证框内遮挡告警，<br>-9104 临时身份证告警，<br>-9106 身份证疑似存在PS痕迹告警，<br>-9107 身份证反光告警，<br>-9110 电子身份证告警，<br>-9111 水印告警（仅CardWarnType参数为Advanced时）</p>
     */
    public $AdvancedInfo;

    /**
     * @var array <p>反光点覆盖区域详情结果，具体内容请点击左侧链接</p>
     */
    public $ReflectDetailInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>姓名（人像面）</p>
     * @param string $Sex <p>性别（人像面）</p>
     * @param string $Nation <p>民族（人像面）</p>
     * @param string $Birth <p>出生日期（人像面）</p>
     * @param string $Address <p>地址（人像面）</p>
     * @param string $IdNum <p>身份证号（人像面）</p>
     * @param string $Authority <p>发证机关（国徽面）</p>
     * @param string $ValidDate <p>证件有效期（国徽面）</p>
     * @param string $AdvancedInfo <p>扩展信息，不请求则不返回，具体输入参考示例3和示例4。<br>IdCard，裁剪后身份证照片的base64编码，请求 Config.CropIdCard 时返回；<br>Portrait，身份证头像照片的base64编码，请求 Config.CropPortrait 时返回；<br>Quality，图片质量分数，请求 Config.Quality 时返回（取值范围：0 ~ 100，分数越低越模糊，建议阈值≥50）;<br>BorderCodeValue，身份证边框不完整告警阈值分数，请求 Config.BorderCheckWarn时返回（取值范围：0 ~ 100，分数越低边框遮挡可能性越低，建议阈值≤50）;<br>WarnInfos，告警信息，Code 告警码列表和释义：<br>-9100 身份证有效日期不合法告警，<br>-9101 身份证边框不完整告警，<br>-9102 身份证复印件告警（黑白及彩色复印件）,<br>-9108 身份证复印件告警（仅黑白复印件），<br>-9103 身份证翻拍告警，<br>-9105 身份证框内遮挡告警，<br>-9104 临时身份证告警，<br>-9106 身份证疑似存在PS痕迹告警，<br>-9107 身份证反光告警，<br>-9110 电子身份证告警，<br>-9111 水印告警（仅CardWarnType参数为Advanced时）</p>
     * @param array $ReflectDetailInfos <p>反光点覆盖区域详情结果，具体内容请点击左侧链接</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("ReflectDetailInfos",$param) and $param["ReflectDetailInfos"] !== null) {
            $this->ReflectDetailInfos = [];
            foreach ($param["ReflectDetailInfos"] as $key => $value){
                $obj = new ReflectDetailInfo();
                $obj->deserialize($value);
                array_push($this->ReflectDetailInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
