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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagRetentionExecutionTask请求参数结构体
 *
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method integer getRetentionId() 获取规则Id
 * @method void setRetentionId(integer $RetentionId) 设置规则Id
 * @method integer getExecutionId() 获取规则执行Id
 * @method void setExecutionId(integer $ExecutionId) 设置规则执行Id
 * @method integer getOffset() 获取页数，第几页，用于分页
 * @method void setOffset(integer $Offset) 设置页数，第几页，用于分页
 * @method integer getLimit() 获取每页个数，用于分页，最大值为100
 * @method void setLimit(integer $Limit) 设置每页个数，用于分页，最大值为100
 */
class DescribeTagRetentionExecutionTaskRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var integer 规则Id
     */
    public $RetentionId;

    /**
     * @var integer 规则执行Id
     */
    public $ExecutionId;

    /**
     * @var integer 页数，第几页，用于分页
     */
    public $Offset;

    /**
     * @var integer 每页个数，用于分页，最大值为100
     */
    public $Limit;

    /**
     * @param string $RegistryId 主实例iD
     * @param integer $RetentionId 规则Id
     * @param integer $ExecutionId 规则执行Id
     * @param integer $Offset 页数，第几页，用于分页
     * @param integer $Limit 每页个数，用于分页，最大值为100
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
