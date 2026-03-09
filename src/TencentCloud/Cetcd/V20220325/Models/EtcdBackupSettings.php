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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * etcd备份设置
 *
 * @method integer getBackupInterval() 获取备份间隔(s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupInterval(integer $BackupInterval) 设置备份间隔(s)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxBackupCount() 获取最大备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxBackupCount(integer $MaxBackupCount) 设置最大备份个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosBucketName() 获取COS桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosBucketName(string $CosBucketName) 设置COS桶名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class EtcdBackupSettings extends AbstractModel
{
    /**
     * @var integer 备份间隔(s)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupInterval;

    /**
     * @var integer 最大备份个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxBackupCount;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var string COS桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosBucketName;

    /**
     * @param integer $BackupInterval 备份间隔(s)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxBackupCount 最大备份个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosBucketName COS桶名称
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
        if (array_key_exists("BackupInterval",$param) and $param["BackupInterval"] !== null) {
            $this->BackupInterval = $param["BackupInterval"];
        }

        if (array_key_exists("MaxBackupCount",$param) and $param["MaxBackupCount"] !== null) {
            $this->MaxBackupCount = $param["MaxBackupCount"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("CosBucketName",$param) and $param["CosBucketName"] !== null) {
            $this->CosBucketName = $param["CosBucketName"];
        }
    }
}
