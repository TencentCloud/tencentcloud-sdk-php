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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费实例（Edition=llm-sdk-waf）的基础信息，仅包含 tb_instance_conf 基础字段
 *
 * @method integer getAppId() 获取<p>用户appid</p>
 * @method void setAppId(integer $AppId) 设置<p>用户appid</p>
 * @method string getInstanceId() 获取<p>实例唯一ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例唯一ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getResourceIds() 获取<p>实例对应资源ID，计费使用</p>
 * @method void setResourceIds(string $ResourceIds) 设置<p>实例对应资源ID，计费使用</p>
 * @method string getEdition() 获取<p>实例版本，后付费实例固定为 llm-sdk-waf</p>
 * @method void setEdition(string $Edition) 设置<p>实例版本，后付费实例固定为 llm-sdk-waf</p>
 * @method string getRegion() 获取<p>实例所属地域</p>
 * @method void setRegion(string $Region) 设置<p>实例所属地域</p>
 * @method integer getPayMode() 获取<p>付费模式，后付费实例为 0</p>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式，后付费实例为 0</p>
 * @method string getValidTime() 获取<p>实例过期时间</p>
 * @method void setValidTime(string $ValidTime) 设置<p>实例过期时间</p>
 * @method string getBeginTime() 获取<p>实例开始时间</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>实例开始时间</p>
 * @method string getBillingItem() 获取<p>计费项</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>计费项</p>
 * @method integer getRenewFlag() 获取<p>自动续费标识。<br>0：关闭<br>1：开启</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>自动续费标识。<br>0：关闭<br>1：开启</p>
 * @method integer getLevel() 获取<p>实例套餐版本</p>
 * @method void setLevel(integer $Level) 设置<p>实例套餐版本</p>
 * @method string getModifyTime() 获取<p>实例修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>实例修改时间</p>
 * @method integer getSubDomainLimit() 获取<p>域名数量上限</p>
 * @method void setSubDomainLimit(integer $SubDomainLimit) 设置<p>域名数量上限</p>
 * @method integer getMainDomainLimit() 获取<p>主域名数量上限</p>
 * @method void setMainDomainLimit(integer $MainDomainLimit) 设置<p>主域名数量上限</p>
 * @method integer getElasticBilling() 获取<p>qps弹性计费上限</p>
 * @method void setElasticBilling(integer $ElasticBilling) 设置<p>qps弹性计费上限</p>
 * @method integer getAttackLogPost() 获取<p>攻击日志投递开关</p>
 * @method void setAttackLogPost(integer $AttackLogPost) 设置<p>攻击日志投递开关</p>
 * @method integer getAPISecurity() 获取<p>api安全是否购买</p>
 * @method void setAPISecurity(integer $APISecurity) 设置<p>api安全是否购买</p>
 * @method integer getIsAPISecurityTrial() 获取<p>是否api 安全试用</p>
 * @method void setIsAPISecurityTrial(integer $IsAPISecurityTrial) 设置<p>是否api 安全试用</p>
 * @method integer getFreeDelayFlag() 获取<p>实例延期释放标识</p>
 * @method void setFreeDelayFlag(integer $FreeDelayFlag) 设置<p>实例延期释放标识</p>
 * @method integer getBasicFlag() 获取<p>1是基础2025版本；0不是</p>
 * @method void setBasicFlag(integer $BasicFlag) 设置<p>1是基础2025版本；0不是</p>
 * @method LLMPkg getLLMPkg() 获取<p>大模型安全「后付费」资源信息，结构与内容与 DescribeInstances 的 InstanceDetail.LLMPkg 保持一致</p>
 * @method void setLLMPkg(LLMPkg $LLMPkg) 设置<p>大模型安全「后付费」资源信息，结构与内容与 DescribeInstances 的 InstanceDetail.LLMPkg 保持一致</p>
 * @method LLMTokenUsage getLLMTokenUsage() 获取<p>LLM实例当天4个计费模块token消耗量及近7天趋势（仅后付费llm-sdk-waf实例返回）</p>
 * @method void setLLMTokenUsage(LLMTokenUsage $LLMTokenUsage) 设置<p>LLM实例当天4个计费模块token消耗量及近7天趋势（仅后付费llm-sdk-waf实例返回）</p>
 */
class AfterPayInstanceInfo extends AbstractModel
{
    /**
     * @var integer <p>用户appid</p>
     */
    public $AppId;

    /**
     * @var string <p>实例唯一ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>实例对应资源ID，计费使用</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>实例版本，后付费实例固定为 llm-sdk-waf</p>
     */
    public $Edition;

    /**
     * @var string <p>实例所属地域</p>
     */
    public $Region;

    /**
     * @var integer <p>付费模式，后付费实例为 0</p>
     */
    public $PayMode;

    /**
     * @var string <p>实例过期时间</p>
     */
    public $ValidTime;

    /**
     * @var string <p>实例开始时间</p>
     */
    public $BeginTime;

    /**
     * @var string <p>计费项</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>自动续费标识。<br>0：关闭<br>1：开启</p>
     */
    public $RenewFlag;

    /**
     * @var integer <p>实例套餐版本</p>
     */
    public $Level;

    /**
     * @var string <p>实例修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>域名数量上限</p>
     */
    public $SubDomainLimit;

    /**
     * @var integer <p>主域名数量上限</p>
     */
    public $MainDomainLimit;

    /**
     * @var integer <p>qps弹性计费上限</p>
     */
    public $ElasticBilling;

    /**
     * @var integer <p>攻击日志投递开关</p>
     */
    public $AttackLogPost;

    /**
     * @var integer <p>api安全是否购买</p>
     */
    public $APISecurity;

    /**
     * @var integer <p>是否api 安全试用</p>
     */
    public $IsAPISecurityTrial;

    /**
     * @var integer <p>实例延期释放标识</p>
     */
    public $FreeDelayFlag;

    /**
     * @var integer <p>1是基础2025版本；0不是</p>
     */
    public $BasicFlag;

    /**
     * @var LLMPkg <p>大模型安全「后付费」资源信息，结构与内容与 DescribeInstances 的 InstanceDetail.LLMPkg 保持一致</p>
     */
    public $LLMPkg;

    /**
     * @var LLMTokenUsage <p>LLM实例当天4个计费模块token消耗量及近7天趋势（仅后付费llm-sdk-waf实例返回）</p>
     */
    public $LLMTokenUsage;

    /**
     * @param integer $AppId <p>用户appid</p>
     * @param string $InstanceId <p>实例唯一ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $ResourceIds <p>实例对应资源ID，计费使用</p>
     * @param string $Edition <p>实例版本，后付费实例固定为 llm-sdk-waf</p>
     * @param string $Region <p>实例所属地域</p>
     * @param integer $PayMode <p>付费模式，后付费实例为 0</p>
     * @param string $ValidTime <p>实例过期时间</p>
     * @param string $BeginTime <p>实例开始时间</p>
     * @param string $BillingItem <p>计费项</p>
     * @param integer $RenewFlag <p>自动续费标识。<br>0：关闭<br>1：开启</p>
     * @param integer $Level <p>实例套餐版本</p>
     * @param string $ModifyTime <p>实例修改时间</p>
     * @param integer $SubDomainLimit <p>域名数量上限</p>
     * @param integer $MainDomainLimit <p>主域名数量上限</p>
     * @param integer $ElasticBilling <p>qps弹性计费上限</p>
     * @param integer $AttackLogPost <p>攻击日志投递开关</p>
     * @param integer $APISecurity <p>api安全是否购买</p>
     * @param integer $IsAPISecurityTrial <p>是否api 安全试用</p>
     * @param integer $FreeDelayFlag <p>实例延期释放标识</p>
     * @param integer $BasicFlag <p>1是基础2025版本；0不是</p>
     * @param LLMPkg $LLMPkg <p>大模型安全「后付费」资源信息，结构与内容与 DescribeInstances 的 InstanceDetail.LLMPkg 保持一致</p>
     * @param LLMTokenUsage $LLMTokenUsage <p>LLM实例当天4个计费模块token消耗量及近7天趋势（仅后付费llm-sdk-waf实例返回）</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ValidTime",$param) and $param["ValidTime"] !== null) {
            $this->ValidTime = $param["ValidTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("SubDomainLimit",$param) and $param["SubDomainLimit"] !== null) {
            $this->SubDomainLimit = $param["SubDomainLimit"];
        }

        if (array_key_exists("MainDomainLimit",$param) and $param["MainDomainLimit"] !== null) {
            $this->MainDomainLimit = $param["MainDomainLimit"];
        }

        if (array_key_exists("ElasticBilling",$param) and $param["ElasticBilling"] !== null) {
            $this->ElasticBilling = $param["ElasticBilling"];
        }

        if (array_key_exists("AttackLogPost",$param) and $param["AttackLogPost"] !== null) {
            $this->AttackLogPost = $param["AttackLogPost"];
        }

        if (array_key_exists("APISecurity",$param) and $param["APISecurity"] !== null) {
            $this->APISecurity = $param["APISecurity"];
        }

        if (array_key_exists("IsAPISecurityTrial",$param) and $param["IsAPISecurityTrial"] !== null) {
            $this->IsAPISecurityTrial = $param["IsAPISecurityTrial"];
        }

        if (array_key_exists("FreeDelayFlag",$param) and $param["FreeDelayFlag"] !== null) {
            $this->FreeDelayFlag = $param["FreeDelayFlag"];
        }

        if (array_key_exists("BasicFlag",$param) and $param["BasicFlag"] !== null) {
            $this->BasicFlag = $param["BasicFlag"];
        }

        if (array_key_exists("LLMPkg",$param) and $param["LLMPkg"] !== null) {
            $this->LLMPkg = new LLMPkg();
            $this->LLMPkg->deserialize($param["LLMPkg"]);
        }

        if (array_key_exists("LLMTokenUsage",$param) and $param["LLMTokenUsage"] !== null) {
            $this->LLMTokenUsage = new LLMTokenUsage();
            $this->LLMTokenUsage->deserialize($param["LLMTokenUsage"]);
        }
    }
}
