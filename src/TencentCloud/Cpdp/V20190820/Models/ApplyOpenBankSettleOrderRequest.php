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
 * ApplyOpenBankSettleOrder请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号
 * @method string getOutSettleId() 获取外部结算流水号
 * @method void setOutSettleId(string $OutSettleId) 设置外部结算流水号
 * @method integer getSettleAmount() 获取结算金额
 * @method void setSettleAmount(integer $SettleAmount) 设置结算金额
 * @method string getChannelName() 获取渠道名称。详见附录-枚举类型-ChannelName。
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-枚举类型-ChannelName。
 * @method string getChannelSubMerchantId() 获取渠道子商户号
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号
 * @method string getSettleDetail() 获取结算备注
 * @method void setSettleDetail(string $SettleDetail) 设置结算备注
 * @method string getNotifyUrl() 获取结算成功回调地址
 * @method void setNotifyUrl(string $NotifyUrl) 设置结算成功回调地址
 * @method string getRemark() 获取附言
 * @method void setRemark(string $Remark) 设置附言
 * @method string getExternalSettleData() 获取结算第三方渠道扩展信息。通联国际必选
 * @method void setExternalSettleData(string $ExternalSettleData) 设置结算第三方渠道扩展信息。通联国际必选
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 */
class ApplyOpenBankSettleOrderRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部结算流水号
     */
    public $OutSettleId;

    /**
     * @var integer 结算金额
     */
    public $SettleAmount;

    /**
     * @var string 渠道名称。详见附录-枚举类型-ChannelName。
     */
    public $ChannelName;

    /**
     * @var string 渠道子商户号
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 结算备注
     */
    public $SettleDetail;

    /**
     * @var string 结算成功回调地址
     */
    public $NotifyUrl;

    /**
     * @var string 附言
     */
    public $Remark;

    /**
     * @var string 结算第三方渠道扩展信息。通联国际必选
     */
    public $ExternalSettleData;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号
     * @param string $OutSettleId 外部结算流水号
     * @param integer $SettleAmount 结算金额
     * @param string $ChannelName 渠道名称。详见附录-枚举类型-ChannelName。
     * @param string $ChannelSubMerchantId 渠道子商户号
     * @param string $SettleDetail 结算备注
     * @param string $NotifyUrl 结算成功回调地址
     * @param string $Remark 附言
     * @param string $ExternalSettleData 结算第三方渠道扩展信息。通联国际必选
     * @param string $Environment 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
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
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("OutSettleId",$param) and $param["OutSettleId"] !== null) {
            $this->OutSettleId = $param["OutSettleId"];
        }

        if (array_key_exists("SettleAmount",$param) and $param["SettleAmount"] !== null) {
            $this->SettleAmount = $param["SettleAmount"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("SettleDetail",$param) and $param["SettleDetail"] !== null) {
            $this->SettleDetail = $param["SettleDetail"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ExternalSettleData",$param) and $param["ExternalSettleData"] !== null) {
            $this->ExternalSettleData = $param["ExternalSettleData"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
