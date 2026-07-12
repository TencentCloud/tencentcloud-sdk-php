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
 * @method string getKeyId() 获取<p>CMK的全局唯一标识</p>
 * @method void setKeyId(string $KeyId) 设置<p>CMK的全局唯一标识</p>
 * @method string getAlias() 获取<p>作为密钥更容易辨识，更容易被人看懂的别名</p>
 * @method void setAlias(string $Alias) 设置<p>作为密钥更容易辨识，更容易被人看懂的别名</p>
 * @method integer getCreateTime() 获取<p>密钥创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>密钥创建时间</p>
 * @method string getDescription() 获取<p>CMK的描述</p>
 * @method void setDescription(string $Description) 设置<p>CMK的描述</p>
 * @method string getKeyState() 获取<p>CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
 * @method void setKeyState(string $KeyState) 设置<p>CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
 * @method string getKeyUsage() 获取<p>CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
 * @method void setKeyUsage(string $KeyUsage) 设置<p>CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
 * @method integer getType() 获取<p>CMK类型，2 表示符合FIPS 140-2标准，4表示符合国密标准</p><p>枚举值：</p><ul><li>2： 表示符合FIPS 140-2标准</li><li>4： 表示符合国密标准</li></ul>
 * @method void setType(integer $Type) 设置<p>CMK类型，2 表示符合FIPS 140-2标准，4表示符合国密标准</p><p>枚举值：</p><ul><li>2： 表示符合FIPS 140-2标准</li><li>4： 表示符合国密标准</li></ul>
 * @method integer getCreatorUin() 获取<p>创建者</p>
 * @method void setCreatorUin(integer $CreatorUin) 设置<p>创建者</p>
 * @method boolean getKeyRotationEnabled() 获取<p>是否开启了密钥轮换功能</p>
 * @method void setKeyRotationEnabled(boolean $KeyRotationEnabled) 设置<p>是否开启了密钥轮换功能</p>
 * @method string getOwner() 获取<p>CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
 * @method void setOwner(string $Owner) 设置<p>CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
 * @method integer getNextRotateTime() 获取<p>在密钥轮换开启状态下，下次轮换的时间</p>
 * @method void setNextRotateTime(integer $NextRotateTime) 设置<p>在密钥轮换开启状态下，下次轮换的时间</p>
 * @method integer getDeletionDate() 获取<p>计划删除的时间</p>
 * @method void setDeletionDate(integer $DeletionDate) 设置<p>计划删除的时间</p>
 * @method string getOrigin() 获取<p>CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
 * @method void setOrigin(string $Origin) 设置<p>CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
 * @method integer getValidTo() 获取<p>在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期</p>
 * @method void setValidTo(integer $ValidTo) 设置<p>在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期</p>
 * @method string getResourceId() 获取<p>资源ID，格式：creatorUin/$creatorUin/$keyId</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，格式：creatorUin/$creatorUin/$keyId</p>
 * @method string getHsmClusterId() 获取<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method integer getRotateDays() 获取<p>密钥轮转周期（天）</p>
 * @method void setRotateDays(integer $RotateDays) 设置<p>密钥轮转周期（天）</p>
 * @method integer getLastRotateTime() 获取<p>上次轮转时间（Unix timestamp）</p>
 * @method void setLastRotateTime(integer $LastRotateTime) 设置<p>上次轮转时间（Unix timestamp）</p>
 * @method integer getIsSyncReplica() 获取<p>密钥是否是主副本。0:主本，1:同步副本。</p>
 * @method void setIsSyncReplica(integer $IsSyncReplica) 设置<p>密钥是否是主副本。0:主本，1:同步副本。</p>
 * @method string getSourceRegion() 获取<p>同步的原始地域</p>
 * @method void setSourceRegion(string $SourceRegion) 设置<p>同步的原始地域</p>
 * @method integer getSyncStatus() 获取<p>密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。</p>
 * @method void setSyncStatus(integer $SyncStatus) 设置<p>密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。</p>
 * @method string getSyncMessages() 获取<p>同步的结果描述</p>
 * @method void setSyncMessages(string $SyncMessages) 设置<p>同步的结果描述</p>
 * @method integer getSyncStartTime() 获取<p>同步的开始时间</p>
 * @method void setSyncStartTime(integer $SyncStartTime) 设置<p>同步的开始时间</p>
 * @method integer getSyncEndTime() 获取<p>同步的结束时间</p>
 * @method void setSyncEndTime(integer $SyncEndTime) 设置<p>同步的结束时间</p>
 * @method string getSourceHsmClusterId() 获取<p>同步的原始集群，如果为空，是公有云公共集群</p>
 * @method void setSourceHsmClusterId(string $SourceHsmClusterId) 设置<p>同步的原始集群，如果为空，是公有云公共集群</p>
 * @method integer getAccountAppId() 获取<p>成员账号appId</p>
 * @method void setAccountAppId(integer $AccountAppId) 设置<p>成员账号appId</p>
 * @method integer getAccountUin() 获取<p>成员账号uin</p>
 * @method void setAccountUin(integer $AccountUin) 设置<p>成员账号uin</p>
 * @method string getAccountName() 获取<p>成员账号名称</p>
 * @method void setAccountName(string $AccountName) 设置<p>成员账号名称</p>
 */
class KeyMetadata extends AbstractModel
{
    /**
     * @var string <p>CMK的全局唯一标识</p>
     */
    public $KeyId;

    /**
     * @var string <p>作为密钥更容易辨识，更容易被人看懂的别名</p>
     */
    public $Alias;

    /**
     * @var integer <p>密钥创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>CMK的描述</p>
     */
    public $Description;

    /**
     * @var string <p>CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
     */
    public $KeyState;

    /**
     * @var string <p>CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
     */
    public $KeyUsage;

    /**
     * @var integer <p>CMK类型，2 表示符合FIPS 140-2标准，4表示符合国密标准</p><p>枚举值：</p><ul><li>2： 表示符合FIPS 140-2标准</li><li>4： 表示符合国密标准</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>创建者</p>
     */
    public $CreatorUin;

    /**
     * @var boolean <p>是否开启了密钥轮换功能</p>
     */
    public $KeyRotationEnabled;

    /**
     * @var string <p>CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
     */
    public $Owner;

    /**
     * @var integer <p>在密钥轮换开启状态下，下次轮换的时间</p>
     */
    public $NextRotateTime;

    /**
     * @var integer <p>计划删除的时间</p>
     */
    public $DeletionDate;

    /**
     * @var string <p>CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
     */
    public $Origin;

    /**
     * @var integer <p>在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期</p>
     */
    public $ValidTo;

    /**
     * @var string <p>资源ID，格式：creatorUin/$creatorUin/$keyId</p>
     */
    public $ResourceId;

    /**
     * @var string <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
     */
    public $HsmClusterId;

    /**
     * @var integer <p>密钥轮转周期（天）</p>
     */
    public $RotateDays;

    /**
     * @var integer <p>上次轮转时间（Unix timestamp）</p>
     */
    public $LastRotateTime;

    /**
     * @var integer <p>密钥是否是主副本。0:主本，1:同步副本。</p>
     */
    public $IsSyncReplica;

    /**
     * @var string <p>同步的原始地域</p>
     */
    public $SourceRegion;

    /**
     * @var integer <p>密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。</p>
     */
    public $SyncStatus;

    /**
     * @var string <p>同步的结果描述</p>
     */
    public $SyncMessages;

    /**
     * @var integer <p>同步的开始时间</p>
     */
    public $SyncStartTime;

    /**
     * @var integer <p>同步的结束时间</p>
     */
    public $SyncEndTime;

    /**
     * @var string <p>同步的原始集群，如果为空，是公有云公共集群</p>
     */
    public $SourceHsmClusterId;

    /**
     * @var integer <p>成员账号appId</p>
     */
    public $AccountAppId;

    /**
     * @var integer <p>成员账号uin</p>
     */
    public $AccountUin;

    /**
     * @var string <p>成员账号名称</p>
     */
    public $AccountName;

    /**
     * @param string $KeyId <p>CMK的全局唯一标识</p>
     * @param string $Alias <p>作为密钥更容易辨识，更容易被人看懂的别名</p>
     * @param integer $CreateTime <p>密钥创建时间</p>
     * @param string $Description <p>CMK的描述</p>
     * @param string $KeyState <p>CMK的状态， 取值为：Enabled | Disabled | PendingDelete | PendingImport | Archived</p>
     * @param string $KeyUsage <p>CMK用途，取值为: ENCRYPT_DECRYPT | ASYMMETRIC_DECRYPT_RSA_2048 | ASYMMETRIC_DECRYPT_SM2 | ASYMMETRIC_SIGN_VERIFY_SM2 | ASYMMETRIC_SIGN_VERIFY_RSA_2048 | ASYMMETRIC_SIGN_VERIFY_ECC</p>
     * @param integer $Type <p>CMK类型，2 表示符合FIPS 140-2标准，4表示符合国密标准</p><p>枚举值：</p><ul><li>2： 表示符合FIPS 140-2标准</li><li>4： 表示符合国密标准</li></ul>
     * @param integer $CreatorUin <p>创建者</p>
     * @param boolean $KeyRotationEnabled <p>是否开启了密钥轮换功能</p>
     * @param string $Owner <p>CMK的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
     * @param integer $NextRotateTime <p>在密钥轮换开启状态下，下次轮换的时间</p>
     * @param integer $DeletionDate <p>计划删除的时间</p>
     * @param string $Origin <p>CMK 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
     * @param integer $ValidTo <p>在Origin为  EXTERNAL 时有效，表示密钥材料的有效日期， 0 表示不过期</p>
     * @param string $ResourceId <p>资源ID，格式：creatorUin/$creatorUin/$keyId</p>
     * @param string $HsmClusterId <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
     * @param integer $RotateDays <p>密钥轮转周期（天）</p>
     * @param integer $LastRotateTime <p>上次轮转时间（Unix timestamp）</p>
     * @param integer $IsSyncReplica <p>密钥是否是主副本。0:主本，1:同步副本。</p>
     * @param string $SourceRegion <p>同步的原始地域</p>
     * @param integer $SyncStatus <p>密钥同步的状态，0:未同步,1:同步成功,2:同步失败,3:同步中。</p>
     * @param string $SyncMessages <p>同步的结果描述</p>
     * @param integer $SyncStartTime <p>同步的开始时间</p>
     * @param integer $SyncEndTime <p>同步的结束时间</p>
     * @param string $SourceHsmClusterId <p>同步的原始集群，如果为空，是公有云公共集群</p>
     * @param integer $AccountAppId <p>成员账号appId</p>
     * @param integer $AccountUin <p>成员账号uin</p>
     * @param string $AccountName <p>成员账号名称</p>
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

        if (array_key_exists("AccountAppId",$param) and $param["AccountAppId"] !== null) {
            $this->AccountAppId = $param["AccountAppId"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }
    }
}
