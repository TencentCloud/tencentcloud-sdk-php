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
 * ListPGUserMigrations请求参数结构体
 *
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method integer getLimit() 获取<p>查询条数</p><p>取值范围：[1, 500]</p><p>默认值：100</p>
 * @method void setLimit(integer $Limit) 设置<p>查询条数</p><p>取值范围：[1, 500]</p><p>默认值：100</p>
 * @method integer getOffset() 获取<p>分页偏移</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移</p><p>默认值：0</p>
 */
class ListPGUserMigrationsRequest extends AbstractModel
{
    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var integer <p>查询条数</p><p>取值范围：[1, 500]</p><p>默认值：100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @param string $EnvId <p>云开发环境ID</p>
     * @param integer $Limit <p>查询条数</p><p>取值范围：[1, 500]</p><p>默认值：100</p>
     * @param integer $Offset <p>分页偏移</p><p>默认值：0</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
