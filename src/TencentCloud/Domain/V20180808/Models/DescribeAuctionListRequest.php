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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuctionList请求参数结构体
 *
 * @method string getBusinessId() 获取业务ID
 * @method void setBusinessId(string $BusinessId) 设置业务ID
 * @method integer getLimit() 获取条数，默认10条
 * @method void setLimit(integer $Limit) 设置条数，默认10条
 * @method integer getOffSet() 获取偏移量
 * @method void setOffSet(integer $OffSet) 设置偏移量
 */
class DescribeAuctionListRequest extends AbstractModel
{
    /**
     * @var string 业务ID
     */
    public $BusinessId;

    /**
     * @var integer 条数，默认10条
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $OffSet;

    /**
     * @param string $BusinessId 业务ID
     * @param integer $Limit 条数，默认10条
     * @param integer $OffSet 偏移量
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
        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }
    }
}
