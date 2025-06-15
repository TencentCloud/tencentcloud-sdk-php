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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调用类型
 *
 * @method string getId() 获取关联ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置关联ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallTime() 获取调用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallTime(string $CallTime) 设置调用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalTokenUsage() 获取总token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTokenUsage(float $TotalTokenUsage) 设置总token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getInputTokenUsage() 获取输入token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTokenUsage(float $InputTokenUsage) 设置输入token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getOutputTokenUsage() 获取输出token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputTokenUsage(float $OutputTokenUsage) 设置输出token消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSearchUsage() 获取搜索服务调用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchUsage(integer $SearchUsage) 设置搜索服务调用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCallType() 获取调用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallType(string $CallType) 设置调用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUinAccount() 获取账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUinAccount(string $UinAccount) 设置账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageUsage() 获取总消耗页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageUsage(integer $PageUsage) 设置总消耗页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubScene() 获取筛选子场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubScene(string $SubScene) 设置筛选子场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBillingTag() 获取账单明细对应的自定义tag
 * @method void setBillingTag(string $BillingTag) 设置账单明细对应的自定义tag
 */
class CallDetail extends AbstractModel
{
    /**
     * @var string 关联ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 调用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallTime;

    /**
     * @var float 总token消耗
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTokenUsage;

    /**
     * @var float 输入token消耗
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTokenUsage;

    /**
     * @var float 输出token消耗
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputTokenUsage;

    /**
     * @var integer 搜索服务调用次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchUsage;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string 调用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CallType;

    /**
     * @var string 账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UinAccount;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var integer 总消耗页数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageUsage;

    /**
     * @var string 筛选子场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubScene;

    /**
     * @var string 账单明细对应的自定义tag
     */
    public $BillingTag;

    /**
     * @param string $Id 关联ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallTime 调用时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalTokenUsage 总token消耗
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $InputTokenUsage 输入token消耗
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $OutputTokenUsage 输出token消耗
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SearchUsage 搜索服务调用次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CallType 调用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UinAccount 账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageUsage 总消耗页数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubScene 筛选子场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BillingTag 账单明细对应的自定义tag
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CallTime",$param) and $param["CallTime"] !== null) {
            $this->CallTime = $param["CallTime"];
        }

        if (array_key_exists("TotalTokenUsage",$param) and $param["TotalTokenUsage"] !== null) {
            $this->TotalTokenUsage = $param["TotalTokenUsage"];
        }

        if (array_key_exists("InputTokenUsage",$param) and $param["InputTokenUsage"] !== null) {
            $this->InputTokenUsage = $param["InputTokenUsage"];
        }

        if (array_key_exists("OutputTokenUsage",$param) and $param["OutputTokenUsage"] !== null) {
            $this->OutputTokenUsage = $param["OutputTokenUsage"];
        }

        if (array_key_exists("SearchUsage",$param) and $param["SearchUsage"] !== null) {
            $this->SearchUsage = $param["SearchUsage"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageUsage",$param) and $param["PageUsage"] !== null) {
            $this->PageUsage = $param["PageUsage"];
        }

        if (array_key_exists("SubScene",$param) and $param["SubScene"] !== null) {
            $this->SubScene = $param["SubScene"];
        }

        if (array_key_exists("BillingTag",$param) and $param["BillingTag"] !== null) {
            $this->BillingTag = $param["BillingTag"];
        }
    }
}
