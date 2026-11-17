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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupPlanSourceInfo请求参数结构体
 *
 * @method string getBackupPlanId() 获取备份计划 ID。
 * @method void setBackupPlanId(string $BackupPlanId) 设置备份计划 ID。
 * @method BackupEndpoint getSourceEndPoint() 获取新的备份源实例信息。
 * @method void setSourceEndPoint(BackupEndpoint $SourceEndPoint) 设置新的备份源实例信息。
 * @method string getBackupPlanName() 获取新的备份名称。
 * @method void setBackupPlanName(string $BackupPlanName) 设置新的备份名称。
 * @method BackupObject getBackupObject() 获取新的备份对象信息。
 * @method void setBackupObject(BackupObject $BackupObject) 设置新的备份对象信息。
 * @method integer getBackupNow() 获取是否立即启动新的备份任务。支持的取值为：1 - 立即启动；0 - 按备份策略配置的时间启动。
 * @method void setBackupNow(integer $BackupNow) 设置是否立即启动新的备份任务。支持的取值为：1 - 立即启动；0 - 按备份策略配置的时间启动。
 */
class ModifyBackupPlanSourceInfoRequest extends AbstractModel
{
    /**
     * @var string 备份计划 ID。
     */
    public $BackupPlanId;

    /**
     * @var BackupEndpoint 新的备份源实例信息。
     */
    public $SourceEndPoint;

    /**
     * @var string 新的备份名称。
     */
    public $BackupPlanName;

    /**
     * @var BackupObject 新的备份对象信息。
     */
    public $BackupObject;

    /**
     * @var integer 是否立即启动新的备份任务。支持的取值为：1 - 立即启动；0 - 按备份策略配置的时间启动。
     */
    public $BackupNow;

    /**
     * @param string $BackupPlanId 备份计划 ID。
     * @param BackupEndpoint $SourceEndPoint 新的备份源实例信息。
     * @param string $BackupPlanName 新的备份名称。
     * @param BackupObject $BackupObject 新的备份对象信息。
     * @param integer $BackupNow 是否立即启动新的备份任务。支持的取值为：1 - 立即启动；0 - 按备份策略配置的时间启动。
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
        if (array_key_exists("BackupPlanId",$param) and $param["BackupPlanId"] !== null) {
            $this->BackupPlanId = $param["BackupPlanId"];
        }

        if (array_key_exists("SourceEndPoint",$param) and $param["SourceEndPoint"] !== null) {
            $this->SourceEndPoint = new BackupEndpoint();
            $this->SourceEndPoint->deserialize($param["SourceEndPoint"]);
        }

        if (array_key_exists("BackupPlanName",$param) and $param["BackupPlanName"] !== null) {
            $this->BackupPlanName = $param["BackupPlanName"];
        }

        if (array_key_exists("BackupObject",$param) and $param["BackupObject"] !== null) {
            $this->BackupObject = new BackupObject();
            $this->BackupObject->deserialize($param["BackupObject"]);
        }

        if (array_key_exists("BackupNow",$param) and $param["BackupNow"] !== null) {
            $this->BackupNow = $param["BackupNow"];
        }
    }
}
