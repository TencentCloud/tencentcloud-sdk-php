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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全量备份错误信息
 *
 * @method string getTitle() 获取错误标题。
 * @method void setTitle(string $Title) 设置错误标题。
 * @method string getMessage() 获取错误详情。
 * @method void setMessage(string $Message) 设置错误详情。
 */
class FullBackupErrorMessage extends AbstractModel
{
    /**
     * @var string 错误标题。
     */
    public $Title;

    /**
     * @var string 错误详情。
     */
    public $Message;

    /**
     * @param string $Title 错误标题。
     * @param string $Message 错误详情。
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
