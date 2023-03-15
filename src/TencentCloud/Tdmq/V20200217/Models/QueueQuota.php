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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * queue使用配额信息
 *
 * @method integer getMaxQueue() 获取可创建最大Queue数
 * @method void setMaxQueue(integer $MaxQueue) 设置可创建最大Queue数
 * @method integer getUsedQueue() 获取已创建Queue数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedQueue(integer $UsedQueue) 设置已创建Queue数
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueueQuota extends AbstractModel
{
    /**
     * @var integer 可创建最大Queue数
     */
    public $MaxQueue;

    /**
     * @var integer 已创建Queue数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedQueue;

    /**
     * @param integer $MaxQueue 可创建最大Queue数
     * @param integer $UsedQueue 已创建Queue数
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
        if (array_key_exists("MaxQueue",$param) and $param["MaxQueue"] !== null) {
            $this->MaxQueue = $param["MaxQueue"];
        }

        if (array_key_exists("UsedQueue",$param) and $param["UsedQueue"] !== null) {
            $this->UsedQueue = $param["UsedQueue"];
        }
    }
}
