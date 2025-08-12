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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchDatahubMessageByOffset请求参数结构体
 *
 * @method string getName() 获取弹性topic名称
 * @method void setName(string $Name) 设置弹性topic名称
 * @method integer getPartition() 获取分区id
 * @method void setPartition(integer $Partition) 设置分区id
 * @method integer getOffset() 获取位点信息
 * @method void setOffset(integer $Offset) 设置位点信息
 */
class FetchDatahubMessageByOffsetRequest extends AbstractModel
{
    /**
     * @var string 弹性topic名称
     */
    public $Name;

    /**
     * @var integer 分区id
     */
    public $Partition;

    /**
     * @var integer 位点信息
     */
    public $Offset;

    /**
     * @param string $Name 弹性topic名称
     * @param integer $Partition 分区id
     * @param integer $Offset 位点信息
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

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
