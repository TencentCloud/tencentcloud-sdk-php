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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建ApiKey接口出参
 *
 * @method integer getId() 获取<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置<p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorpId() 获取<p>企业id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(string $CorpId) 设置<p>企业id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiKey() 获取<p>apiKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiKey(string $ApiKey) 设置<p>apiKey</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultUser() 获取<p>默认用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultUser(string $DefaultUser) 设置<p>默认用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取<p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置<p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApiKeyAuthApplyVO extends AbstractModel
{
    /**
     * @var integer <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string <p>企业id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string <p>apiKey</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiKey;

    /**
     * @var string <p>默认用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultUser;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @param integer $Id <p>id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorpId <p>企业id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiKey <p>apiKey</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultUser <p>默认用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser <p>更新人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt <p>更新时间</p>
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

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("DefaultUser",$param) and $param["DefaultUser"] !== null) {
            $this->DefaultUser = $param["DefaultUser"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
