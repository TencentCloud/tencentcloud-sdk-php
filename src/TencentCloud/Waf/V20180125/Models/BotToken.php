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
 * bot-token配置
 *
 * @method string getName() 获取会话名称
 * @method void setName(string $Name) 设置会话名称
 * @method string getDescription() 获取会话描述
 * @method void setDescription(string $Description) 设置会话描述
 * @method string getId() 获取会话id
 * @method void setId(string $Id) 设置会话id
 * @method boolean getStatus() 获取策略的开关状态
 * @method void setStatus(boolean $Status) 设置策略的开关状态
 * @method string getLocation() 获取会话位置
 * @method void setLocation(string $Location) 设置会话位置
 * @method string getKey() 获取会话key
 * @method void setKey(string $Key) 设置会话key
 * @method string getOperator() 获取会话匹配方式，前缀匹配、后缀匹配等
 * @method void setOperator(string $Operator) 设置会话匹配方式，前缀匹配、后缀匹配等
 * @method integer getTimestamp() 获取会话更新的时间戳
 * @method void setTimestamp(integer $Timestamp) 设置会话更新的时间戳
 * @method array getScene() 获取场景列表，内容为空表示全部场景应用
 * @method void setScene(array $Scene) 设置场景列表，内容为空表示全部场景应用
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method TokenValidation getTokenValidation() 获取token有效性配置信息
 * @method void setTokenValidation(TokenValidation $TokenValidation) 设置token有效性配置信息
 * @method integer getDisableMultiJson() 获取1表示开启了禁用嵌套功能
 * @method void setDisableMultiJson(integer $DisableMultiJson) 设置1表示开启了禁用嵌套功能
 */
class BotToken extends AbstractModel
{
    /**
     * @var string 会话名称
     */
    public $Name;

    /**
     * @var string 会话描述
     */
    public $Description;

    /**
     * @var string 会话id
     */
    public $Id;

    /**
     * @var boolean 策略的开关状态
     */
    public $Status;

    /**
     * @var string 会话位置
     */
    public $Location;

    /**
     * @var string 会话key
     */
    public $Key;

    /**
     * @var string 会话匹配方式，前缀匹配、后缀匹配等
     */
    public $Operator;

    /**
     * @var integer 会话更新的时间戳
     */
    public $Timestamp;

    /**
     * @var array 场景列表，内容为空表示全部场景应用
     */
    public $Scene;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var TokenValidation token有效性配置信息
     */
    public $TokenValidation;

    /**
     * @var integer 1表示开启了禁用嵌套功能
     */
    public $DisableMultiJson;

    /**
     * @param string $Name 会话名称
     * @param string $Description 会话描述
     * @param string $Id 会话id
     * @param boolean $Status 策略的开关状态
     * @param string $Location 会话位置
     * @param string $Key 会话key
     * @param string $Operator 会话匹配方式，前缀匹配、后缀匹配等
     * @param integer $Timestamp 会话更新的时间戳
     * @param array $Scene 场景列表，内容为空表示全部场景应用
     * @param integer $Priority 优先级
     * @param TokenValidation $TokenValidation token有效性配置信息
     * @param integer $DisableMultiJson 1表示开启了禁用嵌套功能
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("TokenValidation",$param) and $param["TokenValidation"] !== null) {
            $this->TokenValidation = new TokenValidation();
            $this->TokenValidation->deserialize($param["TokenValidation"]);
        }

        if (array_key_exists("DisableMultiJson",$param) and $param["DisableMultiJson"] !== null) {
            $this->DisableMultiJson = $param["DisableMultiJson"];
        }
    }
}
