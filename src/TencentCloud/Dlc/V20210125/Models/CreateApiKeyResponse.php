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
 * CreateApiKey返回参数结构体
 *
 * @method string getApiKeyId() 获取<p>API Key ID（唯一标识）</p>
 * @method void setApiKeyId(string $ApiKeyId) 设置<p>API Key ID（唯一标识）</p>
 * @method string getName() 获取<p>API Key 名称（用户创建时指定的可读名称）</p>
 * @method void setName(string $Name) 设置<p>API Key 名称（用户创建时指定的可读名称）</p>
 * @method string getApiKey() 获取<p>API Key 值（完整密钥字符串，用于鉴权时携带在请求头中）</p>
 * @method void setApiKey(string $ApiKey) 设置<p>API Key 值（完整密钥字符串，用于鉴权时携带在请求头中）</p>
 * @method string getServiceId() 获取<p>关联的推理服务ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>关联的推理服务ID</p>
 * @method string getServiceName() 获取<p>关联的推理服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>关联的推理服务名称</p>
 * @method string getStatus() 获取<p>API Key 状态，可选值：Active（活跃可用）/ Revoked（已停用）。空闲 Key 通常为 Active 状态</p>
 * @method void setStatus(string $Status) 设置<p>API Key 状态，可选值：Active（活跃可用）/ Revoked（已停用）。空闲 Key 通常为 Active 状态</p>
 * @method integer getAppId() 获取<p>应用ID</p>
 * @method void setAppId(integer $AppId) 设置<p>应用ID</p>
 * @method string getUin() 获取<p>主账号UIN</p>
 * @method void setUin(string $Uin) 设置<p>主账号UIN</p>
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）</p>
 * @method integer getUpdateTime() 获取<p>更新时间（毫秒时间戳）</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>更新时间（毫秒时间戳）</p>
 * @method string getSubAccountUin() 获取<p>子账号UIN（实际操作者）</p>
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号UIN（实际操作者）</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateApiKeyResponse extends AbstractModel
{
    /**
     * @var string <p>API Key ID（唯一标识）</p>
     */
    public $ApiKeyId;

    /**
     * @var string <p>API Key 名称（用户创建时指定的可读名称）</p>
     */
    public $Name;

    /**
     * @var string <p>API Key 值（完整密钥字符串，用于鉴权时携带在请求头中）</p>
     */
    public $ApiKey;

    /**
     * @var string <p>关联的推理服务ID</p>
     */
    public $ServiceId;

    /**
     * @var string <p>关联的推理服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>API Key 状态，可选值：Active（活跃可用）/ Revoked（已停用）。空闲 Key 通常为 Active 状态</p>
     */
    public $Status;

    /**
     * @var integer <p>应用ID</p>
     */
    public $AppId;

    /**
     * @var string <p>主账号UIN</p>
     */
    public $Uin;

    /**
     * @var integer <p>创建时间（毫秒时间戳）</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>更新时间（毫秒时间戳）</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>子账号UIN（实际操作者）</p>
     */
    public $SubAccountUin;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ApiKeyId <p>API Key ID（唯一标识）</p>
     * @param string $Name <p>API Key 名称（用户创建时指定的可读名称）</p>
     * @param string $ApiKey <p>API Key 值（完整密钥字符串，用于鉴权时携带在请求头中）</p>
     * @param string $ServiceId <p>关联的推理服务ID</p>
     * @param string $ServiceName <p>关联的推理服务名称</p>
     * @param string $Status <p>API Key 状态，可选值：Active（活跃可用）/ Revoked（已停用）。空闲 Key 通常为 Active 状态</p>
     * @param integer $AppId <p>应用ID</p>
     * @param string $Uin <p>主账号UIN</p>
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）</p>
     * @param integer $UpdateTime <p>更新时间（毫秒时间戳）</p>
     * @param string $SubAccountUin <p>子账号UIN（实际操作者）</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
