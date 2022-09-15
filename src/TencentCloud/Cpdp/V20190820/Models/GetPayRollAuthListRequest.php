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
 * GetPayRollAuthList请求参数结构体
 *
 * @method string getOpenId() 获取用户在商户对应appid下的唯一标识
 * @method void setOpenId(string $OpenId) 设置用户在商户对应appid下的唯一标识
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method string getAuthDate() 获取核身日期，一次只能查询一天，最久可查询90天内的记录，格式为YYYY-MM-DD
 * @method void setAuthDate(string $AuthDate) 设置核身日期，一次只能查询一天，最久可查询90天内的记录，格式为YYYY-MM-DD
 * @method integer getOffset() 获取非负整数，表示该次请求资源的起始位置，从0开始计数
 * @method void setOffset(integer $Offset) 设置非负整数，表示该次请求资源的起始位置，从0开始计数
 * @method integer getLimit() 获取非0非负的整数，该次请求可返回的最大资源条数，默认值为10，最大支持10条
 * @method void setLimit(integer $Limit) 设置非0非负的整数，该次请求可返回的最大资源条数，默认值为10，最大支持10条
 * @method string getWechatAppId() 获取是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatAppId(string $WechatAppId) 设置是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method string getWechatSubAppId() 获取特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method void setWechatSubAppId(string $WechatSubAppId) 设置特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
 * @method string getAuthStatus() 获取核身状态，列表查询仅提供成功状态的核身记录查询，故此字段固定AUTHENTICATE_SUCCESS即可
 * @method void setAuthStatus(string $AuthStatus) 设置核身状态，列表查询仅提供成功状态的核身记录查询，故此字段固定AUTHENTICATE_SUCCESS即可
 */
class GetPayRollAuthListRequest extends AbstractModel
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
     * @var string 核身日期，一次只能查询一天，最久可查询90天内的记录，格式为YYYY-MM-DD
     */
    public $AuthDate;

    /**
     * @var integer 非负整数，表示该次请求资源的起始位置，从0开始计数
     */
    public $Offset;

    /**
     * @var integer 非0非负的整数，该次请求可返回的最大资源条数，默认值为10，最大支持10条
     */
    public $Limit;

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
     * @var string 核身状态，列表查询仅提供成功状态的核身记录查询，故此字段固定AUTHENTICATE_SUCCESS即可
     */
    public $AuthStatus;

    /**
     * @param string $OpenId 用户在商户对应appid下的唯一标识
     * @param string $SubMerchantId 微信服务商下特约商户的商户号，由微信支付生成并下发
     * @param string $AuthDate 核身日期，一次只能查询一天，最久可查询90天内的记录，格式为YYYY-MM-DD
     * @param integer $Offset 非负整数，表示该次请求资源的起始位置，从0开始计数
     * @param integer $Limit 非0非负的整数，该次请求可返回的最大资源条数，默认值为10，最大支持10条
     * @param string $WechatAppId 是服务商在微信申请公众号/小程序或移动应用成功后分配的账号ID（与服务商主体一致）
当输入服务商Appid时，会校验其与服务商商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
     * @param string $WechatSubAppId 特约商户在微信申请公众号/小程序或移动应用成功后分配的账号ID（与特约商户主体一致）
当输入特约商户Appid时，会校验其与特约商户号的绑定关系。服务商APPID和与特约商户APPID至少输入一个，且必须要有拉起领薪卡小程序时使用的APPID
     * @param string $AuthStatus 核身状态，列表查询仅提供成功状态的核身记录查询，故此字段固定AUTHENTICATE_SUCCESS即可
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

        if (array_key_exists("AuthDate",$param) and $param["AuthDate"] !== null) {
            $this->AuthDate = $param["AuthDate"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("WechatAppId",$param) and $param["WechatAppId"] !== null) {
            $this->WechatAppId = $param["WechatAppId"];
        }

        if (array_key_exists("WechatSubAppId",$param) and $param["WechatSubAppId"] !== null) {
            $this->WechatSubAppId = $param["WechatSubAppId"];
        }

        if (array_key_exists("AuthStatus",$param) and $param["AuthStatus"] !== null) {
            $this->AuthStatus = $param["AuthStatus"];
        }
    }
}
