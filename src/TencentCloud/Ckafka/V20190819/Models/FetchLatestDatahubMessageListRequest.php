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
 * FetchLatestDatahubMessageList请求参数结构体
 *
 * @method string getName() 获取<p>弹性topic名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/86863">DescribeDatahubTopics</a></p>
 * @method void setName(string $Name) 设置<p>弹性topic名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/86863">DescribeDatahubTopics</a></p>
 * @method integer getPartition() 获取<p>分区id</p>
 * @method void setPartition(integer $Partition) 设置<p>分区id</p>
 * @method integer getOffset() 获取<p>位点信息</p>
 * @method void setOffset(integer $Offset) 设置<p>位点信息</p>
 * @method integer getMessageCount() 获取<p>最大查询条数</p><p>取值范围：[1, 100]</p>
 * @method void setMessageCount(integer $MessageCount) 设置<p>最大查询条数</p><p>取值范围：[1, 100]</p>
 */
class FetchLatestDatahubMessageListRequest extends AbstractModel
{
    /**
     * @var string <p>弹性topic名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/86863">DescribeDatahubTopics</a></p>
     */
    public $Name;

    /**
     * @var integer <p>分区id</p>
     */
    public $Partition;

    /**
     * @var integer <p>位点信息</p>
     */
    public $Offset;

    /**
     * @var integer <p>最大查询条数</p><p>取值范围：[1, 100]</p>
     */
    public $MessageCount;

    /**
     * @param string $Name <p>弹性topic名称</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/597/86863">DescribeDatahubTopics</a></p>
     * @param integer $Partition <p>分区id</p>
     * @param integer $Offset <p>位点信息</p>
     * @param integer $MessageCount <p>最大查询条数</p><p>取值范围：[1, 100]</p>
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
