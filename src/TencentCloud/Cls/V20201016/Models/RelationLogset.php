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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作区关联的日志集
 *
 * @method string getLogsetId() 获取<p>日志集id</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集id</p>
 * @method string getLogsetName() 获取<p>日志集名称</p>
 * @method void setLogsetName(string $LogsetName) 设置<p>日志集名称</p>
 */
class RelationLogset extends AbstractModel
{
    /**
     * @var string <p>日志集id</p>
     */
    public $LogsetId;

    /**
     * @var string <p>日志集名称</p>
     */
    public $LogsetName;

    /**
     * @param string $LogsetId <p>日志集id</p>
     * @param string $LogsetName <p>日志集名称</p>
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }
    }
}
