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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件变更内容
 *
 * @method string getUserName() 获取变更人
 * @method void setUserName(string $UserName) 设置变更人
 * @method string getMode() 获取变更的状态
 * @method void setMode(string $Mode) 设置变更的状态
 * @method integer getTimestamp() 获取时间戳
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ApiSecEventChange extends AbstractModel
{
    /**
     * @var string 变更人
     */
    public $UserName;

    /**
     * @var string 变更的状态
     */
    public $Mode;

    /**
     * @var integer 时间戳
     */
    public $Timestamp;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $UserName 变更人
     * @param string $Mode 变更的状态
     * @param integer $Timestamp 时间戳
     * @param string $Remark 备注
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
