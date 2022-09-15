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
 * GetPayRollAuth请求参数结构体
 *
 * @method string getOpenId() 获取用户在商户对应appid下的唯一标识
 * @method void setOpenId(string $OpenId) 设置用户在商户对应appid下的唯一标识
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method string getWechatAppId() 获取是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatAppId(string $WechatAppId) 设置是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method string getWechatSubAppId() 获取特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatSubAppId(string $WechatSubAppId) 设置特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 */
class GetPayRollAuthRequest extends AbstractModel
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

        if (array_key_exists("WechatAppId",$param) and $param["WechatAppId"] !== null) {
            $this->WechatAppId = $param["WechatAppId"];
        }

        if (array_key_exists("WechatSubAppId",$param) and $param["WechatSubAppId"] !== null) {
            $this->WechatSubAppId = $param["WechatSubAppId"];
        }
    }
}
