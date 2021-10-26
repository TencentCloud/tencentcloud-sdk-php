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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改参数条目，以参数为维度
 *
 * @method string getParamName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamName(string $ParamName) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventCount() 获取修改事件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventCount(integer $EventCount) 设置修改事件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventDetail() 获取修改时间详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventDetail(array $EventDetail) 设置修改时间详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventItem extends AbstractModel
{
    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamName;

    /**
     * @var integer 修改事件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventCount;

    /**
     * @var array 修改时间详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventDetail;

    /**
     * @param string $ParamName 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventCount 修改事件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventDetail 修改时间详情
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
        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("EventDetail",$param) and $param["EventDetail"] !== null) {
            $this->EventDetail = [];
            foreach ($param["EventDetail"] as $key => $value){
                $obj = new EventInfo();
                $obj->deserialize($value);
                array_push($this->EventDetail, $obj);
            }
        }
    }
}
