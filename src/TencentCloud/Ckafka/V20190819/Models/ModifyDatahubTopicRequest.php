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
 * ModifyDatahubTopic请求参数结构体
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getRetentionMs() 获取消息保留时间，单位：ms，当前最小值为60000ms。
 * @method void setRetentionMs(integer $RetentionMs) 设置消息保留时间，单位：ms，当前最小值为60000ms。
 * @method string getNote() 获取主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
 * @method void setNote(string $Note) 设置主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 */
class ModifyDatahubTopicRequest extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 消息保留时间，单位：ms，当前最小值为60000ms。
     */
    public $RetentionMs;

    /**
     * @var string 主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
     */
    public $Note;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @param string $Name 名称
     * @param integer $RetentionMs 消息保留时间，单位：ms，当前最小值为60000ms。
     * @param string $Note 主题备注，是一个不超过64个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线-。
     * @param array $Tags 标签列表
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
