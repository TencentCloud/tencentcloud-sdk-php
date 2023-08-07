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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询录像上云模板列表返回数据
 *
 * @method string getTemplateId() 获取模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置模板ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置模板名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTimeSections() 获取上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeSections(array $TimeSections) 设置上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDevTimeSections() 获取录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDevTimeSections(array $DevTimeSections) 设置录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScale() 获取上云倍速（支持1，2，4倍速）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScale(integer $Scale) 设置上云倍速（支持1，2，4倍速）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateAt(string $CreateAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateAt(string $UpdateAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListRecordBackupTemplatesData extends AbstractModel
{
    /**
     * @var string 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var array 上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeSections;

    /**
     * @var array 录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DevTimeSections;

    /**
     * @var integer 上云倍速（支持1，2，4倍速）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scale;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateAt;

    /**
     * @param string $TemplateId 模板ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName 模板名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TimeSections 上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DevTimeSections 录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scale 上云倍速（支持1，2，4倍速）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateAt 更新时间
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("TimeSections",$param) and $param["TimeSections"] !== null) {
            $this->TimeSections = [];
            foreach ($param["TimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->TimeSections, $obj);
            }
        }

        if (array_key_exists("DevTimeSections",$param) and $param["DevTimeSections"] !== null) {
            $this->DevTimeSections = [];
            foreach ($param["DevTimeSections"] as $key => $value){
                $obj = new RecordTemplateTimeSections();
                $obj->deserialize($value);
                array_push($this->DevTimeSections, $obj);
            }
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("CreateAt",$param) and $param["CreateAt"] !== null) {
            $this->CreateAt = $param["CreateAt"];
        }

        if (array_key_exists("UpdateAt",$param) and $param["UpdateAt"] !== null) {
            $this->UpdateAt = $param["UpdateAt"];
        }
    }
}
