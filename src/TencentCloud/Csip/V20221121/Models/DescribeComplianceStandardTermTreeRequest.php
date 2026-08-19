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
 * DescribeComplianceStandardTermTree请求参数结构体
 *
 * @method integer getStandardID() 获取<p>合规规范ID</p>
 * @method void setStandardID(integer $StandardID) 设置<p>合规规范ID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getContentFilter() 获取<p>内容筛选场景</p>
 * @method void setContentFilter(string $ContentFilter) 设置<p>内容筛选场景</p>
 */
class DescribeComplianceStandardTermTreeRequest extends AbstractModel
{
    /**
     * @var integer <p>合规规范ID</p>
     */
    public $StandardID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>内容筛选场景</p>
     */
    public $ContentFilter;

    /**
     * @param integer $StandardID <p>合规规范ID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $ContentFilter <p>内容筛选场景</p>
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
        if (array_key_exists("StandardID",$param) and $param["StandardID"] !== null) {
            $this->StandardID = $param["StandardID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ContentFilter",$param) and $param["ContentFilter"] !== null) {
            $this->ContentFilter = $param["ContentFilter"];
        }
    }
}
