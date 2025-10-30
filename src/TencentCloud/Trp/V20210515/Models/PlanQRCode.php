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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安心计划二维码
 *
 * @method string getUrl() 获取二维码
 * @method void setUrl(string $Url) 设置二维码
 * @method integer getStatus() 获取状态，0:未激活 1:已激活 2:已冻结
 * @method void setStatus(integer $Status) 设置状态，0:未激活 1:已激活 2:已冻结
 */
class PlanQRCode extends AbstractModel
{
    /**
     * @var string 二维码
     */
    public $Url;

    /**
     * @var integer 状态，0:未激活 1:已激活 2:已冻结
     */
    public $Status;

    /**
     * @param string $Url 二维码
     * @param integer $Status 状态，0:未激活 1:已激活 2:已冻结
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
