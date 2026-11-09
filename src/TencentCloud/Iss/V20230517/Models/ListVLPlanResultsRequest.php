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
 * ListVLPlanResults请求参数结构体
 *
 * @method integer getStart() 获取<p>开始时间戳（秒），不早于 30 天前</p>
 * @method void setStart(integer $Start) 设置<p>开始时间戳（秒），不早于 30 天前</p>
 * @method integer getEnd() 获取<p>结束时间戳（秒），不超过当前时间，时间范围不超过 30 天</p>
 * @method void setEnd(integer $End) 设置<p>结束时间戳（秒），不超过当前时间，时间范围不超过 30 天</p>
 * @method string getVLPlanId() 获取<p>分析计划 ID，不传则查询所有计划的结果</p>
 * @method void setVLPlanId(string $VLPlanId) 设置<p>分析计划 ID，不传则查询所有计划的结果</p>
 * @method array getChannelIds() 获取<p>通道 ID 列表，支持多值（英文逗号分隔），不传则查询所有通道的结果</p>
 * @method void setChannelIds(array $ChannelIds) 设置<p>通道 ID 列表，支持多值（英文逗号分隔），不传则查询所有通道的结果</p>
 * @method integer getPageNumber() 获取<p>页码，默认 1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，默认 1</p>
 * @method integer getPageSize() 获取<p>每页数量，默认 20，最大 200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认 20，最大 200</p>
 * @method string getAnalysisMode() 获取<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 */
class ListVLPlanResultsRequest extends AbstractModel
{
    /**
     * @var integer <p>开始时间戳（秒），不早于 30 天前</p>
     */
    public $Start;

    /**
     * @var integer <p>结束时间戳（秒），不超过当前时间，时间范围不超过 30 天</p>
     */
    public $End;

    /**
     * @var string <p>分析计划 ID，不传则查询所有计划的结果</p>
     */
    public $VLPlanId;

    /**
     * @var array <p>通道 ID 列表，支持多值（英文逗号分隔），不传则查询所有通道的结果</p>
     */
    public $ChannelIds;

    /**
     * @var integer <p>页码，默认 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，默认 20，最大 200</p>
     */
    public $PageSize;

    /**
     * @var string <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
     */
    public $AnalysisMode;

    /**
     * @param integer $Start <p>开始时间戳（秒），不早于 30 天前</p>
     * @param integer $End <p>结束时间戳（秒），不超过当前时间，时间范围不超过 30 天</p>
     * @param string $VLPlanId <p>分析计划 ID，不传则查询所有计划的结果</p>
     * @param array $ChannelIds <p>通道 ID 列表，支持多值（英文逗号分隔），不传则查询所有通道的结果</p>
     * @param integer $PageNumber <p>页码，默认 1</p>
     * @param integer $PageSize <p>每页数量，默认 20，最大 200</p>
     * @param string $AnalysisMode <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
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
        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("VLPlanId",$param) and $param["VLPlanId"] !== null) {
            $this->VLPlanId = $param["VLPlanId"];
        }

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }
    }
}
