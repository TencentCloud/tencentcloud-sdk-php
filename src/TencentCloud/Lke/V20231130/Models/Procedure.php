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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行过程信息记录
 *
 * @method string getName() 获取执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTitle() 获取中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Procedure extends AbstractModel
{
    /**
     * @var string 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var string 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 消耗 token 数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param string $Name 执行过程英语名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Title 中文名, 用于展示
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态常量: 使用中: processing, 成功: success, 失败: failed
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 消耗 token 数
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
