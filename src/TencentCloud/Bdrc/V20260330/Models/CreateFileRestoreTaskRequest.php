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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFileRestoreTask请求参数结构体
 *
 * @method string getConflictStrategy() 获取冲突处理策略：skip-跳过/"         "overwrite-覆盖/newer-保留较新的版本/"         "if_changed-内容变化时覆盖，默认overwrite
 * @method void setConflictStrategy(string $ConflictStrategy) 设置冲突处理策略：skip-跳过/"         "overwrite-覆盖/newer-保留较新的版本/"         "if_changed-内容变化时覆盖，默认overwrite
 */
class CreateFileRestoreTaskRequest extends AbstractModel
{
    /**
     * @var string 冲突处理策略：skip-跳过/"         "overwrite-覆盖/newer-保留较新的版本/"         "if_changed-内容变化时覆盖，默认overwrite
     */
    public $ConflictStrategy;

    /**
     * @param string $ConflictStrategy 冲突处理策略：skip-跳过/"         "overwrite-覆盖/newer-保留较新的版本/"         "if_changed-内容变化时覆盖，默认overwrite
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
        if (array_key_exists("ConflictStrategy",$param) and $param["ConflictStrategy"] !== null) {
            $this->ConflictStrategy = $param["ConflictStrategy"];
        }
    }
}
