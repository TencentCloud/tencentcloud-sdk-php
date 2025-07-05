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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回配置的文件内容（key-value）
 *
 * @method string getKeyName() 获取key
 * @method void setKeyName(string $KeyName) 设置key
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getMessage() 获取备注
 * @method void setMessage(string $Message) 设置备注
 * @method integer getDisplay() 获取1-只读，2-可修改但不可删除，3-可删除
 * @method void setDisplay(integer $Display) 设置1-只读，2-可修改但不可删除，3-可删除
 * @method integer getSupportHotUpdate() 获取0不支持 1支持热更新
 * @method void setSupportHotUpdate(integer $SupportHotUpdate) 设置0不支持 1支持热更新
 */
class ConfigKeyValue extends AbstractModel
{
    /**
     * @var string key
     */
    public $KeyName;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string 备注
     */
    public $Message;

    /**
     * @var integer 1-只读，2-可修改但不可删除，3-可删除
     */
    public $Display;

    /**
     * @var integer 0不支持 1支持热更新
     */
    public $SupportHotUpdate;

    /**
     * @param string $KeyName key
     * @param string $Value 值
     * @param string $Message 备注
     * @param integer $Display 1-只读，2-可修改但不可删除，3-可删除
     * @param integer $SupportHotUpdate 0不支持 1支持热更新
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("SupportHotUpdate",$param) and $param["SupportHotUpdate"] !== null) {
            $this->SupportHotUpdate = $param["SupportHotUpdate"];
        }
    }
}
