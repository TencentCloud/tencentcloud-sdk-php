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
 * Talk配置信息描述。
 *
 * @method integer getUin() 获取UIN
 * @method void setUin(integer $Uin) 设置UIN
 * @method integer getAppId() 获取APPID
 * @method void setAppId(integer $AppId) 设置APPID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getBotId() 获取智能体ID
 * @method void setBotId(string $BotId) 设置智能体ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getTargetLanguage() 获取语言
 * @method void setTargetLanguage(string $TargetLanguage) 设置语言
 * @method TalkSTTConfigInfo getSTTConfig() 获取语音识别
 * @method void setSTTConfig(TalkSTTConfigInfo $STTConfig) 设置语音识别
 * @method TalkLLMConfigInfo getLLMConfig() 获取大模型
 * @method void setLLMConfig(TalkLLMConfigInfo $LLMConfig) 设置大模型
 * @method TalkTTSConfigInfo getTTSConfig() 获取语音合成
 * @method void setTTSConfig(TalkTTSConfigInfo $TTSConfig) 设置语音合成
 * @method TalkAgentConfigInfo getAgentConfig() 获取智能体配置
 * @method void setAgentConfig(TalkAgentConfigInfo $AgentConfig) 设置智能体配置
 * @method TalkProductInfo getProductList() 获取产品信息列表
 * @method void setProductList(TalkProductInfo $ProductList) 设置产品信息列表
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method array getBoundProducts() 获取已关联产品信息列表
 * @method void setBoundProducts(array $BoundProducts) 设置已关联产品信息列表
 */
class TalkAIBotInfo extends AbstractModel
{
    /**
     * @var integer UIN
     */
    public $Uin;

    /**
     * @var integer APPID
     */
    public $AppId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 智能体ID
     */
    public $BotId;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 语言
     */
    public $TargetLanguage;

    /**
     * @var TalkSTTConfigInfo 语音识别
     */
    public $STTConfig;

    /**
     * @var TalkLLMConfigInfo 大模型
     */
    public $LLMConfig;

    /**
     * @var TalkTTSConfigInfo 语音合成
     */
    public $TTSConfig;

    /**
     * @var TalkAgentConfigInfo 智能体配置
     */
    public $AgentConfig;

    /**
     * @var TalkProductInfo 产品信息列表
     * @deprecated
     */
    public $ProductList;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 已关联产品信息列表
     */
    public $BoundProducts;

    /**
     * @param integer $Uin UIN
     * @param integer $AppId APPID
     * @param string $InstanceId 实例ID
     * @param string $BotId 智能体ID
     * @param string $Name 名称
     * @param string $Description 描述
     * @param string $TargetLanguage 语言
     * @param TalkSTTConfigInfo $STTConfig 语音识别
     * @param TalkLLMConfigInfo $LLMConfig 大模型
     * @param TalkTTSConfigInfo $TTSConfig 语音合成
     * @param TalkAgentConfigInfo $AgentConfig 智能体配置
     * @param TalkProductInfo $ProductList 产品信息列表
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param array $BoundProducts 已关联产品信息列表
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BotId",$param) and $param["BotId"] !== null) {
            $this->BotId = $param["BotId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new TalkSTTConfigInfo();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new TalkLLMConfigInfo();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TalkTTSConfigInfo();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("AgentConfig",$param) and $param["AgentConfig"] !== null) {
            $this->AgentConfig = new TalkAgentConfigInfo();
            $this->AgentConfig->deserialize($param["AgentConfig"]);
        }

        if (array_key_exists("ProductList",$param) and $param["ProductList"] !== null) {
            $this->ProductList = new TalkProductInfo();
            $this->ProductList->deserialize($param["ProductList"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BoundProducts",$param) and $param["BoundProducts"] !== null) {
            $this->BoundProducts = [];
            foreach ($param["BoundProducts"] as $key => $value){
                $obj = new TalkProductInfo();
                $obj->deserialize($value);
                array_push($this->BoundProducts, $obj);
            }
        }
    }
}
