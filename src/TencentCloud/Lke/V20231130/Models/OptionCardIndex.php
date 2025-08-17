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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 选项卡索引
 *
 * @method string getRecordId() 获取唯一标识
 * @method void setRecordId(string $RecordId) 设置唯一标识
 * @method integer getIndex() 获取选项卡索引
 * @method void setIndex(integer $Index) 设置选项卡索引
 */
class OptionCardIndex extends AbstractModel
{
    /**
     * @var string 唯一标识
     */
    public $RecordId;

    /**
     * @var integer 选项卡索引
     */
    public $Index;

    /**
     * @param string $RecordId 唯一标识
     * @param integer $Index 选项卡索引
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
