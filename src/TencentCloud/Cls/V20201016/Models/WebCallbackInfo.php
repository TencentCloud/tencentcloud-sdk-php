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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警渠道回调配置信息
 *
 * @method string getWebCallbackId() 获取告警渠道回调配置id。
 * @method void setWebCallbackId(string $WebCallbackId) 设置告警渠道回调配置id。
 * @method string getName() 获取告警渠道回调配置名称。
 * @method void setName(string $Name) 设置告警渠道回调配置名称。
 * @method string getType() 获取渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method void setType(string $Type) 设置渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
 * @method string getWebhook() 获取回调地址。
 * @method void setWebhook(string $Webhook) 设置回调地址。
 * @method string getMethod() 获取请求方式。
 * @method void setMethod(string $Method) 设置请求方式。
 * @method string getKey() 获取秘钥信息。
 * @method void setKey(string $Key) 设置秘钥信息。
 * @method integer getUin() 获取主账号。
 * @method void setUin(integer $Uin) 设置主账号。
 * @method integer getSubUin() 获取子账号。
 * @method void setSubUin(integer $SubUin) 设置子账号。
 * @method integer getCreateTime() 获取创建时间。秒(s)级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间。秒(s)级时间戳
 * @method integer getUpdateTime() 获取更新时间。秒(s)级时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间。秒(s)级时间戳
 */
class WebCallbackInfo extends AbstractModel
{
    /**
     * @var string 告警渠道回调配置id。
     */
    public $WebCallbackId;

    /**
     * @var string 告警渠道回调配置名称。
     */
    public $Name;

    /**
     * @var string 渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     */
    public $Type;

    /**
     * @var string 回调地址。
     */
    public $Webhook;

    /**
     * @var string 请求方式。
     */
    public $Method;

    /**
     * @var string 秘钥信息。
     */
    public $Key;

    /**
     * @var integer 主账号。
     */
    public $Uin;

    /**
     * @var integer 子账号。
     */
    public $SubUin;

    /**
     * @var integer 创建时间。秒(s)级时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间。秒(s)级时间戳
     */
    public $UpdateTime;

    /**
     * @param string $WebCallbackId 告警渠道回调配置id。
     * @param string $Name 告警渠道回调配置名称。
     * @param string $Type 渠道类型

WeCom:企业微信;DingTalk:钉钉;Lark:飞书;Http:自定义回调;
     * @param string $Webhook 回调地址。
     * @param string $Method 请求方式。
     * @param string $Key 秘钥信息。
     * @param integer $Uin 主账号。
     * @param integer $SubUin 子账号。
     * @param integer $CreateTime 创建时间。秒(s)级时间戳
     * @param integer $UpdateTime 更新时间。秒(s)级时间戳
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
        if (array_key_exists("WebCallbackId",$param) and $param["WebCallbackId"] !== null) {
            $this->WebCallbackId = $param["WebCallbackId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Webhook",$param) and $param["Webhook"] !== null) {
            $this->Webhook = $param["Webhook"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
