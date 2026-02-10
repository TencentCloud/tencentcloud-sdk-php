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
 * 异步工作流的消息
 *
 * @method array getContents() 获取内容数组，包含多个内容对象
 * @method void setContents(array $Contents) 设置内容数组，包含多个内容对象
 */
class AsyncWorkflowMessage extends AbstractModel
{
    /**
     * @var array 内容数组，包含多个内容对象
     */
    public $Contents;

    /**
     * @param array $Contents 内容数组，包含多个内容对象
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
        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new Content();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }
    }
}
