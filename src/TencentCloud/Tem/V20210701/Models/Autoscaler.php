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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩策略组合
 *
 * @method integer getMinReplicas() 获取弹性伸缩最小实例数
 * @method void setMinReplicas(integer $MinReplicas) 设置弹性伸缩最小实例数
 * @method integer getMaxReplicas() 获取弹性伸缩最大实例数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置弹性伸缩最大实例数
 * @method array getHorizontalAutoscaler() 获取指标弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHorizontalAutoscaler(array $HorizontalAutoscaler) 设置指标弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCronHorizontalAutoscaler() 获取定时弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronHorizontalAutoscaler(array $CronHorizontalAutoscaler) 设置定时弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoscalerId() 获取弹性伸缩ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalerId(string $AutoscalerId) 设置弹性伸缩ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoscalerName() 获取弹性伸缩名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoscalerName(string $AutoscalerName) 设置弹性伸缩名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取弹性伸缩描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置弹性伸缩描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateDate() 获取创建日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(string $CreateDate) 设置创建日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyDate() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyDate(string $ModifyDate) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableDate() 获取启用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableDate(string $EnableDate) 设置启用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnabled() 获取是否启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabled(boolean $Enabled) 设置是否启用
注意：此字段可能返回 null，表示取不到有效值。
 */
class Autoscaler extends AbstractModel
{
    /**
     * @var integer 弹性伸缩最小实例数
     */
    public $MinReplicas;

    /**
     * @var integer 弹性伸缩最大实例数
     */
    public $MaxReplicas;

    /**
     * @var array 指标弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HorizontalAutoscaler;

    /**
     * @var array 定时弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronHorizontalAutoscaler;

    /**
     * @var string 弹性伸缩ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalerId;

    /**
     * @var string 弹性伸缩名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoscalerName;

    /**
     * @var string 弹性伸缩描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 创建日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyDate;

    /**
     * @var string 启用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableDate;

    /**
     * @var boolean 是否启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enabled;

    /**
     * @param integer $MinReplicas 弹性伸缩最小实例数
     * @param integer $MaxReplicas 弹性伸缩最大实例数
     * @param array $HorizontalAutoscaler 指标弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CronHorizontalAutoscaler 定时弹性伸缩策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoscalerId 弹性伸缩ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoscalerName 弹性伸缩名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 弹性伸缩描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateDate 创建日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyDate 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableDate 启用时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enabled 是否启用
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("HorizontalAutoscaler",$param) and $param["HorizontalAutoscaler"] !== null) {
            $this->HorizontalAutoscaler = [];
            foreach ($param["HorizontalAutoscaler"] as $key => $value){
                $obj = new HorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->HorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("CronHorizontalAutoscaler",$param) and $param["CronHorizontalAutoscaler"] !== null) {
            $this->CronHorizontalAutoscaler = [];
            foreach ($param["CronHorizontalAutoscaler"] as $key => $value){
                $obj = new CronHorizontalAutoscaler();
                $obj->deserialize($value);
                array_push($this->CronHorizontalAutoscaler, $obj);
            }
        }

        if (array_key_exists("AutoscalerId",$param) and $param["AutoscalerId"] !== null) {
            $this->AutoscalerId = $param["AutoscalerId"];
        }

        if (array_key_exists("AutoscalerName",$param) and $param["AutoscalerName"] !== null) {
            $this->AutoscalerName = $param["AutoscalerName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("EnableDate",$param) and $param["EnableDate"] !== null) {
            $this->EnableDate = $param["EnableDate"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
