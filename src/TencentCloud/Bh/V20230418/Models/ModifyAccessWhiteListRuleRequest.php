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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessWhiteListRule请求参数结构体
 *
 * @method integer getId() 获取白名单规则ID
 * @method void setId(integer $Id) 设置白名单规则ID
 * @method string getSource() 获取ip或网段信息，如10.10.10.1或10.10.10.0/24，最大长度40字节
 * @method void setSource(string $Source) 设置ip或网段信息，如10.10.10.1或10.10.10.0/24，最大长度40字节
 * @method string getRemark() 获取备注信息，最大长度64字符。
 * @method void setRemark(string $Remark) 设置备注信息，最大长度64字符。
 */
class ModifyAccessWhiteListRuleRequest extends AbstractModel
{
    /**
     * @var integer 白名单规则ID
     */
    public $Id;

    /**
     * @var string ip或网段信息，如10.10.10.1或10.10.10.0/24，最大长度40字节
     */
    public $Source;

    /**
     * @var string 备注信息，最大长度64字符。
     */
    public $Remark;

    /**
     * @param integer $Id 白名单规则ID
     * @param string $Source ip或网段信息，如10.10.10.1或10.10.10.0/24，最大长度40字节
     * @param string $Remark 备注信息，最大长度64字符。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
