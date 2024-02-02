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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVULRiskAdvanceCFGList返回参数结构体
 *
 * @method array getData() 获取配置项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(array $Data) 设置配置项列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getRiskLevelLists() 获取风险等级过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelLists(array $RiskLevelLists) 设置风险等级过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVULTypeLists() 获取漏洞类型过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVULTypeLists(array $VULTypeLists) 设置漏洞类型过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCheckFromLists() 获取识别来源过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckFromLists(array $CheckFromLists) 设置识别来源过滤列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVulTagList() 获取漏洞标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulTagList(array $VulTagList) 设置漏洞标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVULRiskAdvanceCFGListResponse extends AbstractModel
{
    /**
     * @var array 配置项列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 风险等级过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelLists;

    /**
     * @var array 漏洞类型过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VULTypeLists;

    /**
     * @var array 识别来源过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckFromLists;

    /**
     * @var array 漏洞标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulTagList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 配置项列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总数
     * @param array $RiskLevelLists 风险等级过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VULTypeLists 漏洞类型过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CheckFromLists 识别来源过滤列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VulTagList 漏洞标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new VULRiskAdvanceCFGList();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RiskLevelLists",$param) and $param["RiskLevelLists"] !== null) {
            $this->RiskLevelLists = [];
            foreach ($param["RiskLevelLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->RiskLevelLists, $obj);
            }
        }

        if (array_key_exists("VULTypeLists",$param) and $param["VULTypeLists"] !== null) {
            $this->VULTypeLists = [];
            foreach ($param["VULTypeLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VULTypeLists, $obj);
            }
        }

        if (array_key_exists("CheckFromLists",$param) and $param["CheckFromLists"] !== null) {
            $this->CheckFromLists = [];
            foreach ($param["CheckFromLists"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->CheckFromLists, $obj);
            }
        }

        if (array_key_exists("VulTagList",$param) and $param["VulTagList"] !== null) {
            $this->VulTagList = [];
            foreach ($param["VulTagList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->VulTagList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
