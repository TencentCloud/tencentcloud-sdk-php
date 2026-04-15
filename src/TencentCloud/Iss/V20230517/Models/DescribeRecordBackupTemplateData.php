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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询录像上云模板返回数据
 *
 * @method string getTemplateId() 获取<p>模板ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板ID</p>
 * @method string getTemplateName() 获取<p>模板名称</p>
 * @method void setTemplateName(string $TemplateName) 设置<p>模板名称</p>
 * @method array getTimeSections() 获取<p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method void setTimeSections(array $TimeSections) 设置<p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method array getDevTimeSections() 获取<p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method void setDevTimeSections(array $DevTimeSections) 设置<p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
 * @method integer getScale() 获取<p>上云倍速（支持1，2，4倍速）</p>
 * @method void setScale(integer $Scale) 设置<p>上云倍速（支持1，2，4倍速）</p>
 * @method string getCreateAt() 获取<p>创建时间</p>
 * @method void setCreateAt(string $CreateAt) 设置<p>创建时间</p>
 * @method string getUpdateAt() 获取<p>更新时间</p>
 * @method void setUpdateAt(string $UpdateAt) 设置<p>更新时间</p>
 * @method integer getDayOffset() 获取<p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示取去今天的设备录像，3表示拉取前天的设备录像</p>
 * @method void setDayOffset(integer $DayOffset) 设置<p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示取去今天的设备录像，3表示拉取前天的设备录像</p>
 */
class DescribeRecordBackupTemplateData extends AbstractModel
{
    /**
     * @var string <p>模板ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>模板名称</p>
     */
    public $TemplateName;

    /**
     * @var array <p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     */
    public $TimeSections;

    /**
     * @var array <p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     */
    public $DevTimeSections;

    /**
     * @var integer <p>上云倍速（支持1，2，4倍速）</p>
     */
    public $Scale;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateAt;

    /**
     * @var integer <p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示取去今天的设备录像，3表示拉取前天的设备录像</p>
     */
    public $DayOffset;

    /**
     * @param string $TemplateId <p>模板ID</p>
     * @param string $TemplateName <p>模板名称</p>
     * @param array $TimeSections <p>上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     * @param array $DevTimeSections <p>录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）</p>
     * @param integer $Scale <p>上云倍速（支持1，2，4倍速）</p>
     * @param string $CreateAt <p>创建时间</p>
     * @param string $UpdateAt <p>更新时间</p>
     * @param integer $DayOffset <p>周期偏移量，默认1，表示拉取昨天的设备录像，0表示取去今天的设备录像，3表示拉取前天的设备录像</p>
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

        if (array_key_exists("DayOffset",$param) and $param["DayOffset"] !== null) {
            $this->DayOffset = $param["DayOffset"];
        }
    }
}
