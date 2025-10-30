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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源负载概况
 *
 * @method array getCounts() 获取负载量数组，依次为：
[
0%或未知数量，
0%～20%，
20%～50%，
50%～80%，
80%～100%
]
 * @method void setCounts(array $Counts) 设置负载量数组，依次为：
[
0%或未知数量，
0%～20%，
20%～50%，
50%～80%，
80%～100%
]
 * @method array getTop5() 获取负载Top5
 * @method void setTop5(array $Top5) 设置负载Top5
 */
class AssetLoadSummary extends AbstractModel
{
    /**
     * @var array 负载量数组，依次为：
[
0%或未知数量，
0%～20%，
20%～50%，
50%～80%，
80%～100%
]
     */
    public $Counts;

    /**
     * @var array 负载Top5
     */
    public $Top5;

    /**
     * @param array $Counts 负载量数组，依次为：
[
0%或未知数量，
0%～20%，
20%～50%，
50%～80%，
80%～100%
]
     * @param array $Top5 负载Top5
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
        if (array_key_exists("Counts",$param) and $param["Counts"] !== null) {
            $this->Counts = $param["Counts"];
        }

        if (array_key_exists("Top5",$param) and $param["Top5"] !== null) {
            $this->Top5 = [];
            foreach ($param["Top5"] as $key => $value){
                $obj = new AssetLoadDetail();
                $obj->deserialize($value);
                array_push($this->Top5, $obj);
            }
        }
    }
}
