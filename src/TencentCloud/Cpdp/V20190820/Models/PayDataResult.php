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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * pay支付方式json数据
 *
 * @method string getPaymentTag() 获取支付标签（唯一性）
 * @method void setPaymentTag(string $PaymentTag) 设置支付标签（唯一性）
 * @method string getPaymentOptionHide() 获取添加合同时需要隐藏的选项（多个以小写逗号分开）
 * @method void setPaymentOptionHide(string $PaymentOptionHide) 设置添加合同时需要隐藏的选项（多个以小写逗号分开）
 * @method string getPaymentIcon() 获取支付方式图片url路径
 * @method void setPaymentIcon(string $PaymentIcon) 设置支付方式图片url路径
 * @method string getPaymentOptionSix() 获取合同选项名称6
 * @method void setPaymentOptionSix(string $PaymentOptionSix) 设置合同选项名称6
 * @method string getPaymentName() 获取付款方式名称
 * @method void setPaymentName(string $PaymentName) 设置付款方式名称
 * @method string getPaymentOptionSeven() 获取合同选项名称7
 * @method void setPaymentOptionSeven(string $PaymentOptionSeven) 设置合同选项名称7
 * @method string getPaymentOptionOther() 获取合同选项名称8
 * @method void setPaymentOptionOther(string $PaymentOptionOther) 设置合同选项名称8
 * @method string getPaymentOptionTwo() 获取合同选项名称2
 * @method void setPaymentOptionTwo(string $PaymentOptionTwo) 设置合同选项名称2
 * @method string getPaymentOptionOne() 获取合同选项名称1
 * @method void setPaymentOptionOne(string $PaymentOptionOne) 设置合同选项名称1
 * @method string getPaymentDiscountFee() 获取是否开启智能扣率（1是，0否）
 * @method void setPaymentDiscountFee(string $PaymentDiscountFee) 设置是否开启智能扣率（1是，0否）
 * @method string getPaymentType() 获取支持的交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
 * @method void setPaymentType(string $PaymentType) 设置支持的交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
 * @method string getPaymentOptionFive() 获取合同选项名称5
 * @method void setPaymentOptionFive(string $PaymentOptionFive) 设置合同选项名称5
 * @method string getPaymentOptionNine() 获取合同选项名称9
 * @method void setPaymentOptionNine(string $PaymentOptionNine) 设置合同选项名称9
 * @method string getPaymentId() 获取支付方式编号
 * @method void setPaymentId(string $PaymentId) 设置支付方式编号
 * @method string getPaymentOptionThree() 获取合同选项名称3
 * @method void setPaymentOptionThree(string $PaymentOptionThree) 设置合同选项名称3
 * @method string getPaymentInternalName() 获取付款方式名称（内部名称）
 * @method void setPaymentInternalName(string $PaymentInternalName) 设置付款方式名称（内部名称）
 * @method string getPaymentOptionFour() 获取合同选项名称4
 * @method void setPaymentOptionFour(string $PaymentOptionFour) 设置合同选项名称4
 * @method string getPaymentOptionTen() 获取合同选项名称10
 * @method void setPaymentOptionTen(string $PaymentOptionTen) 设置合同选项名称10
 */
class PayDataResult extends AbstractModel
{
    /**
     * @var string 支付标签（唯一性）
     */
    public $PaymentTag;

    /**
     * @var string 添加合同时需要隐藏的选项（多个以小写逗号分开）
     */
    public $PaymentOptionHide;

    /**
     * @var string 支付方式图片url路径
     */
    public $PaymentIcon;

    /**
     * @var string 合同选项名称6
     */
    public $PaymentOptionSix;

    /**
     * @var string 付款方式名称
     */
    public $PaymentName;

    /**
     * @var string 合同选项名称7
     */
    public $PaymentOptionSeven;

    /**
     * @var string 合同选项名称8
     */
    public $PaymentOptionOther;

    /**
     * @var string 合同选项名称2
     */
    public $PaymentOptionTwo;

    /**
     * @var string 合同选项名称1
     */
    public $PaymentOptionOne;

    /**
     * @var string 是否开启智能扣率（1是，0否）
     */
    public $PaymentDiscountFee;

    /**
     * @var string 支持的交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
     */
    public $PaymentType;

    /**
     * @var string 合同选项名称5
     */
    public $PaymentOptionFive;

    /**
     * @var string 合同选项名称9
     */
    public $PaymentOptionNine;

    /**
     * @var string 支付方式编号
     */
    public $PaymentId;

    /**
     * @var string 合同选项名称3
     */
    public $PaymentOptionThree;

    /**
     * @var string 付款方式名称（内部名称）
     */
    public $PaymentInternalName;

    /**
     * @var string 合同选项名称4
     */
    public $PaymentOptionFour;

    /**
     * @var string 合同选项名称10
     */
    public $PaymentOptionTen;

    /**
     * @param string $PaymentTag 支付标签（唯一性）
     * @param string $PaymentOptionHide 添加合同时需要隐藏的选项（多个以小写逗号分开）
     * @param string $PaymentIcon 支付方式图片url路径
     * @param string $PaymentOptionSix 合同选项名称6
     * @param string $PaymentName 付款方式名称
     * @param string $PaymentOptionSeven 合同选项名称7
     * @param string $PaymentOptionOther 合同选项名称8
     * @param string $PaymentOptionTwo 合同选项名称2
     * @param string $PaymentOptionOne 合同选项名称1
     * @param string $PaymentDiscountFee 是否开启智能扣率（1是，0否）
     * @param string $PaymentType 支持的交易类型（多个以小写逗号分开，0现金，1刷卡，2主扫，3被扫，4JSPAY，5预授权）
     * @param string $PaymentOptionFive 合同选项名称5
     * @param string $PaymentOptionNine 合同选项名称9
     * @param string $PaymentId 支付方式编号
     * @param string $PaymentOptionThree 合同选项名称3
     * @param string $PaymentInternalName 付款方式名称（内部名称）
     * @param string $PaymentOptionFour 合同选项名称4
     * @param string $PaymentOptionTen 合同选项名称10
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
        if (array_key_exists("PaymentTag",$param) and $param["PaymentTag"] !== null) {
            $this->PaymentTag = $param["PaymentTag"];
        }

        if (array_key_exists("PaymentOptionHide",$param) and $param["PaymentOptionHide"] !== null) {
            $this->PaymentOptionHide = $param["PaymentOptionHide"];
        }

        if (array_key_exists("PaymentIcon",$param) and $param["PaymentIcon"] !== null) {
            $this->PaymentIcon = $param["PaymentIcon"];
        }

        if (array_key_exists("PaymentOptionSix",$param) and $param["PaymentOptionSix"] !== null) {
            $this->PaymentOptionSix = $param["PaymentOptionSix"];
        }

        if (array_key_exists("PaymentName",$param) and $param["PaymentName"] !== null) {
            $this->PaymentName = $param["PaymentName"];
        }

        if (array_key_exists("PaymentOptionSeven",$param) and $param["PaymentOptionSeven"] !== null) {
            $this->PaymentOptionSeven = $param["PaymentOptionSeven"];
        }

        if (array_key_exists("PaymentOptionOther",$param) and $param["PaymentOptionOther"] !== null) {
            $this->PaymentOptionOther = $param["PaymentOptionOther"];
        }

        if (array_key_exists("PaymentOptionTwo",$param) and $param["PaymentOptionTwo"] !== null) {
            $this->PaymentOptionTwo = $param["PaymentOptionTwo"];
        }

        if (array_key_exists("PaymentOptionOne",$param) and $param["PaymentOptionOne"] !== null) {
            $this->PaymentOptionOne = $param["PaymentOptionOne"];
        }

        if (array_key_exists("PaymentDiscountFee",$param) and $param["PaymentDiscountFee"] !== null) {
            $this->PaymentDiscountFee = $param["PaymentDiscountFee"];
        }

        if (array_key_exists("PaymentType",$param) and $param["PaymentType"] !== null) {
            $this->PaymentType = $param["PaymentType"];
        }

        if (array_key_exists("PaymentOptionFive",$param) and $param["PaymentOptionFive"] !== null) {
            $this->PaymentOptionFive = $param["PaymentOptionFive"];
        }

        if (array_key_exists("PaymentOptionNine",$param) and $param["PaymentOptionNine"] !== null) {
            $this->PaymentOptionNine = $param["PaymentOptionNine"];
        }

        if (array_key_exists("PaymentId",$param) and $param["PaymentId"] !== null) {
            $this->PaymentId = $param["PaymentId"];
        }

        if (array_key_exists("PaymentOptionThree",$param) and $param["PaymentOptionThree"] !== null) {
            $this->PaymentOptionThree = $param["PaymentOptionThree"];
        }

        if (array_key_exists("PaymentInternalName",$param) and $param["PaymentInternalName"] !== null) {
            $this->PaymentInternalName = $param["PaymentInternalName"];
        }

        if (array_key_exists("PaymentOptionFour",$param) and $param["PaymentOptionFour"] !== null) {
            $this->PaymentOptionFour = $param["PaymentOptionFour"];
        }

        if (array_key_exists("PaymentOptionTen",$param) and $param["PaymentOptionTen"] !== null) {
            $this->PaymentOptionTen = $param["PaymentOptionTen"];
        }
    }
}
