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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIAnalysisRobotInfo请求参数结构体
 *
 * @method integer getAccessType() 获取<p>接入类型，0/不传入：企业微信url配置接入 1:企业微信扫码接入 2:微信扫码接入 3:QQ 账密接入 4:飞书 账密接入 5:钉钉 账密接入</p>
 * @method void setAccessType(integer $AccessType) 设置<p>接入类型，0/不传入：企业微信url配置接入 1:企业微信扫码接入 2:微信扫码接入 3:QQ 账密接入 4:飞书 账密接入 5:钉钉 账密接入</p>
 * @method string getAccountId() 获取<p>QQ/飞书/钉钉 创建Bot账号ID</p>
 * @method void setAccountId(string $AccountId) 设置<p>QQ/飞书/钉钉 创建Bot账号ID</p>
 * @method string getSecret() 获取<p>QQ/飞书/钉钉 创建Bot密钥</p>
 * @method void setSecret(string $Secret) 设置<p>QQ/飞书/钉钉 创建Bot密钥</p>
 * @method string getBotName() 获取<p>预设机器人名称，为空时则后台生成</p>
 * @method void setBotName(string $BotName) 设置<p>预设机器人名称，为空时则后台生成</p>
 */
class DescribeAIAnalysisRobotInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>接入类型，0/不传入：企业微信url配置接入 1:企业微信扫码接入 2:微信扫码接入 3:QQ 账密接入 4:飞书 账密接入 5:钉钉 账密接入</p>
     */
    public $AccessType;

    /**
     * @var string <p>QQ/飞书/钉钉 创建Bot账号ID</p>
     */
    public $AccountId;

    /**
     * @var string <p>QQ/飞书/钉钉 创建Bot密钥</p>
     */
    public $Secret;

    /**
     * @var string <p>预设机器人名称，为空时则后台生成</p>
     */
    public $BotName;

    /**
     * @param integer $AccessType <p>接入类型，0/不传入：企业微信url配置接入 1:企业微信扫码接入 2:微信扫码接入 3:QQ 账密接入 4:飞书 账密接入 5:钉钉 账密接入</p>
     * @param string $AccountId <p>QQ/飞书/钉钉 创建Bot账号ID</p>
     * @param string $Secret <p>QQ/飞书/钉钉 创建Bot密钥</p>
     * @param string $BotName <p>预设机器人名称，为空时则后台生成</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccountId",$param) and $param["AccountId"] !== null) {
            $this->AccountId = $param["AccountId"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("BotName",$param) and $param["BotName"] !== null) {
            $this->BotName = $param["BotName"];
        }
    }
}
