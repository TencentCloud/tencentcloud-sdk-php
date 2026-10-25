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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 产品详情
 *
 * @method string getProductId() 获取<p>产品ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品ID</p>
 * @method string getProductName() 获取<p>产品名称</p>
 * @method void setProductName(string $ProductName) 设置<p>产品名称</p>
 * @method integer getCategoryId() 获取<p>产品分组模板ID</p>
 * @method void setCategoryId(integer $CategoryId) 设置<p>产品分组模板ID</p>
 * @method string getEncryptionType() 获取<p>加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式</p>
 * @method void setEncryptionType(string $EncryptionType) 设置<p>加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式</p>
 * @method string getNetType() 获取<p>连接类型。如：<br>wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
 * @method void setNetType(string $NetType) 设置<p>连接类型。如：<br>wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
 * @method integer getDataProtocol() 获取<p>数据协议 (1 使用物模型 2 为自定义类型)</p>
 * @method void setDataProtocol(integer $DataProtocol) 设置<p>数据协议 (1 使用物模型 2 为自定义类型)</p>
 * @method string getProductDesc() 获取<p>产品描述</p>
 * @method void setProductDesc(string $ProductDesc) 设置<p>产品描述</p>
 * @method string getDevStatus() 获取<p>状态 如：all 全部, dev 开发中, audit 审核中 released 已发布</p>
 * @method void setDevStatus(string $DevStatus) 设置<p>状态 如：all 全部, dev 开发中, audit 审核中 released 已发布</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 * @method string getRegion() 获取<p>区域</p>
 * @method void setRegion(string $Region) 设置<p>区域</p>
 * @method integer getProductType() 获取<p>产品类型。如： 0 普通产品 ， 5 网关产品</p>
 * @method void setProductType(integer $ProductType) 设置<p>产品类型。如： 0 普通产品 ， 5 网关产品</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method integer getModuleId() 获取<p>产品ModuleId</p>
 * @method void setModuleId(integer $ModuleId) 设置<p>产品ModuleId</p>
 * @method string getEnableProductScript() 获取<p>是否使用脚本进行二进制转json功能 可以取值 true / false</p>
 * @method void setEnableProductScript(string $EnableProductScript) 设置<p>是否使用脚本进行二进制转json功能 可以取值 true / false</p>
 * @method integer getCreateUserId() 获取<p>创建人 UinId</p>
 * @method void setCreateUserId(integer $CreateUserId) 设置<p>创建人 UinId</p>
 * @method string getCreatorNickName() 获取<p>创建者昵称</p>
 * @method void setCreatorNickName(string $CreatorNickName) 设置<p>创建者昵称</p>
 * @method integer getBindStrategy() 获取<p>绑定策略（1：强踢；2：非强踢；0：表示无意义）</p>
 * @method void setBindStrategy(integer $BindStrategy) 设置<p>绑定策略（1：强踢；2：非强踢；0：表示无意义）</p>
 * @method integer getDeviceCount() 获取<p>设备数量</p>
 * @method void setDeviceCount(integer $DeviceCount) 设置<p>设备数量</p>
 * @method string getRate() 获取<p>平均传输速率</p>
 * @method void setRate(string $Rate) 设置<p>平均传输速率</p>
 * @method string getPeriod() 获取<p>有效期</p>
 * @method void setPeriod(string $Period) 设置<p>有效期</p>
 * @method integer getIsInterconnection() 获取<p>互联互通标识</p>
 * @method void setIsInterconnection(integer $IsInterconnection) 设置<p>互联互通标识</p>
 * @method string getUin() 获取<p>UIN</p>
 * @method void setUin(string $Uin) 设置<p>UIN</p>
 * @method integer getAppId() 获取<p>AppID</p>
 * @method void setAppId(integer $AppId) 设置<p>AppID</p>
 * @method string getPrivateCAName() 获取<p>绑定的第三方CA名称；空 = 腾讯云CA证书</p>
 * @method void setPrivateCAName(string $PrivateCAName) 设置<p>绑定的第三方CA名称；空 = 腾讯云CA证书</p>
 * @method boolean getIsPrivateCA() 获取<p>true = 第三方CA</p>
 * @method void setIsPrivateCA(boolean $IsPrivateCA) 设置<p>true = 第三方CA</p>
 * @method string getCertName() 获取<p>CA 证书名称</p>
 * @method void setCertName(string $CertName) 设置<p>CA 证书名称</p>
 * @method string getCertSN() 获取<p>证书序列号</p>
 * @method void setCertSN(string $CertSN) 设置<p>证书序列号</p>
 * @method string getIssuerName() 获取<p>颁发者</p>
 * @method void setIssuerName(string $IssuerName) 设置<p>颁发者</p>
 * @method string getSubject() 获取<p>证书主题</p>
 * @method void setSubject(string $Subject) 设置<p>证书主题</p>
 * @method integer getEffectiveTime() 获取<p>生效时间（Unix 秒）</p><p>单位：秒</p>
 * @method void setEffectiveTime(integer $EffectiveTime) 设置<p>生效时间（Unix 秒）</p><p>单位：秒</p>
 * @method integer getExpireTime() 获取<p>过期时间（Unix 秒）</p><p>单位：秒</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>过期时间（Unix 秒）</p><p>单位：秒</p>
 * @method string getCertText() 获取<p>CA 证书 PEM 全文</p>
 * @method void setCertText(string $CertText) 设置<p>CA 证书 PEM 全文</p>
 */
class ProductEntry extends AbstractModel
{
    /**
     * @var string <p>产品ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>产品名称</p>
     */
    public $ProductName;

    /**
     * @var integer <p>产品分组模板ID</p>
     */
    public $CategoryId;

    /**
     * @var string <p>加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式</p>
     */
    public $EncryptionType;

    /**
     * @var string <p>连接类型。如：<br>wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
     */
    public $NetType;

    /**
     * @var integer <p>数据协议 (1 使用物模型 2 为自定义类型)</p>
     */
    public $DataProtocol;

    /**
     * @var string <p>产品描述</p>
     */
    public $ProductDesc;

    /**
     * @var string <p>状态 如：all 全部, dev 开发中, audit 审核中 released 已发布</p>
     */
    public $DevStatus;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>区域</p>
     */
    public $Region;

    /**
     * @var integer <p>产品类型。如： 0 普通产品 ， 5 网关产品</p>
     */
    public $ProductType;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>产品ModuleId</p>
     */
    public $ModuleId;

    /**
     * @var string <p>是否使用脚本进行二进制转json功能 可以取值 true / false</p>
     */
    public $EnableProductScript;

    /**
     * @var integer <p>创建人 UinId</p>
     */
    public $CreateUserId;

    /**
     * @var string <p>创建者昵称</p>
     */
    public $CreatorNickName;

    /**
     * @var integer <p>绑定策略（1：强踢；2：非强踢；0：表示无意义）</p>
     */
    public $BindStrategy;

    /**
     * @var integer <p>设备数量</p>
     */
    public $DeviceCount;

    /**
     * @var string <p>平均传输速率</p>
     */
    public $Rate;

    /**
     * @var string <p>有效期</p>
     */
    public $Period;

    /**
     * @var integer <p>互联互通标识</p>
     */
    public $IsInterconnection;

    /**
     * @var string <p>UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>AppID</p>
     */
    public $AppId;

    /**
     * @var string <p>绑定的第三方CA名称；空 = 腾讯云CA证书</p>
     */
    public $PrivateCAName;

    /**
     * @var boolean <p>true = 第三方CA</p>
     */
    public $IsPrivateCA;

    /**
     * @var string <p>CA 证书名称</p>
     */
    public $CertName;

    /**
     * @var string <p>证书序列号</p>
     */
    public $CertSN;

    /**
     * @var string <p>颁发者</p>
     */
    public $IssuerName;

    /**
     * @var string <p>证书主题</p>
     */
    public $Subject;

    /**
     * @var integer <p>生效时间（Unix 秒）</p><p>单位：秒</p>
     */
    public $EffectiveTime;

    /**
     * @var integer <p>过期时间（Unix 秒）</p><p>单位：秒</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>CA 证书 PEM 全文</p>
     */
    public $CertText;

    /**
     * @param string $ProductId <p>产品ID</p>
     * @param string $ProductName <p>产品名称</p>
     * @param integer $CategoryId <p>产品分组模板ID</p>
     * @param string $EncryptionType <p>加密类型。1表示证书认证，2表示密钥认证，21表示TID认证-SE方式，22表示TID认证-软加固方式</p>
     * @param string $NetType <p>连接类型。如：<br>wifi、wifi-ble、cellular、5g、lorawan、ble、ethernet、wifi-ethernet、else、sub_zigbee、sub_ble、sub_433mhz、sub_else、sub_blemesh</p>
     * @param integer $DataProtocol <p>数据协议 (1 使用物模型 2 为自定义类型)</p>
     * @param string $ProductDesc <p>产品描述</p>
     * @param string $DevStatus <p>状态 如：all 全部, dev 开发中, audit 审核中 released 已发布</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
     * @param string $Region <p>区域</p>
     * @param integer $ProductType <p>产品类型。如： 0 普通产品 ， 5 网关产品</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param integer $ModuleId <p>产品ModuleId</p>
     * @param string $EnableProductScript <p>是否使用脚本进行二进制转json功能 可以取值 true / false</p>
     * @param integer $CreateUserId <p>创建人 UinId</p>
     * @param string $CreatorNickName <p>创建者昵称</p>
     * @param integer $BindStrategy <p>绑定策略（1：强踢；2：非强踢；0：表示无意义）</p>
     * @param integer $DeviceCount <p>设备数量</p>
     * @param string $Rate <p>平均传输速率</p>
     * @param string $Period <p>有效期</p>
     * @param integer $IsInterconnection <p>互联互通标识</p>
     * @param string $Uin <p>UIN</p>
     * @param integer $AppId <p>AppID</p>
     * @param string $PrivateCAName <p>绑定的第三方CA名称；空 = 腾讯云CA证书</p>
     * @param boolean $IsPrivateCA <p>true = 第三方CA</p>
     * @param string $CertName <p>CA 证书名称</p>
     * @param string $CertSN <p>证书序列号</p>
     * @param string $IssuerName <p>颁发者</p>
     * @param string $Subject <p>证书主题</p>
     * @param integer $EffectiveTime <p>生效时间（Unix 秒）</p><p>单位：秒</p>
     * @param integer $ExpireTime <p>过期时间（Unix 秒）</p><p>单位：秒</p>
     * @param string $CertText <p>CA 证书 PEM 全文</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("EncryptionType",$param) and $param["EncryptionType"] !== null) {
            $this->EncryptionType = $param["EncryptionType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("DataProtocol",$param) and $param["DataProtocol"] !== null) {
            $this->DataProtocol = $param["DataProtocol"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("DevStatus",$param) and $param["DevStatus"] !== null) {
            $this->DevStatus = $param["DevStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("EnableProductScript",$param) and $param["EnableProductScript"] !== null) {
            $this->EnableProductScript = $param["EnableProductScript"];
        }

        if (array_key_exists("CreateUserId",$param) and $param["CreateUserId"] !== null) {
            $this->CreateUserId = $param["CreateUserId"];
        }

        if (array_key_exists("CreatorNickName",$param) and $param["CreatorNickName"] !== null) {
            $this->CreatorNickName = $param["CreatorNickName"];
        }

        if (array_key_exists("BindStrategy",$param) and $param["BindStrategy"] !== null) {
            $this->BindStrategy = $param["BindStrategy"];
        }

        if (array_key_exists("DeviceCount",$param) and $param["DeviceCount"] !== null) {
            $this->DeviceCount = $param["DeviceCount"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("IsInterconnection",$param) and $param["IsInterconnection"] !== null) {
            $this->IsInterconnection = $param["IsInterconnection"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("PrivateCAName",$param) and $param["PrivateCAName"] !== null) {
            $this->PrivateCAName = $param["PrivateCAName"];
        }

        if (array_key_exists("IsPrivateCA",$param) and $param["IsPrivateCA"] !== null) {
            $this->IsPrivateCA = $param["IsPrivateCA"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertSN",$param) and $param["CertSN"] !== null) {
            $this->CertSN = $param["CertSN"];
        }

        if (array_key_exists("IssuerName",$param) and $param["IssuerName"] !== null) {
            $this->IssuerName = $param["IssuerName"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }
    }
}
