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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTableConfig请求参数结构体
 *
 * @method string getJobId() 获取<p>作业ID</p>
 * @method void setJobId(string $JobId) 设置<p>作业ID</p>
 * @method integer getDebugId() 获取<p>调试作业ID</p>
 * @method void setDebugId(integer $DebugId) 设置<p>调试作业ID</p>
 * @method string getTableName() 获取<p>表名</p>
 * @method void setTableName(string $TableName) 设置<p>表名</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 */
class DeleteTableConfigRequest extends AbstractModel
{
    /**
     * @var string <p>作业ID</p>
     */
    public $JobId;

    /**
     * @var integer <p>调试作业ID</p>
     */
    public $DebugId;

    /**
     * @var string <p>表名</p>
     */
    public $TableName;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @param string $JobId <p>作业ID</p>
     * @param integer $DebugId <p>调试作业ID</p>
     * @param string $TableName <p>表名</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DebugId",$param) and $param["DebugId"] !== null) {
            $this->DebugId = $param["DebugId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
