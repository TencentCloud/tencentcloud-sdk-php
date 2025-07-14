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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CMK属性信息
 *
 * @method string getKeyId() 获取CMK的全局唯一标识
 * @method void setKeyId(string $KeyId) 设置CMK的全局唯一标识
 * @method string getAlias() 获取作为密钥更容易辨识，更容易被人看懂的别名
 * @method void setAlias(string $Alias) 设置作为密钥更容易辨识，更容易被人看懂的别名
 * @method integer getCreateTime() 获取密钥创建时间
 * @method void setCreateTime(integer $CreateTime) 设置密钥创建时间
 * @method string getDescription() 获取CMK的描述
 * @method void setDescription(string $Description) 设置CMK的描述
 * @method string getKeyState() 获取CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived
 * @method void setKeyState(string $KeyState) 设置CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived
 * @method string getKeyUsage() 获取CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC
 * @method void setKeyUsage(string $KeyUsage) 设置CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC
 * @method integer getType() 获取CMK类型，2 表示符合FIPS标准，4表示符合国密标准
 * @method void setType(integer $Type) 设置CMK类型，2 表示符合FIPS标准，4表示符合国密标准
 * @method integer getCreatorUin() 获取创建者
 * @method void setCreatorUin(integer $CreatorUin) 设置创建者
 * @method boolean getKeyRotationEnabled() 获取是否开启了密钥轮换功能
 * @method void setKeyRotationEnabled(boolean $KeyRotationEnabled) 设置是否开启了密钥轮换功能
 * @method string getOwner() 获取CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名
 * @method void setOwner(string $Owner) 设置CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名
 * @method integer getNextRotateTime() 获取在密钥轮换开启状态下，下次轮换的时间
 * @method void setNextRotateTime(integer $NextRotateTime) 设置在密钥轮换开启状态下，下次轮换的时间
 * @method integer getDeletionDate() 获取计划删除的时间
 * @method void setDeletionDate(integer $DeletionDate) 设置计划删除的时间
 * @method string getOrigin() 获取CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL
 * @method void setOrigin(string $Origin) 设置CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL
 * @method integer getValidTo() 获取在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期
 * @method void setValidTo(integer $ValidTo) 设置在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期
 * @method string getResourceId() 获取资源ID，格式：creatorUin/$creatorUin/$keyId
 * @method void setResourceId(string $ResourceId) 设置资源ID，格式：creatorUin/$creatorUin/$keyId
 * @method string getHsmClusterId() 获取HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）
 * @method void setHsmClusterId(string $HsmClusterId) 设置HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）
 * @method integer getRotateDays() 获取密钥轮转周期（天）
 * @method void setRotateDays(integer $RotateDays) 设置密钥轮转周期（天）
 * @method integer getLastRotateTime() 获取上次乱转时间（Unix timestamp）
 * @method void setLastRotateTime(integer $LastRotateTime) 设置上次乱转时间（Unix timestamp）
 * @method integer getIsSyncReplica() 获取 密钥是否是主副本。0:主本，1:同步副本。
 * @method void setIsSyncReplica(integer $IsSyncReplica) 设置 密钥是否是主副本。0:主本，1:同步副本。
 * @method string getSourceRegion() 获取同步的原始地域
 * @method void setSourceRegion(string $SourceRegion) 设置同步的原始地域
 * @method integer getSyncStatus() 获取密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。
 * @method void setSyncStatus(integer $SyncStatus) 设置密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。
 * @method string getSyncMessages() 获取同步的结果描述
 * @method void setSyncMessages(string $SyncMessages) 设置同步的结果描述
 * @method integer getSyncStartTime() 获取同步的开始时间
 * @method void setSyncStartTime(integer $SyncStartTime) 设置同步的开始时间
 * @method integer getSyncEndTime() 获取同步的结束时间
 * @method void setSyncEndTime(integer $SyncEndTime) 设置同步的结束时间
 * @method string getSourceHsmClusterId() 获取同步的原始集群，如果为空，是公有云公共集群
 * @method void setSourceHsmClusterId(string $SourceHsmClusterId) 设置同步的原始集群，如果为空，是公有云公共集群
 */
class KeyMetadata extends AbstractModel
{
    /**
     * @var string CMK的全局唯一标识
     */
    public $KeyId;

    /**
     * @var string 作为密钥更容易辨识，更容易被人看懂的别名
     */
    public $Alias;

    /**
     * @var integer 密钥创建时间
     */
    public $CreateTime;

    /**
     * @var string CMK的描述
     */
    public $Description;

    /**
     * @var string CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived
     */
    public $KeyState;

    /**
     * @var string CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC
     */
    public $KeyUsage;

    /**
     * @var integer CMK类型，2 表示符合FIPS标准，4表示符合国密标准
     */
    public $Type;

    /**
     * @var integer 创建者
     */
    public $CreatorUin;

    /**
     * @var boolean 是否开启了密钥轮换功能
     */
    public $KeyRotationEnabled;

    /**
     * @var string CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名
     */
    public $Owner;

    /**
     * @var integer 在密钥轮换开启状态下，下次轮换的时间
     */
    public $NextRotateTime;

    /**
     * @var integer 计划删除的时间
     */
    public $DeletionDate;

    /**
     * @var string CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL
     */
    public $Origin;

    /**
     * @var integer 在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期
     */
    public $ValidTo;

    /**
     * @var string 资源ID，格式：creatorUin/$creatorUin/$keyId
     */
    public $ResourceId;

    /**
     * @var string HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）
     */
    public $HsmClusterId;

    /**
     * @var integer 密钥轮转周期（天）
     */
    public $RotateDays;

    /**
     * @var integer 上次乱转时间（Unix timestamp）
     */
    public $LastRotateTime;

    /**
     * @var integer  密钥是否是主副本。0:主本，1:同步副本。
     */
    public $IsSyncReplica;

    /**
     * @var string 同步的原始地域
     */
    public $SourceRegion;

    /**
     * @var integer 密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。
     */
    public $SyncStatus;

    /**
     * @var string 同步的结果描述
     */
    public $SyncMessages;

    /**
     * @var integer 同步的开始时间
     */
    public $SyncStartTime;

    /**
     * @var integer 同步的结束时间
     */
    public $SyncEndTime;

    /**
     * @var string 同步的原始集群，如果为空，是公有云公共集群
     */
    public $SourceHsmClusterId;

    /**
     * @param string $KeyId CMK的全局唯一标识
     * @param string $Alias 作为密钥更容易辨识，更容易被人看懂的别名
     * @param integer $CreateTime 密钥创建时间
     * @param string $Description CMK的描述
     * @param string $KeyState CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived
     * @param string $KeyUsage CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC
     * @param integer $Type CMK类型，2 表示符合FIPS标准，4表示符合国密标准
     * @param integer $CreatorUin 创建者
     * @param boolean $KeyRotationEnabled 是否开启了密钥轮换功能
     * @param string $Owner CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名
     * @param integer $NextRotateTime 在密钥轮换开启状态下，下次轮换的时间
     * @param integer $DeletionDate 计划删除的时间
     * @param string $Origin CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL
     * @param integer $ValidTo 在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期
     * @param string $ResourceId 资源ID，格式：creatorUin/$creatorUin/$keyId
     * @param string $HsmClusterId HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）
     * @param integer $RotateDays 密钥轮转周期（天）
     * @param integer $LastRotateTime 上次乱转时间（Unix timestamp）
     * @param integer $IsSyncReplica  密钥是否是主副本。0:主本，1:同步副本。
     * @param string $SourceRegion 同步的原始地域
     * @param integer $SyncStatus 密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。
     * @param string $SyncMessages 同步的结果描述
     * @param integer $SyncStartTime 同步的开始时间
     * @param integer $SyncEndTime 同步的结束时间
     * @param string $SourceHsmClusterId 同步的原始集群，如果为空，是公有云公共集群
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("KeyRotationEnabled",$param) and $param["KeyRotationEnabled"] !== null) {
            $this->KeyRotationEnabled = $param["KeyRotationEnabled"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("NextRotateTime",$param) and $param["NextRotateTime"] !== null) {
            $this->NextRotateTime = $param["NextRotateTime"];
        }

        if (array_key_exists("DeletionDate",$param) and $param["DeletionDate"] !== null) {
            $this->DeletionDate = $param["DeletionDate"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ValidTo",$param) and $param["ValidTo"] !== null) {
            $this->ValidTo = $param["ValidTo"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("RotateDays",$param) and $param["RotateDays"] !== null) {
            $this->RotateDays = $param["RotateDays"];
        }

        if (array_key_exists("LastRotateTime",$param) and $param["LastRotateTime"] !== null) {
            $this->LastRotateTime = $param["LastRotateTime"];
        }

        if (array_key_exists("IsSyncReplica",$param) and $param["IsSyncReplica"] !== null) {
            $this->IsSyncReplica = $param["IsSyncReplica"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncMessages",$param) and $param["SyncMessages"] !== null) {
            $this->SyncMessages = $param["SyncMessages"];
        }

        if (array_key_exists("SyncStartTime",$param) and $param["SyncStartTime"] !== null) {
            $this->SyncStartTime = $param["SyncStartTime"];
        }

        if (array_key_exists("SyncEndTime",$param) and $param["SyncEndTime"] !== null) {
            $this->SyncEndTime = $param["SyncEndTime"];
        }

        if (array_key_exists("SourceHsmClusterId",$param) and $param["SourceHsmClusterId"] !== null) {
            $this->SourceHsmClusterId = $param["SourceHsmClusterId"];
        }
    }
}
