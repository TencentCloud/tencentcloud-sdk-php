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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表页搜索的标记列表
 *
 * @method string getTagKey() 获取标签的键
 * @method void setTagKey(string $TagKey) 设置标签的键
 * @method string getTagValue() 获取标签的值
 * @method void setTagValue(string $TagValue) 设置标签的值
 * @method integer getAllValue() 获取1表示只输入标签的键，没有输入值；0表示输入键时且输入值
 * @method void setAllValue(integer $AllValue) 设置1表示只输入标签的键，没有输入值；0表示输入键时且输入值
 */
class SearchTags extends AbstractModel
{
    /**
     * @var string 标签的键
     */
    public $TagKey;

    /**
     * @var string 标签的值
     */
    public $TagValue;

    /**
     * @var integer 1表示只输入标签的键，没有输入值；0表示输入键时且输入值
     */
    public $AllValue;

    /**
     * @param string $TagKey 标签的键
     * @param string $TagValue 标签的值
     * @param integer $AllValue 1表示只输入标签的键，没有输入值；0表示输入键时且输入值
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("AllValue",$param) and $param["AllValue"] !== null) {
            $this->AllValue = $param["AllValue"];
        }
    }
}
