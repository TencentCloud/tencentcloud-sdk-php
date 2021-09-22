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
 * 服务器风险top5实体
 *
 * @method string getHostName() 获取主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostName(string $HostName) 设置主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVulLevelList() 获取漏洞等级与数量统计列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulLevelList(array $VulLevelList) 设置漏洞等级与数量统计列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQuuid() 获取主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuid(string $Quuid) 设置主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取top评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置top评分
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulHostTopInfo extends AbstractModel
{
    /**
     * @var string 主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostName;

    /**
     * @var array 漏洞等级与数量统计列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulLevelList;

    /**
     * @var string 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuid;

    /**
     * @var integer top评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param string $HostName 主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VulLevelList 漏洞等级与数量统计列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Quuid 主机Quuid
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score top评分
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("VulLevelList",$param) and $param["VulLevelList"] !== null) {
            $this->VulLevelList = [];
            foreach ($param["VulLevelList"] as $key => $value){
                $obj = new VulLevelCountInfo();
                $obj->deserialize($value);
                array_push($this->VulLevelList, $obj);
            }
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
