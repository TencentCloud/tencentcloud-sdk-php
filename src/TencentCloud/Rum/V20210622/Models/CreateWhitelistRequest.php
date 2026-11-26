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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWhitelist请求参数结构体
 *
 * @method string getInstanceID() 获取<p>实例ID：taw-123</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID：taw-123</p>
 * @method string getRemark() 获取<p>备注（暂未作字节数限制）</p>
 * @method void setRemark(string $Remark) 设置<p>备注（暂未作字节数限制）</p>
 * @method string getWhitelistUin() 获取<p>uin：业务方标识</p>
 * @method void setWhitelistUin(string $WhitelistUin) 设置<p>uin：业务方标识</p>
 * @method string getAid() 获取<p>业务方标识</p>
 * @method void setAid(string $Aid) 设置<p>业务方标识</p>
 */
class CreateWhitelistRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID：taw-123</p>
     */
    public $InstanceID;

    /**
     * @var string <p>备注（暂未作字节数限制）</p>
     */
    public $Remark;

    /**
     * @var string <p>uin：业务方标识</p>
     */
    public $WhitelistUin;

    /**
     * @var string <p>业务方标识</p>
     */
    public $Aid;

    /**
     * @param string $InstanceID <p>实例ID：taw-123</p>
     * @param string $Remark <p>备注（暂未作字节数限制）</p>
     * @param string $WhitelistUin <p>uin：业务方标识</p>
     * @param string $Aid <p>业务方标识</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("WhitelistUin",$param) and $param["WhitelistUin"] !== null) {
            $this->WhitelistUin = $param["WhitelistUin"];
        }

        if (array_key_exists("Aid",$param) and $param["Aid"] !== null) {
            $this->Aid = $param["Aid"];
        }
    }
}
