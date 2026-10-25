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
 * DeleteTDEMFieldTransformRule请求参数结构体
 *
 * @method integer getId() 获取<p>规则 ID（必填）</p>
 * @method void setId(integer $Id) 设置<p>规则 ID（必填）</p>
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 */
class DeleteTDEMFieldTransformRuleRequest extends AbstractModel
{
    /**
     * @var integer <p>规则 ID（必填）</p>
     */
    public $Id;

    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @param integer $Id <p>规则 ID（必填）</p>
     * @param string $AppId <p>应用 ID（必填）</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
