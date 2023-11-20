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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行步骤信息
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getStartAt() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartAt(string $StartAt) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndAt() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndAt(string $EndAt) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置当前状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取执行信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置执行信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Step extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartAt;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndAt;

    /**
     * @var string 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 执行信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @param string $Name 名称
     * @param string $StartAt 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndAt 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 当前状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 执行信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
