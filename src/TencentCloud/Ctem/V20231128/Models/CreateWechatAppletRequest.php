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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWechatApplet请求参数结构体
 *
 * @method integer getCustomerId() 获取企业Id
 * @method void setCustomerId(integer $CustomerId) 设置企业Id
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getLogo() 获取图片地址
 * @method void setLogo(string $Logo) 设置图片地址
 * @method string getAccountId() 获取账号
 * @method void setAccountId(string $AccountId) 设置账号
 * @method string getQrCode() 获取二维码
 * @method void setQrCode(string $QrCode) 设置二维码
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getEnterpriseUid() 获取子公司
 * @method void setEnterpriseUid(string $EnterpriseUid) 设置子公司
 * @method string getAccountAppid() 获取账号Appid
 * @method void setAccountAppid(string $AccountAppid) 设置账号Appid
 * @method string getRecordSubject() 获取认证主体
 * @method void setRecordSubject(string $RecordSubject) 设置认证主体
 */
class CreateWechatAppletRequest extends AbstractModel
{
    /**
     * @var integer 企业Id
     */
    public $CustomerId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 图片地址
     */
    public $Logo;

    /**
     * @var string 账号
     */
    public $AccountId;

    /**
     * @var string 二维码
     */
    public $QrCode;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 子公司
     */
    public $EnterpriseUid;

    /**
     * @var string 账号Appid
     */
    public $AccountAppid;

    /**
     * @var string 认证主体
     */
    public $RecordSubject;

    /**
     * @param integer $CustomerId 企业Id
     * @param string $Name 名称
     * @param string $Logo 图片地址
     * @param string $AccountId 账号
     * @param string $QrCode 二维码
     * @param string $Description 描述
     * @param string $EnterpriseUid 子公司
     * @param string $AccountAppid 账号Appid
     * @param string $RecordSubject 认证主体
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("QrCode",$param) and $param["QrCode"] !== null) {
            $this->QrCode = $param["QrCode"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnterpriseUid",$param) and $param["EnterpriseUid"] !== null) {
            $this->EnterpriseUid = $param["EnterpriseUid"];
        }

        if (array_key_exists("AccountAppid",$param) and $param["AccountAppid"] !== null) {
            $this->AccountAppid = $param["AccountAppid"];
        }

        if (array_key_exists("RecordSubject",$param) and $param["RecordSubject"] !== null) {
            $this->RecordSubject = $param["RecordSubject"];
        }
    }
}
