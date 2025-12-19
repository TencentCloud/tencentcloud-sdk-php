<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LineageCommonInfoVO
 *
 * @method LineageResouce getCurrentResource() 获取当前节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentResource(LineageResouce $CurrentResource) 设置当前节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParentSet() 获取上游节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentSet(array $ParentSet) 设置上游节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChildSet() 获取下游节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildSet(array $ChildSet) 设置下游节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDownStreamCount() 获取下游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownStreamCount(integer $DownStreamCount) 设置下游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpStreamCount() 获取上游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpStreamCount(integer $UpStreamCount) 设置上游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStreamCountFlag() 获取父/子节点是否展示上下游数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamCountFlag(boolean $StreamCountFlag) 设置父/子节点是否展示上下游数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class LineageCommonInfoVO extends AbstractModel
{
    /**
     * @var LineageResouce 当前节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentResource;

    /**
     * @var array 上游节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentSet;

    /**
     * @var array 下游节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildSet;

    /**
     * @var integer 下游数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownStreamCount;

    /**
     * @var integer 上游数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpStreamCount;

    /**
     * @var boolean 父/子节点是否展示上下游数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamCountFlag;

    /**
     * @param LineageResouce $CurrentResource 当前节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ParentSet 上游节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChildSet 下游节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DownStreamCount 下游数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpStreamCount 上游数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StreamCountFlag 父/子节点是否展示上下游数量
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
        if (array_key_exists("CurrentResource",$param) and $param["CurrentResource"] !== null) {
            $this->CurrentResource = new LineageResouce();
            $this->CurrentResource->deserialize($param["CurrentResource"]);
        }

        if (array_key_exists("ParentSet",$param) and $param["ParentSet"] !== null) {
            $this->ParentSet = [];
            foreach ($param["ParentSet"] as $key => $value){
                $obj = new LineageNodeInfoVO();
                $obj->deserialize($value);
                array_push($this->ParentSet, $obj);
            }
        }

        if (array_key_exists("ChildSet",$param) and $param["ChildSet"] !== null) {
            $this->ChildSet = [];
            foreach ($param["ChildSet"] as $key => $value){
                $obj = new LineageNodeInfoVO();
                $obj->deserialize($value);
                array_push($this->ChildSet, $obj);
            }
        }

        if (array_key_exists("DownStreamCount",$param) and $param["DownStreamCount"] !== null) {
            $this->DownStreamCount = $param["DownStreamCount"];
        }

        if (array_key_exists("UpStreamCount",$param) and $param["UpStreamCount"] !== null) {
            $this->UpStreamCount = $param["UpStreamCount"];
        }

        if (array_key_exists("StreamCountFlag",$param) and $param["StreamCountFlag"] !== null) {
            $this->StreamCountFlag = $param["StreamCountFlag"];
        }
    }
}
