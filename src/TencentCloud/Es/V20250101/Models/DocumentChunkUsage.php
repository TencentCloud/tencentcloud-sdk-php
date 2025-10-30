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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文档切片用量
 *
 * @method integer getPageNumber() 获取 解析页面数量
 * @method void setPageNumber(integer $PageNumber) 设置 解析页面数量
 * @method integer getTotalTokens() 获取消耗 token数量
 * @method void setTotalTokens(integer $TotalTokens) 设置消耗 token数量
 */
class DocumentChunkUsage extends AbstractModel
{
    /**
     * @var integer  解析页面数量
     */
    public $PageNumber;

    /**
     * @var integer 消耗 token数量
     */
    public $TotalTokens;

    /**
     * @param integer $PageNumber  解析页面数量
     * @param integer $TotalTokens 消耗 token数量
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }
    }
}
