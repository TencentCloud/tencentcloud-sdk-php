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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 围笼
 *
 * @method string getCageName() 获取围笼名称
 * @method void setCageName(string $CageName) 设置围笼名称
 * @method array getCheckerSet() 获取围笼审核人账号ID
 * @method void setCheckerSet(array $CheckerSet) 设置围笼审核人账号ID
 */
class Cage extends AbstractModel
{
    /**
     * @var string 围笼名称
     */
    public $CageName;

    /**
     * @var array 围笼审核人账号ID
     */
    public $CheckerSet;

    /**
     * @param string $CageName 围笼名称
     * @param array $CheckerSet 围笼审核人账号ID
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
        if (array_key_exists("CageName",$param) and $param["CageName"] !== null) {
            $this->CageName = $param["CageName"];
        }

        if (array_key_exists("CheckerSet",$param) and $param["CheckerSet"] !== null) {
            $this->CheckerSet = $param["CheckerSet"];
        }
    }
}
