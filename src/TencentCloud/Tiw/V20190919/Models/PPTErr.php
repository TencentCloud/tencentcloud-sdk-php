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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PPT错误元素
 *
 * @method string getName() 获取元素名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置元素名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取0: 不支持的墨迹类型，1: 不支持自动翻页，2: 存在已损坏音视频，3: 存在不可访问资源，4: 只读文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置0: 不支持的墨迹类型，1: 不支持自动翻页，2: 存在已损坏音视频，3: 存在不可访问资源，4: 只读文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDetail() 获取错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置错误详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class PPTErr extends AbstractModel
{
    /**
     * @var string 元素名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 0: 不支持的墨迹类型，1: 不支持自动翻页，2: 存在已损坏音视频，3: 存在不可访问资源，4: 只读文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 错误详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @param string $Name 元素名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 0: 不支持的墨迹类型，1: 不支持自动翻页，2: 存在已损坏音视频，3: 存在不可访问资源，4: 只读文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Detail 错误详情
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }
    }
}
