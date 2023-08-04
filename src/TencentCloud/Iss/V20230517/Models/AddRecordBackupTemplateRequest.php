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
 * AddRecordBackupTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）
 * @method void setTemplateName(string $TemplateName) 设置模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）
 * @method array getTimeSections() 获取上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
 * @method void setTimeSections(array $TimeSections) 设置上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
 * @method array getDevTimeSections() 获取录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
 * @method void setDevTimeSections(array $DevTimeSections) 设置录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
 * @method integer getScale() 获取上云倍速（支持1，2，4倍速）
 * @method void setScale(integer $Scale) 设置上云倍速（支持1，2，4倍速）
 */
class AddRecordBackupTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）
     */
    public $TemplateName;

    /**
     * @var array 上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
     */
    public $TimeSections;

    /**
     * @var array 录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
     */
    public $DevTimeSections;

    /**
     * @var integer 上云倍速（支持1，2，4倍速）
     */
    public $Scale;

    /**
     * @param string $TemplateName 模板名称（仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复）
     * @param array $TimeSections 上云时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
     * @param array $DevTimeSections 录像时间段（按周进行设置，支持一天设置多个时间段，每个时间段不小于10分钟）
     * @param integer $Scale 上云倍速（支持1，2，4倍速）
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
    }
}
