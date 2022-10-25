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
 * BindOpenBankProfitSharePayee请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户号。代理商/集团ID
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户号。代理商/集团ID
 * @method string getAccountNo() 获取收款人银行账户号。唯一
 * @method void setAccountNo(string $AccountNo) 设置收款人银行账户号。唯一
 * @method string getChannelName() 获取渠道名称
通联国际: CNP
 * @method void setChannelName(string $ChannelName) 设置渠道名称
通联国际: CNP
 * @method string getChannelSubMerchantId() 获取渠道子商户号。商户ID
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户号。商户ID
 * @method string getNotifyUrl() 获取绑定状态通知地址,若为空，即不回调通知。
 * @method void setNotifyUrl(string $NotifyUrl) 设置绑定状态通知地址,若为空，即不回调通知。
 * @method OpenBankProfitSharePayeeInfo getProfitSharePayeeInfo() 获取分账收款人信息。通联国际必选
 * @method void setProfitSharePayeeInfo(OpenBankProfitSharePayeeInfo $ProfitSharePayeeInfo) 设置分账收款人信息。通联国际必选
 * @method string getExternalProfitSharingData() 获取第三方拓展信息。若无特殊说明，可为空
 * @method void setExternalProfitSharingData(string $ExternalProfitSharingData) 设置第三方拓展信息。若无特殊说明，可为空
 * @method string getEnvironment() 获取接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 * @method void setEnvironment(string $Environment) 设置接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
 */
class BindOpenBankProfitSharePayeeRequest extends AbstractModel
{
    /**
     * @var string 渠道商户号。代理商/集团ID
     */
    public $ChannelMerchantId;

    /**
     * @var string 收款人银行账户号。唯一
     */
    public $AccountNo;

    /**
     * @var string 渠道名称
通联国际: CNP
     */
    public $ChannelName;

    /**
     * @var string 渠道子商户号。商户ID
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 绑定状态通知地址,若为空，即不回调通知。
     */
    public $NotifyUrl;

    /**
     * @var OpenBankProfitSharePayeeInfo 分账收款人信息。通联国际必选
     */
    public $ProfitSharePayeeInfo;

    /**
     * @var string 第三方拓展信息。若无特殊说明，可为空
     */
    public $ExternalProfitSharingData;

    /**
     * @var string 接入环境。沙箱环境填 sandbox。缺省默认调用生产环境
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户号。代理商/集团ID
     * @param string $AccountNo 收款人银行账户号。唯一
     * @param string $ChannelName 渠道名称
通联国际: CNP
     * @param string $ChannelSubMerchantId 渠道子商户号。商户ID
     * @param string $NotifyUrl 绑定状态通知地址,若为空，即不回调通知。
     * @param OpenBankProfitSharePayeeInfo $ProfitSharePayeeInfo 分账收款人信息。通联国际必选
     * @param string $ExternalProfitSharingData 第三方拓展信息。若无特殊说明，可为空
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

        if (array_key_exists("AccountNo",$param) and $param["AccountNo"] !== null) {
            $this->AccountNo = $param["AccountNo"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ProfitSharePayeeInfo",$param) and $param["ProfitSharePayeeInfo"] !== null) {
            $this->ProfitSharePayeeInfo = new OpenBankProfitSharePayeeInfo();
            $this->ProfitSharePayeeInfo->deserialize($param["ProfitSharePayeeInfo"]);
        }

        if (array_key_exists("ExternalProfitSharingData",$param) and $param["ExternalProfitSharingData"] !== null) {
            $this->ExternalProfitSharingData = $param["ExternalProfitSharingData"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
