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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Key 响应类.
 *
 * @method string getApiKeyId() 获取<p>apiKey的id</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>apiKey的id</p>
 * @method string getName() 获取<p>apikey名称</p>
 * @method void setName(string $Name) 设置<p>apikey名称</p>
 * @method string getApiKey() 获取<p>apikey内容</p>
 * @method void setApiKey(string $ApiKey) 设置<p>apikey内容</p>
 * @method string getServiceId() 获取<p>推理服务id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务id</p>
 * @method string getServiceName() 获取<p>推理服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>推理服务名称</p>
 * @method string getStatus() 获取<p>apikey状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
 * @method void setStatus(string $Status) 设置<p>apikey状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
 * @method integer getAppId() 获取<p>appid</p>
 * @method void setAppId(integer $AppId) 设置<p>appid</p>
 * @method string getUin() 获取<p>主账号uin</p>
 * @method void setUin(string $Uin) 设置<p>主账号uin</p>
 * @method string getSubAccountUin() 获取<p>子账号uin</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号uin</p>
 * @method integer getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间</p>
 * @method integer getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间</p>
 */
class ApiKeyResponseInfo extends AbstractModel
{
    /**
     * @var string <p>apiKey的id</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>apikey名称</p>
     */
    public $Name;

    /**
     * @var string <p>apikey内容</p>
     */
    public $ApiKey;

    /**
     * @var string <p>推理服务id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>推理服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>apikey状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>appid</p>
     */
    public $AppId;

    /**
     * @var string <p>主账号uin</p>
     */
    public $Uin;

    /**
     * @var string <p>子账号uin</p>
     */
    public $SubAccountUin;

    /**
     * @var integer <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $ApiKeyId <p>apiKey的id</p>
     * @param string $Name <p>apikey名称</p>
     * @param string $ApiKey <p>apikey内容</p>
     * @param string $ServiceId <p>推理服务id</p>
     * @param string $ServiceName <p>推理服务名称</p>
     * @param string $Status <p>apikey状态</p><p>枚举值：</p><ul><li>Active： 正常</li></ul>
     * @param integer $AppId <p>appid</p>
     * @param string $Uin <p>主账号uin</p>
     * @param string $SubAccountUin <p>子账号uin</p>
     * @param integer $CreateTime <p>创建时间</p>
     * @param integer $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("ApiKeyId",$param) and $param["ApiKeyId"] !== null) {
            $this->ApiKeyId = $param["ApiKeyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
