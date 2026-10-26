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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayConsumer请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例id</p>
 * @method string getName() 获取<p>消费者名称，最长 60 字符。同一网关下唯一。</p>
 * @method void setName(string $Name) 设置<p>消费者名称，最长 60 字符。同一网关下唯一。</p>
 * @method string getPriority() 获取<p>优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
 * @method void setPriority(string $Priority) 设置<p>优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
 * @method string getDescription() 获取<p>消费者描述。最长 200 字符。</p>
 * @method void setDescription(string $Description) 设置<p>消费者描述。最长 200 字符。</p>
 * @method string getOperationSource() 获取<p>调用业务来源，可选 Legacy 或 CustomOrganization；省略或空串按 Legacy。Legacy 保持原行为，CustomOrganization 用于自定义组织架构。该字段不替代鉴权，不改变资源归属，不覆盖 RequestSource。来源保存在操作记录请求内容中。</p>
 * @method void setOperationSource(string $OperationSource) 设置<p>调用业务来源，可选 Legacy 或 CustomOrganization；省略或空串按 Legacy。Legacy 保持原行为，CustomOrganization 用于自定义组织架构。该字段不替代鉴权，不改变资源归属，不覆盖 RequestSource。来源保存在操作记录请求内容中。</p>
 * @method string getStatus() 获取<p>仅 CustomOrganization 使用 Active 或 Disabled，默认 Active。Legacy 不新增状态行为。</p>
 * @method void setStatus(string $Status) 设置<p>仅 CustomOrganization 使用 Active 或 Disabled，默认 Active。Legacy 不新增状态行为。</p>
 * @method string getSecretBindType() 获取<p>密钥关联方式，三选一枚举。不传时兼容老逻辑（等价于 None 或 Existing，取决于是否传 SecretKeyId）</p><p>枚举值：</p><ul><li>Existing： 选择已有密钥</li><li>AutoGenerate： 自动生成并关联密钥</li><li>None： 暂不关联密钥</li></ul><p>默认值：None</p>
 * @method void setSecretBindType(string $SecretBindType) 设置<p>密钥关联方式，三选一枚举。不传时兼容老逻辑（等价于 None 或 Existing，取决于是否传 SecretKeyId）</p><p>枚举值：</p><ul><li>Existing： 选择已有密钥</li><li>AutoGenerate： 自动生成并关联密钥</li><li>None： 暂不关联密钥</li></ul><p>默认值：None</p>
 * @method AutoSecretKey getAutoSecretKey() 获取<p>自动生成密钥的参数体。仅当 SecretBindType=&quot;AutoGenerate&quot; 时必填，其他分支禁止携带，否则返回 InvalidParameterValue.CreateError。</p>
 * @method void setAutoSecretKey(AutoSecretKey $AutoSecretKey) 设置<p>自动生成密钥的参数体。仅当 SecretBindType=&quot;AutoGenerate&quot; 时必填，其他分支禁止携带，否则返回 InvalidParameterValue.CreateError。</p>
 */
class CreateCloudNativeAPIGatewayConsumerRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例id</p>
     */
    public $GatewayId;

    /**
     * @var string <p>消费者名称，最长 60 字符。同一网关下唯一。</p>
     */
    public $Name;

    /**
     * @var string <p>优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
     */
    public $Priority;

    /**
     * @var string <p>消费者描述。最长 200 字符。</p>
     */
    public $Description;

    /**
     * @var string <p>调用业务来源，可选 Legacy 或 CustomOrganization；省略或空串按 Legacy。Legacy 保持原行为，CustomOrganization 用于自定义组织架构。该字段不替代鉴权，不改变资源归属，不覆盖 RequestSource。来源保存在操作记录请求内容中。</p>
     */
    public $OperationSource;

    /**
     * @var string <p>仅 CustomOrganization 使用 Active 或 Disabled，默认 Active。Legacy 不新增状态行为。</p>
     */
    public $Status;

    /**
     * @var string <p>密钥关联方式，三选一枚举。不传时兼容老逻辑（等价于 None 或 Existing，取决于是否传 SecretKeyId）</p><p>枚举值：</p><ul><li>Existing： 选择已有密钥</li><li>AutoGenerate： 自动生成并关联密钥</li><li>None： 暂不关联密钥</li></ul><p>默认值：None</p>
     */
    public $SecretBindType;

    /**
     * @var AutoSecretKey <p>自动生成密钥的参数体。仅当 SecretBindType=&quot;AutoGenerate&quot; 时必填，其他分支禁止携带，否则返回 InvalidParameterValue.CreateError。</p>
     */
    public $AutoSecretKey;

    /**
     * @param string $GatewayId <p>网关实例id</p>
     * @param string $Name <p>消费者名称，最长 60 字符。同一网关下唯一。</p>
     * @param string $Priority <p>优先级</p><p>枚举值：</p><ul><li>High： 高优</li><li>Medium： 中优</li><li>Low： 低优</li></ul>
     * @param string $Description <p>消费者描述。最长 200 字符。</p>
     * @param string $OperationSource <p>调用业务来源，可选 Legacy 或 CustomOrganization；省略或空串按 Legacy。Legacy 保持原行为，CustomOrganization 用于自定义组织架构。该字段不替代鉴权，不改变资源归属，不覆盖 RequestSource。来源保存在操作记录请求内容中。</p>
     * @param string $Status <p>仅 CustomOrganization 使用 Active 或 Disabled，默认 Active。Legacy 不新增状态行为。</p>
     * @param string $SecretBindType <p>密钥关联方式，三选一枚举。不传时兼容老逻辑（等价于 None 或 Existing，取决于是否传 SecretKeyId）</p><p>枚举值：</p><ul><li>Existing： 选择已有密钥</li><li>AutoGenerate： 自动生成并关联密钥</li><li>None： 暂不关联密钥</li></ul><p>默认值：None</p>
     * @param AutoSecretKey $AutoSecretKey <p>自动生成密钥的参数体。仅当 SecretBindType=&quot;AutoGenerate&quot; 时必填，其他分支禁止携带，否则返回 InvalidParameterValue.CreateError。</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OperationSource",$param) and $param["OperationSource"] !== null) {
            $this->OperationSource = $param["OperationSource"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SecretBindType",$param) and $param["SecretBindType"] !== null) {
            $this->SecretBindType = $param["SecretBindType"];
        }

        if (array_key_exists("AutoSecretKey",$param) and $param["AutoSecretKey"] !== null) {
            $this->AutoSecretKey = new AutoSecretKey();
            $this->AutoSecretKey->deserialize($param["AutoSecretKey"]);
        }
    }
}
