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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 失败账号信息
 *
 * @method integer getTargetUin() 获取<p>下发失败的成员账号 UIN</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>下发失败的成员账号 UIN</p>
 * @method string getTargetName() 获取<p>下发失败的成员账号名</p>
 * @method void setTargetName(string $TargetName) 设置<p>下发失败的成员账号名</p>
 */
class FailedAccount extends AbstractModel
{
    /**
     * @var integer <p>下发失败的成员账号 UIN</p>
     */
    public $TargetUin;

    /**
     * @var string <p>下发失败的成员账号名</p>
     */
    public $TargetName;

    /**
     * @param integer $TargetUin <p>下发失败的成员账号 UIN</p>
     * @param string $TargetName <p>下发失败的成员账号名</p>
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }
    }
}
