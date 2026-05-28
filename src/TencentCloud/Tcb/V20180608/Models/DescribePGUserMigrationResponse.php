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
 * DescribePGUserMigration返回参数结构体
 *
 * @method string getVersion() 获取<p>版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method void setVersion(string $Version) 设置<p>版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method string getName() 获取<p>版本名</p><p>参数格式：只允许小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>版本名</p><p>参数格式：只允许小写字母和下划线</p>
 * @method string getQuery() 获取<p>要执行的migration sql 语句</p>
 * @method void setQuery(string $Query) 设置<p>要执行的migration sql 语句</p>
 * @method string getRollback() 获取<p>回滚的sql 语句</p>
 * @method void setRollback(string $Rollback) 设置<p>回滚的sql 语句</p>
 * @method string getChecksum() 获取<p>migration query 语句的checksum值</p><p>由服务端自动生成，同版本 checksum 不一致会拒绝执行</p>
 * @method void setChecksum(string $Checksum) 设置<p>migration query 语句的checksum值</p><p>由服务端自动生成，同版本 checksum 不一致会拒绝执行</p>
 * @method string getSource() 获取<p>用于标记调用来源</p>
 * @method void setSource(string $Source) 设置<p>用于标记调用来源</p>
 * @method string getCreatedBy() 获取<p>用于标记该条migration由谁创建，目前默认调用的用户uin</p>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>用于标记该条migration由谁创建，目前默认调用的用户uin</p>
 * @method string getCreatedAt() 获取<p>该migration创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>该migration创建时间</p>
 * @method string getAppliedAt() 获取<p>该migration应用时间</p>
 * @method void setAppliedAt(string $AppliedAt) 设置<p>该migration应用时间</p>
 * @method integer getDurationMs() 获取<p>该migration执行耗时</p><p>单位：毫秒</p>
 * @method void setDurationMs(integer $DurationMs) 设置<p>该migration执行耗时</p><p>单位：毫秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePGUserMigrationResponse extends AbstractModel
{
    /**
     * @var string <p>版本号</p><p>参数格式：纯数字，14位时间格式</p>
     */
    public $Version;

    /**
     * @var string <p>版本名</p><p>参数格式：只允许小写字母和下划线</p>
     */
    public $Name;

    /**
     * @var string <p>要执行的migration sql 语句</p>
     */
    public $Query;

    /**
     * @var string <p>回滚的sql 语句</p>
     */
    public $Rollback;

    /**
     * @var string <p>migration query 语句的checksum值</p><p>由服务端自动生成，同版本 checksum 不一致会拒绝执行</p>
     */
    public $Checksum;

    /**
     * @var string <p>用于标记调用来源</p>
     */
    public $Source;

    /**
     * @var string <p>用于标记该条migration由谁创建，目前默认调用的用户uin</p>
     */
    public $CreatedBy;

    /**
     * @var string <p>该migration创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>该migration应用时间</p>
     */
    public $AppliedAt;

    /**
     * @var integer <p>该migration执行耗时</p><p>单位：毫秒</p>
     */
    public $DurationMs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Version <p>版本号</p><p>参数格式：纯数字，14位时间格式</p>
     * @param string $Name <p>版本名</p><p>参数格式：只允许小写字母和下划线</p>
     * @param string $Query <p>要执行的migration sql 语句</p>
     * @param string $Rollback <p>回滚的sql 语句</p>
     * @param string $Checksum <p>migration query 语句的checksum值</p><p>由服务端自动生成，同版本 checksum 不一致会拒绝执行</p>
     * @param string $Source <p>用于标记调用来源</p>
     * @param string $CreatedBy <p>用于标记该条migration由谁创建，目前默认调用的用户uin</p>
     * @param string $CreatedAt <p>该migration创建时间</p>
     * @param string $AppliedAt <p>该migration应用时间</p>
     * @param integer $DurationMs <p>该migration执行耗时</p><p>单位：毫秒</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Rollback",$param) and $param["Rollback"] !== null) {
            $this->Rollback = $param["Rollback"];
        }

        if (array_key_exists("Checksum",$param) and $param["Checksum"] !== null) {
            $this->Checksum = $param["Checksum"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("AppliedAt",$param) and $param["AppliedAt"] !== null) {
            $this->AppliedAt = $param["AppliedAt"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
