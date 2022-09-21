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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同文件验签单个结果结构体
 *
 * @method integer getVerifyResult() 获取验签结果
 * @method void setVerifyResult(integer $VerifyResult) 设置验签结果
 * @method string getSignPlatform() 获取签署平台
 * @method void setSignPlatform(string $SignPlatform) 设置签署平台
 * @method string getSignerName() 获取签署人名称
 * @method void setSignerName(string $SignerName) 设置签署人名称
 * @method integer getSignTime() 获取签署时间
 * @method void setSignTime(integer $SignTime) 设置签署时间
 * @method string getSignAlgorithm() 获取签名算法
 * @method void setSignAlgorithm(string $SignAlgorithm) 设置签名算法
 * @method string getCertSn() 获取签名证书序列号
 * @method void setCertSn(string $CertSn) 设置签名证书序列号
 * @method integer getCertNotBefore() 获取证书起始时间
 * @method void setCertNotBefore(integer $CertNotBefore) 设置证书起始时间
 * @method integer getCertNotAfter() 获取证书过期时间
 * @method void setCertNotAfter(integer $CertNotAfter) 设置证书过期时间
 * @method integer getSignType() 获取签名类型
 * @method void setSignType(integer $SignType) 设置签名类型
 * @method float getComponentPosX() 获取签名域横坐标
 * @method void setComponentPosX(float $ComponentPosX) 设置签名域横坐标
 * @method float getComponentPosY() 获取签名域纵坐标
 * @method void setComponentPosY(float $ComponentPosY) 设置签名域纵坐标
 * @method float getComponentWidth() 获取签名域宽度
 * @method void setComponentWidth(float $ComponentWidth) 设置签名域宽度
 * @method float getComponentHeight() 获取签名域高度
 * @method void setComponentHeight(float $ComponentHeight) 设置签名域高度
 * @method integer getComponentPage() 获取签名域所在页码
 * @method void setComponentPage(integer $ComponentPage) 设置签名域所在页码
 */
class PdfVerifyResult extends AbstractModel
{
    /**
     * @var integer 验签结果
     */
    public $VerifyResult;

    /**
     * @var string 签署平台
     */
    public $SignPlatform;

    /**
     * @var string 签署人名称
     */
    public $SignerName;

    /**
     * @var integer 签署时间
     */
    public $SignTime;

    /**
     * @var string 签名算法
     */
    public $SignAlgorithm;

    /**
     * @var string 签名证书序列号
     */
    public $CertSn;

    /**
     * @var integer 证书起始时间
     */
    public $CertNotBefore;

    /**
     * @var integer 证书过期时间
     */
    public $CertNotAfter;

    /**
     * @var integer 签名类型
     */
    public $SignType;

    /**
     * @var float 签名域横坐标
     */
    public $ComponentPosX;

    /**
     * @var float 签名域纵坐标
     */
    public $ComponentPosY;

    /**
     * @var float 签名域宽度
     */
    public $ComponentWidth;

    /**
     * @var float 签名域高度
     */
    public $ComponentHeight;

    /**
     * @var integer 签名域所在页码
     */
    public $ComponentPage;

    /**
     * @param integer $VerifyResult 验签结果
     * @param string $SignPlatform 签署平台
     * @param string $SignerName 签署人名称
     * @param integer $SignTime 签署时间
     * @param string $SignAlgorithm 签名算法
     * @param string $CertSn 签名证书序列号
     * @param integer $CertNotBefore 证书起始时间
     * @param integer $CertNotAfter 证书过期时间
     * @param integer $SignType 签名类型
     * @param float $ComponentPosX 签名域横坐标
     * @param float $ComponentPosY 签名域纵坐标
     * @param float $ComponentWidth 签名域宽度
     * @param float $ComponentHeight 签名域高度
     * @param integer $ComponentPage 签名域所在页码
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
