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
 * CreateDatahubTopic请求参数结构体
 *
 * @method string getName() 获取<p>名称，是一个不超过 128 个字符的字符串，必须以“AppId-”为首字符，剩余部分可以包含字母、数字和横划线(-)，可通过接口DescribeAppInfo获取。</p>
 * @method void setName(string $Name) 设置<p>名称，是一个不超过 128 个字符的字符串，必须以“AppId-”为首字符，剩余部分可以包含字母、数字和横划线(-)，可通过接口DescribeAppInfo获取。</p>
 * @method integer getPartitionNum() 获取<p>Partition个数，最大值为500，大于0</p>
 * @method void setPartitionNum(integer $PartitionNum) 设置<p>Partition个数，最大值为500，大于0</p>
 * @method integer getRetentionMs() 获取<p>消息保留时间，单位ms，当前最小值为60000ms</p>
 * @method void setRetentionMs(integer $RetentionMs) 设置<p>消息保留时间，单位ms，当前最小值为60000ms</p>
 * @method string getNote() 获取<p>主题备注，是一个不超过 64 个字符的字符串，可以包含字母、数字和横划线(-)。</p>
 * @method void setNote(string $Note) 设置<p>主题备注，是一个不超过 64 个字符的字符串，可以包含字母、数字和横划线(-)。</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 */
class CreateDatahubTopicRequest extends AbstractModel
{
    /**
     * @var string <p>名称，是一个不超过 128 个字符的字符串，必须以“AppId-”为首字符，剩余部分可以包含字母、数字和横划线(-)，可通过接口DescribeAppInfo获取。</p>
     */
    public $Name;

    /**
     * @var integer <p>Partition个数，最大值为500，大于0</p>
     */
    public $PartitionNum;

    /**
     * @var integer <p>消息保留时间，单位ms，当前最小值为60000ms</p>
     */
    public $RetentionMs;

    /**
     * @var string <p>主题备注，是一个不超过 64 个字符的字符串，可以包含字母、数字和横划线(-)。</p>
     */
    public $Note;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>名称，是一个不超过 128 个字符的字符串，必须以“AppId-”为首字符，剩余部分可以包含字母、数字和横划线(-)，可通过接口DescribeAppInfo获取。</p>
     * @param integer $PartitionNum <p>Partition个数，最大值为500，大于0</p>
     * @param integer $RetentionMs <p>消息保留时间，单位ms，当前最小值为60000ms</p>
     * @param string $Note <p>主题备注，是一个不超过 64 个字符的字符串，可以包含字母、数字和横划线(-)。</p>
     * @param array $Tags <p>标签列表</p>
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

        if (array_key_exists("PartitionNum",$param) and $param["PartitionNum"] !== null) {
            $this->PartitionNum = $param["PartitionNum"];
        }

        if (array_key_exists("RetentionMs",$param) and $param["RetentionMs"] !== null) {
            $this->RetentionMs = $param["RetentionMs"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
