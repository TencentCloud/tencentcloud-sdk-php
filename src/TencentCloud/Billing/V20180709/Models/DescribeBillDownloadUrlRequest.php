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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillDownloadUrl请求参数结构体
 *
 * @method string getFileType() 获取<p>账单类型，枚举值<br>billOverview=L0-PDF账单<br>billSummary=L1-汇总账单<br>billResource=L2-资源账单<br>billDetail=L3-明细账单<br>billPack=账单包</p>
 * @method void setFileType(string $FileType) 设置<p>账单类型，枚举值<br>billOverview=L0-PDF账单<br>billSummary=L1-汇总账单<br>billResource=L2-资源账单<br>billDetail=L3-明细账单<br>billPack=账单包</p>
 * @method string getMonth() 获取<p>月份，格式为yyyy-mm，不能早于2021-01  示例值：2026-11</p>
 * @method void setMonth(string $Month) 设置<p>月份，格式为yyyy-mm，不能早于2021-01  示例值：2026-11</p>
 * @method array getChildUin() 获取<p>下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN</p>
 * @method void setChildUin(array $ChildUin) 设置<p>下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN</p>
 */
class DescribeBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string <p>账单类型，枚举值<br>billOverview=L0-PDF账单<br>billSummary=L1-汇总账单<br>billResource=L2-资源账单<br>billDetail=L3-明细账单<br>billPack=账单包</p>
     */
    public $FileType;

    /**
     * @var string <p>月份，格式为yyyy-mm，不能早于2021-01  示例值：2026-11</p>
     */
    public $Month;

    /**
     * @var array <p>下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN</p>
     */
    public $ChildUin;

    /**
     * @param string $FileType <p>账单类型，枚举值<br>billOverview=L0-PDF账单<br>billSummary=L1-汇总账单<br>billResource=L2-资源账单<br>billDetail=L3-明细账单<br>billPack=账单包</p>
     * @param string $Month <p>月份，格式为yyyy-mm，不能早于2021-01  示例值：2026-11</p>
     * @param array $ChildUin <p>下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN</p>
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("ChildUin",$param) and $param["ChildUin"] !== null) {
            $this->ChildUin = $param["ChildUin"];
        }
    }
}
