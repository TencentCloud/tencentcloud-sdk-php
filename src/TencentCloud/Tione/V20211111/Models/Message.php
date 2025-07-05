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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对话输入内容
 *
 * @method string getRole() 获取角色名。支持三个角色：system、user、assistant，其中system仅开头可出现一次，也可忽略。
 * @method void setRole(string $Role) 设置角色名。支持三个角色：system、user、assistant，其中system仅开头可出现一次，也可忽略。
 * @method string getContent() 获取对话输入内容。
 * @method void setContent(string $Content) 设置对话输入内容。
 * @method array getMultiModalContents() 获取多模态对话输入内容，Content与MultiModalContents两者只需要填写其中一个即可，当对话中包含多模态对话信息时，则填写本参数
 * @method void setMultiModalContents(array $MultiModalContents) 设置多模态对话输入内容，Content与MultiModalContents两者只需要填写其中一个即可，当对话中包含多模态对话信息时，则填写本参数
 */
class Message extends AbstractModel
{
    /**
     * @var string 角色名。支持三个角色：system、user、assistant，其中system仅开头可出现一次，也可忽略。
     */
    public $Role;

    /**
     * @var string 对话输入内容。
     */
    public $Content;

    /**
     * @var array 多模态对话输入内容，Content与MultiModalContents两者只需要填写其中一个即可，当对话中包含多模态对话信息时，则填写本参数
     */
    public $MultiModalContents;

    /**
     * @param string $Role 角色名。支持三个角色：system、user、assistant，其中system仅开头可出现一次，也可忽略。
     * @param string $Content 对话输入内容。
     * @param array $MultiModalContents 多模态对话输入内容，Content与MultiModalContents两者只需要填写其中一个即可，当对话中包含多模态对话信息时，则填写本参数
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("MultiModalContents",$param) and $param["MultiModalContents"] !== null) {
            $this->MultiModalContents = [];
            foreach ($param["MultiModalContents"] as $key => $value){
                $obj = new MultiModalContent();
                $obj->deserialize($value);
                array_push($this->MultiModalContents, $obj);
            }
        }
    }
}
