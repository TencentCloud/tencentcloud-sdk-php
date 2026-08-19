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
 * 云资源配置检测检查类型统计
 *
 * @method string getCheckType() 获取<p>检查类型</p>
 * @method void setCheckType(string $CheckType) 设置<p>检查类型</p>
 * @method integer getCount() 获取<p>关联检查项数量</p>
 * @method void setCount(integer $Count) 设置<p>关联检查项数量</p>
 */
class ComplianceCheckTypeItem extends AbstractModel
{
    /**
     * @var string <p>检查类型</p>
     */
    public $CheckType;

    /**
     * @var integer <p>关联检查项数量</p>
     */
    public $Count;

    /**
     * @param string $CheckType <p>检查类型</p>
     * @param integer $Count <p>关联检查项数量</p>
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
        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
