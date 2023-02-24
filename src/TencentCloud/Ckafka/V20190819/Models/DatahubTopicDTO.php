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
 * Datahub主题
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getTopicName() 获取Topic名称
 * @method void setTopicName(string $TopicName) 设置Topic名称
 * @method string getTopicId() 获取Topic Id
 * @method void setTopicId(string $TopicId) 设置Topic Id
 * @method integer getPartitionNum() 获取分区数
 * @method void setPartitionNum(integer $PartitionNum) 设置分区数
 * @method integer getRetentionMs() 获取过期时间
 * @method void setRetentionMs(integer $RetentionMs) 设置过期时间
 * @method string getNote() 获取备注
 * @method void setNote(string $Note) 设置备注
 * @method integer getStatus() 获取状态，1使用中，2删除中
 * @method void setStatus(integer $Status) 设置状态，1使用中，2删除中
 */
class DatahubTopicDTO extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string Topic名称
     */
    public $TopicName;

    /**
     * @var string Topic Id
     */
    public $TopicId;

    /**
     * @var integer 分区数
     */
    public $PartitionNum;

    /**
     * @var integer 过期时间
     */
    public $RetentionMs;

    /**
     * @var string 备注
     */
    public $Note;

    /**
     * @var integer 状态，1使用中，2删除中
     */
    public $Status;

    /**
     * @param string $Name 名称
     * @param string $TopicName Topic名称
     * @param string $TopicId Topic Id
     * @param integer $PartitionNum 分区数
     * @param integer $RetentionMs 过期时间
     * @param string $Note 备注
     * @param integer $Status 状态，1使用中，2删除中
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

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
