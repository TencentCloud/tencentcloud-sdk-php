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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdToken请求参数结构体
 *
 * @method string getCompareLib() 获取<p>比对库。</p><ul><li>取值范围：<br>LOCAL：本地上传照片。<br>BUSINESS：商业库。</li></ul>
 * @method void setCompareLib(string $CompareLib) 设置<p>比对库。</p><ul><li>取值范围：<br>LOCAL：本地上传照片。<br>BUSINESS：商业库。</li></ul>
 * @method string getIdCard() 获取<p>身份证。</p><ul><li>CompareLib为商业库时必传。</li></ul>
 * @method void setIdCard(string $IdCard) 设置<p>身份证。</p><ul><li>CompareLib为商业库时必传。</li></ul>
 * @method string getName() 获取<p>姓名。</p><ul><li>CompareLib为商业库时必传。</li></ul>
 * @method void setName(string $Name) 设置<p>姓名。</p><ul><li>CompareLib为商业库时必传。</li></ul>
 * @method string getImageBase64() 获取<p>图片的Base64。</p><ul><li>CompareLib为上传照片比对时必传。</li><li>Base64后图片最大8MB。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method void setImageBase64(string $ImageBase64) 设置<p>图片的Base64。</p><ul><li>CompareLib为上传照片比对时必传。</li><li>Base64后图片最大8MB。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method string getMeta() 获取<p>SDK中生成的Meta字符串。</p>
 * @method void setMeta(string $Meta) 设置<p>SDK中生成的Meta字符串。</p>
 * @method string getExtra() 获取<p>透传参数。</p><ul><li>1000长度字符串</li></ul>
 * @method void setExtra(string $Extra) 设置<p>透传参数。</p><ul><li>1000长度字符串</li></ul>
 * @method boolean getUseCos() 获取<p>是否使用cos桶。</p><ul><li>默认为false。</li><li>设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。</li><li>开通地址见https://console.cloud.tencent.com/faceid/cos</li><li>【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。</li></ul>
 * @method void setUseCos(boolean $UseCos) 设置<p>是否使用cos桶。</p><ul><li>默认为false。</li><li>设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。</li><li>开通地址见https://console.cloud.tencent.com/faceid/cos</li><li>【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。</li></ul>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。对传入信息（姓名、身份证号、自传照片）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。对传入信息（姓名、身份证号、自传照片）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 * @method string getRuleId() 获取<p>用于细分客户使用场景。</p><ul><li>申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。</li><li>如有疑问，请添加腾讯云人脸核身小助手进行咨询。</li></ul>
 * @method void setRuleId(string $RuleId) 设置<p>用于细分客户使用场景。</p><ul><li>申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。</li><li>如有疑问，请添加腾讯云人脸核身小助手进行咨询。</li></ul>
 * @method string getMetaData() 获取<p>SDK和用户设备的元信息。该字段的值由HuiYan SDK以JSON字符串格式返回。  说明：不要修改返回值，直接传递即可。</p>
 * @method void setMetaData(string $MetaData) 设置<p>SDK和用户设备的元信息。该字段的值由HuiYan SDK以JSON字符串格式返回。  说明：不要修改返回值，直接传递即可。</p>
 */
class GetFaceIdTokenRequest extends AbstractModel
{
    /**
     * @var string <p>比对库。</p><ul><li>取值范围：<br>LOCAL：本地上传照片。<br>BUSINESS：商业库。</li></ul>
     */
    public $CompareLib;

    /**
     * @var string <p>身份证。</p><ul><li>CompareLib为商业库时必传。</li></ul>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。</p><ul><li>CompareLib为商业库时必传。</li></ul>
     */
    public $Name;

    /**
     * @var string <p>图片的Base64。</p><ul><li>CompareLib为上传照片比对时必传。</li><li>Base64后图片最大8MB。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     */
    public $ImageBase64;

    /**
     * @var string <p>SDK中生成的Meta字符串。</p>
     */
    public $Meta;

    /**
     * @var string <p>透传参数。</p><ul><li>1000长度字符串</li></ul>
     */
    public $Extra;

    /**
     * @var boolean <p>是否使用cos桶。</p><ul><li>默认为false。</li><li>设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。</li><li>开通地址见https://console.cloud.tencent.com/faceid/cos</li><li>【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。</li></ul>
     */
    public $UseCos;

    /**
     * @var Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号、自传照片）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
     */
    public $Encryption;

    /**
     * @var string <p>用于细分客户使用场景。</p><ul><li>申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。</li><li>如有疑问，请添加腾讯云人脸核身小助手进行咨询。</li></ul>
     */
    public $RuleId;

    /**
     * @var string <p>SDK和用户设备的元信息。该字段的值由HuiYan SDK以JSON字符串格式返回。  说明：不要修改返回值，直接传递即可。</p>
     */
    public $MetaData;

    /**
     * @param string $CompareLib <p>比对库。</p><ul><li>取值范围：<br>LOCAL：本地上传照片。<br>BUSINESS：商业库。</li></ul>
     * @param string $IdCard <p>身份证。</p><ul><li>CompareLib为商业库时必传。</li></ul>
     * @param string $Name <p>姓名。</p><ul><li>CompareLib为商业库时必传。</li></ul>
     * @param string $ImageBase64 <p>图片的Base64。</p><ul><li>CompareLib为上传照片比对时必传。</li><li>Base64后图片最大8MB。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     * @param string $Meta <p>SDK中生成的Meta字符串。</p>
     * @param string $Extra <p>透传参数。</p><ul><li>1000长度字符串</li></ul>
     * @param boolean $UseCos <p>是否使用cos桶。</p><ul><li>默认为false。</li><li>设置该参数为true后，核身过程中的视频图片将会存储在人脸核身控制台授权cos的bucket中，拉取结果时会返回对应资源完整cos地址。</li><li>开通地址见https://console.cloud.tencent.com/faceid/cos</li><li>【注意】选择该参数为true后将不返回base64数据，请根据接入情况谨慎修改。</li></ul>
     * @param Encryption $Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号、自传照片）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
     * @param string $RuleId <p>用于细分客户使用场景。</p><ul><li>申请开通服务后，可以在腾讯云慧眼人脸核身控制台（https://console.cloud.tencent.com/faceid） 自助接入里面创建，审核通过后即可调用。</li><li>如有疑问，请添加腾讯云人脸核身小助手进行咨询。</li></ul>
     * @param string $MetaData <p>SDK和用户设备的元信息。该字段的值由HuiYan SDK以JSON字符串格式返回。  说明：不要修改返回值，直接传递即可。</p>
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = $param["MetaData"];
        }
    }
}
