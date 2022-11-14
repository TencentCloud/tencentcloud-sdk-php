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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TRTC数据大盘/实时监控 API接口数据出参
 *
 * @method integer getStatementID() 获取StatementID值，监控仪表盘下固定为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatementID(integer $StatementID) 设置StatementID值，监控仪表盘下固定为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSeries() 获取查询结果数据，以Columns-Values形式返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeries(array $Series) 设置查询结果数据，以Columns-Values形式返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取Total值，监控仪表盘功能下固定为1。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置Total值，监控仪表盘功能下固定为1。
注意：此字段可能返回 null，表示取不到有效值。
 */
class TRTCDataResp extends AbstractModel
{
    /**
     * @var integer StatementID值，监控仪表盘下固定为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatementID;

    /**
     * @var array 查询结果数据，以Columns-Values形式返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Series;

    /**
     * @var integer Total值，监控仪表盘功能下固定为1。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @param integer $StatementID StatementID值，监控仪表盘下固定为0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Series 查询结果数据，以Columns-Values形式返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total Total值，监控仪表盘功能下固定为1。
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
        if (array_key_exists("StatementID",$param) and $param["StatementID"] !== null) {
            $this->StatementID = $param["StatementID"];
        }

        if (array_key_exists("Series",$param) and $param["Series"] !== null) {
            $this->Series = [];
            foreach ($param["Series"] as $key => $value){
                $obj = new SeriesInfo();
                $obj->deserialize($value);
                array_push($this->Series, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
