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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrateDBInstances请求参数结构体
 *
 * @method string getDatabaseType() 获取数据库类型，如mysql
 * @method void setDatabaseType(string $DatabaseType) 设置数据库类型，如mysql
 * @method string getMigrateRole() 获取实例作为迁移的源还是目标,src(表示源)，dst(表示目标)
 * @method void setMigrateRole(string $MigrateRole) 设置实例作为迁移的源还是目标,src(表示源)，dst(表示目标)
 * @method string getInstanceId() 获取云数据库实例ID
 * @method void setInstanceId(string $InstanceId) 设置云数据库实例ID
 * @method string getInstanceName() 获取云数据库名称
 * @method void setInstanceName(string $InstanceName) 设置云数据库名称
 * @method integer getLimit() 获取返回数量限制
 * @method void setLimit(integer $Limit) 设置返回数量限制
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getAccountMode() 获取资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)
 * @method void setAccountMode(string $AccountMode) 设置资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)
 * @method string getTmpSecretId() 获取临时密钥Id，若为跨账号资源此项必填
 * @method void setTmpSecretId(string $TmpSecretId) 设置临时密钥Id，若为跨账号资源此项必填
 * @method string getTmpSecretKey() 获取临时密钥Key，若为跨账号资源此项必填
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置临时密钥Key，若为跨账号资源此项必填
 * @method string getTmpToken() 获取临时密钥Token，若为跨账号资源此项必填
 * @method void setTmpToken(string $TmpToken) 设置临时密钥Token，若为跨账号资源此项必填
 */
class DescribeMigrateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string 数据库类型，如mysql
     */
    public $DatabaseType;

    /**
     * @var string 实例作为迁移的源还是目标,src(表示源)，dst(表示目标)
     */
    public $MigrateRole;

    /**
     * @var string 云数据库实例ID
     */
    public $InstanceId;

    /**
     * @var string 云数据库名称
     */
    public $InstanceName;

    /**
     * @var integer 返回数量限制
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)
     */
    public $AccountMode;

    /**
     * @var string 临时密钥Id，若为跨账号资源此项必填
     */
    public $TmpSecretId;

    /**
     * @var string 临时密钥Key，若为跨账号资源此项必填
     */
    public $TmpSecretKey;

    /**
     * @var string 临时密钥Token，若为跨账号资源此项必填
     */
    public $TmpToken;

    /**
     * @param string $DatabaseType 数据库类型，如mysql
     * @param string $MigrateRole 实例作为迁移的源还是目标,src(表示源)，dst(表示目标)
     * @param string $InstanceId 云数据库实例ID
     * @param string $InstanceName 云数据库名称
     * @param integer $Limit 返回数量限制
     * @param integer $Offset 偏移量
     * @param string $AccountMode 资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)
     * @param string $TmpSecretId 临时密钥Id，若为跨账号资源此项必填
     * @param string $TmpSecretKey 临时密钥Key，若为跨账号资源此项必填
     * @param string $TmpToken 临时密钥Token，若为跨账号资源此项必填
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
        if (array_key_exists("DatabaseType",$param) and $param["DatabaseType"] !== null) {
            $this->DatabaseType = $param["DatabaseType"];
        }

        if (array_key_exists("MigrateRole",$param) and $param["MigrateRole"] !== null) {
            $this->MigrateRole = $param["MigrateRole"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AccountMode",$param) and $param["AccountMode"] !== null) {
            $this->AccountMode = $param["AccountMode"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("TmpToken",$param) and $param["TmpToken"] !== null) {
            $this->TmpToken = $param["TmpToken"];
        }
    }
}
