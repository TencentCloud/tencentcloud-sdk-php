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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同验签每个签署区的信息
 *
 * @method integer getVerifyResult() 获取验签结果详情，每个签名域对应的验签结果。状态值如下
<ul><li> **1** :验签成功，在电子签签署</li>
<li> **2** :验签成功，在其他平台签署</li>
<li> **3** :验签失败</li>
<li> **4** :pdf文件没有签名域</li>
<li> **5** :文件签名格式错误</li></ul>
 * @method void setVerifyResult(integer $VerifyResult) 设置验签结果详情，每个签名域对应的验签结果。状态值如下
<ul><li> **1** :验签成功，在电子签签署</li>
<li> **2** :验签成功，在其他平台签署</li>
<li> **3** :验签失败</li>
<li> **4** :pdf文件没有签名域</li>
<li> **5** :文件签名格式错误</li></ul>
 * @method string getSignPlatform() 获取签署平台
如果文件是在腾讯电子签平台签署，则为**腾讯电子签**，
如果文件不在腾讯电子签平台签署，则为**其他平台**。
 * @method void setSignPlatform(string $SignPlatform) 设置签署平台
如果文件是在腾讯电子签平台签署，则为**腾讯电子签**，
如果文件不在腾讯电子签平台签署，则为**其他平台**。
 * @method string getSignerName() 获取申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@平台生成的数字编码
**个人**: ESS@个人姓名@证件号@平台生成的数字编码

如果在其他平台签署的, 主体的名字参考其他平台的说明
 * @method void setSignerName(string $SignerName) 设置申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@平台生成的数字编码
**个人**: ESS@个人姓名@证件号@平台生成的数字编码

如果在其他平台签署的, 主体的名字参考其他平台的说明
 * @method integer getSignTime() 获取签署时间的Unix时间戳，单位毫秒
 * @method void setSignTime(integer $SignTime) 设置签署时间的Unix时间戳，单位毫秒
 * @method string getSignAlgorithm() 获取证书签名算法,  如SHA1withRSA等算法
 * @method void setSignAlgorithm(string $SignAlgorithm) 设置证书签名算法,  如SHA1withRSA等算法
 * @method string getCertSn() 获取在数字证书申请过程中，系统会自动生成一个独一无二的序列号。
 * @method void setCertSn(string $CertSn) 设置在数字证书申请过程中，系统会自动生成一个独一无二的序列号。
 * @method integer getCertNotBefore() 获取证书起始时间的Unix时间戳，单位毫秒
 * @method void setCertNotBefore(integer $CertNotBefore) 设置证书起始时间的Unix时间戳，单位毫秒
 * @method integer getCertNotAfter() 获取证书过期时间的时间戳，单位毫秒
 * @method void setCertNotAfter(integer $CertNotAfter) 设置证书过期时间的时间戳，单位毫秒
 * @method integer getSignType() 获取签名类型, 保留字段, 现在全部为0


 * @method void setSignType(integer $SignType) 设置签名类型, 保留字段, 现在全部为0


 * @method float getComponentPosX() 获取签名域横坐标，单位px
 * @method void setComponentPosX(float $ComponentPosX) 设置签名域横坐标，单位px
 * @method float getComponentPosY() 获取签名域纵坐标，单位px
 * @method void setComponentPosY(float $ComponentPosY) 设置签名域纵坐标，单位px
 * @method float getComponentWidth() 获取签名域宽度，单位px
 * @method void setComponentWidth(float $ComponentWidth) 设置签名域宽度，单位px
 * @method float getComponentHeight() 获取签名域高度，单位px
 * @method void setComponentHeight(float $ComponentHeight) 设置签名域高度，单位px
 * @method integer getComponentPage() 获取签名域所在页码，1～N
 * @method void setComponentPage(integer $ComponentPage) 设置签名域所在页码，1～N
 */
class PdfVerifyResult extends AbstractModel
{
    /**
     * @var integer 验签结果详情，每个签名域对应的验签结果。状态值如下
<ul><li> **1** :验签成功，在电子签签署</li>
<li> **2** :验签成功，在其他平台签署</li>
<li> **3** :验签失败</li>
<li> **4** :pdf文件没有签名域</li>
<li> **5** :文件签名格式错误</li></ul>
     */
    public $VerifyResult;

    /**
     * @var string 签署平台
如果文件是在腾讯电子签平台签署，则为**腾讯电子签**，
如果文件不在腾讯电子签平台签署，则为**其他平台**。
     */
    public $SignPlatform;

    /**
     * @var string 申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@平台生成的数字编码
**个人**: ESS@个人姓名@证件号@平台生成的数字编码

如果在其他平台签署的, 主体的名字参考其他平台的说明
     */
    public $SignerName;

    /**
     * @var integer 签署时间的Unix时间戳，单位毫秒
     */
    public $SignTime;

    /**
     * @var string 证书签名算法,  如SHA1withRSA等算法
     */
    public $SignAlgorithm;

    /**
     * @var string 在数字证书申请过程中，系统会自动生成一个独一无二的序列号。
     */
    public $CertSn;

    /**
     * @var integer 证书起始时间的Unix时间戳，单位毫秒
     */
    public $CertNotBefore;

    /**
     * @var integer 证书过期时间的时间戳，单位毫秒
     */
    public $CertNotAfter;

    /**
     * @var integer 签名类型, 保留字段, 现在全部为0


     */
    public $SignType;

    /**
     * @var float 签名域横坐标，单位px
     */
    public $ComponentPosX;

    /**
     * @var float 签名域纵坐标，单位px
     */
    public $ComponentPosY;

    /**
     * @var float 签名域宽度，单位px
     */
    public $ComponentWidth;

    /**
     * @var float 签名域高度，单位px
     */
    public $ComponentHeight;

    /**
     * @var integer 签名域所在页码，1～N
     */
    public $ComponentPage;

    /**
     * @param integer $VerifyResult 验签结果详情，每个签名域对应的验签结果。状态值如下
<ul><li> **1** :验签成功，在电子签签署</li>
<li> **2** :验签成功，在其他平台签署</li>
<li> **3** :验签失败</li>
<li> **4** :pdf文件没有签名域</li>
<li> **5** :文件签名格式错误</li></ul>
     * @param string $SignPlatform 签署平台
如果文件是在腾讯电子签平台签署，则为**腾讯电子签**，
如果文件不在腾讯电子签平台签署，则为**其他平台**。
     * @param string $SignerName 申请证书的主体的名字

如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下
**企业**:  ESS@企业名称@平台生成的数字编码
**个人**: ESS@个人姓名@证件号@平台生成的数字编码

如果在其他平台签署的, 主体的名字参考其他平台的说明
     * @param integer $SignTime 签署时间的Unix时间戳，单位毫秒
     * @param string $SignAlgorithm 证书签名算法,  如SHA1withRSA等算法
     * @param string $CertSn 在数字证书申请过程中，系统会自动生成一个独一无二的序列号。
     * @param integer $CertNotBefore 证书起始时间的Unix时间戳，单位毫秒
     * @param integer $CertNotAfter 证书过期时间的时间戳，单位毫秒
     * @param integer $SignType 签名类型, 保留字段, 现在全部为0


     * @param float $ComponentPosX 签名域横坐标，单位px
     * @param float $ComponentPosY 签名域纵坐标，单位px
     * @param float $ComponentWidth 签名域宽度，单位px
     * @param float $ComponentHeight 签名域高度，单位px
     * @param integer $ComponentPage 签名域所在页码，1～N
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
        if (array_key_exists("VerifyResult",$param) and $param["VerifyResult"] !== null) {
            $this->VerifyResult = $param["VerifyResult"];
        }

        if (array_key_exists("SignPlatform",$param) and $param["SignPlatform"] !== null) {
            $this->SignPlatform = $param["SignPlatform"];
        }

        if (array_key_exists("SignerName",$param) and $param["SignerName"] !== null) {
            $this->SignerName = $param["SignerName"];
        }

        if (array_key_exists("SignTime",$param) and $param["SignTime"] !== null) {
            $this->SignTime = $param["SignTime"];
        }

        if (array_key_exists("SignAlgorithm",$param) and $param["SignAlgorithm"] !== null) {
            $this->SignAlgorithm = $param["SignAlgorithm"];
        }

        if (array_key_exists("CertSn",$param) and $param["CertSn"] !== null) {
            $this->CertSn = $param["CertSn"];
        }

        if (array_key_exists("CertNotBefore",$param) and $param["CertNotBefore"] !== null) {
            $this->CertNotBefore = $param["CertNotBefore"];
        }

        if (array_key_exists("CertNotAfter",$param) and $param["CertNotAfter"] !== null) {
            $this->CertNotAfter = $param["CertNotAfter"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("ComponentPosX",$param) and $param["ComponentPosX"] !== null) {
            $this->ComponentPosX = $param["ComponentPosX"];
        }

        if (array_key_exists("ComponentPosY",$param) and $param["ComponentPosY"] !== null) {
            $this->ComponentPosY = $param["ComponentPosY"];
        }

        if (array_key_exists("ComponentWidth",$param) and $param["ComponentWidth"] !== null) {
            $this->ComponentWidth = $param["ComponentWidth"];
        }

        if (array_key_exists("ComponentHeight",$param) and $param["ComponentHeight"] !== null) {
            $this->ComponentHeight = $param["ComponentHeight"];
        }

        if (array_key_exists("ComponentPage",$param) and $param["ComponentPage"] !== null) {
            $this->ComponentPage = $param["ComponentPage"];
        }
    }
}
