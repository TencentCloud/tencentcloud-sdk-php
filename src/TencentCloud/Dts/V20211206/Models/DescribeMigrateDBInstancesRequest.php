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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrateDBInstances请求参数结构体
 *
 * @method string getDatabaseType() 获取<p>数据库类型，如mysql,percona,mariadb,tdsqlmysql,mariadb,postgresql,cynosdbmysql,redis,tendis,keewidb,tdstore,mongodb,clickhouse,sqlserver等。</p>
 * @method void setDatabaseType(string $DatabaseType) 设置<p>数据库类型，如mysql,percona,mariadb,tdsqlmysql,mariadb,postgresql,cynosdbmysql,redis,tendis,keewidb,tdstore,mongodb,clickhouse,sqlserver等。</p>
 * @method string getMigrateRole() 获取<p>实例作为迁移的源还是目标,src(表示源)，dst(表示目标)</p>
 * @method void setMigrateRole(string $MigrateRole) 设置<p>实例作为迁移的源还是目标,src(表示源)，dst(表示目标)</p>
 * @method string getInstanceId() 获取<p>云数据库实例ID，可通过对应业务实例列表获取实例信息。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云数据库实例ID，可通过对应业务实例列表获取实例信息。</p>
 * @method string getInstanceName() 获取<p>云数据库名称，可通过对应业务实例列表获取实例信息。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>云数据库名称，可通过对应业务实例列表获取实例信息。</p>
 * @method integer getLimit() 获取<p>返回数量限制</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量限制</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getAccountMode() 获取<p>资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)</p>
 * @method void setAccountMode(string $AccountMode) 设置<p>资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)</p>
 * @method string getTmpSecretId() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpSecretId(string $TmpSecretId) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method string getTmpSecretKey() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method string getTmpToken() 获取<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 * @method void setTmpToken(string $TmpToken) 设置<p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
 */
class DescribeMigrateDBInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>数据库类型，如mysql,percona,mariadb,tdsqlmysql,mariadb,postgresql,cynosdbmysql,redis,tendis,keewidb,tdstore,mongodb,clickhouse,sqlserver等。</p>
     */
    public $DatabaseType;

    /**
     * @var string <p>实例作为迁移的源还是目标,src(表示源)，dst(表示目标)</p>
     */
    public $MigrateRole;

    /**
     * @var string <p>云数据库实例ID，可通过对应业务实例列表获取实例信息。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>云数据库名称，可通过对应业务实例列表获取实例信息。</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>返回数量限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)</p>
     */
    public $AccountMode;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     */
    public $TmpToken;

    /**
     * @param string $DatabaseType <p>数据库类型，如mysql,percona,mariadb,tdsqlmysql,mariadb,postgresql,cynosdbmysql,redis,tendis,keewidb,tdstore,mongodb,clickhouse,sqlserver等。</p>
     * @param string $MigrateRole <p>实例作为迁移的源还是目标,src(表示源)，dst(表示目标)</p>
     * @param string $InstanceId <p>云数据库实例ID，可通过对应业务实例列表获取实例信息。</p>
     * @param string $InstanceName <p>云数据库名称，可通过对应业务实例列表获取实例信息。</p>
     * @param integer $Limit <p>返回数量限制</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $AccountMode <p>资源所属账号 为空值或self(表示本账号内资源)、other(表示其他账户资源)</p>
     * @param string $TmpSecretId <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     * @param string $TmpSecretKey <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
     * @param string $TmpToken <p>临时密钥Id，可通过申请扮演角色临时访问凭证获取临时密钥https://cloud.tencent.com/document/product/1312/48197，其中角色资源RoleArn的定义可参考DTS跨账号迁移文档(https://cloud.tencent.com/document/product/571/54117)第4节中关于角色的定义。</p>
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
