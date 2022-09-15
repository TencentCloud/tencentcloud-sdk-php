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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建数据转储返回值
 *
 * @method string getTaskId() 获取转储任务id
 * @method void setTaskId(string $TaskId) 设置转储任务id
 * @method string getDatahubId() 获取数据转储Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatahubId(string $DatahubId) 设置数据转储Id
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateDatahubTaskRes extends AbstractModel
{
    /**
     * @var string 转储任务id
     */
    public $TaskId;

    /**
     * @var string 数据转储Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatahubId;

    /**
     * @param string $TaskId 转储任务id
     * @param string $DatahubId 数据转储Id
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DatahubId",$param) and $param["DatahubId"] !== null) {
            $this->DatahubId = $param["DatahubId"];
        }
    }
}
