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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库配置信息
 *
 * @method string getIsSubscribed() 获取是否已订阅 0：否 1：是
 * @method void setIsSubscribed(string $IsSubscribed) 设置是否已订阅 0：否 1：是
 * @method string getCollationName() 获取数据库排序规则
 * @method void setCollationName(string $CollationName) 设置数据库排序规则
 * @method string getIsAutoCleanupOn() 获取开启CT之后是否自动清理 0：否 1：是
 * @method void setIsAutoCleanupOn(string $IsAutoCleanupOn) 设置开启CT之后是否自动清理 0：否 1：是
 * @method string getIsBrokerEnabled() 获取是否已启用代理  0：否 1：是
 * @method void setIsBrokerEnabled(string $IsBrokerEnabled) 设置是否已启用代理  0：否 1：是
 * @method string getIsCdcEnabled() 获取是否已开启/关闭CDC 0：关闭 1：开启
 * @method void setIsCdcEnabled(string $IsCdcEnabled) 设置是否已开启/关闭CDC 0：关闭 1：开启
 * @method string getIsDbChainingOn() 获取是否已启用/ 禁用CT 0：禁用 1：启用
 * @method void setIsDbChainingOn(string $IsDbChainingOn) 设置是否已启用/ 禁用CT 0：禁用 1：启用
 * @method string getIsEncrypted() 获取是否加密 0：否 1：是
 * @method void setIsEncrypted(string $IsEncrypted) 设置是否加密 0：否 1：是
 * @method string getIsFulltextEnabled() 获取是否全文启用 0：否 1：是
 * @method void setIsFulltextEnabled(string $IsFulltextEnabled) 设置是否全文启用 0：否 1：是
 * @method string getIsMirroring() 获取是否是镜像 0：否 1：是
 * @method void setIsMirroring(string $IsMirroring) 设置是否是镜像 0：否 1：是
 * @method string getIsPublished() 获取是否已发布 0：否 1：是
 * @method void setIsPublished(string $IsPublished) 设置是否已发布 0：否 1：是
 * @method string getIsReadCommittedSnapshotOn() 获取是否开启快照 0：否 1：是
 * @method void setIsReadCommittedSnapshotOn(string $IsReadCommittedSnapshotOn) 设置是否开启快照 0：否 1：是
 * @method string getIsTrustworthyOn() 获取是否可信任 0：否 1：是
 * @method void setIsTrustworthyOn(string $IsTrustworthyOn) 设置是否可信任 0：否 1：是
 * @method string getMirroringState() 获取镜像状态
 * @method void setMirroringState(string $MirroringState) 设置镜像状态
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 * @method string getRecoveryModelDesc() 获取恢复模式
 * @method void setRecoveryModelDesc(string $RecoveryModelDesc) 设置恢复模式
 * @method string getRetentionPeriod() 获取保留天数
 * @method void setRetentionPeriod(string $RetentionPeriod) 设置保留天数
 * @method string getStateDesc() 获取数据库状态
 * @method void setStateDesc(string $StateDesc) 设置数据库状态
 * @method string getUserAccessDesc() 获取用户类型
 * @method void setUserAccessDesc(string $UserAccessDesc) 设置用户类型
 * @method string getCreateTime() 获取数据库创建时间
 * @method void setCreateTime(string $CreateTime) 设置数据库创建时间
 */
class DbNormalDetail extends AbstractModel
{
    /**
     * @var string 是否已订阅 0：否 1：是
     */
    public $IsSubscribed;

    /**
     * @var string 数据库排序规则
     */
    public $CollationName;

    /**
     * @var string 开启CT之后是否自动清理 0：否 1：是
     */
    public $IsAutoCleanupOn;

    /**
     * @var string 是否已启用代理  0：否 1：是
     */
    public $IsBrokerEnabled;

    /**
     * @var string 是否已开启/关闭CDC 0：关闭 1：开启
     */
    public $IsCdcEnabled;

    /**
     * @var string 是否已启用/ 禁用CT 0：禁用 1：启用
     */
    public $IsDbChainingOn;

    /**
     * @var string 是否加密 0：否 1：是
     */
    public $IsEncrypted;

    /**
     * @var string 是否全文启用 0：否 1：是
     */
    public $IsFulltextEnabled;

    /**
     * @var string 是否是镜像 0：否 1：是
     */
    public $IsMirroring;

    /**
     * @var string 是否已发布 0：否 1：是
     */
    public $IsPublished;

    /**
     * @var string 是否开启快照 0：否 1：是
     */
    public $IsReadCommittedSnapshotOn;

    /**
     * @var string 是否可信任 0：否 1：是
     */
    public $IsTrustworthyOn;

    /**
     * @var string 镜像状态
     */
    public $MirroringState;

    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @var string 恢复模式
     */
    public $RecoveryModelDesc;

    /**
     * @var string 保留天数
     */
    public $RetentionPeriod;

    /**
     * @var string 数据库状态
     */
    public $StateDesc;

    /**
     * @var string 用户类型
     */
    public $UserAccessDesc;

    /**
     * @var string 数据库创建时间
     */
    public $CreateTime;

    /**
     * @param string $IsSubscribed 是否已订阅 0：否 1：是
     * @param string $CollationName 数据库排序规则
     * @param string $IsAutoCleanupOn 开启CT之后是否自动清理 0：否 1：是
     * @param string $IsBrokerEnabled 是否已启用代理  0：否 1：是
     * @param string $IsCdcEnabled 是否已开启/关闭CDC 0：关闭 1：开启
     * @param string $IsDbChainingOn 是否已启用/ 禁用CT 0：禁用 1：启用
     * @param string $IsEncrypted 是否加密 0：否 1：是
     * @param string $IsFulltextEnabled 是否全文启用 0：否 1：是
     * @param string $IsMirroring 是否是镜像 0：否 1：是
     * @param string $IsPublished 是否已发布 0：否 1：是
     * @param string $IsReadCommittedSnapshotOn 是否开启快照 0：否 1：是
     * @param string $IsTrustworthyOn 是否可信任 0：否 1：是
     * @param string $MirroringState 镜像状态
     * @param string $Name 数据库名称
     * @param string $RecoveryModelDesc 恢复模式
     * @param string $RetentionPeriod 保留天数
     * @param string $StateDesc 数据库状态
     * @param string $UserAccessDesc 用户类型
     * @param string $CreateTime 数据库创建时间
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
        if (array_key_exists("IsSubscribed",$param) and $param["IsSubscribed"] !== null) {
            $this->IsSubscribed = $param["IsSubscribed"];
        }

        if (array_key_exists("CollationName",$param) and $param["CollationName"] !== null) {
            $this->CollationName = $param["CollationName"];
        }

        if (array_key_exists("IsAutoCleanupOn",$param) and $param["IsAutoCleanupOn"] !== null) {
            $this->IsAutoCleanupOn = $param["IsAutoCleanupOn"];
        }

        if (array_key_exists("IsBrokerEnabled",$param) and $param["IsBrokerEnabled"] !== null) {
            $this->IsBrokerEnabled = $param["IsBrokerEnabled"];
        }

        if (array_key_exists("IsCdcEnabled",$param) and $param["IsCdcEnabled"] !== null) {
            $this->IsCdcEnabled = $param["IsCdcEnabled"];
        }

        if (array_key_exists("IsDbChainingOn",$param) and $param["IsDbChainingOn"] !== null) {
            $this->IsDbChainingOn = $param["IsDbChainingOn"];
        }

        if (array_key_exists("IsEncrypted",$param) and $param["IsEncrypted"] !== null) {
            $this->IsEncrypted = $param["IsEncrypted"];
        }

        if (array_key_exists("IsFulltextEnabled",$param) and $param["IsFulltextEnabled"] !== null) {
            $this->IsFulltextEnabled = $param["IsFulltextEnabled"];
        }

        if (array_key_exists("IsMirroring",$param) and $param["IsMirroring"] !== null) {
            $this->IsMirroring = $param["IsMirroring"];
        }

        if (array_key_exists("IsPublished",$param) and $param["IsPublished"] !== null) {
            $this->IsPublished = $param["IsPublished"];
        }

        if (array_key_exists("IsReadCommittedSnapshotOn",$param) and $param["IsReadCommittedSnapshotOn"] !== null) {
            $this->IsReadCommittedSnapshotOn = $param["IsReadCommittedSnapshotOn"];
        }

        if (array_key_exists("IsTrustworthyOn",$param) and $param["IsTrustworthyOn"] !== null) {
            $this->IsTrustworthyOn = $param["IsTrustworthyOn"];
        }

        if (array_key_exists("MirroringState",$param) and $param["MirroringState"] !== null) {
            $this->MirroringState = $param["MirroringState"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RecoveryModelDesc",$param) and $param["RecoveryModelDesc"] !== null) {
            $this->RecoveryModelDesc = $param["RecoveryModelDesc"];
        }

        if (array_key_exists("RetentionPeriod",$param) and $param["RetentionPeriod"] !== null) {
            $this->RetentionPeriod = $param["RetentionPeriod"];
        }

        if (array_key_exists("StateDesc",$param) and $param["StateDesc"] !== null) {
            $this->StateDesc = $param["StateDesc"];
        }

        if (array_key_exists("UserAccessDesc",$param) and $param["UserAccessDesc"] !== null) {
            $this->UserAccessDesc = $param["UserAccessDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
