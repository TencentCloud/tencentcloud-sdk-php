<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getFileType() 获取账单类型，枚举值
billOverview=L0-PDF账单
billSummary=L1-汇总账单	
billResource=L2-资源账单	
billDetail=L3-明细账单	
billPack=账单包
 * @method void setFileType(string $FileType) 设置账单类型，枚举值
billOverview=L0-PDF账单
billSummary=L1-汇总账单	
billResource=L2-资源账单	
billDetail=L3-明细账单	
billPack=账单包
 * @method string getMonth() 获取账单月份
支持的最早开始月份为2021-01
L0-PDF&账单包不支持当月下载，当月账单请在次月1号19:00出账后下载
 * @method void setMonth(string $Month) 设置账单月份
支持的最早开始月份为2021-01
L0-PDF&账单包不支持当月下载，当月账单请在次月1号19:00出账后下载
 * @method array getChildUin() 获取下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN
 * @method void setChildUin(array $ChildUin) 设置下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN
 */
class DescribeBillDownloadUrlRequest extends AbstractModel
{
    /**
     * @var string 账单类型，枚举值
billOverview=L0-PDF账单
billSummary=L1-汇总账单	
billResource=L2-资源账单	
billDetail=L3-明细账单	
billPack=账单包
     */
    public $FileType;

    /**
     * @var string 账单月份
支持的最早开始月份为2021-01
L0-PDF&账单包不支持当月下载，当月账单请在次月1号19:00出账后下载
     */
    public $Month;

    /**
     * @var array 下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN
     */
    public $ChildUin;

    /**
     * @param string $FileType 账单类型，枚举值
billOverview=L0-PDF账单
billSummary=L1-汇总账单	
billResource=L2-资源账单	
billDetail=L3-明细账单	
billPack=账单包
     * @param string $Month 账单月份
支持的最早开始月份为2021-01
L0-PDF&账单包不支持当月下载，当月账单请在次月1号19:00出账后下载
     * @param array $ChildUin 下载的账号 ID列表，默认查询本账号账单，如集团管理账号需下载成员账号自付的账单，该字段需入参成员账号UIN
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
