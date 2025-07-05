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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRemoteBackupConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getRemoteBackupSave() 获取异地数据备份开关，off - 关闭异地备份，on-开启异地备份
 * @method void setRemoteBackupSave(string $RemoteBackupSave) 设置异地数据备份开关，off - 关闭异地备份，on-开启异地备份
 * @method string getRemoteBinlogSave() 获取异地日志备份开关，off - 关闭异地备份，on-开启异地备份，只有在参数RemoteBackupSave为on时，RemoteBinlogSave参数才可设置为on
 * @method void setRemoteBinlogSave(string $RemoteBinlogSave) 设置异地日志备份开关，off - 关闭异地备份，on-开启异地备份，只有在参数RemoteBackupSave为on时，RemoteBinlogSave参数才可设置为on
 * @method array getRemoteRegion() 获取用户设置异地备份地域列表
 * @method void setRemoteRegion(array $RemoteRegion) 设置用户设置异地备份地域列表
 * @method integer getExpireDays() 获取异地备份保留时间，单位为天
 * @method void setExpireDays(integer $ExpireDays) 设置异地备份保留时间，单位为天
 */
class ModifyRemoteBackupConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 异地数据备份开关，off - 关闭异地备份，on-开启异地备份
     */
    public $RemoteBackupSave;

    /**
     * @var string 异地日志备份开关，off - 关闭异地备份，on-开启异地备份，只有在参数RemoteBackupSave为on时，RemoteBinlogSave参数才可设置为on
     */
    public $RemoteBinlogSave;

    /**
     * @var array 用户设置异地备份地域列表
     */
    public $RemoteRegion;

    /**
     * @var integer 异地备份保留时间，单位为天
     */
    public $ExpireDays;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $RemoteBackupSave 异地数据备份开关，off - 关闭异地备份，on-开启异地备份
     * @param string $RemoteBinlogSave 异地日志备份开关，off - 关闭异地备份，on-开启异地备份，只有在参数RemoteBackupSave为on时，RemoteBinlogSave参数才可设置为on
     * @param array $RemoteRegion 用户设置异地备份地域列表
     * @param integer $ExpireDays 异地备份保留时间，单位为天
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RemoteBackupSave",$param) and $param["RemoteBackupSave"] !== null) {
            $this->RemoteBackupSave = $param["RemoteBackupSave"];
        }

        if (array_key_exists("RemoteBinlogSave",$param) and $param["RemoteBinlogSave"] !== null) {
            $this->RemoteBinlogSave = $param["RemoteBinlogSave"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }

        if (array_key_exists("ExpireDays",$param) and $param["ExpireDays"] !== null) {
            $this->ExpireDays = $param["ExpireDays"];
        }
    }
}
