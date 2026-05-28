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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollbackPGUserMigrations请求参数结构体
 *
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method integer getLastN() 获取<p>要回滚的条数</p><p>按照逆序回滚最近N条migration</p>
 * @method void setLastN(integer $LastN) 设置<p>要回滚的条数</p><p>按照逆序回滚最近N条migration</p>
 * @method integer getLockTimeoutMs() 获取<p>等待获取数据库锁的最长时间</p><p>单位：毫秒</p><p>默认值：5000</p>
 * @method void setLockTimeoutMs(integer $LockTimeoutMs) 设置<p>等待获取数据库锁的最长时间</p><p>单位：毫秒</p><p>默认值：5000</p>
 * @method integer getStatementTimeoutMs() 获取<p>单条 SQL 执行最长时间，超过后由 PostgreSQL 取消该语句</p><p>单位：毫秒</p><p>默认值：300000</p>
 * @method void setStatementTimeoutMs(integer $StatementTimeoutMs) 设置<p>单条 SQL 执行最长时间，超过后由 PostgreSQL 取消该语句</p><p>单位：毫秒</p><p>默认值：300000</p>
 * @method string getSource() 获取<p>标记API调用来源</p>
 * @method void setSource(string $Source) 设置<p>标记API调用来源</p>
 */
class RollbackPGUserMigrationsRequest extends AbstractModel
{
    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var integer <p>要回滚的条数</p><p>按照逆序回滚最近N条migration</p>
     */
    public $LastN;

    /**
     * @var integer <p>等待获取数据库锁的最长时间</p><p>单位：毫秒</p><p>默认值：5000</p>
     */
    public $LockTimeoutMs;

    /**
     * @var integer <p>单条 SQL 执行最长时间，超过后由 PostgreSQL 取消该语句</p><p>单位：毫秒</p><p>默认值：300000</p>
     */
    public $StatementTimeoutMs;

    /**
     * @var string <p>标记API调用来源</p>
     */
    public $Source;

    /**
     * @param string $EnvId <p>云开发环境ID</p>
     * @param integer $LastN <p>要回滚的条数</p><p>按照逆序回滚最近N条migration</p>
     * @param integer $LockTimeoutMs <p>等待获取数据库锁的最长时间</p><p>单位：毫秒</p><p>默认值：5000</p>
     * @param integer $StatementTimeoutMs <p>单条 SQL 执行最长时间，超过后由 PostgreSQL 取消该语句</p><p>单位：毫秒</p><p>默认值：300000</p>
     * @param string $Source <p>标记API调用来源</p>
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("LastN",$param) and $param["LastN"] !== null) {
            $this->LastN = $param["LastN"];
        }

        if (array_key_exists("LockTimeoutMs",$param) and $param["LockTimeoutMs"] !== null) {
            $this->LockTimeoutMs = $param["LockTimeoutMs"];
        }

        if (array_key_exists("StatementTimeoutMs",$param) and $param["StatementTimeoutMs"] !== null) {
            $this->StatementTimeoutMs = $param["StatementTimeoutMs"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
