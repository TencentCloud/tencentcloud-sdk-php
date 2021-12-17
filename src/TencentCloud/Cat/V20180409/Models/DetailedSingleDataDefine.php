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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单条详细拨测数据
 *
 * @method integer getProbeTime() 获取拨测时间戳
 * @method void setProbeTime(integer $ProbeTime) 设置拨测时间戳
 * @method array getLabels() 获取储存所有string类型字段
 * @method void setLabels(array $Labels) 设置储存所有string类型字段
 * @method array getFields() 获取储存所有float类型字段
 * @method void setFields(array $Fields) 设置储存所有float类型字段
 */
class DetailedSingleDataDefine extends AbstractModel
{
    /**
     * @var integer 拨测时间戳
     */
    public $ProbeTime;

    /**
     * @var array 储存所有string类型字段
     */
    public $Labels;

    /**
     * @var array 储存所有float类型字段
     */
    public $Fields;

    /**
     * @param integer $ProbeTime 拨测时间戳
     * @param array $Labels 储存所有string类型字段
     * @param array $Fields 储存所有float类型字段
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
        if (array_key_exists("ProbeTime",$param) and $param["ProbeTime"] !== null) {
            $this->ProbeTime = $param["ProbeTime"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new Field();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }
    }
}
