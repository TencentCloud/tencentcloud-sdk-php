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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 冲突问摘要信息
 *
 * @method string getConflictGroupId() 获取<p>冲突组 ID</p>
 * @method void setConflictGroupId(string $ConflictGroupId) 设置<p>冲突组 ID</p>
 */
class ConflictQASummary extends AbstractModel
{
    /**
     * @var string <p>冲突组 ID</p>
     */
    public $ConflictGroupId;

    /**
     * @param string $ConflictGroupId <p>冲突组 ID</p>
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
        if (array_key_exists("ConflictGroupId",$param) and $param["ConflictGroupId"] !== null) {
            $this->ConflictGroupId = $param["ConflictGroupId"];
        }
    }
}
