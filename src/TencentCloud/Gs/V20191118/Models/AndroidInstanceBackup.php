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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安卓实例备份
 *
 * @method string getBackupId() 获取备份ID
 * @method void setBackupId(string $BackupId) 设置备份ID
 * @method string getState() 获取备份状态
 * @method void setState(string $State) 设置备份状态
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method integer getSize() 获取大小，单位 Byte
 * @method void setSize(integer $Size) 设置大小，单位 Byte
 * @method string getAndroidInstanceId() 获取备份的安卓实例 ID
 * @method void setAndroidInstanceId(string $AndroidInstanceId) 设置备份的安卓实例 ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class AndroidInstanceBackup extends AbstractModel
{
    /**
     * @var string 备份ID
     */
    public $BackupId;

    /**
     * @var string 备份状态
     */
    public $State;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var integer 大小，单位 Byte
     */
    public $Size;

    /**
     * @var string 备份的安卓实例 ID
     */
    public $AndroidInstanceId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $BackupId 备份ID
     * @param string $State 备份状态
     * @param string $Zone 可用区
     * @param integer $Size 大小，单位 Byte
     * @param string $AndroidInstanceId 备份的安卓实例 ID
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("AndroidInstanceId",$param) and $param["AndroidInstanceId"] !== null) {
            $this->AndroidInstanceId = $param["AndroidInstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
