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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCRDesktopCode请求参数结构体
 *
 * @method integer getTortId() 获取xxx
 * @method void setTortId(integer $TortId) 设置xxx
 * @method string getDesktopCode() 获取xxx
 * @method void setDesktopCode(string $DesktopCode) 设置xxx
 */
class CreateCRDesktopCodeRequest extends AbstractModel
{
    /**
     * @var integer xxx
     */
    public $TortId;

    /**
     * @var string xxx
     */
    public $DesktopCode;

    /**
     * @param integer $TortId xxx
     * @param string $DesktopCode xxx
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
        if (array_key_exists("TortId",$param) and $param["TortId"] !== null) {
            $this->TortId = $param["TortId"];
        }

        if (array_key_exists("DesktopCode",$param) and $param["DesktopCode"] !== null) {
            $this->DesktopCode = $param["DesktopCode"];
        }
    }
}
