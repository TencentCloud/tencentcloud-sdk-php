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
 * 端口风险高级配置项
 *
 * @method string getPortSets() 获取端口集合,以逗号分隔
 * @method void setPortSets(string $PortSets) 设置端口集合,以逗号分隔
 * @method integer getCheckType() 获取检测项类型，0-系统定义，1-用户自定义
 * @method void setCheckType(integer $CheckType) 设置检测项类型，0-系统定义，1-用户自定义
 * @method string getDetail() 获取检测项描述
 * @method void setDetail(string $Detail) 设置检测项描述
 * @method integer getEnable() 获取是否启用，1-启用，0-禁用
 * @method void setEnable(integer $Enable) 设置是否启用，1-启用，0-禁用
 */
class PortRiskAdvanceCFGParamItem extends AbstractModel
{
    /**
     * @var string 端口集合,以逗号分隔
     */
    public $PortSets;

    /**
     * @var integer 检测项类型，0-系统定义，1-用户自定义
     */
    public $CheckType;

    /**
     * @var string 检测项描述
     */
    public $Detail;

    /**
     * @var integer 是否启用，1-启用，0-禁用
     */
    public $Enable;

    /**
     * @param string $PortSets 端口集合,以逗号分隔
     * @param integer $CheckType 检测项类型，0-系统定义，1-用户自定义
     * @param string $Detail 检测项描述
     * @param integer $Enable 是否启用，1-启用，0-禁用
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
        if (array_key_exists("PortSets",$param) and $param["PortSets"] !== null) {
            $this->PortSets = $param["PortSets"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
