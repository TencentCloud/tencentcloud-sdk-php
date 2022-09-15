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
 * CreatePayRollPreOrderWithAuth请求参数结构体
 *
 * @method string getOpenId() 获取用户在商户对应appid下的唯一标识
 * @method void setOpenId(string $OpenId) 设置用户在商户对应appid下的唯一标识
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method string getAuthNumber() 获取商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method void setAuthNumber(string $AuthNumber) 设置商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method string getProjectName() 获取该劳务活动的项目名称
 * @method void setProjectName(string $ProjectName) 设置该劳务活动的项目名称
 * @method string getCompanyName() 获取该工人所属的用工企业
 * @method void setCompanyName(string $CompanyName) 设置该工人所属的用工企业
 * @method string getUserName() 获取用户实名信息，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
 * @method void setUserName(string $UserName) 设置用户实名信息，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
 * @method string getIdNo() 获取用户证件号，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
 * @method void setIdNo(string $IdNo) 设置用户证件号，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
 * @method string getEmploymentType() 获取微工卡服务仅支持用于与商户有用工关系的用户，需明确用工类型；参考值：
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
 * @method void setEmploymentType(string $EmploymentType) 设置微工卡服务仅支持用于与商户有用工关系的用户，需明确用工类型；参考值：
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
 * @method string getWechatAppId() 获取是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatAppId(string $WechatAppId) 设置是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method string getWechatSubAppId() 获取特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatSubAppId(string $WechatSubAppId) 设置特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 */
class CreatePayRollPreOrderWithAuthRequest extends AbstractModel
{
    /**
     * @var string 用户在商户对应appid下的唯一标识
     */
    public $OpenId;

    /**
     * @var string 微信服务商下特约商户的商户号，由微信支付生成并下发
     */
    public $SubMerchantId;

    /**
     * @var string 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     */
    public $AuthNumber;

    /**
     * @var string 该劳务活动的项目名称
     */
    public $ProjectName;

    /**
     * @var string 该工人所属的用工企业
     */
    public $CompanyName;

    /**
     * @var string 用户实名信息，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
     */
    public $UserName;

    /**
     * @var string 用户证件号，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
     */
    public $IdNo;

    /**
     * @var string 微工卡服务仅支持用于与商户有用工关系的用户，需明确用工类型；参考值：
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
     */
    public $EmploymentType;

    /**
     * @var string 是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
     */
    public $WechatAppId;

    /**
     * @var string 特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
     */
    public $WechatSubAppId;

    /**
     * @param string $OpenId 用户在商户对应appid下的唯一标识
     * @param string $SubMerchantId 微信服务商下特约商户的商户号，由微信支付生成并下发
     * @param string $AuthNumber 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     * @param string $ProjectName 该劳务活动的项目名称
     * @param string $CompanyName 该工人所属的用工企业
     * @param string $UserName 用户实名信息，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
     * @param string $IdNo 用户证件号，该字段需进行加密处理，加密方法详见[敏感信息加密说明](https://pay.weixin.qq.com/wiki/doc/apiv3_partner/wechatpay/wechatpay4_3.shtml)
     * @param string $EmploymentType 微工卡服务仅支持用于与商户有用工关系的用户，需明确用工类型；参考值：
LONG_TERM_EMPLOYMENT：长期用工，
SHORT_TERM_EMPLOYMENT： 短期用工，
COOPERATION_EMPLOYMENT：合作关系
     * @param string $WechatAppId 是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
     * @param string $WechatSubAppId 特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
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
        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("SubMerchantId",$param) and $param["SubMerchantId"] !== null) {
            $this->SubMerchantId = $param["SubMerchantId"];
        }

        if (array_key_exists("AuthNumber",$param) and $param["AuthNumber"] !== null) {
            $this->AuthNumber = $param["AuthNumber"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("EmploymentType",$param) and $param["EmploymentType"] !== null) {
            $this->EmploymentType = $param["EmploymentType"];
        }

        if (array_key_exists("WechatAppId",$param) and $param["WechatAppId"] !== null) {
            $this->WechatAppId = $param["WechatAppId"];
        }

        if (array_key_exists("WechatSubAppId",$param) and $param["WechatSubAppId"] !== null) {
            $this->WechatSubAppId = $param["WechatSubAppId"];
        }
    }
}
