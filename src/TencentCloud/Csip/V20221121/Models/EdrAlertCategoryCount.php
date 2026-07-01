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
 * EDR告警大类对应的告警数量
 *
 * @method string getAlertCategory() 获取<p>告警大类</p>
 * @method void setAlertCategory(string $AlertCategory) 设置<p>告警大类</p>
 * @method integer getCount() 获取<p>告警数量</p>
 * @method void setCount(integer $Count) 设置<p>告警数量</p>
 */
class EdrAlertCategoryCount extends AbstractModel
{
    /**
     * @var string <p>告警大类</p>
     */
    public $AlertCategory;

    /**
     * @var integer <p>告警数量</p>
     */
    public $Count;

    /**
     * @param string $AlertCategory <p>告警大类</p>
     * @param integer $Count <p>告警数量</p>
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
        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
