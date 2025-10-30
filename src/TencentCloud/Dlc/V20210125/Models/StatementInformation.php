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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * statement信息
 *
 * @method string getTaskId() 获取SQL任务唯一ID
 * @method void setTaskId(string $TaskId) 设置SQL任务唯一ID
 * @method string getSQL() 获取SQL内容
 * @method void setSQL(string $SQL) 设置SQL内容
 */
class StatementInformation extends AbstractModel
{
    /**
     * @var string SQL任务唯一ID
     */
    public $TaskId;

    /**
     * @var string SQL内容
     */
    public $SQL;

    /**
     * @param string $TaskId SQL任务唯一ID
     * @param string $SQL SQL内容
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

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }
    }
}
