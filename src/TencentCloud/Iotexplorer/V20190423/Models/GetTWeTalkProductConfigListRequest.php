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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTWeTalkProductConfigList请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getTargetLanguage() 获取	支持的语言，zh-中文；en-英文；默认zh
 * @method void setTargetLanguage(string $TargetLanguage) 设置	支持的语言，zh-中文；en-英文；默认zh
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取偏移量，10-100
 * @method void setLimit(integer $Limit) 设置偏移量，10-100
 */
class GetTWeTalkProductConfigListRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 	支持的语言，zh-中文；en-英文；默认zh
     */
    public $TargetLanguage;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 偏移量，10-100
     */
    public $Limit;

    /**
     * @param string $ProductId 产品ID
     * @param string $TargetLanguage 	支持的语言，zh-中文；en-英文；默认zh
     * @param integer $Offset 页码
     * @param integer $Limit 偏移量，10-100
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
