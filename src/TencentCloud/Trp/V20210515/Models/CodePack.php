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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 码包类型
 *
 * @method string getPackId() 获取码id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackId(string $PackId) 设置码id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCorpId() 获取企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(integer $CorpId) 设置企业id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantId() 获取商户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantId(string $MerchantId) 设置商户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLog() 获取执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLog(string $Log) 设置执行日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUser(string $CreateUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAmount() 获取码数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAmount(integer $Amount) 设置码数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCodeLength() 获取防伪码长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeLength(integer $CodeLength) 设置防伪码长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCodeType() 获取码类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeType(string $CodeType) 设置码类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCipher() 获取是否暗码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCipher(integer $Cipher) 设置是否暗码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTextUrl() 获取[弃用] 文字码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTextUrl(string $TextUrl) 设置[弃用] 文字码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackUrl() 获取[弃用] 二维码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackUrl(string $PackUrl) 设置[弃用] 二维码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMerchantName() 获取商户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMerchantName(string $MerchantName) 设置商户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRuleType() 获取码规则类型 0: 默认, 1: 自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(integer $RuleType) 设置码规则类型 0: 默认, 1: 自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomId() 获取自定义码规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomId(string $CustomId) 设置自定义码规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPackType() 获取码包类型 0: 普通码包 1: 层级码包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackType(integer $PackType) 设置码包类型 0: 普通码包 1: 层级码包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPackLevel() 获取生码层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackLevel(integer $PackLevel) 设置生码层级
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPackSpec() 获取层级码配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackSpec(array $PackSpec) 设置层级码配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodePack extends AbstractModel
{
    /**
     * @var string 码id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackId;

    /**
     * @var integer 企业id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string 商户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantId;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 执行日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Log;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUser;

    /**
     * @var integer 码数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Amount;

    /**
     * @var integer 防伪码长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeLength;

    /**
     * @var string 码类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeType;

    /**
     * @var integer 是否暗码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cipher;

    /**
     * @var string [弃用] 文字码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TextUrl;

    /**
     * @var string [弃用] 二维码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackUrl;

    /**
     * @var string 商户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MerchantName;

    /**
     * @var integer 码规则类型 0: 默认, 1: 自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 自定义码规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomId;

    /**
     * @var integer 码包类型 0: 普通码包 1: 层级码包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackType;

    /**
     * @var integer 生码层级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackLevel;

    /**
     * @var array 层级码配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackSpec;

    /**
     * @param string $PackId 码id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CorpId 企业id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantId 商户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 制码状态 init: 初始化, pending: 执行中, done: 完成, error: 失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Log 执行日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Amount 码数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CodeLength 防伪码长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CodeType 码类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cipher 是否暗码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TextUrl [弃用] 文字码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackUrl [弃用] 二维码地址，通过另一个接口查
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MerchantName 商户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RuleType 码规则类型 0: 默认, 1: 自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomId 自定义码规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PackType 码包类型 0: 普通码包 1: 层级码包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PackLevel 生码层级
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PackSpec 层级码配置
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
