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
 * DescribeKeySandboxCredential返回参数结构体
 *
 * @method string getCredentialId() 获取凭证ID
 * @method void setCredentialId(string $CredentialId) 设置凭证ID
 * @method string getCredentialName() 获取凭证名称
 * @method void setCredentialName(string $CredentialName) 设置凭证名称
 * @method string getCredentialType() 获取凭证类型
枚举值：
access：常规密钥
sts：STS临时密钥
 * @method void setCredentialType(string $CredentialType) 设置凭证类型
枚举值：
access：常规密钥
sts：STS临时密钥
 * @method CredentialEffectScope getCredentialEffectScope() 获取生效机器范围
 * @method void setCredentialEffectScope(CredentialEffectScope $CredentialEffectScope) 设置生效机器范围
 * @method array getAccess() 获取常规密钥凭据数据（打码后），CredentialType为access时返回
补充说明：Key为原文，Value为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccess(array $Access) 设置常规密钥凭据数据（打码后），CredentialType为access时返回
补充说明：Key为原文，Value为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
 * @method STSCredentialOutput getSTS() 获取STS凭据数据（打码后），CredentialType为sts时返回
补充说明：System为原文，SecretID和SecretKey为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSTS(STSCredentialOutput $STS) 设置STS凭据数据（打码后），CredentialType为sts时返回
补充说明：System为原文，SecretID和SecretKey为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setCreateTime(string $CreateTime) 设置创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getUpdateTime() 获取更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKeySandboxCredentialResponse extends AbstractModel
{
    /**
     * @var string 凭证ID
     */
    public $CredentialId;

    /**
     * @var string 凭证名称
     */
    public $CredentialName;

    /**
     * @var string 凭证类型
枚举值：
access：常规密钥
sts：STS临时密钥
     */
    public $CredentialType;

    /**
     * @var CredentialEffectScope 生效机器范围
     */
    public $CredentialEffectScope;

    /**
     * @var array 常规密钥凭据数据（打码后），CredentialType为access时返回
补充说明：Key为原文，Value为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Access;

    /**
     * @var STSCredentialOutput STS凭据数据（打码后），CredentialType为sts时返回
补充说明：System为原文，SecretID和SecretKey为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $STS;

    /**
     * @var string 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $CreateTime;

    /**
     * @var string 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CredentialId 凭证ID
     * @param string $CredentialName 凭证名称
     * @param string $CredentialType 凭证类型
枚举值：
access：常规密钥
sts：STS临时密钥
     * @param CredentialEffectScope $CredentialEffectScope 生效机器范围
     * @param array $Access 常规密钥凭据数据（打码后），CredentialType为access时返回
补充说明：Key为原文，Value为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
     * @param STSCredentialOutput $STS STS凭据数据（打码后），CredentialType为sts时返回
补充说明：System为原文，SecretID和SecretKey为打码后的值（保留前3后4位，中间用***替代）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
     * @param string $UpdateTime 更新时间
参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式）
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
        if (array_key_exists("CredentialId",$param) and $param["CredentialId"] !== null) {
            $this->CredentialId = $param["CredentialId"];
        }

        if (array_key_exists("CredentialName",$param) and $param["CredentialName"] !== null) {
            $this->CredentialName = $param["CredentialName"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("CredentialEffectScope",$param) and $param["CredentialEffectScope"] !== null) {
            $this->CredentialEffectScope = new CredentialEffectScope();
            $this->CredentialEffectScope->deserialize($param["CredentialEffectScope"]);
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = [];
            foreach ($param["Access"] as $key => $value){
                $obj = new AccessCredentialOutput();
                $obj->deserialize($value);
                array_push($this->Access, $obj);
            }
        }

        if (array_key_exists("STS",$param) and $param["STS"] !== null) {
            $this->STS = new STSCredentialOutput();
            $this->STS->deserialize($param["STS"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
