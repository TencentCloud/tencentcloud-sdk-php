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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例违规详情。
 *
 * @method string getSource() 获取 来源：RESTRICT：封禁、FREEZW：冻结
 * @method void setSource(string $Source) 设置 来源：RESTRICT：封禁、FREEZW：冻结
 * @method string getState() 获取是否允许自助解封：1是，2否
 * @method void setState(string $State) 设置是否允许自助解封：1是，2否
 * @method string getReason() 获取违规类型
 * @method void setReason(string $Reason) 设置违规类型
 * @method string getContent() 获取违规内容（URL、关联域名）
 * @method void setContent(string $Content) 设置违规内容（URL、关联域名）
 */
class InstanceViolationDetail extends AbstractModel
{
    /**
     * @var string  来源：RESTRICT：封禁、FREEZW：冻结
     */
    public $Source;

    /**
     * @var string 是否允许自助解封：1是，2否
     */
    public $State;

    /**
     * @var string 违规类型
     */
    public $Reason;

    /**
     * @var string 违规内容（URL、关联域名）
     */
    public $Content;

    /**
     * @param string $Source  来源：RESTRICT：封禁、FREEZW：冻结
     * @param string $State 是否允许自助解封：1是，2否
     * @param string $Reason 违规类型
     * @param string $Content 违规内容（URL、关联域名）
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
