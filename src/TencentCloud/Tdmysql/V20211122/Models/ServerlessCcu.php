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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * serverless实例的ccu规格
 *
 * @method integer getMinCcu() 获取<p>ccu最小值</p>
 * @method void setMinCcu(integer $MinCcu) 设置<p>ccu最小值</p>
 * @method array getMaxCcu() 获取<p>ccu最大值范围</p>
 * @method void setMaxCcu(array $MaxCcu) 设置<p>ccu最大值范围</p>
 */
class ServerlessCcu extends AbstractModel
{
    /**
     * @var integer <p>ccu最小值</p>
     */
    public $MinCcu;

    /**
     * @var array <p>ccu最大值范围</p>
     */
    public $MaxCcu;

    /**
     * @param integer $MinCcu <p>ccu最小值</p>
     * @param array $MaxCcu <p>ccu最大值范围</p>
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
        if (array_key_exists("MinCcu",$param) and $param["MinCcu"] !== null) {
            $this->MinCcu = $param["MinCcu"];
        }

        if (array_key_exists("MaxCcu",$param) and $param["MaxCcu"] !== null) {
            $this->MaxCcu = $param["MaxCcu"];
        }
    }
}
