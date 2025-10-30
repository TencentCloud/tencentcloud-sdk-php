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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 进程健康状态
 *
 * @method integer getCode() 获取运行正常
 * @method void setCode(integer $Code) 设置运行正常
 * @method string getText() 获取运行正常
 * @method void setText(string $Text) 设置运行正常
 * @method string getDesc() 获取运行正常
 * @method void setDesc(string $Desc) 设置运行正常
 */
class HealthStatus extends AbstractModel
{
    /**
     * @var integer 运行正常
     */
    public $Code;

    /**
     * @var string 运行正常
     */
    public $Text;

    /**
     * @var string 运行正常
     */
    public $Desc;

    /**
     * @param integer $Code 运行正常
     * @param string $Text 运行正常
     * @param string $Desc 运行正常
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
