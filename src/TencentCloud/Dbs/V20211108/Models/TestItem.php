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
 * 检测步骤详情
 *
 * @method string getTestName() 获取<p>检测步骤名称</p>
 * @method void setTestName(string $TestName) 设置<p>检测步骤名称</p>
 * @method integer getCode() 获取<p>错误码</p>
 * @method void setCode(integer $Code) 设置<p>错误码</p>
 * @method string getMessage() 获取<p>错误信息</p>
 * @method void setMessage(string $Message) 设置<p>错误信息</p>
 */
class TestItem extends AbstractModel
{
    /**
     * @var string <p>检测步骤名称</p>
     */
    public $TestName;

    /**
     * @var integer <p>错误码</p>
     */
    public $Code;

    /**
     * @var string <p>错误信息</p>
     */
    public $Message;

    /**
     * @param string $TestName <p>检测步骤名称</p>
     * @param integer $Code <p>错误码</p>
     * @param string $Message <p>错误信息</p>
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
        if (array_key_exists("TestName",$param) and $param["TestName"] !== null) {
            $this->TestName = $param["TestName"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
