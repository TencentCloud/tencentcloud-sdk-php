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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回复消息
 *
 * @method array getContentList() 获取消息数组，包含多个消息对象
 * @method void setContentList(array $ContentList) 设置消息数组，包含多个消息对象
 */
class ReplyMessage extends AbstractModel
{
    /**
     * @var array 消息数组，包含多个消息对象
     */
    public $ContentList;

    /**
     * @param array $ContentList 消息数组，包含多个消息对象
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
        if (array_key_exists("ContentList",$param) and $param["ContentList"] !== null) {
            $this->ContentList = [];
            foreach ($param["ContentList"] as $key => $value){
                $obj = new ReplyContent();
                $obj->deserialize($value);
                array_push($this->ContentList, $obj);
            }
        }
    }
}
