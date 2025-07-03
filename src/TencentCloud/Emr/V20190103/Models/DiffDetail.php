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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 动态生成的变更详情
 *
 * @method string getName() 获取tab页的头
 * @method void setName(string $Name) 设置tab页的头
 * @method integer getCount() 获取变化项的个数
 * @method void setCount(integer $Count) 设置变化项的个数
 * @method array getRows() 获取要渲染的明细数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(array $Rows) 设置要渲染的明细数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeader() 获取要渲染的头部信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeader(array $Header) 设置要渲染的头部信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiffDetail extends AbstractModel
{
    /**
     * @var string tab页的头
     */
    public $Name;

    /**
     * @var integer 变化项的个数
     */
    public $Count;

    /**
     * @var array 要渲染的明细数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @var array 要渲染的头部信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Header;

    /**
     * @param string $Name tab页的头
     * @param integer $Count 变化项的个数
     * @param array $Rows 要渲染的明细数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Header 要渲染的头部信息
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

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new DiffDetailItem();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("Header",$param) and $param["Header"] !== null) {
            $this->Header = [];
            foreach ($param["Header"] as $key => $value){
                $obj = new DiffHeader();
                $obj->deserialize($value);
                array_push($this->Header, $obj);
            }
        }
    }
}
