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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdToken请求参数结构体
 *
 * @method string getCompareLib() 获取比对库。
- 取值范围：
LOCAL：本地上传照片。
BUSINESS：商业库。
 * @method void setCompareLib(string $CompareLib) 设置比对库。
- 取值范围：
LOCAL：本地上传照片。
BUSINESS：商业库。
 * @method string getIdCard() 获取身份证。
- CompareLib为商业库时必传。
 * @method void setIdCard(string $IdCard) 设置身份证。
- CompareLib为商业库时必传。
 * @method string getName() 获取姓名。
- CompareLib为商业库时必传。
 * @method void setName(string $Name) 设置姓名。
- CompareLib为商业库时必传。
 * @method string getImageBase64() 获取图片的Base64。
- CompareLib为上传照片比对时必传。
- Base64后图片最大8MB。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method void setImageBase64(string $ImageBase64) 设置图片的Base64。
- CompareLib为上传照片比对时必传。
- Base64后图片最大8MB。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method string getMeta() 获取SDK中生成的Meta字符串。
 * @method void setMeta(string $Meta) 设置SDK中生成的Meta字符串。
 * @method string getExtra() 获取透传参数。
- 1000长度字符串
 * @method void setExtra(string $Extra) 设置透传参数。
- 1000长度字符串
 * @method boolean getUseCos() 获取是否使用cos桶。
- 默认为false。
- 设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。
- 开通地址见https://console.cloud.tencent.com/faceid/cos
- 【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。
 * @method void setUseCos(boolean $UseCos) 设置是否使用cos桶。
- 默认为false。
- 设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。
- 开通地址见https://console.cloud.tencent.com/faceid/cos
- 【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。
 * @method Encryption getEncryption() 获取敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method string getRuleId() 获取用于细分客户使用场景。
- 申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。
- 如有疑问，请添加腾讯云人脸核身小助手进行咨询。
 * @method void setRuleId(string $RuleId) 设置用于细分客户使用场景。
- 申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。
- 如有疑问，请添加腾讯云人脸核身小助手进行咨询。
 */
class GetFaceIdTokenRequest extends AbstractModel
{
    /**
     * @var string 比对库。
- 取值范围：
LOCAL：本地上传照片。
BUSINESS：商业库。
     */
    public $CompareLib;

    /**
     * @var string 身份证。
- CompareLib为商业库时必传。
     */
    public $IdCard;

    /**
     * @var string 姓名。
- CompareLib为商业库时必传。
     */
    public $Name;

    /**
     * @var string 图片的Base64。
- CompareLib为上传照片比对时必传。
- Base64后图片最大8MB。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     */
    public $ImageBase64;

    /**
     * @var string SDK中生成的Meta字符串。
     */
    public $Meta;

    /**
     * @var string 透传参数。
- 1000长度字符串
     */
    public $Extra;

    /**
     * @var boolean 是否使用cos桶。
- 默认为false。
- 设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。
- 开通地址见https://console.cloud.tencent.com/faceid/cos
- 【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。
     */
    public $UseCos;

    /**
     * @var Encryption 敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @var string 用于细分客户使用场景。
- 申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。
- 如有疑问，请添加腾讯云人脸核身小助手进行咨询。
     */
    public $RuleId;

    /**
     * @param string $CompareLib 比对库。
- 取值范围：
LOCAL：本地上传照片。
BUSINESS：商业库。
     * @param string $IdCard 身份证。
- CompareLib为商业库时必传。
     * @param string $Name 姓名。
- CompareLib为商业库时必传。
     * @param string $ImageBase64 图片的Base64。
- CompareLib为上传照片比对时必传。
- Base64后图片最大8MB。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     * @param string $Meta SDK中生成的Meta字符串。
     * @param string $Extra 透传参数。
- 1000长度字符串
     * @param boolean $UseCos 是否使用cos桶。
- 默认为false。
- 设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。
- 开通地址见https://console.cloud.tencent.com/faceid/cos
- 【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。
     * @param Encryption $Encryption 敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     * @param string $RuleId 用于细分客户使用场景。
- 申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。
- 如有疑问，请添加腾讯云人脸核身小助手进行咨询。
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
        if (array_key_exists("CompareLib",$param) and $param["CompareLib"] !== null) {
            $this->CompareLib = $param["CompareLib"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Meta",$param) and $param["Meta"] !== null) {
            $this->Meta = $param["Meta"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("UseCos",$param) and $param["UseCos"] !== null) {
            $this->UseCos = $param["UseCos"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
