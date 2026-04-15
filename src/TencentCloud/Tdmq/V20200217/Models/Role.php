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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 角色实例
 *
 * @method string getRoleName() 获取<p>角色名称。</p>
 * @method void setRoleName(string $RoleName) 设置<p>角色名称。</p>
 * @method string getToken() 获取<p>角色token值。</p>
 * @method void setToken(string $Token) 设置<p>角色token值。</p>
 * @method string getRemark() 获取<p>备注说明。</p>
 * @method void setRemark(string $Remark) 设置<p>备注说明。</p>
 * @method string getCreateTime() 获取<p>创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。</p>
 * @method string getUpdateTime() 获取<p>更新时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间。</p>
 * @method string getPermType() 获取<p>授权类型（Cluster：集群；TopicAndGroup：主题或消费组）</p>
 * @method void setPermType(string $PermType) 设置<p>授权类型（Cluster：集群；TopicAndGroup：主题或消费组）</p>
 * @method string getTokenType() 获取<p>角色类型</p><p>枚举值：</p><ul><li>Temporary： 轮转密钥</li><li>Permanent： 永久密钥</li></ul>
 * @method void setTokenType(string $TokenType) 设置<p>角色类型</p><p>枚举值：</p><ul><li>Temporary： 轮转密钥</li><li>Permanent： 永久密钥</li></ul>
 * @method string getSecretName() 获取<p>SSM 唯一 ID</p>
 * @method void setSecretName(string $SecretName) 设置<p>SSM 唯一 ID</p>
 * @method integer getRotateFreq() 获取<p>轮转周期</p><p>单位：天</p>
 * @method void setRotateFreq(integer $RotateFreq) 设置<p>轮转周期</p><p>单位：天</p>
 */
class Role extends AbstractModel
{
    /**
     * @var string <p>角色名称。</p>
     */
    public $RoleName;

    /**
     * @var string <p>角色token值。</p>
     */
    public $Token;

    /**
     * @var string <p>备注说明。</p>
     */
    public $Remark;

    /**
     * @var string <p>创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>授权类型（Cluster：集群；TopicAndGroup：主题或消费组）</p>
     */
    public $PermType;

    /**
     * @var string <p>角色类型</p><p>枚举值：</p><ul><li>Temporary： 轮转密钥</li><li>Permanent： 永久密钥</li></ul>
     */
    public $TokenType;

    /**
     * @var string <p>SSM 唯一 ID</p>
     */
    public $SecretName;

    /**
     * @var integer <p>轮转周期</p><p>单位：天</p>
     */
    public $RotateFreq;

    /**
     * @param string $RoleName <p>角色名称。</p>
     * @param string $Token <p>角色token值。</p>
     * @param string $Remark <p>备注说明。</p>
     * @param string $CreateTime <p>创建时间。</p>
     * @param string $UpdateTime <p>更新时间。</p>
     * @param string $PermType <p>授权类型（Cluster：集群；TopicAndGroup：主题或消费组）</p>
     * @param string $TokenType <p>角色类型</p><p>枚举值：</p><ul><li>Temporary： 轮转密钥</li><li>Permanent： 永久密钥</li></ul>
     * @param string $SecretName <p>SSM 唯一 ID</p>
     * @param integer $RotateFreq <p>轮转周期</p><p>单位：天</p>
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PermType",$param) and $param["PermType"] !== null) {
            $this->PermType = $param["PermType"];
        }

        if (array_key_exists("TokenType",$param) and $param["TokenType"] !== null) {
            $this->TokenType = $param["TokenType"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("RotateFreq",$param) and $param["RotateFreq"] !== null) {
            $this->RotateFreq = $param["RotateFreq"];
        }
    }
}
