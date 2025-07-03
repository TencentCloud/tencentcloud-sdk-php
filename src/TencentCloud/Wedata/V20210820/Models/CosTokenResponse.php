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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos token信息
 *
 * @method string getId() 获取token id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置token id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取token内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置token内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretId() 获取密钥id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置密钥id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取密钥内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置密钥内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResponse() 获取响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponse(string $Response) 设置响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiredTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredTime(integer $ExpiredTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取操作者uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置操作者uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class CosTokenResponse extends AbstractModel
{
    /**
     * @var string token id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string token内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 密钥id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string 密钥内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string 响应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Response;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredTime;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 操作者uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @param string $Id token id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token token内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretId 密钥id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 密钥内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Response 响应
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpiredTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 操作者uin
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Response",$param) and $param["Response"] !== null) {
            $this->Response = $param["Response"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }
    }
}
