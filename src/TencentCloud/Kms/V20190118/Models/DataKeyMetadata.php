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
 * 数据密钥属性信息
 *
 * @method string getDataKeyId() 获取<p>DataKey的全局唯一标识</p>
 * @method void setDataKeyId(string $DataKeyId) 设置<p>DataKey的全局唯一标识</p>
 * @method string getKeyId() 获取<p>CMK的全局唯一标识</p>
 * @method void setKeyId(string $KeyId) 设置<p>CMK的全局唯一标识</p>
 * @method string getKeyName() 获取<p>CMK的名称</p>
 * @method void setKeyName(string $KeyName) 设置<p>CMK的名称</p>
 * @method string getDataKeyName() 获取<p>作为密钥更容易辨识，更容易被人看懂的数据密钥名称</p>
 * @method void setDataKeyName(string $DataKeyName) 设置<p>作为密钥更容易辨识，更容易被人看懂的数据密钥名称</p>
 * @method integer getNumberOfBytes() 获取<p>数据密钥的长度,单位字节</p>
 * @method void setNumberOfBytes(integer $NumberOfBytes) 设置<p>数据密钥的长度,单位字节</p>
 * @method integer getCreateTime() 获取<p>密钥创建时间</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>密钥创建时间</p>
 * @method string getDescription() 获取<p>DataKey的描述</p>
 * @method void setDescription(string $Description) 设置<p>DataKey的描述</p>
 * @method string getKeyState() 获取<p>DataKey的状态， 取值为：Enabled | Disabled | PendingDelete</p>
 * @method void setKeyState(string $KeyState) 设置<p>DataKey的状态， 取值为：Enabled | Disabled | PendingDelete</p>
 * @method integer getCreatorUin() 获取<p>创建者</p>
 * @method void setCreatorUin(integer $CreatorUin) 设置<p>创建者</p>
 * @method string getOwner() 获取<p>数据密钥的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
 * @method void setOwner(string $Owner) 设置<p>数据密钥的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
 * @method integer getDeletionDate() 获取<p>计划删除的时间</p>
 * @method void setDeletionDate(integer $DeletionDate) 设置<p>计划删除的时间</p>
 * @method string getOrigin() 获取<p>DataKey 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
 * @method void setOrigin(string $Origin) 设置<p>DataKey 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
 * @method string getHsmClusterId() 获取<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
 * @method string getResourceId() 获取<p>资源ID，格式：creatorUin/$creatorUin/$dataKeyId</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID，格式：creatorUin/$creatorUin/$dataKeyId</p>
 * @method integer getIsSyncReplica() 获取<p>密钥是否是主副本。0:主本，1:同步副本。</p>
 * @method void setIsSyncReplica(integer $IsSyncReplica) 设置<p>密钥是否是主副本。0:主本，1:同步副本。</p>
 * @method string getSourceRegion() 获取<p>同步的原始地域</p>
 * @method void setSourceRegion(string $SourceRegion) 设置<p>同步的原始地域</p>
 * @method integer getSyncStatus() 获取<p>密钥同步的状态，0:未同步，1:同步成功，2:同步失败，3:同步中。</p>
 * @method void setSyncStatus(integer $SyncStatus) 设置<p>密钥同步的状态，0:未同步，1:同步成功，2:同步失败，3:同步中。</p>
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
 * @method string getCreatorUinString() 获取<p>创建者UIN</p>
 * @method void setCreatorUinString(string $CreatorUinString) 设置<p>创建者UIN</p>
 */
class DataKeyMetadata extends AbstractModel
{
    /**
     * @var string <p>DataKey的全局唯一标识</p>
     */
    public $DataKeyId;

    /**
     * @var string <p>CMK的全局唯一标识</p>
     */
    public $KeyId;

    /**
     * @var string <p>CMK的名称</p>
     */
    public $KeyName;

    /**
     * @var string <p>作为密钥更容易辨识，更容易被人看懂的数据密钥名称</p>
     */
    public $DataKeyName;

    /**
     * @var integer <p>数据密钥的长度,单位字节</p>
     */
    public $NumberOfBytes;

    /**
     * @var integer <p>密钥创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>DataKey的描述</p>
     */
    public $Description;

    /**
     * @var string <p>DataKey的状态， 取值为：Enabled | Disabled | PendingDelete</p>
     */
    public $KeyState;

    /**
     * @var integer <p>创建者</p>
     */
    public $CreatorUin;

    /**
     * @var string <p>数据密钥的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
     */
    public $Owner;

    /**
     * @var integer <p>计划删除的时间</p>
     */
    public $DeletionDate;

    /**
     * @var string <p>DataKey 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
     */
    public $Origin;

    /**
     * @var string <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
     */
    public $HsmClusterId;

    /**
     * @var string <p>资源ID，格式：creatorUin/$creatorUin/$dataKeyId</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>密钥是否是主副本。0:主本，1:同步副本。</p>
     */
    public $IsSyncReplica;

    /**
     * @var string <p>同步的原始地域</p>
     */
    public $SourceRegion;

    /**
     * @var integer <p>密钥同步的状态，0:未同步，1:同步成功，2:同步失败，3:同步中。</p>
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
     * @var string <p>创建者UIN</p>
     */
    public $CreatorUinString;

    /**
     * @param string $DataKeyId <p>DataKey的全局唯一标识</p>
     * @param string $KeyId <p>CMK的全局唯一标识</p>
     * @param string $KeyName <p>CMK的名称</p>
     * @param string $DataKeyName <p>作为密钥更容易辨识，更容易被人看懂的数据密钥名称</p>
     * @param integer $NumberOfBytes <p>数据密钥的长度,单位字节</p>
     * @param integer $CreateTime <p>密钥创建时间</p>
     * @param string $Description <p>DataKey的描述</p>
     * @param string $KeyState <p>DataKey的状态， 取值为：Enabled | Disabled | PendingDelete</p>
     * @param integer $CreatorUin <p>创建者</p>
     * @param string $Owner <p>数据密钥的创建者，用户创建的为 user，授权各云产品自动创建的为对应的产品名</p>
     * @param integer $DeletionDate <p>计划删除的时间</p>
     * @param string $Origin <p>DataKey 密钥材料类型，由KMS创建的为： TENCENT_KMS， 由用户导入的类型为：EXTERNAL</p>
     * @param string $HsmClusterId <p>HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）</p>
     * @param string $ResourceId <p>资源ID，格式：creatorUin/$creatorUin/$dataKeyId</p>
     * @param integer $IsSyncReplica <p>密钥是否是主副本。0:主本，1:同步副本。</p>
     * @param string $SourceRegion <p>同步的原始地域</p>
     * @param integer $SyncStatus <p>密钥同步的状态，0:未同步，1:同步成功，2:同步失败，3:同步中。</p>
     * @param string $SyncMessages <p>同步的结果描述</p>
     * @param integer $SyncStartTime <p>同步的开始时间</p>
     * @param integer $SyncEndTime <p>同步的结束时间</p>
     * @param string $SourceHsmClusterId <p>同步的原始集群，如果为空，是公有云公共集群</p>
     * @param integer $AccountAppId <p>成员账号appId</p>
     * @param integer $AccountUin <p>成员账号uin</p>
     * @param string $AccountName <p>成员账号名称</p>
     * @param string $CreatorUinString <p>创建者UIN</p>
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
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

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("DeletionDate",$param) and $param["DeletionDate"] !== null) {
            $this->DeletionDate = $param["DeletionDate"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
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

        if (array_key_exists("CreatorUinString",$param) and $param["CreatorUinString"] !== null) {
            $this->CreatorUinString = $param["CreatorUinString"];
        }
    }
}
