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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateH5FaceIdUrl请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息; 必选
 * @method void setCaller(Caller $Caller) 设置调用方信息; 必选
 * @method string getWbAppId() 获取慧眼业务ID; 不填写时后台使用Caller反查
 * @method void setWbAppId(string $WbAppId) 设置慧眼业务ID; 不填写时后台使用Caller反查
 * @method string getName() 获取姓名; 可选(未通过实名认证的用户必选)
 * @method void setName(string $Name) 设置姓名; 可选(未通过实名认证的用户必选)
 * @method string getIdCardType() 获取用户证件类型; 可选; 默认ID_CARD:中国居民身份证
 * @method void setIdCardType(string $IdCardType) 设置用户证件类型; 可选; 默认ID_CARD:中国居民身份证
 * @method string getIdCardNumber() 获取用户证件号; 可选(未通过实名认证的用户必选)
 * @method void setIdCardNumber(string $IdCardNumber) 设置用户证件号; 可选(未通过实名认证的用户必选)
 * @method string getJumpUrl() 获取H5人脸核身完成后回调的第三方Url; 可选; 不需要做Encode, 跳转的参数: ?code=XX&orderNo=XX&liveRate=xx, code=0表示成功,orderNo为订单号,liveRate为百分制活体检测得分
 * @method void setJumpUrl(string $JumpUrl) 设置H5人脸核身完成后回调的第三方Url; 可选; 不需要做Encode, 跳转的参数: ?code=XX&orderNo=XX&liveRate=xx, code=0表示成功,orderNo为订单号,liveRate为百分制活体检测得分
 * @method string getJumpType() 获取参数值为"1":直接跳转到url回调地址; 可选; 其他值:跳转提供的结果页面
 * @method void setJumpType(string $JumpType) 设置参数值为"1":直接跳转到url回调地址; 可选; 其他值:跳转提供的结果页面
 * @method string getOpenFrom() 获取browser:表示在浏览器启动刷脸, app:表示在App里启动刷脸,默认值为browser; 可选
 * @method void setOpenFrom(string $OpenFrom) 设置browser:表示在浏览器启动刷脸, app:表示在App里启动刷脸,默认值为browser; 可选
 * @method string getRedirectType() 获取跳转类型; 可选; 参数值为"1"时,刷脸页面使用replace方式跳转,不在浏览器history中留下记录;不传或其他值则正常跳转
 * @method void setRedirectType(string $RedirectType) 设置跳转类型; 可选; 参数值为"1"时,刷脸页面使用replace方式跳转,不在浏览器history中留下记录;不传或其他值则正常跳转
 */
class CreateH5FaceIdUrlRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息; 必选
     */
    public $Caller;

    /**
     * @var string 慧眼业务ID; 不填写时后台使用Caller反查
     */
    public $WbAppId;

    /**
     * @var string 姓名; 可选(未通过实名认证的用户必选)
     */
    public $Name;

    /**
     * @var string 用户证件类型; 可选; 默认ID_CARD:中国居民身份证
     */
    public $IdCardType;

    /**
     * @var string 用户证件号; 可选(未通过实名认证的用户必选)
     */
    public $IdCardNumber;

    /**
     * @var string H5人脸核身完成后回调的第三方Url; 可选; 不需要做Encode, 跳转的参数: ?code=XX&orderNo=XX&liveRate=xx, code=0表示成功,orderNo为订单号,liveRate为百分制活体检测得分
     */
    public $JumpUrl;

    /**
     * @var string 参数值为"1":直接跳转到url回调地址; 可选; 其他值:跳转提供的结果页面
     */
    public $JumpType;

    /**
     * @var string browser:表示在浏览器启动刷脸, app:表示在App里启动刷脸,默认值为browser; 可选
     */
    public $OpenFrom;

    /**
     * @var string 跳转类型; 可选; 参数值为"1"时,刷脸页面使用replace方式跳转,不在浏览器history中留下记录;不传或其他值则正常跳转
     */
    public $RedirectType;

    /**
     * @param Caller $Caller 调用方信息; 必选
     * @param string $WbAppId 慧眼业务ID; 不填写时后台使用Caller反查
     * @param string $Name 姓名; 可选(未通过实名认证的用户必选)
     * @param string $IdCardType 用户证件类型; 可选; 默认ID_CARD:中国居民身份证
     * @param string $IdCardNumber 用户证件号; 可选(未通过实名认证的用户必选)
     * @param string $JumpUrl H5人脸核身完成后回调的第三方Url; 可选; 不需要做Encode, 跳转的参数: ?code=XX&orderNo=XX&liveRate=xx, code=0表示成功,orderNo为订单号,liveRate为百分制活体检测得分
     * @param string $JumpType 参数值为"1":直接跳转到url回调地址; 可选; 其他值:跳转提供的结果页面
     * @param string $OpenFrom browser:表示在浏览器启动刷脸, app:表示在App里启动刷脸,默认值为browser; 可选
     * @param string $RedirectType 跳转类型; 可选; 参数值为"1"时,刷脸页面使用replace方式跳转,不在浏览器history中留下记录;不传或其他值则正常跳转
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("WbAppId",$param) and $param["WbAppId"] !== null) {
            $this->WbAppId = $param["WbAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("JumpType",$param) and $param["JumpType"] !== null) {
            $this->JumpType = $param["JumpType"];
        }

        if (array_key_exists("OpenFrom",$param) and $param["OpenFrom"] !== null) {
            $this->OpenFrom = $param["OpenFrom"];
        }

        if (array_key_exists("RedirectType",$param) and $param["RedirectType"] !== null) {
            $this->RedirectType = $param["RedirectType"];
        }
    }
}
