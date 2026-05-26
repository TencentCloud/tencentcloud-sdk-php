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
 * DescribeFlavorKingCycleBrandScanMetrics请求参数结构体
 *
 * @method integer getCorpId() 获取<p>CorpId</p>
 * @method void setCorpId(integer $CorpId) 设置<p>CorpId</p>
 * @method string getQueryDate() 获取<p>溯源ID</p>
 * @method void setQueryDate(string $QueryDate) 设置<p>溯源ID</p>
 */
class DescribeFlavorKingCycleBrandScanMetricsRequest extends AbstractModel
{
    /**
     * @var integer <p>CorpId</p>
     */
    public $CorpId;

    /**
     * @var string <p>溯源ID</p>
     */
    public $QueryDate;

    /**
     * @param integer $CorpId <p>CorpId</p>
     * @param string $QueryDate <p>溯源ID</p>
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
        }
    }
}
