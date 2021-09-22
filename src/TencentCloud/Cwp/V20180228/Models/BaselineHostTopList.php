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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线影响服务器列表数据
 *
 * @method array getEventLevelList() 获取事件等级与次数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventLevelList(array $EventLevelList) 设置事件等级与次数列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostName() 获取主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取计算权重的分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置计算权重的分数
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineHostTopList extends AbstractModel
{
    /**
     * @var array 事件等级与次数列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventLevelList;

    /**
     * @var string 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var string 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var integer 计算权重的分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param array $EventLevelList 事件等级与次数列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostName 主机名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 计算权重的分数
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
        if (array_key_exists("EventLevelList",$param) and $param["EventLevelList"] !== null) {
            $this->EventLevelList = [];
            foreach ($param["EventLevelList"] as $key => $value){
                $obj = new BaselineEventLevelInfo();
                $obj->deserialize($value);
                array_push($this->EventLevelList, $obj);
            }
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
