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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索结果负载
 *
 * @method string getGraphData() 获取<p>图谱附加信息（JSON 字符串）</p>
 * @method void setGraphData(string $GraphData) 设置<p>图谱附加信息（JSON 字符串）</p>
 * @method array getImageUrlList() 获取<p>命中的图片 URL 列表</p>
 * @method void setImageUrlList(array $ImageUrlList) 设置<p>命中的图片 URL 列表</p>
 * @method string getSheetInfo() 获取<p>表格附加信息（JSON 字符串）</p>
 * @method void setSheetInfo(string $SheetInfo) 设置<p>表格附加信息（JSON 字符串）</p>
 */
class SearchResultPayload extends AbstractModel
{
    /**
     * @var string <p>图谱附加信息（JSON 字符串）</p>
     */
    public $GraphData;

    /**
     * @var array <p>命中的图片 URL 列表</p>
     */
    public $ImageUrlList;

    /**
     * @var string <p>表格附加信息（JSON 字符串）</p>
     */
    public $SheetInfo;

    /**
     * @param string $GraphData <p>图谱附加信息（JSON 字符串）</p>
     * @param array $ImageUrlList <p>命中的图片 URL 列表</p>
     * @param string $SheetInfo <p>表格附加信息（JSON 字符串）</p>
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
        if (array_key_exists("GraphData",$param) and $param["GraphData"] !== null) {
            $this->GraphData = $param["GraphData"];
        }

        if (array_key_exists("ImageUrlList",$param) and $param["ImageUrlList"] !== null) {
            $this->ImageUrlList = $param["ImageUrlList"];
        }

        if (array_key_exists("SheetInfo",$param) and $param["SheetInfo"] !== null) {
            $this->SheetInfo = $param["SheetInfo"];
        }
    }
}
