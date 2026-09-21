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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同文件验签单个结果结构体
 *
 * @method integer getVerifyResult() 获取<p>验签结果。0-签名域未签名；1-验签成功； 3-验签失败；4-未找到签名域：文件内没有签名域；5-签名值格式不正确。</p>
 * @method void setVerifyResult(integer $VerifyResult) 设置<p>验签结果。0-签名域未签名；1-验签成功； 3-验签失败；4-未找到签名域：文件内没有签名域；5-签名值格式不正确。</p>
 * @method string getSignPlatform() 获取<p>签署平台<br>如果文件是在腾讯电子签平台签署，则为<strong>腾讯电子签</strong>，<br>如果文件不在腾讯电子签平台签署，则为<strong>其他平台</strong>。</p>
 * @method void setSignPlatform(string $SignPlatform) 设置<p>签署平台<br>如果文件是在腾讯电子签平台签署，则为<strong>腾讯电子签</strong>，<br>如果文件不在腾讯电子签平台签署，则为<strong>其他平台</strong>。</p>
 * @method string getSignerName() 获取<p>申请证书的主体的名字</p><p>如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下<br><strong>企业</strong>:  ESS@企业名称@编码<br><strong>个人</strong>: ESS@个人姓名@证件号@808854</p><p>如果在其他平台签署的, 主体的名字参考其他平台的说明</p>
 * @method void setSignerName(string $SignerName) 设置<p>申请证书的主体的名字</p><p>如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下<br><strong>企业</strong>:  ESS@企业名称@编码<br><strong>个人</strong>: ESS@个人姓名@证件号@808854</p><p>如果在其他平台签署的, 主体的名字参考其他平台的说明</p>
 * @method integer getSignTime() 获取<p>签署时间的Unix时间戳，单位毫秒</p>
 * @method void setSignTime(integer $SignTime) 设置<p>签署时间的Unix时间戳，单位毫秒</p>
 * @method string getSignAlgorithm() 获取<p>证书签名算法,  如SHA1withRSA等算法</p>
 * @method void setSignAlgorithm(string $SignAlgorithm) 设置<p>证书签名算法,  如SHA1withRSA等算法</p>
 * @method string getCertSn() 获取<p>在数字证书申请过程中，系统会自动生成一个独一无二的序列号。</p>
 * @method void setCertSn(string $CertSn) 设置<p>在数字证书申请过程中，系统会自动生成一个独一无二的序列号。</p>
 * @method integer getCertNotBefore() 获取<p>证书起始时间的Unix时间戳，单位毫秒</p>
 * @method void setCertNotBefore(integer $CertNotBefore) 设置<p>证书起始时间的Unix时间戳，单位毫秒</p>
 * @method integer getCertNotAfter() 获取<p>证书过期时间的时间戳，单位毫秒</p>
 * @method void setCertNotAfter(integer $CertNotAfter) 设置<p>证书过期时间的时间戳，单位毫秒</p>
 * @method float getComponentPosX() 获取<p>签名域横坐标，单位px</p>
 * @method void setComponentPosX(float $ComponentPosX) 设置<p>签名域横坐标，单位px</p>
 * @method float getComponentPosY() 获取<p>签名域纵坐标，单位px</p>
 * @method void setComponentPosY(float $ComponentPosY) 设置<p>签名域纵坐标，单位px</p>
 * @method float getComponentWidth() 获取<p>签名域宽度，单位px</p>
 * @method void setComponentWidth(float $ComponentWidth) 设置<p>签名域宽度，单位px</p>
 * @method float getComponentHeight() 获取<p>签名域高度，单位px</p>
 * @method void setComponentHeight(float $ComponentHeight) 设置<p>签名域高度，单位px</p>
 * @method integer getComponentPage() 获取<p>签名域所在页码，1～N</p>
 * @method void setComponentPage(integer $ComponentPage) 设置<p>签名域所在页码，1～N</p>
 * @method string getCertProvider() 获取<p>证书颁发机构</p>
 * @method void setCertProvider(string $CertProvider) 设置<p>证书颁发机构</p>
 * @method boolean getIsTimestampTrust() 获取<p>是否有可信时间戳</p>
 * @method void setIsTimestampTrust(boolean $IsTimestampTrust) 设置<p>是否有可信时间戳</p>
 */
class PdfVerifyResult extends AbstractModel
{
    /**
     * @var integer <p>验签结果。0-签名域未签名；1-验签成功； 3-验签失败；4-未找到签名域：文件内没有签名域；5-签名值格式不正确。</p>
     */
    public $VerifyResult;

    /**
     * @var string <p>签署平台<br>如果文件是在腾讯电子签平台签署，则为<strong>腾讯电子签</strong>，<br>如果文件不在腾讯电子签平台签署，则为<strong>其他平台</strong>。</p>
     */
    public $SignPlatform;

    /**
     * @var string <p>申请证书的主体的名字</p><p>如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下<br><strong>企业</strong>:  ESS@企业名称@编码<br><strong>个人</strong>: ESS@个人姓名@证件号@808854</p><p>如果在其他平台签署的, 主体的名字参考其他平台的说明</p>
     */
    public $SignerName;

    /**
     * @var integer <p>签署时间的Unix时间戳，单位毫秒</p>
     */
    public $SignTime;

    /**
     * @var string <p>证书签名算法,  如SHA1withRSA等算法</p>
     */
    public $SignAlgorithm;

    /**
     * @var string <p>在数字证书申请过程中，系统会自动生成一个独一无二的序列号。</p>
     */
    public $CertSn;

    /**
     * @var integer <p>证书起始时间的Unix时间戳，单位毫秒</p>
     */
    public $CertNotBefore;

    /**
     * @var integer <p>证书过期时间的时间戳，单位毫秒</p>
     */
    public $CertNotAfter;

    /**
     * @var float <p>签名域横坐标，单位px</p>
     */
    public $ComponentPosX;

    /**
     * @var float <p>签名域纵坐标，单位px</p>
     */
    public $ComponentPosY;

    /**
     * @var float <p>签名域宽度，单位px</p>
     */
    public $ComponentWidth;

    /**
     * @var float <p>签名域高度，单位px</p>
     */
    public $ComponentHeight;

    /**
     * @var integer <p>签名域所在页码，1～N</p>
     */
    public $ComponentPage;

    /**
     * @var string <p>证书颁发机构</p>
     */
    public $CertProvider;

    /**
     * @var boolean <p>是否有可信时间戳</p>
     */
    public $IsTimestampTrust;

    /**
     * @param integer $VerifyResult <p>验签结果。0-签名域未签名；1-验签成功； 3-验签失败；4-未找到签名域：文件内没有签名域；5-签名值格式不正确。</p>
     * @param string $SignPlatform <p>签署平台<br>如果文件是在腾讯电子签平台签署，则为<strong>腾讯电子签</strong>，<br>如果文件不在腾讯电子签平台签署，则为<strong>其他平台</strong>。</p>
     * @param string $SignerName <p>申请证书的主体的名字</p><p>如果是在腾讯电子签平台签署, 则对应的主体的名字个数如下<br><strong>企业</strong>:  ESS@企业名称@编码<br><strong>个人</strong>: ESS@个人姓名@证件号@808854</p><p>如果在其他平台签署的, 主体的名字参考其他平台的说明</p>
     * @param integer $SignTime <p>签署时间的Unix时间戳，单位毫秒</p>
     * @param string $SignAlgorithm <p>证书签名算法,  如SHA1withRSA等算法</p>
     * @param string $CertSn <p>在数字证书申请过程中，系统会自动生成一个独一无二的序列号。</p>
     * @param integer $CertNotBefore <p>证书起始时间的Unix时间戳，单位毫秒</p>
     * @param integer $CertNotAfter <p>证书过期时间的时间戳，单位毫秒</p>
     * @param float $ComponentPosX <p>签名域横坐标，单位px</p>
     * @param float $ComponentPosY <p>签名域纵坐标，单位px</p>
     * @param float $ComponentWidth <p>签名域宽度，单位px</p>
     * @param float $ComponentHeight <p>签名域高度，单位px</p>
     * @param integer $ComponentPage <p>签名域所在页码，1～N</p>
     * @param string $CertProvider <p>证书颁发机构</p>
     * @param boolean $IsTimestampTrust <p>是否有可信时间戳</p>
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

        if (array_key_exists("CertProvider",$param) and $param["CertProvider"] !== null) {
            $this->CertProvider = $param["CertProvider"];
        }

        if (array_key_exists("IsTimestampTrust",$param) and $param["IsTimestampTrust"] !== null) {
            $this->IsTimestampTrust = $param["IsTimestampTrust"];
        }
    }
}
