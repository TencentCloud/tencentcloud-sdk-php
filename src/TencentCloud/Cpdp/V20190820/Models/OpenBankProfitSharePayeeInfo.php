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
 * 分账收款人信息
 *
 * @method string getAccountName() 获取收款人账户名称
 * @method void setAccountName(string $AccountName) 设置收款人账户名称
 * @method string getBankName() 获取银行名称
可大体识别银行就行
 * @method void setBankName(string $BankName) 设置银行名称
可大体识别银行就行
 * @method string getCurrency() 获取账户货币
 * @method void setCurrency(string $Currency) 设置账户货币
 * @method string getNature() 获取账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
 * @method void setNature(string $Nature) 设置账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
 * @method string getCountry() 获取账户地区/受益人所在国家。参考附录“国家代码”表——“代码”字段
 * @method void setCountry(string $Country) 设置账户地区/受益人所在国家。参考附录“国家代码”表——“代码”字段
 * @method string getDepositCountry() 获取账户开户所在国家
参考附录“国家代码”表——“代码”字段
 * @method void setDepositCountry(string $DepositCountry) 设置账户开户所在国家
参考附录“国家代码”表——“代码”字段
 * @method string getExpireDate() 获取合作有效期
yyyy-MM-dd
 * @method void setExpireDate(string $ExpireDate) 设置合作有效期
yyyy-MM-dd
 * @method string getFlag() 获取0:个人(对私) 1:公司(对公)
 * @method void setFlag(string $Flag) 设置0:个人(对私) 1:公司(对公)
 * @method string getBankAddress() 获取开户行地址
账户地区非中国必填，【账户名+开户行地址不可超过114个字符（只允许【英文字母数字空格.,/-()'】），否则可能导致境外银行付款失败】
 * @method void setBankAddress(string $BankAddress) 设置开户行地址
账户地区非中国必填，【账户名+开户行地址不可超过114个字符（只允许【英文字母数字空格.,/-()'】），否则可能导致境外银行付款失败】
 * @method string getAddress() 获取客户地址
非中国内地账户的客户地址不能为空
 * @method void setAddress(string $Address) 设置客户地址
非中国内地账户的客户地址不能为空
 * @method string getIsOSA() 获取账户属性
账户开户所在国家为中国则必填。
1-离岸账户 0-在岸账户
 * @method void setIsOSA(string $IsOSA) 设置账户属性
账户开户所在国家为中国则必填。
1-离岸账户 0-在岸账户
 * @method string getProvince() 获取账户省份
参考附录“地区代码”
 * @method void setProvince(string $Province) 设置账户省份
参考附录“地区代码”
 * @method string getCity() 获取账户城市
参考附录“地区代码
 * @method void setCity(string $City) 设置账户城市
参考附录“地区代码
 * @method string getLegalIdNo() 获取证件号/统一信用证代码
如果country与depositcountry字段都是CHN时，必填
对公账户填统一信用证代码，对私账户填身份证号码
离岸账户非必填
 * @method void setLegalIdNo(string $LegalIdNo) 设置证件号/统一信用证代码
如果country与depositcountry字段都是CHN时，必填
对公账户填统一信用证代码，对私账户填身份证号码
离岸账户非必填
 * @method string getTelephone() 获取手机号。
账户地区是日本则必填
 * @method void setTelephone(string $Telephone) 设置手机号。
账户地区是日本则必填
 * @method string getBicCode() 获取参考接口说明。
 * @method void setBicCode(string $BicCode) 设置参考接口说明。
 * @method string getSwiftCode() 获取参考接口说明。
 * @method void setSwiftCode(string $SwiftCode) 设置参考接口说明。
 * @method string getCnaps() 获取大额支付行号/支付行号
参考接口说明。境外（大额支付行号）参考附录【大额行号】，境内（支付行号）参考附录【支付行号】
 * @method void setCnaps(string $Cnaps) 设置大额支付行号/支付行号
参考接口说明。境外（大额支付行号）参考附录【大额行号】，境内（支付行号）参考附录【支付行号】
 * @method string getTransferBankNo() 获取中转行号，参考接口说明。
 * @method void setTransferBankNo(string $TransferBankNo) 设置中转行号，参考接口说明。
 * @method string getFid() 获取关联附件。上传的文件ID
 * @method void setFid(string $Fid) 设置关联附件。上传的文件ID
 */
class OpenBankProfitSharePayeeInfo extends AbstractModel
{
    /**
     * @var string 收款人账户名称
     */
    public $AccountName;

    /**
     * @var string 银行名称
可大体识别银行就行
     */
    public $BankName;

    /**
     * @var string 账户货币
     */
    public $Currency;

    /**
     * @var string 账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
     */
    public $Nature;

    /**
     * @var string 账户地区/受益人所在国家。参考附录“国家代码”表——“代码”字段
     */
    public $Country;

    /**
     * @var string 账户开户所在国家
参考附录“国家代码”表——“代码”字段
     */
    public $DepositCountry;

    /**
     * @var string 合作有效期
yyyy-MM-dd
     */
    public $ExpireDate;

    /**
     * @var string 0:个人(对私) 1:公司(对公)
     */
    public $Flag;

    /**
     * @var string 开户行地址
账户地区非中国必填，【账户名+开户行地址不可超过114个字符（只允许【英文字母数字空格.,/-()'】），否则可能导致境外银行付款失败】
     */
    public $BankAddress;

    /**
     * @var string 客户地址
非中国内地账户的客户地址不能为空
     */
    public $Address;

    /**
     * @var string 账户属性
账户开户所在国家为中国则必填。
1-离岸账户 0-在岸账户
     */
    public $IsOSA;

    /**
     * @var string 账户省份
参考附录“地区代码”
     */
    public $Province;

    /**
     * @var string 账户城市
参考附录“地区代码
     */
    public $City;

    /**
     * @var string 证件号/统一信用证代码
如果country与depositcountry字段都是CHN时，必填
对公账户填统一信用证代码，对私账户填身份证号码
离岸账户非必填
     */
    public $LegalIdNo;

    /**
     * @var string 手机号。
账户地区是日本则必填
     */
    public $Telephone;

    /**
     * @var string 参考接口说明。
     */
    public $BicCode;

    /**
     * @var string 参考接口说明。
     */
    public $SwiftCode;

    /**
     * @var string 大额支付行号/支付行号
参考接口说明。境外（大额支付行号）参考附录【大额行号】，境内（支付行号）参考附录【支付行号】
     */
    public $Cnaps;

    /**
     * @var string 中转行号，参考接口说明。
     */
    public $TransferBankNo;

    /**
     * @var string 关联附件。上传的文件ID
     */
    public $Fid;

    /**
     * @param string $AccountName 收款人账户名称
     * @param string $BankName 银行名称
可大体识别银行就行
     * @param string $Currency 账户货币
     * @param string $Nature 账户类型。
00:借记卡
01:存折 
02:信用卡 
03:准贷记卡 
04:预付卡费 
05:境外卡
     * @param string $Country 账户地区/受益人所在国家。参考附录“国家代码”表——“代码”字段
     * @param string $DepositCountry 账户开户所在国家
参考附录“国家代码”表——“代码”字段
     * @param string $ExpireDate 合作有效期
yyyy-MM-dd
     * @param string $Flag 0:个人(对私) 1:公司(对公)
     * @param string $BankAddress 开户行地址
账户地区非中国必填，【账户名+开户行地址不可超过114个字符（只允许【英文字母数字空格.,/-()'】），否则可能导致境外银行付款失败】
     * @param string $Address 客户地址
非中国内地账户的客户地址不能为空
     * @param string $IsOSA 账户属性
账户开户所在国家为中国则必填。
1-离岸账户 0-在岸账户
     * @param string $Province 账户省份
参考附录“地区代码”
     * @param string $City 账户城市
参考附录“地区代码
     * @param string $LegalIdNo 证件号/统一信用证代码
如果country与depositcountry字段都是CHN时，必填
对公账户填统一信用证代码，对私账户填身份证号码
离岸账户非必填
     * @param string $Telephone 手机号。
账户地区是日本则必填
     * @param string $BicCode 参考接口说明。
     * @param string $SwiftCode 参考接口说明。
     * @param string $Cnaps 大额支付行号/支付行号
参考接口说明。境外（大额支付行号）参考附录【大额行号】，境内（支付行号）参考附录【支付行号】
     * @param string $TransferBankNo 中转行号，参考接口说明。
     * @param string $Fid 关联附件。上传的文件ID
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("BankName",$param) and $param["BankName"] !== null) {
            $this->BankName = $param["BankName"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Nature",$param) and $param["Nature"] !== null) {
            $this->Nature = $param["Nature"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("DepositCountry",$param) and $param["DepositCountry"] !== null) {
            $this->DepositCountry = $param["DepositCountry"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("BankAddress",$param) and $param["BankAddress"] !== null) {
            $this->BankAddress = $param["BankAddress"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("IsOSA",$param) and $param["IsOSA"] !== null) {
            $this->IsOSA = $param["IsOSA"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("LegalIdNo",$param) and $param["LegalIdNo"] !== null) {
            $this->LegalIdNo = $param["LegalIdNo"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("BicCode",$param) and $param["BicCode"] !== null) {
            $this->BicCode = $param["BicCode"];
        }

        if (array_key_exists("SwiftCode",$param) and $param["SwiftCode"] !== null) {
            $this->SwiftCode = $param["SwiftCode"];
        }

        if (array_key_exists("Cnaps",$param) and $param["Cnaps"] !== null) {
            $this->Cnaps = $param["Cnaps"];
        }

        if (array_key_exists("TransferBankNo",$param) and $param["TransferBankNo"] !== null) {
            $this->TransferBankNo = $param["TransferBankNo"];
        }

        if (array_key_exists("Fid",$param) and $param["Fid"] !== null) {
            $this->Fid = $param["Fid"];
        }
    }
}
