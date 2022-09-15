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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * FetchLatestDatahubMessageList请求参数结构体
 *
 * @method string getName() 获取主题名
 * @method void setName(string $Name) 设置主题名
 * @method integer getPartition() 获取分区id
 * @method void setPartition(integer $Partition) 设置分区id
 * @method integer getOffset() 获取位点信息
 * @method void setOffset(integer $Offset) 设置位点信息
 * @method integer getMessageCount() 获取最大查询条数，最小1，最大100
 * @method void setMessageCount(integer $MessageCount) 设置最大查询条数，最小1，最大100
 */
class FetchLatestDatahubMessageListRequest extends AbstractModel
{
    /**
     * @var string 主题名
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
     * @var integer 最大查询条数，最小1，最大100
     */
    public $MessageCount;

    /**
     * @param string $Name 主题名
     * @param integer $Partition 分区id
     * @param integer $Offset 位点信息
     * @param integer $MessageCount 最大查询条数，最小1，最大100
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

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }
    }
}
