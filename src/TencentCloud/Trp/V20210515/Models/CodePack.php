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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 码包类型
 *
 * @method string getPackId() 获取码id
 * @method void setPackId(string $PackId) 设置码id
 * @method integer getCorpId() 获取企业id
 * @method void setCorpId(integer $CorpId) 设置企业id
 * @method string getMerchantId() 获取商户id
 * @method void setMerchantId(string $MerchantId) 设置商户id
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getStatus() 获取制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
 * @method void setStatus(string $Status) 设置制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
 * @method string getLog() 获取执行日志
 * @method void setLog(string $Log) 设置执行日志
 * @method string getCreateUser() 获取创建人
 * @method void setCreateUser(string $CreateUser) 设置创建人
 * @method integer getAmount() 获取码数
 * @method void setAmount(integer $Amount) 设置码数
 * @method integer getCodeLength() 获取防伪码长度
 * @method void setCodeLength(integer $CodeLength) 设置防伪码长度
 * @method string getCodeType() 获取码类型
 * @method void setCodeType(string $CodeType) 设置码类型
 * @method integer getCipher() 获取是否暗码
 * @method void setCipher(integer $Cipher) 设置是否暗码
 * @method string getTextUrl() 获取[弃用] 文字码地址，通过另一个接口查
 * @method void setTextUrl(string $TextUrl) 设置[弃用] 文字码地址，通过另一个接口查
 * @method string getPackUrl() 获取[弃用] 二维码地址，通过另一个接口查
 * @method void setPackUrl(string $PackUrl) 设置[弃用] 二维码地址，通过另一个接口查
 * @method string getMerchantName() 获取商户名
 * @method void setMerchantName(string $MerchantName) 设置商户名
 * @method integer getRuleType() 获取码规则类型 0: 默认, 1: 自定义
 * @method void setRuleType(integer $RuleType) 设置码规则类型 0: 默认, 1: 自定义
 * @method string getCustomId() 获取自定义码规则ID
 * @method void setCustomId(string $CustomId) 设置自定义码规则ID
 * @method integer getPackType() 获取码包类型 0: 普通码包 1: 层级码包
 * @method void setPackType(integer $PackType) 设置码包类型 0: 普通码包 1: 层级码包
 * @method integer getPackLevel() 获取生码层级
 * @method void setPackLevel(integer $PackLevel) 设置生码层级
 * @method array getPackSpec() 获取层级码配置
 * @method void setPackSpec(array $PackSpec) 设置层级码配置
 * @method string getProductName() 获取商品名称
 * @method void setProductName(string $ProductName) 设置商品名称
 * @method string getProductSpecification() 获取商品规格
 * @method void setProductSpecification(string $ProductSpecification) 设置商品规格
 * @method string getProductId() 获取商品ID
 * @method void setProductId(string $ProductId) 设置商品ID
 * @method integer getRelateType() 获取码关系是否预关联
0:否, 1:是
 * @method void setRelateType(integer $RelateType) 设置码关系是否预关联
0:否, 1:是
 * @method integer getSceneCode() 获取场景码
 * @method void setSceneCode(integer $SceneCode) 设置场景码
 * @method string getCodeRule() 获取码规则
 * @method void setCodeRule(string $CodeRule) 设置码规则
 * @method integer getUsedAmount() 获取已使用码数
 * @method void setUsedAmount(integer $UsedAmount) 设置已使用码数
 * @method integer getSerialStart() 获取开始流水号
 * @method void setSerialStart(integer $SerialStart) 设置开始流水号
 * @method integer getSerialEnd() 获取结束流水号
 * @method void setSerialEnd(integer $SerialEnd) 设置结束流水号
 */
class CodePack extends AbstractModel
{
    /**
     * @var string 码id
     */
    public $PackId;

    /**
     * @var integer 企业id
     */
    public $CorpId;

    /**
     * @var string 商户id
     */
    public $MerchantId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
     */
    public $Status;

    /**
     * @var string 执行日志
     */
    public $Log;

    /**
     * @var string 创建人
     */
    public $CreateUser;

    /**
     * @var integer 码数
     */
    public $Amount;

    /**
     * @var integer 防伪码长度
     */
    public $CodeLength;

    /**
     * @var string 码类型
     */
    public $CodeType;

    /**
     * @var integer 是否暗码
     */
    public $Cipher;

    /**
     * @var string [弃用] 文字码地址，通过另一个接口查
     */
    public $TextUrl;

    /**
     * @var string [弃用] 二维码地址，通过另一个接口查
     */
    public $PackUrl;

    /**
     * @var string 商户名
     */
    public $MerchantName;

    /**
     * @var integer 码规则类型 0: 默认, 1: 自定义
     */
    public $RuleType;

    /**
     * @var string 自定义码规则ID
     */
    public $CustomId;

    /**
     * @var integer 码包类型 0: 普通码包 1: 层级码包
     */
    public $PackType;

    /**
     * @var integer 生码层级
     */
    public $PackLevel;

    /**
     * @var array 层级码配置
     */
    public $PackSpec;

    /**
     * @var string 商品名称
     */
    public $ProductName;

    /**
     * @var string 商品规格
     */
    public $ProductSpecification;

    /**
     * @var string 商品ID
     */
    public $ProductId;

    /**
     * @var integer 码关系是否预关联
0:否, 1:是
     */
    public $RelateType;

    /**
     * @var integer 场景码
     */
    public $SceneCode;

    /**
     * @var string 码规则
     */
    public $CodeRule;

    /**
     * @var integer 已使用码数
     */
    public $UsedAmount;

    /**
     * @var integer 开始流水号
     */
    public $SerialStart;

    /**
     * @var integer 结束流水号
     */
    public $SerialEnd;

    /**
     * @param string $PackId 码id
     * @param integer $CorpId 企业id
     * @param string $MerchantId 商户id
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Status 制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
     * @param string $Log 执行日志
     * @param string $CreateUser 创建人
     * @param integer $Amount 码数
     * @param integer $CodeLength 防伪码长度
     * @param string $CodeType 码类型
     * @param integer $Cipher 是否暗码
     * @param string $TextUrl [弃用] 文字码地址，通过另一个接口查
     * @param string $PackUrl [弃用] 二维码地址，通过另一个接口查
     * @param string $MerchantName 商户名
     * @param integer $RuleType 码规则类型 0: 默认, 1: 自定义
     * @param string $CustomId 自定义码规则ID
     * @param integer $PackType 码包类型 0: 普通码包 1: 层级码包
     * @param integer $PackLevel 生码层级
     * @param array $PackSpec 层级码配置
     * @param string $ProductName 商品名称
     * @param string $ProductSpecification 商品规格
     * @param string $ProductId 商品ID
     * @param integer $RelateType 码关系是否预关联
0:否, 1:是
     * @param integer $SceneCode 场景码
     * @param string $CodeRule 码规则
     * @param integer $UsedAmount 已使用码数
     * @param integer $SerialStart 开始流水号
     * @param integer $SerialEnd 结束流水号
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
        if (array_key_exists("PackId",$param) and $param["PackId"] !== null) {
            $this->PackId = $param["PackId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Log",$param) and $param["Log"] !== null) {
            $this->Log = $param["Log"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("Amount",$param) and $param["Amount"] !== null) {
            $this->Amount = $param["Amount"];
        }

        if (array_key_exists("CodeLength",$param) and $param["CodeLength"] !== null) {
            $this->CodeLength = $param["CodeLength"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("Cipher",$param) and $param["Cipher"] !== null) {
            $this->Cipher = $param["Cipher"];
        }

        if (array_key_exists("TextUrl",$param) and $param["TextUrl"] !== null) {
            $this->TextUrl = $param["TextUrl"];
        }

        if (array_key_exists("PackUrl",$param) and $param["PackUrl"] !== null) {
            $this->PackUrl = $param["PackUrl"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("PackType",$param) and $param["PackType"] !== null) {
            $this->PackType = $param["PackType"];
        }

        if (array_key_exists("PackLevel",$param) and $param["PackLevel"] !== null) {
            $this->PackLevel = $param["PackLevel"];
        }

        if (array_key_exists("PackSpec",$param) and $param["PackSpec"] !== null) {
            $this->PackSpec = [];
            foreach ($param["PackSpec"] as $key => $value){
                $obj = new PackSpec();
                $obj->deserialize($value);
                array_push($this->PackSpec, $obj);
            }
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductSpecification",$param) and $param["ProductSpecification"] !== null) {
            $this->ProductSpecification = $param["ProductSpecification"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("RelateType",$param) and $param["RelateType"] !== null) {
            $this->RelateType = $param["RelateType"];
        }

        if (array_key_exists("SceneCode",$param) and $param["SceneCode"] !== null) {
            $this->SceneCode = $param["SceneCode"];
        }

        if (array_key_exists("CodeRule",$param) and $param["CodeRule"] !== null) {
            $this->CodeRule = $param["CodeRule"];
        }

        if (array_key_exists("UsedAmount",$param) and $param["UsedAmount"] !== null) {
            $this->UsedAmount = $param["UsedAmount"];
        }

        if (array_key_exists("SerialStart",$param) and $param["SerialStart"] !== null) {
            $this->SerialStart = $param["SerialStart"];
        }

        if (array_key_exists("SerialEnd",$param) and $param["SerialEnd"] !== null) {
            $this->SerialEnd = $param["SerialEnd"];
        }
    }
}
