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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量操作出参
 *
 * @method integer getJobId() 获取操作Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(integer $JobId) 设置操作Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BatchTaskOperateNew extends AbstractModel
{
    /**
     * @var integer 操作Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @param integer $JobId 操作Id
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
