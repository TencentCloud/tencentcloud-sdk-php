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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cos命令信息
 *
 * @method string getActionName() 获取接口名
 * @method void setActionName(string $ActionName) 设置接口名
 * @method string getActionNameCn() 获取接口中文名
 * @method void setActionNameCn(string $ActionNameCn) 设置接口中文名
 * @method string getActionDescription() 获取接口描述
 * @method void setActionDescription(string $ActionDescription) 设置接口描述
 */
class CosActionInfo extends AbstractModel
{
    /**
     * @var string 接口名
     */
    public $ActionName;

    /**
     * @var string 接口中文名
     */
    public $ActionNameCn;

    /**
     * @var string 接口描述
     */
    public $ActionDescription;

    /**
     * @param string $ActionName 接口名
     * @param string $ActionNameCn 接口中文名
     * @param string $ActionDescription 接口描述
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ActionNameCn",$param) and $param["ActionNameCn"] !== null) {
            $this->ActionNameCn = $param["ActionNameCn"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }
    }
}
