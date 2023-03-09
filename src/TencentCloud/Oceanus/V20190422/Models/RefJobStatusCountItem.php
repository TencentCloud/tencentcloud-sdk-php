<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 依赖作业分状态计数信息
 *
 * @method integer getJobStatus() 获取作业状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobStatus(integer $JobStatus) 设置作业状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取作业数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置作业数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefJobStatusCountItem extends AbstractModel
{
    /**
     * @var integer 作业状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobStatus;

    /**
     * @var integer 作业数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param integer $JobStatus 作业状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 作业数量
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
        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
