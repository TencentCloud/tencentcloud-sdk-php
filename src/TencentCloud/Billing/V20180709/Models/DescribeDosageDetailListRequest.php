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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDosageDetailList请求参数结构体
 *
 * @method string getStartTime() 获取用量起始时间，如：2023-02-01
 * @method void setStartTime(string $StartTime) 设置用量起始时间，如：2023-02-01
 * @method string getEndTime() 获取用量截止时间，如：2023-02-28
 * @method void setEndTime(string $EndTime) 设置用量截止时间，如：2023-02-28
 * @method string getProductCode() 获取产品编码，已支持查询的产品如下：
p_ccc（云联络中心）
p_rav（实时音视频）
p_pstn（号码保护）
p_smh（智能媒资托管）
p_coding_devops（CODING DevOps）
p_dsa（全球IP应用加速）
 * @method void setProductCode(string $ProductCode) 设置产品编码，已支持查询的产品如下：
p_ccc（云联络中心）
p_rav（实时音视频）
p_pstn（号码保护）
p_smh（智能媒资托管）
p_coding_devops（CODING DevOps）
p_dsa（全球IP应用加速）
 * @method integer getOffset() 获取数据偏移量（从0开始）
 * @method void setOffset(integer $Offset) 设置数据偏移量（从0开始）
 * @method integer getLimit() 获取单次数据量（最大3000）
 * @method void setLimit(integer $Limit) 设置单次数据量（最大3000）
 * @method string getDosageType() 获取用量统计类型：用量明细的数据统计汇总周期类型，包括minute-按5分钟汇总、hour-按小时汇总、day-按天汇总、month-按月汇总、comm-其他，默认查询所有类型明细，目前各产品已支持的统计类型如下：
p_ccc（云联络中心）：comm、day
p_rav（实时音视频）：minute、day
p_pstn（号码保护）：comm
p_smh（智能媒资托管）：day
p_coding_devops（CODING DevOps）：comm、day
p_dsa（全球IP应用加速）：minute
 * @method void setDosageType(string $DosageType) 设置用量统计类型：用量明细的数据统计汇总周期类型，包括minute-按5分钟汇总、hour-按小时汇总、day-按天汇总、month-按月汇总、comm-其他，默认查询所有类型明细，目前各产品已支持的统计类型如下：
p_ccc（云联络中心）：comm、day
p_rav（实时音视频）：minute、day
p_pstn（号码保护）：comm
p_smh（智能媒资托管）：day
p_coding_devops（CODING DevOps）：comm、day
p_dsa（全球IP应用加速）：minute
 */
class DescribeDosageDetailListRequest extends AbstractModel
{
    /**
     * @var string 用量起始时间，如：2023-02-01
     */
    public $StartTime;

    /**
     * @var string 用量截止时间，如：2023-02-28
     */
    public $EndTime;

    /**
     * @var string 产品编码，已支持查询的产品如下：
p_ccc（云联络中心）
p_rav（实时音视频）
p_pstn（号码保护）
p_smh（智能媒资托管）
p_coding_devops（CODING DevOps）
p_dsa（全球IP应用加速）
     */
    public $ProductCode;

    /**
     * @var integer 数据偏移量（从0开始）
     */
    public $Offset;

    /**
     * @var integer 单次数据量（最大3000）
     */
    public $Limit;

    /**
     * @var string 用量统计类型：用量明细的数据统计汇总周期类型，包括minute-按5分钟汇总、hour-按小时汇总、day-按天汇总、month-按月汇总、comm-其他，默认查询所有类型明细，目前各产品已支持的统计类型如下：
p_ccc（云联络中心）：comm、day
p_rav（实时音视频）：minute、day
p_pstn（号码保护）：comm
p_smh（智能媒资托管）：day
p_coding_devops（CODING DevOps）：comm、day
p_dsa（全球IP应用加速）：minute
     */
    public $DosageType;

    /**
     * @param string $StartTime 用量起始时间，如：2023-02-01
     * @param string $EndTime 用量截止时间，如：2023-02-28
     * @param string $ProductCode 产品编码，已支持查询的产品如下：
p_ccc（云联络中心）
p_rav（实时音视频）
p_pstn（号码保护）
p_smh（智能媒资托管）
p_coding_devops（CODING DevOps）
p_dsa（全球IP应用加速）
     * @param integer $Offset 数据偏移量（从0开始）
     * @param integer $Limit 单次数据量（最大3000）
     * @param string $DosageType 用量统计类型：用量明细的数据统计汇总周期类型，包括minute-按5分钟汇总、hour-按小时汇总、day-按天汇总、month-按月汇总、comm-其他，默认查询所有类型明细，目前各产品已支持的统计类型如下：
p_ccc（云联络中心）：comm、day
p_rav（实时音视频）：minute、day
p_pstn（号码保护）：comm
p_smh（智能媒资托管）：day
p_coding_devops（CODING DevOps）：comm、day
p_dsa（全球IP应用加速）：minute
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DosageType",$param) and $param["DosageType"] !== null) {
            $this->DosageType = $param["DosageType"];
        }
    }
}
