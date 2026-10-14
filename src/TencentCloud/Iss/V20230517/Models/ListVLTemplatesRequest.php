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
 * ListVLTemplates请求参数结构体
 *
 * @method string getName() 获取<p>模板名称，精确匹配</p>
 * @method void setName(string $Name) 设置<p>模板名称，精确匹配</p>
 * @method string getAnalysisMode() 获取<p>分析模式过滤，image / video</p>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析模式过滤，image / video</p>
 * @method string getCaptureType() 获取<p>截图类型过滤（仅 AnalysisMode=image 时生效）：realtime / low</p>
 * @method void setCaptureType(string $CaptureType) 设置<p>截图类型过滤（仅 AnalysisMode=image 时生效）：realtime / low</p>
 * @method integer getPageNumber() 获取<p>页码，默认 1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，默认 1</p>
 * @method integer getPageSize() 获取<p>每页数量，默认 20，最大 200</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认 20，最大 200</p>
 */
class ListVLTemplatesRequest extends AbstractModel
{
    /**
     * @var string <p>模板名称，精确匹配</p>
     */
    public $Name;

    /**
     * @var string <p>分析模式过滤，image / video</p>
     */
    public $AnalysisMode;

    /**
     * @var string <p>截图类型过滤（仅 AnalysisMode=image 时生效）：realtime / low</p>
     */
    public $CaptureType;

    /**
     * @var integer <p>页码，默认 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，默认 20，最大 200</p>
     */
    public $PageSize;

    /**
     * @param string $Name <p>模板名称，精确匹配</p>
     * @param string $AnalysisMode <p>分析模式过滤，image / video</p>
     * @param string $CaptureType <p>截图类型过滤（仅 AnalysisMode=image 时生效）：realtime / low</p>
     * @param integer $PageNumber <p>页码，默认 1</p>
     * @param integer $PageSize <p>每页数量，默认 20，最大 200</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("CaptureType",$param) and $param["CaptureType"] !== null) {
            $this->CaptureType = $param["CaptureType"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
