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
 * RollbackPGUserMigrations返回参数结构体
 *
 * @method string getTaskId() 获取<p>任务ID</p><p>可通过DescribeTaskResult 接口查询进度</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p><p>可通过DescribeTaskResult 接口查询进度</p>
 * @method array getRolledBack() 获取<p>已成功回滚并删除 history 的 migration</p>
 * @method void setRolledBack(array $RolledBack) 设置<p>已成功回滚并删除 history 的 migration</p>
 * @method array getSkippedRollbackSql() 获取<p>未提供 Rollback SQL、视为成功并删除 history 的 migration</p>
 * @method void setSkippedRollbackSql(array $SkippedRollbackSql) 设置<p>未提供 Rollback SQL、视为成功并删除 history 的 migration</p>
 * @method MigrationSummary getFailed() 获取<p>执行 Rollback SQL 失败的 migration，可为空</p>
 * @method void setFailed(MigrationSummary $Failed) 设置<p>执行 Rollback SQL 失败的 migration，可为空</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class RollbackPGUserMigrationsResponse extends AbstractModel
{
    /**
     * @var string <p>任务ID</p><p>可通过DescribeTaskResult 接口查询进度</p>
     */
    public $TaskId;

    /**
     * @var array <p>已成功回滚并删除 history 的 migration</p>
     */
    public $RolledBack;

    /**
     * @var array <p>未提供 Rollback SQL、视为成功并删除 history 的 migration</p>
     */
    public $SkippedRollbackSql;

    /**
     * @var MigrationSummary <p>执行 Rollback SQL 失败的 migration，可为空</p>
     */
    public $Failed;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId <p>任务ID</p><p>可通过DescribeTaskResult 接口查询进度</p>
     * @param array $RolledBack <p>已成功回滚并删除 history 的 migration</p>
     * @param array $SkippedRollbackSql <p>未提供 Rollback SQL、视为成功并删除 history 的 migration</p>
     * @param MigrationSummary $Failed <p>执行 Rollback SQL 失败的 migration，可为空</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RolledBack",$param) and $param["RolledBack"] !== null) {
            $this->RolledBack = [];
            foreach ($param["RolledBack"] as $key => $value){
                $obj = new MigrationSummary();
                $obj->deserialize($value);
                array_push($this->RolledBack, $obj);
            }
        }

        if (array_key_exists("SkippedRollbackSql",$param) and $param["SkippedRollbackSql"] !== null) {
            $this->SkippedRollbackSql = [];
            foreach ($param["SkippedRollbackSql"] as $key => $value){
                $obj = new MigrationSummary();
                $obj->deserialize($value);
                array_push($this->SkippedRollbackSql, $obj);
            }
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = new MigrationSummary();
            $this->Failed->deserialize($param["Failed"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
