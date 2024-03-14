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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名解析记录线路信息
 *
 * @method string getLineName() 获取解析线路名称。
 * @method void setLineName(string $LineName) 设置解析线路名称。
 * @method string getLineId() 获取解析线路 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineId(string $LineId) 设置解析线路 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseful() 获取当前线路在当前域名下是否可用。
 * @method void setUseful(boolean $Useful) 设置当前线路在当前域名下是否可用。
 * @method string getGrade() 获取当前线路最低套餐等级要求。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrade(string $Grade) 设置当前线路最低套餐等级要求。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubGroup() 获取当前线路分类下的子线路列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubGroup(array $SubGroup) 设置当前线路分类下的子线路列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLines() 获取自定义线路分组内包含的线路。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLines(array $Lines) 设置自定义线路分组内包含的线路。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LineItem extends AbstractModel
{
    /**
     * @var string 解析线路名称。
     */
    public $LineName;

    /**
     * @var string 解析线路 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineId;

    /**
     * @var boolean 当前线路在当前域名下是否可用。
     */
    public $Useful;

    /**
     * @var string 当前线路最低套餐等级要求。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grade;

    /**
     * @var array 当前线路分类下的子线路列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubGroup;

    /**
     * @var array 自定义线路分组内包含的线路。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lines;

    /**
     * @param string $LineName 解析线路名称。
     * @param string $LineId 解析线路 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Useful 当前线路在当前域名下是否可用。
     * @param string $Grade 当前线路最低套餐等级要求。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubGroup 当前线路分类下的子线路列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Lines 自定义线路分组内包含的线路。
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
        if (array_key_exists("LineName",$param) and $param["LineName"] !== null) {
            $this->LineName = $param["LineName"];
        }

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
        }

        if (array_key_exists("Useful",$param) and $param["Useful"] !== null) {
            $this->Useful = $param["Useful"];
        }

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }

        if (array_key_exists("SubGroup",$param) and $param["SubGroup"] !== null) {
            $this->SubGroup = [];
            foreach ($param["SubGroup"] as $key => $value){
                $obj = new LineItem();
                $obj->deserialize($value);
                array_push($this->SubGroup, $obj);
            }
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }
    }
}
